<?php
class ContactsController extends CmsController {
    public function index() {

        $contacts_collection = new ContactsCollection();
        $contacts = $contacts_collection->get_all();

        $this->loadView('cms/contacts', array(
            'contacts' => $contacts
        ));
    }
	
	public function delete() {
        $contacts_collection = new ContactsCollection();
        $contacts_collection->delete($_GET['id']);

        header('Location: index.php?c=contacts');
    }
}