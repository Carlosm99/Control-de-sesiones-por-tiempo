<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
//header("location:login.php");
exit;
}
// if (!isset($_SESSION['Username'])){
//     header("Location: login.php"); 
// }
?>
</body>
</html>






