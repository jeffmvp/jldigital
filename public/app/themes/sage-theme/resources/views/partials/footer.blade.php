@php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage MVP
 */


$logoInverted = get_field('logo_inverted', 'options');

@endphp
</div>
<section class="Footer">
    <div class="Container Container--full">
        <div class="row">
            <div class="column column-33">
                quick menu
                social icons
            </div>
            <div class="column column-33">
            </div>
            <div class="column column-33">
                Form TBD
            </div>
        </div>
    </div>
    <div class="Container Container--full Footer-sub">
        <div class="row">
            <div class="column column-33">
            </div>
            <div class="column column-33">
                    &copy; <?php echo date("Y"); ?> STOCKAGE. All Rights Reserved // Website Design and Development by <a href="https://mvpdesign.com" target="new">MVP Marketing + Design, Inc.</a><br/>
                    <a href="/privacy-policy">privacy policy</a> | <a href="/terms-conditions">terms & conditions</a> 
            </div>
            <div class="column column-33">
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>

