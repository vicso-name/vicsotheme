<section id="cases" class="cases-section">
  <div class="container">
    <?php if ($title = get_field('title')): ?>
      <h2 class="cases-section__title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>

    <?php if ($cases = get_field('cases')): ?>
      <?php foreach ($cases as $index => $case): ?>
        <?php
          $case_id = $case->ID;
          $thumbnail = get_the_post_thumbnail_url($case_id, 'large');
          $case_title = get_the_title($case_id);
          $description = get_the_excerpt($case_id);
          $link = get_permalink($case_id);
          $tags = get_the_terms($case_id, 'case_tag');
        ?>
        <div class="case-item <?php echo $index % 2 === 1 ? 'case-item--reverse' : ''; ?>">
          <div class="case-item__image">
            <?php if ($thumbnail): ?>
              <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($case_title); ?>">
            <?php endif; ?>
          </div>
          <div class="case-item__content">
            <div class="case-item__content-inner">
              <h3 class="case-item__title"><?php echo esc_html($case_title); ?></h3>

              <?php if ($description): ?>
                <p class="case-item__desc"><?php echo esc_html($description); ?></p>
              <?php endif; ?>

              <?php if ($tags && !is_wp_error($tags)): ?>
                <div class="case-item__tags">
                  <?php foreach ($tags as $tag): ?>
                    <span class="case-tag"><?php echo esc_html($tag->name); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

              <div class="case-item__link">
                <a href="<?php echo esc_url($link); ?>" class="case-item__link-btn">View Case Study</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>
