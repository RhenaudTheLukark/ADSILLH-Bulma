<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("ingredient");
    }

    public function getIngredientsByRecipe(int $recipeId) {
        
    }
}