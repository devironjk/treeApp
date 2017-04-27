<?php
    class ModerateModel{

        private $pdo;

        public function __CONSTRUCT(){
            try{
                $this->pdo = DataBase::connect();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

    } // END CLASS
