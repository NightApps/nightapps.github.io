<?php
//phpinfo(); 
error_reporting(1);
$Token = "254681867:AAEvDFvXI9aCquTAQm72kVoyz-9duqbWKhA";
$website = "https://api.telegram.org/bot".$Token;
include("Telegram.php");
$telegram = new Telegram($Token);
$comlog = fopen("comlog.txt", "w") or die("Unable to open file!");

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
echo $update;
echo $message;

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$rand = rand();
$checkdubs = substr($rand, -2);
if ($checkdubs == "11") {
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "22") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "33") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "44") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "55") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "66") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "77") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "88") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "99") {       ;
    $rand = $rand."\nYou Got Doubles!";
} elseif ($checkdubs == "00") {       ;
    $rand = $rand."\nYou Got Doubles!";
} 
if( stripos($message, '/say') !== false ) repeatMSG($chatId,$message);
if( $message == "bot" ) sendMSG($chatId, "BOT IS GOD");
if( stripos($message, '/toby') !== false ) sendMSG($chatId, "toby give that good succ fam");
//if( stripos($message, '/start') !== false ) sendMSG($chatId, "supp nigga");
if( stripos($message, '/d') !== false ) sendDrink($chatId, "Drink!");
if( stripos($message, '/dummy') !== false ) sendDUMMY($chatId,$message); //Did't work =((
if( stripos($message, '/pi') !== false ) sendPIC($chatId, "http://dices.net16.net/img/kik_desktop.png", "doob is autistic");
if( stripos($message, '/aramanth') !== false ) sendVID($chatId, "http://hue.hfhosting.pw/mp4/Aramanth%20Preview%20I_KIK.mp4", "doob is autistic"); //Did't work =((
if( stripos($message, '/roll') !== false ) sendMSG($chatId,$rand);

function sendMSG ($chatId, $message) {
	
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
	file_get_contents($url);
	
}

function repeatMSG ($chatId, $message) {
	if (substr($message, 0, 21) == "/say@CopyPasterinoBot") { $message = substr($message, 21, 2048); }
	if (substr($message, 0, 4) == "/say") { $message = substr($message, 4, 2048); }
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
	file_get_contents($url);
	
}

function sendPIC ($chatId, $photo, $caption) {
	
	$url = $GLOBALS[website]."/sendPhoto?chat_id=".$chatId."&photo=".urlencode($photo)."&caption=".urlencode($caption);
	file_get_contents($url);
	echo $url;	
}

function sendDUMMY ($chatId, $message) {
	//if (substr($message, 0, 24) == "/dummy@CopyPasterinoBot ") { $message = substr($message, 24, 2048); }
	//if (substr($message, 0, 7) == "/dummy ") { $message = substr($message, 7, 2048); }
	//$site = "";//. urlencode($message);
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=http://dummyimage.com/1920x1080/000/fff&text=".urlencode($message);
	file_get_contents($url);
	//$txt = "Site: ".$site."\nURL:".$url;
	//fwrite($comlog, $txt);
	//fclose($comlog);
}

function sendVID ($chatId, $video, $caption) {
	
	$url = $GLOBALS[website]."/sendVideo?chat_id=".$chatId."&video=".$video."&caption=".urlencode($caption);
	file_get_contents($url);
	echo $url;	
}

 
 
 checkJSON($chatId,$update);

	function checkJSON($chatId,$update){
	
		$myFile = "bot_log.txt";
		$updateArray = print_r($update,TRUE);
		$fh = fopen($myFile, 'a') or die("Can't open it =(");
		fwrite($fh, $chatId ."\n\n");
		fwrite($fh, $updateArray."\n\n");
		fclose($fh);
	}
 
 
?>