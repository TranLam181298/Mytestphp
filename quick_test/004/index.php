<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1. Viết ra 1 chương trình php in ra địa chỉ ip của bạn ?</h1>

<?php
//Kiểm tra xem ip có phải là từ share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//Kiểm tra xem ip có phải là từ proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//Kiểm tra xem ip có phải là từ remote address
else
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo "Địa chỉ client ip là : $ip_address";
?>
</body>
</html>