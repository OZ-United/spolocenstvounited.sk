<?php


	$db_host = 'localhost';
	$db_name = 'chleba';
	$username = 'root';
	$password = '';	
	
	$conn = mysql_connect($db_host, $username, $password) or die(mysql_error());
	mysql_select_db($db_name,$conn);

if( function_exists('mysql_set_charset') )
 {
  mysql_set_charset('utf8');
 }
 else
 {
  mysql_query("SET NAMES 'utf8'");
 }


// Include the library
include('simple_html_dom.php');
 
// Retrieve the DOM from a given URL
$html = file_get_html('http://baptist.sk/chlieb-nas-kazdodenny');


$homepage = file_get_contents('http://baptist.sk/chlieb-nas-kazdodenny');
//echo $homepage;

$pieces = explode("<strong><center>", $homepage);
//echo $pieces[0]; // piece1
//echo $pieces[1]; // piece2
					

$pieces2 = explode("<div style='text-align: center; padding-bottom: 10px'>", $pieces[1]);
//echo $pieces2['0'];

$day = explode("</strong>", $pieces2[0]);
//echo $day[0];

$bib1 = explode("</p></td>", $pieces2[0]);


function get_string_between($string, $start, $end){ 
    $string = " ".$string; 
    $ini = strpos($string,$start); 
    if ($ini == 0) return ""; 
    $ini += strlen($start); 
    $len = strpos($string,$end,$ini) - $ini; 
    return substr($string,$ini,$len); 
} 
  
$fullstring = $pieces2[0]; 

$parsedBib1 = get_string_between($fullstring, "left;\">","</p>"); 
echo($parsedBib1);
echo "<br>";

$parsedBib2 = get_string_between($fullstring, "right;\">","</p>"); 
echo($parsedBib2);
echo "<br>";
echo "<br>";

$parsedVers = get_string_between($fullstring, "</strong></center><br/><I><center>","<br></center></I><br/>"); 
echo($parsedVers);
echo "<br>";
echo "<br>";

$parsedText = get_string_between($fullstring, "<br></center></I><br/>","<center><I>"); 
echo($parsedText);
echo "<br>";

$parsedBasen = get_string_between($fullstring, "<center><I>","</I><br/><br/><strong>"); 
echo($parsedBasen);
echo "<br>";
echo "<br>";

$parsedMyslienka = get_string_between($fullstring, "</I><br/><br/><strong>","</center></strong><hr /></p>"); 
echo($parsedMyslienka);
echo "<br>";



$sql="INSERT INTO chleba (bib1, bib2, vers, textZamys, basen, myslienka )
VALUES ('$parsedBib1', '$parsedBib2', '$parsedVers', '$parsedText', '$parsedBasen', '$parsedMyslienka')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
mysql_close($conn);





require_once("class.phpmailer.php");
 
$mail = new PHPMailer();
 
// Posíláme pomocí PHP funkce mail()
$mail->IsMail();  
 
// Chceme email ve formátu HTML
$mail->IsHTML(true);
$mail->CharSet = "utf-8";


$mail->IsSMTP(true);
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls"; 
 
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; 
 
$mail->Username = "spolocenstvounited";
$mail->Password = "0000000000";           
 
$mail->From = "spolocenstvounited@gmail.com";
$mail->FromName = "spolocenstvo UNITED";

 
// Email pro zákazníka

// Přidání adresy zákazníka
$mail->AddAddress("martin.certek@gmail.com");
 
$mail->Subject = "Test parsera";
$mail->Body = "Toto je testovaci sprava z parsera. <br />" .
              "<b>'$parsedText'</b> ... ";  
 
if(!$mail->Send()) {
  echo "Chybová hláška: " . $mail->ErrorInfo;
}
 
// Email pro provozovatele
 
// Vyprázdnit stávající adresy (tzn. adresa zákazníka)
$mail->ClearAddresses();


?>