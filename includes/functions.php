<?php 

	if(!function_exists('config')) {

		function config($key) {
			require 'config.php';

			if(array_key_exists($key, $config)) {
				return $config[$key];
			}
			else {
				return flase;
			}
		}
	}


if(!function_exists('url')) {

	function url($uri = '') {
		$base = config('site_url');

		if($base[(strlen($base)-1)] == '/' || (!empty($uri) && $uri[0] == '/')){
			return $base.$uri;
		}
		else {
			return $base.'/'.$uri;
		}
	}
}
	


 if(!function_exists('redirct')){

 	function redirect($url) {
 		header('location:'.$url);
 	}
 }

 	