<?php
	
	/**
	 * Created by PhpStorm.
	 * User: evgeniy
	 * Date: 02/06/16
	 * Time: 21:09
	 */
	class DisplayLogger extends Logger{
		
		public function log($string)
		{
			echo 'DisplayLog: ',$string, '<br>';
		}
	}