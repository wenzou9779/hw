<?php
$link = mysqli_connect( //link建立連線
		'localhost',//MySQL主機名稱
		'root',     //使用者名稱
		'', //密碼
		'php2017'); //預設使用的資料庫名稱
	
if($link){
	echo "DB Connected!";
}else{
	echo "DB Connected Failed";
}
$username=@$_POST["username"];
$gender=@$_POST["gender"];
$birthday=@$_POST["birthday"];
$person=@$_POST["person"];
$day=@$_POST["day"];
$poster=@$_POST["poster"];
$mail=@$_POST["mail"];
$friends=@$_POST["friends"];
$internet=@$_POST["internet"];
$facebook=@$_POST["facebook"];
$others=@$_POST["others"];
$email=@$_POST["email"];
$memo=@$_POST["memo"];
$con1=@$_POST["con1"];
$con2=@$_POST["con2"];
$con3=@$_POST["con3"];

$mysql= "INSERT INTO hw8(Name,Gender,Birthday,Partner,Message,Email,Bulletin) 
		VALUES ('$username','$gender','$birthday',,'$con1' '$con2' '$con3' ,'$day','$person',  '$poster'   '$mail'   '$internet' '$facebook' '$friends' '$others' , '$email','$memo')";
$result=mysqli_query($link,$mysql); 
$result=mysqli_query($link,"SELECT * FROM hw8" );
echo "<table border=2>";
while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr/>";
	echo "<td>";
	echo @$row["Name"];
	echo "</td><td>";
	echo @$row["Gender"];
	echo "</td><td>";
	echo @$row["Birthday"];
	echo "</td><td>";
	echo @$row["Message"];
	echo "</td><td>";
	echo @$row["Email"];
	echo "</td><td>";
	echo @$row["Bulletin"];
	echo "</td></tr>";
}
echo "</table>";
mysqli_close($link);
?>