<?
	require_once('antragsbot.class.php');

	$bot = new AntragsBot("Benutzer:AntragsBot/Test", "Vorlage:Stmk/AntragLV");

	$data = array("titel"=>"Ein Titel",
					"bereich"=>"Ein bereich",
					"antragsteller"=>"Ein antragsteller",
					"antragsforderung"=>"Eine antragsforderung",
					"antragsbegruendung"=>"Eine antragsbegruendung",
					"zeitpunkt"=>date("d. m. Y  H:i"));

	$bot->post($data);

?>