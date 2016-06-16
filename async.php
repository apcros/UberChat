<?php
include_once("view.class.php");
include_once("chatEngine.class.php");
session_start();

$chat = new chat();
$view = new view();

if(isset($_GET["loadChatRoom"])) {

	echo $view->chatbox($chat->getMessages($_SESSION["CID"]));
	die();
}
if(isset($_GET["content"])) {



	if(!isset($_SESSION["author"])) {
		$_SESSION["author"] = md5(microtime());

	}

	$chat->sendMessage($_SESSION["CID"], htmlspecialchars($_GET["content"]), $_SESSION["author"]);
	die();
}


?>
