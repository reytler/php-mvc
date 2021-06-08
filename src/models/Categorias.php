<?php
    class Categorias extends helperModel{
        public function getLista(){
            $array = array();
            

            $sql = $this->db->query("SELECT * FROM categorias");
            if($sql->rowCount()>0){
                $array = $sql->fetchAll();
                return $array;
            }
        }

        public function getCategoria($id){
            $sql = $this->db->prepare("SELECT * FROM categorias WHERE id = :id");

            $sql->bindValue(":id", $id);

            $sql->execute();

            if($sql->rowCount()>0){
                $result = $sql->fetch();
                return $result;
            }
        }
    }
