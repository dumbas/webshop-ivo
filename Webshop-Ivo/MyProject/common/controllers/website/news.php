<?php

class NewsController extends Controller {
    public function index() {
		
			
		$news_collection = new NewsCollection();
		$per_page = 3;
		$page = (isset($_GET['p'])?$_GET['p']:1);
		$news = $news_collection->get_all($per_page, ($page-1)*$per_page);
		
		
		$total_count = $news_collection->getTotalCount();
		$page_count = ceil($total_count/$per_page);
        $this->loadView('website/blog',array(
			'news' => $news,
			'total_count' => $total_count,
			'page_count' => $page_count
        ));
    }
	
	
}