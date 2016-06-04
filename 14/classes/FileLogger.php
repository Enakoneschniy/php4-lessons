<?php

	class FileLogger implements ILogger{

		protected $handle;

		public function __construct($fileName){
			$this->handle = fopen($fileName, 'a');
		}

		public function __destruct(){
			fclose($this->handle);
		}

		public function log($string){
			$string = '['.date('d-F-Y H:i:s').']: '.$string."\r\n";
			fputs($this->handle, $string);
		}
	}