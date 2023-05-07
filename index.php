<?php
#echo "<h1>Index pages</h1>";
#Bước A: lấy dữ liệu điều hướng & khởi tạo dữ liệu cho Vị trí 
$posTitle = "";
$posImage = "";
$posContent = "";

$act = "home";
if (isset($_GET["act"]))
    $act = $_GET["act"];
 

#Bước B: Điều hướng nội dung của Trang Web
switch ($act) {
    case 'home':
        include('../html5up-massively/data/home.php');   
        $pageHtml = file_get_contents("home.html");
        $pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml); #token
        $pageHtml = str_replace("{{PAGE_IMAGES}}", $posImage, $pageHtml);
        $pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent, $pageHtml);

        print $pageHtml;
        break;

    case 'mygrade':
        include('../html5up-massively/data/mygrade.php');
        $pageHtml = file_get_contents("mygrade.html");
        $pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml); #token
        $pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent, $pageHtml);

        print $pageHtml;
        break;

    case 'trangchu':
        include('../html5up-massively/data/home.php');
        $pageHtml = file_get_contents("trangchu.html");
        $pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml); #token
        $pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent, $pageHtml);
    
        print $pageHtml;
        break;

    case 'sanpham':
        default:
        include('../html5up-massively/data/product.php');
        $pageHtml = file_get_contents("sanpham.html");
        $pageHtml = str_replace("{{PAGE_TITLE}}", $posTitle, $pageHtml); #token
        $pageHtml = str_replace("{{PAGE_IMAGES}}", $posImage, $pageHtml);
        $pageHtml = str_replace("{{PAGE_CONTENT}}", $posContent, $pageHtml);
        
        print $pageHtml;
        break;
    }

?>