<?php

ob_start();


$dragons = '';
$colors= '';
$comments = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset(
$_POST['dragons'],
$_POST['colors'],
$_POST['comments'])) {


$dragons = $_POST['wines'];
$colors = $_POST['regions'];
$comments = $_POST['comments'];

function my_dragons($dragons) {
$my_return = '';
if(!empty($_POST['dragons'])) {
$my_return = implode(', ', $_POST['dragons']);
}
return $my_return;
}


$to = 'talanaq49@gmail.com';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '

Colors : '.$colors.'  '.PHP_EOL.'
Dragons : '.my_dragons($dragons).'  '.PHP_EOL.'   
Comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'  
);

if(!empty($dragons && $colors && $comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.html');

}


}



}