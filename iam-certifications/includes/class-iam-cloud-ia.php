<?php
/**
 * Shortcode [iam_cloud_ia] : bloc « Formations certifiantes en intelligence
 * artificielle » de l'Innovation Center (programme Cloud & IA, IAM × Aviro).
 *
 * Bloc unique à contenu intégré : aucun attribut, aucune saisie en admin.
 * Les parcours, prix et dates viennent de includes/data/cloud-ia.php, la même
 * source que les deux fiches du catalogue (Cloud Foundations, AI Foundations) :
 * modifier ce fichier met à jour les deux endroits. Le reste du texte est
 * dans la méthode contenu() ci-dessous.
 *
 * Ancre : #formations-ia (lien possible depuis « Formations et certifications »
 * ou depuis l'espace Innovation Center).
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enregistre et rend le bloc Cloud & IA.
 */
class IAM_Cert_Cloud_IA {

	/**
	 * Données du programme (includes/data/cloud-ia.php).
	 *
	 * @var array|null
	 */
	private $data = null;

	/**
	 * Le bloc ne doit apparaître qu'une fois par page.
	 *
	 * @var bool
	 */
	private $deja_rendu = false;

	/**
	 * Enregistre les hooks.
	 *
	 * @return void
	 */
	public function register() {
		add_shortcode( 'iam_cloud_ia', array( $this, 'render' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
	}

	/**
	 * Enregistre la feuille de styles (chargée à la demande par le shortcode).
	 *
	 * @return void
	 */
	public function assets() {
		wp_register_style(
			'iam-cert-cloud-ia',
			IAM_CERT_URL . 'assets/css/iam-cloud-ia.css',
			array(),
			IAM_CERT_VERSION
		);
	}

	/**
	 * Données partagées avec les fiches du catalogue.
	 *
	 * @return array
	 */
	private function data() {
		if ( null === $this->data ) {
			$this->data = include IAM_CERT_PATH . 'includes/data/cloud-ia.php';
		}
		return $this->data;
	}

	/**
	 * Vrai tant que la date limite n'est pas passée (heure du site).
	 *
	 * @param string $limite Date « Y-m-d H:i:s ».
	 * @return bool
	 */
	private function avant( $limite ) {
		$tz = function_exists( 'wp_timezone' ) ? wp_timezone() : new DateTimeZone( 'UTC' );
		return new DateTimeImmutable( 'now', $tz ) <= new DateTimeImmutable( $limite, $tz );
	}

	/**
	 * Contenu du bloc.
	 *
	 * @return array
	 */
	private function contenu() {
		$pack = $this->data()['pack'];
		return array(
			'chiffres'  => array(
				array( '13', 'semaines, de l’orientation à la certification' ),
				array( '+20 h', 'en direct avec des experts' ),
				array( '2', 'examens blancs corrigés en séance' ),
				array( '1', 'certification AWS officielle, examen inclus' ),
			),
			'methode'   => array(
				array( 'live', '+20 h en direct', '10 séances de 2 h et un bootcamp : notions clés, lab guidé sur la console AWS, questions type examen.' ),
				array( 'xp', 'Retours d’expérience', 'Des experts Cloud et IA partagent leurs projets réels : migrations, sécurité, IA générative en entreprise.' ),
				array( 'equipe', 'Projet en équipe', 'Par équipes de 3 à 5, de la semaine 6 à la semaine 13, présenté à la clôture et ajouté à votre portfolio.' ),
				array( 'auto', 'Travail autonome guidé', '4 à 6 h par semaine sur les contenus officiels AWS Academy et Skill Builder, avec un objectif clair chaque lundi.' ),
				array( 'chat', 'Groupe d’entraide', 'Un chat par parcours, animé chaque semaine, avec une réponse du formateur sous 24 h ouvrées.' ),
				array( 'blanc', 'Examens blancs', 'Deux examens blancs en conditions réelles. À partir de 75 %, vous réservez votre examen ; sinon, un plan de remédiation.' ),
			),
			'phases'    => array(
				array( 'Semaine 1', 'Lancement', 'Prise en main des plateformes, objectifs et organisation.' ),
				array( 'Semaines 2 à 7', 'Apprentissage et pratique', 'Les notions de l’examen en séance et en lab ; lancement du projet en semaine 6.' ),
				array( 'Semaines 8 à 11', 'Préparation à l’examen', 'Deux examens blancs, leur correction et un plan de remédiation individuel.' ),
				array( 'Semaines 12 à 13', 'Certification et restitution', 'Bootcamp, examen officiel, puis présentation des projets.' ),
			),
			'etapes'    => array(
				array( 'Test de positionnement', 'Informatique, anglais, Cloud et IA : 15 questions, environ 15 minutes.' ),
				array( 'Orientation', 'Vous recevez le parcours recommandé.' ),
				array( 'Inscription et paiement', 'En 1 ou 2 fois par Orange Money, Wave ou sur place, avant le 4 décembre 2026.' ),
				array( 'Démarrage', 'Séance de lancement le 14 décembre 2026.' ),
			),
			'faq'       => array(
				array( 'Quel parcours choisir ?', 'Le test de positionnement vous oriente. Sans expérience du Cloud, commencez par Cloud Foundations ; si vous travaillez déjà avec des données ou du code, AI Foundations est accessible directement.' ),
				array( 'Puis-je préparer les deux certifications ?', 'Oui, l’une après l’autre : Cloud Foundations d’abord, puis AI Foundations à la promotion suivante. Le Pack Excellence regroupe les deux à ' . $pack['prix'] . ' FCFA au lieu de ' . $pack['au_lieu'] . ' FCFA, examens inclus.' ),
				array( 'Comment se déroule l’examen ?', 'Environ 65 questions en 90 minutes, score minimal de 700/1000, en fin de semaine 12. Au centre Pearson VUE d’IAM ou en ligne depuis chez vous (Pearson VUE OnVUE, surveillé par webcam), en français ou en anglais.' ),
				array( 'Puis-je payer en plusieurs fois ?', 'Oui, en 2 fois par Orange Money ou Wave : 50 % à l’inscription pour réserver votre place, 50 % avant la semaine 4. Vous pouvez aussi payer en une fois, ou sur place à IAM.' ),
				array( 'Combien de temps faut-il prévoir ?', 'Une séance de 2 h par semaine, plus 4 à 6 h de travail autonome. La présence attendue est d’au moins 80 % des séances.' ),
				array( 'Et si je ne suis pas prêt en semaine 12 ?', 'Sous 75 % aux examens blancs, vous suivez un plan de remédiation et passez l’examen avec la promotion suivante.' ),
			),
		);
	}

	/**
	 * Icônes (traits, couleur héritée).
	 *
	 * @param string $nom Nom de l'icône.
	 * @return string
	 */
	private function icone( $nom ) {
		$traces = array(
			'live'   => '<circle cx="12" cy="12" r="3"/><path d="M6.3 6.3a8 8 0 0 0 0 11.4M17.7 6.3a8 8 0 0 1 0 11.4M3.5 3.5a12 12 0 0 0 0 17M20.5 3.5a12 12 0 0 1 0 17"/>',
			'xp'     => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M8 9h8M8 13h5"/>',
			'equipe' => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><circle cx="17" cy="9" r="2.5"/><path d="M16 14.2a5 5 0 0 1 5.5 4.8"/>',
			'auto'   => '<path d="M4 19.5V5a2 2 0 0 1 2-2h13v15H6.5A2.5 2.5 0 0 0 4 20.5 2.5 2.5 0 0 0 6.5 23H19"/><path d="M8 7h7M8 11h5"/>',
			'chat'   => '<path d="M7.5 18.5 3 21l1.3-4.2A8.5 8.5 0 1 1 7.5 18.5z"/><path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/>',
			'blanc'  => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="m9 12 2 2 4-4M9 17h6"/>',
			'fleche' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
			'lieu'   => '<path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/>',
			'check'  => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
		);
		if ( ! isset( $traces[ $nom ] ) ) {
			return '';
		}
		return '<svg class="iam-cia-ico" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $traces[ $nom ] . '</svg>';
	}

	/**
	 * Lien vers la page de présentation (chemin relatif à celle-ci).
	 *
	 * @param string $chemin Chemin (ex. « test-positionnement.html#cloud »).
	 * @return string
	 */
	private function lien( $chemin = '' ) {
		return esc_url( $this->data()['url'] . ltrim( $chemin, '/' ) );
	}

	/**
	 * Rend le shortcode.
	 *
	 * @return string
	 */
	public function render() {
		// Bloc unique : une seule occurrence par page.
		if ( $this->deja_rendu ) {
			return '';
		}
		$this->deja_rendu = true;

		wp_enqueue_style( 'iam-cert-cloud-ia' );

		$d            = $this->data();
		$c            = $this->contenu();
		$img          = IAM_CERT_URL . 'assets/img/';
		$offre        = $this->avant( $d['fin_offre'] );
		$inscriptions = $this->avant( $d['fin_inscriptions'] );
		$ext          = ' target="_blank" rel="noopener"';

		ob_start();
		?>
<section id="formations-ia" class="iam-cia" aria-labelledby="iam-cia-titre">

	<div class="iam-cia-hero">
		<div class="iam-cia-hero__texte">
			<p class="iam-cia-surtitre"><span class="iam-cia-pastille">Innovation Center</span> Groupe IAM × Aviro</p>
			<p class="iam-cia-accroche">L’IA transforme les métiers. Et si tu développais les compétences pour en faire partie&nbsp;?</p>
			<h2 id="iam-cia-titre" class="iam-cia-titre">Formations certifiantes en intelligence artificielle et Cloud</h2>
			<p class="iam-cia-intro">Deux parcours accompagnés de 13 semaines pour préparer et passer une certification officielle AWS, au centre Pearson VUE d’IAM ou en ligne&nbsp;: séances en direct avec des experts, labs pratiques, projet en équipe et examens blancs.</p>
			<ul class="iam-cia-tags">
				<li>Promotion de décembre 2026</li>
				<?php if ( $offre ) : ?>
					<li class="is-offre">Offre de lancement jusqu’au 20 novembre</li>
				<?php endif; ?>
				<li>Paiement en 2 fois</li>
			</ul>
			<div class="iam-cia-actions">
				<a class="iam-cia-btn iam-cia-btn--plein" href="<?php echo $this->lien(); ?>"<?php echo $ext; ?>>Découvrir les formations IA <?php echo $this->icone( 'fleche' ); ?></a>
				<a class="iam-cia-btn iam-cia-btn--ligne" href="#iam-cia-inscription">Passer le test de positionnement</a>
			</div>
		</div>
		<figure class="iam-cia-hero__visuel">
			<img src="<?php echo esc_url( $img . 'cloud-ia/hero-apprenants.jpg' ); ?>" alt="Deux apprenants IAM échangent autour d’un ordinateur portable" loading="lazy" decoding="async" width="1600" height="1067">
			<figcaption><?php echo $this->icone( 'lieu' ); ?> Campus IAM, 7606 Mermoz, Dakar · centre de test Pearson VUE agréé</figcaption>
		</figure>
		<ul class="iam-cia-chiffres">
			<?php foreach ( $c['chiffres'] as $ch ) : ?>
				<li><strong><?php echo esc_html( $ch[0] ); ?></strong><span><?php echo esc_html( $ch[1] ); ?></span></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="iam-cia-bloc">
		<header class="iam-cia-entete">
			<p class="iam-cia-etiquette">Deux parcours, une même méthode</p>
			<h3>Choisissez votre certification AWS</h3>
			<p>Un test de positionnement vous oriente vers le parcours adapté. Vous visez les deux&nbsp;? Commencez par Cloud Foundations, puis enchaînez avec AI Foundations à la promotion suivante.</p>
		</header>

		<div class="iam-cia-parcours">
			<?php
			foreach ( $d['parcours'] as $p ) :
				$fiche = get_page_by_path( $p['slug'], OBJECT, IAM_CERT_CPT );
				$fiche = ( $fiche && 'publish' === $fiche->post_status ) ? get_permalink( $fiche ) : '';
				?>
				<article class="iam-cia-carte">
					<div class="iam-cia-carte__img">
						<img src="<?php echo esc_url( $img . $p['image'] ); ?>" alt="<?php echo esc_attr( $p['image_alt'] ); ?>" loading="lazy" decoding="async">
						<span class="iam-cia-carte__num"><?php echo esc_html( $p['num'] ); ?></span>
					</div>
					<div class="iam-cia-carte__corps">
						<h4><?php echo esc_html( $p['nom'] ); ?></h4>
						<p class="iam-cia-carte__certif"><?php echo esc_html( $p['certif'] ); ?></p>

						<p class="iam-cia-mini">Pour qui</p>
						<p class="iam-cia-carte__pour"><?php echo esc_html( implode( ' · ', $p['public_liste'] ) ); ?></p>

						<p class="iam-cia-mini">Vous apprendrez</p>
						<ul class="iam-cia-liste">
							<?php foreach ( $p['appris'] as $a ) : ?>
								<li><?php echo $this->icone( 'check' ); ?><span><?php echo esc_html( $a ); ?></span></li>
							<?php endforeach; ?>
						</ul>

						<dl class="iam-cia-infos">
							<div><dt>Prérequis</dt><dd><?php echo esc_html( $p['prerequis'] ); ?></dd></div>
							<div><dt>Projet</dt><dd><?php echo esc_html( $p['projet'] ); ?></dd></div>
							<div><dt>Débouchés</dt><dd><?php echo esc_html( $p['debouches_c'] ); ?></dd></div>
						</dl>

						<div class="iam-cia-prix">
							<p class="iam-cia-prix__montant"><strong><?php echo esc_html( $p['prix'] ); ?></strong> FCFA <span>examen inclus</span></p>
							<p class="iam-cia-prix__detail">ou <?php echo esc_html( $p['deux_fois'] ); ?> · <?php echo esc_html( $p['detail'] ); ?></p>
						</div>
						<div class="iam-cia-carte__actions">
							<a class="iam-cia-btn iam-cia-btn--plein" href="<?php echo $this->lien( $p['test'] ); ?>"<?php echo $ext; ?>>Passer le test <?php echo $this->icone( 'fleche' ); ?></a>
							<?php if ( $fiche ) : ?>
								<a class="iam-cia-btn iam-cia-btn--ligne" href="<?php echo esc_url( $fiche ); ?>">Voir la fiche et candidater</a>
							<?php endif; ?>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<aside class="iam-cia-pack">
			<img class="iam-cia-pack__img" src="<?php echo esc_url( $img . 'cloud-ia/trio-apprenants.jpg' ); ?>" alt="" loading="lazy" decoding="async">
			<div>
				<p class="iam-cia-etiquette">Pack Excellence · <?php echo esc_html( $d['pack']['economie'] ); ?> FCFA d’économie</p>
				<h4>Les deux certifications&nbsp;: Cloud Practitioner et AI Practitioner</h4>
				<p>Cloud Foundations, puis AI Foundations à la promotion suivante&nbsp;: plus de 40 h en direct, 2 projets en équipe, 4 examens blancs, 2 examens inclus.</p>
			</div>
			<p class="iam-cia-pack__prix"><strong><?php echo esc_html( $d['pack']['prix'] ); ?></strong> FCFA<span>au lieu de <?php echo esc_html( $d['pack']['au_lieu'] ); ?> · ou <?php echo esc_html( $d['pack']['deux_fois'] ); ?></span></p>
		</aside>
	</div>

	<div class="iam-cia-bloc iam-cia-bloc--beige">
		<header class="iam-cia-entete">
			<p class="iam-cia-etiquette">Comment ça marche</p>
			<h3>Un accompagnement pensé pour réussir l’examen</h3>
		</header>
		<ul class="iam-cia-methode">
			<?php foreach ( $c['methode'] as $m ) : ?>
				<li>
					<span class="iam-cia-methode__ico"><?php echo $this->icone( $m[0] ); ?></span>
					<h4><?php echo esc_html( $m[1] ); ?></h4>
					<p><?php echo esc_html( $m[2] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>

		<ol class="iam-cia-phases" aria-label="Calendrier du programme">
			<?php foreach ( $c['phases'] as $i => $ph ) : ?>
				<li>
					<span class="iam-cia-phases__num"><?php echo (int) $i + 1; ?></span>
					<p class="iam-cia-mini"><?php echo esc_html( $ph[0] ); ?></p>
					<h4><?php echo esc_html( $ph[1] ); ?></h4>
					<p><?php echo esc_html( $ph[2] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>

		<div class="iam-cia-pearson">
			<img src="<?php echo esc_url( $img . 'cloud-ia/campus-promotion.jpg' ); ?>" alt="Une promotion d’apprenants IAM devant le campus de Mermoz" loading="lazy" decoding="async">
			<div>
				<p class="iam-cia-etiquette">Centre de test agréé Pearson VUE</p>
				<h4>Passez votre examen AWS sur place, sans quitter Dakar</h4>
				<p>Pearson VUE est le réseau officiel d’examens des certifications AWS. Créneaux réservés pour votre promotion en fin de semaine 12, poste et salle équipés&nbsp;; passage en ligne possible si vous préférez. Badge numérique Credly vérifiable, certification valable 3 ans.</p>
			</div>
		</div>
	</div>

	<div id="iam-cia-inscription" class="iam-cia-bloc iam-cia-bloc--vert">
		<header class="iam-cia-entete">
			<p class="iam-cia-etiquette">Rejoindre la prochaine promotion</p>
			<h3>Démarrage le <?php echo esc_html( $d['demarrage'] ); ?></h3>
			<p>
				<?php if ( $inscriptions ) : ?>
					Inscriptions jusqu’au 4 décembre 2026. Ouverture de la promotion à partir de 10 inscrits.
				<?php else : ?>
					Les inscriptions de la promotion de décembre sont closes&nbsp;: passez le test pour être orienté vers la suivante.
				<?php endif; ?>
			</p>
		</header>
		<ol class="iam-cia-etapes">
			<?php foreach ( $c['etapes'] as $i => $e ) : ?>
				<li><span><?php echo (int) $i + 1; ?></span><h4><?php echo esc_html( $e[0] ); ?></h4><p><?php echo esc_html( $e[1] ); ?></p></li>
			<?php endforeach; ?>
		</ol>
		<div class="iam-cia-actions iam-cia-actions--centre">
			<a class="iam-cia-btn iam-cia-btn--plein" href="<?php echo $this->lien( 'test-positionnement.html#cloud' ); ?>"<?php echo $ext; ?>>Test Cloud Foundations</a>
			<a class="iam-cia-btn iam-cia-btn--plein" href="<?php echo $this->lien( 'test-positionnement.html#ai' ); ?>"<?php echo $ext; ?>>Test AI Foundations</a>
			<a class="iam-cia-btn iam-cia-btn--ligne" href="<?php echo $this->lien(); ?>"<?php echo $ext; ?>>Découvrir le programme et les modalités</a>
		</div>
		<p class="iam-cia-note">Vous hésitez&nbsp;? Commencez par le test Cloud Foundations. Paiement par Orange Money, Wave ou sur place à IAM. Entreprises&nbsp;: tarif groupe dès 5 salariés, <a href="<?php echo $this->lien( 'demande-entreprise.html' ); ?>"<?php echo $ext; ?>>demander une proposition</a>.</p>
	</div>

	<div class="iam-cia-bloc iam-cia-faq">
		<header class="iam-cia-entete">
			<p class="iam-cia-etiquette">Questions fréquentes</p>
			<h3>Tout savoir avant de vous inscrire</h3>
		</header>
		<div class="iam-cia-faq__liste">
			<?php foreach ( $c['faq'] as $q ) : ?>
				<details>
					<summary><?php echo esc_html( $q[0] ); ?></summary>
					<p><?php echo esc_html( $q[1] ); ?></p>
				</details>
			<?php endforeach; ?>
		</div>
		<p class="iam-cia-mentions">AWS et les noms de certifications AWS sont des marques d’Amazon.com, Inc. ou de ses filiales.</p>
	</div>

</section>
		<?php
		return (string) ob_get_clean();
	}
}
