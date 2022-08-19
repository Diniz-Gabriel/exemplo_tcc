<?php

if(isset($_POST['submit']))
{
  /*  print_r('Nome:' . $_POST['nome']);
    print_r('<br>');
    print_r('Email:' . $_POST['email']);
    print_r('<br>');
    print_r('Senha:' . $_POST['senha']);
*/

  include_once('config.php');

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 
 $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");

 echo "<script>alert('" . $_POST['nome']  . " salvo com sucesso !!! ');</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(0,0,139), rgb(30,144,255));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom:  1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelIput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelIput,
        .inputUser:valid ~ .labelIput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text"  name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelIput">Insira seu nome completo</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text"  name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelIput">Insira seu email</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password"  name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelIput">Insira sua senha</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>