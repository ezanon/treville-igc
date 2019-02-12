<h1>Single Histórico</h1>
<?php

$posts = get_post();

      
setup_postdata($post);

$fields = get_fields();
if ($fields):
    foreach ($fields as $name => $value):
        $$name = $value;
    endforeach;
endif;

$titulo = the_title();
$link = get_the_permalink();

// data
echo the_field('data') . "<br>";

// titulo
echo the_field('titulo') . "<br>";

//resumo
if ($resumo)
    echo the_field('resumo') . "<br>";

// link
echo "<a href='$link' target=_blank >Mais informações</a><br>";

//texto
echo $texto . "<br>";

// imagem
$imagem = get_field('imagem');
echo "<img src='{$imagem['url']}' width=800 /> <br>";

// arquivo pdf
$pdf = get_field('arquivo');
if ($pdf) {
    $url = $pdf['url'];
    $title = $pdf['title'];
    echo "<a href='$url' target=_blank>$title</a>";
}

echo "<hr>";
 
wp_reset_postdata();
?> 
