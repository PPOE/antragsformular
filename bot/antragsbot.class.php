<?php
	require_once('mediawikibot.class.php');
	require_once('config.php');

class AntragsBot {
	private $target;
	private $template;
	private $bot;

	public function __construct($target, $template) {
      $this->target = $target;
      $this->template = $template;
      $this->bot = new MediaWikiBot();
   }

  	public function post($data) {
  		$params = array('modules' => 'protect');
  		$this->myprintr($this->bot->help($params));
  	}



  	// FOR DEBUGGING:
  	function myprintr($array) {
  		foreach ($array as $key => $value) {
  			if(is_array($value)) {
  				echo "[".$key."] => ".$this->myprintr($value)."<br>";
  			} else {
  				echo "[".$key."] => ".nl2br($value)."<br>";
  			}
  		}
  	}
}

?>