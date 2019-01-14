<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="abc" action="" method="post" action="">
    <p>
        Nhập trang web cần chuyển hướng đến :
        <input type="text" name="web" value="<?php echo $_REQUEST['web']?>">
    </p>
    <input type="submit" value="Chuyển hướng">
</form>
<?php
if (isset($_REQUEST['web'])){
    header('Location: '.$_REQUEST['web']);
}else{
    echo 'Hãy nhập link!';
}
?>

</body>
</html>
