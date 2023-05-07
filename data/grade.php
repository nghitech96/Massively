<?php
    $subject = array("Toán", "Lý", "Hóa", "Sinh", "Văn", "Sử", "Địa");
    $randomIndex1 = array_rand($subject);
    $randomIndex2 = array_rand($subject);
    $randomIndex3 = array_rand($subject);
    $score = rand(1, 10);
    
    echo $subject[$randomIndex1] . " - " . $score ."<br>";
    echo $subject[$randomIndex2] . " - " . $score ."<br>";
    echo $subject[$randomIndex3] . " - " . $score ."<br>";
?>