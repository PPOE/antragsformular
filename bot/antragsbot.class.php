<?php
	require_once('config.php');
	require_once('../Wikimate/globals.php');
	

class AntragsBot {
	private $target;
	private $template;
	private $bot;

	public function __construct($target, $template) {
      $this->target = $target;
      $this->template = $template;
      $this->bot = new Wikimate(APIURL);
   }

  	public function post($data) {
  		
  		try
		{
		    if ($this->bot->login(USERNAME,PASSWORD))
		        echo 'user logged in .' ;
		    else {
		        $error = $this->bot->getError();
		        print_r($error);
		    }

		    $page = $this->bot->getPage($this->target);
		    $oldPage = $page->getText();

		    $antrag = $this->template;

	  		foreach ($data as $key => $value) {
	  			$antrag = str_replace("%%".$key."%%", $value, $antrag);
	  		}

	  		$antrag .= "\n\n<!--%%NEW%%-->\n";

	  		$newPage = str_replace("<!--%%NEW%%-->", $antrag, $oldPage);

	  		echo "updating page..";

	  		return $page->setText($newPage);
		}
		catch ( Exception $e )
		{
		    echo "An error occured: ".$e->getMessage(); // returns true if the edit worked
		}
  	}
}

?>