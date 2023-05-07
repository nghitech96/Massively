<?php
#echo "<h1>Index pages</h1>";
#Bước A: lấy dữ liệu điều hướng & khởi tạo dữ liệu cho Vị trí 
$posTitle = "";
$posContent = "";

$act2 = "mygrade";
if (isset($_GET["act2"]))
    $act2 = $_GET["act2"];


#Bước B: Điều hướng nội dung của Trang Web
switch ($act2) {
    case 'mygrade':
        include('../html5up-massively/data/mygrade.php');       
        break;
    }

#Bước C: Nạp và tạo giao diện Web
$pageHtml = file_get_contents("mygrade.html");
$pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml);
$pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent -> display(), $pageHtml);

print $pageHtml;
?>