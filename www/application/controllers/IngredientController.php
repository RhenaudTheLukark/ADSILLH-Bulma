<?php
class IngredientController extends MY_Controller {
    public function index() {
        $this->load->model("IngredientModel");
        $ingredients = $this->IngredientModel->getAll();
        $data = array(
            'pageTitle' => "Marmitonne", 
            'dummy' => $ingredients
        );
        $this->renderView("recipe/recipeList", $data);
    }
}