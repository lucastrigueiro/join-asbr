<?php

class DB{

	private $servername = "localhost";
	private $username = "lucas";
	private $password = "123";
	private $dbname = "testeasbr";
	private $conn;

	public function connect() {
		if(!$this->conn){
        	// Create connection
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if (mysqli_connect_errno()) {
    			die("Connection failed: " . mysqli_connect_error());
			}
		}
	}

    public function disconnect(){
    	if ($this->conn) {
			mysqli_close ($this->conn); 
		} 
    }

    public function insert($nome, $email, $telefone, $regiao, $unidade, $data_nascimento, $score){

    	$sql = "INSERT INTO formulario (nome, email, telefone, regiao, unidade, data_nascimento, score)
		VALUES ('$nome', '$email', '$telefone', '$regiao', '$unidade', '$data_nascimento', '$score')";
		//Return the result
		if (mysqli_query($this->conn, $sql)) {
    		return "Created successfully";
		} else {
    		return "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}

	}

	//Demais funcoes de crud (nao houve necessidade de implementacao)
	public function select() {   }
    public function delete() {   }
    public function update() {   }
}

?>