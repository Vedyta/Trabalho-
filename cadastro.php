
<html>
    <head>
        
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title> CRUD - Cadastrar</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
     
        
    </head>
    <body>
        <div id="container">
<div id="page_header">
    <a href=""> </a>
</div>
<div id="page_menu">
<ul>
    <li class="ínicio" id="game"><a href="http://localhost/CBC/index.php" title="Início"><b>Início </b></a></li>
<li id="federações"><a href="http://localhost/CBC/index.php" title="Federações"><b>Federações </b></a></li>
<li id="corridas"><a href="http://localhost/CBC/index.php" title="Corridas"><b>Corridas </b></a></li>
<li id="bmx"><a href="http://localhost/CBC/index.php" title="Bmx"><b>BMX </b></a></li>
<li id="mtb"><a href="http://localhost/CBC/index.php" title="Moutain-Bike"><b>Moutain-Bike </b></a></li>
<li id="dh"><a href="http://localhost/CBC/index.php/" title="Downhill"><b>Downhill </b></a></li>
<li id="pista"><a href="http://localhost/CBC/index.php" title="Pistas"><b>Pistas </b></a></li> 
<li id="Cadastro"><a href="http://localhost/CBC/cadastro.php" title="Cadastro"><b> Cadastro</b></a></li>

</ul>
</div>

<div id="page_search">
<form action="http://localhost/CBC/index.php">
<div>
<h3>BUSCAR: </h3>
<input name="search" size="20" type="text" />
<input src="images/search_button.gif" alt="Go" class="button" type="image" />
<div class="clearthis">BRBR5;</div>
</div>
</form>
</div>

<div id="page_content">
<div id="welcome_text">
<div class="content_box">
    <h2>BEM VINDO </h2> <p>  A CONFEDERAÇÃO BRASILEIRA DE CICLISMO <br><br><br><br><br><br>
<p>
    Site desenvolovido para o cadastro de atletas que queiram se filiar em alguma federação de ciclismo, <p>divulgação da data e o local das corridas das modalidades BMX, MTB e DH. Confira no site da cbc <p>a classificação, fotos e videos das corridas
    <a href="http://localhost/CBC/index.php"> </a>
     
<br />
        
    </head>
    <body>
        <h1> Cadastrar Usuário </h1> 
        <br> 
        <br>
        <br>
        <form method="POST" action="processa.php">
            <label> Nome : </label> 
            <input type="text" name="NOME" placeholder=" Digite seu nome completo"> <br> <br>
             <label> E-mail : </label> 
             <input type="email" name="EMAIL" placeholder=" Digite seu email"> <br> <br>
              <label> Categoria : </label>  <select name="time">
<option value="bota">Bmx</option>
<option value="fla">Downhill</option>
<option value="flu">Mountain-bike</option>
              </select> <br><br>
               <label> Federação : </label>  <select name="time">
<option value="bota"></option>
<option value="fla"></option>
<option value="flu"></option>
              </select> <br><br>
<input type="submit" value="Enviar" />
<input type="reset" value="Cancelar" />
             <input type="submit" value="Cadastrar"> 
            
            
        </form>
            
            
          
            <?php
        // put your code here
        ?>
    </body>
</html>
