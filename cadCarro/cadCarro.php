<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Carro.php';

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
      $carro = new Carro;
      if(isset($_POST['submit'])):
            $modelo = $_POST['modelo'];
            $marca = $_POST['marca'];
            $ano = $_POST['ano'];
            $cor = $_POST['cor'];
            $nroPortas = $_POST['nroPortas'];
            $valorDiaria = $_POST['valorDiaria'];

            $carro->setModelo($modelo);
            $carro->setMarca($marca);
            $carro->setAno($ano);
            $carro->setCor($cor);
            $carro->setNroPortas($nroPortas);
            $carro->setValorDiaria($valorDiaria);
           

            if($carro->insert()){
                echo " inserido com sucesso";
            }
      endif;
    ?>
                <div class="box">
                
                    <form action="" method="post">
                        <fieldset>
                            <legend><b>Cadastrar carro</b></legend><br>
                            <div class="inputBox">
                                <input type="text" name="modelo" id="modelo" class="inputUser" required>
                                <label for="modelo" class="labelInput">Modelo</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="marca" id="marca" class="inputUser" required>
                                <label for="marca" class="labelInput">Marca</label>
                            </div>
                            <div class="inputBox">
                                <input type="number" name="ano" id="ano" class="inputUser" required>
                                <label for="ano" class="labelInput">Ano</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="text" name="cor" id="cor" class="inputUser" required>
                                <label for="cor" class="labelInput">Cor</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="number" name="nroPortas" id="nroPortas" class="inputUser" required>
                                <label for="nroPortas" class="labelInput">Número de portas</label>
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <input type="number" name="valorDiaria" id="valorDiaria" class="inputUser" required>
                                <label for="valorDiaria" class="labelInput">Valor da diária</label>
                            </div>
                            <br><br>
                           
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