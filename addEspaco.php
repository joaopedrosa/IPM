<html>
    <body>
        <h3>Adicionar Espaco</h3>
        <form method="post" action="update.php"> 
            <input type="hidden" name="table" value="Espaco"/>
	    <input type="hidden" name="modo" value="Adicionar"/>

            Morada: <input type="text" name="morada"/>
	       <br><br>
          
            Codigo: <input type="text" name="codigo"/>
         <br><br>
           <input type="submit" name="submit" value="Submeter"/>
        </form>
  <a href="base.php"> Voltar</a>

    </body>
</html>
