<?php
get_header(); // Carrega o header.php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content(); // Exibe o conteúdo da página/post
    endwhile;
else :
    echo '<p>Desculpe, nenhuma página encontrada.</p>';
endif;

get_footer(); // Carrega o footer.php
?>
