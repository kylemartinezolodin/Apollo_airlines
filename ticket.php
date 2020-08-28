<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="ticket_container">
            <?php
                echo $_POST["first_name"] ."\n";
                echo $_POST["last_name"] ."\n";
                echo $_POST["age_range"] ."\n";
                echo $_POST["departure_t"] ."\n";
                echo $_POST["departure_d"] ."\n";
                echo $_POST["from"] ."\n";
                echo $_POST["destination"] ."\n";
                echo $_POST["plane_id"] ."\n";
            ?>
        </div>
    </body>
</html>