<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>

<form name="aa" method="post" action="">
    <input type="text" name="text" value="<?php echo $text;?>">
    <input type="submit" name="submit">
</form>
<?php
$text = $_POST['text'];
echo strlen($_POST['text']);
?>


</body>
</html>