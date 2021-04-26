<?php
    class plante{
        private $id_plante;
        private ?string $espece=null;
        private ?string $environnement=null;
        private ?int $prix=null;
        private ?string $origine=null;
        private ?string $image=null;




        public function __construct(string $espece, string $environnement, int $prix,string $origine,string $image) {

           $this->espece=$espece;
           $this->environnement= $environnement;
           $this->prix=$prix;
           $this->origine=$origine;
           $this->image=$image;


        }

        public function getId() {
            return $this->id_animal;
        }


        public function getespece (){
            return $this->espece;
        }

        public function setespece (string $espece) {
            $this->espece=$espece;
        }

        public function getenvironnement() {
            return $this->environnement;
        }

        public function setenvironnement (date $environnement) {

            $this->environnement=$environnement;
        }

        public function getprix (){
            return $this->prix ;
        }

        public function setprix (string $prix) {
            $this->prix = $prix ;
        }

        public function getorigine () {
            return $this->origine;
        }

        public function setorigine (string $origine) {
            $this->origine=$origine;
        }

        public function getimage(){

            return $this->image;

        }

        public function setimage (string $image) {
            $this->image=$image;
        }



    }
?>
