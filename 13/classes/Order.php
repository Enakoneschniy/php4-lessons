<?php
	

	class Order
	{
		private $logger;
		public function __construct(Logger $logger){
			$this->logger = $logger;
		}

		public function add(){
			$this->logger->log("add");
		}

		public function delete(){
			$this->logger->log("delete");
		}
	}