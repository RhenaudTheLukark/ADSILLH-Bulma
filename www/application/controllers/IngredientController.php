<?php
class IngredientController extends MY_Controller {
    public function index() {
        $this->load->model("IngredientModel");
        $ingredients = $this->IngredientModel->getAll();
        $data = array( 
            'dummy' => $ingredients
        );
        $this->renderView("recipe/recipeList", $data);
    }

    public function update() {
        $this->form_validation->set_rules("name", "Nom", "required");
        if ($this->form_validation->run() == true) {
            $this->load->model("IngredientModel");
            $this->IngredientModel->update($_POST["id"], $_POST["name"]);
        }
        
        $this->index();
    }

    public function insert() {
        $this->form_validation->set_rules("name", "Nom", "required");
        if ($this->form_validation->run() == true) {
            $this->load->model("IngredientModel");
            $this->IngredientModel->insert($_POST["name"]);
        }
        $this->index();
    }
}