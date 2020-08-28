<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="css/commons.css">
        <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="css/booking.css">
        <script src="jaba.js"></script>
    </head>
    <body>
        <div class="header_container">
            <!-- <div class="brand_container">
                <a class="brand_name" href="welcome.html">APOLLO</a>    
            </div> -->

            <div class="brand_container">
                <a class="brand_name" href="index.php">APOLLO</a>
                <div class="brande">
                    Airlines
                </div> 
            </div>
        </div>
        
        <div class="body_container">
            <div class="aesth_container">
                <!-- <div class="background_img">
                    <img src="asset/space.jpg" style="width: 100vw; height: auto; margin-left: -55%;">
                </div> -->
                <p class="tagline">"ONE SMALL TICKET,<br> IS ONE GIANT LEAP OF ADVENTURE"</p>
            </div>
            
            <div class="interface">

                    <!-- <ul class="test">
                        <li class="current_li"><a class="current_a" href="welcome.html">BOOK A FLIGHT</a></li>
                        <li class="def"><a class="navigation_middle" href="search.html">SEARCH A FLIGHT</a></li>
                        <li class="def"><a class="navigation" href="status.html">CHECK FLIGHT STATUS</a></li>
                    </ul> -->

                    <!-- navigation -->
                    <div class="interface_navigator_container">
                        <ul class="navigation_list">
                            <li class="navigation_link_container"><a class="navigation_link" href="search.php" target="frame" name="mid">SEARCH A FLIGHT</a></li>
                            <li class="navigation_link_container" ><a class="navigation_link" href="book.php" target="frame" name="left">BOOK A FLIGHT</a></li>
                            <li class="navigation_link_container"><a class="navigation_link" href="check.php" target="frame" name="right">CHECK FLIGHT STATUS</a></li>
                        </ul>
                    </div>
                    
                    <!-- BOOKING CSS -->
                    <!-- <div class="booking_container">
                        <div class="center">
                            <h2 class="form">FILL IN NECESSARY INFORMATION:</h2>
                            <form>
                                <div class="division_container">
                                    <div class="half_left">
                                        <div class="division_container" style="margin-bottom: 3%;">
                                            <input type="text" id="passFirstName" name="passFirstName" placeholder="First Name">
                                            <input type="text" id="passLastName" name="passLastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="division_container">

                                            <label class="" for="ageRagne">AGE RANGE:</label> &emsp;&emsp;
                            
                                            <select id="ageRagne" name="ageRagne">
                                                <option value="adult">Adult (12+ years)</option>
                                                <option value="child">Child (2-11 years)</option>
                                                <option value="infant">Infant (ubder 2 years)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="division_container">
                                    <label for="datetime_depart">Departure:</label>
                                    <br>
                                    <input type="date" id="datetime_depart" name="departure">
                                </div>
                                <div>
                                    <button type="submit" name="book-btn">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>  -->

                    <!-- <iframe target="meow.html"  height="200" width="300" frameborder="1" name="frame"></iframe> -->
                    <!-- <iframe class="responsive" src="book.html" frameborder="0" name="frame"></iframe> -->
                    <!-- <iframe src="book.html" ></iframe> -->

                    <div class="iframe-container">
                        <!-- <iframe src="book.html" frameborder="0" name="frame"></iframe> -->
                        <iframe src="search.php" id="frame0" onload="resizeIFrame(0)"  name="frame"></iframe>
                    </div>

            </div>

        </div>
                
        <div class="footer">

            <!-- <iframe src=   "http:///www.google.com"  height="200" width="300" frameborder="0" name="frame"></iframe> -->
            <!-- <p class="tagline">A one small ticket, is one giant leap of adventure</p> -->
        </div>
        <script>
            // window.onscroll = function() {scrollFunction()};
            
            // function scrollFunction() {
            //     if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            //         document.getElementsById("wew").style.display = "hidden";

            //         // document.getElementsByClassName("logo").style.fontSize = "25px";
            //     } else {
            //         document.getElementsById("wew").style.margin = "auto";
            //         // document.getElementsByClassName("navbar").style.padding = "80px 10px";
            //         // document.getElementsByClassName("logo").style.fontSize = "35px";
            //     }
            // }
            
            // iframe fit to content js
            // $('iframe').load(function() {
            //     setTimeout(iResize, 50);
            //     // Safari and Opera need a kick-start.
            //     var iSource = document.getElementById('wew').src;
            //     document.getElementById('wew').src = '';
            //     document.getElementById('wew').src = iSource;
            // });
            // function iResize() {
            //     document.getElementById('wew').style.height = 
            //     document.getElementById('wew').contentWindow.document.body.offsetHeight + 'px';
            // }
            

        </script>
    </body>

</html>