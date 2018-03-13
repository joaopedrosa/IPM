<html>
    <body>
<?php
    
    $modo=$_REQUEST['modo'];
    $table=$_REQUEST['table'];
    $morada=$_REQUEST['morada'];
    $codigo=$_REQUEST['codigo'];

    try
    {
        $host = "db.ist.utl.pt";
        $user ="ist181538";
        $password = "tjlx6434";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->query("start transaction;");

        if($table=='Edificio'){
            if($modo=='Adicionar'){
                $sql = "INSERT INTO edificio values ('$morada');";
            }
            if($modo=='Remover'){
                $sql = "DELETE FROM edificio WHERE (morada='$morada');";
               
            }
        }
        else if($table=='Espaco'){
            if($modo=='Adicionar'){
                $sql = "INSERT INTO espaco (morada,codigo) values ('$morada','$codigo');";
            }
            if($modo=='Remover'){

            }

        }

        

        echo("<p>$sql</p>");

        $db->query($sql);

        $db->query("commit;");

        $db = null;
    }
    catch (PDOException $e)
    {
        $db->query("rollback;");
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>

<a href="base.php"> Voltar</a>



    </body>
</html>
