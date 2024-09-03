<?php

class connection{
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $db_name='oops';
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
    }
}
class register extends connection{
    public function registration($name,$email,$gender,$address){

        $query = "INSERT INTO registation values('','$name','$email','$gender','$address')";
        if (mysqli_query($this->conn, $query)) {
            return 1;
        }
       
    }
    
}
// class Login extends connection{
//     public function login($name,$email){

//     }
// }
class show extends connection{
    public function displayAllRecord()
    {
        $query="SELECT * FROM registation";
        $result = mysqli_query($this->conn, $query);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }else{
            return"false";
        }
    }

    public function displayRecord($m)
    {
        $query="SELECT * FROM `registation` WHERE `id`=$m";

        $result = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }else{
            return"false";
        }
    }
}

class update extends connection{
    public function updateRecord($n, $e, $g, $a, $id)
    {
        $query="UPDATE `registation`SET name='$n', email='$e', gender='$g', address='$a' WHERE id=$id;";
        $result = mysqli_query($this->conn, $query);
    }
}

class delete extends connection{
    public function deleteRecord($x){
        $query = "DELETE FROM registation WHERE id=$x";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
}



    
    






 


