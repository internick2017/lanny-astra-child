<?php
/**
 * Template for the static front page.
 * Bypasses Gutenberg — full control over layout and design.
 *
 * @package lanny-astra-child
 * @since   0.3.0
 */

get_header();
?>

<div id="primary" class="content-area lh-content-area">
  <main id="main" class="site-main">

    <!-- =====================================================
         HERO
         ===================================================== -->
    <section class="lh-section lh-hero" id="inicio">
      <div class="lh-inner">
        <p class="lh-hero__eyebrow">Aulas online ao vivo &middot; Inglês &middot; Espanhol &middot; Português</p>
        <h1 class="lh-hero__title">Aprenda um idioma com quem<br>realmente te acompanha</h1>
        <p class="lh-hero__sub">Metodologia personalizada, feedback constante e aulas que se encaixam na sua rotina — para todos os níveis e objetivos.</p>
        <div class="lh-hero__actions">
          <a href="#contato" class="lh-btn lh-btn--primary">Quero começar</a>
          <a href="https://wa.me/5546991277783" class="lh-btn lh-btn--wa" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
            Falar no WhatsApp
          </a>
        </div>
      </div>
    </section>

    <!-- =====================================================
         SOBRE MIM
         ===================================================== -->
    <section class="lh-section" id="sobre">
      <div class="lh-inner">
        <h2 class="lh-section__title">Sobre mim</h2>
        <div class="lh-sobre__grid">
          <div class="lh-sobre__photo-wrap">
            <?php
            $photo = wp_get_attachment_image( 24, array( 180, 180 ), false, array(
              'class'   => 'lh-photo',
              'alt'     => 'Lanny Herrera — Professora de Idiomas',
              'loading' => 'lazy',
            ) );
            echo $photo ? $photo : '<div class="lh-photo lh-photo--placeholder" role="img" aria-label="Foto de Lanny Herrera"></div>';
            ?>
          </div>
          <div class="lh-sobre__text">
            <p>Olá! Sou <strong>Lanny Herrera</strong>, professora de inglês, espanhol e português para estrangeiros. Minha paixão por idiomas me levou a desenvolver um método de ensino que vai além da gramática — focado na <strong>comunicação real, na confiança e em resultados concretos</strong>.</p>
            <p>Atendo alunos de todos os níveis, do iniciante ao avançado, com aulas 100% online e material didático personalizado para cada objetivo. Também preparo para os principais exames internacionais: TOEIC, TOEFL, IELTS, DELE e CELPE-Bras.</p>
            <a href="#contato" class="lh-btn lh-btn--outline">Agendar aula experimental gratuita</a>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         IDIOMAS
         ===================================================== -->
    <section class="lh-section lh-section--alt" id="idiomas">
      <div class="lh-inner">
        <h2 class="lh-section__title">Idiomas que ensino</h2>
        <div class="lh-cards lh-cards--3">

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇺🇸</span>
            <h3 class="lh-card__title">Inglês</h3>
            <p>Do básico ao avançado. Conversação, inglês para negócios, viagens e preparação para TOEIC, TOEFL e IELTS.</p>
          </div>

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇪🇸</span>
            <h3 class="lh-card__title">Espanhol</h3>
            <p>Espanhol conversacional e acadêmico. Preparação para o exame DELE e espanhol para o mercado latino-americano.</p>
          </div>

          <div class="lh-card">
            <span class="lh-card__flag" aria-hidden="true">🇧🇷</span>
            <h3 class="lh-card__title">Português</h3>
            <p>Português brasileiro para estrangeiros. Comunicação no dia a dia e preparação para o exame CELPE-Bras.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- =====================================================
         EXAMES
         ===================================================== -->
    <section class="lh-section lh-section--warm" id="exames">
      <div class="lh-inner">
        <h2 class="lh-section__title">Preparação para exames</h2>
        <p class="lh-section__lead">Experiência comprovada na preparação para os principais certificados internacionais de idiomas:</p>
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
        <h2 class="lh-section__title">Como funcionam as aulas</h2>
        <div class="lh-cards lh-cards--4">

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">🎥</span>
            <h3 class="lh-card__title">Aulas ao vivo</h3>
            <p>Encontros individuais por videochamada, com horários flexíveis que se encaixam na sua agenda.</p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">📚</span>
            <h3 class="lh-card__title">Material incluso</h3>
            <p>Apostilas, exercícios e recursos digitais preparados especialmente para o seu perfil e objetivo.</p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">💬</span>
            <h3 class="lh-card__title">Feedback constante</h3>
            <p>Correções detalhadas e acompanhamento do seu progresso em cada aula e entre as sessões.</p>
          </div>

          <div class="lh-card lh-card--center">
            <span class="lh-card__icon" aria-hidden="true">🌍</span>
            <h3 class="lh-card__title">Para todos os níveis</h3>
            <p>Iniciante, intermediário ou avançado — cada plano é personalizado ao seu ritmo e meta.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- =====================================================
         DEPOIMENTOS
         ===================================================== -->
    <section class="lh-section lh-section--alt" id="depoimentos">
      <div class="lh-inner">
        <h2 class="lh-section__title">O que dizem meus alunos</h2>
        <div class="lh-cards lh-cards--3">

          <div class="lh-card lh-card--quote">
            <p class="lh-card__quote">"A Lanny é uma professora incrível! Em poucos meses passei no TOEIC com uma pontuação muito acima do esperado. Método muito eficiente e aulas dinâmicas."</p>
            <p class="lh-card__author">— Aluno de inglês para certificação</p>
          </div>

          <div class="lh-card lh-card--quote">
            <p class="lh-card__quote">"Aprendi português em tempo recorde graças às aulas da Lanny. Ela tem muita paciência, material excelente e sempre me motivou a continuar."</p>
            <p class="lh-card__author">— Aluna estrangeira de português</p>
          </div>

          <div class="lh-card lh-card--quote">
            <p class="lh-card__quote">"Passei no DELE B2 na primeira tentativa! A preparação com a Lanny foi fundamental. Aulas muito bem estruturadas e objetivas."</p>
            <p class="lh-card__author">— Aluno de espanhol</p>
          </div>

        </div>
      </div>
    </section>

    <!-- =====================================================
         CONTATO
         ===================================================== -->
    <section class="lh-section" id="contato">
      <div class="lh-inner">
        <h2 class="lh-section__title">Entre em contato</h2>
        <p class="lh-section__lead">Quer saber mais ou agendar uma <strong>aula experimental gratuita</strong>? Preencha o formulário ou fale diretamente pelo WhatsApp.</p>
        <div class="lh-contato__grid">

          <div class="lh-contato__form">
            <?php echo do_shortcode('[contact-form-7 id="cbcdbae" title="Formulário de contato 1"]'); ?>
          </div>

          <div class="lh-contato__info">
            <div class="lh-info-item">
              <span class="lh-info-item__icon" aria-hidden="true">📱</span>
              <div>
                <strong>WhatsApp</strong><br>
                <a href="https://wa.me/5546991277783" target="_blank" rel="noopener noreferrer">+55 46 99127-7783</a>
              </div>
            </div>
            <div class="lh-info-item">
              <span class="lh-info-item__icon" aria-hidden="true">📸</span>
              <div>
                <strong>Instagram</strong><br>
                <a href="https://www.instagram.com/teacher_lanny/" target="_blank" rel="noopener noreferrer">@teacher_lanny</a>
              </div>
            </div>
            <a href="https://wa.me/5546991277783" class="lh-btn lh-btn--wa lh-btn--full" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
              Falar no WhatsApp agora
            </a>
          </div>

        </div>
      </div>
    </section>

  </main>
</div><!-- #primary -->

<?php get_footer(); ?>
