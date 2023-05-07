<?php
#echo "<h1>Index pages</h1>";
#Bước A: lấy dữ liệu điều hướng & khởi tạo dữ liệu cho Vị trí 
$posTitle = "";
$posContent = "";

$act4 = "sanpham";
if (isset($_GET["act4"]))
    $act4 = $_GET["act4"];


#Bước B: Điều hướng nội dung của Trang Web
switch ($act4) {
    case 'sanpham':
        include('../html5up-massively/data/product.php');       
        break;
    }

#Bước C: Nạp và tạo giao diện Web
$pageHtml = file_get_contents("sanpham.html");
$pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml);
$pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent->display(), $pageHtml);

print $pageHtml;
?>