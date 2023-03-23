<?php
session_start();
$prinID="hello";
$prinPWD="1234";
$teachID="bye";
$teachPWD="5678";
$stuID="lazy";
$stuPWD="1111";


$pid=$_POST["id"];
$ppwd=$_POST["pwd"];
$tid=$_POST["id"];
$tpwd=$_POST["pwd"];
$sid=$_POST["id"];
$spwd=$_POST["pwd"];


if(($prinID==$pid)&&($prinPWD==$ppwd)){
    $_SESSION["login"]="prin";
    header("Location:prin.php");
} 
elseif(($teachID==$tid)&&($teachPWD==$tpwd)){
    $_SESSION["login"]="teach";
    header("Location:teach.php");
}
elseif(($stuID==$sid)&&($stuPWD==$spwd)){
    $_SESSION["login"]="stu";
    header("Location:stu.php");
}
else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
}
?>