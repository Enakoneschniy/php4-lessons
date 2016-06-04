<?php

	class DisplayLogger implements ILogger{
		
		public function log($string){
			echo '['.date('d-F-Y H:i:s').']: '.$string."<br>";
		}
	}