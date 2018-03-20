<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("ingredient");
    }

    public function getIngredientsByRecipe($recipeName) {
        $query = $this->db->select("*")->from('recipe_ingredients')->where('recipeName', $this->db->escape_str(urldecode($recipeName)));
        return $query->get()->result_array();
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