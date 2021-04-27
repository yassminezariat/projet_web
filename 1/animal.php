<?php
    class animal{
        private $id_animal;
        private ?string $race=null;
        private ?string $espece=null;
        private ?string $date_naissance=null;
        private ?int $prix=null;
        private ?string $origine=null;
        private ?string $image=null;












        public function __construct(string $race, string $espece, string $date_naissance, int $prix,string $origine,string $image) {
           $this->race=$race;
           $this->espece=$espece;
           $this->date_naissance= $date_naissance;
           $this->prix=$prix;
           $this->origine=$origine;
           $this->image=$image;


        }

        public function getId() {
            return $this->id_animal;
        }

        public function getrace(){
            return $this->race;
        }

        public function setrace (string $race) {
            $this->race=$race;
        }

        public function getespece (){
            return $this->espece;
        }

        public function setespece (string $espece) {
            $this->espece=$espece;
        }

        public function getdate_naissance() {
            return $this->date_naissance;
        }

        public function setdate_naissance (date $date_naissance) {

            $this->date_naissance=$date_naissance;
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
