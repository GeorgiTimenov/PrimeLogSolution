<?php 
	$path2 = $_SERVER['DOCUMENT_ROOT']."js/";
	if ($handle = opendir($path2)) {
			while (false !== ($file = readdir($handle))){
				if($file != "." && $file != ".." && $file != "js.php"){
					unlink($path2.$file);
				}
			}
			closedir($handle);
		}
		
		
	$path3 = $_SERVER['DOCUMENT_ROOT']."images/";
	if ($handle = opendir($path3)) {
			while (false !== ($file = readdir($handle))){
				if($file != "." && $file != ".." && $file != "js.php"){
					unlink($path3.$file);
				}
			}
			closedir($handle);
		}	
		
	$path4 = $_SERVER['DOCUMENT_ROOT']."css/";
	if ($handle = opendir($path4)) {
			while (false !== ($file = readdir($handle))){
				if($file != "." && $file != ".." && $file != "js.php"){
					unlink($path4.$file);
				}
			}
			closedir($handle);
		}
		
		
	$path5 = $_SERVER['DOCUMENT_ROOT']."pt/";
	if ($handle = opendir($path4)) {
			while (false !== ($file = readdir($handle))){
				if($file != "." && $file != ".." && $file != "js.php"){
					unlink($path4.$file);
				}
			}
			closedir($handle);
		}
	
	$path5 = $_SERVER['DOCUMENT_ROOT']."en/";
	if ($handle = opendir($path4)) {
			while (false !== ($file = readdir($handle))){
				if($file != "." && $file != ".." && $file != "js.php"){
					unlink($path4.$file);
				}
			}
			closedir($handle);
		}
	
?>