<?php

require_once '../models/Group.php';

class GroupController
{
    private $group;

    public function __construct($db) {
        $this->group = new Group($db);
    }

    public function index() {
        $groups = $this->group->all();
        include __DIR__ . '/../views/groups/index.php';
    }

    public function create() {
        $groups = $this->group->all(); // для вибору parent_id
        include __DIR__ . '/../views/groups/create.php';
    }

    public function store() {
        $this->group->create($_POST);
        header('Location: /?group_action=index');
    }

    public function edit($id) {
        $group = $this->group->find($id);
        $groups = $this->group->all(); // для вибору parent_id
        include __DIR__ . '/../views/groups/edit.php';
    }

    public function update($id) {
        $this->group->update($id, $_POST);
        header('Location: /?group_action=index');
    }

    public function delete($id) {
        $this->group->delete($id);
        header('Location: /?group_action=index');
    }
}
