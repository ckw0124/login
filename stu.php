<?php
session_start();
if($_SESSION["login"]=="stu"){

}else{
    header("Location:fail.php");
}

?>
<html>
<head> 
<meta charset="utf-8">
</head>
<body>
學生歡迎回來
<a href="logout.php">Logout</a>
</body>
</html>