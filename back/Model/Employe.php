<?PHP
	class employe{

		private ?int $idE = null;
		private ?string $nom = null;
        private ?string $prenom = null;
        private ?string $email = null;
        private ?int $age = null;
        private ?int $numero = null;
        private ?int $login = null;
		

		function __construct(string $nom, string $prenom, string $email, int $age, int $numero,int $login){
			
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
            $this->age=$age;
            $this->numero=$numero;
			$this->login=$login;
           
		}
		
		
		
		function getId(): int{
			return $this->idE;
		}
		function getName(): string{
			return $this->nom;
		}
        function getprenom(): string{
			return $this->prenom;
		}
		function getemail(): string{
			return $this->email;
		}
		function getage(): int{
			return $this->age;
		}
        function getnumero(): int{
			return $this->numero;
		}
        function getlogin(): int{
			return $this->login;
		}
       
				
     
		function setName(string $nom): void{
			$this->nom=$nom;
		} 

		function setprenom(string $prenom): void{
			$this->prenom=$prenom;
		}
	
        function setemail(string $email): void{
			$this->email=$email;
		}
		function setage(int $age): void{
			$this->age=$age;
		}
        function setnumero(int $numero): void{
			$this->email=$email;
		}
		function setlogin(int $login): void{
			$this->login=$login;
		}
      
	}
?>