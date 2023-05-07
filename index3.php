<?php
#echo "<h1>Index pages</h1>";
#Bước A: lấy dữ liệu điều hướng & khởi tạo dữ liệu cho Vị trí 
$posTitle = "";
$posContent = "";

$act3 = "trangchu";
if (isset($_GET["act3"]))
    $act3 = $_GET["act3"];


#Bước B: Điều hướng nội dung của Trang Web
switch ($act3) {
    case 'trangchu':
        include('../html5up-massively/data/home.php');       
        break;
    }

#Bước C: Nạp và tạo giao diện Web
$pageHtml = file_get_contents("trangchu.html");
$pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml);
$pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent, $pageHtml);

print $pageHtml;
?>