<?php
require 'simple_html_dom.php';

function clicrbs(){

$html = file_get_html('https://gauchazh.clicrbs.com.br/esportes/inter/ultimas-noticias/');
$resultados = $html->find('.timeline .card-article');

    foreach ($resultados as $noticia){

        $link = $noticia->find('a', 0)->href;
        $titulo = $noticia->find('h2', 0)->plaintext;
        
        //echo $titulo;
        echo '<a href=https://gauchazh.clicrbs.com.br'.$link.'>'.$titulo.'</a>';
        echo "<hr/>";
    }

}

?>