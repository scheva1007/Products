<?php

require_once '../models/Product.php';
require_once  '../models/Group.php';

class ProductController
{
    private $product;
    protected $groupModel;

    public function __construct($db) {
        $this->product = new Product($db);
        $this->groupModel = new Group($db);
    }

    public function index() {
        $products = $this->product->all();
        include __DIR__ . '/../views/products/index.php';
    }

    public function create() {
        $groups = $this->groupModel->all();
        include __DIR__ . '/../views/products/create.php';
    }

    public function store() {
        $this->product->create($_POST);
        header('Location: /?action=index');
    }

    public function edit($id) {
        $product = $this->product->find($id);
        $groups = $this->groupModel->all();

        include __DIR__ . '/../views/products/edit.php';
    }

    public function update($id) {
        $this->product->update($id, $_POST);
        header('Location: /?action=index');
    }

    public function delete($id) {
        $this->product->delete($id);
        header('Location: /?action=index');
    }
}