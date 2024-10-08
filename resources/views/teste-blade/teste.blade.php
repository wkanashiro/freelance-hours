<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Blade</title>
</head>
<body>
    <!-- Blade possibilita que eu escreva desta forma: -->
    @for ($i = 0; $i < 10; $i++)
        <li>{{ $i }}</li>
    @endfor

    <!-- ao invés desta: -->
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <li><?php echo $i; ?></li>
    <?php } ?>

    @auth
    <span>Você está autenticado</span> 
    @endauth


</body>
</html>