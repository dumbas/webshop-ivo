<?php

class OrdersCollection extends Collection {
    protected $table = 'orders';
    protected $entity = 'OrdersEntity';
	
		


    public function save(Entity $entity) {
		
        $data = array(
            'product_id' => $entity->getProductId(),
            'date' => $entity->getDate(),
            'name' => $entity->getName(),
            'email' => $entity->getEmail(),
            'phone' => $entity->getPhone(),
			'is_complete' => $entity->getIsComplete()
        );
        
        if ($entity->getId() > 0) {
            $this->db->update($this->table, $data, $entity->getId());
        } else {
            $entity->setId($this->db->insert($this->table, $data));
        }
    }

    public function get_all() {
        $sql = '
            SELECT SQL_CALC_FOUND_ROWS orders.*, products.title as product_title, products.price as product_price
            FROM orders
            JOIN products ON orders.product_id = products.id 
			ORDER BY date DESC 
        ';

        $result['data'] = $this->db->select($sql);

        $tmp = $this->db->select_row('SELECT FOUND_ROWS() as cnt;');
        $result['cnt'] = $tmp['cnt'];

        return $this->to_entity_array($result);
    }
}