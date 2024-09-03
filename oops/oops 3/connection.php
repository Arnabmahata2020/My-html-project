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
    class insert extends connection
    {
        public function insert_data($name,$email)
        {
            $query = "INSERT INTO marks_student values('','$name','$email')";
            if (mysqli_query($this->conn, $query)) {
                echo "Successful";
            }
        }
    }
    class view extends connection
    {
        public function view_data()
        {
            $query = "SELECT * FROM marks_student";
            $result = mysqli_query($this->conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    return $result;
                }else{
                    return"false";
                }
            }
            public function delete_data($x)
            {
              $query = "DELETE FROM marks_student WHERE id=$x";
              $result = mysqli_query($this->conn, $query);
              return $result;
            }
        }

        class update extends connection{
            public function display_data($m)
            {
                $query="SELECT * FROM `marks_student` where `id`=$m";
                $result = mysqli_query($this->conn, $query);
                if (mysqli_num_rows($result) > 0) 
                {
                    return $result;
                }else

                {
                    return"false";
                }
               
            }

            public function edit_data($id,$nm,$mak)
            {
                
               $query="UPDATE `marks_student`SET name='$nm', marks='$mak' WHERE id=$id";
               $result = mysqli_query($this->conn, $query);

            }


        }
        

?>