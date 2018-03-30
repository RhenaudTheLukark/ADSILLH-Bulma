<?php
class RecipeIngredientsModel extends MY_Model {
    public function get($recipeName) {
        var_dump($recipeName);
        var_dump($this->db->select("recipe_ingredients.*")->from('recipe_ingredients')->where('recipeName', $this->db->escape_str($recipeName))->get()->result());
        return $this->db->select("recipe_ingredients.*")->from('recipe_ingredients')->where('recipeName', $this->db->escape_str($recipeName))->get()->result();
    }

    public function insert($recipeName, $ingredientName, $quantity, $quantityUnit) {
        $data = array(
            'recipeName' => $this->db->escape_str($recipeName),
            'ingredient' => $this->db->escape_str($ingredientName),
            'quantity' => $quantity,
            'quantity_unit' => $this->db->escape_str($quantityUnit)
        );
        $this->db->insert('recipe_ingredients', $data);
    }
}