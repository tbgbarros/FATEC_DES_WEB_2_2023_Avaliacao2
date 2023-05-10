<?php

class DBConnect { 
    private $servername = "127.0.0.1"; 
    private $username = "root";
    private $password = "";
    private $dbname="vestibular";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }



    public function inserir_candidato($nome, $cpf, $telefone, $esc){
        try {
            $sql = "INSERT INTO candidatos (nome, rg_cpf, telefone, esc_publica )
                VALUES ('$nome', '$cpf', '$telefone' , '$esc')";
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }

    public function apagar_candidato($del){
        try {
            $sql = "DELETE FROM candidatos WHERE $del=id";
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }

    public function listar_candidato(){
        try {

            $sql = "SELECT id, nome, rg_cpf, telefone, esc_publica  FROM candidatos";
            $result = $this->$conn->exec($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Name</th><th>CPF</th><th>Telefone</th><th>Publica 1=SIM | 0=Não</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td> ".$row["rg_cpf"]." </td><td>".$row["telefone"]."</td><td> ".$row["esc_publica"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }

    public function update_candidato(){
        try {
            $sql = "UPDATE candidatos SET nome='$nome', rg_cpf='$cpf', telefone='$telefone', esc_publica='$esc' WHERE id=$id";
            $result = $this->$conn->exec($sql);

            if ($result->num_rows > 0) {
                echo "Dados atualizados";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td> ".$row["rg_cpf"]." </td><td>".$row["telefone"]."</td><td> ".$row["esc_publica"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }



    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }
}