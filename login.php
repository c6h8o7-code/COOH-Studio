<?php
$file_path = "login.php";
if (file_exists($file_path)) {
$fp = fopen($file_path, "r");
$str = fread($fp, filesize($file_path)); // 读取整个文件内容
echo $str = str_replace("\r\n", "<br />", $str);
fclose($fp); // 关闭文件指针
}
?>
