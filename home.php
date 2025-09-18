<?php
require_once("ad_db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(isset( $_REQUEST["btnSubmit"])){
    $name=$_REQUEST["usename"];
    $name=$_REQUEST["password"];
    $name=$_REQUEST["email"];
    $name=$_REQUEST["hoten"];
    $conn=ad_db();
if($con) {
$sql="INSERT INTO quan_tri_vien (ten_dang_nhap,mat_khau,email,ho_ten) VALUES";
$sql.= "('".$name."','".$pass."','".$email."','".$hoten."')";
if(mysqli_query(mysql:$conn,query:$sql)) {
    echo "Thêm Dữ liệu thành công";
      } else { echo"lỗi thực thi:$sql<br>".mysqli_error(mysql:$con);
      }

   }

}
}
?>