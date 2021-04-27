<?php
    class produit{
        private $id_produit;
        private ?int $prix=null;
        private ?string $type=null;
        private ?string $appartenance=null;
        private ?string $desciprion=null;
        private ?string $image=null;




        public function __construct(int $prix, string $type, string $appartenance,string $desciprion, string $image) {
           $this->prix=$prix;
           $this->type=$type;
           $this->appartenance= $appartenance;
           $this->desciprion=$desciprion;
           $this->image=$image;


        }

        public function getId() {
            return $this->$id_produit;
        }

        public function getprix (){
            return $this->prix ;
        }

        public function setprix (string $prix) {
            $this->prix = $prix ;
        }

        public function gettype(){
            return $this->type;
        }

        public function settypee (string $type) {
            $this->type=$type;
        }

        public function getappartenance (){
            return $this->appartenance;
        }

        public function setappartenance (string $appartenance) {
            $this->appartenance=$appartenance;
        }

        public function getdescription() {
            return $this->desciprion;
        }

        public function setdesciprion (date $desciprion) {

            $this->desciprion=$desciprion;
        }


        public function getimage(){

            return $this->image;

        }

        public function setimage (string $image) {
            $this->image=$image;
        }



    }
?>
