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

    <p>Your kindness keeps their tails wagging...</p>

    <?php
    // CF7 shortcode output here
    echo do_shortcode('[contact-form-7 id="61c0920" title="Donation Form"]');
    ?>
</div>

<?php get_footer(); ?>