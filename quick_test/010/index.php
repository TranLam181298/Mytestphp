<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>
<form action="" method="post">
    <input type="text" name="hovaten">
    <input type="submit" name="submit">
</form>

<?php
echo $_POST['hovaten'];
echo '<br>';
$chuoi = array();
$chuoi = explode(' ', $_POST['hovaten']);
$dem = sizeof($chuoi);
foreach ($chuoi as $key => $val){
    if($key == 0){
        $ho = $val;
    }elseif ($key == 1 or $key ==2 and $key <$dem){
        $tendem = $val;
    }else{
        $ten = $val;
    }
}
echo '<br>';
echo 'Tên Là :'.$ten;
echo '<br>';
echo 'Họ Là :'.$ho;
echo '<br>';
echo 'Tên Đệm Là :'.$tendem;
?>
</body>
</html>