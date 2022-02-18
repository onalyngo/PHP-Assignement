<?php
$page="page-banner";
$number="";

if(isset($_GET['content']) && $_GET['content']=='page1'){
    $page=$page."1";
    $number="<h1>Friendship</h1>";
}else if(isset($_GET['content']) && $_GET['content']=='page2'){
    $page=$page."2";
    $number="<h1>Family</h1>";
}else if(isset($_GET['content']) && $_GET['content']=='page3'){
    $page=$page."3";
    $number="<h1>Muntinlupa City Map</h1>";
}
?>
<div class="<?=$page?>"><?=$number?></div>