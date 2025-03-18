<!-- template-parts/top-bar.php -->
<?php
$site_phone = get_theme_mod('contact_phone', '');
$site_email = get_theme_mod('site_email', '');
$site_linkedin = get_theme_mod('site_social_linkedin', '');
$site_facebook = get_theme_mod('site_social_facebook', '');
$site_instagram = get_theme_mod('site_social_instagram', '');
?>
<div class="top-bar hidden md:flex justify-end">
    <div class="container w-full">
        <div class="flex justify-end gap-4 ">
            <div class="text-sm">
                <?php
                if ($site_phone) {
                    echo '<a href="tel:' . esc_url($site_phone) . '" rel="noopener noreferrer"><i class="mr-[10px] fa-phone fa-lg fa-solid"></i>' . $site_phone . '</a>';
                }
                ?>
            </div>
            <div
                class="inline-block min-h-[1em] w-0.5 self-stretch bg-neutral-400"></div>
            <div class="text-sm">
                <?php
                if ($site_email) {
                    echo '<a href="mailto:' . esc_url($site_email) . '" rel="noopener noreferrer"><i class="mr-[10px] fa-envelope fa-lg  fa-solid"></i>' . $site_email . '</a>';
                }
                ?>
            </div>
            <div
                class="inline-block min-h-[1em] w-0.5 self-stretch bg-neutral-400"></div>
            <!-- Social Networks -->
            <div class="text-sm flex gap-3">

                <div>
                    <?php
                    if ($site_facebook) {
                        echo '<a href="' . esc_url($site_facebook) . '" target="_blank" rel="noopener noreferrer"><i class="fa-xl  fa-facebook fa-brands"></i></a>';
                    }
                    ?>
                </div>


                <div>
                    <?php
                    if ($site_linkedin) {
                        echo '<a href="' . esc_url($site_linkedin) . '" target="_blank" rel="noopener noreferrer"><i class="fa-xl  fa-linkedin fa-brands"></i></a>';
                    }
                    ?>
                </div>

                <div>
                    <?php
                    if ($site_instagram) {
                        echo '<a href="' . esc_url($site_instagram) . '" target="_blank" rel="noopener noreferrer"><i class="fa-xl  fa-instagram fa-brands"></i></a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>