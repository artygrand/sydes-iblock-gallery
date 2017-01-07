<div id="gallery_<?=$args['show'];?>" class="folder_gallery">
<?php foreach ($result['items'] as $i => $item) {
    ?><a href="<?=$item;?>" rel="lightbox[<?=$args['show'];?>]"><img src="<?=thumbnail($item, $args['width'], $args['height'], ['crop']);?>" alt=""></a><?php
} ?>
</div>

<?=H::pagination($page['url'], $count, $skip, $args['limit']);?>
