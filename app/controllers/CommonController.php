<?php 

class CommonController extends Controller {

	public static function index()
	{
	    Flight::renderSmarty(__FUNCTION__ . '.html');
	}

   	public static function hello()
	{
		$arr_return = array();
		Flight::renderSmarty('hello.html',$arr_return);
		return FALSE;#Stop Route
	}
	
}
