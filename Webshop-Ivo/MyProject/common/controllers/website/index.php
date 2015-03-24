<?php

class IndexController extends Controller {
    public function index() {
       

        $products_collection = new ProductsCollection();
        $products = $products_collection->get_latest();
		$news_collection = new NewsCollection();
        $news = $news_collection->get_latest();
		$this->loadView('website/index',array(
            'news' => $news,
            'products' => $products
		
		));
			
		
    }
}