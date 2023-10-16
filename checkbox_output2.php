<?php require '../header.php';?>
<?php
$color = $_REQUEST['color'];
print_r($color);
print "<br>";
foreach ($color as $favorite){
    echo $favorite.'が好きです'."<br>";
}
?>
<?php require '../footer.php';?>