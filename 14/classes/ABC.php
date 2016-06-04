<?php
	

	trait ABC{
		public $fff = "ffff";
		public function show(){
			echo "Hello, I am trait";
		}
		private function hi(){
			echo 'I am private method';
		}
	}