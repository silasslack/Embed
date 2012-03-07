<?php
															                   //
$date = date('Y-m-d');
$time = date('H:i:s');
$reqstarted = true;
$tabImgSize = "96";






//Database Connection: ///////////////////////////////////////////////////////////////////////////////////
require_once('config.php');                                                                             //
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);                                                    //
if (!$con)                                                                                              //
  {                                                                                                     //
  die('Could not connect: ' . mysql_error());                                                           //
  }                                                                                                     //
  mysql_select_db(DB_DATABASE, $con);                                                                   //
//////////////////////////////////////////////////////////////////////////////////////////////////////////



//Get various variables from the database: ///////////////////////////////////////////////////////////////


?>