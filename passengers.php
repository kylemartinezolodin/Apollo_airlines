<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/commons.css">
        <link rel="stylesheet" href="css/forms.css">
        <script src="jaba.js"></script>
        <!-- <?php
            echo $_POST["departure_t"];
            echo $_POST["departure_d"];
            echo $_POST["from"];
            echo $_POST["destination"];
            echo $_POST["book_count"];
            echo $_GET["planeid"];
        ?> -->
    </head>
    <body>
        <!-- <div style="overflow: auto; margin: 2vw 4vw;"> -->
        <div style="margin: 2vw 4vw;">
            <!-- BOOKING CSS -->
            <br>
            <br>
            <br>

            <form action="" method="post" id="formwew">
                <input type="hidden" name="departure_t" value="<?php echo $_POST["departure_t"]?>">
                <input type="hidden" name="departure_d" value="<?php echo $_POST["departure_d"]?>">
                <input type="hidden" name="from" value="<?php echo $_POST["from"]?>">
                <input type="hidden" name="destination" value="<?php echo $_POST["destination"]?>">
                <input type="hidden" name="plane_id" value="<?php echo $_GET["planeid"]?>">
                
            

            <?php
                for($i = 0; $i < $_POST["book_count"]; $i++){
            ?>
                
                <!-- <input type="submit" value="wew" formaction="book.php" formtarget="framename<?php echo $i?>"> -->
                <div class="iframe-container">
                        <!-- <iframe src="book.html" frameborder="0" name="frame"></iframe> -->
                        <iframe src="book.php" id="frame<?php echo $i?>" onload="resizeIFrame(<?php echo $i?>)"  name="framename<?php echo $i?>"></iframe>
                </div>
                <script>noBtnSubmit(<?php echo $i?>)</script>
            <?php
                }
            ?>
            </form>

            <!-- 
                <div class="form_container">
                    <button onclick="wew()" class="passenger_btn"> &emsp; Passenger 1</button>
                    
                <div id="toggled_dropdown" class="dropdown_content" tabindex="1">
                    <p class="instructions">FILL IN NECESSARY INFORMATION:</p>
                    <form method="post" action="">
                        <div class="division_container">
                            <div class="half_container">
                                <div class="division_container">
                                    <input type="text" id="passFirstName" name="passFirstName" placeholder="First Name">
                                    <input type="text" id="passLastName" name="passLastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="half_container">
                                <label class="" for="ageRagne">AGE RANGE:</label> &emsp;&emsp;
                
                                <select id="ageRagne" name="ageRange">
                                    <option value="0">Adult (12+ years)</option>
                                    <option value="1">Child (2-11 years)</option>
                                    <option value="2">Infant (ubder 2 years)</option>
                                </select>
                            </div>
                        </div>
                        <div class="division_container">
                            <label for="datetime_depart">Departure:</label>
                            <br>
                            <input type="date" id="datetime_depart" name="departure">
                        </div>
                        <div>
                            <input type="submit" name="book-btn" value="Book">  
                        </div>
                    </form>
                </div>
             -->
            </div>
        </div>  
    </body>
</html>