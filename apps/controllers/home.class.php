<?php

use Models\User;

class Home extends Superb{

    function __construct(){
      parent::__construct("general");
    } 
	
    function showHome() {
          //LARAVEL MODEL CREATE METHOD CALLED
		  //$user = User::create(['username'=>'Zeeshan']);		  
		  
		  $this->engine = array(
							'name'=>'Zeeshan Labs',
							'site_title'=>'MMZ'
						);
          $this->Viewer("index");
    }
}
?>