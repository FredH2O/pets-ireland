<?php
/*
Template Name: Donation Form
*/
?>

<?php
get_header();
$amount = isset($_GET['type']) ? intval($_GET['type']) : null;
?>

<div class="donation-form-wrapper">
    <h1>
        <?php
        echo $amount ? "You're donating €{$amount}" : "Donation Form";
        ?>
    </h1>

    <div class="donation-form-message">
        <h3>Your kindness keeps their tails wagging.</h3>
        <p>
            Every donation helps Pets Ireland provide
            food, medical care, and a safe place to rest for animals
            waiting on their forever homes. Thank you for taking a moment to care
            for them — it means more than they’ll ever be able to say. 🐾
        </p>
    </div>


    <?php
    // CF7 shortcode output here
    echo do_shortcode('[contact-form-7 id="61c0920" title="Donation Form"]');
    ?>
</div>

<?php get_footer(); ?>