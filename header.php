<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a></li>
                
                <!-- Dropdown de Soluções -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Soluções
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo home_url('/omnichannel'); ?>">Omnichannel</a>
                        <a class="dropdown-item" href="<?php echo home_url('/ciberseguranca.php'); ?>">Cibersegurança</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/cases'); ?>">Cases</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/sobre'); ?>">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/fale-conosco'); ?>">Fale Conosco</a></li>
            </ul>
        </div>
    </nav>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
