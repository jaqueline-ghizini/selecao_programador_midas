<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Calcular Número Primo Inferior</title>
	<meta charset="utf-8">
</head>
<body>  
    <div class="row">
		<h1>Calcular Número Primo Inferior</h1>
	</div>

    <div class="row">
    	<div class="col-md-4">
	        <form action="funcao_primo_inferior.php" method="post">
                <label>
			        Informe um número inteiro:
			        <input type="text" name="numero">
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
                $numero=0;
                $divisor=2;
                $resto=0.0;
                
            if(!empty($_POST)){
                
                $numero = $_POST['numero'];
                //$divisor = $numero - 1;

                function calcular_primo($parametro_numero,$parametro_divisor){
                    return $parametro_numero%$parametro_divisor;
                }

                function decrescente_numero($parametro_numero){
                    return $parametro_numero - 1;
                }
                function crescente_divisor($parametro_divisor){
                    return $parametro_divisor + 1;
                }
                
                if($numero<=2){
                    echo "Resultado = 0";
                }else
                if(!is_int($numero)){
                
                while ($numero>1){ 
                    $numero = decrescente_numero($numero);

                    while($divisor < $numero){
                        $resto = calcular_primo($numero,$divisor);
                        if($resto==0){
                            break;
                        }
                        $divisor = crescente_divisor($divisor);
                    }

                    if($resto==0){
                        
                        if($numero==2){
                            echo "$numero é o número primo inferior";
                        }

                    }else{
                        echo "$numero é o número primo inferior"; 
                        break;
                    }

                    $divisor = 2;
                }
                }else{
                    echo 'Você não digitou um número interiro. Favor Digitar novamente!';
                }

            }

            ?>

        </div>
	</div>
	
</body>
</html>