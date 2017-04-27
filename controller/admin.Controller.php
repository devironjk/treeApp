<?php

    require_once 'model/admin.model.php';

    class AdminController{
        private $model;

        public function __CONSTRUCT(){
            $this->model = new AdminModel();
        }

    } // END CLASS
