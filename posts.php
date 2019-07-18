<?php
require 'config.php';

$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_error) {
  echo('Error connecting to database');
}
$sql = "SELECT * FROM posts";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="card text-left bg-secondary" style="max-width: 100%; color: #1bff1f; padding-left: 10px; padding-right: 10px; padding-bottom: 15px; border-radius: 5px; word-wrap: break-word;">Posted By: ' . $row["author"]. '<div class="text-right">Date: ' . date("d-m-y",$row["dateposted"]) .'</div><hr> <div class="card-body text-left" style="max-width: 100%; background-color: black; border-radius: 15px; word-wrap: break-word;"> <p>' . $row["post"]. '</div></div><hr>';
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>
