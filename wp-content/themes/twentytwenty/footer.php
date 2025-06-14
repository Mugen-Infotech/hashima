<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer class="l-footer">
      <div class="l-footer__group">
        <img
          class="l-footer__logo"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.svg"
          width="200"
          height="186"
          decoding="async"
          alt="ロゴ"
        />
        <div class="l-footer__text-group">
          <p class="l-footer__name">HASHIMA BASE</p>
          <p class="l-footer__address">
            〒501-6207 岐阜県羽島市足近町6丁目63-1
          </p>
        </div>
      </div>
      <small class="l-footer__copyright">&copy; 2025 HASHIMA BASE</small>

      <nav class="l-footer__nav">
        <div class="l-footer__sns">
          <a class="l-footer__sns-link">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a class="l-footer__sns-link">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </div>
        <ul class="l-footer__list">
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/about.html"> ABOUT </a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/bike.html">
              RENTAL BIKE GARAGE
            </a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/space.html">
              RENTAL SPACE
            </a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/trailer.html">
              RENTAL KITCHEN TRAILER
            </a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/information.html">
              INFORMATION
            </a>
          </li>
          <li class="l-footer__item">
            <a class="l-footer__link" href="/pages/contact.html"> CONTACT </a>
          </li>
        </ul>
        <p class="l-footer__policy">PRIVACY POLICY &nbsp;&nbsp; SITEMAP</p>
      </nav>
    </footer>
    <!-- Include GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.24/bundled/lenis.min.js"></script>
    <script>
      const lenis = new Lenis({
        duration: 1.2,
        smooth: true,
      });

      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }

      requestAnimationFrame(raf);
    </script>
    <script>
      window.addEventListener("load", () => {
        setTimeout(() => {
          window.scrollTo(0, 0);
        }, 10);
      });
    </script>
  </body>
</html>