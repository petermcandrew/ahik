<?php
if (empty($titel)) {
  $title = t('Recent projects');
}
?>
<h5><?php print $title; ?></h5>
<div class="row">
  <ul class="gallery portfolio-4column">

    <?php foreach ($nodes as $node): ?>
      <li>
        <div class="column grid_3">
          <?php
          $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];
          $image_url = file_create_url($image_uri);
          $style_name = 'portfolio_item';
          $node_url = url('node/' . $node->nid);

          print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
          ?>

          <div class="cover boxcaption box_4">
            <div class="project-name"><h5><?php print custom_trim_text(array('max_length'=>25),$node->title); ?></h5></div>
            <div class="project-text">

              <?php print custom_trim_text(array('max_length' => 80, 'html' => true, 'ellipsis' => true), $node->body[LANGUAGE_NONE][0]['value']); ?>								
              <a href="<?php print $node_url; ?>" class="textlink marginright20"><?php print t('Detail'); ?></a>
              <a href="<?php print $image_url; ?>" data-pretty="prettyPhoto[gallery1]" class="textlink" title="<?php print $node->title; ?>"><?php print t('Zoom'); ?></a>
            </div>
          </div>						
        </div>
      </li>
    <?php endforeach; ?>

  </ul>
</div>	
