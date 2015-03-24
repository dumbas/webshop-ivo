<?php
class OrdersController extends Controller {
	
	public function index (){
			$products_collection = new ProductsCollection();
			$products = $products_collection->get($_GET['id']);
			
			$error = 0;
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$phone = $_POST['phone'];
				$phone = str_replace('0', '', $phone);
				$phone = str_replace('/', '', $phone);
				$phone = str_replace('-', '', $phone); {
				if (strip_tags(trim($_POST['name'])) != '' && 
					strip_tags(trim($_POST['email'])) != '' &&
					strip_tags(trim($_POST['phone'])) != '' &&
					(preg_match('/[^@]+@.+\.\w{2,}/', ($_POST['email']))) &&
					(substr($_POST['phone'],4,1)=='/' &&
					substr($_POST['phone'],7,1)=='-' &&
					substr($_POST['phone'],10,1)=='-' &&
					strlen ($_POST['phone'])=='13' &&
					is_numeric ($phone)== true)
					
				){
				
				
				$orders_collection = new OrdersCollection();
				$order = new OrdersEntity();
				$order
					->setProductId($_GET['id'])
					->setName(strip_tags(trim($_POST['name'])))
					->setEmail(strip_tags(trim($_POST['email'])))
					->setPhone(strip_tags(trim($_POST['phone'])));
				$orders_collection->save($order);
				
				$orders_collection = new OrdersCollection();
				$orders_collection->save($order);
				header('Location: index.php?c=orders&id='.$_GET['id']);
			
			}
			$error=1;
			}
			}
				$this->loadView('website/order', array(
					'products' => $products,
					'error' =>$error
				
				
			));
		
		}
}