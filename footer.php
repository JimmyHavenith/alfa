  <?php wp_footer(); ?>
  <footer class="footer-alfa">
    <div class="container">
      <div class="footer-alfa-div">
        <div class="footer-sous-menu">
          <ul>
            <li><a title="Afficher le plan du site" href="#">Plan du site</a></li>
            <li><a title="Aller vers la page pour contacter le centre alfa" href="#">Nous contacter</a></li>
            <li>04 223 09 03</li>
          </ul>
        </div>
        <div class="footer-logo">
          <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo du centre alfa">
          <img src="img/logo.png" alt="logo du centre alfa" />
        </div>
        <div class="footer-partenaires">
          <div class="footer-partenaires-div">
            <a title="aller vers le site de la fédération française" href="http://www.wallonie.be/"><img src="<?php bloginfo('template_directory'); ?>/img/coq.svg" alt="logo de la fédération francaise"></a>
            <a title="aller vers le site de la province de liège" href="http://www.liege.be/"><img src="<?php bloginfo('template_directory'); ?>/img/liege.svg" alt="logo de la province de liège"></a>
            <a title="aller vers le site de la fédération wallonie-bruxelles" href="http://www.federation-wallonie-bruxelles.be/"><img src="<?php bloginfo('template_directory'); ?>/img/wallob.svg" alt="logo wallonie-bruxelles"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?= get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
