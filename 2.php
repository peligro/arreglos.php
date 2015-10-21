<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
        
        </head>
        <body>
            <h1>Ejercicio DOM</h1>
            <?php
              $paises=array("País 1","País 2","País 3","País 4","País 5","País 6","País 7","País 8","País 9","País 10","País 11","País 12","País 13","País 14");  
            ?>
            
            <form>
                <select name="pais">
                    <option value="0">Seleccione.....</option>
                    <?php
                    foreach($paises as  $key => $p )
                    {
                        $var=$key+1;
                        ?>
                        <option value="<?php echo $key+1;?>" <?php if($var==5){echo 'selected="true"';}?>> <?php echo $p;?> </option>
                        <?php
                    }
                    
                    ?>
                </select>   
            </form>
        </body>
    </html>


