<?php

?>
<!doctype html>
<html lang="en">
<?php wp_head(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Webpack</title>
</head>
<body>
    <h1><?php the_title(); ?></h1>
    <div class="container">
        <h2>Making progress</h2>
    </div>

    <script src="<?php echo get_template_directory_uri();?>/bundled/bundle.js"></script>
</body>
</html>
