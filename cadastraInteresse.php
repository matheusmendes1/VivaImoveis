<?php 

require "conexaoMysql.php";

$msg = "";

function filtraEntrada($dado)
{
    $dado = trim($dado);               // remove espaços no inicio e no final da string
    $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
    $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados

    return $dado;
}


function insertInteresse($conn,$idImovel,$nome,$email,$telefone,$descricao){


  $sql = "
    SELECT Email, Imovel_ID
    FROM Interesse
    WHERE Email = '$email' AND Imovel_ID = $idImovel
  ";

  if (!$resultado = $conn->query($sql)){
      return 'Falha no Envio do Interesse!';     
  }

  if ($resultado->num_rows > 0){
     return 'Você já demonstrou interesse neste Imóvel!';   
  }

  try{
    if (!$conn->query("INSERT INTO Interesse VALUES($idImovel,'$nome','$email','$telefone','$descricao')")){
        throw new Exception('Ocorreu um erro ao inserir o interesse: ' . $conn->error);
    }else{
      if($conn != null)
          $conn->close();

      return 'Interesse Enviado com Sucesso!';
    }
  }
  catch(Exception $e){
    return 'Aconteceu uma falha no envio: '. $e.getMessage();
  }

}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $idImovel = filtraEntrada($_POST["imovelId"]);
  $nome =  filtraEntrada($_POST["nome"]);
  $email =  filtraEntrada($_POST["email"]);
  $telefone =  filtraEntrada($_POST["telefone"]);
  $descricao =  filtraEntrada($_POST["descricao"]);

  $conn = conectaAoMySQL();

  $msg = insertInteresse($conn,$idImovel,$nome,$email,$telefone,$descricao);
  
  if($msg == 'Falha no Envio do Interesse!'){
    ?>
    <script type="text/javascript">
      alert("Falha no Envio do Interesse!");
      window.location.href = "search.php";
    </script>
    <?php
  }
  else if($msg == 'Você já demonstrou interesse neste Imóvel!'){
    ?>
    <script type="text/javascript">
      alert("Você já demonstrou interesse neste Imóvel!");
      window.location.href = "search.php";
    </script>
    <?php
  }
  else if($msg == 'Interesse Enviado com Sucesso!'){
    ?>
    <script type="text/javascript">
      alert("Interesse Enviado com Sucesso!");
      window.location.href = "search.php";
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
      alert("Ocorreu um erro ao Inserir o Interesse!");
      window.location.href = "search.php";
    </script>
    <?php
  }
}

 ?>