<?php ob_start();
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
非法入侵此網頁，再不回登入頁面將罰你罰站30秒。<br/>
網頁將在三秒後跳轉至登入頁面或<a href="index.php">點選這裡</a>
<?php
header("Refresh:3;url=index.php")
?>
</body>
</html>
<?php ob_flush();
?>