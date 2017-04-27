<?php

    require_once 'model/moderate.model.php';

    class ModerateController{
        private $model;

        public function __CONSTRUCT(){
            $this->model = new ModerateModel();
        }

    } // END CLASS
