<?php
function ad_db():bool|mysqli{
$host="localhost";
$user= "root";
$pass= "";
$dbname= "my_db";
$conn=mysqli_connect($host,$user,$pass,$dbname);    
if(!$conn){
    die("kiết nối csdl thất bại: ".mysqli_connect_error());

}
mysqli_select_db( $conn, $dbname );
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
    die("kết nối csdl thành công".mysqli_connect_error());
}
return $conn;
}
?>