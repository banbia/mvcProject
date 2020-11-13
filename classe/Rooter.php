<?php
class Rooter {
	private $page;
	
	public function __construct($page) {
		$this->page = $page;
	}
	
	public function ChooseController() {
			$page    = ucfirst($this->page);
			$methode = 'voir'.$page;
			
			if(method_exists($page, $methode)) {
				$objet = new $page();
				$objet->$methode();
			} else {
				echo 'Erreur';
			}
	}
}