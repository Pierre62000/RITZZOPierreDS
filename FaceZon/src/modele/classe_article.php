<?php
    class Article{
        private $db;
        private $insert;
        
        public function __construct($db){
            $this->db = $db; $this->insert = $this->db->prepare("insert into article(titre,contenuArticle)values (:Titre, :CTitre)");
        }
        public function insert($Titre,$CTitre){
            $r = true;
            $this->insert->execute(array(':inputTitre'=>$Titre, ':inputCTitre'=>$CTitre));
            if ($this->insert->errorCode()!=0){
                print_r($this->insert->errorInfo());
                $r=false;
            }
        
        
        return $r;
        }
    }
?>