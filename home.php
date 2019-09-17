<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link
      href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
<body>
    <div class="container-box">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome    <?php echo $_SESSION['username']; ?> ! </h1>
    </div> 
</body>
</html>