<?php

class ProductsController extends Controller {
    public function index() {

        $products_collection = new ProductsCollection();
        $products = $products_collection->get_latest();
		
	
		
        $this->loadView('website/catalog', array(
            'products' => $products
			
        ));
    }
	
	public function product(){
		
		$products_collection = new ProductsCollection();
		$products = $products_collection->get($_GET['id']);
		$pic = new ProductImageCollection($_GET['id']);
		$data = $pic->get_all();
		
		$this->loadView('website/product', array(
            'products' => $products,
			'data' => $data
		));
	}
	
	public function search(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			header('Location: index.php?c=products&a=search&s='.$_POST['search'].'&o='.$_POST['order']);
			exit;
		}
		
		$products_collection = new ProductsCollection();
		$per_page = 3;
		$page = (isset($_GET['p'])?$_GET['p']:1);
		$search = (isset($_GET['s'])?$_GET['s']:'');
		$order_by = (isset($_GET['o'])?$_GET['o']:'');
		
		if ($search != '') {
			$products = $products_collection->get_filtered($search, $order_by, $per_page, ($page-1)*$per_page);
		} else {
			$products = $products_collection->get_all($per_page, ($page-1)*$per_page);
		}
		
		$total_count = $products_collection->getTotalCount();
		$page_count = ceil($total_count/$per_page);
		
		$this->loadView('website/catalog', array(
            'products' => $products,
			'search' => $search,
			'order_by' => $order_by,
			'total_count' => $total_count,
			'page_count' => $page_count
        ));
	}
	
	
	
	
		
	
}	