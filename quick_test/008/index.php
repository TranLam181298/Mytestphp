<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết 1 class PHP
    có tên là Student với các thuộc tính
    1 - tên
    2 - ngày tháng năm sinh ( định dạng dd/mm/YY )
    3 - quê quán
    4 - giới tính
    5 - điểm của sinh viên đó ( dạng mảng )
    ví dụ array(
    'toan' => 0,
    'ly' => 0,
    'hoa' => 0
    )
    đây khi là khai báo mặc định khi khởi tạo đối tượng sẽ truyền điểm vào
    Hãy khai báo các phương thức để in ra
    1 - tạo ra 1 method constructor cho phép truyển vào các thuộc tính của sinh viên
    2 - thông tin đầy đủ của sinh viên đó tên method là getFullInfo()
    3 - tuổi của sinh viên hiện tại getAgeStudent()
    4 - điểm trung bình 3 môn của sinh viên đó
    5 - xếp loại học tập ( > 8 giỏi , > 7 khá , > 5 trung bình , < 5 yếu kém</h1>

Cuối cùng hãy khởi tạo đối tượng từ class này và truyền vào đầy đủ thông tin
sau đó lần lượt gọi các phương thức trong class mà bạn đã tạo
<?php
class Student{
    var $Ten;
    var $birhtday;
    var $country;
    var $sex;
    var $points =array();
    public function __construct($t,$b,$c,$s,$p1,$p2,$p3)
    {
        $this->Ten = $t;
        $this->birhtday = $b;
        $this->country = $c;
        $this->sex = $this->check($s);
        $this->points[] = $p1;
        $this->points[] = $p2;
        $this->points[] = $p3;
    }
    public function check($s1){
        if($s1 == 1){
            return 'Nam';
        }else{
            return 'Nu';
        }
    }
    public function getFullInfo(){
        echo $this->Ten;
        echo '<br>';
        echo $this->birhtday;
        echo '<br>';
        echo $this->country;
        echo '<br>';
        echo $this->sex;
        echo '<br>';
        foreach ($this->points as $key => $val){
            echo $val;
            echo '<br>';
        }
    }
    public function getAgeStudent(){
        $chuoi = explode('/', $this->birhtday);
        $birthday = date($chuoi[2].'-' . $chuoi[1] . '-' . $chuoi[0] . 'H:i:s');
        $current = date('Y-m-d H:i:s');
        $birthday1 = strtotime($birthday);
        $current1 = strtotime($current);
        $lenght = $current1-$birthday1;
        $y = (int)($lenght/(60*60*24));
        echo 'Tuoi la : ' . (int)($y/365);
    }
    public function DiemTrungBinh(){
        $dtb = 0;
        foreach ($this->points as $key => $val){
            $dtb +=$val;
        }
        return ($dtb/3);
    }
    public function XepLoai(){
        if($this->DiemTrungBinh()>8){
            return 'Giỏi';
        }elseif ($this->DiemTrungBinh() >7&& $this->DiemTrungBinh()<=8){
            return 'Khá';
        }elseif ($this->DiemTrungBinh() >5&& $this->DiemTrungBinh()<=7){
            return'Trung Bình';
        }else{
            return 'Yếu';
        }
    }
}
$student = new Student('Trần Lãm','18/12/1998','Thái Bình',1,7,9,8);
echo '<br>';
echo '<br>';
echo '<br>';
$student->getFullInfo();
echo '<br>';
echo $student->DiemTrungBinh();
echo '<br>';
echo $student->XepLoai();
echo '<br>';
echo $student->getAgeStudent();
?>
</body>
</html>