
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class= container>
     <table class ="table table-hover table-dark  ">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Age</td>
                <td>Adresse</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($personnes as $p ) {  ?>
            <tr>
                <td> <?php echo $p->getNom(); ?>  </td> <!-- <?php echo $p->getNom(); ?> == <?= $p->getNom(); ?> -->
                <td> <?= $p->getPrenom(); ?>  </td>
                <td> <?= $p->getAge(); ?></td>
                <td> <?= $p->getAdresse(); ?></td>
            </tr>
            <?php  }?>
        </tbody>
     </table>
    </div>
    
</body>
</html>




