<!-- 
SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>

    <?php include_once 'functions.php' ?>

    <?php foreach ($students as $student) { ?>


        <p>
            Nome: <?= $student['name'] ?><br />
            Cognome: <?= $student['last_name'] ?><br />
            Media: <?= vote_average($student['votes']) ?>
        </p>


    <?php } ?>


</body>

</html>