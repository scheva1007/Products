<?php

class Product
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function all() {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getDb() {
        return $this->db;
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO products (name, price, group_id) VALUES (?, ?, ?)");
        return $stmt->execute([$data['name'], $data['price'], $data['group_id']]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, price = ?, group_id = ? WHERE id = ?");
        return $stmt->execute([$data['name'], $data['price'], $data['group_id'], $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
