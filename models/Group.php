<?php

class Group
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function all() {
        return $this->db->query("SELECT * FROM groups")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM groups WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO groups (name, parent_id) VALUES (?, ?)");
        return $stmt->execute([$data['name'], $data['parent_id'] ?? null]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE groups SET name = ?, parent_id = ? WHERE id = ?");
        return $stmt->execute([$data['name'], $data['parent_id'] ?? null, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM groups WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
