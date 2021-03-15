<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{ 
	  private $pages;
	  public function __construct() {
	    $this->pages = [
		1 => ['title'=>'страница 1',
			 'text'=>'тек
			ст страницы 1'],
		 2 => ['title'=>'страница 2',
			 'text'=>'тек
			ст страницы 2'],
		 3 => ['title'=>'страница 3',
			 'text'=>'тек
			ст страницы 3'],
	] ;
	 
    }
	  public function show($id)
		{
		  $title = $this->pages[id]['title'];
		  $text = $this->pages[id]['text'];
			return $this->render('pag
				e/show', $text, $title);
		 
	  }
		public function show1()
		{
			echo '1';
		}
		
		public function show2()
		{
			echo '2';
		}
		public function act($params)
		{
			return $this->render('pag
				e/act', $params);
		 }
	}
?>