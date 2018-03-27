<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("ingredient");
    }

    public function getIngredientsByRecipe($recipeName) {
        $query = $this->db->select("recipe_ingredients.*")->from('recipe_ingredients')->where('recipeName', $this->db->escape_str($recipeName));
        return $query->get()->result("recipe_ingredients");
    }

    public function insertIngredientByRecipe($recipeName, $ingredientName, $quantity, $quantityUnit) {
        $data = array(
            'recipeName' => $this->db->escape_str($recipeName),
            'ingredient' => $this->db->escape_str($ingredientName),
            'quantity' => $quantity,
            'quantity_unit' => $this->db->escape_str($quantityUnit)
        );
        $this->db->insert('recipe_ingredients', $data);
    }

    public function insert($name) {
        $data = array(
            'name' => $this->db->escape_str($name)
        );
        $this->db->insert('ingredient', $data);
    }

    public function update($id, $name) {
        $data = array(
            'id' => $id,
            'name' => $this->db->escape_str($name)
        );
        $this->db->replace('ingredient', $data);
    }
}