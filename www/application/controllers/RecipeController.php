<?php

class RecipeController extends MY_Controller {
    public function index() {
        $this->load->model("RecipeModel");
        $recipes = $this->RecipeModel->getAll();
        $data = array( 
            'dummy' => $recipes
        );

        $this->renderView('recipe/list', $data);
    }

    public function recipe($id) {
        $this->renderView('recipe/recipe');
    }

    public function update() {
        $this->form_validation->set_rules("name", "Nom", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("time", "Temps", "required|integer");
        $this->form_validation->set_rules("difficulty", "Difficulté", "required|integer");
        $this->form_validation->set_rules("peopleNb", "Nombre de personnes", "required|integer");
        $this->form_validation->set_rules("text", "Texte", "required");
        if ($this->form_validation->run() == true) {
            $this->load->model("RecipeModel");
            $this->RecipeModel->update($_POST["id"], $_POST["name"], $_POST["time"], $_POST["difficulty"], $_POST["peopleNb"], $_POST["text"]);
        }
        
        $this->index();
    }

    public function insert() {
        $this->form_validation->set_rules("name", "Nom", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("time", "Temps", "required|integer");
        $this->form_validation->set_rules("difficulty", "Difficulté", "required|integer");
        $this->form_validation->set_rules("peopleNb", "Nombre de personnes", "required|integer");
        $this->form_validation->set_rules("text", "Texte", "required");
        if ($this->form_validation->run() == true) {
            $this->load->model("RecipeModel");
            $this->RecipeModel->insert($_POST["name"], $_POST["time"], $_POST["difficulty"], $_POST["peopleNb"], $_POST["text"]);
        }
        
        $this->index();
    }
}