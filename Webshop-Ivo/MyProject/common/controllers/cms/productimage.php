<?php

class ProductImageController extends CmsController {
   

	public function index() {
	    $pic = new ProductImageCollection($_GET['id']);
		$data = $pic->get_all();
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$image = new ProductImageEntity();
				$image
					->setProductId($_GET['id']);
				if ($_FILES['image']['tmp_name'] != '') {
				$image->saveImage($_FILES['image']);
			}
			
			
			$pic = new ProductImageCollection($_GET['id']);
			$pic->save($image);
			
			header('Location: index.php?c=productimage&id='.$_GET['id']);
		}
        $this->loadView('cms/product_gallery', array(
            'data' => $data
        ));
		
	}
	
	
	
    public function productimage_delete() {
        
        $pic = new ProductImageCollection($_GET['product_id']);
        $pic->delete($_GET['id']);
        header('Location: index.php?c=productimage&id='.$_GET['product_id']);
    }
	
}	