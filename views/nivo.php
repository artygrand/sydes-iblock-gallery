<?php
$this->document->addPackage('nivo',
    '//cdnjs.cloudflare.com/ajax/libs/jquery-nivoslider/3.2/jquery.nivo.slider.pack.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/jquery-nivoslider/3.2/nivo-slider.css');

$this->document->addJs('nivo-init', '
$(window).on(\'load\', function() {
    $(\'#slider_'.$args['show'].'\').nivoSlider({
        pauseTime: 5000
    });
});
');
?>

<div id="slider_<?=$args['show'];?>" class="nivoSlider">
<?php foreach ($result['items'] as $item) { ?>
    <img src="<?=thumbnail($item, $args['width'], $args['height'], ['crop']);?>" alt="">
<?php } ?>
</div>
