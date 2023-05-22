<?php
  if (isset($_POST['cadastrar'])){
  
 $nome = $_POST['nome'];
 $telefone = $_POST['telefone'];
 $origem = $_POST['origem'];
 $datadecont = $_POST['datadecont'];
 $observacao = $_POST('observacao');

 define('MYSQL_HOST' , 'localhost:3306');
 define('MYSQL_USER' , 'root');
 define('MYSQL_PASSWORD' , '');
 define('MYSQL_DB_NAME' , 'cadastro_clientes');

 $sql = "INSERT INTO `cliente`(`nome`, `telefone`, `origem`, `datadecont`, `observacao`) VALUES ('$nome', '$telefone','$origem','$datadecont','$observacao')";

 $stmt = $pdo -> prepare($sql); 
 $stmt->execute([(`nome` -> $nome , `telefone` -> $telefone, `origem` -> $origem, `datadecont` -> $datadecont, `observacao` -> $observacao])
  }
 
 try {
  $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

} catch (PDOException $ex) {
  echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}


$cadastrarCliente = $pdo->prepare($sql);
$cadastrarCliente->execute();
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js "
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3 " crossorigin="anonymous ">
    </script>

<body>
  <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand text-white" href="/">SISTEMA WEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text-white active " href="/index.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/consulta.php">Consultar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container text-center">
      <div class="row align-items-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <td class="tabela_c">
                <?php
        $sql = "SELECT * FROM cliente";
        $result = $pdo->query( $sql );
        $rows = $result->fetchAll();

        for ($i=0; $i < count($rows); $i++) { 
        echo $rows[$i]['nome'] . "<br><br>";
        }
        ?>
              </td>
              <th scope="col">Telefone</th>
              <td class="tabela_c">
                <?php
        $sql = "SELECT * FROM cliente";
        $result = $pdo->query( $sql );
        $rows = $result->fetchAll();

        for ($i=0; $i < count($rows); $i++) { 
        echo $rows[$i]['telefone'] . "<br><br>";
        }
        ?>
              </td>
              <th scope="col">Origem</th>
              <td class="tabela_c">
                <?php
        $sql = "SELECT * FROM cliente";
        $result = $pdo->query( $sql );
        $rows = $result->fetchAll();

        for ($i=0; $i < count($rows); $i++) { 
        echo $rows[$i]['origem'] . "<br><br>";
        }
        ?>
              </td>
              <th scope="col">Data de contato</th>
              <td class="tabela_c">
                <?php
        $sql = "SELECT * FROM cliente";
        $result = $pdo->query( $sql );
        $rows = $result->fetchAll();

        for ($i=0; $i < count($rows); $i++) { 
        echo $rows[$i]['datadecont'] . "<br><br>";
        }
        ?>
              </td>
              <th scope="col">Observação</th>
              <td class="tabela_c">
                <?php
        $sql = "SELECT * FROM cliente";
        $result = $pdo->query( $sql );
        $rows = $result->fetchAll();

        for ($i=0; $i < count($rows); $i++) { 
        echo $rows[$i]['observacao'] . "<br><br>";
        }
        ?>
              </td>
            </tr>
          </thead>
</body>

</html>