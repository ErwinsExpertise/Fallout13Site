<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Create Post</title>


</head>
<body>

 <?php
require '../config.php';

$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_error) {
  echo('Error connecting to database');
}

  if(isset($_POST['save']))
{
    $timestamp = date('d-m-Y');
    $author = $_POST["author"];
    $post = $_POST["post"];
    $sql = "INSERT INTO posts (id, author, post, dateposted) VALUES (0, '$author', '$post', '$timestamp')";
    $mysqli->query($sql);
    echo $timestamp;
}
$mysqli->close();
?>

<form action="post.php" method="post">
<label id="author"> Author:</label><br/>
<input type="text" name="author"><br/>

<label id="post">Post:</label><br/>
<textarea name="post" id = "post" rows = "40" cols = "100"></textarea>
<br>
<button type="submit" name="save">Post!</button>

</form>

</body>
</html>
