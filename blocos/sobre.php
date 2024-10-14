<?php get_header(); ?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Sobre Nós</h1>
        <video width="100%" controls>
            <source src="path/to/video.mp4" type="video/mp4">
            Seu navegador não suporta o vídeo.
        </video>
    </div>

    <?php get_template_part('blocos/bloco-desafios'); ?>
    <?php get_template_part('blocos/bloco-trajetoria'); ?>
    <?php get_template_part('blocos/bloco-conectar-proteger'); ?>
</div>

<?php get_footer(); ?>
