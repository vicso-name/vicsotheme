<section class="hero">
  <div class="container ">
    <div class="hero__inner">
        <div class="hero__content">
            <?php if ($title = get_field('title')): ?>
                <h1 class="hero__content__title"><?php echo $title; ?></h1>
            <?php endif; ?>

            <?php if ($description = get_field('description')): ?>
                <div class="hero__content__description"><?php echo $description; ?></div>
            <?php endif; ?>

            <?php if ($button = get_field('button')): ?>
                <a href="<?php echo esc_url($button['url']); ?>" class="btn btn--outline"<?php if ($button['target']) echo ' target="' . esc_attr($button['target']) . '"'; ?>>
                <?php echo esc_html($button['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
  </div>
</section>