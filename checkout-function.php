<?php
session_start();
if(isset($_SESSION['uservalid']) && $_SESSION['uservalid'] === "yes") {
	echo 'you are logged in and have done a checkout';
} else {
	echo 'you are not logged in and I hate you';
}
