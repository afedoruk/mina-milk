<div id="page-wrapper"><div id="page">

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu) { print ' with-navigation'; } ?>">

    <div id="content" class="column" role="main"><div class="section">

    </div></div> <!-- /.section, /#content -->


    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar" role="complementary"><div class="section" id="first-section">
		<a href='/front2'>mina-milk<br/>
		illustration etc</a>
      </div></aside> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->
  <footer id="footer" role="contentinfo"><div class="section">
    <?php print render($page['footer']); ?>
  </div></footer> <!-- /.section, /#footer -->

</div></div> <!-- /#page, /#page-wrapper -->
