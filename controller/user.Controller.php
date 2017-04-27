<?php

    require_once 'model/user.model.php';

    class UserController{
        private $model;

        public function __CONSTRUCT(){
            $this->model = new UserModel();
        }

    } // END CLASS
