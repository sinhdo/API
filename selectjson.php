<?php
header('Access-Control-Allow-Origin: *');
//Khai bao cac bien
$server="localhost"; $u="id20965563_wp_4f61346535125ed80067cdb68874fee7"; $p="Sinhdc123."; $db="id20965563_wp_4f61346535125ed80067cdb68874fee7";
//tao ket noi voi CSDL
$con=new mysqli($server,$u,$p,$db);
//kiem tra ket noi, neu co loi thi thong bao
if($con->connect_error){
     die("Loi ket noi: ".$con->connect_error);
}
//chuoi insert
$sql="SELECT * from MyGuests";
//thuc hien insert
$result=$con->query($sql);
     while($row[]=$result->fetch_assoc()){//doc tung dong du lieu
         $json=json_encode($row);//chuyen sang json
     }
     echo '{"MyGuests":'.$json.'}';
$con->close();
?>