<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
#top{
    text-align:center;
}
</style>
</head>

<body>
<hr />
<p>
<?php
require("dbconnect.php");
$id=mysqli_real_escape_string($conn,$_POST['id']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);

if($id != null && $pwd != null && $name != null && $email != null){
if ($id) {
    $sql = "insert into player (id, pwd, name, email,money) values ('$id', '$pwd', '$name', '$email','9000');";
    mysqli_query($conn,$sql) or die(mysqli_error($conn)); //執行SQL
    echo "加入會員成功";
    header("Refresh:0.5; url=index.php");
} else {
    echo "加入會員失敗";
}
}
else{
    echo 'error!';
    header("Refresh:2.5; url=index.php");
}
?>
</p>
</body>
</html>
