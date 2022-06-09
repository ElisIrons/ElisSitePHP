<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Onde Comer</title>
        <link rel='stylesheet' href="estilo.css" type="text/css">
    </head>
    
    <body>

        <?php
        include("topo.php");
        ?>

        <?php
            include("links.php");
        ?>  
    
    <div id='corpo'>
            <main>
                <h2>Dados Cadastrais</h2>
                <section class="caixa">
            		<fieldset>
                    <legend>Informe os dados a seguir e ganhe um cupom de 50% de desconto </legend>
            <BR>
            
                <form action ="dados_recebidos.php" method="post">
					<div>

						<label for="nome">Nome completo: </label> <br>
						<input type="text" name="nome" id="nome">
					</div>
            <BR>
					<div>
						<label for="data">Data de nascimento:</label> <br>
						<input type="date" name="data" id="data"> 
					</div>
		    <BR>
					<div>	
						<label for="sexo">Sexo:</label> <br>
						<input type="radio" name="sexo" value="F" id= "sexo">Feminino<br>
			    		<input type="radio" name="sexo" value="M" id="sexo">Masculino<br>
			    	</div>
        
			<BR>
                    <div>
                        <label for="email">E-mail: </label> <br>
                        <input type= "text" name="email" id="email">
                    </div>
            <BR>
                <button type="submit">Cadastrar</button>

				</form>
            
			</fieldset>
		</section>
			</main>

		</body>
	</HTML>
   