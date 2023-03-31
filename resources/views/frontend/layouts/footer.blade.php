<footer class="l-footer">
  <div class="container-large">
    <div class="l-footer__row">
      <div class="l-footer__col l-footer__col--flex l-footer__col--border-gold text-center js-footer-block">
        <a class="l-footer__logo" href="/" title="Xavio Design" aria-label="Xavio Design">
          <img class="l-footer__logo-icon" src="/images/logo-white.svg" alt="Xavio Design">
        </a>
        <ul class="social mt-10em">
          <li class="social__item">
            <a class="social__link" href="https://www.instagram.com/xaviodesign/" title="Our Instagram" target="_blank" rel="noopener noreferrer"> Instagram </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="https://www.linkedin.com/company/xavio-design" title="Our Linkedin" target="_blank" rel="noopener noreferrer"> Linkedin </a>
          </li>
        </ul>
        <div class="l-footer__bp">
          <span>Designed by</span>
          <a class="l-footer__bp-link" href="" target="_blank" rel="noopener noreferrer" title="Archiplus">Archiplus</a>
        </div>
      </div>
      <div class="l-footer__col l-footer__col--menu js-footer-block">
        <ul class="l-footer__menu">
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/portfolio" title="Portfolio">Portfolio </a>
          </li>
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/news" title="News">News </a>
          </li>
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/what-we-do" title="What we do">What we do </a>
          </li>
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/contact" title="Contact">Contact </a>
          </li>
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/about-us" title="About">About </a>
          </li>
          <li class="l-footer__menu-item">
            <a class="l-footer__menu-link" href="/careers" title="Careers">Careers </a>
          </li>
        </ul>
      </div>
      <div class="l-footer__col l-footer__col--contact-info text-center js-footer-block">
        <p class="headline-6 mb-5em">Address</p>
        <address class="address">
          <p>
            <span>{{ get_setting('contact_address',null,'en') }}</span>
          </p>
        </address>
        <p class="headline-6 mt-10em mb-5em">Telephone</p>
        <a href="tel:{{ get_setting('contact_phone') }}" title="Call us">{{ get_setting('contact_phone') }}</a>
        <p class="headline-6 mt-10em mb-5em">Email</p>
        <a href="mailto:{{ get_setting('contact_email') }}" title="Email us"> {{ get_setting('contact_email') }}</a>
      </div>
    </div>
  </div>
  <div class="l-footer__bottom"> 
    <div class="container-super-narrow">
      <p> © Archiplus Design Ltd - Company Number: {{ get_setting('contact_phone') }}
      </p>
    </div>
  </div>
</footer>
