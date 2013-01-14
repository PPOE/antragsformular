<?php
	require_once('mediawikibot.class.php');
	require_once('config.php');

class AntragsBot {
	private $target;
	private $template;
	private $bot;

	public function __construct($target, $template) {
      $this->target = urlencode($target);
      $this->template = $template;
      $this->bot = new MediaWikiBot();
   }

  	public function post($data) {
  		
  		print_r ( $this->bot->login() );

  		$params = array('titles' => $this->target,
  						'bot' => "true",
  						'prop' => "info|revisions",
  						'rvprop' => "content",
  						'intoken' => "edit");
  		print_r ( $this->bot->query($params) );
  		/*$oldPage = array_values(
					  			array_values(
					  				array_values(
					  					array_values(
					  						
					  							$this->bot->query($params))[0])[0])[0])[3][0];

  		$antrag = $this->template;

  		foreach ($data as $key => $value) {
  			$antrag = str_replace("%%".$key."%%", $value, $antrag);
  		}

  		$antrag .= "\n\n<!--%%NEW%%-->\n";

  		$newPage = str_replace("<!--%%NEW%%-->", $antrag, $oldPage);

  		// push $new to wiki
  		$params3 = array('title' => $this->target,
  						'bot' => "true",
  						'section' => "0",
  						'summary' => urlencode("Neuer Antrag via Formular"),
  						'text' => urlencode($newPage)
  						);
  		print_r ( $this->bot->edit($params3) );*/
  	}
}

?>