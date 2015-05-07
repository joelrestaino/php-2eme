<?php
//Déclaration de variables
$nombre = $_POST["nombre"];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Table de multiplication et d'addition binaire</title>
    </head>
    <body>

        <table border="1" width="400">
        <?php
        // Nombre de colonnes
        // Nombre de lignes
        $NbrCol 	= $nombre;
        $NbrLigne 	= $nombre;

        ?>
        <thead>
            <th>
        <?php	
        // Ligne des données
        for ($j=1; $j<$NbrCol; $j++) { ?>
                <td style="background:#bc9696;"><?php echo $j; ?></td>
        <?php	} ?>
            </th>
        </thead>

        <tbody>
        <?php
            // Lignes escaliers
            for ($i=1; $i<$NbrLigne; $i++) { 
        ?>
            <tr>
        <?php		for ($j=1; $j<$NbrCol; $j++) {
                    // 1ere colonne
                    if ($j==1) { 
        ?>		<td style="background:#bc9696;"><?php echo $i; ?></td>
        <?php			}
                    // colonnes suivantes
                    if ($i==$j) {
        ?>		<td>
        <?php			} else {
            
            $heximal = ($j*$i);
            $convert = base_convert($heximal, 10, $nombre);
        ?>		<td>
        <?php			}
                // Résulatat à afficher
                echo $convert;
        ?>		</td>
        <?php	} 
        ?>
            </tr>
        <?php	$j=1;
        }
        ?>
        </tbody>
        </table>
                <table border="1" width="400">
        <?php
        // $NbrCol : le nombre de colonnes
        // $NbrLigne : le nombre de lignes
        $NbrCol 	= $nombre;
        $NbrLigne 	= $nombre;

        ?>
        <thead>
            <th>
        <?php	for ($j=1; $j<$NbrCol; $j++) { ?>
                <td style="background:#bc9696;"><?php echo $j; ?></td>
        <?php	} ?>
            </th>
        </thead>

        <tbody>
        <?php
            // lignes suivantes
            for ($i=1; $i<$NbrLigne; $i++) { 
        ?>
            <tr>
        <?php		for ($j=1; $j<$NbrCol; $j++) {
                    // 1ere colonne (colonne 0)
                    if ($j==1) { 
        ?>		<td style="background:#bc9696;"><?php echo $i; ?></td>
        <?php			}
                    // colonnes suivantes
                    if ($i==$j) {
        ?>		<td>
        <?php			} else {
            $heximal = ($j+$i);
            $convert = base_convert($heximal, 10, $nombre);
        ?>		<td>
        <?php			}
                // -------------------------
                // DONNEES A AFFICHER dans la cellule
                echo $convert;
                // -------------------------
        ?>		</td>
        <?php	} 
        ?>
            </tr>
        <?php	$j=1;
        }
        ?>
        </tbody>
        </table>

    </body>
</html>
