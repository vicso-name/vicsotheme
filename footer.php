<?php 
    $footer_groups = [
        'Development' => [
            'frontend',
            'backend',
            'api',
            'mobile-app',
            'web-app',
            'wordpress',
            'gutenberg',
            'acf',
            'saas',
            'landing',
            'crm',
        ],
        'Design' => [
            'ui-design',
            'ux-strategy',
        ],
        'DevOps' => [
            'docker',
            'devops',
            'internal-tool',
            'odoo',
        ],
    ];

    $footer_contact_section = get_field('footer_contact_section', 'option');
    $footer_logo = $footer_contact_section['footer_logotype'];
    $footer_contact_item = $footer_contact_section['footer_contact_item'];
    $footer_email = $footer_contact_section['footer_email'];

?>

</main><!-- main -->
    <footer class="footer" id="footer">
        <div class="container">

            <div class="footer-content__wrapper">
                <div class="footer-contact">

                    <?php if($footer_logo): ?>
                        <a  class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="svg replaced-svg" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
                        </a>
                    <?php endif; ?>

                    <?php if( $footer_contact_item): ?>
                        <ul class="footer_social_items">
                            <?php
                                foreach ($footer_contact_item as $item): 
                                    $social_icon = $item['social_icon'];
                                    $social_link = $item['social_icon'];
                            ?>
                                <li>
                                    <?php 
                                        if( $social_link ): 
                                            $link_url      =    $social_link['url'];
                                            $link_title    =    $social_link['title'];
                                            $link_target   =    $social_link['target'] ?$social_link['target'] : '_self';
                                    ?>
                                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                            <img class="svg replaced-svg" src="<?php echo $social_icon['url'] ?>" alt="<?php echo $social_icon['alt'] ?>">
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if( $footer_email): ?>
                        <a class="footer__mail" href="mailto:<?php echo $footer_email; ?>"><?php echo $footer_email ?></a>
                    <?php endif; ?>

                </div>
                <div class="footer-columns">
                    <?php
                        foreach ($footer_groups as $group_title => $slugs): ?>
                        <div class="footer-column">
                            <h4><?php echo esc_html($group_title); ?></h4>
                            <ul>
                            <?php foreach ($slugs as $slug): 
                                $term = get_term_by('slug', $slug, 'case_tag');
                                if ($term): ?>
                                    <li>
                                    <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="footer-content"> 
                <?php if($description = get_field('footer_description', 'option')):?>
                    <p class="footer-content__description"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <?php if($copiright = get_field('footer_copiright', 'option')):?>
                    <p class="footer-content__description"><?php echo esc_html($copiright); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </footer><!-- footer -->
</div><!-- wrapper -->
<?php wp_footer(); ?>
    </body>
</html>