<?php
//Change the following when setting up:
$accname = "your_account_name";
//End of setup

if (function_exists('curl_init')) {
   $ch = curl_init(); 
   curl_setopt($ch, CURLOPT_URL, 'http://demo.softrader-online.com/embed/showContent.php?account='.$accname); 
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
   curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'); 
   echo $content = curl_exec($ch); 
   curl_close($ch); 
} 
else {
   if($a = file_get_contents("http://demo.softrader-online.com/embed/showContent.php?account=".$accname)){
   	echo ($a);
   }
   else{
   	include("http://demo.softrader-online.com/embed/showContent.php?account=".$accname);
   }
}
?>