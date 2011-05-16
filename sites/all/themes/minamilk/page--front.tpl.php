ss
<div id="page-wrapper"><div id="page">

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu) { print ' with-navigation'; } ?>">

    <div id="content" class="column" role="main"><div class="section">
      <?php print $messages; ?>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div></div> <!-- /.section, /#content -->

    <?php if ($main_menu): ?>
      <nav id="navigation" role="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></nav> <!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar" role="complementary"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></aside> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar" role="complementary"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></aside> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->
  <footer id="footer" role="contentinfo"><div class="section">
    <?php print render($page['footer']); ?>
  </div></footer> <!-- /.section, /#footer -->

</div></div> <!-- /#page, /#page-wrapper -->
