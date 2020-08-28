<?php
    $con = mysqli_connect("localhost", "root", "", "Apollo_Airlines") or die("Error in Connection");
    
    // $sql = "select * from plane where departure_t >= '{$_POST['departure_d']} {$_POST['departure_t']}'  and  arrival_t <= '{$_POST['arrival_d']} {$_POST['arrival_t']}' ";
    $sql = "select * from plane where departure_t = '{$_POST['departure_d']} {$_POST['departure_t']}' ";

    $result = mysqli_query($con, $sql);
    $display ='';
    //$row = mysqli_fetch_array($result);
    //echo implode($row); // implode() converts array obj to string
    
    /* V.2 */ /* Maam Tulin style of scripting dynamics*/
    /*
    while($row = mysqli_fetch_array($result)){
        
        $display .= "
            <div class='list_item'>
                <div class='image_container'>
                    <div class='blank_image'></div>
                </div>
                <div class='id_container'>" .$row['Plane_id'] ."</div>
                <div class='departure_container'>
                    2020-03-04 <br> 07:00 AM
                </div>
                <div class='arrival_container'>
                    2020-03-07 <br> 07:00 AM
                </div>
                <div class='status_container'>
                    18/30
                </div>
                <div class='btn_container'>
                    <input  type='submit' id='111' name='book-btn' value='BOOK' formaction='passengers.php?planeid=" .$row['Plane_id'] ."'>
                </div>
            </div>
            ";
    }
    */

    /* V.1 */
    /*
    while($row = mysqli_fetch_array($result)){
        $display .= "
            <form action='book.php?planeid=" .$row['Plane_id'] ."' method='post'>
                <div class='list_item'>
                    <div class='image_container'>
                        <div class='blank_image'></div>
                    </div>
                    <div class='id_container'>" .$row['Plane_id'] ."</div>
                    <div class='departure_container'>
                        2020-03-04 <br> 07:00 AM
                    </div>
                    <div class='arrival_container'>
                        2020-03-07 <br> 07:00 AM
                    </div>
                    <div class='status_container'>
                        18/30
                    </div>
                    <div class='btn_container'>
                        <input  type='submit' id='111' name='book-btn' value='BOOK'>
                    </div>
                </div>
            </form>
            ";
    }
    */
    
?>

<html>
    <head>
        <link rel="stylesheet" href="css/commons.css">
        <link rel="stylesheet" href="css/list.css">
        <script src="jaba.js"></script>
    </head>
    
    <body>
        <form id="theForm" action="passengers.php" method="post">
        
            <div class="list_container">
                <!-- Part of V.2 -->
                <!-- <?php echo $display;?> -->

                <!-- V.3 -->
                <!-- You learned this style of scripting from https://phppot.com/php/simple-php-shopping-cart/ -->
                <?php 
                    while($row = mysqli_fetch_array($result)){ 
                ?>
                    <div class='list_item'>
                        <div class='image_container'>
                            <div class='blank_image'></div>
                        </div>
                        <div class='id_container'> <?php echo $row['Plane_id']?></div>
                        <div class='departure_container'>
                            2020-03-04 <br> 07:00 AM
                        </div>
                        <div class='arrival_container'>
                            2020-03-07 <br> 07:00 AM
                        </div>
                        <div class='status_container'>
                            18/30
                        </div>
                        <div class='btn_container'>
                            <!-- You learned the "formaction" attribute from  https://css-tricks.com/separate-form-submit-buttons-go-different-urls/ -->
                            <input  type='submit' id='111' name='book-btn' value='BOOK' formaction="passengers.php?planeid= <?php echo $row['Plane_id']?>">
                        </div>
                    </div>
                <?php
                    }
                ?>
                <!--
                <div class="list_item">
                    <div class="image_container">
                        <div class="blank_image"></div>
                    </div>
                    <div class="id_container"> 132 </div>
                    <div class="departure_container">
                        2020-03-04 <br> 07:00 AM
                    </div>
                    <div class="arrival_container">
                        2020-03-07 <br> 07:00 AM
                    </div>
                    <div class="status_container">
                        18/30
                    </div>
                    <div class="btn_container">
                        <input  type="submit" id="111" name="book-btn" value="BOOK" onclick="document.getElementById('target_plane').value = this.id">
                    </div>
                </div>
                <div class="list_item">
                    <div class="image_container">
                        <div class="blank_image"></div>
                    </div>
                    <div class="id_container"> 132 </div>
                    <div class="departure_container">
                        2020-03-04 <br> 07:00 AM
                    </div>
                    <div class="arrival_container">
                        2020-03-07 <br> 07:00 AM
                    </div>
                    <div class="status_container">
                        18/30
                    </div>
                    <div class="btn_container">
                        <input  type="submit" id="111" name="book-btn" value="BOOK" onclick="document.getElementById('target_plane').value = this.id">
                    </div>
                </div>
                -->
                
            </div>
            <input type="hidden" id="target_time" name="departure_t" value="<?php echo $_POST['departure_t']?>"/>
            <input type="hidden" id="target_date" name="departure_d" value="<?php echo $_POST['departure_d']?>"/>
            <input type="hidden" id="target_airport" name="from" value="<?php echo $_POST['from']?>"/>
            <input type="hidden" id="source_airport" name="destination" value="<?php echo $_POST['destination']?>"/>
            <input type="hidden" id="booking_count" name="book_count" value="<?php echo $_POST['book_count']?>"/>
        </form>
        
        <table>
            
        </table>
    </body>    
</html>