<ul class="gallery link-list recent-list">
  <?php foreach ($nodes as $node): ?>
    <?php
    $node_url = url('node/' . $node->nid);
    ?>
    <li>
      <?php
      $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];
      $image_url = file_create_url($image_uri);
      $style_name = 'sidebar_recent_projects';
      $node_url = url('node/' . $node->nid);
      $image_url = file_create_url($image_uri);

      print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri, 'attributes' => array('class' => 'tframe3 left')));
      ?>
      <h6><?php print l($node->title, 'node' . $node->nid); ?></h6>
      <?php print custom_trim_text(array('max_length' => 70, 'html' => true, 'ellipsis' => true), $node->body[LANGUAGE_NONE][0]['value']); ?>	
      <a href="<?php print $node_url ?>" class="textlink left marginright20"><?php print t('View detail'); ?></a>
      <a href="<?php print $image_url; ?>" data-pretty="prettyPhoto[gallery1]" class="textlink left marginright20" title="<?php $node->title; ?>"><?php print t('Zoom item'); ?></a>   								
    </li>
  <?php endforeach; ?>
</ul>