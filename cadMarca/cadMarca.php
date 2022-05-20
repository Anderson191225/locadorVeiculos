<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Marca.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
          Cadastrar
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
      $marca = new Marca;
      if(isset($_POST['submit'])):
            $nome = $_POST['nome'];
          

            $marca->setNome($nome);
           

            if($marca->insert()){
                echo " inserido com sucesso";
            }
      endif;
    ?>
                <div class="box">
                
                    <form action="" method="post">
                        <fieldset>
                            <legend><b>Cadastrar Marca</b></legend><br>
                            <div class="inputBox">
                                <input type="text" name="nome" id="nome" class="inputUser" required>
                                <label for="nome" class="labelInput">Marca</label>
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