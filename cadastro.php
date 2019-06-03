<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> CRUD - Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <form method="POST" action="processa.php">
            <label> Nome : </label> 
            <input type="text" name="NOME" placeholder=" Digite seu nome completo"> <br> <br>
             <label> E-mail : </label> 
             <input type="email" name="EMAIL" placeholder=" Digite seu email"> <br> <br>
             <input type="submit" value="Cadastrar"> 
        </form>
            
            
          
            <?php
        // put your code here
        ?>
    </body>
</html>
