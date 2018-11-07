<html>
<head>
    <titlle  > Tableau des constantes prédéfinies</titlle>
</head>
<body>
<table border="2">
    <th>Nom cte</th>
    <th>Valeur</th>
    <?php
    ($tab = get_defined_constants());
    foreach ($tab as $cle => $valeur){ ?>
    <tr>
        <td><?=$cle?></td>
        <td><?=$valeur?></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>