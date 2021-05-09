<?php
class sponsor
{
    private ?int $id_spons;
    private ?string $date_spons;
    private ?string $email_spons;
    private ?string $nom_spons;
    private ?string $prenom_spons;
    private ?string $type_spons;

    public function __construct(int $id_spons,string $date_spons,string $email_spons,string $nom_spons,string $prenom_spons,string $type_spons)
    {
        $this->id_spons=$id_spons;
        $this->date_spons=$date_spons;
        $this->email_spons=$email_spons;
        $this->nom_spons=$nom_spons;
        $this->prenom_spons=$prenom_spons;
        $this->type_spons=$type_spons;
    }
    public function setid_spons(int $id_spons)
    {
        $this->$id_spons=$id_spons;
    }
    public function setdate_spons( string $date_spons)
    {
        $this->$date_spons=$date_spons;
    }

    public function setemail_spons(string $email_spons)
    {
        $this->$email_spons=$email_spons;

    }
    public function setenom_spons(string $nom_spons)
    {
        $this->$nom_spons=$nom_spons;

    }
    public function setprenom_spons(string $prenom_spons)
    {
        $this->$prenom_spons=$prenom_spons;

    }
    public function settype_spons(string $type_spons)
    {
        $this->$type_spons=$type_spons;

    }

    public function getid_spons()
    {
        return $this->id_spons; 
    }

    public function getdate_spons()
    {
        return $this->date_spons; 
    }

    public function getemail_spons()
    {
        return $this->email_spons; 
    }

    public function getnom_spons()
    {
        return $this->nom_spons; 
    }

    public function getprenom_spons()
    {
        return $this->prenom_spons; 
    }

    public function gettype_spons()
    {
        return $this->type_spons; 
    }

    
}
?>