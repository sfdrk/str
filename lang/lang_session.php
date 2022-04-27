<?php
session_start();
$language = "";
$key = "";
$val = "";

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
  $_SESSION['lang'] = $_GET['lang'];

  if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
    echo "<script type='text/javascript'> location.reload(); </script>";
  }
}

// Include Language file


foreach ($_SESSION as $key=>$val)

  $language = $key."=".$val;

if ($key==null && $val==null){
  include('en.php');
}else if ($language=="lang=en"){
  include('en.php');
}else if ($language=="lang=ru"){
  include('ru.php');
}else if ($language=="lang=jp"){
  include('jp.php');
}else if ($language=="lang=cn"){
  include('cn.php');
}else if ($language=="lang=in"){
  include('in.php');
}else if ($language=="lang=kr"){
  include('kr.php');
}else{
    include('en.php');
}


?>

