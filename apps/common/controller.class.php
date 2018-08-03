<?php
require_once("modules.php");
require_once("router.class.php");
require_once($_SERVER['DOCUMENT_ROOT']  . "/zmvc/vendor/autoload.php");

class Superb{
	public $engine = array();
	public $_dir = '';
	public $loader = '';
	public $twig = '';
	public $view_path = '';

    function __construct($dir){ 
    	$this->_dir = $dir;
		$this->view_path = $_SERVER["DOCUMENT_ROOT"].'/zmvc/apps/views/';
		$this->loader = new \Twig_Loader_Filesystem($this->view_path);
		$this->twig = new \Twig_Environment($this->loader);
		
		$this->twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) {
			// implement whatever logic you need to determine the asset path
			return sprintf('../zmvc/public/%s', ltrim($asset, '/'));
		}));
    }
		
	public function Viewer($page) {	   
	    $tpl = $this->twig->loadTemplate($this->_dir . '/' . $page . '.twig');

		// render template with our data
		echo $tpl->render($this->engine);
    }
}
?>