<?php

	class Pikachu{
		use ABC;
		protected $logger;

		public function __construct(ILogger $logger){
			$this->logger = $logger;
		}

		private function randomString(){
			$template = "1234567890qwertyuiopasdfghjklzxcvbnm";

			$size = rand(10, strlen($template));

			return substr(str_shuffle($template), 0, $size);
		}

		public function meth(){
			$this->hi();
		}

		public function randomLog(){
			$len = rand(1, 5);
			for($i = 0; $i < $len; $i++){
				$this->logger->log($this->randomString());
			}
		}

	}