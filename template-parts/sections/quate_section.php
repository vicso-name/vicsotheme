<section class="quate-section">
  <div class="container">
    <div class="quate-box">
      <div class="quate-box__text">
        <?php if ($title = get_field('quate_title')): ?>
          <h2 class="quate-box__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($subtitle = get_field('quate_subtitle')): ?>
          <p class="quate-box__subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
      </div>

      <?php if ($description = get_field('quate_description')): ?>
        <div class="quate-box__description">
          <p><?php echo esc_html($description); ?></p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>