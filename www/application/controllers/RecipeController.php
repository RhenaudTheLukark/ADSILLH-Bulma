<?php

class RecipeController extends MY_Controller {
    public function index() {
        $data = array(
            'pageTitle' => "Marmitonne"
        );

        $this->renderView('recipe/main', $data);
    }
}