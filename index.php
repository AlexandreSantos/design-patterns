<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        require_once "class/AvaliacaoOld.class.php";

        $avaliacao = new Avaliacao();
        //        $avaliacao

        $xml = simplexml_load_file("config.xml"); // Carrega o arquivo de configuração

        // Carrega parâmetros de conexão 1
        $dns1 = $xml->database1[0]->dns;
        $user1 = $xml->database1[0]->user;
        $passwd1 = $xml->database1[0]->passwd;
        
        // Carrega os parâmetreos da conexão 2
        $dns2 = $xml->database2[0]->dns;
        $user2 = $xml->database2[0]->user;
        $passwd2 = $xml->database2[0]->passwd;

        $matricula = "LAD3999";

        try{
            $dbh1 = new PDO($dns2, $user2, $passwd2, array(PDO::ATTR_PERSISTENT => true));
        }catch(PDOException $ex){
            echo "erro: " . $ex->getTraceAsString();
        }

        /**
         *  Verifica se o aluno está no novo sistema
         */
        $stmt = $dbh1->prepare("SELECT * FROM nota_aluno WHERE NRUSA = :matricula");
        $stmt->bindParam(':matricula', $matricula);
        $stmt->execute();
        if($stmt->rowCount() > 0)
            echo "O aluno está no novo sistema!";
        else
            echo "O aluno NÃO está no novo sistema....";




        ?>
    </body>
</html>
