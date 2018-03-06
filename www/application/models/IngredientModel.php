<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("ingredient");
    }

    public function getAllNoNest() {
        $query = $this->db->select("ingredient.*")->from("ingredient");
        $result = $query->get()->result("ingredient");
        return $result;
    }

    public function getIngredientsByRecipe(int $recipeId) {
        
    }
}