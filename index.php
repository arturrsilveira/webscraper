<?php
require 'simple_html_dom.php';

    
    $html = file_get_html('https://gauchazh.clicrbs.com.br/esportes/inter/ultimas-noticias/');
    $resultados = $html->find('.timeline .card-article');
    echo '<h2>Clicrbs</h2>';

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('h2', 0)->plaintext;
        
        echo '<a href=https://gauchazh.clicrbs.com.br'.$link.'>'.$titulo.'</a>';
        echo "<hr/>";
    }

    $html = file_get_html('https://globoesporte.globo.com/rs/futebol/times/internacional/');
    $resultados = $html->find('.feed-post-body');
    echo '<h2>Globoesporte.com</h2>';

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('a', 0)->plaintext;
        
        echo '<a href='.$link.'>'.$titulo.'</a>';
        echo "<hr/>";
    }

    $html = file_get_html('http://www.correiodopovo.com.br/busca/?Sessao=Esportes&ED=Inter');
    $resultados = $html->find('.ComfotoQ');
    echo '<h2>Correio do Povo</h2>';

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('a', 0)->plaintext;
        
        //echo $titulo;
        //echo $link;
        echo '<a href=http://www.correiodopovo.com.br'.$link.'>'.$titulo.'</a>';
        echo "<hr/>";
        
    }

    $html = file_get_html('https://jbfilhoreporter.com.br/categorias/inter/');
    $resultados = $html->find('.mvp-blog-story-wrap');
    echo '<h2>JB Reporter Filho</h2>';

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('h2', 0)->plaintext;
        
        //echo $titulo;
        //echo $link;
        echo '<a href='.$link.'>'.$titulo.'</a>';
        echo "<hr/>";
        
    }

    $html = file_get_html('https://twitter.com/scinternacional/');
    $resultados = $html->find('.content');
    echo '<h2>Twitter Oficial do Inter</h2>';

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('p', 0)->plaintext;
        
        echo $titulo;
        echo "<hr/>";
        
    }
?>


