    
<?php get_header(); ?>

<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">               
                <b><h1>Barbie professora de artes</h1></b>
         
                 <p>A Barbie professora de artes vem com cavalete, tela e artigos de pintura que dá para usar de verdade e uma pequena aluna já que, afinal de contas, todo professor precisa de um estudante!

</p>
              
                <p>Ferreira Gullar disse que a arte existe porque a vida não basta e eu acredito piamente. Todos precisamos de arte para viver, mas algumas pessoas são realmente artistas de profissão e se dedicam a criá-la. Como eu acredito que artistas e professores revolucionam o mundo todos os dias, aqui está uma profissão que une essas duas missões.</p>           
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Barbie dentista</h1></b>
               
                <p>A boneca vem com cadeira de dentista, jaleco, óculos de proteção e até mesmo uma pequena paciente que está com um dentinho faltando. </p>
          
                <p>Cuidar bem dos dentes é extremamente importante para a saúde, e a boneca da Barbie dentista pode servir de inspiração tanto para quem quer conhecer a profissão quanto para aquelas crianças que têm medo dos “assustadores dentistas com todas aquelas máquinas que fazem barulho”. Usar os brinquedos para trazer a realidade para perto por meio do lúdico também é uma ótima maneira de trabalhar questões pertinentes na vida das crianças!</p>
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Barbie pediatra</h1></b>
              
                <p>A Barbie pediatra vem com pijama cirúrgico, estetoscópio e um carrinho de berçário com dois bebês.</p>
            </div>
        </div>
    </div>
</fieldset>
<br>
<fieldset id="one">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="noticia">
                <b><h1>Barbie juíza </h1></b>
              
                <p>A Barbie juíza vem com toga e malhete e pode ser uma ótima oportunidade para as crianças conhecerem uma nova profissão e, quem sabe até, começarem a explorar conceitos de justiça dentro de seus próprios mundos, rotinas e brincadeiras.</p>
            </div>
        </div>
    </div>
</fieldset>
<div class="row">
<?php
    $cont = 0;
    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            $cont++;
            if($cont <= 3){

?>

                <div class="col-md-4">
                    <h3><?php the_title(); ?></h3>
                    <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-primary" href="<?php the_permalink();?>">Ver mais Barbies</a>
                </div>

<?php

            }
        }
    }
?>
</div>
<?php get_footer(); ?> 

