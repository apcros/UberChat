<?php

/**
* 
*/
class chat
{

	private $db;
	function __construct()
	{
		$this->db = new SQLite3("chat.db");

	}

	function getMessages($chatroomID) {
		$stmt = $this->db->prepare("SELECT * FROM MESSAGE WHERE MESSAGE_CHATROOM_ID = :chatroomID");
		$stmt->bindValue(":chatroomID",$chatroomID);
		$result = $stmt->execute();
		$results = array();
		while($row = $result->fetchArray(SQLITE3_ASSOC)) {
			$results[] = $row;
		}

		return $row;
	}

	function sendMessage($chatroomID, $content, $author) {
		$stmt = $this->db->prepare("INSERT INTO MESSAGE (MESSAGE_CONTENT, MESSAGE_DATE, MESSAGE_AUTHOR, MESSAGE_CHATROOM_ID) VALUES (:content, :dateNow, :author, :chatroomID)");
		$stmt->bindValue(":content", htmlspecialchars($content));
		$dateNow = new DateTime();
		$stmt->bindValue(":dateNow", $dateNow->format("Y-m-d h:i:s"));
		$stmt->bindValue(":author",htmlspecialchars($author));
		$stmt->bindValue(":chatroomID",htmlspecialchars($chatroomID));

		$stmt->execute();

	}

	function createChatroom() {

	}


}

?>