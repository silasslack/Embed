<?php
///Variables for all pages:///////////////////////////////////////////////////////////////////////////////
require('auth.php');                                                                         //
$uid = $_SESSION['SESS_MEMBER_ID'];                                                                //
$email = $_SESSION['SESS_EMAIL'];                                                                       //
$admin = $_SESSION['ADMIN'];         
$memid = $_SESSION['SESS_MEMBER_ID'];
$login = $_SESSION['LOGIN'];															                   //
$date = date('Y-m-d');
$time = date('H:i:s');
$reqstarted = true;
$tabImgSize = "96";
////
//////////////////////////////////////////////////////////////////////////////////////////////////////////

// util function
function ifset($key, $ifnull=null,& $arr=null) {
	if(is_null($arr)) $arr = &$_REQUEST;

	if(isset($arr[$key])) {
		return $arr[$key];
	}
	return $ifnull;
}

function clean($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}




function generateKey(){
    $key = rand(1,9);
    for($no=0;$no<9;$no++){
        $lornum = rand(1,2);
        if($lornum==1){
        $key = $key.rand(1,9);
        }
        else{
            $letnum = rand(0,25);
            $AtoZ = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $key = $key.$AtoZ[$letnum];
        }
    }
    return $key;
}




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
