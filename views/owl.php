<?php
$this->document->addPackage('owl',
    '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js',
    [
        '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css'
    ]
);

$this->document->addJs('owl-init', '
$(window).on(\'load\', function() {
    $(\'#carousel_'.$args['show'].'\').owlCarousel({
        items: 6,
        nav: 1
    });
});
');
?>

<div id="carousel_<?=$args['show'];?>" class="owl-carousel owl-theme">
    <?php foreach ($result['items'] as $item) { ?>
    <a href="<?=$item;?>" rel="lightbox[<?=$args['show'];?>]">
        <img src="<?=thumbnail($item, $args['width'], $args['height'], ['crop']);?>" alt="">
    </a>
    <?php } ?>
</div>
