<?php




class Usuario{
    //propiedades privadas porque solo podemos acceder a ellas
    //mediante metodos
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    //conectamos a la base de datos con el constructor
    public function __construct(){
        $this->db = Database::connect();
    }


    function getId(){
        return $this->id;
    }

    function getNombre(){
        //con real_escape escapamos los datos
        return $this->nombre;
    }

    function getApellidos(){
        //con real_escape escapamos los datos
        return $this->apellidos;
    }

    function getEmail(){
        //con real_escape escapamos los datos
        return $this->email;
    }

    function getPassword(){
        //con real_escape escapamos los datos
        //return $this->password;
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost'=>4]);
    }

    function getRol(){
        return $this->rol;
    }

    function getImagen(){
        return $this->imagen;
    }

    function setId($id){
        $this->id=$id;
    }

    function setNombre($nombre){
        $this->nombre=$this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos){
        $this->apellidos= $this->db->real_escape_string($apellidos);
    }

    function setEmail($email){
        $this->email=$this->db->real_escape_string($email);
    }

    function setPassword($password){
        //$this->password=password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT,['cost'=>4]);
        $this->password=$password;
    }

    function setRol($rol){
        $this->rol=$rol;
    }

    function setImagen($imagen){
        $this->imagen=$imagen;
    }


    //metodo para guardar el objeto en la base de datos

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user',null);";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result= true;
        }
        return $result;
    }

    //metodo para el login
    
    public function login(){
        $result = false;
        $email = $this->email;
        $password = $this->password;

        //Comprobar si existe el usario
        $sql = "SELECT * FROM usuarios WHERE email='$email';";
        $login = $this->db->query($sql);

        
        

        //si login da true y es igual a una fila..
        if($login && $login->num_rows==1){
            //sacar el objeto que nos da la base de datos
            $usuario = $login->fetch_object();

            //var_dump($usuario);
            //die();
            // Verificar la contraseña
            $verify = password_verify($password, $usuario->password);
            
            if($verify){
                $result = $usuario;
            }
        }
        return $result;
    }

}