<?php
    $con = mysqli_connect("localhost", "root", "", "Apollo_Airlines") or die("Error in Connection");
    $sql = "select `code_id`, `name` from airport where 1";
    $result = mysqli_query($con, $sql);
    $display = '';
    // $row = mysqli_fetch_array($result);
    // print_r($row);
    while($row = mysqli_fetch_array($result)){
        $display .= "<option id='" .$row[0] ."' value='" .$row[0] ."' style='display: hidden;'>" .$row[1] ."</option>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/forms.css">
        <script src="jaba.js"></script>
    </head>
    <body>
    
                            
        <div style="overflow: auto; margin: 2vw 4vw;">
            <!-- BOOKING CSS -->
            <div class="booking_container">
                <p class="instructions">FILL IN FLIGHT INFORMATION:</p>
                <!-- <form method="post" action="list.php"> -->
                <form method="post" action="list.php" name="search" onsubmit="return check()">
                    <div class="division_container">
                        <div class="half_container">
                        <label class="" for="from" style="margin: 0vw 2vw;">FROM:</label>
            
                        <select name="from">
                            <?php 
                                if(isset($display)){
                                    echo $display;
                                }
                            ?>
                        </select>
                        </div>
                        <div class="half_container">
                            <label class="" for="destination" style="margin: 0vw 2vw;">DESTINATION:</label>
            
                            <select name="destination" selected= "2">
                            <?php 
                                if(isset($display)){
                                    echo $display;
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="division_container">
                        <div class="half_container">
                            <fieldset class="datetime">
                                <legend>Departure: </legend>
                                <label class="inFieldset" for="date_depart">Date:</label>
                                <input type="date" name="departure_d"  id="Dpt_d">
                                <br><br>
                                <label class="inFieldset" for="time_depart">Time:</label>
                                <input type="time" name="departure_t"  id="Dpt_t">
                                <!-- <p id='wew'></p> -->
                                <script>
                                    //setDepartment();
                                    setAll();
                                </script>
                            </fieldset>

                            <select name="wew" id="aw">
                                <option value="q">q</option>
                                <option value="w">w</option>
                                <option value="s" selected="">s</option>
                            </select>
                        </div>
                         <!--
                        <div class="half_container">
                            <fieldset class="datetime">
                                <legend>Arrival</legend>
                                <label class="inFieldset" for="date_arrival">Date:</label>
                                <input type="date" name="arrival_d">
                                <br><br>
                                <label class="inFieldset" for="time_arrival">Time:</label>
                                <input type="time" name="arrival_t">
                            </fieldset>
                        </div>
                        -->
                    </div>
                    <div class="division_container">
                        <label for="booking_count"></label>
                            <input type="number" name="book_count" value="1" min="1" max="10">
                            <span class="numSuffix" style="margin-left: -14.75vw;">passenger/s </span>
                    </div>
                    <div>
                        <input type="submit" name="book-btn" value="search">
                    </div>
                </form>
            </div>   
        </div>
    </body>
    <script src="jaba.js">
    
        // var time = new Date().getHours().toString();
        // time = time.concat(':',new Date().getMinutes().toString());
        // // document.getElementById('wew').innerHTML = time;
        // document.getElementsByName('arrival_t').valueAsDate = time;

        // var time = new Date("October 3, 2014 11:13:00");
        // document.getElementById('wew').innerHTML = time.getDay();

                // Sets date on department
        // var dayOffset = (time.getDay() + 3) % 30;

    </script>
</html>

<?php
    if(isset($_POST['book-btn'])){
        if($_POST['arrival_t'] == null)
            // echo "error";

        $arrive_d = $_POST['arrival_t'];

        // echo $arrive_d;
        $sql = "select * from plane where arrival_t >= convert(datetime, '2010-04-01 00:00:00')";
        
        
    }
?>