<footer class="fred-footer">
    <div class="footer-inner">

        <!-- Branding / Info / Newsletter -->
        <div class="footer-branding">

            <!-- Logo & Title-->
            <div class="footer-logo">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
                <h3>Pets Ireland</h3>
            </div>

            <!-- About Info -->
            <div>
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
        <div class="second-footer-div">
            <ul>
                <li>Homepage</li>
                <li>Who We Are</li>
                <li>How You Can Help</li>
                <li>Adopt a Pet</li>
                <li>Lost & Found</li>
                <li>Shop</li>
                <li>Press & Media Enquiries</li>
            </ul>
        </div>

        <!-- Secondary Links / Legal -->
        <div>
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
        <div>
            <!-- Social links / Icons here -->
            <p>Follow us on Instagram</p>
            <!--- Will have 4 images here 2/2 --->
        </div>

    </div>
    <!-- Copyrights -->
    <p class="footer-copyrights">&copy; <?php echo date('Y') ?> Built the right way.</p>
</footer>