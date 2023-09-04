<?php $terms = get_the_terms(get_the_ID(), 'year');
    $years = '';
    foreach($terms as $term){
        $years .= $term->slug . ' ';
    }
?>
<div class="container">
<a class="item <?php echo $years?>" href="<?php the_field('image')?>">
    <img src="<?php the_field('image')?>" width="300px" height="300px">
</a>
</div>


<!-- <a class="item" href="img/gallery/one.jpg"><img src="img/gallery/one.jpg" width="300px"> -->