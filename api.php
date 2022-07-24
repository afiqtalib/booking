<?php
include '../bbs/connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $sql = "SELECT s.slot_id, s.time_slot from slots s
        where s.slot_id  not in
        (select b.slot_id 
        FROM bookings b
        where b.book_date =?
        and b.barber_id =? )";
        $getslot = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($getslot, 'si', $_GET["date"], $_GET["barber"]);
        if(!mysqli_stmt_execute($getslot)){
            die();
        }
        $result = mysqli_stmt_get_result($getslot);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)){
            array_push($data, ["value"=> $row["slot_id"], "display"=> $row["time_slot"]]);
        }
        echo json_encode($data);
    }
?>