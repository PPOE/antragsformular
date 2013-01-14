<?php
	require_once('../bot/antragsbot.class.php');

	$submitted = isset($_POST['submit']);

	$keys = array("titel",
					"bereich",
					"antragsteller",
					"antragsforderung",
					"antragsbegruendung");

	if($submitted) {
		foreach ($keys as $key) {
			if(isset($_POST[$key]) AND trim($_POST[$key]) != "") {
				$data[$key] = $_POST[$key];
			} else {
				$data[$key] = "";
				$error = "Bitte alle Felder ausf&uuml;llen!";
			}
		}
		if(!isset($error)) {
			// DO THE BOT MAGIC!

			$data["zeitpunkt"] = date("d. m. Y  H:i");
			
			$bot = new AntragsBot("Benutzer:AntragsBot/Test", file_get_contents("template.txt"));

			if($bot->post($data)) {
				echo "<strong>Antrag erfolgreich erstellt! </strong>;-)<br />";
				echo "<a href='https://wiki.piratenpartei.at/wiki/Benutzer:AntragsBot/Test'>Zur provisorischen Antrags-Sammlung!</a>";
			} else {
				echo "Ein Fehler ist aufgetreten. Bitte kontaktiere einen Admin.";
			}
		}
	} else {
		foreach ($keys as $key) {
			$data[$key] = "";
		}
	}

	if(!$submitted OR ($submitted AND isset($error))) require_once('./form.php');
?>