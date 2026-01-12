<?php
$footer_nav = [
    'Homepage' => '/',
    'Who We Are' => '/who-we-are',
    'How You Can Help' => '/how-you-can-help',
    'Adopt a Pet' => '/adopt-a-pet',
    'Lost & Found' => '/lost-and-found',
    'Shop' => '/shop',
    'Press & Media Enquiries' => '/press-media-enquiries'
];
?>

<footer class="fred-footer">
    <div class="footer-inner">

        <!-- Branding / Info / Newsletter -->
        <div class="footer-branding">

            <!-- Logo & Title-->
            <div class="footer-logo-title">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
                <h3>Pets Ireland</h3>
            </div>

            <!-- About Info -->
            <div class="footer-about">
                <p>The ISPCA works to prevent cruelty to animals all over the Republic of Ireland</p>

                <p>
                    <span>Report Cruelty</span>
                    Call: 0818 515 515 (or +353 43 33 25035 from outside of Republic of Ireland)
                </p>
            </div>

            <!-- Newsletter -->
            <div class="newsletter-wrapper">
                <h3>Join Our Family and Get Updates on Rescued Pets</h3>
                <?php echo do_shortcode('[newsletter_form]'); ?>
            </div>
        </div>

        <!-- Primary Navigation Links -->
        <div class="footer-nav">
            <ul>
                <?php foreach ($footer_nav as $title => $url): ?>
                    <li>
                        <a href="<?php echo esc_url($url); ?>">
                            <?php echo esc_html($title) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Secondary Links / Legal -->
        <div class="footer-legal">
            <ul>
                <li>About us</li>
                <li>Contact us</li>
                <li>Careers</li>
                <li>FAQ</li>
                <li>Animal Welfare Policies</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <!-- Social Links -->
        <div class="footer-socials">
            <!-- Social links / Icons here -->
            <p>Follow us on Instagram</p>
            <!--- Will have 4 images here 2/2 --->
        </div>

    </div>
    <!-- Copyrights -->
    <p class="footer-copyrights">&copy; <?php echo date('Y') ?> Built the right way.</p>
</footer>