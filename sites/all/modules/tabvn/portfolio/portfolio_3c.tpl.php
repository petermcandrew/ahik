<?php
require_once 'portfolio_filter.tpl.php';
?>

<?php if (!empty($nodes)): ?>
  <ul id="portfolio" class="gallery portfolio-3column row">
    <?php foreach ($nodes as $node) : ?>
      <?php
      $image_full = file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']);
      ?>
      <li class="portf_item <?php print portfolio_format_terms('field_portfolio_category', $node); ?>">
        <div class="portfolio-item-wrapper">
          <div class="column grid_4">
            <?php
            $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];
            $image_url = file_create_url($image_uri);
            $style_name = 'portfolio_item';
            $node_url = url('node/' . $node->nid);

            print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
            ?>
            <div class="cover boxcaption box_3">
              <div class="project-name"><h5><?php print custom_trim_text(array('max_length' => 40), $node->title); ?></h5></div>
              <div class="project-text">
                <?php print custom_trim_text(array('max_length' => 200, 'html' => true, 'ellipsis' => true), $node->body[LANGUAGE_NONE][0]['value']); ?>															
                <a href="<?php print $node_url; ?>" class="textlink marginright20"><?php print t('Detail'); ?></a>
                <a href="<?php print $image_url; ?>" data-pretty="prettyPhoto[gallery1]" class="textlink" title="<?php print $node->title; ?>"><?php print t('Zoom'); ?></a>
              </div>
            </div>						
          </div>
        </div>
      </li>
    <?php endforeach; ?>		
  </ul>
<?php endif; ?>