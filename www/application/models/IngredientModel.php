<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return getAllFromDb("ingredient");
    }

    public function getIngredientsByRecipe(int $recipeId) {
        
    }
}