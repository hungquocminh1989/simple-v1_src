<?php
/**
* 
* Cùng 1 Url có thể cho chạy nhiều route
* Thời gian check các route ko match rất nhanh
* Chạy qua route tiếp theo -> return TRUE
* Dừng tại route hiện tại -> return FAlSE
* 
*/

//Register Controller Request
$controller = new CommonController();
Flight::route('/(index)', array($controller, 'index'));
Flight::route('/hello', array($controller, 'hello'));

// Route mặc định khi không match toàn bộ
Flight::route('/*', array($controller, 'index'));