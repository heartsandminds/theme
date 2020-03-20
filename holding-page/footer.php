<?php
/**
 * The footer template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */
?>

<?php 
if (get_field('donate') == 'show'):
    get_template_part('template-parts/donate');
endif;
?>

<footer class="c-footer" role="contentinfo">
    <div class="c-footer__content">
        <div class="c-footer__col">
            <p>Hearts &amp; Minds Limited</p>
            <p>Registered Company in Scotland No.SC178916</p>
            <p>Registered Office: Lower Ground, 4 Castle Terrace, Edinburgh, EH1 2DP Scottish Charity No. SC027040</p>
            <p>For additional company details, please email info@heartsminds.org.uk</p>
            <p>© 2019 Hearts &amp; Minds. All Rights Reserved.</p>
        </div>
        <div class="c-footer__col">
            <p>Sign up to receive our newsletter:</p>
            <form id="subForm" class="js-cm-form" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="5B5E7037DA78A748374AD499497E309E26BEA9F64D1B3AE8AB08FF8E1C5FFEF908B7BDEF971136C9F53D4D10AAD74111A532A316B6751E30E668318F36869BE5">
                <label for="fieldName">
                    Name:<br>
                    <input class="c-footer__input" type="text" name="cm-name" id="fieldName">
                </label>
                <label for="fieldEmail">
                    Email:<br>
                    <input class="c-footer__input js-cm-email-input" name="cm-ukirlli-ukirlli" type="email" id="fieldEmail" required>
                </label>
                <button class="a-button js-cm-submit-button" type="submit">Sign up</button>
            </form>
        </div>
        <div class="c-footer__col">
            <p>Follow us:</p>
            <span class="c-footer__icon">
                <a href="https://www.facebook.com/heartsmindsuk" target="_blank" rel="noopener">
                    <svg height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><title>Follow us on facebook</title><path fill="currentColor" d="M215.8 85H264V3.6C255.7 2.5 227.1 0 193.8 0 124.3 0 76.7 42.4 76.7 120.3V192H0v91h76.7v229h94V283h73.6l11.7-91h-85.3v-62.7c0-26.3 7.3-44.3 45.1-44.3z"></path></svg>
                </a>
            </span>
            <span class="c-footer__icon">
                <a href="https://twitter.com/heartsmindsUK" target="_blank" rel="noopener">
                    <svg height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>Follow us on twitter</title><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                </a>
            </span>
            <span class="c-footer__icon">
                <a href="https://www.youtube.com/user/HeartsMindsUK/featured" target="_blank" rel="noopener">
                    <svg height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><title>View our you tube channel</title><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                </a>
            </span>
            <span class="c-footer__icon">
                <a href="https://www.instagram.com/heartsmindsuk/" target="_blank" rel="noopener">
                    <svg height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title>See us on instagram</title><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                </a>
            </span>
        </div>
    </div>
    <nav class="c-footer-navigation">
        <?php
        wp_nav_menu(
            array( 
                'theme_location' => 'footer-menu',
                'menu_class' => 'c-footer-navigation__list'
            )
        );
        ?>
    </nav>
</footer>
<script><?php include 'assets/js/scripts.min.js'; ?></script>
<script src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js" async></script>
</body>
</html>
<?php wp_footer(); ?>