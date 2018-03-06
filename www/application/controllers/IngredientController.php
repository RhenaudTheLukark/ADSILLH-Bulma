<?php
class IngredientController extends MY_Controller {
    public function index() {
        $this->load->model("IngredientModel");
        $data = array(
            'dummy' => $this->IngredientModel->getAll()
        );
        $this->load->view("recipe/recipeList", $data);
    }
}