    <footer>
      <div class="container">
        <div class="footer-contact">
          <span class="footer-label">mail to:</span><br>
          <a href="mailto:marlos@marloscarmo.com">marlos@marloscarmo.com</a>
        </div>
        <div class="footer-social">
          <a class="social-icons icon-linkedin" href="https://br.linkedin.com/in/marloscarmo" target="_blank"></a>
          <a class="social-icons icon-github" href="https://github.com/marloscarmo" target="_blank"></a>
          <a class="social-icons icon-twitter" href="https://twitter.com/marloscarmo" target="_blank"></a>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          families: ["Montserrat:400,700","Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"]
        }
      });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

    <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85613928-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
