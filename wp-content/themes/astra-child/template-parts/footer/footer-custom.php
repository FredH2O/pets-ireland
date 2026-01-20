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

$footer_legal = [
    'About us' => '/about-us',
    'Contact us' => '/contact-us',
    'Careers' => '/careers',
    'FAQs' => '/faqs',
    'Animal Welfare Policies' => '/animal-welfare-policies',
    'Privacy Policy' => '/privacy-policy'
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
                    Call: 0123 456 789 (or +353 00 00 12345 from outside of Republic of Ireland)
                </p>
            </div>


        </div>

        <!-- Primary Navigation Links -->
        <div class="footer-nav">
            <ul>
                <?php foreach ($footer_nav as $title => $url): ?>
                    <li>
                        <a href="#">
                            <?php echo esc_html($title) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Secondary Links / Legal -->
        <div class="footer-legal">
            <ul>
                <?php foreach ($footer_legal as $title => $url): ?>
                    <li>
                        <a href="#">
                            <?php echo esc_html($title) ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <!-- Social Links -->
        <div class="footer-socials">
            <!-- Social links / Icons here -->
            <div class="socials-container">
                <a href="#"><span class="dashicons dashicons-twitter"></span></a>
                <a href="#"><span class="dashicons dashicons-twitch"></span></a>
                <a href="#"><span class="dashicons dashicons-youtube"></span></a>
                <a href="#"><span class="dashicons dashicons-linkedin"></span></a>
            </div>
            <!--- Will have 4 images here 2/2 ? --->
        </div>

    </div>
    <!-- Copyrights -->
    <div class="footer-outer">
        <p class="footer-copyrights">&copy; <?php echo date('Y') ?> Pets Ireland | All Rights Reserved | Registered Charity Number 1234567 | Registered Company Number 123123, ABC 4567</p>
        <p>For the Protection of Animals | Created by <i>Frederico</i></p>
    </div>
</footer>