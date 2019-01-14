<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

<h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>

<?php
print_r($_REQUEST);
echo '</pre>';
if(isset($_REQUEST['day']) && isset($_REQUEST['month']) &&isset($_REQUEST['year'])){
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
    if(is_numeric($_REQUEST['day']) && is_numeric($_REQUEST['month']) && is_numeric($_REQUEST['year'])) {
        $birthday = date($year.'-' . $month . '-' . $day . 'H:i:s');
        $current = date('Y-m-d H:i:s');
        $birthday1 = strtotime($birthday);
        $current1 = strtotime($current);
        $lenght = $current1-$birthday1;
        $y = (int)($lenght/(60*60*24));
        echo 'Tuoi la : ' . (int)($y/365);
    }}
?>

</body>
</html>