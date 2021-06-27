<?php

session_start();

class Core{

    public $_c;
    public $_m;
    public $_p;

    public function __construct(){
        $this->_c = 'Index';
        $this->_m = 'init';
        $this->_p= [];

		$url=isset($_REQUEST['url']) ? explode('/', $_REQUEST['url']) : null;

		if ($url[0]) {
			if (file_exists('../app/Controller/'. ucwords($url[0]). '.php')) {
				$this->_c=$url[0];
				unset($url[0]);
			}
		}
		require_once '../app/Controller/'. $this->_c .'.php';
		$this->_c= new $this->_c();

		if ($url[1]) {
			if (method_exists($this->_c, $url[1])) {
				$this->_m=$url[1];
				unset($url[1]);
			}
		}
		
		// Valores que sobran en la url
		if ($this->_p = $url) {
			$this->_p = array_values($url);
			$_SESSION['PARAM']=$this->_p[0];
		}
		else {
			$this->_p = [];
		}
		call_user_func_array([$this->_c, $this->_m], $this->_p);
    }
}
?>