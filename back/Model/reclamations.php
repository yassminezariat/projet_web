<?php

    class reclamations{
        private $id_reclamation;
        private ?string $type_reclamation=null;
        private ?string $date_reclamation=null;
        private ?string $description_reclamation=null;
        private ?int $id_user;
        private ?string $etat_reclamation="non traitee";
        private ?string $reponse=null;


        public function __construct(string $type_reclamation, string $description_reclamation,int $id_user,string $etat_reclamation, string $reponse) {
           $this->type_reclamation= $type_reclamation;
            $this->description_reclamation= $description_reclamation;
            $this->id_user=$id_user;
            $this->etat_reclamation= $etat_reclamation;
            $this->reponse= $reponse;

        }



        public function getid_reclamation() {
            return $this->id_reclamation;
        }




        public function gettype_reclamation(){
            return $this->type_reclamation;
        }

        public function settype_reclamation(string $type_reclamation) {
            $this->type_reclamation = $type_reclamation;
        }




        public function getdate_reclamation(){
            return $this->date_reclamation;
        }

        public function setdate_reclamation(date $date_reclamation) {
            $this->date_reclamation = $date_reclamation ;
        }


        public function getdescription_reclamation (){
            return $this->description_reclamation ;
        }

        public function setdescription_reclamation (string $description_reclamation) {
            $this->description_reclamation = $description_reclamation ;
        }

        public function getId_user() {
            return $this->id_user;
        }

        public function setId_user(int $id_user){
            $this->id_user=$id_user;
        }

        public function getetat_reclamation(){
            return $this->etat_reclamation;
        }

        public function setetat_reclamation(string $etat_reclamation) {
            $this->etat_reclamation = $etat_reclamation;
        }

        public function getreponse() {
            return $this->reponse;
        }

        public function setreponse(string $reponse){
            $this->reponse=$reponse;
        }

    }
    ?>
