<html>
    <head>
        <title><?php echo $libro['titulo']?></title>
    </head>
    <body>
        <h1><?php echo $libro['titulo'] . " ISBN: " . $libro['isbn'];?></h1>
        <h2><?php echo number_format($libro['precio'], 2);?></h2>
    </body>
</html>