<?php
class Support_Log
{	

	public static function Log($refix, $contents)
	{
		
		$ip = Support_Common::get_client_ip();
		$url = Support_Common::get_current_url();
		
		Support_File::CreateFolder(SYSTEM_TMP_DIR."/log");
		$filename = SYSTEM_TMP_DIR."/log/".Date('Y-m-d').'_('.$ip.')_'.$refix.'.log';
		if(is_string($contents) == FALSE){
			$contents = var_export($contents,TRUE);
		}
		$contents = "【".Date('Y-m-d H:i:s')."】 Access from $ip - $url"."\r\n".$contents."\r\n\r\n";
		file_put_contents($filename, $contents, FILE_APPEND);
		return;
	}
	
}
