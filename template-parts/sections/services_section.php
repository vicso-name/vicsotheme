<section id="services" class="services-section">
  <div class="container">
    <?php if ($title = get_field('title')): ?>
      <h2 class="services-section__title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>

    <?php if ($subtitle = get_field('subtitle')): ?>
      <p class="services-section__subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>

    <?php if (have_rows('services')): ?>
      <div class="services-cards">
        <?php while (have_rows('services')): the_row(); ?>
          <div class="service-card" style="background-color: <?php the_sub_field('item_color'); ?>">
            <?php if ($icon = get_sub_field('icon')): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_url($icon['alt']); ?>" class="service-card__icon">
            <?php endif; ?>
            <h3 class="service-card__title"><?php the_sub_field('service_title'); ?></h3>
            <p class="service-card__subtitle"><?php the_sub_field('service_subtitle'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php if (have_rows('capabilities')): ?>
      <div class="capabilities-cards">
        <?php while (have_rows('capabilities')): the_row(); ?>
          <div class="capability-card">
            <?php if ($icon = get_sub_field('capabilitie_icon')): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_url($icon['alt']); ?>" class="capability-card__icon">
            <?php endif; ?>
            <h3 class="capability-card__title"><?php the_sub_field('capabilitie_title'); ?></h3>
            <p class="capability-card__desc"><?php the_sub_field('capabilities_description'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    
  </div>
</section>