<?PHP
class Event
{
    private $id;
    private $nom;
    private $date;
    private $type;
    private $description;


    public function __construct($nom,$date,$type,$description)
    {
        $this->nom=$nom;
        $this->date=$date;
        $this->type=$type;
        $this->description=$description;

    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getDate()
    {
        return $this->date;
    }

    
    public function getnom()
    {
        return $this->nom;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }






}

?>
