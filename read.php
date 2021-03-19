<?php 
$json= file_get_contents("data.json");
$array =  json_decode($json,true) ;
foreach ($array as $array => $value) {
echo"<div style='height: 70vh;margin-top:30vh;'>";
  echo"<div style='margin-top:30vh'>";
  echo  "<span style='font-size:50px;'>".$value['Khách hàng']." -".$value['Mã đơn hàng']."</span></br>";
  echo  "<span style='font-size:50px;'>".$value['Mã Kiện']. " ( ".$value['Mã vận đơn']." ) "."</span></br>";
  echo "<span style='font-size:50px;'>".$value['Cân nặng tính phí']."</span></br>";
  echo "<h1 style='margin-top:0;'>---------------------------------------</h1>"."</br>";           
  echo"</div style='margin-bottom:30vh'>";
  echo"</div>";
}

?>
