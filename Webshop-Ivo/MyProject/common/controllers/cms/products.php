<?php

class ProductsController extends CmsController {
    public function index() {

        $products_collection = new ProductsCollection();
        $products = $products_collection->get_all();
		
		
        $this->loadView('cms/products', array(
            'products' => $products
        ));
    }
	
	public function add() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$products = new ProductsEntity();
				$products
					->setTitle(strip_tags(trim($_POST['title'])))
					->setContent(strip_tags(trim($_POST['content'])))
					->setPrice(strip_tags(trim($_POST['price'])));

			if ($_FILES['image']['tmp_name'] != '') {
				$products->saveImage($_FILES['image']);
			}
			
				$products_collection = new ProductsCollection();
				$products_collection->save($products);
				
			header('Location: index.php?c=products');
        }
        $this->loadView('cms/products_add');
    }
		
	public function edit(){
	
		$products_collection = new ProductsCollection();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$products = new ProductsEntity();
			$products
				->setId($_GET['id'])
				->setTitle(strip_tags(trim($_POST['title'])))
				->setContent(strip_tags(trim($_POST['content'])))
				->setPrice(strip_tags(trim($_POST['price'])));

			if ($_FILES['image']['tmp_name'] != '') {
				$products->saveImage($_FILES['image']);
			}

			$products_collection->save($products);

			header('Location: index.php?c=products');
		}
		
		$data = $products_collection->get($_GET['id']);

        $this->loadView('cms/products_edit', array(
            'data' => $data
        ));
    }
	
	public function delete() {
		$products_collection = new ProductsCollection();
		$products_collection->delete($_GET['id']);
		header('Location: index.php?c=products');
    }
	
	
		
	
}	