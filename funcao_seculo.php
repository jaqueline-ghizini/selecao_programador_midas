<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Calcular Século</title>
	<meta charset="utf-8">
</head>
<body>  
    <div class="row">
		<h1>Calcular Século</h1>
	</div>

    <div class="row">
    	<div class="col-md-4">
	        <form action="funcao_seculo.php" method="post">
                <label>
			        Informe o ano:
			        <input type="text" name="ano">
		        </label>

                <br/><br/>
		        <input type="submit" value="Calcular">
                <br/><br/>
            </form>
        </div>
    </div>

	<div class="row">
		<div class="col-md-4">

            <?php 
                $ano=0;
                $resto=0.0; 
                $seculo=0;
            if(!empty($_POST)){  
		    
                $ano = $_POST['ano'];

                function calcular_diferenca($parametro_ano){
                    return $parametro_ano % 100;
                }
                function calcular_seculo($parametro_ano,$parametro_resto){
                    return ($parametro_ano - $parametro_resto)/100;
                }
                function calcular_seculo_resto($parametro_ano,$parametro_resto){
                    return ($parametro_ano - $parametro_resto)/100 +1;
                }
                
                $resto = calcular_diferenca($ano);
                
                if ($ano<=0){
                    echo "Ano inexistente";
                }else
                if (($ano>=1)&&($ano<=100)) {
                    echo " Século 1";
                }else
                if (($resto==0)||($resto=='')){
                    $seculo = calcular_seculo($ano,$resto);
                    //echo $resto.' é resto '.$ano;
                    echo 'Século '.$seculo;
                }else{
                    $seculo = calcular_seculo_resto($ano,$resto);
                    echo 'Século '.$seculo;
                }
		    
	    }
            ?>

        </div>
	</div>
	
</body>
</html>
