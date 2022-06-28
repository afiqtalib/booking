<?php 
        include 'connect.php';
        include 'Includes/functions/functions.php'; 

$sql = "SELECT COUNT(book_id) as count FROM bookings WHERE status='completed'";
                                     $result =mysqli_query($conn, $sql);
                                    
                                      while($row = mysqli_fetch_assoc($result)){
                                        echo $row["count"];
                                      }
                                        echo "ffff ";
                                      echo "v ";
                                      //   $countrow = mysqli_num_rows($result);
                                      //echo $countrow;
                                      // echo countcolumn("service_id","services");
                                      ?>
                                      <!-- <?php echo countcolumn("service_id","services")?> -->

                                      <? 
                                        $sql = "SELECT COUNT(book_id) as count FROM bookings WHERE status IN ('completed','cancel')";
                                        $result =mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                            echo $row["count"];
                                      }
                                      ?>