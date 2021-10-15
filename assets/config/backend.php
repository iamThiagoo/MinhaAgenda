<?php 

    session_start();
    include_once("connect.php");

    # Show the contacts in index.php, if exists...
    $query = "SELECT id, name, phone FROM contacts";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();

    # Actions of the system
    if(!empty($_POST)){

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $observation = $_POST["observation"];

        $query = "INSERT INTO contacts(name, phone, observations) VALUES (:name, :phone, :observation)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        }
        catch(PDOException $e){
            $e = $e->getMessage();
            echo "Erro: $e";
        }
        
        header("Location: http://localhost/agenda/");
    }

    $conn = null;