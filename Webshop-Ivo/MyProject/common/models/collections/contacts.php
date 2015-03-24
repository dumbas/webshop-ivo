<?php

class ContactsCollection extends Collection {

    protected $table = 'contacts';
    protected $entity = 'ContactsEntity';
	
	public function get_all() {
        return $this->to_entity_array($this->db->get_all($this->table));
    }

    public function save(Entity $entity) {
        
        $data = array(
            'name' => $entity->getName(),
            'email' => $entity->getEmail(),
            'phone' => $entity->getPhone(),
            'content' => $entity->getContent(),
            'date' => date('Y-m-d H:i:s', strtotime($entity->getDate())),
        );

        if ($entity->getId() > 0) {
            $this->db->update($this->table, $data, $entity->getId());
        } else {
            $entity->setId($this->db->insert($this->table, $data));
        }
    }
}