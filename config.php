<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "upload_system_fild";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/complete_upload_and_download_system/"; // Website url

?>