<?php

$myfile = fopen("../form/emaillist.txt", "a+") or die("Unable to open file!");
$txt = "Gaspard Monge\n";
print $uni;
print $txt;

fwrite($myfile, $name);
$txt = "Monge\n";
fwrite($myfile, $txt);
fclose($myfile);


//Get the email from POST
//$email = $_REQUEST['email'];
//print($email);


//$file = fopen("emaillist.txt","a+") or die("Unable to open file!");
//echo fread($myfile,filesize("emaillist.txt"));
//fclose($file);


// fwrite($file,$email);
//print_r(error_get_last());

//redirect
// header("Location: http://www.example.com/");
?>