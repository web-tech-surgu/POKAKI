<?php
    require 'dbconnect.php';
    require 'auth.php';
    require 'header.php';
    require 'menu.php';
    echo '<main role="main" class="container">';

    if ($err_msg) require 'message.php';

    switch ($_GET["C"]) {
        case "1": {
            if(isset($_SESSION['username'])) {

                switch ($_GET["A"]) {
                    case "1":
                        require("add_booking.php");break;
                    case "2":
                        require("del_book.php");break;
                }
            }
            if ($err_msg) require 'message.php';
            require("booking.php");
            if(isset($_SESSION['username'])) require("booking_form.php");
        } break;
		case "3": {
            /*if(isset($_SESSION['username'])) {

                switch ($_GET["A"]) {
                    case "1":
                        require("add_part.php");break;
                    case "2":
                        require("del_part.php");break;
                }
            }*/
            /*if ($err_msg) require 'message.php';*/
            require("parts.php");
            /*if(isset($_SESSION['username'])) require("part_form.php");*/
        } break;
		  case "2": {
            /*if(isset($_SESSION['username'])) {

                switch ($_GET["A"]) {
                    case "1":
                        require("add_part.php");break;
                    case "2":
                        require("del_part.php");break;
                }
            }*/
            /*if ($err_msg) require 'message.php';*/
            require("life.php");
            /*if(isset($_SESSION['username'])) require("part_form.php");*/
        } break;
		case "4": {
            /*if(isset($_SESSION['username'])) {

                switch ($_GET["A"]) {
                    case "1":
                        require("add_part.php");break;
                    case "2":
                        require("del_part.php");break;
                }
            }*/
            if ($err_msg) require 'message.php';
            require("rooms.php");
            /*if(isset($_SESSION['username'])) require("part_form.php");*/
        } break;
        /*case "4": {
            if(isset($_SESSION['username'])) {
                switch ($_GET["A"]) {
                    case "1":
                        require("add_supply.php");break;
                    case "2":
                        require("del_supply.php");break;
                }
            }
            if ($err_msg) require 'message.php';
            require("supply.php");
            if(isset($_SESSION['username'])) require("supply_form.php");
        } break;*/
    }
    echo '</main>';
    require 'footer.php';
?>
