<?php

	class FileLogger extends Logger
	{
		
		public function log($string)
		{
			echo 'FileLog: ',$string, '<br>';
		}
	}