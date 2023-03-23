<?php
session_start();
if($_SESSION["login"]=="prin"){

}else{
    header("Location:fail.php");
}

?>
<html>
<head> 
<meta charset="utf-8">
</head>
<body>
校長歡迎回來
<a href="logout.php">Logout</a>
</body>
</html>