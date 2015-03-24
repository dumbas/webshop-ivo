<?php
class ContactsController extends Controller {
    public function index() {

        
		$address_collection = new AddressCollection();
        $address = $address_collection->get_all();
		
		
		$error = 0;
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$phone = $_POST['phone'];
			$phone = str_replace('0', '', $phone);
			$phone = str_replace('/', '', $phone);
			$phone = str_replace('-', '', $phone); {
			if (
				strip_tags(trim($_POST['name'] != '')) && 
				strip_tags(trim($_POST['email'] != '')) &&
				strip_tags(trim($_POST['phone'] != '')) && 
				strip_tags(trim($_POST['content'] != ''))&&
				(strpos($_POST['email'], '@') >= 1) && 
				(strrpos($_POST['email'], '.')-strpos($_POST['email'], '@') >= 2)&&
				(strlen(strrchr($_POST['email'], '.')) >= 3)&&
				(substr($_POST['phone'],4,1)=='/' &&
				substr($_POST['phone'],7,1)=='-' &&
				substr($_POST['phone'],10,1)=='-' &&
				strlen ($_POST['phone'])=='13' &&
				is_numeric ($phone)== true)
				
			) 

							{
				$contacts_collection = new ContactsCollection();
				$contacts = new ContactsEntity();
				
				$contacts->setName(strip_tags(trim($_POST['name'])));
				$contacts->setEmail(strip_tags(trim($_POST['email'])));
				$contacts->setPhone(strip_tags(trim($_POST['phone'])));
				$contacts->setContent(strip_tags(trim($_POST['content'])));
				$contacts_collection->save($contacts);
				
				$contacts_collection = new ContactsCollection();
				$contacts_collection->save($contacts);
				
				header('Location: index.php?c=contacts');
			
		}
			$error = 1;
    }
	}
        $this->loadView('website/contacts', array(
            'error' => $error,
			'address' => $address
        ));
    
	}
	
	
}