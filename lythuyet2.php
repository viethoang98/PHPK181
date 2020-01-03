<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// //SESSION trong PHP: là 1 phiên làm việc của người dùng trên website
// // 1 session bằng 1 tài khoản người dùng
// session_start(); // luôn luôn phải khai báo
// $_SESSION['name']=gia_tri; // cú pháp thực thi
// // Hủy session:
// // cách 1: session_unset(); xóa bỏ tất cả các SESSION sinh ra trong cùng phiên với SESSION bị chọn xóa bỏ
// // cách 2: unset(name); xóa bỏ từng session đơn lẻ
// // cách 3: session_destroy(); xóa bỏ tất cả các session tồn tại
// session_start();
// if (isset($_POST['sbm'])) {
//     $_SESSION['ho_ten'] = $_POST['ho_ten'];
// }
// if (isset($_SESSION['ho_ten'])) {
//     echo $_SESSION['ho_ten'];
// }


// Hàm chuyển hướng và báo lỗi:
//* Chuyển hướng
//header('location: admin.php');
//* Báo lỗi
//die('bạn không có quyền truy cập file');


// Hằng:
// define('PI', 'xin chào vietpro');
//   echo PI;
// if (defined('PI')) {
//     echo 'abc';
// }





?>
<!-- <form action="" method="POST">
<input type="text" name="ho_ten" >
<input type="submit" name="sbm" >
</form> -->
</body>
</html>