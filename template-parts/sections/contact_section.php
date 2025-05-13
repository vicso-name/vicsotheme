<section id="contact" class="contact-section">
  <div class="container">
    <div class="contact-box">

      <div class="contact-box__left">
        <?php if ($photo = get_field('photo')): ?>
          <div class="contact-box__photo">
            <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>">
          </div>
        <?php endif; ?>

        <?php if ($description = get_field('description')): ?>
            <div class="contact-box__desc">  
                <?php echo esc_html($description); ?>
                <?php if ($position = get_field('position')): ?>
                    <div class="contact-box__position"><?php echo esc_html($position); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

     
      </div>

      <div class="contact-box__right">
        <?php if ($form_title = get_field('form_title')): ?>
          <h2 class="contact-box__title"><?php echo esc_html($form_title); ?></h2>
        <?php endif; ?>

        <div class="contact-box__form">
          <?php echo do_shortcode('[contact-form-7 id="8da8bc3" title="Contact Form"]'); ?>
        </div>
      </div>

    </div>
  </div>
</section>