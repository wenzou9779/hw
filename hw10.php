<?php
	echo '<meta charset="utf-8">';
	$uploadnum=$_GET["uploadnum"];
		
		echo '<form action=""  enctype="multipart/form-data"  method="post">'; //用post才會收到下面檔案
		//enctype="multipart/form-data" 上傳檔案才要加
			for($a=0;$a<$uploadnum;$a++){
	
				echo '<input type="file" name="file[]" ><br/><br/>';
				
			}
		
			
		
		echo '<input type="submit" name="file" value="上傳檔案">';
		echo '</form>';
		
		if(isset($_FILES["file"])){
			for($a=0;$a<$uploadnum;$a++){
				echo "檔名:".$_FILES["file"]["name"][$a]."<br/>";
				echo "暫存檔名:".$_FILES["file"]["tmp_name"][$a]."<br/>";
				$name=$_FILES["file"]["name"][$a];
				$tmp=$_FILES["file"]["tmp_name"][$a];
				if(!empty($name)){
					copy($tmp,$name);
					echo "檔案上傳成功<br/><br/>";
					unlink($tmp);
				}else{
					echo "檔案上傳失敗";
					}
			}
		}		
	
?>