<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do sangue</title>
    <style>
        .positivo {
            background: yellowgreen; color: white; width: 250px; height: 25px; text-align: center; line-height: 25px; font-family: 'Trebuchet MS';
        }
        .perigo {
            background: black; color: white; width: 300px; height: 25px; text-align: center; line-height: 25px; font-family: 'Trebuchet MS';
        }
        </style>
</head>
<body>
    <?php
    if(isset($_GET['suaidade']) and !empty ($_GET['suaidade']) and isset($_GET['seupeso']) and !empty($_GET['seupeso'])) {
        $idade = intval($_GET['suaidade']);
        $peso = floatval($_GET['seupeso']);
    
        if ($idade >= 18 and $idade <= 60 and $peso >= 50 and $peso <= 110) {
            ?>
            <div class="positivo">Você pode doar seu sangue!</div>
            <?php
        } else {
            ?>
            <div class="perigo">Você não têm condições de fazer a doação!</div>
            
            <?php
        }
      
    } else {
        ?>
        <div class="perigo">Os dados não foram enviados!</div>
        <?php
    }
    ?>
    <br/><br/><br/>
    <a href="./">Retornar no formulário</a>
</body>
</html>
