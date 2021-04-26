<?php
    class Avis{
        private $id_avis;
        private ?string $description=null;
        private ?int $note=null;
        private ?string $date_avis=null;
        private ?int $id_user;
        private ?string $type_avis=null;

        public function __construct(string $description, int $note,int $id_user,string $type_avis) {
           $this->description= $description;
            $this->note= $note;
            $this->id_user=$id_user;
            $this->type_avis=$type_avis;

        }
        public function getid_avis() {
            return $this->id_avis;
        }

        public function getdescription(){
            return $this->description;
        }

        public function setdescription (string $description) {
            $this->description = $description;
        }

        public function getnote (){
            return $this->note;
        }

        public function setnote(int $note) {
            $this->note = $note ;
        }

        public function getdate_avis (){
            return $this->date_avis ;
        }

        public function setdate_avis (date $date_avis) {
            $this->date_avis = $date_avis ;
        }

        public function getId_user() {
            return $this->id_user;
        }

        public function setId_user(int $id_user){
            $this->id_user=$id_user;
        }

        public function gettype_avis(){
            return $this->type_avis;
        }

        public function settype_avis (string $type_avis) {
            $this->type_avis = $type_avis;
        }

    }
    ?>
