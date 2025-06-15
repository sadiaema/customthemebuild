<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1>Welcome to <?php bloginfo('name'); ?></h1>
    <p>This is my first testimonial.</p>
    <?php wp_footer (); ?>
    
</body>
</html>