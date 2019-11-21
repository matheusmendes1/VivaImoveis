<?php
// Inicializa a sessão
session_start();

require "conexaoMysql.php";

function filtraEntrada($dado)
{
    $dado = trim($dado);               // remove espaços no inicio e no final da string
    $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
    $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados

    return $dado;
}

function loginUsuario($email, $senha, $mysqli)
{

	  $SQL = "
	    SELECT Id,Nome,Usuario,Senha 
	    FROM Funcionario
	    WHERE Usuario = ?
	    LIMIT 1
	  ";
  
  $stmt = $mysqli->prepare($SQL);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $stmt->store_result();
  
  // Resgata o resultado nas variáveis
  $stmt->bind_result($Id,$nome,$email, $senhaHash);
  $stmt->fetch();
  
  if ($stmt->num_rows == 1)
  {
    if (password_verify($senha, $senhaHash))
    {
       //Senha correta
            
      //Armazena dados úteis para confirmação de login em outros scripts PHP
      $_SESSION['idFuncionario'] = $Id;
      $_SESSION['nomeFuncionario'] = $nome;
      $_SESSION['senhaFuncionario'] = hash('sha512', $senhaHash . $_SERVER['HTTP_USER_AGENT']);
      $_SESSION['emailFuncionario'] = $email;

      // Sucesso no login
    return true;
       
   }
    else
    {
      // Senha incorreta
      return false;
    }
  }
  else
  {
    // Usuário não existe
    return false;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
	// Define e inicializa as variáveis
	$email = $password = "";

	$email = filtraEntrada($_POST["email"]);     
	$password = filtraEntrada($_POST["password"]);

	$conn = conectaAoMySQL();

	$encontrou = loginUsuario($email,$password,$conn);
	
	// Redireciona para o script restrict
	if($encontrou){
		header("Location: restrict.php");
		//header("Location: restrict.php?nome=".$userName."");
	}else{
	?>
		<script type="text/javascript">
		alert("Funcionario não encontrado!");
		window.location.href = "index.php";
		</script>
	<?php
	}	
}

?>