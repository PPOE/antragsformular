<?php
	require_once('mediawikibot.class.php');
	require_once('config.php');

class AntragsBot {
	private $target;
	private $template;

	public function __construct($target, $template) {
      $this->target = $target;
      $this->template = $template;
   }

  	public function post($data) {
  		
  	}

}

?>