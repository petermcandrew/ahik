<ul class="link-list sidebar-list">
  <li>
    <?php print t('Date'); ?> : <span><?php print format_date($node->created, 'custom', 'd M, Y'); ?></span>
  </li>								
  <li>
    <?php print t('Author'); ?> : <span><?php print $node->name; ?></span>
  </li>
  <?php if (!empty($node->field_portfolio_category)): ?>
    <li class="portfolio_detail_category">
      <?php print t('Categories'); ?> : <span><?php print custom_format_comma_field('field_portfolio_category', $node); ?></span>
    </li>
  <?php endif; ?>
  <li>
    <?php print t('Comment'); ?> : <span><?php print $node->comment_count; ?></span>
  </li>								
</ul>