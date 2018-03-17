<?php

class RecipeController extends MY_Controller {
    public function index() {
        $data = array(
            'pageTitle' => "Marmitonne"
        );

        $data['title'] = "Pates a la bière";
        $data['time'] = 15;
        $data['personne'] = 4;
        $data['diff'] = 1;
        $data['ingredient'] = array();
        $data['ingredient'][0] = array('pates',400,'g');
        $data['ingredient'][1] = array('emental',20,'g');
        $data['recipe'] = "<li>Faire cuire les pâtes</li><li>Se servire une bière !</li><li>Mangez !</li>";
        
        $this->renderView('recipe/main', $data);
    }

    public function recipe($id) {
        $data = array(
            'pageTitle' => "Marmitonne"
        );

        $this->renderView('recipe/main', $data);
    }
}