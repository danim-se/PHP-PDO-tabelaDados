<?php

require_once(__DIR__."/../vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Model\Aluno;

$nomedobanco = 'chamadaonline';
$servidordobancodedados = 'localhost';
$usuario = 'root';
$senha = '';

$a = new Aluno();

$logger = new Logger('####Aprendendo PDO');
$logger->pushHAndler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
$logger->info("Testando se monolog ta funcionando...");


function get_connection(){
    $dns = "mysql:host=localhost;dbname=chamadaonline;charset=utf8mb4";
    $conn = new \PDO($dns, "root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

$c = get_connection();

$query = "SELECT * FROM aluno";
$statement = $c->prepare($query);
$statement->execute();



while ($dados = $statement->fetch(\PDO::FETCH_ASSOC)){
    //echo '<table border="1"> <tr> <td>'. $dados['id'].' </td> </tr> </table>';

    echo '<center><table border="1" width="100" height="90"> <tr> <td>'. $dados['nome'].' </td> </tr> </table> </center>';

    //var_dump($dados);

        
}


