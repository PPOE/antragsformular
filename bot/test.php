<?
	require_once('antragsbot.class.php');

	$bot = new AntragsBot("Benutzer:AntragsBot/Test", file_get_contents("../stmk/template.txt"));

	$data = array("titel"=>"Ein Titel",
					"bereich"=>"Ein bereich",
					"antragsteller"=>"Ein antragsteller",
					"antragsforderung"=>"Eine antragsforderung",
					"antragsbegruendung"=>"Eine antragsbegruendung",
					"zeitpunkt"=>date("d. m. Y  H:i"));

	echo "posted? \n".$bot->post($data) ? "true" : "false";

?>