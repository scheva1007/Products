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
        $groups = $this->group->all();
        include __DIR__ . '/../views/groups/create.php';
    }

    public function store() {
        $this->group->create($_POST);
        header('Location: /?controller=group&action=index');
    }

    public function edit($id) {
        $group = $this->group->find($id);
        $groups = $this->group->all();
        include __DIR__ . '/../views/groups/edit.php';
    }

    public function update($id) {
        if ($_POST['parent_id'] === '') {
            $_POST['parent_id'] = null;
        }
        $this->group->update($id, $_POST);
        header('Location: /?controller=group&action=index');
    }

    public function delete($id) {
        $this->group->delete($id);
        header('Location: /?group_action=index');
    }
}
