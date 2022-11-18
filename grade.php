<?php
    
    $score = $_GET['score'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><br><br><br><br>
<div class="container" align="center">
<table style="border:1px dashed #FF34B3; background-color: #FF34B3" cellspacing="3" cellpadding="3" width="400"><tr><td><table style="border:1px dashed #FF82AB ; background-color: #FF82AB " cellspacing="5" cellpadding="3" width="400"><tr><td style="background-color: #ffffff"><?php    

if($score >= 90){
    echo "คุณได้เกรด A+";
}elseif($score >= 80){
    echo "คุณได้เกรด A";
}elseif($score >= 75){
    echo "คุณได้เกรด B+";
}elseif($score >= 70){
    echo "คุณได้เกรด B";
}elseif($score >= 65){
    echo "คุณได้เกรด C+";
}elseif($score >= 60){
    echo "คุณได้เกรด C";
}elseif($score >= 55){
    echo "คุณได้เกรด D+";
}elseif($score >= 50){
    echo "คุณได้เกรด D";
}else{
    echo "คุณได้เกรด F";
}    

?>
</td></tr></table></td></tr></table>

</div>
</body>
</html>