<?php
//Khai bao cac bien
$server="localhost"; $u="id20965563_wp_4f61346535125ed80067cdb68874fee7"; $p="Sinhdc123."; $db="id20965563_wp_4f61346535125ed80067cdb68874fee7";
//tao ket noi voi CSDL
$con=new mysqli($server,$u,$p,$db);
//kiem tra ket noi, neu co loi thi thong bao
if($con->connect_error){
die("Loi ket noi: ".$con->connect_error);
}
//chuoi insert
$sql="insert into MyGuests (firstname,lastname,email)
values ('Sinh','Do','s@gmail.com')";
//thuc hien insert
if($con->query($sql)===TRUE){
echo "Insert thanh cong";
}
else{
echo "Loi: ".$con->error;
}
?>