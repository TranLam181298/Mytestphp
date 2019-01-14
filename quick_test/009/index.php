<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết các câu lệnh php in ra các biến xuất hiện trên URL
    sử dụng $_REQUEST và $_GET
    URL giả định : index.php?controller=post&action=edit&id=100&return_page=abc.php
</h1>
<form action="" method="get">
    <input type="text" name="controller" value="post">
    <input type="text" name="action" value="edit">
    <input type="text" name="id" value="100">
    <input type="text" name="return_page" value="abc.php">
    <input type="submit" name="submit" value="Gửi">
</form>
<?php
echo '<br>';
echo '<br>';
echo '<br>';
echo $_REQUEST['controller'];
echo '<br>';
echo $_REQUEST['action'];
echo '<br>';
echo $_REQUEST['id'];
echo '<br>';
echo $_REQUEST['return_page'];
echo '<br>';
?>
</body>
</html>