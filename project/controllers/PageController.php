<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{ 
		public function show1()
		{
			echo '1';
		}
		
		public function show2()
		{
			echo '2';
		}
		public function act()
		{
			return $this->render('pag
				e/act');
		 }
	}
?>