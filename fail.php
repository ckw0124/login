<?php ob_start();
?>
<?php
session_start();
if($_SESSION["login"]=="No"){

}else{
    header("Location:error.php");
}
?>

<html>
<head>
<meta charset="utf-8">
</head>
<body>
登入失敗!<br/>
網頁將在三秒後跳轉至登入頁面或<a href="index.php">點選這裡</a>

<?php
header("Refresh:3;url=index.php")
?>
</body>
</html>
<?php ob_flush();
?>