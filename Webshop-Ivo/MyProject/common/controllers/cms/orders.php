<?php

class OrdersController extends CmsController {
    public function index() {

        $orders_collection = new OrdersCollection();
        $orders = $orders_collection->get_all();

        $this->loadView('cms/orders', array(
            'orders' => $orders
        ));
    }
	
	public function completeorder() {
        $oc = new OrdersCollection();
        $o = $oc->get($_GET['id']);
        $o->setIsComplete($_GET['is_complete']);
        print_r($o);
        $oc->save($o);
    }
	
	public function delete() {
        $orders_collection = new OrdersCollection();
        $orders_collection->delete($_GET['id']);
        header('Location: index.php?c=orders');
    }
}
?>