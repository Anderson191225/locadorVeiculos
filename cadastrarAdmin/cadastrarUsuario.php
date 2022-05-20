<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Usuario.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
          Cadastre-se
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
    </head>
        <body>
           
               
                <header class="bg1">
                  
                        <nav>
                            <div>
                                <img src="imagens/logo6.png" alt="" class="logo">
                            
                            </div>
                            <button>&#9776;</button>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="">Carros</a></li>                                
                                <li><a href="">Cadastrar carro</a></li>
                                
                            </ul>
                        </nav>
                    
                </header>
                <?php    
      $usuario = new Usuario;
      if(isset($_POST['submit'])):
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $opcao = $_POST['opcao'];
            $data_nascimento = $_POST['data_nascimento'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario->setNome($nome);
            $usuario->setCpf($cpf);
            $usuario->setTelefone($telefone);
            $usuario->setOpcao($opcao);
            $usuario->setData_nascimento($data_nascimento);
            $usuario->setCidade($cidade);
            $usuario->setBairro($bairro);
            $usuario->setRua($rua);
            $usuario->setNumero($numero);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            

            if($usuario->insert()){
                echo "Usuario ". $nome. " inserido com sucesso";
            }
      endif;
    ?>
                <div class="box">
                
                    <form action="" method="post">
                        <fieldset>
                            <legend><b>Cadastrar</b></legend><br>
                            <div class="inputBox">
                                <input type="text" name="nome" id="nome" class="inputUser" required>
                                <label for="nome" class="labelInput">Nome completo</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="cpf" id="cpf" class="inputUser" required>
                                <label for="cpf" class="labelInput">CPF</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                                <label for="telefone" class="labelInput">Telefone</label>
                            </div>
                            <p>Funcionário:</p>
                            <input type="radio" id="sim" name="opcao" value="sim" required>
                            <label for="sim">Sim</label>
                            <br>
                            <input type="radio" id="nao" name="opcao" value="nao" required>
                            <label for="nao">Não</label>
                            <br><br>
                            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
                            <br><br><br>
                            <div class="inputBox">
                                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                                <label for="cidade" class="labelInput">Cidade</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="bairro" id="bairro" class="inputUser" required>
                                <label for="bairro" class="labelInput">Bairro</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="rua" id="Rua" class="inputUser" required>
                                <label for="rua" class="labelInput">Rua</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="number" name="numero" id="numero" class="inputUser" required>
                                <label for="numero" class="labelInput">Número</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="email" id="email" class="inputUser" required>
                                <label for="email" class="labelInput">Email</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                
                                 <input id="senha" type="password" name="senha" class="inputUser" required>   
                                 <label for="senha" class="labelInput">Senha</label>
                            </div>
                            <br><br>
                            <input type="submit" name="submit" id="submit">

                        </fieldset>
                    </form>
                
                  </div>
                    

                <footer class="bg3">
                    <p>Informações ao consumidor: Locar Rent a Car S/A - CNPJ nº 125.970.085/0001-99</p>

                        <p>Sede: Avenida Barão do Rio Branco, n° 600 - Guanambi - CEP: 46430-000 - Guanambi - BA</p>
                        
                        <p>Central de Reservas e Assistência a Clientes 24h: 0800 555 8080</p>
                        
                       <p> Central de Reservas 24 horas: 0 800 555 9000 | Assistência a Clientes 24 horas: 0 800 555 9000</p>
                       <p> E-mail: centraldereservas@locar.com</p>
                </footer>
            
        </body>
</html>