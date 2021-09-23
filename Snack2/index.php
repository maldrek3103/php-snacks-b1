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
    <?php include_once 'functions.php'?>
    
<?php foreach($students as $student) { ?>

    <?php foreach($student as $vote){?>
    <span>Nome: <?= $student['name'] ?><br/>Cognome: <?= $student['last_name'] ?><br/>Media: <?= vote_average()?></span>
    
    <?php } ?>

    <?php } ?>
</body>
</html>