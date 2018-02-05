<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location:../index.php');
    exit;
}
$to = "noreply@texasinterpretersbureau.com";
$subject = "Texas interpreters bureau contact";
$headers = "MIME-VERSION: 1.0"."\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@texasinterpretersbureau.com>' . "\r\n";

if(isset($_POST['Cname'] ,$_POST['Cphone'] ,$_POST['Cmail'] , $_POST['Bslocation'], $_POST['Sneeded'],$_POST['sbtContact'])){
$from =$_POST['Cname'];   
$mailMsg = '<html><body>';
$mailMsg .='<h3 style="color:blue;"> Hello this message is sent to you via your website</h3>';
$mailMsg .="<div><p> From: ".strip_tags($_POST['Cname'])."</p></div>";
$mailMsg .="<div><p> Telephone: ".strip_tags($_POST['Cphone'])."</p></div>";
$mailMsg .="<div><p> Email: ".strip_tags($_POST['Cmail'])."</p></div>";
$mailMsg .="<div><p> Location: ".strip_tags($_POST['Bslocation'])."</p></div>"; 
$mailMsg .="<div><p> Service Needed: ".strip_tags($_POST['Sneeded'])."</p></div>";  
$mailMsg .="<div><p>".strip_tags($_POST['Ctext'])."</p></div>";
             
if(mail($to,$subject,$mailMsg,$headers)){
echo '<p style="color:grey;">Your message has been delivered to the <span style="color:blue;">TEXAS INTERPRETERS BUREAU </span>you will recive an answer in the next few minutes</p>';
}
    
}
if(isset($_POST['Fdate'],$_POST['Ftime'],$_POST['Tdate'],$_POST['Ttime'],$_POST['Bname'],$_POST['Bcompany'],$_POST['Bmail'],$_POST['Bphone'],$_POST['Blocation'],$_POST['fromLang'],$_POST['Nnote'],$_POST['sbtBook'])){
    $mailMsg ='<html><body>';
    $mailMsg .='<h3 style="color:blue;"> Hello we want to book an interpreter</h3>';
    $mailMsg .="<div><p> From: ".strip_tags($_POST['Fdate'])." ".strip_tags($_POST['Ftime'])."</p></div>";
    $mailMsg .="<div><p> To: ".strip_tags($_POST['Tdate'])." ".strip_tags($_POST['Ttime'])."</p></div>";
    $mailMsg .="<div><p> Fullname: ".strip_tags($_POST['Bname'])."</p></div>";
    $mailMsg .="<div><p>Company: ".strip_tags($_POST['Bcompany'])."</p></div>";
    $mailMsg .="<div><p>Email: ".strip_tags($_POST['Bmail'])."</p></div>";
    $mailMsg .="<div><p>Phone: ".strip_tags($_POST['Bphone'])."</p></div>";
    $mailMsg .="<div><p>Location: ".strip_tags($_POST['Blocation'])."</p></div>";
	$mailMsg .="<div><p>From: ".strip_tags($_POST['fromLang'])."</p></div>";
    $mailMsg .="<div><p>Note: ".strip_tags($_POST['Nnote'])."</p></div>";
if(mail($to,$subject,$mailMsg,$headers)){
echo '<p style="color:grey;">Your message has been delivered to the <span style="color:blue;">TEXAS INTERPRETERS BUREAU </span>you will recive an answer in the next few minutes</p>';
}      
}
?>
