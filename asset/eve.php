<?php
class evenement
{
    private ?int $id_eve;
    private ?string $date_eve=null;
    private ?string $type_eve=null;

    public function __construct(int $id_eve,string $date_eve, string $type_eve)
    {
        $this->id_eve=$id_eve;
        $this->date_eve=$date_eve;
        $this->type_eve=$type_eve;
    }

    public function setid_eve( int $id_eve)
    {
        $this->id_eve=$id_eve;
    }

    public function setdate_eve(string $date_eve)
    {
        $this->date_eve=$date_eve;
    }

    public function settype_eve(string $type_eve)
    {
        $this->type_eve=$type_eve;

    }

    public function getid_eve()
    {
        return $this->id_eve; 
    }

    public function getdate_eve()
    {
        return $this->date_eve; 
    }

    public function gettype_eve()
    {
        return $this->type_eve; 
    }


}
?>