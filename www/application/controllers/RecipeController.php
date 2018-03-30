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

    public function recipe($name) {
        $name = urldecode($name);

        $this->load->model("RecipeModel");
        $recipe = $this->RecipeModel->get($name);

        $this->load->model("RecipeIngredientsModel");
        $ingredients = $this->RecipeIngredientsModel->get($name);

        $data = array(
            'recipe' => $recipe,
            'ingredients' => $ingredients
        );

        $this->renderView('recipe/recipe', $data);
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

    public function addAjax() {
        $this->form_validation->set_rules("name", "Nom Recette", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("ingName", "Nom Ingrédient", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("quantity", "Quantité", "required|integer");
        $this->form_validation->set_rules("quantityUnit", "Unité", "alpha_numeric_spaces");
        if ($this->form_validation->run() != true) {
            throw "Bad form";
        }
    }

    public function add2() {
        $this->form_validation->set_rules("name", "Nom", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("time", "Temps", "required|integer");
        $this->form_validation->set_rules("difficulty", "Difficulté", "required|integer");
        $this->form_validation->set_rules("peopleNb", "Nombre de personnes", "required|integer");
        $this->form_validation->set_rules("text", "Texte", "required");
        if ($this->form_validation->run() == true) {
            $data = array( 
                'data' => $_POST
            );
            $this->renderView('recipe/add2', $data);
        } else {
            $this->index();
        }
    }

    public function insert() {
        $this->form_validation->set_rules("name", "Nom", "required|alpha_numeric_spaces");
        $this->form_validation->set_rules("time", "Temps", "required|integer");
        $this->form_validation->set_rules("difficulty", "Difficulté", "required|integer");
        $this->form_validation->set_rules("peopleNb", "Nombre de personnes", "required|integer");
        $this->form_validation->set_rules("text", "Texte", "required");
        $this->form_validation->set_rules("ingrNameList", "Noms ingrédients", "required");
        $this->form_validation->set_rules("ingrQutyList", "Quantité ingrédients", "required");
        $this->form_validation->set_rules("ingrQtyUList", "Unité de quantité ingrédients", "required");
        if ($this->form_validation->run() == true) {
            $this->load->model("RecipeModel");
            $this->RecipeModel->insert($_POST["name"], $_POST["time"], $_POST["difficulty"], $_POST["peopleNb"], $_POST["text"]);

            $this->load->model("IngredientModel");
            $this->load->model("RecipeIngredientsModel");
            $ingrNameList = explode(",", $_POST["ingrNameList"]);
            $ingrQutyList = explode(",", $_POST["ingrQutyList"]);
            $ingrQtyUList = explode(",", $_POST["ingrQtyUList"]);
            
            $max = sizeof($ingrNameList);
            for ($i = 0; $i < $max; $i++) {
                $this->IngredientModel->insert($ingrNameList[$i]);
                $this->RecipeIngredientsModel->insert($_POST["name"], $ingrNameList[$i], $ingrQutyList[$i], $ingrQtyUList[$i]);
            }
        }

        $this->index();
    }
}