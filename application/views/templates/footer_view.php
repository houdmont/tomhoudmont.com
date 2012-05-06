  <div class="row">
    <div class="span12 twitter">
      <div class="row">
        <div class="span2 twitter_img">
          <img src="<?php echo base_url(); ?>/img/twitter_75.png" alt="Twitter" />
        </div>
        <div class="span7 twitter_text">
          <?php foreach($twitter as $tweet) { echo $tweet->text; } ?>
        </div>
      </div>
    </div>
  </div>

</div><!-- /.container -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo ENV_PATH; ?>js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php echo ENV_PATH; ?>js/plugins.js"></script>
  <script src="<?php echo ENV_PATH; ?>js/main.js"></script>
  <!-- end scripts -->

  <script>
    var _gaq=[['_setAccount','UA-30682231-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  {elapsed_time}
</body>
</html>