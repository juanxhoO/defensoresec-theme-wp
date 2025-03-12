<!-- template-parts/top-bar.php -->
<?php
$site_phone = get_theme_mod('contact_phone', '');
$site_email = get_theme_mod('site_email', '');
?>
<div class="top-bar pt-4 hidden md:flex">
    <div class="container mx-auto w-full px-4">
        <div class="flex justify-end gap-4 ">
            <div class="text-sm">
                <?php
                echo '<div class="contact-phone">' . esc_html($site_email) . '</div>';
                ?>
            </div>
            <div
                class="inline-block min-h-[1em] w-0.5 self-stretch bg-neutral-100 "></div>
            <div class="text-sm">
                <?php
                echo '<div class="contact-phone">' . esc_html($site_phone) . '</div>';
                ?>
            </div>

            <div
                class="inline-block min-h-[1em] w-0.5 self-stretch bg-neutral-100 "></div>
            <!-- Social Networks -->
            <div class="text-sm flex gap-2">
                <div>
                    <a href="/contact" class="hover:text-gray-400"><i class="fa-brands fa-2xl fa-facebook"></i></a>
                </div>

                <div>
                    <a href="/contact" class="hover:text-gray-400"><i class="fa-brands fa-2xl fa-instagram"></i></a>
                </div>

                <div>
                    <a href="/contact" class="hover:text-gray-400"><i class="fa-brands fa-2xl fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>