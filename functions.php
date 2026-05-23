<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function lanny_enqueue_styles() {
	wp_enqueue_style(
		'astra-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'astra' )->get( 'Version' )
	);

	wp_enqueue_style(
		'lanny-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'astra-child-lanny',
		get_stylesheet_uri(),
		array( 'astra-parent', 'lanny-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lanny_enqueue_styles' );

/* ==========================================================
   Translation helper — returns string array for current lang.
   Falls back to PT when Polylang is inactive or lang not found.
   ========================================================== */
function lanny_get_strings() {
	$lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'pt';
	$all  = lanny_all_strings();
	return isset( $all[ $lang ] ) ? $all[ $lang ] : $all['pt'];
}

function lanny_all_strings() {
	return array(

		/* ---- PORTUGUÊS (default) ---- */
		'pt' => array(
			// Hero
			'hero_eyebrow' => 'Aulas online ao vivo &middot; Inglês &middot; Espanhol &middot; Português',
			'hero_title'   => 'Aprenda um idioma com quem<br>realmente te acompanha',
			'hero_sub'     => 'Metodologia personalizada, feedback constante e aulas que se encaixam na sua rotina — para todos os níveis e objetivos.',
			'hero_cta1'    => 'Quero começar',
			'hero_cta2'    => 'Falar no WhatsApp',
			// Sobre mim
			'sobre_title'  => 'Sobre mim',
			'sobre_p1'     => 'Olá! Sou <strong>Lanny Herrera</strong>, professora de inglês, espanhol e português para estrangeiros. Minha paixão por idiomas me levou a desenvolver um método de ensino que vai além da gramática — focado na <strong>comunicação real, na confiança e em resultados concretos</strong>.',
			'sobre_p2'     => 'Atendo alunos de todos os níveis, do iniciante ao avançado, com aulas 100% online e material didático personalizado para cada objetivo. Também preparo para os principais exames internacionais: TOEIC, TOEFL, IELTS, DELE e CELPE-Bras.',
			'sobre_cta'    => 'Agendar aula experimental gratuita',
			// Idiomas
			'idiomas_title'   => 'Idiomas que ensino',
			'idioma_en_title' => 'Inglês',
			'idioma_en_text'  => 'Do básico ao avançado. Conversação, inglês para negócios, viagens e preparação para TOEIC, TOEFL e IELTS.',
			'idioma_es_title' => 'Espanhol',
			'idioma_es_text'  => 'Espanhol conversacional e acadêmico. Preparação para o exame DELE e espanhol para o mercado latino-americano.',
			'idioma_pt_title' => 'Português',
			'idioma_pt_text'  => 'Português brasileiro para estrangeiros. Comunicação no dia a dia e preparação para o exame CELPE-Bras.',
			// Exames
			'exames_title'    => 'Preparação para exames',
			'exames_lead'     => 'Experiência comprovada na preparação para os principais certificados internacionais de idiomas:',
			// Metodologia
			'metodo_title'    => 'Como funcionam as aulas',
			'metodo_1_title'  => 'Aulas ao vivo',
			'metodo_1_text'   => 'Encontros individuais por videochamada, com horários flexíveis que se encaixam na sua agenda.',
			'metodo_2_title'  => 'Material incluso',
			'metodo_2_text'   => 'Apostilas, exercícios e recursos digitais preparados especialmente para o seu perfil e objetivo.',
			'metodo_3_title'  => 'Feedback constante',
			'metodo_3_text'   => 'Correções detalhadas e acompanhamento do seu progresso em cada aula e entre as sessões.',
			'metodo_4_title'  => 'Para todos os níveis',
			'metodo_4_text'   => 'Iniciante, intermediário ou avançado — cada plano é personalizado ao seu ritmo e meta.',
			// Depoimentos
			'depo_title'      => 'O que dizem meus alunos',
			'depo_1_text'     => '&ldquo;A Lanny é uma professora incrível! Em poucos meses passei no TOEIC com uma pontuação muito acima do esperado. Método muito eficiente e aulas dinâmicas.&rdquo;',
			'depo_1_author'   => '— Aluno de inglês para certificação',
			'depo_2_text'     => '&ldquo;Aprendi português em tempo recorde graças às aulas da Lanny. Ela tem muita paciência, material excelente e sempre me motivou a continuar.&rdquo;',
			'depo_2_author'   => '— Aluna estrangeira de português',
			'depo_3_text'     => '&ldquo;Passei no DELE B2 na primeira tentativa! A preparação com a Lanny foi fundamental. Aulas muito bem estruturadas e objetivas.&rdquo;',
			'depo_3_author'   => '— Aluno de espanhol',
			// Contato
			'contato_title'   => 'Entre em contato',
			'contato_lead'    => 'Quer saber mais ou agendar uma <strong>aula experimental gratuita</strong>? Preencha o formulário ou fale diretamente pelo WhatsApp.',
			'contato_wa_label'  => 'WhatsApp',
			'contato_ig_label'  => 'Instagram',
			'contato_wa_cta'    => 'Falar no WhatsApp agora',
			// CF7 shortcode ID (can differ per language if needed)
			'cf7_shortcode'   => '[contact-form-7 id="cbcdbae" title="Formulário de contato 1"]',
		),

		/* ---- ESPAÑOL ---- */
		'es' => array(
			// Hero
			'hero_eyebrow' => 'Clases online en vivo &middot; Inglés &middot; Español &middot; Portugués',
			'hero_title'   => 'Aprende un idioma con quien<br>realmente te acompaña',
			'hero_sub'     => 'Metodología personalizada, retroalimentación constante y clases que se adaptan a tu rutina — para todos los niveles y objetivos.',
			'hero_cta1'    => 'Quiero empezar',
			'hero_cta2'    => 'Hablar por WhatsApp',
			// Sobre mí
			'sobre_title'  => 'Sobre mí',
			'sobre_p1'     => '¡Hola! Soy <strong>Lanny Herrera</strong>, profesora de inglés, español y portugués para extranjeros. Mi pasión por los idiomas me llevó a desarrollar un método de enseñanza que va más allá de la gramática — enfocado en la <strong>comunicación real, la confianza y los resultados concretos</strong>.',
			'sobre_p2'     => 'Atiendo alumnos de todos los niveles, del principiante al avanzado, con clases 100% online y material didáctico personalizado para cada objetivo. También preparo para los principales exámenes internacionales: TOEIC, TOEFL, IELTS, DELE y CELPE-Bras.',
			'sobre_cta'    => 'Agendar clase experimental gratuita',
			// Idiomas
			'idiomas_title'   => 'Idiomas que enseño',
			'idioma_en_title' => 'Inglés',
			'idioma_en_text'  => 'Del básico al avanzado. Conversación, inglés para negocios, viajes y preparación para TOEIC, TOEFL e IELTS.',
			'idioma_es_title' => 'Español',
			'idioma_es_text'  => 'Español conversacional y académico. Preparación para el examen DELE y español para el mercado latinoamericano.',
			'idioma_pt_title' => 'Portugués',
			'idioma_pt_text'  => 'Portugués brasileño para extranjeros. Comunicación en el día a día y preparación para el examen CELPE-Bras.',
			// Exámenes
			'exames_title'    => 'Preparación para exámenes',
			'exames_lead'     => 'Experiencia comprobada en la preparación para los principales certificados internacionales de idiomas:',
			// Metodología
			'metodo_title'    => 'Cómo funcionan las clases',
			'metodo_1_title'  => 'Clases en vivo',
			'metodo_1_text'   => 'Encuentros individuales por videollamada, con horarios flexibles que se adaptan a tu agenda.',
			'metodo_2_title'  => 'Material incluido',
			'metodo_2_text'   => 'Apuntes, ejercicios y recursos digitales preparados especialmente para tu perfil y objetivo.',
			'metodo_3_title'  => 'Retroalimentación constante',
			'metodo_3_text'   => 'Correcciones detalladas y seguimiento de tu progreso en cada clase y entre las sesiones.',
			'metodo_4_title'  => 'Para todos los niveles',
			'metodo_4_text'   => 'Principiante, intermedio o avanzado — cada plan se personaliza a tu ritmo y meta.',
			// Testimonios
			'depo_title'      => 'Qué dicen mis alumnos',
			'depo_1_text'     => '&ldquo;¡Lanny es una profesora increíble! En pocos meses pasé el TOEIC con una puntuación muy por encima de lo esperado. Método muy eficiente y clases dinámicas.&rdquo;',
			'depo_1_author'   => '— Alumno de inglés para certificación',
			'depo_2_text'     => '&ldquo;Aprendí portugués en tiempo récord gracias a las clases de Lanny. Tiene mucha paciencia, excelente material y siempre me motivó a seguir adelante.&rdquo;',
			'depo_2_author'   => '— Alumna extranjera de portugués',
			'depo_3_text'     => '&ldquo;¡Pasé el DELE B2 en el primer intento! La preparación con Lanny fue fundamental. Clases muy bien estructuradas y dinámicas.&rdquo;',
			'depo_3_author'   => '— Alumno de español',
			// Contacto
			'contato_title'   => 'Contáctame',
			'contato_lead'    => '¿Quieres saber más o agendar una <strong>clase experimental gratuita</strong>? Completa el formulario o habla directamente por WhatsApp.',
			'contato_wa_label'  => 'WhatsApp',
			'contato_ig_label'  => 'Instagram',
			'contato_wa_cta'    => 'Hablar por WhatsApp ahora',
			'cf7_shortcode'   => '[contact-form-7 id="cbcdbae" title="Formulário de contato 1"]',
		),

		/* ---- ENGLISH ---- */
		'en' => array(
			// Hero
			'hero_eyebrow' => 'Live online classes &middot; English &middot; Spanish &middot; Portuguese',
			'hero_title'   => 'Learn a language with someone<br>who truly supports you',
			'hero_sub'     => 'Personalized methodology, constant feedback, and classes that fit your schedule — for all levels and goals.',
			'hero_cta1'    => 'Get started',
			'hero_cta2'    => 'Chat on WhatsApp',
			// About me
			'sobre_title'  => 'About me',
			'sobre_p1'     => 'Hi! I&rsquo;m <strong>Lanny Herrera</strong>, a teacher of English, Spanish, and Portuguese for foreigners. My passion for languages led me to develop a teaching method that goes beyond grammar — focused on <strong>real communication, confidence, and concrete results</strong>.',
			'sobre_p2'     => 'I work with students of all levels, from beginner to advanced, with 100% online classes and personalized learning materials for each goal. I also prepare students for the main international exams: TOEIC, TOEFL, IELTS, DELE, and CELPE-Bras.',
			'sobre_cta'    => 'Schedule a free trial class',
			// Languages
			'idiomas_title'   => 'Languages I teach',
			'idioma_en_title' => 'English',
			'idioma_en_text'  => 'From beginner to advanced. Conversation, business English, travel, and preparation for TOEIC, TOEFL, and IELTS.',
			'idioma_es_title' => 'Spanish',
			'idioma_es_text'  => 'Conversational and academic Spanish. Preparation for the DELE exam and Spanish for the Latin American job market.',
			'idioma_pt_title' => 'Portuguese',
			'idioma_pt_text'  => 'Brazilian Portuguese for foreigners. Day-to-day communication and preparation for the CELPE-Bras exam.',
			// Exams
			'exames_title'    => 'Exam preparation',
			'exames_lead'     => 'Proven experience preparing students for the main international language certifications:',
			// Methodology
			'metodo_title'    => 'How classes work',
			'metodo_1_title'  => 'Live classes',
			'metodo_1_text'   => 'One-on-one video call sessions with flexible schedules that fit your routine.',
			'metodo_2_title'  => 'Materials included',
			'metodo_2_text'   => 'Worksheets, exercises, and digital resources prepared specifically for your profile and goal.',
			'metodo_3_title'  => 'Constant feedback',
			'metodo_3_text'   => 'Detailed corrections and progress tracking after each session and between classes.',
			'metodo_4_title'  => 'All levels welcome',
			'metodo_4_text'   => 'Beginner, intermediate, or advanced — every plan is personalized to your pace and goals.',
			// Testimonials
			'depo_title'      => 'What my students say',
			'depo_1_text'     => '&ldquo;Lanny is an amazing teacher! In just a few months I passed the TOEIC with a score well above what I expected. Very efficient method and dynamic classes.&rdquo;',
			'depo_1_author'   => '— English student preparing for certification',
			'depo_2_text'     => '&ldquo;I learned Portuguese in record time thanks to Lanny&rsquo;s classes. She is very patient, has excellent materials, and always motivated me to keep going.&rdquo;',
			'depo_2_author'   => '— Foreign Portuguese student',
			'depo_3_text'     => '&ldquo;I passed the DELE B2 on my first attempt! Preparation with Lanny was key. Very well-structured and dynamic classes.&rdquo;',
			'depo_3_author'   => '— Spanish student',
			// Contact
			'contato_title'   => 'Contact me',
			'contato_lead'    => 'Want to learn more or schedule a <strong>free trial class</strong>? Fill out the form or reach me directly on WhatsApp.',
			'contato_wa_label'  => 'WhatsApp',
			'contato_ig_label'  => 'Instagram',
			'contato_wa_cta'    => 'Chat on WhatsApp now',
			'cf7_shortcode'   => '[contact-form-7 id="cbcdbae" title="Formulário de contato 1"]',
		),
	);
}

/* ==========================================================
   SEO — título y descripción por idioma (via filtros Yoast)
   ========================================================== */
add_filter( 'wpseo_title', function( $title ) {
	if ( ! is_front_page() ) {
		return $title;
	}
	$lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'pt';
	$titles = array(
		'pt' => 'Lanny Herrera | Professora de Inglês, Espanhol e Português Online',
		'es' => 'Lanny Herrera | Profesora de Inglés, Español y Portugués Online',
		'en' => 'Lanny Herrera | Online English, Spanish & Portuguese Teacher',
	);
	return isset( $titles[ $lang ] ) ? $titles[ $lang ] : $title;
} );

add_filter( 'wpseo_metadesc', function( $desc ) {
	if ( ! is_front_page() ) {
		return $desc;
	}
	$lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'pt';
	$descs = array(
		'pt' => 'Aulas online ao vivo de inglês, espanhol e português para todos os níveis. Metodologia personalizada e preparação para TOEIC, TOEFL, IELTS, DELE e CELPE-Bras.',
		'es' => 'Clases online en vivo de inglés, español y portugués para todos los niveles. Metodología personalizada y preparación para TOEIC, TOEFL, IELTS y DELE.',
		'en' => 'Live online classes in English, Spanish and Portuguese for all levels. Personalized methodology and preparation for TOEIC, TOEFL, IELTS, DELE and CELPE-Bras.',
	);
	return isset( $descs[ $lang ] ) ? $descs[ $lang ] : $desc;
} );

/* ==========================================================
   Language switcher — forzar URLs a la raíz del idioma.
   Polylang vincula a /es/inicio-2/ en vez de /es/; esto
   lo corrige usando pll_home_url() para cada lang-item.
   ========================================================== */
add_filter( 'wp_nav_menu_objects', function( $items, $_args ) {
	if ( ! function_exists( 'pll_home_url' ) ) {
		return $items;
	}
	foreach ( $items as $item ) {
		if ( empty( $item->classes ) || ! in_array( 'lang-item', $item->classes, true ) ) {
			continue;
		}
		foreach ( $item->classes as $class ) {
			if ( preg_match( '/^lang-item-([a-z]{2})$/', $class, $m ) ) {
				$home = pll_home_url( $m[1] );
				if ( $home ) {
					$item->url = $home;
				}
				break;
			}
		}
	}
	return $items;
}, 10, 2 );
