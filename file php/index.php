<?php require __DIR__ . '/../partials/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <div class="container">
            <?php foreach($database as $data){ ?>
                <div class="card">
                    <img src="<?php echo $data['poster'] ?>" alt=""> 
                    <h3><?php echo $data['title'] ?></h3>
                    <p><?php echo $data['author'] ?></p>
                    <h6><?php echo $data['year'] ?></h6>
                    <p><?php echo $data['genre'] ?></p>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>