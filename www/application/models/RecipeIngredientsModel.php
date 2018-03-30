<?php
class RecipeIngredientsModel extends MY_Model {
    public function get($recipeName) {
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

    public function updateRecipeName($oldRecipeName, $recipeName) {
        foreach ($this->db->select("recipe_ingredients.*")->from('recipe_ingredients')->where('recipeName', $oldRecipeName)->get()->result() as $row) {
            $data = array(
                'recipeName' => $this->db->escape_str($recipeName),
                'ingredient' => $row->ingredient,
                'quantity' => $row->quantity,
                'quantity_unit' => $row->quantity_unit
            );
            $this->db->insert('recipe_ingredients', $data);
            $this->db->delete('recipe_ingredients', array('recipeName' => $oldRecipeName, 'ingredient' => $row->ingredient));
        }
    }
}