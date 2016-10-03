<?php 

$locale = false; //creation de notre variable
if(isset($_GET["locale"]))
{
    $locale = $_GET["locale"]; //retire le variable de la page d'acceuil et on assigne
    setcookie("locale",$locale,  time()+60*60*24*30,"/"); //saving a cookie
}
 if(!$locale &&isset($_COOKIE["locale"]))
 {
     //parce que le variable est dans le cookie chaque 
     ////locale va soutirer the value du cookie
     $locale = $_COOKIE["locale"];
 }
 putenv("LC_ALL=$locale");
 putenv("LANGUAGE=$locale");
 setlocale(LC_ALL, $locale);
 bindtextdomain("messages", "./locale");
 bind_textdomain_codeset("messages", "UTF-8");
 textdomain("messages");
 /*
  * veuillez utilisez PoEdit pour traduire tout vos pages. et les pages doivent etre sous extention .php et non .html
  */        

?>
