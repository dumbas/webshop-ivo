<?php
class AddressController extends CmsController {
    public function index() {

        $address_collection = new AddressCollection();
        $address = $address_collection->get_all();

        $this->loadView('cms/address', array(
            'address' => $address
        ));
    }
	
	public function add() {
		$error = 0;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
				$phone = $_POST['phone'];
				$phone = str_replace('0', '', $phone);
				$phone = str_replace('/', '', $phone);
				$phone = str_replace('-', '', $phone); {
				if (strip_tags(trim($_POST['address'])) != '' && 
					strip_tags(trim($_POST['email'])) != '' &&
					strip_tags(trim($_POST['phone'])) != '' &&
					(preg_match('/[^@]+@.+\.\w{2,}/', ($_POST['email']))) &&
					(substr($_POST['phone'],4,1)=='/' &&
					substr($_POST['phone'],7,1)=='-' &&
					substr($_POST['phone'],10,1)=='-' &&
					strlen ($_POST['phone'])=='13' &&
					is_numeric ($phone)== true)
					
				){

            $address_collection = new AddressCollection();
			$address = new AddressEntity();
            $address->setId($_GET['id']);
            $address->setAddress(strip_tags(trim($_POST['address'])));
            $address->setEmail(strip_tags(trim($_POST['email'])));
			$address->setPhone(strip_tags(trim($_POST['phone'])));
            $address_collection->save($address);
            
            $address_collection = new AddressCollection();
            $address_collection->save($address);
            
            header('Location: index.php?c=address');
        }
		$error=1;
		}
		}
		
        $this->loadView('cms/address_add', array(
				'error' =>$error
		));
    }
	
	public function edit() {
        $address_collection = new AddressCollection();
		$error = 0;
		
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
				$phone = $_POST['phone'];
				$phone = str_replace('0', '', $phone);
				$phone = str_replace('/', '', $phone);
				$phone = str_replace('-', '', $phone); {
				if (strip_tags(trim($_POST['address'])) != '' && 
					strip_tags(trim($_POST['email'])) != '' &&
					strip_tags(trim($_POST['phone'])) != '' &&
					(preg_match('/[^@]+@.+\.\w{2,}/', ($_POST['email']))) &&
					(substr($_POST['phone'],4,1)=='/' &&
					substr($_POST['phone'],7,1)=='-' &&
					substr($_POST['phone'],10,1)=='-' &&
					strlen ($_POST['phone'])=='13' &&
					is_numeric ($phone)== true)
					
				){
            
            $address = new AddressEntity();
            $address->setId($_GET['id']);
            $address->setAddress(strip_tags(trim($_POST['address'])));
            $address->setEmail(strip_tags(trim($_POST['email'])));
			$address->setPhone(strip_tags(trim($_POST['phone'])));
            $address_collection->save($address);

            header('Location: index.php?c=address');
        }
		$error=1;
		}
		}
        $data = $address_collection->get($_GET['id']);

        $this->loadView('cms/address_edit', array(
            'data' => $data,
			'error' => $error
        ));
    }
	
	public function delete() {
        $address_collection = new AddressCollection();
        $address_collection->delete($_GET['id']);

        header('Location: index.php?c=address');
    }
}