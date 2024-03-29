<?php
//Create renderSmarty method
Flight::map('renderSmarty', function($template, $data = NULL){
    if (is_null($data) == false) {
		Flight::viewSmarty()->assign($data);
	}
    Flight::viewSmarty()->display($template);
});

//Create smartyVars method (get smarty variable)
Flight::map('smartyVars', function($keyName = NULL){
    if (is_null($keyName) == false) {
		return Flight::viewSmarty()->get_template_vars($keyName);
	}
	else{
		return Flight::viewSmarty()->get_template_vars();
	}
});

//Override Flight's default error method
Flight::map('error', function(Exception $ex){
	
    // Handle error
    Support_Common::RequestError($ex);
    
});