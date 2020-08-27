<?php
header("Content-type:text/html;charset=utf-8");

$phNum = $_REQUEST['phNum'];
$email_ = $_REQUEST['email_'];
$pwd = $_REQUEST['pwd'];

// echo $phNum;
$conn = mysql_connect("localhost","root","root");
// if($conn){
//     echo "连接成功";
// }else{
//     echo "失败";
// }
mysql_select_db("2004");
$result = mysql_query("select * from user where userPhone='$phNum'",$conn);
if(mysql_num_rows($result)==1){
   echo 0;
}else if(mysql_num_rows($result)==0){
    mysql_query("insert into user values(null,null,null,' ',$phNum)",$conn);
   echo 1;
}


mysql_close($conn);








?>