<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{ 
		public function numsum($params)
		{
			echo array_sum(array_values($params));
		}
	}
?>