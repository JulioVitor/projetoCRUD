
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/estilo.css">
    
    <title>Cadastrar Funcionario</title>
    
</head>
<div class="box">
<body>
    <form action="./cadastro.php" method="POST">
        <fieldset>
                <legend> <b>Fórmulário de Cadastro</b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputName" required>
                    <label for="nome">Nome Completo</label>
                    
                </div>
                <br></br>
                
                <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputlogin" required>
                    <label for="login">Login</label>
                    
                </div>
                <br></br>
                
                <div class="inputBox">
                    <label for="pass">Senha: </label>
                    <input type="senha" id="senha" name="senha"
                    minlength="8">
                </div>
                <!-- <br></br> -->
                
                <P>Loja: </P>
                <input type="radio" id="loja01" name="loja" value="LOJA 01" required>
                <label for="loja01">LOJA 01</label>

                <input type="radio" id="loja02" name="loja" value="LOJA 02" required>
                <label for="loja02">LOJA 02</label>
                
                <input type="radio" id="loja03" name="loja" value="LOJA 03" required>
                <label for="loja03">LOJA 03</label>
                
                <input type="radio" id="loja04" name="loja" value="LOJA 04" required>
                <label for="loja04">LOJA 04</label>
                
                <br></br>

                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </form>
    </div>
</body>
</html>

