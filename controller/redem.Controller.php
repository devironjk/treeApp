<?php

    require_once 'model/redem.model.php';

    class RedemController{
        private $model;

        public function __CONSTRUCT(){
            $this->model = new RedemModel();
        }

    } // END CLASS
