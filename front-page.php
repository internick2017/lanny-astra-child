<?php
/**
 * Template for the static front page.
 * Bypasses Gutenberg — full control over layout and design.
 * Multilingual via Polylang: PT (default), ES (/es/), EN (/en/).
 *
 * @package lanny-astra-child
 * @since   0.3.0
 */

$t = lanny_get_strings();

get_header();
?>

<div id="primary" class="content-area lh-content-area">
  <main id="main" class="site-main">

    <!-- =====================================================
         HERO
         ===================================================== -->
    <section class="lh-section lh-hero" id="inicio">
      <div class="lh-inner">
        <p class="lh-hero__eyebrow"><?php echo $t['hero_eyebrow']; ?></p>
        <h1 class="lh-hero__title"><?php echo $t['hero_title']; ?></h1>
        <p class="lh-hero__sub"><?php echo esc_html( $t['hero_sub'] ); ?></p>
        <div class="lh-hero__actions">
          <a href="#contato" class="lh-btn lh-btn--primary"><?php echo esc_html( $t['hero_cta1'] ); ?></a>
          <a href="https://wa.me/5546991277783" class="lh-btn lh-btn--wa" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
            <?php echo esc_html( $t['hero_cta2'] ); ?>
          </a>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SOBRE MIM
         ===================================================== -->
    <section class="lh-section" id="sobre">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['sobre_title'] ); ?></h2>
        <div class="lh-sobre__grid">
          <div class="lh-sobre__photo-wrap">
            <?php
            $photo = wp_get_attachment_image( 24, array( 180, 180 ), false, array(
              'class'   => 'lh-photo',
              'alt'     => 'Lanny Herrera',
              'loading' => 'lazy',
            ) );
            echo $photo ? $photo : '<div class="lh-photo lh-photo--placeholder" role="img" aria-label="Lanny Herrera"></div>';
            ?>
          </div>
          <div class="lh-sobre__text">
            <p><?php echo $t['sobre_p1']; ?></p>
            <p><?php echo $t['sobre_p2']; ?></p>
            <a href="#contato" class="lh-btn lh-btn--outline"><?php echo esc_html( $t['sobre_cta'] ); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         IDIOMAS
         ===================================================== -->
    <section class="lh-section lh-section--alt" id="idiomas">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['idiomas_title'] ); ?></h2>
        <div class="lh-cards lh-cards--3">

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇺🇸</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['idioma_en_title'] ); ?></h3>
            <p><?php echo esc_html( $t['idioma_en_text'] ); ?></p>
          </div>

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇪🇸</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['idioma_es_title'] ); ?></h3>
            <p><?php echo esc_html( $t['idioma_es_text'] ); ?></p>
          </div>

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇧🇷</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['idioma_pt_title'] ); ?></h3>
            <p><?php echo esc_html( $t['idioma_pt_text'] ); ?></p>
          </div>

        </div>
      </div>
    </section>

    <!-- =====================================================
         EXAMES
         ===================================================== -->
    <section class="lh-section lh-section--warm" id="exames">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['exames_title'] ); ?></h2>
        <p class="lh-section__lead"><?php echo esc_html( $t['exames_lead'] ); ?></p>
        <div class="lh-badges">
          <span class="lh-badge">TOEIC</span>
          <span class="lh-badge">TOEFL iBT</span>
          <span class="lh-badge">IELTS</span>
          <span class="lh-badge">Cambridge FCE</span>
          <span class="lh-badge">Cambridge CAE</span>
          <span class="lh-badge">DELE</span>
          <span class="lh-badge">CELPE-Bras</span>
        </div>
      </div>
    </section>

    <!-- =====================================================
         METODOLOGIA
         ===================================================== -->
    <section class="lh-section" id="metodologia">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['metodo_title'] ); ?></h2>
        <div class="lh-cards lh-cards--4">

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">🎥</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['metodo_1_title'] ); ?></h3>
            <p><?php echo esc_html( $t['metodo_1_text'] ); ?></p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">📚</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['metodo_2_title'] ); ?></h3>
            <p><?php echo esc_html( $t['metodo_2_text'] ); ?></p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">💬</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['metodo_3_title'] ); ?></h3>
            <p><?php echo esc_html( $t['metodo_3_text'] ); ?></p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">🌍</span>
            <h3 class="lh-card__title"><?php echo esc_html( $t['metodo_4_title'] ); ?></h3>
            <p><?php echo esc_html( $t['metodo_4_text'] ); ?></p>
          </div>

        </div>
      </div>
    </section>

    <!-- =====================================================
         DEPOIMENTOS
         Fonte: CPT lh_testimonial (gerenciado no admin WP).
         Fallback: strings hardcoded quando o CPT está vazio.
         ===================================================== -->
    <section class="lh-section lh-section--alt" id="depoimentos">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['depo_title'] ); ?></h2>
        <div class="lh-cards lh-cards--3">

          <?php
          $depoimentos = function_exists( 'lh_get_testimonials' ) ? lh_get_testimonials( 3 ) : array();

          if ( ! empty( $depoimentos ) ) :
            foreach ( $depoimentos as $depo ) :
              $quote  = wp_kses_post( apply_filters( 'the_content', $depo->post_content ) );
              $author = esc_html( $depo->post_title );
              ?>
              <div class="lh-card lh-card--quote">
                <p class="lh-card__quote"><?php echo $quote; ?></p>
                <p class="lh-card__author">&mdash; <?php echo $author; ?></p>
              </div>
              <?php
            endforeach;
          else :
            // Fallback — strings hardcoded enquanto não há depoimentos reais no CPT
            ?>
            <div class="lh-card lh-card--quote">
              <p class="lh-card__quote"><?php echo $t['depo_1_text']; ?></p>
              <p class="lh-card__author"><?php echo esc_html( $t['depo_1_author'] ); ?></p>
            </div>
            <div class="lh-card lh-card--quote">
              <p class="lh-card__quote"><?php echo $t['depo_2_text']; ?></p>
              <p class="lh-card__author"><?php echo esc_html( $t['depo_2_author'] ); ?></p>
            </div>
            <div class="lh-card lh-card--quote">
              <p class="lh-card__quote"><?php echo $t['depo_3_text']; ?></p>
              <p class="lh-card__author"><?php echo esc_html( $t['depo_3_author'] ); ?></p>
            </div>
            <?php
          endif;
          ?>

        </div>
      </div>
    </section>

    <!-- =====================================================
         CONTATO
         ===================================================== -->
    <section class="lh-section" id="contato">
      <div class="lh-inner">
        <h2 class="lh-section__title"><?php echo esc_html( $t['contato_title'] ); ?></h2>
        <p class="lh-section__lead"><?php echo $t['contato_lead']; ?></p>
        <div class="lh-contato__grid">

          <div class="lh-contato__form">
            <?php echo do_shortcode( $t['cf7_shortcode'] ); ?>
          </div>

          <div class="lh-contato__info">
            <div class="lh-info-item">
              <span class="lh-info-item__icon" aria-hidden="true">📱</span>
              <div>
                <strong><?php echo esc_html( $t['contato_wa_label'] ); ?></strong><br>
                <a href="https://wa.me/5546991277783" target="_blank" rel="noopener noreferrer">+55 46 99127-7783</a>
              </div>
            </div>
            <div class="lh-info-item">
              <span class="lh-info-item__icon" aria-hidden="true">📸</span>
              <div>
                <strong><?php echo esc_html( $t['contato_ig_label'] ); ?></strong><br>
                <a href="https://www.instagram.com/teacher_lanny/" target="_blank" rel="noopener noreferrer">@teacher_lanny</a>
              </div>
            </div>
            <a href="https://wa.me/5546991277783" class="lh-btn lh-btn--wa lh-btn--full" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
              <?php echo esc_html( $t['contato_wa_cta'] ); ?>
            </a>
          </div>

        </div>
      </div>
    </section>

  </main>
</div><!-- #primary -->

<?php get_footer(); ?>
