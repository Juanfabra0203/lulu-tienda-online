    <?php
    
    require_once "./config/conexion.php";

    class Usuario{
        private $conn;
        private $tabla = "usuarios";

        public function __construct(){
            $db = new Conexion();
            $this-> conn = $db->conectar();
        }

        public function registrar($nombre,$email,$password){

            $sql = "INSERT INTO " . $this->tabla . " (nombre,email,password_hash) VALUES (:nombre , :email , :password_hash)";

            $stmt = $this->conn ->prepare($sql);
            $stmt ->bindParam(":nombre", $nombre);
            $stmt ->bindParam(":email", $email);
            $stmt ->bindParam(":password_hash", $password);
            
            return $stmt -> execute();

        }

    }
    
    
    
    
    ?>