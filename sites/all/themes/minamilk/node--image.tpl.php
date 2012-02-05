<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php
//  print_R($node->field_image);
  //echo image_style_path("large", $node->field_image['und'][0]['uri']);
  $info=image_get_info(image_style_path("large", $node->field_image['und'][0]['uri']));
  if($info['width']>$info['height'])
    $class='horizontal';
  else
	$class='vertical';
  ?>
  <div class="content <?php echo $class; ?>"<?php print $content_attributes; ?>>
    <?php
    // We hide the comments, tags and links now so that we can render them later.
//	  hide($content['field_image']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
		
	  if($class=='horizontal')
	  {
		  echo render($content['field_image']);
		  echo "<div class='description'>";
		  if($title)
			echo "<h1>".$title."</h1> ";
		  print render($content);
		  echo "</div>";
	  }
	  else
	  {
		 hide($content['field_image']);
		  echo "<div class='description' style='width: ".(800-($info['width']+40))."px;'>";
		  if($title)
			echo "<h1>".$title."</h1> ";
		  print render($content);
		  echo "</div>";
		   echo render($content['field_image']);
	  }
    ?>
  </div> <!-- /.content -->

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
