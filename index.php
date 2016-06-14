<?php 
include_once("view.class.php");

$view = new View();

$view->head("Index");

if(isset($_GET["c"])) {
	session_start();
	$_SESSION["CID"] = $_GET["c"];
	?>
	<div id="chatbox"></div>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#chatbox").load("async.php?loadChatRoom=1");
	});


	</script>

	<?php
//If the chat id is there, then we load the chat

} else {
$view->home();
//If no chat id, we show the home page

}

$view->footer();
?>