<?php
class RecipeModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("recipe");
    }

    public function insert($name, $time, $difficulty, $peopleNb, $text) {
        $data = array(
            'name' => $this->db->escape_str($name),
            'time' => $time,
            'difficulty' => $difficulty,
            'note' => 0,
            'peopleNb' => $peopleNb,
            'text' => $this->db->escape_str($text)
        );
        $this->db->insert('recipe', $data);
    }

    public function update($id, $name, $time, $difficulty, $peopleNb, $text) {
        $data = array(
            'id' => $id,
            'name' => $this->db->escape_str($name),
            'time' => $time,
            'difficulty' => $difficulty,
            'note' => 0,
            'peopleNb' => $peopleNb,
            'text' => $this->db->escape_str($text)
        );
        $this->db->replace('recipe', $data);
    }
}