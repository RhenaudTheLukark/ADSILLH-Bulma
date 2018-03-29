<?php
class RecipeModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("recipe");
    }

    public function get($name) {
        foreach ($this->db->select("recipe.*")->from('recipe')->where('name', $this->db->escape_str($name))->get()->result() as $row) {
            return $row;
        } 
        return null;
    }

    public function insert($name, $time, $difficulty, $peopleNb, $text) {
        if ($this->get($name) == null) {
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