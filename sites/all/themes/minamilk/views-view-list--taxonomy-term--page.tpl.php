<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
  <?php
  if(sizeof($rows)>1)
  {
	?>
  <div id='carousel-scroll'>
  <div id='arrow-prev' class='jcarousel-prev'></div> <div id='arrow-next'  class='jcarousel-next'></div>
  </div>
	<?
  }
?>
<?php print $wrapper_suffix; ?>
