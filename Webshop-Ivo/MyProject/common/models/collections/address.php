<?php

class AddressCollection extends Collection {

    protected $table = 'address';
    protected $entity = 'AddressEntity';
	
	public function get_all() {
        return $this->to_entity_array($this->db->get_all($this->table));
    }

    public function save(Entity $entity) {
        
        $data = array(
            'address' => $entity->getAddress(),
            'email' => $entity->getEmail(),
            'phone' => $entity->getPhone(),
        );

        if ($entity->getId() > 0) {
            $this->db->update($this->table, $data, $entity->getId());
        } else {
            $entity->setId($this->db->insert($this->table, $data));
        }
    }
}