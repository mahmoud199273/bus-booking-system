<?php 

function sendSMS( $numbers , $msg = 'welcome to Signify app')
{

		// $userAccount   = '966554554681';
		// $passAccount   = '3419118asd';
		// $sender        = '0554554681';
		//$userAccount   = '0543499074';
		$userAccount   = '966543499074';
		$passAccount   = 'As123456789123';
		$sender        = 'Eyas'; 
		//$sender        = '0543499074'; 
		$MsgID         = 1;
		$timeSend      = 0; 
		$dateSend	   = 0;	 
		$deleteKey	   = 0; 
		$viewResult	   = 1; 
		global $arraySendMsg;
		$url = "www.mobily.ws/api/msgSend.php";
		//$url = "https://www.alfa-cell.com/api/msgSend.php";
		$applicationType = "68";  
	    $msg = $msg;
		$sender = urlencode($sender);
		$domainName = $_SERVER['SERVER_NAME'];
		$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&numbers=".$numbers."&sender=".$sender."&msg=".$msg."&timeSend=".$timeSend."&dateSend=".$dateSend."&applicationType=".$applicationType."&domainName=".$domainName."&msgId=".$MsgID."&deleteKey=".$deleteKey."&lang=3";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
		$result = curl_exec($ch);
		return $result;
	}
