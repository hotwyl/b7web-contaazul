<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/login.css?<?= time() ?>">
</head>

<body>
    <div class="loginarea">
        <form method="POST">
            <input type="email" name="email" placeholder="Digite seu e-mail">
            <input type="password" name="password" placeholder="Digite sua Senha">
            <input type="submit" value="Entrar"> <br />

            <?php if (isset($error) && !empty($error)) : ?>
                <div class="warning"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>