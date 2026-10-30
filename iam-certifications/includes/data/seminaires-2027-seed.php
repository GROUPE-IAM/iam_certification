<?php
/**
 * Données de pré-remplissage v1.9 : les 162 séminaires de la « Proposition
 * 2027 » (fiches 3FPT du Groupe IAM), 3 jours en présentiel à Dakar ou en intra.
 * Généré depuis « Catalogue_seminaires_IAM_pour le site.xlsx », feuille
 * « Fiches 3FPT ». Sans prix : le tarif 3FPT reste à confirmer.
 *
 * « contenu » devient le texte libre de la page (présentation, compétences,
 * apports). Chaque séminaire a son propre visuel, sans répétition :
 * assets/img/formations/<slug>.jpg.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-previsionnelle-des-emplois-et-des-competences-gpec',
		'titre'            => 'Gestion prévisionnelle des emplois et des compétences (GPEC)',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec la trame GPEC de votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables RH, responsables formation, managers, représentants du personnel',
		'prerequis'        => 'Expérience dans une fonction RH ou managériale.',
		'objectifs'        => 'Comprendre les enjeux, le cadre et les étapes d\'une démarche GPEC
Construire une cartographie des emplois et un référentiel de compétences
Analyser les écarts entre besoins futurs et ressources disponibles
Définir un plan d\'action GPEC : recrutement, formation, mobilité, succession',
		'jours'            => array(
			array(
				'titre'      => 'Enjeux et diagnostic',
				'matin'      => 'Finalités et cadre de la GPEC ; diagnostic quantitatif des effectifs.',
				'apres_midi' => 'Identification des emplois sensibles et des métiers en tension.',
			),
			array(
				'titre'      => 'Référentiels et écarts',
				'matin'      => 'Cartographie des emplois, fiches emplois, référentiel de compétences.',
				'apres_midi' => 'Évaluation des compétences et analyse des écarts.',
			),
			array(
				'titre'      => 'Plan d\'action et pilotage',
				'matin'      => 'Leviers d\'ajustement (recrutement, formation, mobilité, succession) ; tableau de bord GPEC.',
				'apres_midi' => 'Dialogue social autour de la démarche.',
			),
		),
		'livrables'        => 'Trame de démarche GPEC adaptée à sa structure
Modèles de fiche emploi et de référentiel de compétences',
		'evaluation'       => 'Quiz final et étude de cas. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Anticiper les besoins en compétences est devenu une condition de performance pour les entreprises comme pour les administrations. Ce séminaire de 3 jours donne la méthode et les outils pour bâtir une démarche GPEC : diagnostic des emplois, référentiels de compétences, analyse des écarts et plans d\'action. Chaque participant repart avec la trame GPEC de sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur cas d\'entreprises sénégalaises, exercices sur les outils RH des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un diagnostic des effectifs (pyramide des âges, départs prévisibles, emplois sensibles)</li>
<li>Rédiger des fiches emplois et un référentiel de compétences</li>
<li>Mesurer les écarts quantitatifs et qualitatifs à 3 ans</li>
<li>Construire et piloter un plan d\'action GPEC avec ses indicateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode GPEC complète et outils prêts à l\'emploi ; capacité à conduire un diagnostic des emplois ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Besoins en compétences anticipés ; plans de recrutement et de formation mieux ciblés ; réduction des risques liés aux départs et aux emplois critiques.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-recrutement-et-selection-entretien-par-competences-sourcing',
		'titre'            => 'Recrutement et sélection : entretien par compétences, sourcing, intégration (onboarding)',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec un processus de recrutement formalisé et vos outils.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de recrutement, responsables RH, managers recruteurs, dirigeants de PME',
		'prerequis'        => 'Aucun prérequis ; une première expérience du recrutement est un atout.',
		'objectifs'        => 'Définir le besoin et rédiger un profil de poste fondé sur les compétences
Mettre en œuvre un sourcing multicanal efficace
Conduire un entretien structuré par compétences et objectiver la décision
Concevoir un parcours d\'intégration (onboarding) qui fidélise',
		'jours'            => array(
			array(
				'titre'      => 'Définir et attirer',
				'matin'      => 'Analyse du besoin, profil de poste, marque employeur ; rédaction d\'annonces.',
				'apres_midi' => 'Canaux de sourcing (jobboards, LinkedIn, cooptation, écoles).',
			),
			array(
				'titre'      => 'Sélectionner',
				'matin'      => 'Présélection des candidatures ; entretien par compétences et méthode STAR.',
				'apres_midi' => 'Grilles d\'évaluation, tests et prise de références ; simulations d\'entretien.',
			),
			array(
				'titre'      => 'Décider et intégrer',
				'matin'      => 'Décision collégiale et non-discrimination ; offre et contrat.',
				'apres_midi' => 'Parcours d\'onboarding, rapport d\'étonnement et suivi de période d\'essai.',
			),
		),
		'livrables'        => 'Kit recruteur : fiche de poste, grille d\'entretien, guide STAR
Plan d\'onboarding sur 90 jours',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un recrutement réussi se joue autant dans la définition du besoin que dans l\'intégration du nouveau collaborateur. Ce séminaire de 3 jours couvre tout le processus : analyse du poste, sourcing, entretien structuré par compétences, décision et onboarding. Chaque participant repart avec un processus de recrutement formalisé et ses outils.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur cas d\'entreprises sénégalaises, exercices sur les outils RH des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger une fiche de poste et une annonce attractive</li>
<li>Choisir et activer les canaux de sourcing adaptés au marché sénégalais</li>
<li>Mener un entretien comportemental (méthode STAR) avec grille d\'évaluation</li>
<li>Organiser l\'accueil et le suivi des 90 premiers jours du nouveau collaborateur</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Techniques d\'entretien maîtrisées et outils prêts à l\'emploi ; recrutements plus sûrs ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Erreurs de recrutement réduites ; délais de recrutement raccourcis ; meilleure rétention des nouvelles recrues.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-elaboration-et-mise-en-uvre-du-plan-de-formation',
		'titre'            => 'Élaboration et mise en œuvre du plan de formation',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec la trame du plan de formation de votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables formation, DRH, chargés de développement RH, gestionnaires de projets formation',
		'prerequis'        => 'Expérience dans une fonction RH ou de gestion de la formation.',
		'objectifs'        => 'Recueillir et analyser les besoins de formation individuels et collectifs
Construire et budgéter un plan de formation aligné sur la stratégie
Organiser la mise en œuvre et mobiliser les financements disponibles
Évaluer les formations et leurs effets sur la performance',
		'jours'            => array(
			array(
				'titre'      => 'Analyser les besoins',
				'matin'      => 'Lien stratégie-compétences ; méthodes de recueil des besoins.',
				'apres_midi' => 'Analyse et priorisation ; atelier sur cas réel.',
			),
			array(
				'titre'      => 'Construire le plan',
				'matin'      => 'Architecture du plan, cahier des charges, choix des prestataires ; budget.',
				'apres_midi' => 'Dispositifs de financement et procédures du 3FPT.',
			),
			array(
				'titre'      => 'Déployer et évaluer',
				'matin'      => 'Logistique et suivi des actions ; évaluation à chaud et à froid, transfert des acquis, retour sur investissement.',
				'apres_midi' => 'Bilan annuel.',
			),
		),
		'livrables'        => 'Trame de plan de formation et de budget
Questionnaire de recueil des besoins et grilles d\'évaluation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le plan de formation est l\'outil central du développement des compétences, et la condition pour mobiliser les financements du 3FPT. Ce séminaire de 3 jours apprend à recueillir et analyser les besoins, à construire et budgéter le plan, puis à le déployer et en évaluer les effets. Chaque participant repart avec la trame du plan de formation de sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur cas d\'entreprises sénégalaises, exercices sur les outils RH des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Conduire une analyse des besoins (entretiens, questionnaires, entretiens annuels)</li>
<li>Prioriser les actions et rédiger le plan de formation et son budget</li>
<li>Monter un dossier de financement auprès du 3FPT</li>
<li>Évaluer les formations selon les niveaux du modèle de Kirkpatrick</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode complète d\'ingénierie du plan de formation ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Plan de formation aligné sur les priorités ; meilleur accès aux financements du 3FPT ; formations dont l\'impact est mesuré.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-droit-du-travail-et-gestion-des-relations-sociales',
		'titre'            => 'Droit du travail et gestion des relations sociales',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec des outils pratiques pour prévenir et gérer les situations sensibles.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables RH, juristes, gestionnaires du personnel, managers, dirigeants',
		'prerequis'        => 'Aucun prérequis juridique.',
		'objectifs'        => 'Maîtriser les règles essentielles du Code du travail sénégalais et des conventions collectives
Sécuriser la conclusion, l\'exécution et la rupture du contrat de travail
Connaître le rôle et les prérogatives des institutions représentatives du personnel
Prévenir et gérer les conflits collectifs dans le respect des procédures',
		'jours'            => array(
			array(
				'titre'      => 'Cadre de la relation de travail',
				'matin'      => 'Sources du droit du travail ; types de contrats.',
				'apres_midi' => 'Période d\'essai ; durée du travail, congés, rémunération.',
			),
			array(
				'titre'      => 'Exécution et rupture',
				'matin'      => 'Pouvoir disciplinaire ; suspension du contrat ; licenciement pour motif personnel et économique.',
				'apres_midi' => 'Démission ; contentieux.',
			),
			array(
				'titre'      => 'Relations sociales',
				'matin'      => 'Délégués du personnel, syndicats, comités d\'hygiène et de sécurité ; négociation.',
				'apres_midi' => 'Conflits collectifs, grève, conciliation et arbitrage.',
			),
		),
		'livrables'        => 'Fiches pratiques des procédures clés
Modèles de courriers RH (sanction, convocation, notification)',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La maîtrise du Code du travail sénégalais et des conventions collectives sécurise les décisions RH et apaise le climat social. Ce séminaire de 3 jours fait le point sur le cadre juridique de la relation de travail et sur la conduite des relations avec les représentants du personnel. Chaque participant repart avec des outils pratiques pour prévenir et gérer les situations sensibles.</p>
<p>Pédagogie active avec 70 % de pratique : analyse de cas de jurisprudence, exercices de rédaction de documents RH, simulations de réunions avec les délégués du personnel.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les obligations de l\'employeur et du salarié</li>
<li>Appliquer les procédures disciplinaires et de licenciement</li>
<li>Organiser les élections et les réunions avec les délégués du personnel</li>
<li>Gérer une grève ou un différend collectif et préparer un recours devant l\'inspection du travail</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise du cadre légal applicable au quotidien RH ; outils et modèles prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décisions RH sécurisées et contentieux évités ; dialogue social plus serein ; conformité avec la législation sénégalaise.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-la-paie-et-des-charges-sociales',
		'titre'            => 'Gestion de la paie et des charges sociales',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec un simulateur de paie et un calendrier des obligations.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de paie, assistants RH, comptables, responsables administratifs et financiers',
		'prerequis'        => 'Notions de base en gestion du personnel ou en comptabilité ; pratique d\'Excel.',
		'objectifs'        => 'Maîtriser la structure du bulletin de paie et les éléments de rémunération
Calculer les cotisations sociales et la retenue d\'impôt sur le revenu
Établir les déclarations sociales et fiscales dans les délais
Contrôler la paie et traiter les cas particuliers',
		'jours'            => array(
			array(
				'titre'      => 'Les fondamentaux',
				'matin'      => 'Cadre légal ; éléments de rémunération.',
				'apres_midi' => 'Primes, indemnités et avantages en nature ; heures supplémentaires.',
			),
			array(
				'titre'      => 'Cotisations et impôt',
				'matin'      => 'Assiettes et taux IPRES et CSS ; retenue IR et TRIMF.',
				'apres_midi' => 'Calculs pratiques sur Excel.',
			),
			array(
				'titre'      => 'Déclarations et contrôle',
				'matin'      => 'Déclarations périodiques et annuelles ; congés et soldes de tout compte.',
				'apres_midi' => 'Contrôles de cohérence ; comptabilisation de la paie.',
			),
		),
		'livrables'        => 'Simulateur de paie sous Excel
Calendrier des déclarations sociales et fiscales',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une paie juste et conforme est un enjeu de confiance et de conformité. Ce séminaire de 3 jours couvre le calcul de la paie au Sénégal, de l\'élément brut au net à payer, ainsi que les déclarations sociales et fiscales associées (IPRES, CSS, IR). Chaque participant repart avec un simulateur de paie et un calendrier des obligations.</p>
<p>Pédagogie active avec 70 % de pratique : exercices de calcul sur bulletins réels anonymisés, travaux sur Excel, cas de contrôle de paie.</p>
<h3>Compétences développées</h3>
<ul>
<li>Établir un bulletin de paie complet, du brut au net</li>
<li>Calculer les cotisations IPRES et CSS et la retenue IR</li>
<li>Traiter absences, congés, heures supplémentaires et soldes de tout compte</li>
<li>Réaliser les contrôles de cohérence et les écritures comptables de paie</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur le calcul et le contrôle de la paie ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Paie fiable et conforme ; pénalités et redressements évités ; confiance des salariés renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-evaluation-de-la-performance-et-gestion-des-carrieres',
		'titre'            => 'Évaluation de la performance et gestion des carrières',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec un dispositif d\'évaluation et des outils de gestion des carrières.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables RH, managers, responsables de la gestion des carrières',
		'prerequis'        => 'Expérience de management ou de fonction RH.',
		'objectifs'        => 'Concevoir un système d\'évaluation de la performance juste et lisible
Fixer des objectifs mesurables et des critères d\'évaluation
Conduire des entretiens annuels et professionnels efficaces
Construire des parcours de carrière et des plans de succession',
		'jours'            => array(
			array(
				'titre'      => 'Concevoir le système',
				'matin'      => 'Finalités de l\'évaluation ; critères, compétences et objectifs.',
				'apres_midi' => 'Échelles de notation ; biais d\'évaluation.',
			),
			array(
				'titre'      => 'Conduire les entretiens',
				'matin'      => 'Préparation, déroulé et posture ; feedback et recadrage.',
				'apres_midi' => 'Simulations d\'entretiens filmés et débriefés.',
			),
			array(
				'titre'      => 'Gérer les carrières',
				'matin'      => 'Revues de talents, matrice performance-potentiel ; mobilité et promotion.',
				'apres_midi' => 'Plans de succession et de développement.',
			),
		),
		'livrables'        => 'Support d\'entretien annuel et grille d\'évaluation
Matrice performance-potentiel et modèle de plan de succession',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'entretien annuel et la gestion des carrières sont des leviers de motivation lorsqu\'ils reposent sur des critères clairs. Ce séminaire de 3 jours apprend à concevoir un système d\'évaluation, à conduire des entretiens utiles et à construire des parcours de carrière. Chaque participant repart avec un dispositif d\'évaluation et des outils de gestion des carrières.</p>
<p>Pédagogie active avec 70 % de pratique : simulations d\'entretiens, jeux de rôle, ateliers de conception d\'outils.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger des objectifs SMART et une grille d\'évaluation</li>
<li>Mener un entretien d\'évaluation et formuler un feedback constructif</li>
<li>Identifier les potentiels et élaborer des plans de développement individuels</li>
<li>Mettre en place des revues de talents et des plans de succession</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Aisance dans la conduite d\'entretiens ; outils d\'évaluation prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Évaluations plus objectives et mieux acceptées ; talents identifiés et fidélisés ; postes clés sécurisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-d-equipe-et-leadership',
		'titre'            => 'Management d\'équipe et leadership',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec votre plan de développement managérial.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers de proximité, chefs de service, cadres nouvellement promus, chefs de projet',
		'prerequis'        => 'Encadrer ou se préparer à encadrer une équipe.',
		'objectifs'        => 'Identifier son style de leadership et l\'adapter aux situations
Fixer des objectifs, déléguer et suivre l\'activité de l\'équipe
Motiver et développer ses collaborateurs
Gérer les situations difficiles et les tensions dans l\'équipe',
		'jours'            => array(
			array(
				'titre'      => 'Posture du leader',
				'matin'      => 'Rôles du manager ; styles de leadership et autodiagnostic.',
				'apres_midi' => 'Management situationnel ; intelligence émotionnelle.',
			),
			array(
				'titre'      => 'Organiser et motiver',
				'matin'      => 'Objectifs, délégation et suivi ; leviers de motivation.',
				'apres_midi' => 'Reconnaissance ; animation de réunions efficaces.',
			),
			array(
				'titre'      => 'Situations difficiles',
				'matin'      => 'Feedback, recadrage et gestion des tensions ; conduite du changement dans l\'équipe.',
				'apres_midi' => 'Plan de développement managérial.',
			),
		),
		'livrables'        => 'Autodiagnostic de style managérial
Plan de développement managérial personnalisé',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le manager est le premier levier d\'engagement et de performance de ses collaborateurs. Ce séminaire de 3 jours développe les compétences clés du management d\'équipe : posture de leader, délégation, motivation, communication et gestion des situations difficiles. Chaque participant repart avec son plan de développement managérial.</p>
<p>Pédagogie active avec 70 % de pratique : autodiagnostics, jeux de rôle, études de cas, échanges de pratiques entre managers.</p>
<h3>Compétences développées</h3>
<ul>
<li>Diagnostiquer son style de management et ses axes de progrès</li>
<li>Appliquer le management situationnel selon l\'autonomie des collaborateurs</li>
<li>Conduire une réunion d\'équipe et un entretien de recadrage</li>
<li>Utiliser les leviers de motivation adaptés à chaque collaborateur</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Meilleure connaissance de soi comme manager ; outils concrets de délégation et de motivation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes plus engagées et plus performantes ; climat de travail amélioré ; managers mieux préparés aux situations difficiles.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-des-conflits-et-climat-social',
		'titre'            => 'Gestion des conflits et climat social',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec des outils de prévention et de résolution des conflits.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, responsables RH, représentants du personnel, médiateurs internes',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les sources et les mécanismes des conflits au travail
Adopter une posture et une communication qui désamorcent les tensions
Conduire une médiation entre collaborateurs
Mesurer et améliorer le climat social de son organisation',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre le conflit',
				'matin'      => 'Sources, types et escalade des conflits ; styles de gestion (modèle de Thomas-Kilmann).',
				'apres_midi' => 'Autodiagnostic.',
			),
			array(
				'titre'      => 'Désamorcer et résoudre',
				'matin'      => 'Écoute active, communication non violente, assertivité ; processus de médiation.',
				'apres_midi' => 'Jeux de rôle.',
			),
			array(
				'titre'      => 'Piloter le climat social',
				'matin'      => 'Indicateurs et baromètre social ; dialogue avec les partenaires sociaux.',
				'apres_midi' => 'Prévention ; plan d\'action.',
			),
		),
		'livrables'        => 'Guide de médiation en 6 étapes
Modèle de baromètre social',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les conflits mal gérés coûtent cher en absentéisme, en démotivation et en contentieux. Ce séminaire de 3 jours apprend à comprendre les mécanismes du conflit, à intervenir comme médiateur et à piloter le climat social de son organisation. Chaque participant repart avec des outils de prévention et de résolution des conflits.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de rôle, simulations de médiation, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier le type et le niveau d\'escalade d\'un conflit</li>
<li>Pratiquer l\'écoute active et la communication non violente</li>
<li>Mener un entretien de médiation selon un processus structuré</li>
<li>Concevoir un baromètre social et un plan d\'action climat</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Aisance face aux situations conflictuelles ; méthodes de médiation éprouvées ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Conflits traités plus tôt et à moindre coût ; climat social apaisé ; absentéisme et contentieux réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-digitalisation-de-la-fonction-rh-sirh-rh-analytique',
		'titre'            => 'Digitalisation de la fonction RH (SIRH, RH analytique)',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec la feuille de route de digitalisation RH de votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables SIRH, contrôleurs de gestion sociale, chefs de projet RH',
		'prerequis'        => 'Pratique courante des outils bureautiques.',
		'objectifs'        => 'Cartographier les processus RH à digitaliser et en mesurer les gains
Choisir et déployer un SIRH adapté à sa structure
Exploiter les données RH à travers des indicateurs et tableaux de bord
Accompagner les utilisateurs et sécuriser les données personnelles',
		'jours'            => array(
			array(
				'titre'      => 'Diagnostic et opportunités',
				'matin'      => 'Panorama des outils RH digitaux ; cartographie des processus.',
				'apres_midi' => 'Diagnostic de maturité ; priorisation.',
			),
			array(
				'titre'      => 'Choisir et déployer un SIRH',
				'matin'      => 'Cahier des charges, comparaison des solutions, conduite du projet.',
				'apres_midi' => 'Dématérialisation et signature électronique.',
			),
			array(
				'titre'      => 'RH analytique',
				'matin'      => 'Indicateurs RH clés ; construction d\'un tableau de bord.',
				'apres_midi' => 'Protection des données personnelles ; feuille de route.',
			),
		),
		'livrables'        => 'Feuille de route de digitalisation RH
Modèle de tableau de bord RH',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Power BI',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La digitalisation des processus RH libère du temps pour l\'accompagnement et améliore la qualité des décisions. Ce séminaire de 3 jours aide à choisir et déployer un SIRH, à dématérialiser les processus et à exploiter les données RH. Chaque participant repart avec la feuille de route de digitalisation RH de sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés, démonstrations de solutions, construction d\'un tableau de bord.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un diagnostic de maturité digitale de la fonction RH</li>
<li>Rédiger un cahier des charges SIRH et comparer les solutions</li>
<li>Construire un tableau de bord RH (effectifs, absentéisme, turnover, masse salariale)</li>
<li>Piloter le changement et respecter la protection des données personnelles</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compétences en pilotage de projet SIRH et en analyse de données RH ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Processus RH plus rapides et fiables ; décisions RH fondées sur les données ; conformité en matière de données personnelles.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-qualite-de-vie-au-travail-et-prevention-des-risques',
		'titre'            => 'Qualité de vie au travail et prévention des risques psychosociaux',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec un plan de prévention adapté à votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables RH, managers, membres des comités d\'hygiène et de sécurité, médecins et infirmiers du travail',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les risques psychosociaux et leurs effets sur la santé et la performance
Identifier et évaluer les facteurs de risque dans son organisation
Construire un plan de prévention et une démarche de qualité de vie au travail
Repérer et accompagner les salariés en difficulté',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre',
				'matin'      => 'Définitions et cadre légal ; facteurs de risques psychosociaux.',
				'apres_midi' => 'Effets sur la santé et sur l\'organisation.',
			),
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Outils de diagnostic : questionnaires, entretiens, indicateurs d\'alerte.',
				'apres_midi' => 'Atelier d\'évaluation sur cas.',
			),
			array(
				'titre'      => 'Agir',
				'matin'      => 'Plan de prévention et démarche QVT ; rôle du manager.',
				'apres_midi' => 'Repérage et accompagnement des salariés en difficulté.',
			),
		),
		'livrables'        => 'Grille d\'évaluation des risques psychosociaux
Plan de prévention et de qualité de vie au travail',
		'evaluation'       => 'Quiz final et présentation du plan d\'action. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Stress, épuisement et tensions pèsent sur la santé des salariés et la performance des organisations. Ce séminaire de 3 jours permet d\'identifier les risques psychosociaux, de les évaluer et de bâtir une démarche de qualité de vie au travail. Chaque participant repart avec un plan de prévention adapté à sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas, ateliers de diagnostic, jeux de rôle.</p>
<h3>Compétences développées</h3>
<ul>
<li>Distinguer stress, épuisement professionnel, harcèlement et violences au travail</li>
<li>Conduire une évaluation des risques psychosociaux et l\'intégrer au document de prévention</li>
<li>Définir des actions de prévention primaire, secondaire et tertiaire</li>
<li>Mener un entretien de soutien et orienter vers les bons interlocuteurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à repérer et prévenir les risques psychosociaux ; outils d\'évaluation prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Absentéisme et turnover réduits ; obligations de prévention respectées ; engagement et attractivité renforcés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-remuneration-motivation-et-fidelisation-des-talents',
		'titre'            => 'Rémunération, motivation et fidélisation des talents',
		'domaine'          => 'Ressources Humaines',
		'hero'             => 'Repartez avec une grille de rémunération et un plan d\'action fidélisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables rémunération, responsables RH, contrôleurs de gestion sociale, dirigeants',
		'prerequis'        => 'Expérience en gestion RH ; pratique d\'Excel.',
		'objectifs'        => 'Construire une politique de rémunération globale, équitable et compétitive
Classifier et peser les emplois pour structurer les salaires
Concevoir une rémunération variable et des avantages motivants
Mettre en place un plan de fidélisation des talents clés',
		'jours'            => array(
			array(
				'titre'      => 'Politique de rémunération',
				'matin'      => 'Composantes de la rémunération globale ; classification et pesée de postes.',
				'apres_midi' => 'Grilles salariales.',
			),
			array(
				'titre'      => 'Équité et performance',
				'matin'      => 'Équité interne et enquêtes de salaires ; rémunération variable, primes et intéressement.',
				'apres_midi' => 'Budget de masse salariale.',
			),
			array(
				'titre'      => 'Motiver et fidéliser',
				'matin'      => 'Leviers non financiers ; marque employeur.',
				'apres_midi' => 'Analyse du turnover ; plan de rétention des talents clés.',
			),
		),
		'livrables'        => 'Grille salariale type et outil de pesée de postes
Plan de fidélisation des talents clés',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Attirer et garder les meilleurs profils exige une politique de rémunération équitable et des leviers de motivation au-delà du salaire. Ce séminaire de 3 jours apprend à construire une politique de rémunération globale et un plan de fidélisation. Chaque participant repart avec une grille de rémunération et un plan d\'action fidélisation.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur cas d\'entreprises sénégalaises, exercices sur les outils RH des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une pesée de postes et bâtir une grille salariale</li>
<li>Analyser l\'équité interne et la compétitivité externe des salaires</li>
<li>Concevoir un dispositif de rémunération variable lié aux objectifs</li>
<li>Identifier les talents à risque de départ et définir des actions de rétention</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils de rémunération et de fidélisation ; grilles prêtes à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Masse salariale mieux maîtrisée ; turnover des talents clés réduit ; attractivité de l\'employeur renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-comptabilite-generale-et-analytique-de-l-initiation-au',
		'titre'            => 'Comptabilité générale et analytique, de l\'initiation au perfectionnement',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'La comptabilité est le langage commun de la gestion.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Aides-comptables, comptables débutants, assistants de gestion, gestionnaires non financiers',
		'prerequis'        => 'Aucun prérequis comptable ; pratique d\'Excel souhaitée.',
		'objectifs'        => 'Maîtriser les principes et le plan de comptes du SYSCOHADA révisé
Enregistrer les opérations courantes et les écritures d\'inventaire
Comprendre le passage de la comptabilité générale à la comptabilité analytique
Calculer des coûts et des marges par produit ou activité',
		'jours'            => array(
			array(
				'titre'      => 'Principes et opérations courantes',
				'matin'      => 'Logique de la partie double, plan de comptes SYSCOHADA.',
				'apres_midi' => 'Achats, ventes, TVA, règlements.',
			),
			array(
				'titre'      => 'Inventaire et états financiers',
				'matin'      => 'Amortissements, provisions, régularisations ; rapprochement bancaire.',
				'apres_midi' => 'Balance, bilan et compte de résultat.',
			),
			array(
				'titre'      => 'Comptabilité analytique',
				'matin'      => 'Charges incorporables, centres d\'analyse ; coûts complets et coûts partiels.',
				'apres_midi' => 'Marges et seuil de rentabilité.',
			),
		),
		'livrables'        => 'Fiches mémo des écritures types SYSCOHADA
Modèle Excel de calcul de coût de revient',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La comptabilité est le langage commun de la gestion. Ce séminaire de 3 jours fait progresser les participants des principes de la comptabilité générale SYSCOHADA jusqu\'aux bases de la comptabilité analytique. Chaque participant repart capable de tenir les écritures courantes et de calculer des coûts de revient.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Passer les écritures d\'achats, de ventes, de trésorerie et de paie</li>
<li>Réaliser les rapprochements bancaires et les opérations d\'inventaire</li>
<li>Établir une balance et des états financiers simples</li>
<li>Calculer un coût de revient par la méthode des centres d\'analyse</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur les écritures courantes et le calcul des coûts ; bases solides pour progresser ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Comptabilité tenue de façon fiable et à jour ; meilleure connaissance des coûts ; dépendance réduite aux prestataires externes.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-maitrise-du-referentiel-comptable-en-vigueur-syscohada',
		'titre'            => 'Maîtrise du référentiel comptable en vigueur (SYSCOHADA révisé, IFRS selon le contexte)',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec une grille d\'analyse des impacts sur vos propres comptes.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, chefs comptables, DAF, auditeurs, commissaires aux comptes stagiaires',
		'prerequis'        => 'Pratique de la comptabilité générale.',
		'objectifs'        => 'Maîtriser les principales dispositions du SYSCOHADA révisé
Appliquer les règles d\'évaluation des actifs, passifs, produits et charges
Identifier les différences majeures entre SYSCOHADA et IFRS
Mesurer les impacts du référentiel sur les états financiers de sa structure',
		'jours'            => array(
			array(
				'titre'      => 'Cadre conceptuel',
				'matin'      => 'Acte uniforme OHADA ; principes et nouveautés du SYSCOHADA révisé.',
				'apres_midi' => 'Système normal et système minimal de trésorerie.',
			),
			array(
				'titre'      => 'Règles d\'évaluation',
				'matin'      => 'Immobilisations et approche par composants ; stocks ; locations.',
				'apres_midi' => 'Provisions ; produits des activités ordinaires.',
			),
			array(
				'titre'      => 'États financiers et IFRS',
				'matin'      => 'Présentation des états et notes annexes ; principales normes IFRS et différences.',
				'apres_midi' => 'Cas de conversion.',
			),
		),
		'livrables'        => 'Grille d\'analyse des impacts du référentiel
Table de passage SYSCOHADA vers IFRS',
		'evaluation'       => 'Quiz final et étude de cas. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le SYSCOHADA révisé a profondément modifié les règles d\'évaluation et de présentation des comptes, et les IFRS s\'imposent à certaines entités. Ce séminaire de 3 jours fait le point sur les principales dispositions du référentiel et sur ses différences avec les IFRS. Chaque participant repart avec une grille d\'analyse des impacts sur ses propres comptes.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Appliquer l\'approche par composants et les règles d\'amortissement</li>
<li>Traiter les contrats de location, provisions et engagements selon le référentiel</li>
<li>Rédiger les notes annexes exigées</li>
<li>Établir une table de passage SYSCOHADA vers IFRS pour les postes clés</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise actualisée du référentiel comptable ; capacité à traiter les opérations complexes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Comptes conformes et fiables ; réserves des auditeurs évitées ; préparation aux exigences des investisseurs et bailleurs.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-elaboration-des-etats-financiers-et-analyse-financiere',
		'titre'            => 'Élaboration des états financiers et analyse financière',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un modèle d\'analyse financière automatisé.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, contrôleurs de gestion, analystes crédit, DAF, chargés d\'affaires bancaires',
		'prerequis'        => 'Bonne pratique de la comptabilité générale.',
		'objectifs'        => 'Établir le bilan, le compte de résultat et le tableau des flux de trésorerie
Calculer et interpréter les soldes intermédiaires de gestion et les ratios
Analyser l\'équilibre financier, la rentabilité et la solvabilité
Formuler un diagnostic financier et des recommandations',
		'jours'            => array(
			array(
				'titre'      => 'Produire les états',
				'matin'      => 'Travaux de clôture ; bilan et compte de résultat SYSCOHADA.',
				'apres_midi' => 'Tableau des flux de trésorerie.',
			),
			array(
				'titre'      => 'Analyser l\'activité et la rentabilité',
				'matin'      => 'Soldes intermédiaires de gestion, capacité d\'autofinancement, ratios de rentabilité.',
				'apres_midi' => 'Analyse sur cas réel.',
			),
			array(
				'titre'      => 'Analyser la structure',
				'matin'      => 'Équilibre financier, FR, BFR, trésorerie ; endettement et solvabilité.',
				'apres_midi' => 'Rédaction d\'un diagnostic.',
			),
		),
		'livrables'        => 'Modèle Excel d\'analyse financière (SIG, ratios, flux)
Trame de note de diagnostic financier',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les états financiers ne servent pas seulement à déclarer : bien lus, ils révèlent la rentabilité, la solidité et les risques d\'une entreprise. Ce séminaire de 3 jours apprend à produire les états financiers SYSCOHADA puis à en tirer un diagnostic financier complet. Chaque participant repart avec un modèle d\'analyse financière automatisé.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser les travaux de clôture et produire les états financiers</li>
<li>Construire le tableau des flux de trésorerie</li>
<li>Calculer fonds de roulement, besoin en fonds de roulement et trésorerie nette</li>
<li>Rédiger une note de diagnostic financier à destination de la direction</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à produire et interpréter des états financiers ; outil d\'analyse réutilisable ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Information financière fiable pour la direction ; risques financiers détectés plus tôt ; dialogue facilité avec les banques.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-controle-de-gestion-budgets-tableaux-de-bord-calcul-des',
		'titre'            => 'Contrôle de gestion : budgets, tableaux de bord, calcul des coûts, reporting',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un tableau de bord de pilotage adapté à votre activité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Contrôleurs de gestion, comptables, responsables financiers, managers opérationnels',
		'prerequis'        => 'Notions de comptabilité ; pratique d\'Excel.',
		'objectifs'        => 'Comprendre le rôle du contrôle de gestion dans le pilotage de la performance
Calculer des coûts et analyser la rentabilité par activité
Construire un budget et analyser les écarts
Concevoir des tableaux de bord et un reporting utiles à la décision',
		'jours'            => array(
			array(
				'titre'      => 'Coûts et rentabilité',
				'matin'      => 'Missions du contrôleur de gestion ; coûts complets, variables, ABC.',
				'apres_midi' => 'Seuil de rentabilité ; analyse par activité.',
			),
			array(
				'titre'      => 'Budget et écarts',
				'matin'      => 'Démarche budgétaire ; budgets opérationnels et de trésorerie.',
				'apres_midi' => 'Analyse des écarts et actions correctives.',
			),
			array(
				'titre'      => 'Tableaux de bord et reporting',
				'matin'      => 'Indicateurs clés de performance ; construction du tableau de bord.',
				'apres_midi' => 'Reporting mensuel et dialogue de gestion.',
			),
		),
		'livrables'        => 'Tableau de bord de pilotage sous Excel
Modèles de budget et d\'analyse des écarts',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le contrôle de gestion donne à la direction les moyens de piloter la performance. Ce séminaire de 3 jours couvre les outils essentiels : calcul des coûts, construction budgétaire, suivi des écarts, tableaux de bord et reporting. Chaque participant repart avec un tableau de bord de pilotage adapté à son activité.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Mettre en œuvre les méthodes de coûts complets, partiels et ABC</li>
<li>Élaborer les budgets des ventes, de production, de charges et de trésorerie</li>
<li>Calculer et commenter les écarts entre réalisations et prévisions</li>
<li>Choisir des indicateurs pertinents et bâtir un tableau de bord</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils clés du contrôle de gestion ; modèles prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Pilotage de la performance renforcé ; coûts maîtrisés ; décisions éclairées par un reporting fiable.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-audit-interne-methodologie-cartographie-des-risques-plan-d',
		'titre'            => 'Audit interne : méthodologie, cartographie des risques, plan d\'audit',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec une cartographie des risques et un programme de mission.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Auditeurs internes, contrôleurs internes, responsables risques, inspecteurs, comptables',
		'prerequis'        => 'Connaissance du fonctionnement d\'une organisation ; notions de comptabilité ou de contrôle interne.',
		'objectifs'        => 'Situer l\'audit interne dans le dispositif de gouvernance et de contrôle
Construire une cartographie des risques
Élaborer un plan d\'audit annuel fondé sur les risques
Conduire une mission d\'audit de la préparation au rapport',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et risques',
				'matin'      => 'Normes internationales de l\'audit interne ; gouvernance.',
				'apres_midi' => 'Identification et évaluation des risques ; cartographie.',
			),
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Univers d\'audit ; plan d\'audit fondé sur les risques.',
				'apres_midi' => 'Lettre de mission ; prise de connaissance et programme de travail.',
			),
			array(
				'titre'      => 'Réaliser et restituer',
				'matin'      => 'Techniques de collecte et de test ; feuilles de travail.',
				'apres_midi' => 'Constats, recommandations, rapport ; suivi des plans d\'action.',
			),
		),
		'livrables'        => 'Cartographie des risques type
Programme de mission et modèle de rapport d\'audit',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'audit interne apporte à la direction une assurance sur la maîtrise des risques et l\'efficacité des processus. Ce séminaire de 3 jours présente la méthodologie conforme aux normes internationales : cartographie des risques, plan d\'audit fondé sur les risques, conduite des missions et rapport. Chaque participant repart avec une cartographie des risques et un programme de mission.</p>
<p>Pédagogie active avec 70 % de pratique : étude de cas fil rouge d\'une mission d\'audit complète, exercices de cartographie, rédaction de rapport.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier, évaluer et hiérarchiser les risques d\'un processus</li>
<li>Rédiger un plan d\'audit pluriannuel et un programme de travail</li>
<li>Utiliser les outils d\'audit : questionnaires, tests, échantillonnage, entretiens</li>
<li>Rédiger des constats et des recommandations et en assurer le suivi</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodologie d\'audit maîtrisée et conforme aux normes ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Risques majeurs identifiés et suivis ; processus mieux maîtrisés ; gouvernance renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-audit-financier-et-commissariat-aux-comptes',
		'titre'            => 'Audit financier et commissariat aux comptes',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec les programmes de travail par cycle.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Auditeurs externes, collaborateurs de cabinets, comptables, contrôleurs financiers, auditeurs internes',
		'prerequis'        => 'Bonne maîtrise de la comptabilité générale et des états financiers.',
		'objectifs'        => 'Maîtriser le cadre légal et normatif du commissariat aux comptes en zone OHADA
Appliquer la démarche d\'audit fondée sur les risques selon les normes ISA
Auditer les principaux cycles comptables
Formuler une opinion et rédiger le rapport d\'audit',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et planification',
				'matin'      => 'Acte uniforme OHADA et missions du commissaire aux comptes ; normes ISA.',
				'apres_midi' => 'Prise de connaissance, seuil de signification, risques.',
			),
			array(
				'titre'      => 'Contrôle interne et cycles',
				'matin'      => 'Évaluation du contrôle interne ; tests.',
				'apres_midi' => 'Audit des cycles ventes, achats, stocks, trésorerie, immobilisations.',
			),
			array(
				'titre'      => 'Opinion et rapport',
				'matin'      => 'Événements postérieurs, continuité d\'exploitation ; lettre d\'affirmation.',
				'apres_midi' => 'Types d\'opinion ; rapports généraux et spéciaux.',
			),
		),
		'livrables'        => 'Programmes de travail par cycle
Modèles de rapports d\'audit',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La certification des comptes repose sur une démarche rigoureuse d\'évaluation des risques et de collecte d\'éléments probants. Ce séminaire de 3 jours présente la démarche d\'audit financier selon les normes ISA et le cadre OHADA du commissariat aux comptes. Chaque participant repart avec les programmes de travail par cycle.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Déterminer le seuil de signification et évaluer le risque d\'anomalies</li>
<li>Évaluer le contrôle interne et concevoir des tests adaptés</li>
<li>Réaliser les contrôles de substance sur les cycles ventes, achats, stocks, trésorerie et immobilisations</li>
<li>Rédiger un rapport de certification avec ou sans réserve</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Démarche d\'audit financier maîtrisée ; outils de travail réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Comptes plus fiables et mieux préparés aux audits ; relations facilitées avec les commissaires aux comptes ; risques d\'anomalies réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-controle-interne-et-gouvernance',
		'titre'            => 'Contrôle interne et gouvernance',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un diagnostic du contrôle interne d\'un processus clé.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Contrôleurs internes, auditeurs, DAF, responsables conformité, administrateurs, secrétaires généraux',
		'prerequis'        => 'Connaissance du fonctionnement d\'une organisation.',
		'objectifs'        => 'Comprendre le référentiel COSO et les principes de bonne gouvernance
Évaluer le dispositif de contrôle interne d\'un processus
Concevoir des contrôles clés et un manuel de procédures
Organiser le pilotage du contrôle interne avec les organes de gouvernance',
		'jours'            => array(
			array(
				'titre'      => 'Gouvernance et référentiels',
				'matin'      => 'Rôle du conseil et du comité d\'audit ; COSO 2013 : composantes et principes.',
				'apres_midi' => 'Trois lignes de maîtrise.',
			),
			array(
				'titre'      => 'Évaluer et concevoir',
				'matin'      => 'Cartographie des processus ; matrice risques-contrôles.',
				'apres_midi' => 'Séparation des tâches ; rédaction de procédures.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Autoévaluation, tests et indicateurs ; reporting aux organes de gouvernance.',
				'apres_midi' => 'Plan d\'amélioration.',
			),
		),
		'livrables'        => 'Matrice risques-contrôles type
Modèle de manuel de procédures',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un dispositif de contrôle interne solide protège le patrimoine, fiabilise l\'information et rassure partenaires et bailleurs. Ce séminaire de 3 jours apprend à concevoir, évaluer et améliorer le contrôle interne selon le référentiel COSO, en lien avec les organes de gouvernance. Chaque participant repart avec un diagnostic du contrôle interne d\'un processus clé.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les risques et les contrôles clés d\'un processus</li>
<li>Réaliser une matrice risques-contrôles et un test de conformité</li>
<li>Rédiger une procédure et une matrice de séparation des tâches</li>
<li>Préparer un reporting au comité d\'audit ou au conseil d\'administration</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à évaluer et renforcer un dispositif de contrôle interne ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Patrimoine protégé et fraudes prévenues ; information financière fiabilisée ; confiance accrue des partenaires et bailleurs.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-lutte-contre-la-fraude-et-audit-forensique',
		'titre'            => 'Lutte contre la fraude et audit forensique',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec une cartographie des risques de fraude et un protocole d\'investigation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Auditeurs internes et externes, contrôleurs internes, responsables conformité, DAF, inspecteurs',
		'prerequis'        => 'Notions d\'audit ou de contrôle interne ; pratique d\'Excel.',
		'objectifs'        => 'Comprendre les mécanismes et les typologies de fraude interne et externe
Cartographier les risques de fraude et mettre en place des contrôles préventifs
Détecter les signaux d\'alerte, notamment par l\'analyse de données
Conduire une investigation dans le respect des règles de preuve',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre la fraude',
				'matin'      => 'Triangle de la fraude ; typologies et cas réels en Afrique de l\'Ouest.',
				'apres_midi' => 'Cadre légal et réglementaire.',
			),
			array(
				'titre'      => 'Prévenir et détecter',
				'matin'      => 'Cartographie des risques de fraude ; contrôles clés.',
				'apres_midi' => 'Dispositif d\'alerte ; analyse de données et loi de Benford.',
			),
			array(
				'titre'      => 'Investiguer',
				'matin'      => 'Planification de l\'enquête ; collecte et conservation des preuves.',
				'apres_midi' => 'Entretiens ; rapport et suites judiciaires.',
			),
		),
		'livrables'        => 'Cartographie des risques de fraude
Protocole d\'investigation et modèle de rapport',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Détournements, fausses factures, conflits d\'intérêts : la fraude interne touche toutes les organisations. Ce séminaire de 3 jours apprend à prévenir, détecter et investiguer la fraude, avec les techniques de l\'audit forensique. Chaque participant repart avec une cartographie des risques de fraude et un protocole d\'investigation.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas réels, exercices d\'analyse de données sur Excel, simulation d\'entretien d\'investigation.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les schémas de fraude courants (achats, paie, trésorerie, stocks)</li>
<li>Élaborer une cartographie des risques de fraude et un dispositif d\'alerte</li>
<li>Utiliser des tests analytiques sur Excel pour repérer les anomalies</li>
<li>Mener des entretiens d\'investigation et rédiger un rapport exploitable</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à repérer et investiguer la fraude ; techniques d\'analyse de données ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Pertes liées à la fraude réduites ; dispositif de prévention dissuasif ; réactivité accrue face aux incidents.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-tresorerie',
		'titre'            => 'Gestion de trésorerie',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un plan de trésorerie prévisionnel opérationnel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Trésoriers, DAF, comptables, responsables administratifs et financiers, dirigeants de PME',
		'prerequis'        => 'Notions de comptabilité et de finance ; pratique d\'Excel.',
		'objectifs'        => 'Établir des prévisions de trésorerie à court et moyen terme
Piloter la trésorerie au quotidien et optimiser le BFR
Choisir les financements et placements à court terme adaptés
Négocier les conditions bancaires et maîtriser les risques',
		'jours'            => array(
			array(
				'titre'      => 'Prévoir',
				'matin'      => 'Lien résultat-trésorerie ; budget et plan de trésorerie.',
				'apres_midi' => 'Prévisions glissantes ; scénarios.',
			),
			array(
				'titre'      => 'Piloter et optimiser',
				'matin'      => 'Position quotidienne, dates de valeur ; optimisation du BFR.',
				'apres_midi' => 'Recouvrement ; équilibrage des comptes bancaires.',
			),
			array(
				'titre'      => 'Financer et négocier',
				'matin'      => 'Crédits à court terme, escompte, affacturage ; placements.',
				'apres_midi' => 'Conditions bancaires ; gestion des risques.',
			),
		),
		'livrables'        => 'Plan de trésorerie prévisionnel sous Excel
Grille de contrôle des conditions bancaires',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La trésorerie est le nerf de l\'entreprise : une société rentable peut défaillir faute de liquidités. Ce séminaire de 3 jours apprend à prévoir, piloter et optimiser la trésorerie, et à négocier avec les banques. Chaque participant repart avec un plan de trésorerie prévisionnel opérationnel.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Construire un plan de trésorerie mensuel et une prévision glissante</li>
<li>Réaliser une position de trésorerie quotidienne en dates de valeur</li>
<li>Agir sur les délais clients, fournisseurs et stocks pour réduire le BFR</li>
<li>Comparer les offres de crédit à court terme et contrôler les conditions bancaires</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils de prévision et de pilotage de la trésorerie ; modèle prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Tensions de trésorerie anticipées ; frais financiers réduits ; meilleure relation avec les banques.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-excel-avance-pour-les-finances-et-power-bi-pour-le-pilotage',
		'titre'            => 'Excel avancé pour les finances et Power BI pour le pilotage',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un modèle financier automatisé et un tableau de bord publié.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, contrôleurs de gestion, analystes financiers, DAF, trésoriers',
		'prerequis'        => 'Pratique courante d\'Excel (formules simples, mise en forme, filtres).',
		'objectifs'        => 'Maîtriser les fonctions avancées d\'Excel utiles aux travaux financiers
Automatiser la préparation des données avec Power Query
Construire des modèles financiers fiables et lisibles
Concevoir un tableau de bord financier dans Power BI',
		'jours'            => array(
			array(
				'titre'      => 'Excel avancé',
				'matin'      => 'Fonctions de recherche et conditionnelles ; tableaux structurés.',
				'apres_midi' => 'Tableaux croisés dynamiques ; fonctions financières.',
			),
			array(
				'titre'      => 'Automatiser et modéliser',
				'matin'      => 'Power Query sur extractions comptables ; modèle budgétaire.',
				'apres_midi' => 'Scénarios et valeur cible ; contrôles de cohérence.',
			),
			array(
				'titre'      => 'Piloter avec Power BI',
				'matin'      => 'Modèle de données ; mesures DAX de base.',
				'apres_midi' => 'Visuels financiers ; publication et partage du tableau de bord.',
			),
		),
		'livrables'        => 'Modèle financier automatisé sous Excel
Tableau de bord financier Power BI',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Power Query',
			'Power BI',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les fonctions financières passent une grande partie de leur temps à retraiter des données. Ce séminaire de 3 jours apprend à automatiser les travaux financiers sur Excel puis à construire des tableaux de bord de pilotage dans Power BI. Chaque participant repart avec un modèle financier automatisé et un tableau de bord publié.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur poste avec des données financières réelles anonymisées, exercices progressifs, projet de tableau de bord.</p>
<h3>Compétences développées</h3>
<ul>
<li>Utiliser RECHERCHEX, SOMME.SI.ENS, tableaux croisés dynamiques et fonctions financières</li>
<li>Importer et nettoyer des extractions comptables avec Power Query</li>
<li>Bâtir un modèle budgétaire et des scénarios avec les outils de simulation</li>
<li>Créer des mesures DAX simples et publier un tableau de bord financier</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gains de temps importants sur les travaux récurrents ; autonomie sur Excel avancé et Power BI ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Reporting financier plus rapide et plus fiable ; erreurs de saisie réduites ; pilotage en temps réel.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-consolidation-des-comptes',
		'titre'            => 'Consolidation des comptes',
		'domaine'          => 'Comptabilité, contrôle & audit',
		'hero'             => 'Repartez avec un dossier de consolidation type.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables consolidation, chefs comptables, DAF de groupes, auditeurs',
		'prerequis'        => 'Bonne maîtrise de la comptabilité générale et des états financiers.',
		'objectifs'        => 'Maîtriser le cadre réglementaire de la consolidation en zone OHADA
Déterminer le périmètre et les méthodes de consolidation
Réaliser les retraitements et éliminations intragroupe
Établir les états financiers consolidés et leurs notes annexes',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et périmètre',
				'matin'      => 'Obligations de consolidation selon l\'Acte uniforme ; contrôle exclusif, conjoint, influence notable.',
				'apres_midi' => 'Périmètre.',
			),
			array(
				'titre'      => 'Retraitements et éliminations',
				'matin'      => 'Homogénéisation des comptes ; opérations intragroupe.',
				'apres_midi' => 'Conversion des comptes en devises.',
			),
			array(
				'titre'      => 'États consolidés',
				'matin'      => 'Écarts d\'acquisition ; partage des capitaux propres.',
				'apres_midi' => 'États consolidés et annexes ; cas de synthèse.',
			),
		),
		'livrables'        => 'Dossier de consolidation type sous Excel
Check-list des retraitements de consolidation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les groupes doivent présenter des comptes consolidés fiables à leurs actionnaires, bailleurs et autorités. Ce séminaire de 3 jours présente les règles de consolidation du SYSCOHADA révisé et la démarche pratique, du périmètre aux états consolidés. Chaque participant repart avec un dossier de consolidation type.</p>
<p>Pédagogie active avec 70 % de pratique : exercices d\'application sur des cas d\'entreprises de l\'espace OHADA, travaux sur Excel, études de cas en sous-groupes et corrigés commentés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Calculer les pourcentages de contrôle et d\'intérêts</li>
<li>Appliquer l\'intégration globale, l\'intégration proportionnelle et la mise en équivalence</li>
<li>Traiter les écarts d\'acquisition et le partage des capitaux propres</li>
<li>Produire un bilan et un compte de résultat consolidés</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à conduire une consolidation complète ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Comptes consolidés fiables et produits dans les délais ; meilleure vision de la performance du groupe ; conformité réglementaire.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fiscalite-des-entreprises-is-tva-retenues-a-la-source',
		'titre'            => 'Fiscalité des entreprises : IS, TVA, retenues à la source',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec un calendrier fiscal et des outils de calcul.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, fiscalistes, DAF, responsables administratifs et financiers, dirigeants de PME',
		'prerequis'        => 'Notions de comptabilité générale.',
		'objectifs'        => 'Maîtriser les règles de détermination du résultat fiscal et de l\'IS
Appliquer le régime de la TVA : champ, taux, déductions, remboursements
Identifier et appliquer les retenues à la source
Respecter les obligations déclaratives et les échéances',
		'jours'            => array(
			array(
				'titre'      => 'Impôt sur les sociétés',
				'matin'      => 'Champ d\'application ; résultat fiscal, charges déductibles et réintégrations.',
				'apres_midi' => 'Minimum fiscal ; acomptes et liquidation.',
			),
			array(
				'titre'      => 'TVA',
				'matin'      => 'Opérations imposables et exonérées ; taux ; fait générateur.',
				'apres_midi' => 'Droit à déduction ; crédits et remboursements ; déclaration.',
			),
			array(
				'titre'      => 'Retenues à la source et obligations',
				'matin'      => 'Retenues sur salaires, prestations, revenus de capitaux ; calendrier fiscal.',
				'apres_midi' => 'Télédéclaration ; pénalités.',
			),
		),
		'livrables'        => 'Calendrier des obligations fiscales
Tableau de passage du résultat comptable au résultat fiscal',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Impôt sur les sociétés, TVA et retenues à la source représentent l\'essentiel des obligations fiscales d\'une entreprise. Ce séminaire de 3 jours fait maîtriser leurs règles d\'assiette, de calcul, de déclaration et de paiement selon le Code général des impôts du Sénégal. Chaque participant repart avec un calendrier fiscal et des outils de calcul.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Passer du résultat comptable au résultat fiscal (réintégrations, déductions)</li>
<li>Calculer l\'IS, le minimum fiscal et les acomptes</li>
<li>Établir une déclaration de TVA et gérer les crédits de TVA</li>
<li>Calculer et déclarer les retenues sur salaires, prestations et revenus de capitaux</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des principaux impôts de l\'entreprise ; outils de calcul prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Déclarations fiables et dans les délais ; pénalités et redressements évités ; charge fiscale mieux maîtrisée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fiscalite-des-personnes-impot-sur-le-revenu-et-fiscalite',
		'titre'            => 'Fiscalité des personnes (impôt sur le revenu) et fiscalité salariale',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec un simulateur de calcul de l\'IR.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de paie, comptables, responsables RH, fiscalistes, professions libérales',
		'prerequis'        => 'Notions de paie ou de comptabilité.',
		'objectifs'        => 'Comprendre le champ et les catégories de revenus imposables à l\'IR
Calculer l\'impôt sur le revenu et la retenue sur salaires
Traiter fiscalement les primes, indemnités et avantages en nature
Respecter les obligations déclaratives de l\'employeur et du contribuable',
		'jours'            => array(
			array(
				'titre'      => 'Principes de l\'IR',
				'matin'      => 'Personnes imposables, domicile fiscal ; catégories de revenus.',
				'apres_midi' => 'Revenu global et charges déductibles.',
			),
			array(
				'titre'      => 'Calcul de l\'impôt',
				'matin'      => 'Barème, quotient familial, réductions ; TRIMF.',
				'apres_midi' => 'Revenus fonciers et de capitaux mobiliers.',
			),
			array(
				'titre'      => 'Fiscalité salariale',
				'matin'      => 'Traitement des primes, indemnités et avantages ; retenue à la source.',
				'apres_midi' => 'Régularisation ; déclarations de l\'employeur.',
			),
		),
		'livrables'        => 'Simulateur de calcul de l\'IR sous Excel
Fiche de traitement fiscal des éléments de rémunération',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La fiscalité des salaires et des revenus personnels concerne à la fois l\'employeur et chaque contribuable. Ce séminaire de 3 jours couvre l\'impôt sur le revenu des personnes physiques, la retenue sur salaires et le traitement fiscal des avantages. Chaque participant repart avec un simulateur de calcul de l\'IR.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Déterminer le revenu net imposable par catégorie</li>
<li>Appliquer le barème, le quotient familial et les réductions</li>
<li>Calculer la retenue mensuelle et la régularisation annuelle</li>
<li>Établir les déclarations annuelles des salaires</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à calculer et contrôler l\'impôt sur les revenus ; outil de simulation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Retenues sur salaires exactes ; risque de redressement réduit ; information fiable donnée aux salariés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-procedures-de-controle-fiscal-et-gestion-des-contentieux',
		'titre'            => 'Procédures de contrôle fiscal et gestion des contentieux',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec une check-list de préparation au contrôle et des modèles de réponse.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DAF, fiscalistes, comptables, juristes d\'entreprise, conseillers fiscaux',
		'prerequis'        => 'Bonne connaissance de la fiscalité des entreprises.',
		'objectifs'        => 'Connaître les différentes formes de contrôle fiscal et leurs garanties
Préparer l\'entreprise à un contrôle et en gérer le déroulement
Répondre à une notification de redressement
Mener une réclamation et un recours contentieux',
		'jours'            => array(
			array(
				'titre'      => 'Cadre du contrôle',
				'matin'      => 'Droit de communication, contrôle sur pièces, vérification de comptabilité.',
				'apres_midi' => 'Garanties et prescription.',
			),
			array(
				'titre'      => 'Déroulement et redressement',
				'matin'      => 'Préparation ; conduite des échanges avec le vérificateur.',
				'apres_midi' => 'Notification ; réponse et procédure contradictoire.',
			),
			array(
				'titre'      => 'Contentieux',
				'matin'      => 'Réclamation, recours gracieux, commission paritaire, recours juridictionnel ; sursis de paiement.',
				'apres_midi' => 'Cas pratiques.',
			),
		),
		'livrables'        => 'Check-list de préparation au contrôle fiscal
Modèles de réponse à notification et de réclamation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un contrôle fiscal bien préparé et bien conduit limite fortement les redressements. Ce séminaire de 3 jours présente les droits et obligations du contribuable, le déroulement des contrôles et les voies de recours. Chaque participant repart avec une check-list de préparation au contrôle et des modèles de réponse.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les droits du contribuable et les délais de prescription</li>
<li>Constituer un dossier de contrôle complet et organisé</li>
<li>Rédiger une réponse argumentée à une notification de redressement</li>
<li>Engager une procédure de réclamation, de recours gracieux ou juridictionnel</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Assurance face au contrôle fiscal ; maîtrise des procédures de recours ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Redressements et pénalités limités ; droits de l\'entreprise mieux défendus ; relations apaisées avec l\'administration.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-optimisation-fiscale-et-planification',
		'titre'            => 'Optimisation fiscale et planification',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec une grille d\'opportunités fiscales pour votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DAF, fiscalistes, experts-comptables, dirigeants, conseillers juridiques',
		'prerequis'        => 'Bonne connaissance de la fiscalité des entreprises.',
		'objectifs'        => 'Distinguer optimisation légale, évasion et fraude fiscale
Identifier les leviers d\'optimisation dans les choix de gestion
Mobiliser les régimes incitatifs (Code des investissements, zones économiques spéciales)
Construire une planification fiscale pluriannuelle',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et limites',
				'matin'      => 'Optimisation, évasion, fraude ; abus de droit.',
				'apres_midi' => 'Principes de sécurité juridique et rescrit.',
			),
			array(
				'titre'      => 'Leviers de gestion',
				'matin'      => 'Choix de structure et de financement ; amortissements et provisions.',
				'apres_midi' => 'Déficits ; rémunération des dirigeants.',
			),
			array(
				'titre'      => 'Régimes incitatifs et planification',
				'matin'      => 'Code des investissements, zones économiques spéciales, conventions.',
				'apres_midi' => 'Planification fiscale pluriannuelle.',
			),
		),
		'livrables'        => 'Grille d\'opportunités fiscales
Modèle de planification fiscale pluriannuelle',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une gestion fiscale anticipée permet de réduire légalement la charge fiscale tout en sécurisant l\'entreprise. Ce séminaire de 3 jours présente les leviers d\'optimisation offerts par la législation sénégalaise, les régimes incitatifs et les limites de l\'abus de droit. Chaque participant repart avec une grille d\'opportunités fiscales pour sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser l\'impact fiscal des choix de structure, de financement et de rémunération</li>
<li>Utiliser les amortissements, provisions et reports déficitaires à bon escient</li>
<li>Monter un dossier d\'agrément à un régime incitatif</li>
<li>Évaluer le risque d\'abus de droit d\'un schéma d\'optimisation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision stratégique de la fiscalité ; capacité à proposer des optimisations sécurisées ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Charge fiscale réduite dans le respect de la loi ; décisions d\'investissement mieux éclairées ; risques fiscaux maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fiscalite-internationale-et-prix-de-transfert',
		'titre'            => 'Fiscalité internationale et prix de transfert',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec une trame de documentation des prix de transfert.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Fiscalistes, DAF de groupes et de filiales, auditeurs, conseillers fiscaux',
		'prerequis'        => 'Bonne connaissance de la fiscalité des entreprises.',
		'objectifs'        => 'Comprendre les principes de la fiscalité internationale et des conventions fiscales
Appliquer la fiscalité des paiements vers l\'étranger
Maîtriser le principe de pleine concurrence et les méthodes de prix de transfert
Préparer la documentation exigée par l\'administration fiscale',
		'jours'            => array(
			array(
				'titre'      => 'Principes',
				'matin'      => 'Résidence, établissement stable, double imposition ; conventions fiscales du Sénégal.',
				'apres_midi' => 'Modèle OCDE et UEMOA.',
			),
			array(
				'titre'      => 'Paiements transfrontaliers',
				'matin'      => 'Redevances, intérêts, dividendes, prestations de services ; retenues.',
				'apres_midi' => 'Crédits d\'impôt.',
			),
			array(
				'titre'      => 'Prix de transfert',
				'matin'      => 'Principe de pleine concurrence ; méthodes OCDE.',
				'apres_midi' => 'Documentation ; contrôle et ajustements.',
			),
		),
		'livrables'        => 'Trame de documentation des prix de transfert
Tableau des retenues sur paiements à l\'étranger',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les opérations transfrontalières et les transactions entre sociétés d\'un même groupe sont au cœur des contrôles fiscaux. Ce séminaire de 3 jours couvre les conventions fiscales, la retenue sur les paiements à l\'étranger et la réglementation des prix de transfert. Chaque participant repart avec une trame de documentation des prix de transfert.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Déterminer la résidence fiscale et l\'existence d\'un établissement stable</li>
<li>Appliquer les conventions fiscales et les retenues à la source sur les paiements à l\'étranger</li>
<li>Choisir et justifier une méthode de prix de transfert</li>
<li>Rédiger le fichier principal et le fichier local de documentation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des règles fiscales internationales ; capacité à documenter les prix de transfert ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Risques de redressement sur les opérations intragroupe réduits ; double imposition évitée ; conformité documentaire.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fiscalite-locale-et-douaniere',
		'titre'            => 'Fiscalité locale et douanière',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec un outil de calcul des droits et taxes.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, fiscalistes, transitaires, responsables achats et logistique, DAF',
		'prerequis'        => 'Notions de fiscalité des entreprises.',
		'objectifs'        => 'Maîtriser les impôts et taxes locales applicables aux entreprises
Comprendre la valeur en douane, l\'origine et l\'espèce tarifaire
Calculer les droits et taxes à l\'importation selon le TEC CEDEAO
Utiliser les régimes douaniers suspensifs et économiques',
		'jours'            => array(
			array(
				'titre'      => 'Fiscalité locale',
				'matin'      => 'Contribution économique locale, contribution foncière des propriétés bâties et non bâties, taxes communales.',
				'apres_midi' => '',
			),
			array(
				'titre'      => 'Fondamentaux douaniers',
				'matin'      => 'Code des douanes ; espèce, origine, valeur.',
				'apres_midi' => 'TEC CEDEAO ; règles d\'origine et préférences.',
			),
			array(
				'titre'      => 'Liquidation et régimes',
				'matin'      => 'Calcul des droits et taxes ; régimes suspensifs et économiques.',
				'apres_midi' => 'Contentieux douanier.',
			),
		),
		'livrables'        => 'Outil Excel de liquidation des droits et taxes
Fiche des taxes locales',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Contribution économique locale, taxes foncières et droits de douane pèsent directement sur les coûts. Ce séminaire de 3 jours fait le point sur la fiscalité locale sénégalaise et sur les règles douanières applicables aux importations et exportations. Chaque participant repart avec un outil de calcul des droits et taxes.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Calculer la contribution économique locale et la contribution foncière</li>
<li>Déterminer la valeur en douane et le classement tarifaire d\'une marchandise</li>
<li>Liquider les droits et taxes d\'une importation</li>
<li>Choisir le régime douanier adapté (entrepôt, admission temporaire, perfectionnement)</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la fiscalité locale et douanière ; outil de calcul prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts d\'importation mieux anticipés ; régimes avantageux mobilisés ; litiges douaniers et fiscaux évités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fiscalite-des-secteurs-specifiques-mines-petrole-et-gaz-ong',
		'titre'            => 'Fiscalité des secteurs spécifiques (mines, pétrole et gaz, ONG, banques)',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec une fiche de synthèse du régime de votre secteur.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Fiscalistes et comptables des secteurs extractif, bancaire et associatif, DAF, gestionnaires de projets',
		'prerequis'        => 'Bonne connaissance de la fiscalité des entreprises.',
		'objectifs'        => 'Connaître les régimes fiscaux du Code minier et du Code pétrolier
Maîtriser le régime fiscal des ONG et des projets financés par les bailleurs
Identifier les spécificités fiscales des banques et établissements financiers
Repérer les risques fiscaux propres à chaque secteur',
		'jours'            => array(
			array(
				'titre'      => 'Mines, pétrole et gaz',
				'matin'      => 'Codes minier et pétrolier ; conventions et contrats.',
				'apres_midi' => 'Redevances, impôts, stabilité fiscale ; contenu local.',
			),
			array(
				'titre'      => 'ONG et projets',
				'matin'      => 'Statut fiscal des ONG ; accords de siège.',
				'apres_midi' => 'Exonérations sur financements extérieurs ; obligations déclaratives.',
			),
			array(
				'titre'      => 'Banques et finance',
				'matin'      => 'Taxe sur les opérations bancaires ; fiscalité des produits financiers.',
				'apres_midi' => 'Provisions bancaires ; risques spécifiques.',
			),
		),
		'livrables'        => 'Fiches de synthèse des régimes sectoriels
Check-list des dossiers d\'exonération',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Certains secteurs relèvent de régimes fiscaux dérogatoires : codes minier et pétrolier, statut des ONG, fiscalité bancaire. Ce séminaire de 3 jours présente leurs particularités et les points de vigilance. Chaque participant repart avec une fiche de synthèse du régime de son secteur.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Calculer redevances, impôts et partage de production dans les contrats extractifs</li>
<li>Appliquer les exonérations des ONG et des marchés sur financement extérieur</li>
<li>Traiter la TVA et les taxes spécifiques aux opérations bancaires</li>
<li>Constituer les dossiers d\'exonération et de conformité</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des régimes fiscaux sectoriels ; capacité à sécuriser les exonérations ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Avantages fiscaux sectoriels sécurisés ; risques de redressement réduits ; conformité aux conventions.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-facturation-electronique-et-teledeclaration',
		'titre'            => 'Facturation électronique et télédéclaration',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec un plan de mise en conformité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Comptables, assistants comptables, fiscalistes, DAF, responsables des systèmes d\'information',
		'prerequis'        => 'Notions de fiscalité ; pratique des outils bureautiques et d\'internet.',
		'objectifs'        => 'Comprendre le cadre légal de la facturation électronique et de la télédéclaration
Maîtriser les plateformes de télédéclaration et de télépaiement
Adapter les processus de facturation et l\'archivage
Conduire le projet de mise en conformité',
		'jours'            => array(
			array(
				'titre'      => 'Cadre',
				'matin'      => 'Dispositions légales sur la facture et la facturation électronique ; obligations de télédéclaration.',
				'apres_midi' => 'Calendrier.',
			),
			array(
				'titre'      => 'Plateformes',
				'matin'      => 'Démonstration et exercices sur les plateformes de télédéclaration et télépaiement.',
				'apres_midi' => 'Erreurs fréquentes.',
			),
			array(
				'titre'      => 'Mise en conformité',
				'matin'      => 'Mentions obligatoires, chaîne de facturation, archivage ; impacts sur le système d\'information.',
				'apres_midi' => 'Plan d\'action.',
			),
		),
		'livrables'        => 'Guide pas à pas de la télédéclaration
Plan de mise en conformité',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La dématérialisation des obligations fiscales transforme le travail des services comptables. Ce séminaire de 3 jours prépare à la facturation électronique et à la télédéclaration, dans le cadre du dispositif de l\'administration fiscale sénégalaise. Chaque participant repart avec un plan de mise en conformité.</p>
<p>Pédagogie active avec 70 % de pratique : démonstrations et exercices sur poste, études de cas, construction du plan de mise en conformité.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer et gérer un espace sur la plateforme de télédéclaration</li>
<li>Établir et transmettre les principales déclarations en ligne</li>
<li>Vérifier la conformité des factures et organiser leur archivage électronique</li>
<li>Établir un plan de mise en conformité avec les acteurs concernés</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur les déclarations en ligne ; maîtrise des exigences de facturation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Obligations dématérialisées respectées ; temps de traitement réduit ; pénalités de retard évitées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-actualites-et-nouvelles-dispositions-des-lois-de-finances',
		'titre'            => 'Actualités et nouvelles dispositions des lois de finances',
		'domaine'          => 'Fiscalité',
		'hero'             => 'Repartez avec une synthèse commentée des mesures et un plan d\'adaptation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DAF, fiscalistes, comptables, experts-comptables, conseillers fiscaux, juristes',
		'prerequis'        => 'Bonne connaissance de la fiscalité sénégalaise.',
		'objectifs'        => 'Connaître les nouvelles dispositions de la loi de finances de l\'année
Mesurer leurs impacts sur la charge fiscale et les obligations de l\'entreprise
Mettre à jour les procédures, paramétrages et déclarations
Anticiper les évolutions et échanger avec les praticiens',
		'jours'            => array(
			array(
				'titre'      => 'Fiscalité des entreprises',
				'matin'      => 'Nouveautés en matière d\'IS, de TVA, de retenues et d\'incitations.',
				'apres_midi' => 'Impacts chiffrés.',
			),
			array(
				'titre'      => 'Fiscalité des personnes et taxes diverses',
				'matin'      => 'Nouveautés en matière d\'IR, d\'enregistrement, de taxes spécifiques et de fiscalité locale.',
				'apres_midi' => '',
			),
			array(
				'titre'      => 'Procédures et douane',
				'matin'      => 'Évolutions des procédures et du contentieux ; mesures douanières.',
				'apres_midi' => 'Plan d\'adaptation de l\'entreprise.',
			),
		),
		'livrables'        => 'Synthèse commentée des nouvelles mesures
Modèle de note d\'information à la direction',
		'evaluation'       => 'Quiz final et étude de cas. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Chaque loi de finances modifie des taux, des seuils et des obligations qui ont un impact direct sur les entreprises. Ce séminaire de 3 jours analyse les nouvelles dispositions fiscales et douanières de l\'année et leurs conséquences pratiques. Chaque participant repart avec une synthèse commentée des mesures et un plan d\'adaptation.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code général des impôts du Sénégal, exercices de calcul et de déclaration, études de cas d\'entreprises et échanges sur les situations des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser une mesure fiscale nouvelle et son entrée en vigueur</li>
<li>Chiffrer l\'impact des changements sur les comptes de l\'entreprise</li>
<li>Mettre à jour le calendrier fiscal et les outils de calcul</li>
<li>Rédiger une note d\'information à la direction</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Connaissances fiscales à jour ; capacité à chiffrer les impacts des réformes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Adaptation rapide aux réformes ; erreurs liées aux nouvelles règles évitées ; opportunités fiscales saisies.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-reglementation-des-marches-publics-code-et-decrets-en',
		'titre'            => 'Réglementation des marchés publics (code et décrets en vigueur)',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec une synthèse des règles applicables et des seuils.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Personnes responsables des marchés, membres des cellules et commissions de passation, juristes, gestionnaires de projets, entreprises soumissionnaires',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Connaître le cadre juridique des marchés publics au Sénégal et les directives UEMOA
Identifier les acteurs et organes de la commande publique et leurs rôles
Maîtriser les principes, seuils et procédures de passation
Connaître les voies de recours et le régime des sanctions',
		'jours'            => array(
			array(
				'titre'      => 'Cadre juridique et institutionnel',
				'matin'      => 'Directives UEMOA ; Code des marchés publics.',
				'apres_midi' => 'Champ d\'application ; organes de contrôle et de régulation.',
			),
			array(
				'titre'      => 'Principes et procédures',
				'matin'      => 'Liberté d\'accès, égalité, transparence ; seuils.',
				'apres_midi' => 'Planification et publicité ; modes de passation.',
			),
			array(
				'titre'      => 'Recours et sanctions',
				'matin'      => 'Recours gracieux et devant l\'organe de régulation ; contentieux.',
				'apres_midi' => 'Sanctions des agents et des candidats.',
			),
		),
		'livrables'        => 'Synthèse des règles, seuils et délais
Cartographie des acteurs de la commande publique',
		'evaluation'       => 'Quiz final et étude de cas. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La commande publique obéit à des règles strictes dont la méconnaissance expose à l\'annulation des procédures et à des sanctions. Ce séminaire de 3 jours présente le cadre juridique et institutionnel des marchés publics au Sénégal et dans l\'espace UEMOA. Chaque participant repart avec une synthèse des règles applicables et des seuils.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Déterminer la procédure applicable à un besoin selon sa nature et son montant</li>
<li>Situer les rôles de l\'autorité contractante, de la cellule de passation, de la DCMP et de l\'organe de régulation</li>
<li>Appliquer les règles de publicité, de délais et de transparence</li>
<li>Traiter un recours précontentieux et contentieux</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise du cadre réglementaire de la commande publique ; repères pratiques sur les seuils et délais ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Procédures sécurisées et conformes ; risques d\'annulation et de sanctions réduits ; meilleure gouvernance des achats publics.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-preparation-des-dossiers-d-appel-d-offres-dao-et-redaction',
		'titre'            => 'Préparation des dossiers d\'appel d\'offres (DAO) et rédaction des cahiers des charges',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec un DAO type complété.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cellules de passation, services techniques prescripteurs, gestionnaires de projets, acheteurs publics',
		'prerequis'        => 'Connaissance de base de la réglementation des marchés publics.',
		'objectifs'        => 'Définir et estimer le besoin de manière précise
Rédiger des spécifications techniques et des termes de référence clairs
Constituer un DAO conforme aux dossiers types
Fixer des critères de qualification et d\'évaluation pertinents',
		'jours'            => array(
			array(
				'titre'      => 'Définir le besoin',
				'matin'      => 'Expression et estimation du besoin ; allotissement.',
				'apres_midi' => 'Plan de passation ; étude de marché.',
			),
			array(
				'titre'      => 'Rédiger les spécifications',
				'matin'      => 'Spécifications techniques, termes de référence, cahier des clauses ; erreurs fréquentes.',
				'apres_midi' => 'Atelier de rédaction.',
			),
			array(
				'titre'      => 'Constituer le DAO',
				'matin'      => 'Dossiers types ; données particulières.',
				'apres_midi' => 'Critères de qualification et d\'évaluation ; revue par la DCMP.',
			),
		),
		'livrables'        => 'DAO type complété
Check-list de contrôle qualité d\'un DAO',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La qualité du dossier d\'appel d\'offres conditionne la qualité des offres reçues et la réussite du marché. Ce séminaire de 3 jours apprend à définir le besoin, à rédiger les spécifications techniques et à constituer un DAO conforme aux modèles officiels. Chaque participant repart avec un DAO type complété.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une étude de marché et une estimation du coût du marché</li>
<li>Rédiger un cahier des clauses techniques et des termes de référence</li>
<li>Compléter les différentes sections d\'un DAO type (instructions, données particulières, formulaires)</li>
<li>Définir des critères de qualification objectifs et non discriminatoires</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à produire des DAO complets et conformes ; modèles réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Dossiers validés plus rapidement ; appels d\'offres moins souvent infructueux ; offres de meilleure qualité.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-modes-de-passation-appel-d-offres-ouvert-ou-restreint-gre-a',
		'titre'            => 'Modes de passation : appel d\'offres ouvert ou restreint, gré à gré, consultation',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec un arbre de décision des procédures.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Personnes responsables des marchés, cellules et commissions de passation, gestionnaires de projets',
		'prerequis'        => 'Connaissance de base de la réglementation des marchés publics.',
		'objectifs'        => 'Connaître les différents modes de passation et leurs conditions de recours
Conduire chaque procédure dans le respect des délais et formalités
Justifier le recours aux procédures dérogatoires
Prévenir les irrégularités les plus fréquentes',
		'jours'            => array(
			array(
				'titre'      => 'Appels d\'offres',
				'matin'      => 'Appel d\'offres ouvert, restreint, avec préqualification, en deux étapes.',
				'apres_midi' => 'Délais et publicité.',
			),
			array(
				'titre'      => 'Procédures simplifiées et dérogatoires',
				'matin'      => 'Demande de renseignements et de prix ; entente directe.',
				'apres_midi' => 'Conditions et autorisations.',
			),
			array(
				'titre'      => 'Prestations intellectuelles et pratique',
				'matin'      => 'Sélection des consultants ; manifestations d\'intérêt.',
				'apres_midi' => 'Arbre de décision ; cas d\'irrégularités.',
			),
		),
		'livrables'        => 'Arbre de décision des modes de passation
Modèles de demande d\'autorisation et de procès-verbaux',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Choisir le bon mode de passation est la première garantie de régularité d\'un marché. Ce séminaire de 3 jours présente chaque procédure, ses conditions de recours et son déroulement, de l\'appel d\'offres ouvert à l\'entente directe. Chaque participant repart avec un arbre de décision des procédures.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir la procédure adaptée selon la nature, le montant et l\'urgence du besoin</li>
<li>Organiser un appel d\'offres ouvert, restreint ou en deux étapes</li>
<li>Monter un dossier de demande d\'autorisation d\'entente directe</li>
<li>Conduire une demande de renseignements et de prix ou une consultation de consultants</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Choix des procédures maîtrisé et justifié ; repères pratiques par procédure ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Procédures régulières et défendables ; délais de passation raccourcis ; recours et annulations évités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-evaluation-des-offres-analyse-technique-et-financiere',
		'titre'            => 'Évaluation des offres : analyse technique et financière, commissions de dépouillement',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec des grilles d\'évaluation et des modèles de rapports.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Membres des commissions des marchés, cellules de passation, experts techniques, gestionnaires de projets',
		'prerequis'        => 'Connaissance de base de la réglementation des marchés publics.',
		'objectifs'        => 'Organiser l\'ouverture des plis et le fonctionnement de la commission
Conduire l\'examen de conformité, l\'évaluation technique et financière
Détecter les offres anormalement basses et les irrégularités
Rédiger un rapport d\'évaluation et une proposition d\'attribution motivés',
		'jours'            => array(
			array(
				'titre'      => 'Ouverture des plis',
				'matin'      => 'Composition et règles de la commission ; déroulement de la séance.',
				'apres_midi' => 'Procès-verbal ; confidentialité.',
			),
			array(
				'titre'      => 'Évaluation',
				'matin'      => 'Conformité administrative ; qualification.',
				'apres_midi' => 'Évaluation technique notée ; évaluation financière et corrections.',
			),
			array(
				'titre'      => 'Attribution',
				'matin'      => 'Offres anormalement basses ; rapport d\'évaluation.',
				'apres_midi' => 'Publication des résultats ; gestion des contestations.',
			),
		),
		'livrables'        => 'Grilles d\'évaluation technique et financière
Modèles de procès-verbal et de rapport d\'évaluation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'évaluation des offres est l\'étape la plus exposée aux contestations. Ce séminaire de 3 jours apprend à organiser l\'ouverture des plis, à conduire l\'évaluation technique et financière et à rédiger des rapports d\'attribution solides. Chaque participant repart avec des grilles d\'évaluation et des modèles de rapports.</p>
<p>Pédagogie active avec 70 % de pratique : simulation complète d\'une commission sur un dossier réel anonymisé, exercices d\'évaluation, rédaction de rapport.</p>
<h3>Compétences développées</h3>
<ul>
<li>Tenir une séance d\'ouverture et en dresser le procès-verbal</li>
<li>Appliquer une grille d\'évaluation technique avec notation</li>
<li>Corriger les erreurs arithmétiques et comparer les offres financières</li>
<li>Rédiger un rapport d\'évaluation conforme et défendable</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Évaluations rigoureuses et argumentées ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Attributions incontestables ; recours réduits ; meilleur rapport qualité-prix des marchés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-procedures-des-bailleurs-de-fonds-banque-mondiale-bad-afd',
		'titre'            => 'Procédures des bailleurs de fonds : Banque mondiale, BAD, AFD, Union européenne',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec un tableau comparatif des procédures.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Spécialistes en passation de marchés des projets, coordonnateurs de projets, cellules d\'exécution, consultants',
		'prerequis'        => 'Connaissance des marchés publics nationaux.',
		'objectifs'        => 'Connaître les cadres de passation des principaux bailleurs
Articuler les règles des bailleurs avec la réglementation nationale
Préparer un plan de passation et utiliser les outils de suivi des bailleurs
Gérer les revues préalables et a posteriori',
		'jours'            => array(
			array(
				'titre'      => 'Banque mondiale',
				'matin'      => 'Cadre de passation ; stratégie de passation ; méthodes et seuils.',
				'apres_midi' => 'Outil de suivi en ligne ; revues.',
			),
			array(
				'titre'      => 'BAD et AFD',
				'matin'      => 'Politique et méthodologie de passation de la BAD ; directives de l\'AFD.',
				'apres_midi' => 'Avis de non-objection.',
			),
			array(
				'titre'      => 'Union européenne et synthèse',
				'matin'      => 'Guide pratique des procédures contractuelles de l\'UE ; tableau comparatif.',
				'apres_midi' => 'Cas pratiques.',
			),
		),
		'livrables'        => 'Tableau comparatif des procédures des bailleurs
Modèle de plan de passation des marchés',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les projets financés par les partenaires techniques et financiers appliquent leurs propres règles de passation. Ce séminaire de 3 jours compare les cadres de la Banque mondiale, de la BAD, de l\'AFD et de l\'Union européenne et leurs exigences d\'examen. Chaque participant repart avec un tableau comparatif des procédures.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Appliquer le cadre de passation de la Banque mondiale et son système de suivi en ligne</li>
<li>Appliquer les règles de la BAD, de l\'AFD et de l\'Union européenne</li>
<li>Élaborer un plan de passation des marchés conforme</li>
<li>Préparer les demandes d\'avis de non-objection</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des procédures des principaux bailleurs ; outils comparatifs ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décaissements accélérés ; non-objections obtenues plus vite ; dépenses inéligibles évitées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-redaction-et-reponse-a-un-appel-d-offres-cote',
		'titre'            => 'Rédaction et réponse à un appel d\'offres (côté soumissionnaire)',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec une check-list de soumission et un mémoire technique type.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants et cadres d\'entreprises soumissionnaires, chargés d\'appels d\'offres, commerciaux, bureaux d\'études',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Analyser un DAO et décider de soumissionner
Constituer un dossier administratif complet et conforme
Rédiger une offre technique convaincante
Construire une offre financière compétitive et cohérente',
		'jours'            => array(
			array(
				'titre'      => 'Analyser et décider',
				'matin'      => 'Veille sur les avis ; lecture du DAO.',
				'apres_midi' => 'Décision go / no go ; groupement et sous-traitance.',
			),
			array(
				'titre'      => 'Dossier administratif et technique',
				'matin'      => 'Pièces administratives, garanties.',
				'apres_midi' => 'Mémoire technique, méthodologie, CV et références.',
			),
			array(
				'titre'      => 'Offre financière et dépôt',
				'matin'      => 'Décomposition des prix ; cohérence ; erreurs éliminatoires.',
				'apres_midi' => 'Dépôt ; suivi et recours du soumissionnaire.',
			),
		),
		'livrables'        => 'Check-list de soumission
Trame de mémoire technique',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Répondre à un appel d\'offres est un exercice exigeant où une erreur de forme peut éliminer une bonne offre. Ce séminaire de 3 jours donne aux entreprises la méthode pour analyser un DAO, décider de soumissionner et construire une offre conforme et compétitive. Chaque participant repart avec une check-list de soumission et un mémoire technique type.</p>
<p>Pédagogie active avec 70 % de pratique : analyse de DAO réels, ateliers de rédaction d\'offres, revue croisée des dossiers.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les critères éliminatoires et les points de vigilance d\'un DAO</li>
<li>Rassembler les pièces administratives et les garanties exigées</li>
<li>Rédiger un mémoire technique structuré selon les critères d\'évaluation</li>
<li>Établir un bordereau des prix et un devis estimatif sans erreur</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Offres mieux construites et conformes ; méthode de réponse réutilisable ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Taux de succès aux appels d\'offres amélioré ; éliminations pour vice de forme évitées ; accès élargi à la commande publique.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-execution-suivi-et-controle-des-marches-avenants-receptions',
		'titre'            => 'Exécution, suivi et contrôle des marchés : avenants, réceptions, pénalités',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec un tableau de suivi d\'exécution des marchés.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de marchés, services techniques, maîtres d\'ouvrage, comptables publics, chefs de projet',
		'prerequis'        => 'Connaissance de base de la réglementation des marchés publics.',
		'objectifs'        => 'Maîtriser les règles d\'exécution technique et financière des marchés
Gérer les modifications du marché par avenant
Organiser les réceptions et le contrôle des prestations
Appliquer les pénalités et gérer les garanties',
		'jours'            => array(
			array(
				'titre'      => 'Démarrage et suivi',
				'matin'      => 'Notification, garanties, ordres de service ; suivi technique et financier.',
				'apres_midi' => 'Tableau de bord.',
			),
			array(
				'titre'      => 'Modifications',
				'matin'      => 'Avenants et leurs limites ; travaux supplémentaires.',
				'apres_midi' => 'Révision des prix ; suspension et résiliation.',
			),
			array(
				'titre'      => 'Réceptions et paiement',
				'matin'      => 'Réceptions provisoire et définitive ; décomptes ; retenues de garantie.',
				'apres_midi' => 'Pénalités ; clôture.',
			),
		),
		'livrables'        => 'Tableau de suivi d\'exécution des marchés
Modèles d\'ordre de service, d\'avenant et de procès-verbal de réception',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La réussite d\'un marché se joue aussi pendant son exécution. Ce séminaire de 3 jours couvre la gestion contractuelle : ordres de service, avenants, suivi des délais, réceptions, paiements et pénalités. Chaque participant repart avec un tableau de suivi d\'exécution des marchés.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Émettre des ordres de service et suivre les délais contractuels</li>
<li>Préparer un avenant conforme aux plafonds réglementaires</li>
<li>Conduire une réception provisoire et définitive</li>
<li>Calculer les révisions de prix, retenues et pénalités de retard</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gestion contractuelle maîtrisée ; outils de suivi prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Délais et coûts des marchés mieux tenus ; litiges réduits ; deniers publics protégés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-des-contrats-et-des-litiges',
		'titre'            => 'Gestion des contrats et des litiges',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec une méthode de traitement des réclamations.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de marchés, juristes, chefs de projet, maîtres d\'ouvrage, entreprises titulaires',
		'prerequis'        => 'Connaissance de l\'exécution des marchés.',
		'objectifs'        => 'Identifier les sources fréquentes de différends contractuels
Mettre en place une gestion documentaire et contractuelle préventive
Traiter une réclamation de titulaire
Choisir le mode de règlement adapté (amiable, conciliation, arbitrage, juge)',
		'jours'            => array(
			array(
				'titre'      => 'Prévenir',
				'matin'      => 'Sources de litiges ; clauses sensibles.',
				'apres_midi' => 'Gestion documentaire ; correspondances contractuelles.',
			),
			array(
				'titre'      => 'Traiter les réclamations',
				'matin'      => 'Analyse juridique et financière ; mémoire en réclamation.',
				'apres_midi' => 'Négociation et transaction.',
			),
			array(
				'titre'      => 'Régler les différends',
				'matin'      => 'Conciliation, organe de régulation, arbitrage, juridictions.',
				'apres_midi' => 'Cas pratiques.',
			),
		),
		'livrables'        => 'Méthode de traitement des réclamations
Modèles de courriers contractuels',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Retards, désaccords sur les quantités ou les prix : les litiges contractuels sont fréquents et coûteux. Ce séminaire de 3 jours apprend à prévenir les différends par une gestion contractuelle rigoureuse et à les régler à l\'amiable ou devant les instances compétentes. Chaque participant repart avec une méthode de traitement des réclamations.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Tenir un registre contractuel et un dossier de preuve complet</li>
<li>Analyser une réclamation et chiffrer son bien-fondé</li>
<li>Conduire une négociation de règlement amiable</li>
<li>Préparer un dossier pour une instance de règlement des différends</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à prévenir et régler les différends ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Litiges réduits et réglés plus vite ; coûts contentieux maîtrisés ; relations apaisées avec les titulaires.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-passation-de-marches-dematerialisee',
		'titre'            => 'Passation de marchés dématérialisée',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec un guide d\'utilisation pas à pas.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cellules de passation, acheteurs publics, entreprises soumissionnaires, responsables informatiques',
		'prerequis'        => 'Pratique des outils bureautiques et d\'internet.',
		'objectifs'        => 'Comprendre le cadre juridique de la commande publique dématérialisée
Utiliser une plateforme de passation électronique
Sécuriser les dépôts, ouvertures et échanges électroniques
Organiser l\'archivage et la traçabilité des procédures',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et enjeux',
				'matin'      => 'Textes sur la dématérialisation ; plateformes nationales et des bailleurs.',
				'apres_midi' => 'Bénéfices et risques.',
			),
			array(
				'titre'      => 'Côté acheteur',
				'matin'      => 'Publication, questions-réponses, ouverture électronique, évaluation en ligne.',
				'apres_midi' => 'Exercices pratiques.',
			),
			array(
				'titre'      => 'Côté soumissionnaire et archivage',
				'matin'      => 'Inscription, dépôt, signature électronique ; sécurité.',
				'apres_midi' => 'Archivage et traçabilité.',
			),
		),
		'livrables'        => 'Guide d\'utilisation pas à pas
Check-list de sécurité des dépôts électroniques',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La dématérialisation des procédures renforce la transparence et accélère la passation. Ce séminaire de 3 jours prépare les acheteurs et les entreprises à l\'usage des plateformes de passation en ligne : publication, dépôt et ouverture électroniques, signature et archivage. Chaque participant repart avec un guide d\'utilisation pas à pas.</p>
<p>Pédagogie active avec 70 % de pratique : démonstrations et exercices sur plateforme, études de cas, travaux pratiques.</p>
<h3>Compétences développées</h3>
<ul>
<li>Publier un avis et un DAO sur une plateforme en ligne</li>
<li>Déposer une offre électronique et gérer la signature électronique</li>
<li>Conduire une ouverture des plis électronique</li>
<li>Archiver et retrouver les pièces d\'une procédure dématérialisée</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur les procédures en ligne ; maîtrise des exigences de sécurité ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Procédures plus rapides et transparentes ; erreurs de dépôt réduites ; traçabilité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-ethique-transparence-et-lutte-contre-la-corruption-dans-les',
		'titre'            => 'Éthique, transparence et lutte contre la corruption dans les marchés',
		'domaine'          => 'Marchés publics & appels d’offres',
		'hero'             => 'Repartez avec une cartographie des risques et une charte éthique.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Acteurs de la commande publique, auditeurs, inspecteurs, responsables conformité, entreprises soumissionnaires',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Connaître le cadre légal de la lutte contre la corruption au Sénégal et dans l\'UEMOA
Identifier les risques de corruption et de collusion à chaque étape d\'un marché
Prévenir et gérer les conflits d\'intérêts
Mettre en place des dispositifs de transparence et d\'alerte',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et enjeux',
				'matin'      => 'Textes nationaux et communautaires ; OFNAC.',
				'apres_midi' => 'Sanctions ; coûts de la corruption.',
			),
			array(
				'titre'      => 'Risques par étape',
				'matin'      => 'Planification, DAO, évaluation, exécution : schémas de corruption et de collusion.',
				'apres_midi' => 'Signaux d\'alerte.',
			),
			array(
				'titre'      => 'Prévention',
				'matin'      => 'Conflits d\'intérêts ; transparence et publication.',
				'apres_midi' => 'Charte éthique ; dispositifs d\'alerte et contrôle.',
			),
		),
		'livrables'        => 'Cartographie des risques de corruption
Modèle de charte éthique et de déclaration d\'intérêts',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La commande publique est l\'un des domaines les plus exposés aux risques de corruption et de conflits d\'intérêts. Ce séminaire de 3 jours apprend à identifier ces risques à chaque étape et à mettre en place des dispositifs de prévention et de contrôle. Chaque participant repart avec une cartographie des risques et une charte éthique.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code des marchés publics en vigueur et les procédures des bailleurs, études de dossiers réels anonymisés, exercices de rédaction et simulations de commissions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Repérer les signaux d\'alerte de fraude et d\'entente entre soumissionnaires</li>
<li>Établir une cartographie des risques de corruption de la chaîne achat</li>
<li>Rédiger et faire signer des déclarations d\'intérêts</li>
<li>Concevoir une charte éthique et un dispositif de signalement</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vigilance éthique renforcée ; outils de prévention prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Intégrité des procédures renforcée ; risques juridiques et réputationnels réduits ; confiance des bailleurs et des citoyens.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-elaboration-d-un-business-plan-etude-de-marche-plan',
		'titre'            => 'Élaboration d\'un business plan : étude de marché, plan financier, stratégie',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec le business plan avancé de votre propre projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Porteurs de projet, entrepreneurs, dirigeants de PME, chargés d\'affaires, conseillers en création d\'entreprise',
		'prerequis'        => 'Avoir un projet ou une idée d\'activité ; pratique d\'Excel.',
		'objectifs'        => 'Structurer un business plan selon les attentes des financeurs
Réaliser une étude de marché et définir un positionnement
Élaborer la stratégie commerciale et le modèle économique
Construire des prévisions financières cohérentes sur 3 à 5 ans',
		'jours'            => array(
			array(
				'titre'      => 'Projet et marché',
				'matin'      => 'Structure d\'un business plan ; étude de marché, concurrence, clientèle.',
				'apres_midi' => 'Positionnement ; Business Model Canvas.',
			),
			array(
				'titre'      => 'Stratégie et organisation',
				'matin'      => 'Stratégie marketing et commerciale ; plan d\'actions.',
				'apres_midi' => 'Organisation, moyens humains et matériels ; risques.',
			),
			array(
				'titre'      => 'Plan financier',
				'matin'      => 'Investissements, besoins de financement, compte de résultat, trésorerie prévisionnels.',
				'apres_midi' => 'Résumé opérationnel.',
			),
		),
		'livrables'        => 'Business plan avancé de son projet
Modèle financier prévisionnel sous Excel',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un business plan solide convainc banquiers, investisseurs et partenaires, et sert de feuille de route au porteur de projet. Ce séminaire de 3 jours fait construire pas à pas un business plan complet : marché, stratégie, organisation et prévisions financières. Chaque participant repart avec le business plan avancé de son propre projet.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser le marché, la concurrence et la clientèle cible</li>
<li>Formaliser le modèle économique avec le Business Model Canvas</li>
<li>Bâtir compte de résultat, plan de financement et plan de trésorerie prévisionnels</li>
<li>Rédiger un résumé opérationnel percutant</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Business plan structuré et chiffré ; méthode réutilisable pour tout nouveau projet ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets mieux préparés et plus finançables ; décisions d\'investissement mieux fondées ; culture entrepreneuriale renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-montage-de-projets-et-recherche-de-financement',
		'titre'            => 'Montage de projets et recherche de financement',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec un plan de recherche de financement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Porteurs de projet, entrepreneurs, responsables de PME, ONG et associations, chargés de mobilisation de ressources',
		'prerequis'        => 'Avoir un projet à financer.',
		'objectifs'        => 'Identifier les sources de financement adaptées à chaque type de projet
Monter un dossier de financement complet et convaincant
Répondre à un appel à projets de bailleur
Négocier avec les financeurs',
		'jours'            => array(
			array(
				'titre'      => 'Panorama des financements',
				'matin'      => 'Financement bancaire, garanties, fonds publics, microfinance, capital-investissement, subventions de bailleurs.',
				'apres_midi' => '',
			),
			array(
				'titre'      => 'Monter le dossier',
				'matin'      => 'Note conceptuelle, cadre logique, budget ; dossier bancaire.',
				'apres_midi' => 'Réponse à un appel à projets.',
			),
			array(
				'titre'      => 'Convaincre et négocier',
				'matin'      => 'Attentes des financeurs ; présentation orale.',
				'apres_midi' => 'Négociation des conditions ; plan de recherche de financement.',
			),
		),
		'livrables'        => 'Plan de recherche de financement
Modèle de note conceptuelle et de budget',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Trouver le bon financement suppose de connaître les acteurs et de présenter un dossier adapté à chacun. Ce séminaire de 3 jours présente les sources de financement disponibles au Sénégal (banques, fonds publics, bailleurs, investisseurs) et la méthode pour monter un dossier convaincant. Chaque participant repart avec un plan de recherche de financement.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les financeurs : banques, DER/FJ, FONGIP, FONSIS, bailleurs, fonds d\'investissement</li>
<li>Rédiger une note conceptuelle et un dossier de demande de financement</li>
<li>Construire un budget de projet conforme aux exigences d\'un bailleur</li>
<li>Préparer un entretien de négociation avec un banquier ou un investisseur</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Connaissance des financeurs et de leurs attentes ; dossier de financement amorcé ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Accès au financement facilité ; dossiers de meilleure qualité ; ressources mobilisées plus rapidement.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-evaluation-financiere-de-projets-van-tri-seuil-de',
		'titre'            => 'Évaluation financière de projets : VAN, TRI, seuil de rentabilité',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec un modèle Excel d\'évaluation de projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Analystes financiers, chargés d\'investissement, contrôleurs de gestion, chefs de projet, chargés d\'affaires',
		'prerequis'        => 'Notions de comptabilité et de finance ; pratique d\'Excel.',
		'objectifs'        => 'Construire les flux de trésorerie prévisionnels d\'un projet
Calculer et interpréter les critères de rentabilité (VAN, TRI, délai de récupération)
Déterminer le seuil de rentabilité et le point mort
Analyser les risques par la sensibilité et les scénarios',
		'jours'            => array(
			array(
				'titre'      => 'Flux du projet',
				'matin'      => 'Investissement, BFR, flux d\'exploitation, valeur résiduelle ; fiscalité.',
				'apres_midi' => 'Tableau des flux.',
			),
			array(
				'titre'      => 'Critères de choix',
				'matin'      => 'Actualisation, VAN, TRI, indice de profitabilité, délai de récupération.',
				'apres_midi' => 'Seuil de rentabilité.',
			),
			array(
				'titre'      => 'Risque et décision',
				'matin'      => 'Sensibilité, scénarios, simulation ; comparaison de projets.',
				'apres_midi' => 'Note de recommandation.',
			),
		),
		'livrables'        => 'Modèle Excel d\'évaluation de projet
Trame de note de recommandation d\'investissement',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Investir sans évaluer la rentabilité, c\'est prendre un risque inutile. Ce séminaire de 3 jours apprend à évaluer un projet d\'investissement avec les outils de référence : flux de trésorerie, VAN, TRI, délai de récupération et analyse de sensibilité. Chaque participant repart avec un modèle Excel d\'évaluation de projet.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Estimer investissements, BFR et flux d\'exploitation</li>
<li>Choisir un taux d\'actualisation et calculer VAN et TRI sur Excel</li>
<li>Calculer le seuil de rentabilité en volume et en valeur</li>
<li>Réaliser une analyse de sensibilité et comparer plusieurs projets</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils d\'évaluation d\'investissement ; modèle réutilisable ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Investissements mieux sélectionnés ; risques financiers anticipés ; dossiers d\'investissement plus solides.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-entrepreneuriat-et-creation-d-entreprise',
		'titre'            => 'Entrepreneuriat et création d\'entreprise',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec la feuille de route de lancement de votre entreprise.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Porteurs de projet, jeunes diplômés, femmes entrepreneures, salariés en reconversion, artisans',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Évaluer et valider une idée d\'entreprise
Construire un modèle économique viable
Choisir la forme juridique et réaliser les démarches de création au Sénégal
Organiser la gestion des premiers mois d\'activité',
		'jours'            => array(
			array(
				'titre'      => 'De l\'idée au projet',
				'matin'      => 'Profil entrepreneurial ; génération et validation d\'idées.',
				'apres_midi' => 'Étude de marché simplifiée ; proposition de valeur.',
			),
			array(
				'titre'      => 'Modèle et création',
				'matin'      => 'Business Model Canvas ; formes juridiques OHADA.',
				'apres_midi' => 'Formalités de création ; régimes fiscaux.',
			),
			array(
				'titre'      => 'Démarrer et gérer',
				'matin'      => 'Premiers clients ; tarification ; trésorerie et facturation.',
				'apres_midi' => 'Accompagnement et financement ; feuille de route.',
			),
		),
		'livrables'        => 'Feuille de route de lancement
Business Model Canvas de son projet',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Créer son entreprise demande méthode et connaissance des démarches. Ce séminaire de 3 jours accompagne le passage de l\'idée au projet : validation de l\'idée, modèle économique, choix juridique, démarches de création et premiers pas de gestion. Chaque participant repart avec la feuille de route de lancement de son entreprise.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Tester une idée auprès de clients potentiels</li>
<li>Formaliser son modèle économique et sa proposition de valeur</li>
<li>Comparer les formes juridiques OHADA et accomplir les formalités auprès de l\'APIX</li>
<li>Mettre en place une gestion simple : facturation, trésorerie, obligations fiscales</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Projet clarifié et démarches maîtrisées ; outils de gestion de base ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Création d\'activités viables ; esprit d\'initiative développé ; intrapreneuriat encouragé.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-pitch-et-presentation-aux-investisseurs',
		'titre'            => 'Pitch et présentation aux investisseurs',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec votre pitch finalisé et testé devant un jury.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Entrepreneurs, fondateurs de startups, porteurs de projet, responsables de levée de fonds',
		'prerequis'        => 'Avoir un projet d\'entreprise et ses principaux chiffres.',
		'objectifs'        => 'Comprendre les attentes et les critères de décision des investisseurs
Construire un pitch deck clair et percutant
Présenter son projet à l\'oral avec impact
Répondre aux objections et préparer la négociation',
		'jours'            => array(
			array(
				'titre'      => 'Les attentes des investisseurs',
				'matin'      => 'Types d\'investisseurs ; critères de décision.',
				'apres_midi' => 'Structure d\'un pitch deck ; exemples commentés.',
			),
			array(
				'titre'      => 'Construire son pitch',
				'matin'      => 'Problème, solution, marché, modèle, traction, équipe, besoins ; storytelling.',
				'apres_midi' => 'Design des diapositives.',
			),
			array(
				'titre'      => 'Convaincre',
				'matin'      => 'Prise de parole, posture, gestion du trac ; questions difficiles.',
				'apres_midi' => 'Pitch final devant un jury.',
			),
		),
		'livrables'        => 'Pitch deck finalisé
Liste de questions-réponses investisseurs',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Quelques minutes suffisent à un investisseur pour décider de poursuivre ou non la discussion. Ce séminaire de 3 jours apprend à construire un pitch deck convaincant, à le présenter avec impact et à répondre aux questions difficiles. Chaque participant repart avec son pitch finalisé et testé devant un jury.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de construction du pitch, entraînements filmés, pitch final devant un jury.</p>
<h3>Compétences développées</h3>
<ul>
<li>Structurer un pitch en 10 à 12 diapositives</li>
<li>Raconter son projet avec un storytelling convaincant</li>
<li>Maîtriser sa voix, sa posture et son temps de parole</li>
<li>Défendre sa valorisation et ses chiffres clés face aux questions</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Aisance à l\'oral et pitch prêt à l\'emploi ; retours d\'un jury ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Levées de fonds mieux préparées ; image professionnelle renforcée auprès des partenaires.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-fondamentaux-de-la-gestion-de-projet-de-la-planification-au',
		'titre'            => 'Fondamentaux de la gestion de projet, de la planification au suivi',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec la note de cadrage et le planning d\'un de vos projets.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, responsables d\'équipes, chargés de mission, cadres impliqués dans des projets',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre le cycle de vie d\'un projet et les rôles de chacun
Cadrer un projet : objectifs, périmètre, parties prenantes
Planifier les tâches, les ressources et le budget
Suivre l\'avancement et piloter les écarts',
		'jours'            => array(
			array(
				'titre'      => 'Cadrer',
				'matin'      => 'Notions clés ; cycle de vie ; parties prenantes.',
				'apres_midi' => 'Objectifs SMART ; note de cadrage.',
			),
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Organigramme des tâches ; estimation des durées.',
				'apres_midi' => 'Gantt, PERT, chemin critique ; budget.',
			),
			array(
				'titre'      => 'Piloter et clôturer',
				'matin'      => 'Suivi de l\'avancement ; indicateurs ; gestion des écarts et des changements.',
				'apres_midi' => 'Communication ; bilan.',
			),
		),
		'livrables'        => 'Note de cadrage et planning de son projet
Modèles de tableau de bord et de compte rendu de comité',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'MS Project',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Tenir les délais, les coûts et la qualité exige une méthode partagée par toute l\'équipe projet. Ce séminaire de 3 jours présente le cycle de vie d\'un projet et ses outils essentiels : cadrage, découpage, planification, suivi et clôture. Chaque participant repart avec la note de cadrage et le planning d\'un de ses projets.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger une note de cadrage et une charte de projet</li>
<li>Construire un organigramme des tâches et un diagramme de Gantt</li>
<li>Identifier le chemin critique et répartir les ressources</li>
<li>Animer un comité de pilotage et tenir un tableau de bord projet</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de gestion de projet structurée ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets livrés dans les délais et budgets ; meilleure coordination des équipes ; langage commun de gestion de projet.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-preparation-a-la-certification-pmp-pmi',
		'titre'            => 'Préparation à la certification PMP / PMI',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec un plan de révision et des examens blancs.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet expérimentés, PMO, consultants souhaitant obtenir la certification PMP',
		'prerequis'        => 'Expérience de 3 à 5 ans en gestion de projet selon le niveau d\'études (critères du PMI) ; lecture de l\'anglais.',
		'objectifs'        => 'Maîtriser les domaines et tâches du référentiel de l\'examen PMP
Appliquer les approches prédictive, agile et hybride
S\'entraîner sur des questions de type examen
Préparer le dossier de candidature au PMI',
		'jours'            => array(
			array(
				'titre'      => 'Personnes',
				'matin'      => 'Leadership, équipe, parties prenantes, conflits.',
				'apres_midi' => 'Questions d\'entraînement.',
			),
			array(
				'titre'      => 'Processus',
				'matin'      => 'Périmètre, délais, coûts, qualité, risques, approvisionnements ; valeur acquise.',
				'apres_midi' => 'Agile et hybride.',
			),
			array(
				'titre'      => 'Environnement et examen',
				'matin'      => 'Conformité, valeur métier, changement ; stratégie d\'examen.',
				'apres_midi' => 'Examen blanc corrigé.',
			),
		),
		'livrables'        => 'Plan de révision personnalisé
Banque de questions et examens blancs',
		'evaluation'       => 'Examen blanc dans les conditions de la certification. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La certification PMP du PMI est la référence mondiale en management de projet. Ce séminaire de 3 jours prépare à l\'examen en couvrant les trois domaines du référentiel (personnes, processus, environnement), les approches prédictives et agiles, et la méthode de l\'examen. Chaque participant repart avec un plan de révision et des examens blancs.</p>
<p>Pédagogie active avec 70 % de pratique : apports ciblés, questions d\'entraînement chronométrées, examens blancs corrigés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser une situation de projet selon l\'état d\'esprit attendu par le PMI</li>
<li>Utiliser les outils clés : valeur acquise, chemin critique, gestion des risques</li>
<li>Répondre à des questions situationnelles dans le temps imparti</li>
<li>Constituer son dossier d\'éligibilité (expérience et heures de formation)</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Préparation structurée à l\'examen PMP ; entraînement sur questions type ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Chefs de projet certifiés selon un standard international ; pratiques de gestion de projet harmonisées ; crédibilité accrue auprès des clients et bailleurs.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-methodes-agiles-scrum-kanban',
		'titre'            => 'Méthodes agiles (Scrum, Kanban)',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec un tableau Kanban et un backlog pour un projet réel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, product owners, équipes projet, managers, responsables de la transformation',
		'prerequis'        => 'Expérience de travail en projet.',
		'objectifs'        => 'Comprendre les valeurs et principes de l\'agilité
Mettre en œuvre le cadre Scrum : rôles, événements, artefacts
Piloter un flux de travail avec Kanban
Adapter l\'agilité à son contexte d\'organisation',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux',
				'matin'      => 'Manifeste agile ; comparaison avec l\'approche prédictive.',
				'apres_midi' => 'Panorama des méthodes.',
			),
			array(
				'titre'      => 'Scrum',
				'matin'      => 'Rôles, événements et artefacts ; user stories et estimation.',
				'apres_midi' => 'Simulation de sprints.',
			),
			array(
				'titre'      => 'Kanban et déploiement',
				'matin'      => 'Tableau, limites de travail en cours, flux ; indicateurs.',
				'apres_midi' => 'Agilité à l\'échelle ; plan d\'adoption.',
			),
		),
		'livrables'        => 'Product backlog et tableau Kanban d\'un projet réel
Guide des cérémonies Scrum',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Trello',
			'Jira',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les méthodes agiles permettent de livrer plus vite de la valeur et de s\'adapter aux changements. Ce séminaire de 3 jours fait pratiquer Scrum et Kanban : rôles, cérémonies, artefacts et outils. Chaque participant repart avec un tableau Kanban et un backlog pour un projet réel.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de simulation agiles, ateliers sur projets réels, mise en pratique sur outils.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger des user stories et prioriser un product backlog</li>
<li>Animer un sprint planning, une mêlée quotidienne, une revue et une rétrospective</li>
<li>Construire un tableau Kanban et limiter le travail en cours</li>
<li>Mesurer la vélocité et le délai de traitement</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Pratique concrète de Scrum et Kanban ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets plus réactifs et livraisons plus fréquentes ; collaboration renforcée ; satisfaction client améliorée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-projet-avec-ms-project',
		'titre'            => 'Gestion de projet avec MS Project',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec le planning complet d\'un projet réel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, planificateurs, PMO, ingénieurs et chargés d\'études',
		'prerequis'        => 'Connaissance des bases de la gestion de projet ; pratique de Windows et d\'Excel.',
		'objectifs'        => 'Paramétrer un projet et son calendrier dans MS Project
Construire un planning avec tâches, durées et dépendances
Affecter les ressources et gérer les coûts
Suivre l\'avancement et produire des rapports',
		'jours'            => array(
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Interface ; calendriers.',
				'apres_midi' => 'Saisie des tâches, durées, jalons, dépendances ; chemin critique.',
			),
			array(
				'titre'      => 'Ressources et coûts',
				'matin'      => 'Création et affectation des ressources ; nivellement.',
				'apres_midi' => 'Coûts ; planification de référence.',
			),
			array(
				'titre'      => 'Suivre et communiquer',
				'matin'      => 'Mise à jour de l\'avancement ; écarts.',
				'apres_midi' => 'Valeur acquise ; rapports, filtres, impression.',
			),
		),
		'livrables'        => 'Planning MS Project d\'un projet réel
Modèle de rapport d\'avancement',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'MS Project',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>MS Project est l\'outil de référence pour planifier et suivre des projets complexes. Ce séminaire de 3 jours fait maîtriser le logiciel, de la création du planning au suivi des coûts et à l\'édition des rapports. Chaque participant repart avec le planning complet d\'un projet réel.</p>
<p>Pédagogie active avec 70 % de pratique : exercices progressifs sur poste, cas fil rouge, travail sur un projet du participant.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer l\'organigramme des tâches et les liens de dépendance</li>
<li>Identifier le chemin critique et résoudre les surcharges de ressources</li>
<li>Enregistrer une planification de référence et suivre les écarts</li>
<li>Éditer des rapports et des tableaux de bord pour le comité de pilotage</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise opérationnelle de MS Project ; planning prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Plannings fiables et partagés ; dérives détectées plus tôt ; reporting projet professionnalisé.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-cadre-logique-gestion-axee-sur-les-resultats-gar-et-suivi',
		'titre'            => 'Cadre logique, gestion axée sur les résultats (GAR) et suivi-évaluation',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec le cadre logique et le plan de suivi d\'un projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, chargés de suivi-évaluation, personnel des ONG et administrations, consultants',
		'prerequis'        => 'Expérience en gestion de projet ou de programme.',
		'objectifs'        => 'Maîtriser les principes de la gestion axée sur les résultats
Concevoir un projet avec l\'arbre à problèmes et le cadre logique
Formuler des indicateurs pertinents et leurs sources de vérification
Élaborer un plan de suivi-évaluation',
		'jours'            => array(
			array(
				'titre'      => 'GAR et analyse',
				'matin'      => 'Principes de la GAR ; chaîne de résultats.',
				'apres_midi' => 'Parties prenantes ; arbres à problèmes et à objectifs.',
			),
			array(
				'titre'      => 'Cadre logique',
				'matin'      => 'Logique d\'intervention ; hypothèses.',
				'apres_midi' => 'Indicateurs et sources de vérification ; matrice complète.',
			),
			array(
				'titre'      => 'Suivi-évaluation',
				'matin'      => 'Plan de suivi ; collecte des données.',
				'apres_midi' => 'Rapports de résultats ; évaluations à mi-parcours et finale.',
			),
		),
		'livrables'        => 'Cadre logique d\'un projet
Plan de suivi-évaluation',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les partenaires techniques et financiers exigent des projets orientés résultats et mesurables. Ce séminaire de 3 jours apprend à concevoir un projet avec le cadre logique, à appliquer la GAR et à mettre en place le suivi-évaluation associé. Chaque participant repart avec le cadre logique et le plan de suivi d\'un projet.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une analyse des parties prenantes, l\'arbre à problèmes et l\'arbre à objectifs</li>
<li>Construire une matrice de cadre logique cohérente</li>
<li>Rédiger des indicateurs SMART avec situation de référence et cibles</li>
<li>Bâtir un plan de suivi-évaluation et un rapport de résultats</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à concevoir et suivre un projet orienté résultats ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets mieux conçus et plus finançables ; résultats démontrés aux bailleurs ; redevabilité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-des-risques-projet',
		'titre'            => 'Gestion des risques projet',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec le registre des risques d\'un de vos projets.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, PMO, responsables qualité, gestionnaires de programmes',
		'prerequis'        => 'Connaissance des bases de la gestion de projet.',
		'objectifs'        => 'Comprendre le processus de gestion des risques projet
Identifier les risques avec des techniques adaptées
Évaluer et hiérarchiser les risques
Définir des réponses et surveiller les risques',
		'jours'            => array(
			array(
				'titre'      => 'Identifier',
				'matin'      => 'Notions de risque et d\'opportunité ; processus.',
				'apres_midi' => 'Techniques d\'identification ; structure de découpage des risques.',
			),
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Analyse qualitative ; matrice probabilité-impact.',
				'apres_midi' => 'Analyse quantitative et réserves pour aléas.',
			),
			array(
				'titre'      => 'Traiter et surveiller',
				'matin'      => 'Stratégies de réponse ; plans d\'action.',
				'apres_midi' => 'Registre des risques ; revues et communication.',
			),
		),
		'livrables'        => 'Registre des risques de son projet
Matrice de criticité type',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La plupart des projets qui échouent ont ignoré des risques identifiables. Ce séminaire de 3 jours apprend à identifier, analyser, traiter et surveiller les risques tout au long du projet. Chaque participant repart avec le registre des risques d\'un de ses projets.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Animer un atelier d\'identification des risques</li>
<li>Évaluer probabilité et impact et construire une matrice de criticité</li>
<li>Choisir une stratégie de réponse (éviter, transférer, atténuer, accepter)</li>
<li>Tenir et mettre à jour un registre des risques</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de gestion des risques maîtrisée ; registre prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets moins exposés aux mauvaises surprises ; délais et budgets mieux tenus ; décisions plus éclairées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-projets-de-developpement-ong-bailleurs-de-fonds',
		'titre'            => 'Gestion de projets de développement (ONG, bailleurs de fonds)',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec les outils de gestion d\'un projet financé.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Coordonnateurs et chefs de projets, personnel des ONG, cellules d\'exécution, chargés de programmes',
		'prerequis'        => 'Expérience dans un projet ou une ONG.',
		'objectifs'        => 'Maîtriser le cycle de projet des bailleurs
Planifier et mettre en œuvre un projet de développement
Respecter les exigences contractuelles et de rapportage des bailleurs
Impliquer les parties prenantes et les communautés',
		'jours'            => array(
			array(
				'titre'      => 'Cycle de projet',
				'matin'      => 'Programmation, identification, formulation, financement, mise en œuvre, évaluation.',
				'apres_midi' => 'Conventions de financement.',
			),
			array(
				'titre'      => 'Mise en œuvre',
				'matin'      => 'Plan de travail annuel ; budget ; gestion des partenaires.',
				'apres_midi' => 'Achats ; gestion des équipes.',
			),
			array(
				'titre'      => 'Rapportage et clôture',
				'matin'      => 'Rapports narratifs et financiers ; audits.',
				'apres_midi' => 'Participation communautaire ; clôture et capitalisation.',
			),
		),
		'livrables'        => 'Modèles de plan de travail annuel et de rapport
Check-list de conformité aux exigences des bailleurs',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les projets de développement combinent exigences des bailleurs, gestion d\'équipes et relation avec les communautés. Ce séminaire de 3 jours couvre le cycle de projet du point de vue des ONG et des projets financés : conception, mise en œuvre, rapportage et clôture. Chaque participant repart avec les outils de gestion d\'un projet financé.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Élaborer un plan de travail annuel et un budget</li>
<li>Gérer les achats, les ressources humaines et les partenaires de mise en œuvre</li>
<li>Rédiger des rapports narratifs et financiers conformes</li>
<li>Conduire la clôture et la capitalisation du projet</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la gestion des projets financés ; outils conformes aux exigences des bailleurs ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets exécutés dans les règles et dans les délais ; relations solides avec les bailleurs ; renouvellement des financements facilité.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-budgetaire-et-financiere-de-projet',
		'titre'            => 'Gestion budgétaire et financière de projet',
		'domaine'          => 'Business plan & gestion de projet',
		'hero'             => 'Repartez avec un outil de suivi budgétaire de projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables administratifs et financiers de projets, comptables de projets, coordonnateurs, gestionnaires d\'ONG',
		'prerequis'        => 'Notions de comptabilité ; pratique d\'Excel.',
		'objectifs'        => 'Élaborer un budget de projet détaillé et justifié
Suivre l\'exécution budgétaire et analyser les écarts
Appliquer les procédures de décaissement et de justification des bailleurs
Préparer les rapports financiers et les audits de projet',
		'jours'            => array(
			array(
				'titre'      => 'Budgétiser',
				'matin'      => 'Principes budgétaires ; budget par activité et par bailleur.',
				'apres_midi' => 'Coûts directs et indirects ; justification.',
			),
			array(
				'titre'      => 'Exécuter et suivre',
				'matin'      => 'Engagements, décaissements, comptes désignés ; suivi budgétaire.',
				'apres_midi' => 'Écarts et réallocations.',
			),
			array(
				'titre'      => 'Rendre compte',
				'matin'      => 'Rapports financiers ; éligibilité des dépenses.',
				'apres_midi' => 'Préparation de l\'audit ; manuel de procédures.',
			),
		),
		'livrables'        => 'Outil Excel de suivi budgétaire de projet
Check-list de préparation à l\'audit',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une gestion financière rigoureuse est la condition de la confiance des bailleurs et de la réussite du projet. Ce séminaire de 3 jours couvre l\'élaboration du budget, le suivi des dépenses, les procédures de décaissement et la préparation des audits. Chaque participant repart avec un outil de suivi budgétaire de projet.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les projets réels des participants, exercices sur Excel, études de cas, travail en sous-groupes et restitution devant le groupe.</p>
<h3>Compétences développées</h3>
<ul>
<li>Construire un budget par activité et par source de financement</li>
<li>Tenir un suivi budgétaire et calculer les taux d\'exécution</li>
<li>Préparer une demande de retrait de fonds et justifier les dépenses</li>
<li>Établir un rapport financier intermédiaire et répondre aux auditeurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la gestion financière de projet ; outil de suivi prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Dépenses inéligibles évitées ; décaissements fluides ; audits sans réserve.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-supply-chain-et-trading-petrolier',
		'titre'            => 'Supply chain et trading pétrolier',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec une cartographie de la chaîne et des outils d\'analyse des contrats.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Professionnels des sociétés pétrolières et gazières, distributeurs, transitaires, banquiers, administrations du secteur',
		'prerequis'        => 'Connaissance générale du secteur ou de la logistique.',
		'objectifs'        => 'Comprendre la chaîne d\'approvisionnement des produits pétroliers et gaziers
Maîtriser les mécanismes du marché et de la formation des prix
Analyser les contrats de négoce et les Incoterms du secteur
Identifier et couvrir les risques de la chaîne',
		'jours'            => array(
			array(
				'titre'      => 'La chaîne pétrolière',
				'matin'      => 'Amont, aval ; raffinage ; transport maritime et affrètement.',
				'apres_midi' => 'Dépôts et distribution ; acteurs au Sénégal.',
			),
			array(
				'titre'      => 'Le trading',
				'matin'      => 'Marchés physiques et dérivés ; références de prix.',
				'apres_midi' => 'Formation du prix rendu ; contrats de cargaison.',
			),
			array(
				'titre'      => 'Risques et opérations',
				'matin'      => 'Inspection, quantité et qualité ; lettres de crédit.',
				'apres_midi' => 'Couverture des risques ; cas pratique de transaction.',
			),
		),
		'livrables'        => 'Cartographie de la chaîne d\'approvisionnement pétrolière
Grille d\'analyse d\'un contrat de cargaison',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le secteur pétrolier et gazier sénégalais, en plein essor, exige des compétences pointues en approvisionnement et en négoce. Ce séminaire de 3 jours présente la chaîne logistique des produits pétroliers, du brut aux dépôts, et les mécanismes du trading : contrats, prix, risques. Chaque participant repart avec une cartographie de la chaîne et des outils d\'analyse des contrats.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les flux : production, raffinage, transport maritime, stockage, distribution</li>
<li>Lire une cotation et calculer un prix rendu à partir des références internationales</li>
<li>Analyser les clauses clés d\'un contrat de vente de cargaison</li>
<li>Identifier les risques de prix, de change, de qualité et de transport et leurs couvertures</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision complète de la chaîne pétrolière et du négoce ; outils d\'analyse ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Approvisionnements sécurisés et optimisés ; risques de prix et d\'opération mieux maîtrisés ; compétences locales renforcées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-la-gestion-des-moyens-generaux-dans-les-institutions',
		'titre'            => 'La gestion des moyens généraux dans les institutions financières',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un tableau de bord des moyens généraux.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables des moyens généraux, de la logistique et du patrimoine des banques, assurances et institutions de microfinance',
		'prerequis'        => 'Expérience dans une fonction support.',
		'objectifs'        => 'Organiser la fonction moyens généraux et ses processus
Gérer les achats courants et les contrats de prestataires
Piloter le patrimoine immobilier, la maintenance et la sécurité des sites
Maîtriser et réduire les coûts de fonctionnement',
		'jours'            => array(
			array(
				'titre'      => 'Organisation',
				'matin'      => 'Missions et périmètre ; processus.',
				'apres_midi' => 'Contrôle interne spécifique aux institutions financières.',
			),
			array(
				'titre'      => 'Achats et contrats',
				'matin'      => 'Achats courants ; sélection et suivi des prestataires (nettoyage, gardiennage, maintenance).',
				'apres_midi' => 'Niveaux de service.',
			),
			array(
				'titre'      => 'Patrimoine et coûts',
				'matin'      => 'Gestion immobilière ; maintenance ; sécurité des agences.',
				'apres_midi' => 'Continuité d\'activité ; tableau de bord.',
			),
		),
		'livrables'        => 'Tableau de bord des moyens généraux
Modèle de contrat de niveau de service',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les services généraux garantissent le bon fonctionnement quotidien des banques, assurances et institutions de microfinance. Ce séminaire de 3 jours couvre la gestion des achats courants, du patrimoine immobilier, des contrats de services, de la sécurité et des coûts. Chaque participant repart avec un tableau de bord des moyens généraux.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les activités et les processus des services généraux</li>
<li>Rédiger un cahier des charges et suivre un contrat de prestation</li>
<li>Planifier la maintenance préventive des bâtiments et équipements</li>
<li>Construire un tableau de bord des coûts et de la qualité de service</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Pilotage professionnalisé des moyens généraux ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts de fonctionnement réduits ; qualité de service interne améliorée ; risques opérationnels maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-conception-du-tableau-de-bord-logistique',
		'titre'            => 'Conception du tableau de bord logistique',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un tableau de bord logistique sous Excel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables logistiques et supply chain, gestionnaires de stocks et d\'entrepôts, contrôleurs de gestion',
		'prerequis'        => 'Expérience en logistique ; pratique d\'Excel.',
		'objectifs'        => 'Identifier les indicateurs clés de performance logistique
Collecter et fiabiliser les données logistiques
Concevoir un tableau de bord lisible et orienté décision
Animer la performance logistique à partir du tableau de bord',
		'jours'            => array(
			array(
				'titre'      => 'Indicateurs',
				'matin'      => 'Rôle du tableau de bord ; indicateurs de coût, délai, qualité, service.',
				'apres_midi' => 'Benchmark.',
			),
			array(
				'titre'      => 'Données',
				'matin'      => 'Sources et fiabilité des données ; fiches indicateurs.',
				'apres_midi' => 'Automatisation de la collecte.',
			),
			array(
				'titre'      => 'Construction et pilotage',
				'matin'      => 'Tableau de bord sous Excel ; visualisation.',
				'apres_midi' => 'Revues de performance ; plan d\'amélioration.',
			),
		),
		'livrables'        => 'Tableau de bord logistique sous Excel
Fiches indicateurs',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Power BI',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Piloter la logistique sans indicateurs, c\'est avancer sans visibilité. Ce séminaire de 3 jours apprend à choisir les indicateurs logistiques pertinents, à collecter les données et à construire un tableau de bord utile à la décision. Chaque participant repart avec un tableau de bord logistique sous Excel.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Définir des indicateurs de coût, délai, qualité et service (taux de service, rotation, OTIF)</li>
<li>Construire une fiche indicateur avec définition, source, fréquence et cible</li>
<li>Réaliser un tableau de bord dynamique sous Excel</li>
<li>Conduire une revue de performance et un plan d\'amélioration</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à piloter la logistique par les indicateurs ; tableau de bord prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Performance logistique visible et suivie ; dysfonctionnements détectés plus tôt ; coûts réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-la-chaine-d-approvisionnement-des-produits-alimentaires',
		'titre'            => 'La chaîne d\'approvisionnement des produits alimentaires dans la grande distribution',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un diagnostic de votre chaîne d\'approvisionnement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables approvisionnement et logistique de la distribution, chefs de rayon, fournisseurs agroalimentaires',
		'prerequis'        => 'Expérience dans la distribution ou l\'agroalimentaire.',
		'objectifs'        => 'Comprendre l\'organisation de la supply chain de la grande distribution
Maîtriser la gestion des produits frais et de la chaîne du froid
Optimiser les approvisionnements des magasins
Garantir la traçabilité et la sécurité sanitaire des aliments',
		'jours'            => array(
			array(
				'titre'      => 'Organisation',
				'matin'      => 'Modèles logistiques de la grande distribution ; entrepôts, plateformes, livraisons directes.',
				'apres_midi' => 'Relation fournisseurs.',
			),
			array(
				'titre'      => 'Produits frais',
				'matin'      => 'Chaîne du froid ; durées de vie.',
				'apres_midi' => 'Gestion de la démarque ; prévisions et commandes.',
			),
			array(
				'titre'      => 'Sécurité et performance',
				'matin'      => 'Hygiène, HACCP, traçabilité ; retrait-rappel.',
				'apres_midi' => 'Indicateurs ; diagnostic.',
			),
		),
		'livrables'        => 'Diagnostic de sa chaîne d\'approvisionnement
Procédure de traçabilité et de retrait-rappel',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Fraîcheur, délais courts et sécurité sanitaire rendent la logistique alimentaire particulièrement exigeante. Ce séminaire de 3 jours présente l\'organisation de la chaîne d\'approvisionnement de la grande distribution, de la production au rayon. Chaque participant repart avec un diagnostic de sa chaîne d\'approvisionnement.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les flux fournisseurs, entrepôts et magasins</li>
<li>Calculer des commandes en tenant compte des durées de vie et de la démarque</li>
<li>Contrôler le respect de la chaîne du froid et des règles d\'hygiène</li>
<li>Mettre en place une traçabilité et une procédure de retrait-rappel</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des spécificités de la logistique alimentaire ; outils de diagnostic ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Ruptures et pertes réduites ; sécurité sanitaire garantie ; satisfaction client améliorée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-la-gestion-de-stock-de-produits-pharmaceutiques',
		'titre'            => 'La gestion de stock de produits pharmaceutiques',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec des outils de gestion de stock adaptés.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Pharmaciens, gestionnaires de dépôts et de pharmacies hospitalières, logisticiens de santé, responsables de programmes de santé',
		'prerequis'        => 'Expérience dans la gestion de produits de santé.',
		'objectifs'        => 'Appliquer les bonnes pratiques de stockage et de distribution des produits de santé
Quantifier les besoins et planifier les approvisionnements
Prévenir les ruptures, les péremptions et les pertes
Assurer la traçabilité et le suivi des indicateurs',
		'jours'            => array(
			array(
				'titre'      => 'Cadre et bonnes pratiques',
				'matin'      => 'Système d\'approvisionnement pharmaceutique ; bonnes pratiques de stockage et de distribution.',
				'apres_midi' => 'Chaîne du froid.',
			),
			array(
				'titre'      => 'Quantifier et commander',
				'matin'      => 'Méthodes de quantification ; niveaux de stock.',
				'apres_midi' => 'Planification des commandes ; gestion des dons.',
			),
			array(
				'titre'      => 'Suivre et contrôler',
				'matin'      => 'Fiches de stock, inventaires ; péremptions et produits avariés.',
				'apres_midi' => 'Indicateurs ; outils informatisés.',
			),
		),
		'livrables'        => 'Outil Excel de calcul des niveaux de stock
Check-list des bonnes pratiques de stockage',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une rupture de médicament peut mettre des vies en danger, tandis qu\'un surstock conduit à des péremptions coûteuses. Ce séminaire de 3 jours présente les bonnes pratiques de gestion des stocks pharmaceutiques : quantification, stockage, distribution et suivi. Chaque participant repart avec des outils de gestion de stock adaptés.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Calculer la consommation moyenne mensuelle et les stocks minimum et maximum</li>
<li>Organiser un magasin selon les règles de température, de sécurité et de rotation (premier périmé, premier sorti)</li>
<li>Tenir les fiches de stock et réaliser un inventaire</li>
<li>Suivre les indicateurs de disponibilité et de péremption</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gestion rigoureuse des stocks pharmaceutiques ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Disponibilité des médicaments améliorée ; pertes par péremption réduites ; conformité réglementaire assurée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-logistique-portuaire-securite-et-surete-de-la-chaine-de',
		'titre'            => 'Logistique portuaire : sécurité et sûreté de la chaîne de transport',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec une grille d\'évaluation des risques de la chaîne portuaire.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Personnel portuaire, transitaires, manutentionnaires, agents maritimes, chargeurs, agents de sûreté',
		'prerequis'        => 'Expérience dans le transport ou la logistique.',
		'objectifs'        => 'Comprendre l\'organisation et les opérations d\'un port
Maîtriser le cadre de la sûreté portuaire (code ISPS) et de la sécurité des opérations
Évaluer les risques de la chaîne de transport passant par le port
Mettre en place des mesures de prévention et de contrôle',
		'jours'            => array(
			array(
				'titre'      => 'Le port et ses acteurs',
				'matin'      => 'Organisation portuaire ; acteurs.',
				'apres_midi' => 'Flux de marchandises ; Port autonome de Dakar et nouveaux terminaux.',
			),
			array(
				'titre'      => 'Sûreté',
				'matin'      => 'Code ISPS ; évaluation et plans de sûreté.',
				'apres_midi' => 'Contrôles d\'accès ; menaces et fraude.',
			),
			array(
				'titre'      => 'Sécurité des opérations',
				'matin'      => 'Risques de manutention et de stockage ; marchandises dangereuses.',
				'apres_midi' => 'Prévention ; gestion des incidents.',
			),
		),
		'livrables'        => 'Grille d\'évaluation des risques portuaires
Check-list de contrôle des conteneurs',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le port est un maillon critique de la chaîne de transport, exposé à des risques d\'accident, de vol et de malveillance. Ce séminaire de 3 jours présente les règles de sécurité et de sûreté portuaires, dont le code ISPS, et leur application aux opérations. Chaque participant repart avec une grille d\'évaluation des risques de la chaîne portuaire.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les acteurs et les flux d\'un port de commerce</li>
<li>Appliquer les niveaux de sûreté et les plans de sûreté portuaire</li>
<li>Réaliser une évaluation des risques sur une opération de manutention ou de stockage</li>
<li>Contrôler l\'intégrité des conteneurs et la documentation des marchandises</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des règles de sûreté et de sécurité portuaires ; outils d\'évaluation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Incidents et vols réduits ; conformité internationale assurée ; fluidité des opérations portuaires.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-transport-and-distribution',
		'titre'            => 'Transport and distribution',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un outil de calcul du coût de revient transport.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables transport et distribution, logisticiens, gestionnaires de flotte, acheteurs de transport',
		'prerequis'        => 'Expérience en logistique ou en transport.',
		'objectifs'        => 'Choisir les modes et les schémas de transport adaptés
Organiser et optimiser la distribution physique
Sélectionner et piloter les prestataires de transport
Calculer et réduire les coûts de transport',
		'jours'            => array(
			array(
				'titre'      => 'Modes et réseaux',
				'matin'      => 'Modes de transport ; transport multimodal.',
				'apres_midi' => 'Corridors ouest-africains ; schémas de distribution.',
			),
			array(
				'titre'      => 'Organiser la distribution',
				'matin'      => 'Planification des tournées ; chargement.',
				'apres_midi' => 'Documents de transport ; suivi des livraisons.',
			),
			array(
				'titre'      => 'Prestataires et coûts',
				'matin'      => 'Sélection et contrats ; indicateurs.',
				'apres_midi' => 'Coût de revient ; leviers d\'optimisation.',
			),
		),
		'livrables'        => 'Outil Excel de coût de revient transport
Grille d\'évaluation des transporteurs',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le transport représente souvent le premier poste de coût logistique. Ce séminaire de 3 jours apprend à organiser le transport et la distribution des marchandises : choix des modes, planification des tournées, gestion des prestataires et maîtrise des coûts. Chaque participant repart avec un outil de calcul du coût de revient transport.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Comparer route, mer, air et rail selon le coût, le délai et le risque</li>
<li>Planifier des tournées de livraison optimisées</li>
<li>Rédiger un cahier des charges et évaluer un transporteur</li>
<li>Calculer un coût de revient au kilomètre et à la tonne</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de l\'organisation du transport et de ses coûts ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts de transport réduits ; délais de livraison mieux tenus ; prestataires mieux pilotés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-global-scm',
		'titre'            => 'Global SCM',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec une cartographie et un plan d\'amélioration de votre supply chain.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables supply chain, logistique, achats et production, dirigeants de PME industrielles et commerciales',
		'prerequis'        => 'Expérience en logistique, achats ou production.',
		'objectifs'        => 'Comprendre les enjeux et la structure d\'une supply chain globale
Coordonner les flux physiques, d\'information et financiers
Mettre en place une planification intégrée
Piloter la performance et les risques de la supply chain',
		'jours'            => array(
			array(
				'titre'      => 'Vision globale',
				'matin'      => 'Concepts du SCM ; flux.',
				'apres_midi' => 'Modèle SCOR ; cartographie de bout en bout.',
			),
			array(
				'titre'      => 'Planifier et coordonner',
				'matin'      => 'Prévisions, S&OP, gestion des stocks ; collaboration fournisseurs et clients.',
				'apres_midi' => 'Systèmes d\'information.',
			),
			array(
				'titre'      => 'Performance et risques',
				'matin'      => 'Indicateurs ; coût total ; risques et résilience.',
				'apres_midi' => 'Supply chain durable ; plan d\'amélioration.',
			),
		),
		'livrables'        => 'Cartographie de sa supply chain
Plan d\'amélioration priorisé',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La gestion globale de la chaîne logistique (Supply Chain Management) coordonne achats, production, stocks et distribution pour servir le client au meilleur coût. Ce séminaire de 3 jours donne une vision intégrée de la supply chain et de ses leviers de performance. Chaque participant repart avec une cartographie et un plan d\'amélioration de sa supply chain.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier sa supply chain de bout en bout</li>
<li>Appliquer le modèle SCOR pour analyser les processus</li>
<li>Organiser un processus de planification ventes-opérations (S&amp;OP)</li>
<li>Identifier les risques d\'approvisionnement et construire un plan de résilience</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision intégrée de la supply chain ; outils d\'analyse et de planification ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Taux de service amélioré ; stocks et coûts réduits ; meilleure résilience face aux crises.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-introduction-to-logistics',
		'titre'            => 'Introduction to Logistics',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un lexique et une cartographie des flux de votre organisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Nouveaux collaborateurs des services logistiques, assistants, commerciaux, acheteurs, étudiants en reconversion',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre le rôle et les fonctions de la logistique dans l\'entreprise
Connaître les flux, les acteurs et les métiers de la logistique
Découvrir les outils de base : stocks, entrepôt, transport
Identifier les indicateurs essentiels de la performance logistique',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux',
				'matin'      => 'Définitions ; histoire et enjeux.',
				'apres_midi' => 'Fonctions logistiques ; flux physiques et d\'information.',
			),
			array(
				'titre'      => 'Les opérations',
				'matin'      => 'Approvisionnement, réception, stockage, préparation, expédition ; transport.',
				'apres_midi' => 'Documents.',
			),
			array(
				'titre'      => 'Acteurs et performance',
				'matin'      => 'Métiers et prestataires ; indicateurs clés.',
				'apres_midi' => 'Tendances ; cartographie des flux de son organisation.',
			),
		),
		'livrables'        => 'Lexique de la logistique
Cartographie des flux de son organisation',
		'evaluation'       => 'Quiz final et étude de cas. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Ce séminaire d\'initiation de 3 jours donne les bases de la logistique à ceux qui y débutent ou y collaborent : notions clés, fonctions, flux, acteurs et indicateurs. Il permet de comprendre comment la logistique crée de la valeur et de parler le même langage que les équipes. Chaque participant repart avec un lexique et une cartographie des flux de son organisation.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Décrire la chaîne logistique d\'une organisation</li>
<li>Distinguer approvisionnement, stockage, production et distribution</li>
<li>Utiliser le vocabulaire et les documents logistiques courants</li>
<li>Lire les principaux indicateurs logistiques</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Bases solides en logistique ; vocabulaire commun avec les équipes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Collaboration facilitée entre services ; montée en compétence rapide des nouveaux collaborateurs.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-purchase-management',
		'titre'            => 'Purchase management',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec une boîte à outils de l\'acheteur.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Acheteurs, responsables achats, approvisionneurs, gestionnaires de projets, dirigeants de PME',
		'prerequis'        => 'Expérience en achats ou en approvisionnement.',
		'objectifs'        => 'Structurer le processus achat de l\'expression du besoin au paiement
Analyser son portefeuille d\'achats et définir des stratégies
Sélectionner, négocier et contractualiser avec les fournisseurs
Évaluer les fournisseurs et mesurer la performance achat',
		'jours'            => array(
			array(
				'titre'      => 'Processus et stratégie',
				'matin'      => 'Rôle de la fonction achat ; processus.',
				'apres_midi' => 'Analyse du portefeuille ; matrice de Kraljic.',
			),
			array(
				'titre'      => 'Sourcing et négociation',
				'matin'      => 'Cahier des charges ; consultation ; comparaison des offres.',
				'apres_midi' => 'Coût total ; négociation.',
			),
			array(
				'titre'      => 'Contrat et performance',
				'matin'      => 'Clauses clés ; suivi des fournisseurs ; évaluation.',
				'apres_midi' => 'Indicateurs ; éthique des achats.',
			),
		),
		'livrables'        => 'Boîte à outils de l\'acheteur (matrices, grilles, modèles)
Grille d\'évaluation des fournisseurs',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les achats représentent une part majeure des coûts de l\'entreprise et un levier direct de rentabilité. Ce séminaire de 3 jours couvre le processus achat de bout en bout : expression du besoin, sourcing, négociation, contractualisation et évaluation des fournisseurs. Chaque participant repart avec une boîte à outils de l\'acheteur.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une analyse de Pareto et une matrice de Kraljic des achats</li>
<li>Rédiger un cahier des charges et conduire un appel d\'offres privé</li>
<li>Préparer et mener une négociation fournisseur</li>
<li>Construire une grille d\'évaluation fournisseurs et des indicateurs achats</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode achat structurée ; techniques de négociation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts d\'achat réduits ; fournisseurs plus fiables ; risques d\'approvisionnement maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-forecast-and-analysis-techniques',
		'titre'            => 'Forecast and analysis techniques',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un modèle de prévision appliqué à vos propres données.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Planificateurs, approvisionneurs, responsables supply chain, analystes, commerciaux',
		'prerequis'        => 'Pratique d\'Excel ; notions de base en statistiques souhaitées.',
		'objectifs'        => 'Comprendre le rôle des prévisions dans la planification
Analyser l\'historique des ventes : tendance, saisonnalité, aléas
Appliquer les principales méthodes de prévision
Mesurer et améliorer la fiabilité des prévisions',
		'jours'            => array(
			array(
				'titre'      => 'Analyser les données',
				'matin'      => 'Rôle de la prévision ; collecte et nettoyage.',
				'apres_midi' => 'Décomposition tendance-saisonnalité.',
			),
			array(
				'titre'      => 'Méthodes de prévision',
				'matin'      => 'Moyennes mobiles, lissage exponentiel, régression, coefficients saisonniers.',
				'apres_midi' => 'Méthodes qualitatives.',
			),
			array(
				'titre'      => 'Fiabilité et processus',
				'matin'      => 'Mesure de l\'erreur ; choix du modèle.',
				'apres_midi' => 'Processus collaboratif de prévision ; cas sur ses données.',
			),
		),
		'livrables'        => 'Modèle de prévision sous Excel
Tableau de suivi de la fiabilité des prévisions',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>De bonnes prévisions de la demande réduisent à la fois les ruptures et les surstocks. Ce séminaire de 3 jours présente les techniques de prévision quantitatives et qualitatives et leur mise en œuvre sur Excel. Chaque participant repart avec un modèle de prévision appliqué à ses propres données.</p>
<p>Pédagogie active avec 70 % de pratique : exercices sur poste avec des historiques réels anonymisés, travaux sur les données des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Nettoyer et analyser un historique de ventes</li>
<li>Calculer des moyennes mobiles, un lissage exponentiel et une régression linéaire</li>
<li>Intégrer la saisonnalité et les promotions dans les prévisions</li>
<li>Calculer l\'erreur de prévision (MAPE, biais) et ajuster le modèle</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des techniques de prévision ; modèle appliqué à ses données ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Ruptures et surstocks réduits ; planification plus fiable ; capital immobilisé diminué.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-des-stocks-et-des-inventaires',
		'titre'            => 'Gestion des stocks et des inventaires',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un outil de pilotage des stocks.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de stocks, magasiniers, approvisionneurs, responsables logistiques, comptables matières',
		'prerequis'        => 'Pratique d\'Excel.',
		'objectifs'        => 'Comprendre les enjeux économiques de la gestion des stocks
Classer les articles et choisir une politique de réapprovisionnement
Calculer les paramètres de gestion : stock de sécurité, point de commande, quantité économique
Organiser et fiabiliser les inventaires',
		'jours'            => array(
			array(
				'titre'      => 'Enjeux et analyse',
				'matin'      => 'Coûts de possession et de rupture ; classification ABC.',
				'apres_midi' => 'Rotation et couverture.',
			),
			array(
				'titre'      => 'Réapprovisionnement',
				'matin'      => 'Méthodes (point de commande, recomplètement) ; stock de sécurité.',
				'apres_midi' => 'Quantité économique ; valorisation.',
			),
			array(
				'titre'      => 'Inventaires',
				'matin'      => 'Organisation de l\'inventaire annuel et tournant ; écarts.',
				'apres_midi' => 'Fiabilité des stocks ; indicateurs.',
			),
		),
		'livrables'        => 'Outil Excel de pilotage des stocks
Procédure d\'inventaire',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les stocks immobilisent de la trésorerie et doivent pourtant garantir la disponibilité. Ce séminaire de 3 jours apprend à classer, dimensionner et réapprovisionner les stocks, puis à fiabiliser les inventaires. Chaque participant repart avec un outil de pilotage des stocks.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une classification ABC des articles</li>
<li>Calculer stock de sécurité, point de commande et quantité économique de commande</li>
<li>Valoriser les stocks (CMUP, premier entré premier sorti)</li>
<li>Préparer et conduire un inventaire physique ou tournant et analyser les écarts</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à piloter les stocks avec des méthodes éprouvées ; outil prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Trésorerie libérée par la baisse des stocks ; ruptures réduites ; écarts d\'inventaire maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-parc-automobile',
		'titre'            => 'Gestion de parc automobile',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un tableau de bord de gestion de flotte.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires de parc, responsables des moyens généraux et de la logistique, chefs de garage',
		'prerequis'        => 'Aucun prérequis ; pratique d\'Excel souhaitée.',
		'objectifs'        => 'Organiser la gestion administrative et technique d\'une flotte
Choisir le mode d\'acquisition et renouveler les véhicules
Maîtriser les coûts de carburant, d\'entretien et d\'assurance
Prévenir les accidents et gérer les sinistres',
		'jours'            => array(
			array(
				'titre'      => 'Organiser le parc',
				'matin'      => 'Inventaire et dossiers des véhicules ; affectation et règles d\'utilisation.',
				'apres_midi' => 'Obligations administratives.',
			),
			array(
				'titre'      => 'Acquérir et entretenir',
				'matin'      => 'Modes d\'acquisition ; renouvellement.',
				'apres_midi' => 'Maintenance préventive et curative ; carburant et cartes.',
			),
			array(
				'titre'      => 'Coûts et risques',
				'matin'      => 'Coût total de possession ; tableau de bord ; sinistres et assurances.',
				'apres_midi' => 'Sécurité routière ; géolocalisation.',
			),
		),
		'livrables'        => 'Tableau de bord de gestion de flotte
Modèle de règlement d\'utilisation des véhicules',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le parc automobile pèse lourd dans les budgets des entreprises et administrations. Ce séminaire de 3 jours apprend à organiser la gestion d\'une flotte : acquisition, affectation, carburant, maintenance, sinistres et coûts. Chaque participant repart avec un tableau de bord de gestion de flotte.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Tenir un fichier du parc et les dossiers de chaque véhicule</li>
<li>Comparer achat, location longue durée et crédit-bail sur le coût total</li>
<li>Planifier la maintenance préventive et contrôler la consommation de carburant</li>
<li>Construire un tableau de bord du coût total de possession</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gestion de flotte professionnalisée ; outils de suivi prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts du parc réduits ; disponibilité des véhicules améliorée ; accidents et abus limités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-achat-logistique',
		'titre'            => 'Achat logistique',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un modèle de cahier des charges logistique.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Acheteurs, responsables logistiques, responsables supply chain, gestionnaires de contrats',
		'prerequis'        => 'Expérience en achats ou en logistique.',
		'objectifs'        => 'Connaître le marché des prestations logistiques
Définir un besoin logistique et rédiger un cahier des charges
Conduire une consultation et comparer les offres sur le coût total
Contractualiser et piloter la performance des prestataires',
		'jours'            => array(
			array(
				'titre'      => 'Marché et besoin',
				'matin'      => 'Prestataires logistiques ; faire ou faire faire.',
				'apres_midi' => 'Expression du besoin ; cahier des charges.',
			),
			array(
				'titre'      => 'Consultation',
				'matin'      => 'Appel d\'offres ; grilles tarifaires.',
				'apres_midi' => 'Comparaison sur le coût total ; négociation.',
			),
			array(
				'titre'      => 'Contrat et pilotage',
				'matin'      => 'Clauses de responsabilité et d\'assurance ; niveaux de service.',
				'apres_midi' => 'Indicateurs ; revues de performance.',
			),
		),
		'livrables'        => 'Modèle de cahier des charges logistique
Grille de comparaison des offres',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Acheter des prestations logistiques (transport, entreposage, transit) demande une expertise spécifique. Ce séminaire de 3 jours apprend à définir le besoin, consulter, comparer et contractualiser avec les prestataires logistiques. Chaque participant repart avec un modèle de cahier des charges logistique.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir entre logistique intégrée et externalisée</li>
<li>Rédiger un cahier des charges pour du transport, de l\'entreposage ou du transit</li>
<li>Analyser les offres et négocier tarifs et niveaux de service</li>
<li>Suivre un contrat de prestation avec des indicateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Expertise dans l\'achat de prestations logistiques ; modèles réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Coûts logistiques réduits ; prestataires plus performants ; risques contractuels maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-procedure-de-dedouanement-de-marchandises',
		'titre'            => 'Procédure de dédouanement de marchandises',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un guide pratique du dédouanement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Transitaires, déclarants en douane, responsables import-export, acheteurs, logisticiens',
		'prerequis'        => 'Notions de commerce international.',
		'objectifs'        => 'Comprendre la réglementation douanière et le rôle des acteurs
Maîtriser les étapes de la procédure de dédouanement
Préparer les documents et la déclaration en douane
Utiliser les outils dématérialisés et anticiper les contrôles',
		'jours'            => array(
			array(
				'titre'      => 'Cadre douanier',
				'matin'      => 'Code des douanes ; acteurs.',
				'apres_midi' => 'Espèce, origine, valeur ; TEC CEDEAO.',
			),
			array(
				'titre'      => 'La procédure',
				'matin'      => 'Documents ; déclaration en détail ; liquidation et paiement.',
				'apres_midi' => 'Circuits de contrôle ; enlèvement.',
			),
			array(
				'titre'      => 'Outils et contentieux',
				'matin'      => 'Systèmes dématérialisés ; régimes particuliers.',
				'apres_midi' => 'Infractions et contentieux ; cas pratiques.',
			),
		),
		'livrables'        => 'Guide pratique du dédouanement
Check-list documentaire import-export',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un dédouanement mal préparé entraîne retards, surcoûts et pénalités. Ce séminaire de 3 jours présente la procédure de dédouanement au Sénégal, de la déclaration à l\'enlèvement, ainsi que les outils dématérialisés. Chaque participant repart avec un guide pratique du dédouanement.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les documents exigés à l\'import et à l\'export</li>
<li>Établir une déclaration en détail et calculer les droits et taxes</li>
<li>Suivre un dossier dans les systèmes dématérialisés (GAINDE, guichet unique ORBUS)</li>
<li>Gérer un contrôle documentaire, physique ou un contentieux</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la procédure de dédouanement ; outils pratiques ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Délais de dédouanement raccourcis ; frais de magasinage et pénalités évités ; conformité douanière.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-d-un-entrepot',
		'titre'            => 'Gestion d\'un entrepôt',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un plan d\'amélioration de votre entrepôt.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables et chefs d\'entrepôt, magasiniers, logisticiens, responsables d\'exploitation',
		'prerequis'        => 'Expérience en entrepôt ou en logistique.',
		'objectifs'        => 'Concevoir et aménager un entrepôt fonctionnel
Organiser les processus de réception, stockage, préparation et expédition
Garantir la sécurité des personnes et des marchandises
Piloter la productivité et la qualité de l\'entrepôt',
		'jours'            => array(
			array(
				'titre'      => 'Concevoir',
				'matin'      => 'Rôle de l\'entrepôt ; implantation.',
				'apres_midi' => 'Équipements de stockage et de manutention ; adressage.',
			),
			array(
				'titre'      => 'Opérer',
				'matin'      => 'Réception et contrôle ; rangement ; préparation de commandes.',
				'apres_midi' => 'Expédition ; systèmes de gestion d\'entrepôt.',
			),
			array(
				'titre'      => 'Sécuriser et piloter',
				'matin'      => 'Sécurité, incendie, manutention ; indicateurs.',
				'apres_midi' => 'Lean en entrepôt ; plan d\'amélioration.',
			),
		),
		'livrables'        => 'Plan d\'amélioration de son entrepôt
Check-list sécurité de l\'entrepôt',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'entrepôt est le cœur physique de la logistique : sa bonne organisation conditionne délais, coûts et qualité de service. Ce séminaire de 3 jours couvre l\'aménagement, les processus, la sécurité et le pilotage d\'un entrepôt. Chaque participant repart avec un plan d\'amélioration de son entrepôt.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir une implantation et un adressage adaptés aux flux</li>
<li>Appliquer les règles de rangement selon la rotation des articles</li>
<li>Organiser la préparation de commandes et contrôler les expéditions</li>
<li>Suivre les indicateurs de productivité, de qualité et de sécurité</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodes d\'organisation d\'entrepôt maîtrisées ; outils de diagnostic ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Productivité de l\'entrepôt améliorée ; erreurs de préparation réduites ; accidents prévenus.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-pratique-des-incoterm',
		'titre'            => 'Pratique des INCOTERM',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un guide de choix de l\'Incoterm.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Commerciaux export, acheteurs import, transitaires, logisticiens, banquiers du commerce extérieur',
		'prerequis'        => 'Notions de commerce international.',
		'objectifs'        => 'Maîtriser les 11 règles Incoterms 2020
Identifier le transfert des frais et des risques pour chaque règle
Articuler l\'Incoterm avec le contrat de transport, l\'assurance et le paiement
Choisir l\'Incoterm le plus adapté à chaque opération',
		'jours'            => array(
			array(
				'titre'      => 'Les règles',
				'matin'      => 'Rôle et limites des Incoterms ; règles multimodales et maritimes.',
				'apres_midi' => 'Obligations du vendeur et de l\'acheteur.',
			),
			array(
				'titre'      => 'Frais et risques',
				'matin'      => 'Transfert des frais et des risques ; assurance.',
				'apres_midi' => 'Dédouanement ; calculs de prix.',
			),
			array(
				'titre'      => 'Choisir et négocier',
				'matin'      => 'Liens avec le transport et le paiement ; erreurs fréquentes.',
				'apres_midi' => 'Cas pratiques ; guide de choix.',
			),
		),
		'livrables'        => 'Guide de choix de l\'Incoterm
Tableau de répartition des frais et risques',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le choix de l\'Incoterm détermine qui paie, qui assure et qui supporte les risques à chaque étape du transport international. Ce séminaire de 3 jours fait maîtriser les règles Incoterms 2020 et leurs liens avec le transport, l\'assurance, la douane et le paiement. Chaque participant repart avec un guide de choix de l\'Incoterm.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Lire et appliquer chaque Incoterm (EXW, FCA, FOB, CIF, DAP, DDP…)</li>
<li>Calculer un prix de vente ou d\'achat selon l\'Incoterm retenu</li>
<li>Vérifier la cohérence entre Incoterm, crédit documentaire et documents de transport</li>
<li>Négocier l\'Incoterm dans un contrat commercial</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise opérationnelle des Incoterms ; outils de calcul et de choix ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Litiges commerciaux évités ; coûts logistiques internationaux maîtrisés ; contrats mieux négociés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-d-un-terminal-a-conteneurs',
		'titre'            => 'Gestion d\'un terminal à conteneurs',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un tableau de bord des opérations de terminal.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Personnel d\'exploitation des terminaux, planificateurs, agents maritimes, manutentionnaires, cadres portuaires',
		'prerequis'        => 'Expérience dans le secteur portuaire ou maritime.',
		'objectifs'        => 'Comprendre l\'organisation et les flux d\'un terminal à conteneurs
Planifier les escales, le plan de chargement et la cour
Optimiser l\'usage des équipements et des ressources
Piloter la productivité, la sécurité et la qualité de service',
		'jours'            => array(
			array(
				'titre'      => 'Le terminal',
				'matin'      => 'Acteurs et flux ; infrastructures et équipements.',
				'apres_midi' => 'Systèmes d\'exploitation de terminal.',
			),
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Planification des escales ; plan de chargement.',
				'apres_midi' => 'Gestion de la cour ; opérations porte.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Indicateurs de productivité ; sécurité ; qualité de service.',
				'apres_midi' => 'Tableau de bord ; cas d\'amélioration.',
			),
		),
		'livrables'        => 'Tableau de bord des opérations de terminal
Fiche des indicateurs portuaires',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un terminal à conteneurs performant repose sur une planification fine des escales, de la cour et des équipements. Ce séminaire de 3 jours présente l\'organisation et le pilotage des opérations d\'un terminal. Chaque participant repart avec un tableau de bord des opérations de terminal.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Décrire les opérations quai, cour et porte d\'un terminal</li>
<li>Lire un plan de chargement et organiser le stockage des conteneurs</li>
<li>Calculer les indicateurs de productivité (mouvements par heure, temps d\'escale, temps de séjour)</li>
<li>Identifier les goulets d\'étranglement et proposer des améliorations</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compréhension fine des opérations de terminal ; outils de pilotage ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Productivité et temps d\'escale améliorés ; sécurité renforcée ; compétitivité portuaire accrue.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-du-capital-humain-logistique',
		'titre'            => 'Gestion du capital humain logistique',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un plan de développement des compétences de votre équipe.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables logistiques, chefs d\'équipe, responsables RH des entreprises de logistique et de transport',
		'prerequis'        => 'Encadrer ou se préparer à encadrer une équipe logistique.',
		'objectifs'        => 'Identifier les métiers et compétences clés de la logistique
Organiser le travail et les plannings des équipes
Développer les compétences et fidéliser le personnel
Prévenir les risques professionnels du secteur',
		'jours'            => array(
			array(
				'titre'      => 'Métiers et compétences',
				'matin'      => 'Cartographie des métiers ; référentiels de compétences.',
				'apres_midi' => 'Recrutement ; habilitations.',
			),
			array(
				'titre'      => 'Organiser et dimensionner',
				'matin'      => 'Plannings ; dimensionnement selon l\'activité.',
				'apres_midi' => 'Polyvalence ; intérim et saisonnalité.',
			),
			array(
				'titre'      => 'Développer et protéger',
				'matin'      => 'Formation ; motivation et reconnaissance.',
				'apres_midi' => 'Santé et sécurité ; indicateurs RH logistiques.',
			),
		),
		'livrables'        => 'Matrice de polyvalence
Plan de développement des compétences de l\'équipe',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Caristes, préparateurs, chauffeurs, agents de quai : la performance logistique dépend d\'abord des équipes. Ce séminaire de 3 jours apprend à recruter, former, organiser, motiver et protéger les équipes logistiques. Chaque participant repart avec un plan de développement des compétences de son équipe.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Établir une matrice de polyvalence des équipes</li>
<li>Dimensionner les effectifs selon les volumes d\'activité</li>
<li>Concevoir un plan de formation et d\'habilitation (cariste, sécurité)</li>
<li>Animer une équipe opérationnelle et réduire l\'absentéisme et les accidents</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Outils de management adaptés aux équipes logistiques ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes plus compétentes et stables ; productivité accrue ; accidents du travail réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-les-techniques-de-paiement-a-l-international-credit',
		'titre'            => 'Les techniques de paiement à l\'international : crédit documentaire',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec une check-list de contrôle des documents.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables import-export, comptables, trésoriers, chargés du commerce extérieur des banques, transitaires',
		'prerequis'        => 'Notions de commerce international.',
		'objectifs'        => 'Connaître les techniques de paiement international et leur niveau de sécurité
Maîtriser le fonctionnement du crédit documentaire selon les RUU 600
Préparer et contrôler les documents exigés
Utiliser les garanties internationales',
		'jours'            => array(
			array(
				'titre'      => 'Techniques de paiement',
				'matin'      => 'Risques du commerce international ; virement, chèque, encaissement documentaire.',
				'apres_midi' => 'Réglementation des changes UEMOA.',
			),
			array(
				'titre'      => 'Le crédit documentaire',
				'matin'      => 'Acteurs, formes, déroulement ; RUU 600.',
				'apres_midi' => 'Ouverture et modifications ; Incoterms.',
			),
			array(
				'titre'      => 'Documents et garanties',
				'matin'      => 'Documents exigés ; contrôle et réserves.',
				'apres_midi' => 'Garanties internationales ; cas pratiques.',
			),
		),
		'livrables'        => 'Check-list de contrôle des documents
Tableau comparatif des techniques de paiement',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le crédit documentaire reste la technique de paiement la plus sûre pour le commerce international. Ce séminaire de 3 jours fait maîtriser son fonctionnement selon les RUU 600 et les autres techniques de paiement et de garantie. Chaque participant repart avec une check-list de contrôle des documents.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir entre virement, remise documentaire et crédit documentaire selon le risque</li>
<li>Analyser une ouverture de crédit documentaire et détecter les clauses à risque</li>
<li>Établir et contrôler les documents pour éviter les réserves</li>
<li>Mettre en place une garantie bancaire ou une lettre de crédit stand-by</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des techniques de paiement international ; capacité à éviter les réserves ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Paiements internationaux sécurisés ; impayés et réserves évités ; coûts bancaires maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-logistique-de-distribution',
		'titre'            => 'Logistique de distribution',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un diagnostic de votre réseau de distribution.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables distribution et logistique, commerciaux, responsables e-commerce, distributeurs',
		'prerequis'        => 'Expérience en logistique ou en commerce.',
		'objectifs'        => 'Concevoir un schéma de distribution adapté aux marchés servis
Organiser le traitement des commandes et la livraison
Maîtriser la logistique du dernier kilomètre et du e-commerce
Mesurer et améliorer le niveau de service client',
		'jours'            => array(
			array(
				'titre'      => 'Schémas de distribution',
				'matin'      => 'Canaux ; réseaux et entrepôts.',
				'apres_midi' => 'Distribution en zone urbaine et rurale au Sénégal.',
			),
			array(
				'titre'      => 'Commandes et livraisons',
				'matin'      => 'Cycle de commande ; préparation ; tournées.',
				'apres_midi' => 'Dernier kilomètre ; retours.',
			),
			array(
				'titre'      => 'Service et coûts',
				'matin'      => 'Logistique e-commerce ; niveau de service.',
				'apres_midi' => 'Coûts de distribution ; diagnostic de son réseau.',
			),
		),
		'livrables'        => 'Diagnostic de son réseau de distribution
Tableau de bord du niveau de service',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La logistique de distribution relie l\'entrepôt au client final et pèse directement sur la satisfaction. Ce séminaire de 3 jours présente les schémas de distribution, la gestion des commandes, la livraison du dernier kilomètre et la logistique du e-commerce. Chaque participant repart avec un diagnostic de son réseau de distribution.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Comparer distribution directe, entrepôts régionaux et plateformes</li>
<li>Organiser le cycle de commande et les délais de livraison</li>
<li>Mettre en place une solution de livraison du dernier kilomètre</li>
<li>Suivre le taux de service, les délais et les coûts de distribution</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de l\'organisation de la distribution ; outils de diagnostic ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Délais de livraison réduits ; coûts de distribution maîtrisés ; clients plus satisfaits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-logistique-de-production-les-previsions-de-la-demande',
		'titre'            => 'Logistique de production : les prévisions de la demande',
		'domaine'          => 'Logistique & supply chain',
		'hero'             => 'Repartez avec un plan directeur de production construit sur Excel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables de production et de planification, logisticiens industriels, approvisionneurs',
		'prerequis'        => 'Expérience en production ou en logistique ; pratique d\'Excel.',
		'objectifs'        => 'Comprendre le lien entre prévisions, planification et logistique de production
Établir des prévisions de demande fiables
Construire un plan directeur de production et calculer les besoins
Synchroniser production et approvisionnements',
		'jours'            => array(
			array(
				'titre'      => 'Prévoir la demande',
				'matin'      => 'Rôle des prévisions ; méthodes quantitatives et qualitatives.',
				'apres_midi' => 'Mesure de l\'erreur.',
			),
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Plan industriel et commercial ; plan directeur de production.',
				'apres_midi' => 'Capacités ; calcul des besoins (MRP).',
			),
			array(
				'titre'      => 'Synchroniser',
				'matin'      => 'Approvisionnement des lignes ; flux tirés et poussés ; kanban.',
				'apres_midi' => 'Indicateurs ; cas complet.',
			),
		),
		'livrables'        => 'Plan directeur de production sous Excel
Modèle de calcul des besoins',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Produire au plus juste exige des prévisions de demande fiables, traduites en plans de production. Ce séminaire de 3 jours relie prévisions, planification et approvisionnement des sites industriels. Chaque participant repart avec un plan directeur de production construit sur Excel.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'entreprises et de ports de la sous-région, exercices de calcul sur Excel, visites ou analyses de processus réels, travaux en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser un historique et appliquer une méthode de prévision</li>
<li>Élaborer un plan industriel et commercial et un plan directeur de production</li>
<li>Calculer les besoins nets en matières par la méthode MRP</li>
<li>Ajuster la production aux capacités et suivre les écarts</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à relier prévisions et production ; outils de planification ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Production mieux ajustée à la demande ; stocks de matières réduits ; délais tenus.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-et-relation-client',
		'titre'            => 'Marketing et relation client',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec la cartographie du parcours client de votre offre et un plan d\'action relation client.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing, commerciaux, responsables service client, chefs de produit, entrepreneurs',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les fondamentaux du marketing orienté client
Analyser les besoins, attentes et comportements des clients
Concevoir un parcours client et une expérience cohérente
Mettre en place des actions de fidélisation et mesurer la satisfaction',
		'jours'            => array(
			array(
				'titre'      => 'Connaître ses clients',
				'matin'      => 'Marketing orienté client ; segmentation.',
				'apres_midi' => 'Personas ; études et écoute client.',
			),
			array(
				'titre'      => 'Parcours et expérience',
				'matin'      => 'Cartographie du parcours ; moments clés.',
				'apres_midi' => 'Standards de service ; gestion des réclamations.',
			),
			array(
				'titre'      => 'Fidéliser et mesurer',
				'matin'      => 'Programmes de fidélité ; satisfaction et NPS.',
				'apres_midi' => 'Valeur client ; plan d\'action relation client.',
			),
		),
		'livrables'        => 'Cartographie du parcours client
Plan d\'action relation client',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Fidéliser un client coûte bien moins cher que d\'en conquérir un nouveau. Ce séminaire de 3 jours montre comment mettre le client au centre de la démarche marketing : connaissance client, parcours, qualité de service et fidélisation. Chaque participant repart avec la cartographie du parcours client de son offre et un plan d\'action relation client.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Segmenter sa clientèle et construire des personas</li>
<li>Cartographier le parcours client et identifier les points de friction</li>
<li>Définir des standards de service et traiter les réclamations</li>
<li>Mesurer la satisfaction (enquêtes, NPS) et piloter un plan de fidélisation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodes concrètes pour placer le client au centre ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Clients plus satisfaits et plus fidèles ; réclamations réduites ; chiffre d\'affaires sécurisé.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-strategique-et-developpement-commercial',
		'titre'            => 'Marketing stratégique et développement commercial',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec le plan marketing stratégique de votre activité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs marketing et commerciaux, chefs de produit, responsables du développement, dirigeants de PME',
		'prerequis'        => 'Expérience en marketing ou en commercial.',
		'objectifs'        => 'Réaliser un diagnostic marketing interne et externe
Segmenter, cibler et positionner son offre
Définir une stratégie de croissance et un mix marketing
Élaborer un plan de développement commercial chiffré',
		'jours'            => array(
			array(
				'titre'      => 'Diagnostic',
				'matin'      => 'Analyse de l\'environnement, du marché et de la concurrence ; SWOT.',
				'apres_midi' => 'Portefeuille d\'activités.',
			),
			array(
				'titre'      => 'Choix stratégiques',
				'matin'      => 'Segmentation, ciblage, positionnement ; stratégies de croissance.',
				'apres_midi' => 'Proposition de valeur ; mix marketing.',
			),
			array(
				'titre'      => 'Plan de développement',
				'matin'      => 'Objectifs ; plan d\'action commercial ; budget.',
				'apres_midi' => 'Indicateurs ; présentation du plan.',
			),
		),
		'livrables'        => 'Plan marketing stratégique de son activité
Matrices d\'analyse stratégique',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une croissance durable repose sur des choix stratégiques clairs : marchés, cibles, positionnement, offres. Ce séminaire de 3 jours apprend à réaliser un diagnostic marketing, à formuler une stratégie et à la traduire en plan de développement commercial. Chaque participant repart avec le plan marketing stratégique de son activité.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Conduire une analyse PESTEL, des forces concurrentielles et SWOT</li>
<li>Choisir des segments cibles et formuler un positionnement différenciant</li>
<li>Utiliser la matrice d\'Ansoff pour définir les axes de croissance</li>
<li>Construire un plan d\'action commercial avec objectifs et budget</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision stratégique du marketing ; méthode de planification ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Choix de marchés plus pertinents ; croissance mieux maîtrisée ; cohérence entre marketing et vente.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-digital-et-transformation-numerique',
		'titre'            => 'Marketing digital et transformation numérique',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec une feuille de route digitale marketing.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs marketing, responsables communication, chefs de projet digital, dirigeants',
		'prerequis'        => 'Pratique courante d\'internet et des réseaux sociaux.',
		'objectifs'        => 'Comprendre les mutations du comportement client à l\'ère numérique
Évaluer la maturité digitale de son organisation
Construire une stratégie marketing digitale intégrée
Piloter la transformation numérique des équipes marketing',
		'jours'            => array(
			array(
				'titre'      => 'Mutations numériques',
				'matin'      => 'Usages digitaux en Afrique de l\'Ouest ; parcours omnicanal.',
				'apres_midi' => 'Nouveaux modèles économiques.',
			),
			array(
				'titre'      => 'Diagnostic et stratégie',
				'matin'      => 'Audit de maturité digitale ; écosystème digital.',
				'apres_midi' => 'Objectifs et canaux ; budget.',
			),
			array(
				'titre'      => 'Transformation',
				'matin'      => 'Organisation et compétences ; outils.',
				'apres_midi' => 'Conduite du changement ; feuille de route digitale.',
			),
		),
		'livrables'        => 'Feuille de route digitale marketing
Grille d\'audit de présence digitale',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Google Analytics',
			'Meta Business Suite',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le numérique transforme la manière dont les clients découvrent, comparent et achètent. Ce séminaire de 3 jours aide à comprendre ces mutations et à bâtir une stratégie marketing digitale intégrée à la transformation de l\'entreprise. Chaque participant repart avec une feuille de route digitale marketing.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un audit de présence digitale (site, réseaux, référencement, avis)</li>
<li>Définir un écosystème digital : site, réseaux sociaux, emailing, mobile money, e-commerce</li>
<li>Prioriser les chantiers digitaux selon la valeur et l\'effort</li>
<li>Construire une feuille de route et des indicateurs de transformation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision claire des leviers digitaux ; méthode de transformation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Présence digitale cohérente et efficace ; transformation numérique pilotée ; compétitivité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-appliquee-au-marketing',
		'titre'            => 'Intelligence artificielle appliquée au marketing',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec une bibliothèque de prompts et un plan d\'usage de l\'IA.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing et communication, chefs de produit, community managers, entrepreneurs',
		'prerequis'        => 'Pratique des outils bureautiques ; aucune compétence technique requise.',
		'objectifs'        => 'Comprendre ce que l\'IA peut apporter au marketing
Utiliser l\'IA générative pour produire contenus et visuels
Exploiter l\'IA pour l\'analyse client et la personnalisation
Encadrer les usages : qualité, éthique, données personnelles',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre l\'IA',
				'matin'      => 'IA générative et prédictive ; panorama des outils.',
				'apres_midi' => 'Cas d\'usage marketing ; limites.',
			),
			array(
				'titre'      => 'Créer avec l\'IA',
				'matin'      => 'Prompts ; production de textes, visuels, vidéos courtes.',
				'apres_midi' => 'Adaptation au ton de marque ; ateliers.',
			),
			array(
				'titre'      => 'Analyser et encadrer',
				'matin'      => 'Analyse d\'avis et de données ; personnalisation.',
				'apres_midi' => 'Éthique et données personnelles ; plan d\'usage.',
			),
		),
		'livrables'        => 'Bibliothèque de prompts marketing
Plan d\'usage de l\'IA pour son équipe',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'Canva',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA générative et prédictive change la façon de concevoir des campagnes, de produire du contenu et de comprendre les clients. Ce séminaire de 3 jours fait pratiquer les usages de l\'IA à forte valeur pour le marketing, en maîtrisant ses limites. Chaque participant repart avec une bibliothèque de prompts et un plan d\'usage de l\'IA.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, exercices sur les offres des participants, revue critique des productions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger des prompts efficaces pour des textes, visuels et scripts marketing</li>
<li>Analyser des avis clients et des études avec l\'IA</li>
<li>Concevoir des campagnes personnalisées par segment avec l\'aide de l\'IA</li>
<li>Vérifier les productions de l\'IA et définir des règles d\'usage</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Usage productif et maîtrisé de l\'IA en marketing ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Production marketing accélérée ; campagnes mieux ciblées ; usage de l\'IA encadré.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-relationnel-et-experience-client',
		'titre'            => 'Marketing relationnel et expérience client',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec une charte d\'expérience client.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing, relation client et qualité, chefs d\'agence, commerciaux',
		'prerequis'        => 'Expérience en marketing, vente ou service client.',
		'objectifs'        => 'Comprendre les leviers de l\'expérience client et du marketing relationnel
Concevoir une expérience client différenciante
Personnaliser la relation selon la valeur des clients
Mesurer l\'expérience et l\'améliorer en continu',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux',
				'matin'      => 'Marketing relationnel ; valeur client.',
				'apres_midi' => 'Émotions et expérience ; exemples de référence.',
			),
			array(
				'titre'      => 'Concevoir l\'expérience',
				'matin'      => 'Moments de vérité ; promesse client ; charte.',
				'apres_midi' => 'Rôle des collaborateurs ; atelier de conception.',
			),
			array(
				'titre'      => 'Mesurer et améliorer',
				'matin'      => 'Écoute client ; indicateurs.',
				'apres_midi' => 'Boucle d\'amélioration ; plan d\'action.',
			),
		),
		'livrables'        => 'Charte d\'expérience client
Dispositif d\'écoute client',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une expérience client mémorable crée la préférence et le bouche-à-oreille. Ce séminaire de 3 jours apprend à concevoir une expérience client différenciante et à entretenir une relation durable par le marketing relationnel. Chaque participant repart avec une charte d\'expérience client.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les moments de vérité du parcours client</li>
<li>Rédiger une promesse client et une charte d\'expérience</li>
<li>Concevoir des actions relationnelles par segment de valeur</li>
<li>Mettre en place un dispositif d\'écoute et des indicateurs (satisfaction, effort client, NPS)</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de conception d\'expérience client ; outils de mesure ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Fidélité et recommandation accrues ; différenciation face à la concurrence ; culture client renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-sectoriel-adapte-au-marche-senegalais',
		'titre'            => 'Marketing sectoriel adapté au marché sénégalais',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un plan marketing adapté à votre secteur.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing et commerciaux, chefs de produit, entrepreneurs, agences de communication',
		'prerequis'        => 'Expérience en marketing ou en commercial.',
		'objectifs'        => 'Comprendre les spécificités du consommateur et du marché sénégalais
Analyser les dynamiques des secteurs clés (distribution, télécoms, banque, agroalimentaire, services)
Adapter le mix marketing aux réalités locales
Construire un plan marketing sectoriel',
		'jours'            => array(
			array(
				'titre'      => 'Le marché sénégalais',
				'matin'      => 'Données clés ; comportements de consommation.',
				'apres_midi' => 'Secteur informel ; territoires et diaspora.',
			),
			array(
				'titre'      => 'Secteurs et mix',
				'matin'      => 'Études de cas sectorielles ; prix et pouvoir d\'achat.',
				'apres_midi' => 'Distribution ; communication locale.',
			),
			array(
				'titre'      => 'Plan sectoriel',
				'matin'      => 'Construction du plan marketing ; budget.',
				'apres_midi' => 'Indicateurs ; présentation.',
			),
		),
		'livrables'        => 'Plan marketing adapté à son secteur
Fiches synthèse sectorielles',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le marché sénégalais a ses spécificités : poids de l\'informel, mobile money, pouvoir des communautés, diversité des territoires. Ce séminaire de 3 jours apprend à adapter les outils marketing aux réalités des secteurs clés au Sénégal. Chaque participant repart avec un plan marketing adapté à son secteur.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Segmenter le marché sénégalais selon des critères pertinents (revenu, territoire, usages)</li>
<li>Adapter prix, distribution et communication aux circuits formels et informels</li>
<li>Mobiliser les canaux locaux : radio, WhatsApp, influenceurs, événements, mobile money</li>
<li>Élaborer un plan marketing chiffré pour son secteur</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Lecture fine du marché local ; outils marketing adaptés ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Offres mieux adaptées aux clients locaux ; parts de marché gagnées ; investissements marketing plus efficaces.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-et-pilotage-de-la-performance-marketing',
		'titre'            => 'Management et pilotage de la performance marketing',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un tableau de bord de performance marketing.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs et responsables marketing, chefs de groupe produit, responsables communication',
		'prerequis'        => 'Expérience en marketing.',
		'objectifs'        => 'Organiser et manager une équipe marketing
Fixer des objectifs marketing alignés sur la stratégie
Piloter le budget et mesurer le ROI des actions
Construire un tableau de bord de performance marketing',
		'jours'            => array(
			array(
				'titre'      => 'Manager le marketing',
				'matin'      => 'Organisation de la fonction ; compétences.',
				'apres_midi' => 'Relation avec la vente et la direction ; agences.',
			),
			array(
				'titre'      => 'Objectifs et budget',
				'matin'      => 'Objectifs SMART ; budget par canal.',
				'apres_midi' => 'Arbitrages ; suivi.',
			),
			array(
				'titre'      => 'Mesurer la performance',
				'matin'      => 'Indicateurs clés ; ROI, coût d\'acquisition, valeur client.',
				'apres_midi' => 'Tableau de bord ; reporting.',
			),
		),
		'livrables'        => 'Tableau de bord de performance marketing
Modèle de budget marketing',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Looker Studio',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les directions générales demandent au marketing de démontrer sa contribution aux résultats. Ce séminaire de 3 jours apprend à organiser la fonction marketing, à fixer des objectifs, à piloter le budget et à mesurer le retour sur investissement. Chaque participant repart avec un tableau de bord de performance marketing.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur les marques et offres des participants, études de cas d\'entreprises sénégalaises et africaines, exercices outillés, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Définir les rôles et processus de l\'équipe marketing</li>
<li>Traduire les objectifs d\'entreprise en objectifs et indicateurs marketing</li>
<li>Allouer et suivre un budget marketing par canal</li>
<li>Calculer le ROI, le coût d\'acquisition et la valeur client</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à piloter et justifier la performance marketing ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Budget marketing optimisé ; contribution du marketing démontrée ; décisions mieux fondées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-marketing-digital-et-acquisition-de-clients',
		'titre'            => 'Marketing digital et acquisition de clients',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un plan d\'acquisition digitale chiffré.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing digital, community managers, commerciaux, entrepreneurs, e-commerçants',
		'prerequis'        => 'Pratique d\'internet et des réseaux sociaux.',
		'objectifs'        => 'Connaître les principaux leviers d\'acquisition digitale
Améliorer le référencement naturel et local
Lancer et optimiser des campagnes publicitaires en ligne
Transformer les visiteurs en clients et mesurer le coût d\'acquisition',
		'jours'            => array(
			array(
				'titre'      => 'Attirer',
				'matin'      => 'Tunnel d\'acquisition ; référencement naturel et local.',
				'apres_midi' => 'Contenu ; réseaux sociaux.',
			),
			array(
				'titre'      => 'Publicité en ligne',
				'matin'      => 'Google Ads, Meta Ads ; ciblage, budget, enchères.',
				'apres_midi' => 'Atelier de création de campagnes.',
			),
			array(
				'titre'      => 'Convertir et mesurer',
				'matin'      => 'Pages de destination ; emailing ; suivi des conversions.',
				'apres_midi' => 'Coût d\'acquisition ; plan chiffré.',
			),
		),
		'livrables'        => 'Plan d\'acquisition digitale chiffré
Campagne publicitaire paramétrée',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Google Ads',
			'Meta Ads',
			'Google Analytics',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Attirer des clients en ligne demande une maîtrise des leviers d\'acquisition et de leur coût. Ce séminaire de 3 jours fait pratiquer le référencement, la publicité en ligne, l\'emailing et l\'optimisation de la conversion. Chaque participant repart avec un plan d\'acquisition digitale chiffré.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur poste, paramétrage de campagnes réelles, analyse de résultats.</p>
<h3>Compétences développées</h3>
<ul>
<li>Optimiser une page et une fiche d\'établissement pour le référencement</li>
<li>Paramétrer une campagne Google Ads et Meta Ads ciblée</li>
<li>Concevoir une campagne d\'emailing et une page de destination</li>
<li>Suivre les conversions et calculer le coût d\'acquisition client</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise opérationnelle des leviers d\'acquisition ; campagnes prêtes à lancer ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Nouveaux clients acquis à moindre coût ; budget publicitaire optimisé ; croissance mesurable.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-crm-et-fidelisation-de-la-clientele',
		'titre'            => 'CRM et fidélisation de la clientèle',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un CRM configuré et un programme de fidélisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables relation client, marketing et commerciaux, chargés de clientèle, dirigeants de PME',
		'prerequis'        => 'Pratique des outils bureautiques.',
		'objectifs'        => 'Comprendre le rôle du CRM dans la stratégie client
Structurer et qualifier une base de données clients
Exploiter le CRM pour la segmentation et les actions de fidélisation
Mesurer la fidélité et la valeur client',
		'jours'            => array(
			array(
				'titre'      => 'Stratégie et outil',
				'matin'      => 'CRM et stratégie client ; panorama des solutions.',
				'apres_midi' => 'Cahier des charges ; protection des données.',
			),
			array(
				'titre'      => 'Base clients et paramétrage',
				'matin'      => 'Qualité des données ; segmentation.',
				'apres_midi' => 'Pipeline ; paramétrage pratique.',
			),
			array(
				'titre'      => 'Fidéliser et mesurer',
				'matin'      => 'Programmes de fidélité ; automatisation.',
				'apres_midi' => 'Rétention, valeur vie client ; tableau de bord.',
			),
		),
		'livrables'        => 'CRM configuré pour son activité
Programme de fidélisation',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'HubSpot',
			'Zoho CRM',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un CRM bien utilisé donne une vision complète du client et permet d\'agir au bon moment. Ce séminaire de 3 jours apprend à choisir, paramétrer et exploiter un CRM pour fidéliser et développer la clientèle. Chaque participant repart avec un CRM configuré et un programme de fidélisation.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur poste dans un CRM, cas pratiques, travail sur la base clients des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir un CRM adapté à sa taille et à ses besoins</li>
<li>Paramétrer fiches clients, pipeline et champs de segmentation</li>
<li>Concevoir des campagnes de fidélisation automatisées (relances, anniversaires, offres)</li>
<li>Calculer le taux de rétention et la valeur vie client</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise d\'un CRM et des techniques de fidélisation ; outils opérationnels ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Clients mieux connus et mieux servis ; taux de rétention amélioré ; ventes additionnelles.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-social-selling-et-whatsapp-business',
		'titre'            => 'Social selling et WhatsApp Business',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un profil optimisé, un catalogue WhatsApp et des séquences de messages.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Commerciaux, entrepreneurs, commerçants, conseillers clientèle, community managers',
		'prerequis'        => 'Pratique personnelle de WhatsApp et des réseaux sociaux.',
		'objectifs'        => 'Comprendre les principes du social selling
Construire un profil professionnel crédible sur LinkedIn
Exploiter toutes les fonctions de WhatsApp Business pour vendre
Organiser et mesurer son activité commerciale sur les réseaux',
		'jours'            => array(
			array(
				'titre'      => 'Social selling',
				'matin'      => 'Principes ; profil vendeur sur LinkedIn ; contenu.',
				'apres_midi' => 'Réseau ; prospection.',
			),
			array(
				'titre'      => 'WhatsApp Business',
				'matin'      => 'Paramétrage complet ; catalogue ; messages automatiques.',
				'apres_midi' => 'Étiquettes ; paiement mobile.',
			),
			array(
				'titre'      => 'Convertir et suivre',
				'matin'      => 'Scripts et séquences ; relance ; fidélisation.',
				'apres_midi' => 'Règles de bonne conduite ; suivi des résultats.',
			),
		),
		'livrables'        => 'Profil LinkedIn optimisé et catalogue WhatsApp Business
Séquences de messages commerciaux',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'LinkedIn',
			'WhatsApp Business',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Au Sénégal, WhatsApp est devenu le premier canal de conversation commerciale. Ce séminaire de 3 jours apprend à prospecter, convertir et fidéliser via LinkedIn et WhatsApp Business, de manière professionnelle et respectueuse. Chaque participant repart avec un profil optimisé, un catalogue WhatsApp et des séquences de messages.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur smartphone et poste, simulations de conversations, paramétrage en direct.</p>
<h3>Compétences développées</h3>
<ul>
<li>Optimiser son profil LinkedIn et publier du contenu à valeur</li>
<li>Prospecter et engager la conversation sans être intrusif</li>
<li>Paramétrer WhatsApp Business : catalogue, messages automatiques, étiquettes, listes de diffusion</li>
<li>Suivre ses conversations et ses ventes dans un tableau de bord</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de vente sur les réseaux immédiatement applicable ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Prospects générés à faible coût ; conversion plus rapide ; relation client renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-data-marketing-et-pilotage-de-la-performance',
		'titre'            => 'Data marketing et pilotage de la performance',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un tableau de bord marketing alimenté par vos données.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables marketing, analystes marketing, chefs de produit, responsables CRM',
		'prerequis'        => 'Pratique d\'Excel.',
		'objectifs'        => 'Identifier les sources de données marketing et leur valeur
Collecter et structurer les données dans le respect de la réglementation
Analyser les données pour segmenter et décider
Visualiser la performance dans un tableau de bord',
		'jours'            => array(
			array(
				'titre'      => 'Données marketing',
				'matin'      => 'Sources : web, réseaux, CRM, ventes ; qualité.',
				'apres_midi' => 'Loi sénégalaise sur les données personnelles.',
			),
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Nettoyage et croisement ; segmentation RFM.',
				'apres_midi' => 'Analyse de campagnes ; tests A/B.',
			),
			array(
				'titre'      => 'Visualiser et piloter',
				'matin'      => 'Indicateurs clés ; tableau de bord.',
				'apres_midi' => 'Reporting ; décisions.',
			),
		),
		'livrables'        => 'Tableau de bord marketing
Segmentation RFM de sa clientèle',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Google Analytics',
			'Looker Studio',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les données clients et de campagne sont une mine pour décider vite et bien. Ce séminaire de 3 jours apprend à collecter, analyser et visualiser les données marketing pour piloter la performance. Chaque participant repart avec un tableau de bord marketing alimenté par ses données.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers sur poste avec des jeux de données réels anonymisés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Mettre en place le suivi des données web, réseaux sociaux et CRM</li>
<li>Nettoyer et croiser des données marketing sur Excel</li>
<li>Réaliser une segmentation RFM de la clientèle</li>
<li>Construire un tableau de bord marketing dans Looker Studio ou Power BI</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à exploiter les données marketing ; tableau de bord opérationnel ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décisions marketing fondées sur les données ; campagnes plus rentables ; conformité sur les données personnelles.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-techniques-de-prospection-b2b-et-negociation',
		'titre'            => 'Techniques de prospection B2B et négociation',
		'domaine'          => 'Marketing',
		'hero'             => 'Repartez avec un plan de prospection et des argumentaires.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Commerciaux B2B, ingénieurs d\'affaires, chargés de développement, dirigeants de PME',
		'prerequis'        => 'Expérience commerciale souhaitée.',
		'objectifs'        => 'Organiser une prospection B2B ciblée et régulière
Obtenir des rendez-vous qualifiés
Conduire un entretien de découverte et présenter une proposition de valeur
Négocier et conclure dans une logique gagnant-gagnant',
		'jours'            => array(
			array(
				'titre'      => 'Prospecter',
				'matin'      => 'Ciblage ; fichier ; plan de prospection.',
				'apres_midi' => 'Prospection téléphonique, email et réseaux ; prise de rendez-vous.',
			),
			array(
				'titre'      => 'Découvrir et argumenter',
				'matin'      => 'Entretien de découverte ; besoins et motivations.',
				'apres_midi' => 'Proposition de valeur ; argumentaire.',
			),
			array(
				'titre'      => 'Négocier et conclure',
				'matin'      => 'Préparation ; objections ; concessions.',
				'apres_midi' => 'Défense du prix ; conclusion et suivi.',
			),
		),
		'livrables'        => 'Plan de prospection
Scripts et argumentaires commerciaux',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Développer un portefeuille d\'entreprises clientes exige une prospection organisée et une négociation maîtrisée. Ce séminaire de 3 jours fait pratiquer la prospection B2B multicanale, l\'entretien de découverte et la négociation commerciale. Chaque participant repart avec un plan de prospection et des argumentaires.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de rôle filmés, simulations de négociation, ateliers de rédaction.</p>
<h3>Compétences développées</h3>
<ul>
<li>Construire un fichier de prospects et un plan de prospection</li>
<li>Rédiger des scripts d\'appel, d\'emails et de messages LinkedIn</li>
<li>Mener un entretien de découverte selon la méthode SONCAS ou SPIN</li>
<li>Traiter les objections, défendre son prix et conclure</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodes de prospection et de négociation éprouvées ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Pipeline commercial renforcé ; taux de conversion et marges améliorés ; nouveaux clients B2B.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-strategique-et-leadership-d-influence',
		'titre'            => 'Communication stratégique et leadership d\'influence',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec la stratégie de communication de votre organisation et votre cartographie d\'influence.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, directeurs de la communication, responsables des relations institutionnelles, cadres supérieurs',
		'prerequis'        => 'Expérience de management ou de communication.',
		'objectifs'        => 'Aligner la communication sur la stratégie de l\'organisation
Construire une stratégie de communication et des messages clés
Cartographier les parties prenantes et développer son influence
Incarner le message en tant que dirigeant',
		'jours'            => array(
			array(
				'titre'      => 'Stratégie',
				'matin'      => 'Communication et stratégie d\'organisation ; diagnostic d\'image.',
				'apres_midi' => 'Objectifs et cibles ; plateforme de messages.',
			),
			array(
				'titre'      => 'Influence',
				'matin'      => 'Parties prenantes ; cartographie d\'influence.',
				'apres_midi' => 'Réseaux ; plaidoyer et lobbying responsable.',
			),
			array(
				'titre'      => 'Leadership',
				'matin'      => 'Posture et légitimité ; prise de parole du dirigeant.',
				'apres_midi' => 'Mise en situation filmée.',
			),
		),
		'livrables'        => 'Stratégie de communication de son organisation
Cartographie d\'influence et plan de plaidoyer',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les dirigeants doivent aujourd\'hui convaincre au-delà de leur organisation : partenaires, autorités, opinion. Ce séminaire de 3 jours apprend à bâtir une stratégie de communication alignée sur les objectifs et à développer son influence. Chaque participant repart avec la stratégie de communication de son organisation et sa cartographie d\'influence.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de production sur les organisations des participants, études de cas, mises en situation filmées et débriefées, travail en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un diagnostic de communication et d\'image</li>
<li>Formuler un positionnement et une plateforme de messages</li>
<li>Construire une cartographie d\'influence et un plan d\'actions de plaidoyer</li>
<li>Préparer une intervention de dirigeant à fort enjeu</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à penser et incarner la communication stratégique ; outils d\'influence ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Image et réputation renforcées ; relations avec les parties prenantes structurées ; décisions mieux portées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-digitale-et-strategie-de-marque',
		'titre'            => 'Communication digitale et stratégie de marque',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec une plateforme de marque et un plan de communication digitale.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables communication et marketing, community managers, chargés de marque, entrepreneurs',
		'prerequis'        => 'Pratique des réseaux sociaux.',
		'objectifs'        => 'Définir l\'identité et la plateforme de marque
Choisir les canaux digitaux adaptés aux cibles
Produire des contenus cohérents avec la marque
Mesurer la notoriété et l\'engagement',
		'jours'            => array(
			array(
				'titre'      => 'La marque',
				'matin'      => 'Identité, plateforme de marque, territoire.',
				'apres_midi' => 'Audit de marque en ligne.',
			),
			array(
				'titre'      => 'Déployer en digital',
				'matin'      => 'Site, réseaux sociaux, emailing, vidéo ; charte éditoriale.',
				'apres_midi' => 'Calendrier ; création de contenus.',
			),
			array(
				'titre'      => 'Mesurer',
				'matin'      => 'Indicateurs ; écoute sociale.',
				'apres_midi' => 'Ajustements ; plan de communication digitale.',
			),
		),
		'livrables'        => 'Plateforme de marque
Plan de communication digitale et calendrier',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Canva',
			'Meta Business Suite',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La marque se construit désormais en ligne, à chaque publication et à chaque avis client. Ce séminaire de 3 jours apprend à définir l\'identité de marque et à la déployer de façon cohérente sur les canaux digitaux. Chaque participant repart avec une plateforme de marque et un plan de communication digitale.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de production sur les organisations des participants, études de cas, mises en situation filmées et débriefées, travail en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger une plateforme de marque (mission, valeurs, promesse, ton)</li>
<li>Construire une charte éditoriale et graphique pour le digital</li>
<li>Planifier un calendrier de publications multicanal</li>
<li>Suivre les indicateurs d\'audience, d\'engagement et de notoriété</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de construction de marque digitale ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Marque plus visible et cohérente ; communauté engagée ; image professionnelle renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-de-crise',
		'titre'            => 'Communication de crise',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec un plan de communication de crise.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, directeurs de communication, chargés de relations presse, responsables RSE, juristes',
		'prerequis'        => 'Expérience en communication ou en management.',
		'objectifs'        => 'Identifier les risques de crise et les signaux faibles
Organiser une cellule de crise et ses procédures
Communiquer en situation de crise auprès des médias et sur les réseaux
Gérer l\'après-crise et restaurer la confiance',
		'jours'            => array(
			array(
				'titre'      => 'Anticiper',
				'matin'      => 'Typologie des crises ; cartographie des risques.',
				'apres_midi' => 'Veille et signaux faibles ; plan de crise.',
			),
			array(
				'titre'      => 'Gérer',
				'matin'      => 'Cellule de crise ; prise de décision ; messages.',
				'apres_midi' => 'Communication interne et externe ; réseaux sociaux.',
			),
			array(
				'titre'      => 'Simuler et apprendre',
				'matin'      => 'Exercice de crise grandeur nature ; interview filmée.',
				'apres_midi' => 'Retour d\'expérience ; restauration de l\'image.',
			),
		),
		'livrables'        => 'Plan de communication de crise
Kit de messages d\'attente et de communiqués',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une crise mal gérée peut détruire en quelques heures une réputation bâtie en années. Ce séminaire de 3 jours apprend à anticiper les crises, à organiser une cellule de crise et à communiquer avec justesse, y compris sur les réseaux sociaux. Chaque participant repart avec un plan de communication de crise.</p>
<p>Pédagogie active avec 70 % de pratique : simulation de crise grandeur nature, interviews filmées, études de cas réels.</p>
<h3>Compétences développées</h3>
<ul>
<li>Établir une cartographie des risques réputationnels</li>
<li>Rédiger un plan de communication de crise et des messages d\'attente</li>
<li>Répondre à une interview de crise et à une polémique en ligne</li>
<li>Réaliser un retour d\'expérience post-crise</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Réflexes de gestion de crise acquis ; plan prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Réputation protégée ; réactivité face aux crises ; dommages limités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-interne-et-engagement-des-collaborateurs',
		'titre'            => 'Communication interne et engagement des collaborateurs',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec un plan de communication interne.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables communication interne, DRH, managers, chargés de communication',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre le rôle de la communication interne dans l\'engagement
Diagnostiquer la communication interne de son organisation
Concevoir un plan de communication interne et choisir les outils
Impliquer les managers et mesurer l\'engagement',
		'jours'            => array(
			array(
				'titre'      => 'Diagnostic',
				'matin'      => 'Enjeux de la communication interne ; audit.',
				'apres_midi' => 'Écoute des collaborateurs.',
			),
			array(
				'titre'      => 'Plan et outils',
				'matin'      => 'Objectifs, messages, cibles ; outils et canaux.',
				'apres_midi' => 'Événements internes ; communication du changement.',
			),
			array(
				'titre'      => 'Engagement',
				'matin'      => 'Rôle des managers ; feedback.',
				'apres_midi' => 'Mesure de l\'engagement ; plan d\'action.',
			),
		),
		'livrables'        => 'Plan de communication interne
Grille d\'audit de communication interne',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Des collaborateurs informés et écoutés sont des collaborateurs engagés. Ce séminaire de 3 jours apprend à concevoir une stratégie de communication interne, à choisir les bons outils et à mesurer leur effet sur l\'engagement. Chaque participant repart avec un plan de communication interne.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de production sur les organisations des participants, études de cas, mises en situation filmées et débriefées, travail en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un audit de communication interne</li>
<li>Définir messages, cibles et canaux (réunions, intranet, newsletter, messagerie)</li>
<li>Accompagner les managers dans leur rôle de relais</li>
<li>Mesurer l\'engagement par des enquêtes et des indicateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de communication interne structurée ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Collaborateurs mieux informés et plus engagés ; climat social amélioré ; changements mieux acceptés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-persuasive-et-negociation-en-entreprise',
		'titre'            => 'Communication persuasive et négociation en entreprise',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec une méthode de préparation de vos négociations.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, cadres, commerciaux, chefs de projet, représentants du personnel',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les mécanismes de la persuasion
Construire une argumentation solide et adaptée à son interlocuteur
Préparer et conduire une négociation
Gérer les tensions et les objections',
		'jours'            => array(
			array(
				'titre'      => 'Persuader',
				'matin'      => 'Principes de l\'influence ; écoute.',
				'apres_midi' => 'Profils d\'interlocuteurs ; structure d\'argumentation.',
			),
			array(
				'titre'      => 'Négocier',
				'matin'      => 'Types de négociation ; préparation.',
				'apres_midi' => 'Ouverture ; concessions et contreparties.',
			),
			array(
				'titre'      => 'Situations difficiles',
				'matin'      => 'Objections ; tensions et manipulation.',
				'apres_midi' => 'Impasses ; mises en situation.',
			),
		),
		'livrables'        => 'Méthode de préparation de négociation
Grille d\'argumentation',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Convaincre un comité, un partenaire ou un collaborateur est une compétence qui s\'apprend. Ce séminaire de 3 jours développe les techniques d\'argumentation, d\'influence et de négociation. Chaque participant repart avec une méthode de préparation de ses négociations.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de rôle filmés, simulations de négociation, débriefings individualisés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Structurer un argumentaire (problème, solution, bénéfices, preuves)</li>
<li>Adapter son discours au profil de l\'interlocuteur</li>
<li>Préparer une négociation : objectifs, marges, alternatives (MESORE)</li>
<li>Répondre aux objections et sortir d\'une impasse</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Aisance à convaincre et à négocier ; méthodes réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets et décisions mieux portés ; accords plus favorables ; relations professionnelles préservées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-transformation-de-la',
		'titre'            => 'Intelligence artificielle et transformation de la communication d\'entreprise',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec une charte d\'usage de l\'IA et une bibliothèque de prompts.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs et chargés de communication, attachés de presse, community managers, rédacteurs',
		'prerequis'        => 'Pratique des outils bureautiques.',
		'objectifs'        => 'Comprendre l\'impact de l\'IA sur les métiers de la communication
Utiliser l\'IA pour produire textes, visuels et vidéos
Exploiter l\'IA pour la veille et l\'analyse de réputation
Encadrer les usages et préserver la crédibilité de l\'organisation',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre',
				'matin'      => 'Panorama de l\'IA générative ; opportunités et risques.',
				'apres_midi' => 'Cas d\'usage en communication.',
			),
			array(
				'titre'      => 'Produire',
				'matin'      => 'Prompts ; textes, visuels, vidéos.',
				'apres_midi' => 'Traduction ; ateliers de production.',
			),
			array(
				'titre'      => 'Encadrer',
				'matin'      => 'Veille et réputation ; vérification, droits, transparence.',
				'apres_midi' => 'Charte d\'usage.',
			),
		),
		'livrables'        => 'Charte d\'usage de l\'IA en communication
Bibliothèque de prompts',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'Canva',
			'CapCut',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA générative bouleverse les métiers de la communication : rédaction, visuels, veille, traduction. Ce séminaire de 3 jours fait pratiquer les usages de l\'IA pour communiquer plus vite et mieux, tout en préservant la qualité et la crédibilité. Chaque participant repart avec une charte d\'usage de l\'IA et une bibliothèque de prompts.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, exercices sur cas réels, revue critique des productions.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger des prompts pour communiqués, posts, discours et newsletters</li>
<li>Créer des visuels et vidéos courtes avec des outils d\'IA</li>
<li>Réaliser une veille et une synthèse de presse assistées par IA</li>
<li>Rédiger une charte d\'usage de l\'IA en communication</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Productivité accrue et usage maîtrisé de l\'IA ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Production de contenus accélérée ; qualité et crédibilité préservées ; équipes formées aux nouveaux outils.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-manageriale-et-gestion-des-conflits',
		'titre'            => 'Communication managériale et gestion des conflits',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec vos outils de communication managériale.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, chefs de service, chefs d\'équipe, chefs de projet',
		'prerequis'        => 'Encadrer une équipe.',
		'objectifs'        => 'Adopter une communication managériale claire et adaptée
Donner du feedback et recadrer de manière constructive
Animer des réunions efficaces
Prévenir et gérer les conflits dans l\'équipe',
		'jours'            => array(
			array(
				'titre'      => 'Communiquer en manager',
				'matin'      => 'Rôles de la communication managériale ; écoute.',
				'apres_midi' => 'Assertivité ; communication non verbale.',
			),
			array(
				'titre'      => 'Feedback et réunions',
				'matin'      => 'Feedback positif et correctif ; recadrage.',
				'apres_midi' => 'Animation de réunions.',
			),
			array(
				'titre'      => 'Conflits',
				'matin'      => 'Comprendre les conflits ; posture de médiateur.',
				'apres_midi' => 'Entretiens difficiles ; mises en situation.',
			),
		),
		'livrables'        => 'Fiches outils de communication managériale
Trame d\'entretien de recadrage et de médiation',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le manager communique chaque jour pour informer, motiver, recadrer et apaiser. Ce séminaire de 3 jours développe une communication managériale claire et bienveillante et la capacité à désamorcer les conflits. Chaque participant repart avec ses outils de communication managériale.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de rôle, autodiagnostics, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Pratiquer l\'écoute active et l\'assertivité</li>
<li>Formuler un feedback selon la méthode DESC</li>
<li>Préparer et animer une réunion d\'équipe productive</li>
<li>Conduire un entretien de résolution de conflit</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Communication managériale plus efficace ; aisance dans les situations difficiles ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes mieux informées et plus sereines ; conflits traités plus tôt ; performance collective améliorée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-storytelling-personal-branding-et-leadership-professionnel',
		'titre'            => 'Storytelling, personal branding et leadership professionnel',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec votre pitch personnel et votre plan de personal branding.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cadres, managers, entrepreneurs, consultants, jeunes professionnels',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les ressorts du storytelling
Construire son récit professionnel et ses messages clés
Développer sa marque personnelle, notamment sur LinkedIn
Affirmer sa présence et son leadership en public',
		'jours'            => array(
			array(
				'titre'      => 'Storytelling',
				'matin'      => 'Pouvoir des histoires ; structure narrative.',
				'apres_midi' => 'Exemples ; ateliers d\'écriture.',
			),
			array(
				'titre'      => 'Personal branding',
				'matin'      => 'Identité professionnelle ; pitch personnel.',
				'apres_midi' => 'LinkedIn ; réseau.',
			),
			array(
				'titre'      => 'Leadership',
				'matin'      => 'Présence, voix, posture ; prise de parole filmée.',
				'apres_midi' => 'Plan de personal branding.',
			),
		),
		'livrables'        => 'Pitch personnel
Plan de personal branding',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'LinkedIn',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Savoir raconter son parcours et ses projets est un atout pour convaincre et se démarquer. Ce séminaire de 3 jours apprend à construire son récit professionnel, à développer sa marque personnelle en ligne et hors ligne et à affirmer son leadership. Chaque participant repart avec son pitch personnel et son plan de personal branding.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers d\'écriture, exercices filmés, coaching collectif.</p>
<h3>Compétences développées</h3>
<ul>
<li>Structurer une histoire selon le schéma narratif</li>
<li>Rédiger son pitch personnel de 60 secondes</li>
<li>Optimiser son profil LinkedIn et sa ligne éditoriale</li>
<li>Prendre la parole avec impact devant un groupe</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Image professionnelle affirmée ; aisance à l\'oral ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Collaborateurs ambassadeurs de l\'organisation ; leadership renforcé ; image employeur valorisée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-relations-publiques-relations-presse-et-communication',
		'titre'            => 'Relations publiques, relations presse et communication institutionnelle',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec un fichier presse et un plan de relations publiques.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de communication et de relations presse, responsables des relations institutionnelles, porte-parole',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre le fonctionnement des médias sénégalais
Construire et entretenir des relations avec les journalistes
Produire des supports de presse et institutionnels
Organiser des actions de relations publiques',
		'jours'            => array(
			array(
				'titre'      => 'Médias et relations',
				'matin'      => 'Paysage médiatique sénégalais ; attentes des journalistes.',
				'apres_midi' => 'Fichier presse ; relation durable.',
			),
			array(
				'titre'      => 'Supports',
				'matin'      => 'Communiqué, dossier de presse, éléments de langage ; rapport annuel.',
				'apres_midi' => 'Supports institutionnels.',
			),
			array(
				'titre'      => 'Actions de RP',
				'matin'      => 'Conférence de presse ; interview ; événements.',
				'apres_midi' => 'Mesure des retombées ; plan de RP.',
			),
		),
		'livrables'        => 'Fichier presse et plan de relations publiques
Modèles de communiqué et de dossier de presse',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les médias et les institutions restent des relais majeurs pour la réputation d\'une organisation. Ce séminaire de 3 jours apprend à construire des relations durables avec la presse, à produire des supports institutionnels et à organiser des événements de relations publiques. Chaque participant repart avec un fichier presse et un plan de relations publiques.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de rédaction, simulation de conférence de presse, interviews filmées.</p>
<h3>Compétences développées</h3>
<ul>
<li>Constituer et qualifier un fichier presse</li>
<li>Rédiger un communiqué et un dossier de presse</li>
<li>Préparer un porte-parole à une interview</li>
<li>Organiser une conférence de presse ou un événement institutionnel</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des relations presse et institutionnelles ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Couverture médiatique améliorée ; image institutionnelle renforcée ; relations solides avec les médias.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-responsable-rse-et-developpement-durable',
		'titre'            => 'Communication responsable, RSE et développement durable',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec un plan de communication RSE.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables RSE et communication, chargés de développement durable, dirigeants',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les enjeux de la RSE et du développement durable
Appliquer les principes de la communication responsable
Communiquer sur ses engagements RSE de façon crédible
Produire un rapport ou des supports de communication extra-financière',
		'jours'            => array(
			array(
				'titre'      => 'Enjeux',
				'matin'      => 'RSE, ISO 26000, objectifs de développement durable.',
				'apres_midi' => 'Attentes des parties prenantes au Sénégal.',
			),
			array(
				'titre'      => 'Communiquer juste',
				'matin'      => 'Communication responsable ; écoblanchiment.',
				'apres_midi' => 'Preuves et indicateurs ; supports éco-conçus.',
			),
			array(
				'titre'      => 'Rapporter',
				'matin'      => 'Rapport RSE ; référentiels.',
				'apres_midi' => 'Plan de communication RSE.',
			),
		),
		'livrables'        => 'Plan de communication RSE
Check-list anti-écoblanchiment',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les parties prenantes attendent des organisations des engagements sincères et vérifiables. Ce séminaire de 3 jours apprend à communiquer sur la RSE sans tomber dans l\'écoblanchiment et à appliquer les principes de la communication responsable. Chaque participant repart avec un plan de communication RSE.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de production sur les organisations des participants, études de cas, mises en situation filmées et débriefées, travail en sous-groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les engagements RSE à valoriser et les preuves associées</li>
<li>Repérer et éviter l\'écoblanchiment</li>
<li>Concevoir un plan de communication RSE pour chaque partie prenante</li>
<li>Structurer un rapport RSE selon les référentiels reconnus</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à communiquer de façon crédible sur la RSE ; outils réutilisables ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Réputation et confiance renforcées ; risques d\'image évités ; attractivité auprès des partenaires et talents.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-communication-commerciale-et-relation-client',
		'titre'            => 'Communication commerciale et relation client',
		'domaine'          => 'Communication',
		'hero'             => 'Repartez avec un guide de communication client.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Commerciaux, conseillers clientèle, agents d\'accueil, téléconseillers, chefs d\'agence',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Adopter une communication orientée client
Maîtriser l\'accueil physique, téléphonique et écrit
Argumenter et conseiller le client
Gérer les clients mécontents et les réclamations',
		'jours'            => array(
			array(
				'titre'      => 'Communiquer avec le client',
				'matin'      => 'Attitudes et écoute ; communication verbale et non verbale.',
				'apres_midi' => 'Accueil.',
			),
			array(
				'titre'      => 'Conseiller et vendre',
				'matin'      => 'Découverte des besoins ; argumentation.',
				'apres_midi' => 'Vente additionnelle ; écrits commerciaux.',
			),
			array(
				'titre'      => 'Situations difficiles',
				'matin'      => 'Clients mécontents ; réclamations.',
				'apres_midi' => 'Fidélisation ; mises en situation.',
			),
		),
		'livrables'        => 'Guide de communication client
Phrases clés et scripts d\'accueil',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Chaque échange avec un client, au téléphone, par message ou en face à face, construit ou abîme la relation. Ce séminaire de 3 jours développe les techniques de communication commerciale et d\'accueil pour mieux vendre et fidéliser. Chaque participant repart avec un guide de communication client.</p>
<p>Pédagogie active avec 70 % de pratique : jeux de rôle, simulations d\'appels, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Pratiquer l\'écoute active et la reformulation</li>
<li>Appliquer les standards d\'accueil et de communication écrite (emails, messages)</li>
<li>Présenter une offre en bénéfices client</li>
<li>Désamorcer un client mécontent et traiter une réclamation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Communication commerciale plus efficace ; aisance face aux clients difficiles ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Satisfaction et fidélité client améliorées ; ventes en hausse ; image de service professionnelle.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-management-et-leadership',
		'titre'            => 'Intelligence artificielle, management et leadership',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec votre feuille de route de manager augmenté par l\'IA.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, managers, chefs de service, responsables RH et de la transformation',
		'prerequis'        => 'Pratique des outils bureautiques ; aucune compétence technique requise.',
		'objectifs'        => 'Comprendre les principes, potentiels et limites de l\'IA
Utiliser l\'IA pour gagner du temps dans ses tâches de manager
Repenser l\'organisation du travail de l\'équipe avec l\'IA
Exercer un leadership responsable face à l\'IA',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre l\'IA',
				'matin'      => 'Notions clés ; panorama des outils.',
				'apres_midi' => 'Ce que l\'IA sait et ne sait pas faire ; enjeux pour l\'Afrique.',
			),
			array(
				'titre'      => 'Le manager augmenté',
				'matin'      => 'Usages pour préparer, synthétiser, rédiger, analyser, décider.',
				'apres_midi' => 'Ateliers outillés.',
			),
			array(
				'titre'      => 'Leadership',
				'matin'      => 'Organisation du travail ; compétences de l\'équipe.',
				'apres_midi' => 'Éthique et règles d\'usage ; feuille de route.',
			),
		),
		'livrables'        => 'Feuille de route du manager augmenté
Bibliothèque de prompts pour managers',
		'evaluation'       => 'Quiz final et présentation du plan d\'action. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'Copilot',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA modifie la manière de décider, d\'organiser le travail et de diriger les équipes. Ce séminaire de 3 jours aide les managers à comprendre l\'IA, à l\'utiliser dans leur pratique et à conduire leurs équipes dans cette transition. Chaque participant repart avec sa feuille de route de manager augmenté par l\'IA.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Distinguer IA générative, prédictive et automatisation</li>
<li>Utiliser un assistant IA pour préparer réunions, synthèses et décisions</li>
<li>Identifier les tâches de l\'équipe à automatiser ou à augmenter</li>
<li>Fixer des règles d\'usage et accompagner les craintes des collaborateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compréhension claire de l\'IA et usages concrets ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Managers capables de piloter l\'adoption de l\'IA ; gains de productivité ; transition maîtrisée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-cybersecurite-et-gouvernance',
		'titre'            => 'Intelligence artificielle, cybersécurité et gouvernance',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec une politique de sécurité de l\'IA.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'RSSI, DSI, responsables risques et conformité, auditeurs, dirigeants',
		'prerequis'        => 'Connaissances de base en informatique ou en gestion des risques.',
		'objectifs'        => 'Identifier les nouvelles menaces liées à l\'IA
Comprendre l\'apport de l\'IA à la cybersécurité défensive
Évaluer les risques liés à l\'usage de l\'IA dans l\'organisation
Mettre en place une gouvernance sécurisée de l\'IA',
		'jours'            => array(
			array(
				'titre'      => 'Menaces',
				'matin'      => 'Panorama des cybermenaces assistées par IA ; cas réels.',
				'apres_midi' => 'Risques propres aux modèles d\'IA.',
			),
			array(
				'titre'      => 'Défense',
				'matin'      => 'IA pour la détection et la réponse ; limites.',
				'apres_midi' => 'Protection des données ; environnements maîtrisés.',
			),
			array(
				'titre'      => 'Gouvernance',
				'matin'      => 'Cadre légal sénégalais et international ; politique de sécurité de l\'IA.',
				'apres_midi' => 'Sensibilisation des équipes.',
			),
		),
		'livrables'        => 'Politique de sécurité de l\'IA
Kit de sensibilisation aux attaques assistées par IA',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA est à la fois une arme pour les cyberattaquants et un outil de défense, et son usage crée de nouveaux risques de fuite de données. Ce séminaire de 3 jours présente les menaces liées à l\'IA, les usages défensifs et les règles de gouvernance à mettre en place. Chaque participant repart avec une politique de sécurité de l\'IA.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Reconnaître les attaques assistées par IA (hameçonnage, hypertrucages, fraude au président)</li>
<li>Évaluer les risques de fuite de données vers les outils d\'IA</li>
<li>Définir des règles de sécurité pour les usages de l\'IA</li>
<li>Rédiger une politique de sécurité de l\'IA et un plan de sensibilisation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des risques cyber liés à l\'IA ; outils de gouvernance ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Risques de fuite et d\'attaque réduits ; usage de l\'IA encadré ; conformité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-optimisation-des-performances',
		'titre'            => 'Intelligence artificielle et optimisation des performances',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec un portefeuille de cas d\'usage priorisés.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, responsables qualité et amélioration continue, chefs de projet, responsables opérationnels',
		'prerequis'        => 'Pratique des outils bureautiques.',
		'objectifs'        => 'Identifier les processus où l\'IA crée le plus de valeur
Choisir les outils d\'IA et d\'automatisation adaptés
Mettre en œuvre un premier cas d\'usage
Mesurer les gains de performance',
		'jours'            => array(
			array(
				'titre'      => 'Identifier',
				'matin'      => 'IA et performance ; cartographie des processus.',
				'apres_midi' => 'Repérage des cas d\'usage.',
			),
			array(
				'titre'      => 'Mettre en œuvre',
				'matin'      => 'Panorama des outils ; automatisation no code.',
				'apres_midi' => 'Atelier de construction d\'un cas d\'usage.',
			),
			array(
				'titre'      => 'Mesurer et déployer',
				'matin'      => 'Indicateurs de gain ; passage à l\'échelle.',
				'apres_midi' => 'Conduite du changement ; portefeuille de cas d\'usage.',
			),
		),
		'livrables'        => 'Portefeuille de cas d\'usage priorisés
Prototype d\'automatisation',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Make',
			'Zapier',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA permet d\'automatiser des tâches répétitives et d\'améliorer la qualité de nombreux processus. Ce séminaire de 3 jours apprend à identifier les processus à optimiser, à choisir les outils adaptés et à mesurer les gains. Chaque participant repart avec un portefeuille de cas d\'usage priorisés.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier un processus et repérer les tâches automatisables</li>
<li>Prioriser les cas d\'usage selon la valeur et la faisabilité</li>
<li>Construire une automatisation simple combinant IA et outils no code</li>
<li>Définir les indicateurs de gain (temps, qualité, coût)</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à transformer un processus avec l\'IA ; prototype opérationnel ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Gains de productivité mesurés ; erreurs réduites ; équipes recentrées sur les tâches à valeur.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-pilotage-intelligent-des',
		'titre'            => 'Intelligence artificielle et pilotage intelligent des projets',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec une boîte à outils IA pour vos projets.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, PMO, coordonnateurs de programmes, consultants',
		'prerequis'        => 'Expérience en gestion de projet.',
		'objectifs'        => 'Comprendre l\'apport de l\'IA à la gestion de projet
Utiliser l\'IA pour cadrer et planifier un projet
Automatiser le suivi et le reporting
Anticiper les risques avec l\'aide de l\'IA',
		'jours'            => array(
			array(
				'titre'      => 'Cadrer et planifier',
				'matin'      => 'IA et gestion de projet ; cadrage, découpage, estimation assistés.',
				'apres_midi' => 'Ateliers.',
			),
			array(
				'titre'      => 'Suivre et rapporter',
				'matin'      => 'Comptes rendus automatiques ; tableaux de bord.',
				'apres_midi' => 'Rapports d\'avancement.',
			),
			array(
				'titre'      => 'Anticiper',
				'matin'      => 'Analyse des risques ; scénarios.',
				'apres_midi' => 'Outils intégrant l\'IA ; limites et vérification.',
			),
		),
		'livrables'        => 'Boîte à outils IA du chef de projet
Modèles de rapports automatisés',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'Notion',
			'Trello',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Planification, suivi, reporting, analyse des risques : l\'IA peut assister le chef de projet à chaque étape. Ce séminaire de 3 jours fait pratiquer les outils d\'IA appliqués à la gestion de projet. Chaque participant repart avec une boîte à outils IA pour ses projets.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Générer une note de cadrage et un découpage des tâches avec un assistant IA</li>
<li>Produire des comptes rendus et rapports d\'avancement automatisés</li>
<li>Analyser les risques et les écarts à partir des données du projet</li>
<li>Choisir des outils de gestion de projet intégrant l\'IA</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Productivité accrue dans la gestion de projet ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets mieux suivis et rapportés ; risques anticipés ; temps administratif réduit.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-conduite-du-changement-et-adoption-de-l-ia-en-entreprise',
		'titre'            => 'Conduite du changement et adoption de l\'IA en entreprise',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec un plan de conduite du changement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables de la transformation, DRH, chefs de projet, managers, DSI',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les freins et leviers de l\'adoption de l\'IA
Diagnostiquer la maturité et les attentes de l\'organisation
Construire un plan de conduite du changement
Mesurer et pérenniser l\'adoption',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre',
				'matin'      => 'Dynamique du changement ; spécificités de l\'IA.',
				'apres_midi' => 'Craintes et attentes ; diagnostic de maturité.',
			),
			array(
				'titre'      => 'Mobiliser',
				'matin'      => 'Parties prenantes ; communication ; formation.',
				'apres_midi' => 'Ambassadeurs ; projets pilotes.',
			),
			array(
				'titre'      => 'Ancrer',
				'matin'      => 'Mesure de l\'adoption ; retours d\'expérience.',
				'apres_midi' => 'Pérennisation ; plan de conduite du changement.',
			),
		),
		'livrables'        => 'Plan de conduite du changement IA
Grille de diagnostic de maturité',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les projets d\'IA échouent plus souvent par manque d\'adoption que par limite technique. Ce séminaire de 3 jours apprend à conduire le changement lié à l\'IA : diagnostic, mobilisation, formation, accompagnement et mesure de l\'adoption. Chaque participant repart avec un plan de conduite du changement.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une analyse des parties prenantes et des résistances</li>
<li>Concevoir un dispositif de communication et de formation</li>
<li>Animer un réseau d\'ambassadeurs de l\'IA</li>
<li>Suivre les indicateurs d\'adoption et ajuster le plan</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de conduite du changement adaptée à l\'IA ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Adoption réelle des outils d\'IA ; retour sur investissement des projets ; résistances apaisées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-transformation-des',
		'titre'            => 'Intelligence artificielle et transformation des organisations',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec la feuille de route IA de votre organisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, membres de comités de direction, responsables de la stratégie et de la transformation',
		'prerequis'        => 'Aucun prérequis technique.',
		'objectifs'        => 'Mesurer l\'impact de l\'IA sur son secteur et ses métiers
Construire une vision et une stratégie IA
Adapter l\'organisation, les processus et les compétences
Piloter la transformation et ses risques',
		'jours'            => array(
			array(
				'titre'      => 'Impact',
				'matin'      => 'Tendances ; cas sectoriels.',
				'apres_midi' => 'Opportunités et menaces ; diagnostic par fonction.',
			),
			array(
				'titre'      => 'Stratégie',
				'matin'      => 'Vision ; priorités ; acheter ou construire.',
				'apres_midi' => 'Données et infrastructures ; partenaires.',
			),
			array(
				'titre'      => 'Transformation',
				'matin'      => 'Organisation et métiers ; compétences ; gouvernance.',
				'apres_midi' => 'Éthique ; feuille de route.',
			),
		),
		'livrables'        => 'Feuille de route IA de son organisation
Diagnostic d\'opportunités par fonction',
		'evaluation'       => 'Quiz final et présentation du plan d\'action. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Au-delà des outils, l\'IA transforme les modèles économiques, les métiers et les organisations. Ce séminaire de 3 jours aide les dirigeants à construire une stratégie IA, à repenser l\'organisation et à anticiper l\'évolution des compétences. Chaque participant repart avec la feuille de route IA de son organisation.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un diagnostic d\'opportunités IA par fonction</li>
<li>Formuler une ambition et des priorités IA</li>
<li>Anticiper l\'évolution des métiers et les besoins en compétences</li>
<li>Construire une feuille de route IA avec gouvernance et budget</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision stratégique de l\'IA ; méthode de transformation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Stratégie IA claire et partagée ; investissements priorisés ; compétitivité préparée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-ingenierie-de-la-formation',
		'titre'            => 'Intelligence artificielle et ingénierie de la formation',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec un module de formation conçu avec l\'IA.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables formation, ingénieurs pédagogiques, formateurs, concepteurs de contenus eLearning',
		'prerequis'        => 'Expérience en conception de formation.',
		'objectifs'        => 'Comprendre l\'apport de l\'IA à l\'ingénierie de formation
Concevoir des parcours et des scénarios pédagogiques avec l\'IA
Produire des contenus pédagogiques multimédias
Personnaliser l\'apprentissage et l\'évaluation',
		'jours'            => array(
			array(
				'titre'      => 'IA et pédagogie',
				'matin'      => 'Panorama des usages ; analyse des besoins.',
				'apres_midi' => 'Objectifs ; limites.',
			),
			array(
				'titre'      => 'Concevoir et produire',
				'matin'      => 'Scénarios ; supports ; quiz.',
				'apres_midi' => 'Études de cas ; vidéos ; ateliers de production.',
			),
			array(
				'titre'      => 'Personnaliser et évaluer',
				'matin'      => 'Tuteurs virtuels ; parcours adaptatifs ; évaluation.',
				'apres_midi' => 'Éthique ; module final.',
			),
		),
		'livrables'        => 'Module de formation conçu avec l\'IA
Bibliothèque de prompts pédagogiques',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'NotebookLM',
			'Canva',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'IA ouvre de nouvelles possibilités pour concevoir, produire et personnaliser les formations. Ce séminaire de 3 jours apprend aux professionnels de la formation à utiliser l\'IA à chaque étape de l\'ingénierie pédagogique. Chaque participant repart avec un module de formation conçu avec l\'IA.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser des besoins de formation avec l\'aide de l\'IA</li>
<li>Générer un scénario pédagogique et des objectifs</li>
<li>Produire supports, quiz, études de cas et vidéos avec l\'IA</li>
<li>Concevoir un tuteur virtuel et des évaluations adaptatives</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Productivité accrue en conception pédagogique ; module prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Formations produites plus vite et mieux personnalisées ; coûts de conception réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-intelligence-artificielle-et-gestion-de-l-e-reputation',
		'titre'            => 'Intelligence artificielle et gestion de l\'e-réputation',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec un dispositif de veille et un protocole de réponse.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables communication, community managers, responsables marketing et relation client',
		'prerequis'        => 'Pratique des réseaux sociaux.',
		'objectifs'        => 'Comprendre les mécanismes de l\'e-réputation
Mettre en place une veille assistée par IA
Analyser le sentiment et détecter les signaux faibles
Répondre aux avis et gérer les crises en ligne',
		'jours'            => array(
			array(
				'titre'      => 'E-réputation',
				'matin'      => 'Enjeux ; sources.',
				'apres_midi' => 'Acteurs ; audit de réputation en ligne.',
			),
			array(
				'titre'      => 'Veille et analyse',
				'matin'      => 'Outils de veille ; analyse de sentiment par IA.',
				'apres_midi' => 'Signaux faibles ; tableaux de bord.',
			),
			array(
				'titre'      => 'Agir',
				'matin'      => 'Réponses aux avis ; contenus positifs.',
				'apres_midi' => 'Crises en ligne ; protocole.',
			),
		),
		'livrables'        => 'Dispositif de veille e-réputation
Protocole de réponse et de gestion de crise en ligne',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Google Alerts',
			'Metricool',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Avis clients, réseaux sociaux, articles : la réputation en ligne se joue en permanence. Ce séminaire de 3 jours apprend à surveiller, analyser et gérer l\'e-réputation avec l\'aide de l\'IA. Chaque participant repart avec un dispositif de veille et un protocole de réponse.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Paramétrer des alertes et outils de veille</li>
<li>Analyser des avis et publications avec l\'IA (sentiment, thèmes)</li>
<li>Rédiger des réponses adaptées avec l\'assistance de l\'IA</li>
<li>Construire un protocole de gestion des crises en ligne</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la veille et de la gestion de l\'e-réputation ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Réputation en ligne protégée ; réactivité face aux critiques ; image renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-chatbots-intelligents-et-assistants-virtuels-pour-le',
		'titre'            => 'Chatbots intelligents et assistants virtuels pour le service après-vente',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec un prototype de chatbot.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables service client et SAV, responsables digitaux, chefs de projet relation client',
		'prerequis'        => 'Pratique des outils bureautiques ; aucune compétence en programmation requise.',
		'objectifs'        => 'Comprendre le fonctionnement des chatbots et assistants IA
Identifier les demandes clients à automatiser
Concevoir et construire un chatbot sans code
Piloter la qualité et l\'articulation avec les conseillers',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre',
				'matin'      => 'Types de chatbots ; IA conversationnelle.',
				'apres_midi' => 'Cas d\'usage SAV ; limites.',
			),
			array(
				'titre'      => 'Concevoir',
				'matin'      => 'Analyse des demandes ; scénarios.',
				'apres_midi' => 'Base de connaissances ; ton et personnalité.',
			),
			array(
				'titre'      => 'Construire et piloter',
				'matin'      => 'Outils sans code ; connexion WhatsApp ; tests.',
				'apres_midi' => 'Indicateurs ; amélioration continue.',
			),
		),
		'livrables'        => 'Prototype de chatbot SAV
Base de connaissances structurée',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'WhatsApp Business',
			'Voiceflow',
			'ChatGPT',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les chatbots permettent de répondre aux clients 24 heures sur 24, sur WhatsApp comme sur le site web. Ce séminaire de 3 jours apprend à concevoir, construire et piloter un assistant virtuel pour le service après-vente, sans compétence en programmation. Chaque participant repart avec un prototype de chatbot.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de construction sur poste, tests utilisateurs, travail sur les demandes réelles des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les demandes du service client et choisir celles à automatiser</li>
<li>Rédiger les scénarios de conversation et la base de connaissances</li>
<li>Construire un chatbot connecté à WhatsApp ou au site web</li>
<li>Mesurer la satisfaction et organiser le passage vers un conseiller</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à concevoir et piloter un chatbot ; prototype fonctionnel ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Service client disponible en continu ; temps de réponse réduits ; conseillers recentrés sur les cas complexes.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gouvernance-et-intelligence-artificielle',
		'titre'            => 'Gouvernance et intelligence artificielle',
		'domaine'          => 'Intelligence Artificielle',
		'hero'             => 'Repartez avec la charte et le cadre de gouvernance IA de votre organisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, responsables conformité, juristes, DSI, auditeurs, délégués à la protection des données',
		'prerequis'        => 'Aucun prérequis technique.',
		'objectifs'        => 'Connaître le cadre réglementaire et les principes éthiques de l\'IA
Identifier et évaluer les risques liés aux systèmes d\'IA
Définir les rôles, règles et processus de gouvernance
Contrôler et auditer les usages de l\'IA',
		'jours'            => array(
			array(
				'titre'      => 'Cadre',
				'matin'      => 'Principes éthiques ; protection des données.',
				'apres_midi' => 'Réglementations internationales ; stratégie nationale.',
			),
			array(
				'titre'      => 'Risques',
				'matin'      => 'Biais, opacité, sécurité, propriété intellectuelle.',
				'apres_midi' => 'Cartographie des usages et des risques.',
			),
			array(
				'titre'      => 'Gouvernance',
				'matin'      => 'Rôles et comités ; charte ; validation des cas d\'usage.',
				'apres_midi' => 'Contrôle et audit ; reporting.',
			),
		),
		'livrables'        => 'Charte et cadre de gouvernance IA
Cartographie des usages et des risques',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Utiliser l\'IA de façon responsable suppose des règles claires, des rôles définis et un contrôle des risques. Ce séminaire de 3 jours apprend à bâtir un cadre de gouvernance de l\'IA conforme aux réglementations et aux principes éthiques. Chaque participant repart avec la charte et le cadre de gouvernance IA de son organisation.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers outillés sur poste, cas d\'usage issus des organisations des participants, démonstrations, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les exigences de la protection des données au Sénégal et des cadres internationaux</li>
<li>Réaliser une cartographie des usages et des risques IA</li>
<li>Rédiger une charte IA et une procédure de validation des cas d\'usage</li>
<li>Mettre en place des contrôles et un reporting aux instances dirigeantes</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des principes de gouvernance de l\'IA ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Usages de l\'IA encadrés et conformes ; risques juridiques et réputationnels réduits ; confiance des parties prenantes.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-strategique-et-leadership',
		'titre'            => 'Management stratégique et leadership',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec la carte stratégique de votre entité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, membres de comités de direction, directeurs, cadres supérieurs',
		'prerequis'        => 'Expérience de management.',
		'objectifs'        => 'Analyser l\'environnement et les ressources de son organisation
Formuler une vision et des choix stratégiques
Décliner la stratégie en objectifs et en plans d\'action
Développer un leadership mobilisateur',
		'jours'            => array(
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Concepts de stratégie ; analyse externe et interne.',
				'apres_midi' => 'Avantage concurrentiel.',
			),
			array(
				'titre'      => 'Choisir et décliner',
				'matin'      => 'Vision et mission ; options stratégiques.',
				'apres_midi' => 'Carte stratégique ; objectifs et plans d\'action.',
			),
			array(
				'titre'      => 'Leadership',
				'matin'      => 'Styles de leadership ; communication de la stratégie.',
				'apres_midi' => 'Mobilisation ; conduite du changement.',
			),
		),
		'livrables'        => 'Carte stratégique de son entité
Autodiagnostic de leadership',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Dans un environnement incertain, les dirigeants doivent fixer un cap clair et entraîner leurs équipes. Ce séminaire de 3 jours apprend à formuler une stratégie, à la décliner en objectifs et à exercer un leadership qui mobilise. Chaque participant repart avec la carte stratégique de son entité.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une analyse stratégique (PESTEL, forces concurrentielles, SWOT)</li>
<li>Formuler une vision, une mission et des axes stratégiques</li>
<li>Construire une carte stratégique et des objectifs déclinés</li>
<li>Communiquer la stratégie et mobiliser les équipes</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision stratégique et outils de pilotage ; leadership renforcé ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Cap stratégique clair et partagé ; équipes alignées ; décisions plus cohérentes.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-de-la-performance-et-leadership-strategique',
		'titre'            => 'Management de la performance et leadership stratégique',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un tableau de bord prospectif de votre entité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, directeurs, managers, responsables du contrôle de gestion et de la qualité',
		'prerequis'        => 'Expérience de management.',
		'objectifs'        => 'Comprendre les dimensions de la performance d\'une organisation
Construire un système de pilotage aligné sur la stratégie
Animer la performance des équipes
Développer une culture du résultat et de l\'amélioration',
		'jours'            => array(
			array(
				'titre'      => 'Performance',
				'matin'      => 'Dimensions de la performance ; lien stratégie-résultats.',
				'apres_midi' => 'Balanced scorecard.',
			),
			array(
				'titre'      => 'Pilotage',
				'matin'      => 'Indicateurs et cibles ; tableau de bord prospectif.',
				'apres_midi' => 'Revues de performance.',
			),
			array(
				'titre'      => 'Leadership',
				'matin'      => 'Animation de la performance ; feedback.',
				'apres_midi' => 'Reconnaissance ; culture d\'amélioration continue.',
			),
		),
		'livrables'        => 'Tableau de bord prospectif de son entité
Trame de revue de performance',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Piloter la performance, c\'est relier la stratégie aux résultats de chaque équipe. Ce séminaire de 3 jours présente les outils de pilotage de la performance, dont le balanced scorecard, et le rôle du leader dans la culture du résultat. Chaque participant repart avec un tableau de bord prospectif de son entité.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Construire un balanced scorecard (finances, clients, processus, apprentissage)</li>
<li>Choisir des indicateurs pertinents et fixer des cibles</li>
<li>Conduire des revues de performance et des plans d\'amélioration</li>
<li>Reconnaître et motiver selon la performance</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils de pilotage de la performance ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Stratégie traduite en résultats mesurables ; équipes responsabilisées ; performance durablement améliorée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-des-ressources-humaines-et-du-capital-humain',
		'titre'            => 'Management des ressources humaines et du capital humain',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un diagnostic RH de votre organisation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables RH, managers, dirigeants de PME',
		'prerequis'        => 'Expérience de management ou de fonction RH.',
		'objectifs'        => 'Comprendre les enjeux stratégiques de la gestion du capital humain
Relier les politiques RH à la stratégie de l\'organisation
Maîtriser les principaux processus RH
Mesurer la contribution des RH à la performance',
		'jours'            => array(
			array(
				'titre'      => 'Stratégie RH',
				'matin'      => 'Capital humain ; rôle de la fonction RH.',
				'apres_midi' => 'Alignement stratégique ; diagnostic.',
			),
			array(
				'titre'      => 'Processus RH',
				'matin'      => 'Planification ; recrutement ; formation.',
				'apres_midi' => 'Évaluation ; rémunération ; relations sociales.',
			),
			array(
				'titre'      => 'Mesure',
				'matin'      => 'Indicateurs RH ; tableau de bord.',
				'apres_midi' => 'Marque employeur ; plan d\'action RH.',
			),
		),
		'livrables'        => 'Diagnostic RH de son organisation
Tableau de bord RH',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le capital humain est la première ressource stratégique des organisations. Ce séminaire de 3 jours donne aux managers et responsables RH une vision intégrée de la gestion des personnes : planification, acquisition, développement, rétention et mesure. Chaque participant repart avec un diagnostic RH de son organisation.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser un diagnostic de la fonction RH</li>
<li>Construire une politique RH alignée sur la stratégie</li>
<li>Articuler recrutement, formation, évaluation et rémunération</li>
<li>Piloter la fonction RH par des indicateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision intégrée de la gestion du capital humain ; outils de diagnostic ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Politique RH au service de la stratégie ; talents mieux gérés ; performance sociale mesurée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-de-projets-et-conduite-du-changement',
		'titre'            => 'Management de projets et conduite du changement',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un plan projet intégrant l\'accompagnement du changement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, managers, responsables de la transformation, DRH',
		'prerequis'        => 'Expérience en projet ou en management.',
		'objectifs'        => 'Piloter un projet de transformation de bout en bout
Comprendre la dynamique humaine du changement
Construire un plan d\'accompagnement du changement
Mesurer l\'adoption et ajuster le pilotage',
		'jours'            => array(
			array(
				'titre'      => 'Piloter le projet',
				'matin'      => 'Cadrage ; planification.',
				'apres_midi' => 'Gouvernance ; gestion des risques.',
			),
			array(
				'titre'      => 'Comprendre le changement',
				'matin'      => 'Courbe du changement ; résistances.',
				'apres_midi' => 'Parties prenantes ; modèles de conduite du changement.',
			),
			array(
				'titre'      => 'Accompagner',
				'matin'      => 'Communication ; formation ; ambassadeurs.',
				'apres_midi' => 'Mesure de l\'adoption ; plan intégré.',
			),
		),
		'livrables'        => 'Plan projet avec volet conduite du changement
Cartographie des parties prenantes',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Tout projet transforme l\'organisation, et sa réussite dépend de l\'adhésion des personnes concernées. Ce séminaire de 3 jours combine les outils de gestion de projet et ceux de la conduite du changement. Chaque participant repart avec un plan projet intégrant l\'accompagnement du changement.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cadrer et planifier un projet de transformation</li>
<li>Analyser les parties prenantes et les résistances</li>
<li>Concevoir les actions de communication, de formation et d\'accompagnement</li>
<li>Suivre les indicateurs d\'avancement et d\'adoption</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à piloter projet et changement ensemble ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Transformations réussies et adoptées ; résistances réduites ; délais tenus.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-commercial-et-developpement-des-affaires',
		'titre'            => 'Management commercial et développement des affaires',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un plan d\'action commercial.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs commerciaux, chefs des ventes, responsables d\'agence, responsables du développement',
		'prerequis'        => 'Expérience commerciale ou de management.',
		'objectifs'        => 'Définir une stratégie commerciale et des objectifs
Organiser et dimensionner la force de vente
Animer, motiver et accompagner les commerciaux
Piloter l\'activité et les résultats commerciaux',
		'jours'            => array(
			array(
				'titre'      => 'Stratégie',
				'matin'      => 'Analyse du portefeuille ; cibles.',
				'apres_midi' => 'Objectifs ; plan d\'action commercial.',
			),
			array(
				'titre'      => 'Organiser et animer',
				'matin'      => 'Organisation de la force de vente ; recrutement ; rémunération.',
				'apres_midi' => 'Coaching ; motivation.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Indicateurs ; pipeline ; prévisions.',
				'apres_midi' => 'Revues commerciales ; tableau de bord.',
			),
		),
		'livrables'        => 'Plan d\'action commercial
Tableau de bord commercial',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La croissance repose sur une équipe commerciale organisée, motivée et pilotée. Ce séminaire de 3 jours apprend à définir une stratégie commerciale, à organiser et animer une force de vente et à piloter les résultats. Chaque participant repart avec un plan d\'action commercial.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Segmenter le portefeuille clients et fixer les objectifs par secteur</li>
<li>Définir territoires, rôles et plans de tournée</li>
<li>Conduire un coaching commercial et des réunions d\'équipe</li>
<li>Construire un tableau de bord commercial et analyser le pipeline</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Outils de management commercial éprouvés ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Chiffre d\'affaires en croissance ; équipes commerciales plus performantes ; prévisions fiables.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-financier-et-gouvernance-d-entreprise',
		'titre'            => 'Management financier et gouvernance d\'entreprise',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec une grille de lecture des états financiers et une charte de gouvernance.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, administrateurs, directeurs non financiers, managers',
		'prerequis'        => 'Aucun prérequis financier.',
		'objectifs'        => 'Lire et interpréter les états financiers
Comprendre les décisions d\'investissement et de financement
Piloter la performance financière
Appliquer les principes de bonne gouvernance d\'entreprise',
		'jours'            => array(
			array(
				'titre'      => 'Lire les chiffres',
				'matin'      => 'États financiers ; soldes de gestion.',
				'apres_midi' => 'Ratios ; trésorerie.',
			),
			array(
				'titre'      => 'Décider',
				'matin'      => 'Investissement ; financement.',
				'apres_midi' => 'Budget ; création de valeur.',
			),
			array(
				'titre'      => 'Gouverner',
				'matin'      => 'Principes de gouvernance OHADA ; conseil d\'administration.',
				'apres_midi' => 'Comités ; contrôle et transparence.',
			),
		),
		'livrables'        => 'Grille de lecture des états financiers
Modèle de charte de gouvernance',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les dirigeants doivent comprendre les chiffres pour décider et rendre compte aux administrateurs. Ce séminaire de 3 jours donne les clés de la finance pour non-financiers et les principes de la bonne gouvernance. Chaque participant repart avec une grille de lecture des états financiers et une charte de gouvernance.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser un bilan et un compte de résultat avec les ratios clés</li>
<li>Évaluer la rentabilité d\'un investissement</li>
<li>Suivre un budget et un tableau de bord financier</li>
<li>Organiser le fonctionnement du conseil d\'administration et des comités</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compréhension financière solide ; maîtrise des principes de gouvernance ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décisions financières mieux éclairées ; gouvernance renforcée ; confiance des actionnaires et partenaires.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-de-l-innovation-et-de-la-transformation-digitale',
		'titre'            => 'Management de l\'innovation et de la transformation digitale',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un projet d\'innovation prototypé.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, managers, responsables innovation, chefs de projet digitaux',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les dynamiques de l\'innovation et du digital
Appliquer les méthodes d\'innovation centrées utilisateur
Construire une feuille de route de transformation digitale
Développer une culture d\'innovation',
		'jours'            => array(
			array(
				'titre'      => 'Innover',
				'matin'      => 'Types d\'innovation ; design thinking.',
				'apres_midi' => 'Atelier d\'idéation.',
			),
			array(
				'titre'      => 'Prototyper',
				'matin'      => 'Lean startup ; prototype.',
				'apres_midi' => 'Test auprès des utilisateurs ; itération.',
			),
			array(
				'titre'      => 'Transformer',
				'matin'      => 'Transformation digitale ; maturité.',
				'apres_midi' => 'Feuille de route ; culture d\'innovation.',
			),
		),
		'livrables'        => 'Projet d\'innovation prototypé
Feuille de route de transformation digitale',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Innover en continu et réussir sa transformation digitale sont devenus des conditions de survie. Ce séminaire de 3 jours présente les méthodes d\'innovation (design thinking, lean startup) et la démarche de transformation digitale. Chaque participant repart avec un projet d\'innovation prototypé.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de design thinking, prototypage rapide, pitch final.</p>
<h3>Compétences développées</h3>
<ul>
<li>Animer un atelier de design thinking</li>
<li>Prototyper et tester une idée selon la démarche lean startup</li>
<li>Évaluer la maturité digitale et prioriser les chantiers</li>
<li>Mettre en place un dispositif d\'innovation participative</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodes d\'innovation pratiquées ; projet concret ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Nouvelles offres et processus ; transformation digitale pilotée ; culture d\'innovation installée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-sectoriel-adapte-au-marche-senegalais',
		'titre'            => 'Management sectoriel adapté au marché sénégalais',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un plan de management adapté à votre secteur.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, managers, cadres expatriés ou de la diaspora, entrepreneurs',
		'prerequis'        => 'Expérience de management.',
		'objectifs'        => 'Comprendre l\'environnement économique et institutionnel sénégalais
Adapter les pratiques managériales aux réalités culturelles locales
Analyser les spécificités des secteurs clés
Construire un plan de management adapté à son secteur',
		'jours'            => array(
			array(
				'titre'      => 'Environnement',
				'matin'      => 'Économie sénégalaise ; politiques publiques.',
				'apres_midi' => 'Secteurs porteurs ; cadre institutionnel.',
			),
			array(
				'titre'      => 'Culture et management',
				'matin'      => 'Valeurs ; hiérarchie et relations ; communication.',
				'apres_midi' => 'Motivation ; dialogue social.',
			),
			array(
				'titre'      => 'Secteurs',
				'matin'      => 'Études de cas sectorielles ; parties prenantes.',
				'apres_midi' => 'Plan de management adapté.',
			),
		),
		'livrables'        => 'Plan de management sectoriel
Fiches synthèse sectorielles',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Manager au Sénégal suppose de composer avec des réalités culturelles, sociales et économiques propres. Ce séminaire de 3 jours adapte les pratiques managériales au contexte local et aux secteurs clés de l\'économie sénégalaise. Chaque participant repart avec un plan de management adapté à son secteur.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les opportunités du Plan Sénégal et des secteurs porteurs</li>
<li>Intégrer les valeurs et codes culturels dans le management d\'équipe</li>
<li>Gérer les relations avec l\'administration, les partenaires et les communautés</li>
<li>Élaborer un plan d\'action managérial sectoriel</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Pratiques managériales adaptées au contexte local ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Management mieux accepté et plus efficace ; relations améliorées avec l\'écosystème local.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-des-equipes-et-developpement-du-leadership',
		'titre'            => 'Management des équipes et développement du leadership',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec votre plan de développement du leadership.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers confirmés, chefs de service, directeurs, hauts potentiels',
		'prerequis'        => 'Expérience d\'encadrement.',
		'objectifs'        => 'Mieux se connaître en tant que leader
Développer l\'autonomie et les compétences de ses collaborateurs
Construire une équipe soudée et performante
Incarner un leadership inspirant au quotidien',
		'jours'            => array(
			array(
				'titre'      => 'Soi comme leader',
				'matin'      => 'Autodiagnostic ; intelligence émotionnelle.',
				'apres_midi' => 'Valeurs ; vision personnelle.',
			),
			array(
				'titre'      => 'Développer les autres',
				'matin'      => 'Coaching ; délégation.',
				'apres_midi' => 'Feedback ; développement des talents.',
			),
			array(
				'titre'      => 'L\'équipe',
				'matin'      => 'Dynamique de groupe ; cohésion.',
				'apres_midi' => 'Coopération ; plan de développement du leadership.',
			),
		),
		'livrables'        => 'Autodiagnostic de leadership
Plan de développement du leadership',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le leadership se développe par la connaissance de soi et la pratique. Ce séminaire de 3 jours aide les managers à affirmer leur leadership, à développer leurs collaborateurs et à construire des équipes performantes. Chaque participant repart avec son plan de développement du leadership.</p>
<p>Pédagogie active avec 70 % de pratique : autodiagnostics, jeux de rôle, exercices de cohésion, coaching collectif.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier ses forces et axes de progrès de leader</li>
<li>Pratiquer le coaching et la délégation</li>
<li>Animer la cohésion et la coopération dans l\'équipe</li>
<li>Établir son plan de développement du leadership</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Leadership affirmé et outils de développement des équipes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes plus autonomes et engagées ; relève managériale préparée ; performance collective accrue.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-par-objectifs-et-pilotage-des-kpi',
		'titre'            => 'Management par objectifs et pilotage des KPI',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec la cascade d\'objectifs et le tableau de bord de votre équipe.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, chefs de service, responsables d\'équipe, contrôleurs de gestion',
		'prerequis'        => 'Expérience de management.',
		'objectifs'        => 'Comprendre les principes du management par objectifs
Fixer et décliner des objectifs SMART
Choisir et suivre des indicateurs clés de performance
Conduire des revues d\'objectifs et ajuster l\'action',
		'jours'            => array(
			array(
				'titre'      => 'Objectifs',
				'matin'      => 'Management par objectifs ; OKR.',
				'apres_midi' => 'Déclinaison ; objectifs SMART.',
			),
			array(
				'titre'      => 'Indicateurs',
				'matin'      => 'Choix des KPI ; fiches indicateurs.',
				'apres_midi' => 'Cibles ; tableau de bord.',
			),
			array(
				'titre'      => 'Pilotage',
				'matin'      => 'Revues de performance ; analyse des écarts.',
				'apres_midi' => 'Plans d\'action ; entretiens d\'objectifs.',
			),
		),
		'livrables'        => 'Cascade d\'objectifs de son équipe
Tableau de bord KPI',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Fixer des objectifs clairs et suivre les bons indicateurs permet à chacun de savoir où il va. Ce séminaire de 3 jours apprend à déployer un management par objectifs et à piloter l\'activité par les KPI. Chaque participant repart avec la cascade d\'objectifs et le tableau de bord de son équipe.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Décliner les objectifs de l\'organisation jusqu\'à l\'équipe et à l\'individu</li>
<li>Rédiger des objectifs SMART et des OKR</li>
<li>Construire des fiches KPI et un tableau de bord</li>
<li>Animer une revue mensuelle de performance</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise du pilotage par objectifs ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes alignées et responsabilisées ; performance suivie ; décisions plus rapides.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-des-risques',
		'titre'            => 'Management des risques',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec la cartographie des risques de votre entité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables risques, dirigeants, auditeurs, contrôleurs internes, responsables qualité',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les principes du management des risques (ISO 31000)
Identifier et évaluer les risques de l\'organisation
Définir et suivre des plans de traitement
Intégrer le management des risques dans la gouvernance',
		'jours'            => array(
			array(
				'titre'      => 'Principes',
				'matin'      => 'Notions de risque ; ISO 31000.',
				'apres_midi' => 'Appétence au risque ; organisation.',
			),
			array(
				'titre'      => 'Identifier et évaluer',
				'matin'      => 'Méthodes d\'identification ; évaluation.',
				'apres_midi' => 'Cartographie ; atelier pratique.',
			),
			array(
				'titre'      => 'Traiter et suivre',
				'matin'      => 'Plans de traitement ; indicateurs de risque.',
				'apres_midi' => 'Continuité d\'activité ; reporting.',
			),
		),
		'livrables'        => 'Cartographie des risques de son entité
Modèle de plan de traitement',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Anticiper les risques permet de protéger l\'organisation et de saisir les opportunités. Ce séminaire de 3 jours présente la démarche de management des risques selon la norme ISO 31000 : identification, évaluation, traitement et suivi. Chaque participant repart avec la cartographie des risques de son entité.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Animer un atelier d\'identification des risques</li>
<li>Construire une cartographie des risques avec échelle de criticité</li>
<li>Rédiger des plans de traitement et désigner les responsables</li>
<li>Assurer le reporting des risques aux instances</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Démarche de management des risques maîtrisée ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Risques anticipés et maîtrisés ; résilience accrue ; gouvernance renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-des-structures-sanitaires',
		'titre'            => 'Management des structures sanitaires',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un plan d\'amélioration de votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs d\'hôpitaux, médecins-chefs, majors, gestionnaires de structures de santé, responsables de districts',
		'prerequis'        => 'Expérience dans une structure de santé.',
		'objectifs'        => 'Comprendre l\'organisation du système de santé sénégalais
Manager les équipes soignantes et administratives
Gérer les ressources financières et matérielles
Piloter la qualité des soins et la performance',
		'jours'            => array(
			array(
				'titre'      => 'Système et organisation',
				'matin'      => 'Système de santé sénégalais ; organisation d\'une structure.',
				'apres_midi' => 'Flux de patients.',
			),
			array(
				'titre'      => 'Ressources',
				'matin'      => 'Management des équipes ; plannings ; budget.',
				'apres_midi' => 'Couverture maladie universelle ; achats et stocks.',
			),
			array(
				'titre'      => 'Qualité et pilotage',
				'matin'      => 'Qualité et sécurité des soins ; satisfaction des patients.',
				'apres_midi' => 'Indicateurs ; plan d\'amélioration.',
			),
		),
		'livrables'        => 'Plan d\'amélioration de sa structure
Tableau de bord de pilotage',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Hôpitaux, centres et postes de santé doivent concilier qualité des soins, ressources limitées et attentes des patients. Ce séminaire de 3 jours apprend à manager une structure sanitaire : organisation, ressources humaines, finances, qualité et pilotage. Chaque participant repart avec un plan d\'amélioration de sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser l\'organisation et les flux de patients de sa structure</li>
<li>Organiser les plannings et animer les équipes</li>
<li>Élaborer un budget et suivre les recettes et dépenses</li>
<li>Mettre en place des indicateurs de qualité et de performance</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compétences managériales adaptées au secteur de la santé ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Structures mieux gérées ; qualité des soins améliorée ; ressources optimisées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-du-sport-modelisation-economique-et-evenementiel',
		'titre'            => 'Management du sport (modélisation économique et événementiel sportif)',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un modèle économique ou un plan d\'événement.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants de clubs et fédérations, organisateurs d\'événements, responsables marketing sportif, collectivités',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre l\'économie et les acteurs du sport
Construire un modèle économique pour une organisation sportive
Organiser un événement sportif de A à Z
Développer partenariats et sponsoring',
		'jours'            => array(
			array(
				'titre'      => 'Économie du sport',
				'matin'      => 'Acteurs ; marché.',
				'apres_midi' => 'Modèles économiques ; gouvernance des organisations sportives.',
			),
			array(
				'titre'      => 'Modéliser',
				'matin'      => 'Revenus et charges ; droits, billetterie, sponsoring.',
				'apres_midi' => 'Budget ; modèle économique.',
			),
			array(
				'titre'      => 'Événementiel',
				'matin'      => 'Organisation d\'événements ; logistique et sécurité ; communication.',
				'apres_midi' => 'Sponsoring ; bilan.',
			),
		),
		'livrables'        => 'Modèle économique ou plan d\'événement sportif
Offre de sponsoring type',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le sport est devenu une industrie, au Sénégal comme ailleurs, avec les Jeux olympiques de la jeunesse Dakar 2026 en vitrine. Ce séminaire de 3 jours présente l\'économie du sport, les modèles économiques des clubs et fédérations et l\'organisation d\'événements sportifs. Chaque participant repart avec un modèle économique ou un plan d\'événement.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les sources de revenus d\'un club ou d\'une fédération</li>
<li>Élaborer un budget et un modèle économique</li>
<li>Planifier un événement : logistique, sécurité, billetterie, communication</li>
<li>Construire une offre de sponsoring et négocier avec les partenaires</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compétences de gestion adaptées au sport ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Organisations sportives plus viables ; événements mieux organisés ; partenariats développés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-territorial',
		'titre'            => 'Management territorial',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec un plan d\'action de développement territorial.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Élus locaux, secrétaires municipaux, agents des collectivités territoriales, agents de développement local',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre le cadre de la décentralisation au Sénégal
Élaborer et suivre un plan de développement territorial
Mobiliser les ressources financières des collectivités
Impliquer les citoyens et les partenaires',
		'jours'            => array(
			array(
				'titre'      => 'Cadre',
				'matin'      => 'Code général des collectivités territoriales ; compétences transférées.',
				'apres_midi' => 'Acteurs du développement local.',
			),
			array(
				'titre'      => 'Planifier et financer',
				'matin'      => 'Diagnostic territorial ; plan de développement ; budget.',
				'apres_midi' => 'Fiscalité locale ; partenariats.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Gestion des services ; participation citoyenne.',
				'apres_midi' => 'Suivi-évaluation ; redevabilité.',
			),
		),
		'livrables'        => 'Plan d\'action de développement territorial
Grille de diagnostic territorial',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La décentralisation confie aux collectivités territoriales des compétences croissantes en matière de développement local. Ce séminaire de 3 jours apprend à planifier, financer et piloter l\'action territoriale. Chaque participant repart avec un plan d\'action de développement territorial.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les compétences transférées et l\'organisation de sa collectivité</li>
<li>Construire un plan de développement communal ou départemental</li>
<li>Élaborer un budget et mobiliser des ressources propres et extérieures</li>
<li>Organiser la participation citoyenne et la redevabilité</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Compétences de pilotage de l\'action locale ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Collectivités mieux gérées ; services publics locaux améliorés ; ressources mobilisées.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-du-petrole-et-du-gaz',
		'titre'            => 'Management du pétrole et du gaz',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec une vision complète du secteur et de vos opportunités.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cadres d\'entreprises et d\'administrations du secteur, fournisseurs et sous-traitants, banquiers, consultants',
		'prerequis'        => 'Aucun prérequis technique.',
		'objectifs'        => 'Comprendre la chaîne de valeur du pétrole et du gaz
Maîtriser le cadre juridique et contractuel du secteur au Sénégal
Analyser l\'économie d\'un projet pétrolier ou gazier
Saisir les opportunités du contenu local',
		'jours'            => array(
			array(
				'titre'      => 'Chaîne de valeur',
				'matin'      => 'Amont, intermédiaire, aval ; projets sénégalais.',
				'apres_midi' => 'Acteurs.',
			),
			array(
				'titre'      => 'Cadre et contrats',
				'matin'      => 'Code pétrolier ; contrats de partage de production.',
				'apres_midi' => 'Fiscalité ; gouvernance et transparence.',
			),
			array(
				'titre'      => 'Économie et contenu local',
				'matin'      => 'Économie des projets ; gestion des risques.',
				'apres_midi' => 'Loi sur le contenu local ; opportunités.',
			),
		),
		'livrables'        => 'Synthèse de la chaîne de valeur et des contrats
Grille d\'opportunités contenu local',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'exploitation pétrolière et gazière transforme l\'économie sénégalaise et ouvre de nouveaux métiers. Ce séminaire de 3 jours présente la chaîne de valeur, les contrats, l\'économie des projets et les enjeux du contenu local. Chaque participant repart avec une vision complète du secteur et de ses opportunités.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Décrire les étapes de l\'exploration à la commercialisation</li>
<li>Analyser les principales clauses d\'un contrat de partage de production</li>
<li>Lire les indicateurs économiques d\'un projet (coûts, revenus, partage)</li>
<li>Identifier les exigences et opportunités du contenu local pour son entreprise</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision complète du secteur pétrolier et gazier ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Positionnement sur les opportunités du secteur ; compétences locales renforcées ; conformité au contenu local.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-et-diagnostic-commercial',
		'titre'            => 'Management et diagnostic commercial',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec le diagnostic commercial de votre activité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs commerciaux, chefs des ventes, dirigeants de PME, consultants',
		'prerequis'        => 'Expérience commerciale ; pratique d\'Excel.',
		'objectifs'        => 'Réaliser un diagnostic de l\'activité commerciale
Analyser le portefeuille clients, produits et la force de vente
Identifier les leviers de croissance
Construire un plan d\'action commercial',
		'jours'            => array(
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Méthode de diagnostic ; analyse des ventes.',
				'apres_midi' => 'Portefeuille clients et produits.',
			),
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Organisation commerciale ; compétences.',
				'apres_midi' => 'Processus ; concurrence.',
			),
			array(
				'titre'      => 'Agir',
				'matin'      => 'Leviers de croissance ; plan d\'action commercial.',
				'apres_midi' => 'Indicateurs ; présentation.',
			),
		),
		'livrables'        => 'Diagnostic commercial de son activité
Plan d\'action commercial',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Avant de fixer des objectifs commerciaux, il faut comprendre ce qui fonctionne et ce qui freine. Ce séminaire de 3 jours apprend à réaliser un diagnostic commercial complet et à en tirer un plan d\'action. Chaque participant repart avec le diagnostic commercial de son activité.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Analyser les ventes par client, produit, zone et canal</li>
<li>Évaluer l\'organisation et les compétences de la force de vente</li>
<li>Réaliser une matrice des forces et faiblesses commerciales</li>
<li>Définir des actions prioritaires et des indicateurs</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de diagnostic commercial ; outils d\'analyse ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Leviers de croissance identifiés ; actions commerciales priorisées ; résultats améliorés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-knowledge-management',
		'titre'            => 'Knowledge management',
		'domaine'          => 'Management',
		'hero'             => 'Repartez avec une démarche de knowledge management adaptée à votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables formation, qualité et organisation, managers, documentalistes',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Comprendre les enjeux et concepts du knowledge management
Identifier les connaissances critiques de l\'organisation
Capitaliser et partager les savoirs
Piloter une démarche de knowledge management',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre',
				'matin'      => 'Savoirs tacites et explicites ; enjeux.',
				'apres_midi' => 'Cartographie des connaissances critiques.',
			),
			array(
				'titre'      => 'Capitaliser et partager',
				'matin'      => 'Entretiens de capitalisation ; retours d\'expérience.',
				'apres_midi' => 'Communautés de pratique ; outils.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Gouvernance ; rôles ; indicateurs.',
				'apres_midi' => 'Conduite du changement ; démarche KM.',
			),
		),
		'livrables'        => 'Démarche de knowledge management
Modèle de fiche de capitalisation',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le savoir des collaborateurs est un actif précieux qui se perd avec les départs et les réorganisations. Ce séminaire de 3 jours apprend à identifier, capitaliser, partager et valoriser les connaissances de l\'organisation. Chaque participant repart avec une démarche de knowledge management adaptée à sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas d\'organisations sénégalaises et africaines, autodiagnostics, ateliers sur les situations réelles des participants, travaux en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les savoirs critiques et les risques de perte</li>
<li>Conduire un entretien de capitalisation et rédiger une fiche de savoir</li>
<li>Animer une communauté de pratique</li>
<li>Définir les outils, rôles et indicateurs de la démarche</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de capitalisation des savoirs ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Savoir-faire préservé ; intégration des nouveaux accélérée ; innovation favorisée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-suivi-evaluation-et-pilotage-de-la-performance-des-projets',
		'titre'            => 'Suivi-évaluation et pilotage de la performance des projets',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec le cadre de mesure de la performance d\'un projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de suivi-évaluation, chefs de projet, coordonnateurs de programmes, agents de planification',
		'prerequis'        => 'Expérience dans un projet ou un programme.',
		'objectifs'        => 'Distinguer suivi, évaluation et pilotage de la performance
Construire un cadre de mesure de la performance
Collecter et analyser les données de suivi
Utiliser les résultats pour décider et rendre compte',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux',
				'matin'      => 'Concepts ; chaîne de résultats.',
				'apres_midi' => 'Rôles du suivi et de l\'évaluation.',
			),
			array(
				'titre'      => 'Mesurer',
				'matin'      => 'Indicateurs ; cadre de mesure de la performance.',
				'apres_midi' => 'Collecte et qualité des données.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Analyse ; revues de performance.',
				'apres_midi' => 'Rapportage ; utilisation des résultats.',
			),
		),
		'livrables'        => 'Cadre de mesure de la performance
Modèle de rapport de performance',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un projet bien suivi est un projet qui s\'ajuste à temps et démontre ses résultats. Ce séminaire de 3 jours présente les fondamentaux du suivi-évaluation et leur usage pour piloter la performance des projets. Chaque participant repart avec le cadre de mesure de la performance d\'un projet.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Formuler des indicateurs de réalisation, de résultat et d\'impact</li>
<li>Construire un cadre de mesure avec situation de référence, cibles et sources</li>
<li>Organiser la collecte et la qualité des données</li>
<li>Produire un rapport de performance et des recommandations</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Bases solides en suivi-évaluation ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets pilotés par les résultats ; redevabilité renforcée ; décisions plus rapides.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-conception-et-mise-en-place-d-un-systeme-de-suivi-evaluation',
		'titre'            => 'Conception et mise en place d\'un système de suivi-évaluation',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec la trame du manuel de suivi-évaluation de votre projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables et chargés de suivi-évaluation, chefs de projet, cellules d\'exécution, ONG',
		'prerequis'        => 'Notions de suivi-évaluation.',
		'objectifs'        => 'Concevoir l\'architecture d\'un système de suivi-évaluation
Définir les outils de collecte et les circuits d\'information
Organiser les rôles, responsabilités et calendriers
Rédiger un manuel de suivi-évaluation',
		'jours'            => array(
			array(
				'titre'      => 'Architecture',
				'matin'      => 'Composantes d\'un système de suivi-évaluation ; acteurs.',
				'apres_midi' => 'Flux d\'information.',
			),
			array(
				'titre'      => 'Outils',
				'matin'      => 'Plan de suivi-évaluation ; fiches de collecte.',
				'apres_midi' => 'Collecte mobile ; base de données.',
			),
			array(
				'titre'      => 'Opérationnaliser',
				'matin'      => 'Rôles ; calendrier ; contrôle qualité.',
				'apres_midi' => 'Manuel de procédures ; budget du système.',
			),
		),
		'livrables'        => 'Trame de manuel de suivi-évaluation
Fiches de collecte types',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'KoboToolbox',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un système de suivi-évaluation efficace repose sur des outils, des rôles et des circuits d\'information bien définis. Ce séminaire de 3 jours apprend à concevoir et opérationnaliser un tel système, du manuel de procédures à la base de données. Chaque participant repart avec la trame du manuel de suivi-évaluation de son projet.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Établir le plan de suivi-évaluation (indicateurs, fréquence, responsables)</li>
<li>Concevoir des fiches et formulaires de collecte, y compris sur mobile</li>
<li>Structurer une base de données de suivi</li>
<li>Rédiger les procédures et le calendrier de rapportage</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à concevoir un système complet ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Système de suivi fiable et opérationnel ; données disponibles à temps ; exigences des bailleurs satisfaites.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-evaluation-des-projets-et-mesure-d-impact',
		'titre'            => 'Évaluation des projets et mesure d\'impact',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec les termes de référence d\'une évaluation.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de suivi-évaluation, chefs de projet, chargés de programmes, consultants évaluateurs',
		'prerequis'        => 'Notions de suivi-évaluation et de statistiques.',
		'objectifs'        => 'Connaître les types d\'évaluation et les critères de l\'OCDE
Choisir une méthode d\'évaluation adaptée
Mesurer l\'impact par des approches quantitatives et qualitatives
Piloter une évaluation et en utiliser les résultats',
		'jours'            => array(
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Types d\'évaluation ; critères de l\'OCDE.',
				'apres_midi' => 'Questions évaluatives ; théorie du changement.',
			),
			array(
				'titre'      => 'Mesurer l\'impact',
				'matin'      => 'Contrefactuel ; méthodes quantitatives.',
				'apres_midi' => 'Méthodes qualitatives et mixtes ; échantillonnage.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Termes de référence ; sélection et suivi des évaluateurs.',
				'apres_midi' => 'Rapport ; utilisation des résultats.',
			),
		),
		'livrables'        => 'Termes de référence d\'une évaluation
Matrice d\'évaluation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Démontrer l\'impact d\'un projet est devenu une exigence des bailleurs et des décideurs. Ce séminaire de 3 jours présente les méthodes d\'évaluation et de mesure d\'impact, des critères de l\'OCDE aux approches quantitatives et qualitatives. Chaque participant repart avec les termes de référence d\'une évaluation.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Formuler des questions évaluatives selon les critères de pertinence, efficacité, efficience, impact et durabilité</li>
<li>Choisir entre approches expérimentales, quasi expérimentales et qualitatives</li>
<li>Concevoir un échantillon et des outils d\'enquête</li>
<li>Rédiger des termes de référence et piloter un évaluateur externe</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des méthodes d\'évaluation ; capacité à piloter une évaluation ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Impact démontré aux partenaires ; programmes améliorés grâce aux enseignements ; crédibilité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-axee-sur-les-resultats-gar-et-pilotage-de-projets',
		'titre'            => 'Gestion axée sur les résultats (GAR) et pilotage de projets',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec le plan de travail axé sur les résultats d\'un projet.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, chargés de programmes, agents de planification, responsables de cellules d\'exécution',
		'prerequis'        => 'Expérience dans un projet ou un programme.',
		'objectifs'        => 'Maîtriser les principes et outils de la GAR
Planifier et budgétiser par les résultats
Piloter le projet à partir des résultats
Rendre compte des résultats aux partenaires',
		'jours'            => array(
			array(
				'titre'      => 'Principes',
				'matin'      => 'Origine et principes de la GAR ; chaîne de résultats.',
				'apres_midi' => 'Théorie du changement.',
			),
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Plan de travail annuel ; budget par résultats.',
				'apres_midi' => 'Gestion des risques.',
			),
			array(
				'titre'      => 'Piloter et rendre compte',
				'matin'      => 'Revues de résultats ; ajustements.',
				'apres_midi' => 'Rapport axé sur les résultats.',
			),
		),
		'livrables'        => 'Plan de travail axé sur les résultats
Modèle de rapport axé sur les résultats',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La GAR oriente toute l\'action du projet vers les changements attendus plutôt que vers les seules activités. Ce séminaire de 3 jours fait appliquer la GAR à chaque étape du pilotage : planification, budgétisation, suivi et rapportage. Chaque participant repart avec le plan de travail axé sur les résultats d\'un projet.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Construire une chaîne de résultats et une théorie du changement</li>
<li>Élaborer un plan de travail annuel axé sur les résultats</li>
<li>Animer des revues de résultats et décider des ajustements</li>
<li>Rédiger un rapport axé sur les résultats</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Pratique de la GAR appliquée au pilotage ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets orientés vers les changements attendus ; ressources mieux allouées ; redevabilité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-tableau-de-bord-et-reporting-strategique-des-projets',
		'titre'            => 'Tableau de bord et reporting stratégique des projets',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec un tableau de bord de projets sous Excel ou Power BI.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, PMO, chargés de suivi-évaluation, responsables de la planification',
		'prerequis'        => 'Pratique d\'Excel.',
		'objectifs'        => 'Identifier les besoins d\'information des décideurs
Concevoir un tableau de bord de projet et de portefeuille
Automatiser la consolidation des données
Produire un reporting stratégique clair et utile',
		'jours'            => array(
			array(
				'titre'      => 'Besoins',
				'matin'      => 'Attentes des décideurs ; niveaux de reporting.',
				'apres_midi' => 'Indicateurs clés.',
			),
			array(
				'titre'      => 'Construire',
				'matin'      => 'Tableau de bord sous Excel ou Power BI ; visualisation.',
				'apres_midi' => 'Alertes ; consolidation.',
			),
			array(
				'titre'      => 'Rapporter',
				'matin'      => 'Note de synthèse ; présentation au comité.',
				'apres_midi' => 'Fréquence et circuit du reporting.',
			),
		),
		'livrables'        => 'Tableau de bord de projets
Modèle de note de synthèse',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'Power BI',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les décideurs ont besoin d\'une information synthétique, fiable et à jour sur l\'avancement de leurs projets. Ce séminaire de 3 jours apprend à concevoir des tableaux de bord et un reporting stratégique de portefeuille de projets. Chaque participant repart avec un tableau de bord de projets sous Excel ou Power BI.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Choisir les indicateurs d\'avancement physique, financier et de résultats</li>
<li>Construire un tableau de bord avec alertes visuelles</li>
<li>Consolider les données de plusieurs projets</li>
<li>Rédiger une note de synthèse pour la direction</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à produire un reporting stratégique ; tableau de bord opérationnel ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décideurs mieux informés ; dérives détectées plus tôt ; pilotage du portefeuille renforcé.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-tableau-de-bord-outils-d-aide-a-la-decision',
		'titre'            => 'Tableau de bord : outils d\'aide à la décision',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec le tableau de bord de votre service.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, chefs de service, contrôleurs de gestion, responsables qualité',
		'prerequis'        => 'Pratique d\'Excel.',
		'objectifs'        => 'Comprendre le rôle du tableau de bord dans la décision
Définir les objectifs et les indicateurs pertinents
Concevoir un tableau de bord lisible et actionnable
Animer le pilotage à partir du tableau de bord',
		'jours'            => array(
			array(
				'titre'      => 'Décider',
				'matin'      => 'Tableau de bord et décision ; méthode de conception.',
				'apres_midi' => 'Objectifs et leviers d\'action.',
			),
			array(
				'titre'      => 'Indicateurs',
				'matin'      => 'Choix des indicateurs ; fiches indicateurs.',
				'apres_midi' => 'Cibles et seuils d\'alerte.',
			),
			array(
				'titre'      => 'Construire et animer',
				'matin'      => 'Mise en forme visuelle ; automatisation.',
				'apres_midi' => 'Réunions de pilotage ; amélioration continue.',
			),
		),
		'livrables'        => 'Tableau de bord de son service
Fiches indicateurs',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un bon tableau de bord aide à décider vite et bien, quel que soit le métier. Ce séminaire de 3 jours apprend à concevoir des tableaux de bord centrés sur les décisions à prendre et à les faire vivre. Chaque participant repart avec le tableau de bord de son service.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Partir des décisions à prendre pour choisir les indicateurs</li>
<li>Rédiger des fiches indicateurs complètes</li>
<li>Construire un tableau de bord visuel sous Excel</li>
<li>Conduire une réunion de pilotage à partir du tableau de bord</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode de conception de tableaux de bord ; outil prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Décisions plus rapides et mieux fondées ; performance des services suivie.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-suivi-evaluation-des-politiques-publiques-et-projets',
		'titre'            => 'Suivi-évaluation des politiques publiques et projets territoriaux',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec un dispositif de suivi d\'une politique ou d\'un projet territorial.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Agents des ministères et des collectivités territoriales, cellules d\'études et de planification, élus',
		'prerequis'        => 'Expérience dans l\'administration ou les collectivités.',
		'objectifs'        => 'Comprendre les spécificités du suivi-évaluation des politiques publiques
Construire un cadre de suivi pour une politique ou un programme
Mobiliser les données administratives et statistiques
Évaluer une politique publique et en rendre compte',
		'jours'            => array(
			array(
				'titre'      => 'Cadre',
				'matin'      => 'Gestion axée sur les résultats dans le secteur public ; budget-programme.',
				'apres_midi' => 'Acteurs.',
			),
			array(
				'titre'      => 'Suivre',
				'matin'      => 'Logique d\'intervention ; indicateurs.',
				'apres_midi' => 'Données administratives et statistiques ; systèmes d\'information.',
			),
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Évaluation des politiques publiques ; revues sectorielles et territoriales.',
				'apres_midi' => 'Redevabilité.',
			),
		),
		'livrables'        => 'Dispositif de suivi d\'une politique ou d\'un projet territorial
Modèle de revue sectorielle',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les administrations et collectivités doivent démontrer l\'efficacité de leurs politiques et projets. Ce séminaire de 3 jours adapte les méthodes de suivi-évaluation au secteur public et au niveau territorial. Chaque participant repart avec un dispositif de suivi d\'une politique ou d\'un projet territorial.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Reconstituer la logique d\'intervention d\'une politique publique</li>
<li>Définir des indicateurs alignés sur les référentiels nationaux</li>
<li>Exploiter les données de l\'ANSD et des systèmes administratifs</li>
<li>Conduire une revue sectorielle ou territoriale</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodes de suivi-évaluation adaptées au secteur public ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Politiques publiques mieux pilotées ; transparence et redevabilité accrues.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-suivi-technique-et-financier-des-projets-d-investissement',
		'titre'            => 'Suivi technique et financier des projets d\'investissement',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec un outil de suivi physico-financier.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet d\'investissement, ingénieurs, gestionnaires financiers, maîtres d\'ouvrage',
		'prerequis'        => 'Notions de gestion de projet ; pratique d\'Excel.',
		'objectifs'        => 'Organiser le suivi technique d\'un projet d\'investissement
Suivre l\'exécution financière et les décaissements
Analyser les écarts de coûts et de délais
Produire un reporting physico-financier',
		'jours'            => array(
			array(
				'titre'      => 'Suivi technique',
				'matin'      => 'Planning des travaux ; jalons.',
				'apres_midi' => 'Contrôle qualité ; missions de contrôle.',
			),
			array(
				'titre'      => 'Suivi financier',
				'matin'      => 'Budget ; engagements ; décaissements.',
				'apres_midi' => 'Décomptes ; révisions de prix.',
			),
			array(
				'titre'      => 'Analyse et rapport',
				'matin'      => 'Écarts ; valeur acquise.',
				'apres_midi' => 'Rapport physico-financier ; comité de suivi.',
			),
		),
		'livrables'        => 'Outil Excel de suivi physico-financier
Modèle de rapport physico-financier',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les projets d\'investissement (infrastructures, équipements) exigent un suivi étroit des travaux, des coûts et des délais. Ce séminaire de 3 jours présente les outils de suivi physique et financier des investissements. Chaque participant repart avec un outil de suivi physico-financier.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Suivre l\'avancement physique des travaux et les jalons</li>
<li>Rapprocher engagements, décaissements et avancement</li>
<li>Calculer les écarts et la valeur acquise</li>
<li>Établir un rapport physico-financier</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise du suivi des investissements ; outil prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Investissements livrés dans les délais et budgets ; dérives détectées tôt.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-de-projet-et-planification-strategique',
		'titre'            => 'Gestion de projet et planification stratégique',
		'domaine'          => 'Suivi-évaluation de projet',
		'hero'             => 'Repartez avec un plan stratégique décliné en projets.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Dirigeants, responsables de la planification, chefs de projet, chargés de programmes',
		'prerequis'        => 'Expérience en management ou en gestion de projet.',
		'objectifs'        => 'Élaborer un plan stratégique
Décliner la stratégie en programmes et projets
Prioriser et piloter un portefeuille de projets
Suivre la mise en œuvre de la stratégie',
		'jours'            => array(
			array(
				'titre'      => 'Planifier',
				'matin'      => 'Démarche de planification stratégique ; diagnostic.',
				'apres_midi' => 'Vision ; axes stratégiques.',
			),
			array(
				'titre'      => 'Décliner',
				'matin'      => 'Programmes et projets ; priorisation.',
				'apres_midi' => 'Portefeuille ; budget.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Gouvernance du portefeuille ; suivi.',
				'apres_midi' => 'Revues stratégiques ; tableau de bord.',
			),
		),
		'livrables'        => 'Plan stratégique décliné en projets
Grille de priorisation du portefeuille',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les projets doivent servir la stratégie de l\'organisation. Ce séminaire de 3 jours relie planification stratégique et gestion de projet : de la vision au portefeuille de projets, puis au pilotage. Chaque participant repart avec un plan stratégique décliné en projets.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas de projets et programmes au Sénégal, exercices sur les projets des participants, travaux sur Excel, travail en sous-groupes et restitution.</p>
<h3>Compétences développées</h3>
<ul>
<li>Conduire un diagnostic stratégique participatif</li>
<li>Formuler axes, objectifs et résultats stratégiques</li>
<li>Prioriser les projets selon leur contribution et leur faisabilité</li>
<li>Suivre le plan stratégique par un tableau de bord</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à relier stratégie et projets ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets alignés sur la stratégie ; ressources concentrées sur les priorités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-excel-avance',
		'titre'            => 'Excel avancé',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec des modèles réutilisables et des gains de temps immédiats.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Tous professionnels utilisant Excel : assistants, comptables, gestionnaires, analystes, managers',
		'prerequis'        => 'Pratique des bases d\'Excel (saisie, formules simples, mise en forme).',
		'objectifs'        => 'Maîtriser les fonctions avancées de calcul et de recherche
Analyser des données avec les tableaux croisés dynamiques
Fiabiliser et automatiser ses fichiers
Présenter les résultats avec des graphiques et tableaux de bord',
		'jours'            => array(
			array(
				'titre'      => 'Formules avancées',
				'matin'      => 'Références ; fonctions logiques, de recherche, de date et de texte.',
				'apres_midi' => 'Formules matricielles dynamiques.',
			),
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Tableaux structurés ; tris et filtres avancés.',
				'apres_midi' => 'Tableaux croisés dynamiques ; Power Query initiation.',
			),
			array(
				'titre'      => 'Fiabiliser et présenter',
				'matin'      => 'Validation des données ; protection ; graphiques.',
				'apres_midi' => 'Tableau de bord ; première macro.',
			),
		),
		'livrables'        => 'Modèles Excel réutilisables
Aide-mémoire des fonctions avancées',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Excel reste l\'outil de travail quotidien de la plupart des professionnels, mais ses fonctions avancées sont souvent méconnues. Ce séminaire de 3 jours fait maîtriser les formules avancées, l\'analyse de données et l\'automatisation simple. Chaque participant repart avec des modèles réutilisables et des gains de temps immédiats.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Utiliser RECHERCHEX, INDEX/EQUIV, SI imbriqués, SOMME.SI.ENS et fonctions de date et texte</li>
<li>Construire et exploiter des tableaux croisés dynamiques et des segments</li>
<li>Mettre en place des listes déroulantes, validations et mises en forme conditionnelles</li>
<li>Concevoir un tableau de bord dynamique et enregistrer une macro simple</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gain de temps et fiabilité sur Excel ; modèles prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Productivité accrue ; erreurs réduites dans les fichiers ; analyses plus rapides.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-vba-visual-basic-applications',
		'titre'            => 'VBA (Visual Basic Applications)',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec une macro automatisant une tâche de votre quotidien.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Utilisateurs avancés d\'Excel, analystes, contrôleurs de gestion, comptables',
		'prerequis'        => 'Bonne maîtrise d\'Excel (formules avancées, tableaux croisés dynamiques).',
		'objectifs'        => 'Comprendre l\'environnement de développement VBA
Écrire des macros pour automatiser des traitements
Manipuler cellules, feuilles et classeurs par le code
Créer des formulaires et gérer les erreurs',
		'jours'            => array(
			array(
				'titre'      => 'Premiers pas',
				'matin'      => 'Enregistreur de macros ; éditeur VBA.',
				'apres_midi' => 'Objets, propriétés, méthodes ; variables.',
			),
			array(
				'titre'      => 'Programmer',
				'matin'      => 'Conditions ; boucles.',
				'apres_midi' => 'Manipulation des cellules, feuilles et classeurs ; fonctions personnalisées.',
			),
			array(
				'titre'      => 'Applications',
				'matin'      => 'Formulaires ; gestion des erreurs.',
				'apres_midi' => 'Automatisation d\'un traitement réel ; bonnes pratiques.',
			),
		),
		'livrables'        => 'Macro automatisant une tâche réelle
Bibliothèque de codes VBA commentés',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
			'VBA',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>VBA permet d\'automatiser les tâches répétitives d\'Excel et de créer de véritables petites applications. Ce séminaire de 3 jours initie à la programmation VBA, de l\'enregistreur de macros aux formulaires. Chaque participant repart avec une macro automatisant une tâche de son quotidien.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Enregistrer, modifier et exécuter une macro</li>
<li>Utiliser variables, conditions et boucles</li>
<li>Automatiser l\'import, le traitement et la mise en forme de données</li>
<li>Concevoir un formulaire utilisateur simple</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie pour automatiser Excel ; bibliothèque de codes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Tâches répétitives automatisées ; gains de temps importants ; fiabilité des traitements.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-des-systemes-d-information',
		'titre'            => 'Management des systèmes d\'information',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un schéma directeur simplifié.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DSI, responsables informatiques, chefs de projet SI, managers métiers',
		'prerequis'        => 'Connaissances générales en informatique.',
		'objectifs'        => 'Aligner le système d\'information sur la stratégie
Piloter le portefeuille de projets informatiques
Maîtriser les coûts, les prestataires et les risques du SI
Organiser la fonction informatique',
		'jours'            => array(
			array(
				'titre'      => 'SI et stratégie',
				'matin'      => 'Rôle du SI ; cartographie.',
				'apres_midi' => 'Alignement stratégique ; schéma directeur.',
			),
			array(
				'titre'      => 'Piloter',
				'matin'      => 'Portefeuille de projets ; budget.',
				'apres_midi' => 'Prestataires et contrats ; niveaux de service.',
			),
			array(
				'titre'      => 'Organiser',
				'matin'      => 'Organisation de la DSI ; référentiels (ITIL, COBIT).',
				'apres_midi' => 'Risques ; indicateurs.',
			),
		),
		'livrables'        => 'Schéma directeur simplifié
Tableau de bord de la fonction SI',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le système d\'information est au cœur de la performance des organisations. Ce séminaire de 3 jours donne aux managers et responsables informatiques les clés pour aligner le SI sur la stratégie, piloter les projets et maîtriser les coûts et les risques. Chaque participant repart avec un schéma directeur simplifié.</p>
<p>Pédagogie active avec 70 % de pratique : études de cas, ateliers de cartographie, échanges de pratiques.</p>
<h3>Compétences développées</h3>
<ul>
<li>Réaliser une cartographie du système d\'information</li>
<li>Élaborer un schéma directeur et prioriser les projets</li>
<li>Construire un budget informatique et suivre les contrats</li>
<li>Mettre en place des indicateurs de service</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision managériale du SI ; outils de pilotage ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> SI aligné sur les priorités ; coûts maîtrisés ; projets informatiques mieux réussis.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-securite-des-systemes-d-information',
		'titre'            => 'Sécurité des systèmes d\'information',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un plan d\'action sécurité.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'RSSI, responsables informatiques, administrateurs systèmes, auditeurs, managers',
		'prerequis'        => 'Connaissances de base en informatique et réseaux.',
		'objectifs'        => 'Comprendre les menaces et les vulnérabilités des SI
Connaître les mesures de sécurité techniques et organisationnelles
Appliquer une démarche de management de la sécurité (ISO 27001)
Sensibiliser et impliquer les utilisateurs',
		'jours'            => array(
			array(
				'titre'      => 'Menaces',
				'matin'      => 'Panorama des cybermenaces ; cas réels.',
				'apres_midi' => 'Cadre légal sénégalais ; vulnérabilités.',
			),
			array(
				'titre'      => 'Protéger',
				'matin'      => 'Mesures techniques et organisationnelles ; ISO 27001 et 27002.',
				'apres_midi' => 'Analyse de risques ISO 27005.',
			),
			array(
				'titre'      => 'Organiser',
				'matin'      => 'Politique de sécurité ; gestion des incidents ; continuité.',
				'apres_midi' => 'Sensibilisation ; plan d\'action.',
			),
		),
		'livrables'        => 'Plan d\'action sécurité
Modèle de politique de sécurité',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les cyberattaques touchent désormais toutes les organisations, quelle que soit leur taille. Ce séminaire de 3 jours présente les menaces, les mesures de protection et la démarche de management de la sécurité selon ISO 27001. Chaque participant repart avec un plan d\'action sécurité.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les principales menaces (rançongiciels, hameçonnage, fuites de données)</li>
<li>Évaluer les risques selon ISO 27005</li>
<li>Définir une politique de sécurité et des mesures prioritaires</li>
<li>Organiser la gestion des incidents et la sensibilisation</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des fondamentaux de la sécurité des SI ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Risques cyber réduits ; données protégées ; conformité renforcée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-audit-technique-de-la-securite-des-systemes-informatiques',
		'titre'            => 'Audit technique de la sécurité des systèmes informatiques',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un programme d\'audit et un modèle de rapport.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Auditeurs informatiques, administrateurs systèmes et réseaux, RSSI, consultants en sécurité',
		'prerequis'        => 'Bonnes connaissances en systèmes et réseaux.',
		'objectifs'        => 'Connaître la méthodologie d\'un audit technique de sécurité
Évaluer la configuration des systèmes, réseaux et applications
Utiliser des outils de scan de vulnérabilités dans un cadre autorisé
Rédiger un rapport d\'audit et un plan de remédiation',
		'jours'            => array(
			array(
				'titre'      => 'Méthodologie',
				'matin'      => 'Types d\'audit ; référentiels.',
				'apres_midi' => 'Cadrage ; autorisations et éthique.',
			),
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Scan de vulnérabilités ; revue de configuration.',
				'apres_midi' => 'Contrôle des accès ; travaux pratiques en laboratoire.',
			),
			array(
				'titre'      => 'Restituer',
				'matin'      => 'Analyse des risques ; priorisation.',
				'apres_midi' => 'Rapport ; plan de remédiation.',
			),
		),
		'livrables'        => 'Programme d\'audit technique
Modèle de rapport et de plan de remédiation',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Nmap',
			'OpenVAS',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Évaluer régulièrement la sécurité technique de son infrastructure permet de corriger les failles avant qu\'elles ne soient exploitées. Ce séminaire de 3 jours présente la méthodologie et les outils de l\'audit technique de sécurité. Chaque participant repart avec un programme d\'audit et un modèle de rapport.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques en laboratoire isolé, études de cas, rédaction de rapport.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cadrer une mission d\'audit technique et ses autorisations</li>
<li>Réaliser un scan de vulnérabilités et interpréter les résultats</li>
<li>Contrôler la configuration des pare-feu, serveurs et postes</li>
<li>Prioriser les vulnérabilités et rédiger les recommandations</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthodologie d\'audit technique maîtrisée ; outils pratiqués en laboratoire ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Failles détectées et corrigées ; niveau de sécurité mesuré ; conformité démontrée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gouvernance-des-systemes-d-information',
		'titre'            => 'Gouvernance des systèmes d\'information',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un cadre de gouvernance du SI.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DSI, RSSI, auditeurs informatiques, dirigeants, responsables de la conformité',
		'prerequis'        => 'Connaissances générales en management des SI.',
		'objectifs'        => 'Comprendre les enjeux de la gouvernance des SI
Connaître les référentiels COBIT et ITIL
Mettre en place les instances et processus de gouvernance
Mesurer la performance et la conformité du SI',
		'jours'            => array(
			array(
				'titre'      => 'Enjeux',
				'matin'      => 'Création de valeur ; risques.',
				'apres_midi' => 'Ressources ; conformité.',
			),
			array(
				'titre'      => 'Référentiels',
				'matin'      => 'COBIT ; ITIL.',
				'apres_midi' => 'ISO 38500 ; articulation des référentiels.',
			),
			array(
				'titre'      => 'Mise en œuvre',
				'matin'      => 'Instances ; processus ; indicateurs.',
				'apres_midi' => 'Tableau de bord ; feuille de route.',
			),
		),
		'livrables'        => 'Cadre de gouvernance du SI
Tableau de bord de gouvernance',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La gouvernance du SI garantit que l\'informatique crée de la valeur, maîtrise ses risques et utilise bien ses ressources. Ce séminaire de 3 jours présente les référentiels COBIT et ITIL et la mise en place d\'une gouvernance adaptée. Chaque participant repart avec un cadre de gouvernance du SI.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Définir les rôles et les instances de décision du SI</li>
<li>Appliquer les processus clés de COBIT</li>
<li>Organiser la gestion des services selon ITIL</li>
<li>Construire un tableau de bord de gouvernance</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des référentiels de gouvernance ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> SI piloté et conforme ; décisions informatiques mieux arbitrées ; valeur du SI démontrée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-systemes-d-information-hospitaliers',
		'titre'            => 'Systèmes d\'information hospitaliers',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec le schéma directeur simplifié du SIH de votre structure.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Directeurs d\'hôpitaux et de structures de santé, responsables informatiques hospitaliers, médecins et cadres de santé, gestionnaires, responsables de l\'information sanitaire',
		'prerequis'        => 'Expérience dans une structure de santé ou dans un service informatique ; aucune compétence en programmation requise.',
		'objectifs'        => 'Comprendre l\'architecture et les composantes d\'un système d\'information hospitalier
Analyser les besoins et les processus de soins et de gestion à informatiser
Conduire un projet de mise en place ou de modernisation d\'un SIH
Garantir l\'interopérabilité, la sécurité et la confidentialité des données de santé',
		'jours'            => array(
			array(
				'titre'      => 'Comprendre le SIH',
				'matin'      => 'Rôle et composantes d\'un SIH : dossier patient informatisé, gestion administrative, pharmacie, laboratoire, imagerie ; stratégie de santé digitale du Sénégal.',
				'apres_midi' => 'Panorama des solutions.',
			),
			array(
				'titre'      => 'Concevoir et déployer',
				'matin'      => 'Cartographie des processus ; cahier des charges.',
				'apres_midi' => 'Choix de la solution ; paramétrage, reprise des données, formation et conduite du changement auprès des soignants.',
			),
			array(
				'titre'      => 'Sécuriser et piloter',
				'matin'      => 'Interopérabilité (HL7, FHIR, DHIS2) ; sécurité, confidentialité et protection des données de santé (CDP).',
				'apres_midi' => 'Indicateurs hospitaliers et tableaux de bord ; schéma directeur.',
			),
		),
		'livrables'        => 'Schéma directeur simplifié du SIH de sa structure
Modèle de cahier des charges SIH',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'DHIS2',
			'OpenMRS',
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Dossier patient, admissions, pharmacie, laboratoire, facturation et données de santé : le système d\'information hospitalier relie toutes les activités d\'un établissement de santé. Ce séminaire de 3 jours apprend à concevoir, déployer et piloter un SIH adapté aux structures sanitaires sénégalaises, en garantissant la sécurité et la confidentialité des données des patients. Chaque participant repart avec le schéma directeur simplifié du SIH de sa structure.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Cartographier les processus d\'un établissement (parcours patient, pharmacie, laboratoire, imagerie, facturation)</li>
<li>Rédiger un cahier des charges SIH et comparer les solutions, dont les logiciels libres</li>
<li>Organiser le déploiement : paramétrage, reprise des données, formation des utilisateurs, conduite du changement</li>
<li>Appliquer les standards d\'échange (HL7, FHIR) et la remontée des données vers le système national (DHIS2)</li>
<li>Mettre en place les règles de sécurité, de confidentialité et de protection des données de santé</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Vision complète du SIH et méthode de conduite de projet ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Parcours patient fluidifié et mieux tracé ; données fiables pour le pilotage et le reporting sanitaire ; confidentialité des données des patients garantie.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-architecture-de-sauvegarde',
		'titre'            => 'Architecture de sauvegarde',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec une politique de sauvegarde.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Administrateurs systèmes, responsables informatiques, techniciens réseaux',
		'prerequis'        => 'Connaissances en administration de systèmes.',
		'objectifs'        => 'Comprendre les enjeux et les principes de la sauvegarde
Concevoir une architecture de sauvegarde adaptée
Mettre en œuvre et automatiser les sauvegardes
Tester les restaurations et assurer la continuité',
		'jours'            => array(
			array(
				'titre'      => 'Principes',
				'matin'      => 'Enjeux ; types de sauvegarde.',
				'apres_midi' => 'RPO et RTO ; règle 3-2-1.',
			),
			array(
				'titre'      => 'Architecture',
				'matin'      => 'Supports ; solutions sur site et cloud.',
				'apres_midi' => 'Sauvegardes immuables ; protection contre les rançongiciels.',
			),
			array(
				'titre'      => 'Exploiter',
				'matin'      => 'Automatisation ; supervision.',
				'apres_midi' => 'Tests de restauration ; plan de continuité.',
			),
		),
		'livrables'        => 'Politique de sauvegarde
Plan de restauration testé',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Une sauvegarde fiable est la dernière ligne de défense face aux pannes et aux rançongiciels. Ce séminaire de 3 jours apprend à concevoir, déployer et tester une architecture de sauvegarde et de restauration. Chaque participant repart avec une politique de sauvegarde.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques en laboratoire, études de cas, tests de restauration.</p>
<h3>Compétences développées</h3>
<ul>
<li>Définir les objectifs de reprise (RPO, RTO) par application</li>
<li>Appliquer la règle 3-2-1 et les sauvegardes immuables</li>
<li>Configurer des sauvegardes locales et dans le cloud</li>
<li>Rédiger et tester un plan de restauration</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à concevoir et tester des sauvegardes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Données protégées ; reprise rapide après incident ; résilience face aux rançongiciels.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-administration-azure-aws',
		'titre'            => 'Administration Azure / AWS',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec une infrastructure de test déployée et documentée.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Administrateurs systèmes et réseaux, ingénieurs infrastructure, responsables informatiques',
		'prerequis'        => 'Connaissances en administration de systèmes et réseaux.',
		'objectifs'        => 'Comprendre les modèles et services du cloud public
Administrer les ressources de calcul, stockage et réseau sur Azure et AWS
Gérer les identités, les accès et la sécurité
Surveiller et maîtriser les coûts',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux du cloud',
				'matin'      => 'Modèles IaaS, PaaS, SaaS ; régions.',
				'apres_midi' => 'Comparaison Azure et AWS ; comptes.',
			),
			array(
				'titre'      => 'Administrer',
				'matin'      => 'Calcul ; stockage.',
				'apres_midi' => 'Réseaux virtuels ; travaux pratiques sur les deux plateformes.',
			),
			array(
				'titre'      => 'Sécuriser et optimiser',
				'matin'      => 'Identités et accès ; sécurité.',
				'apres_midi' => 'Supervision ; maîtrise des coûts.',
			),
		),
		'livrables'        => 'Infrastructure de test documentée
Check-list de sécurité cloud',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Microsoft Azure',
			'AWS',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les organisations migrent vers le cloud pour gagner en souplesse et en disponibilité. Ce séminaire de 3 jours fait pratiquer l\'administration des services essentiels de Microsoft Azure et d\'Amazon Web Services. Chaque participant repart avec une infrastructure de test déployée et documentée.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur comptes de test Azure et AWS.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer et configurer des machines virtuelles et du stockage</li>
<li>Configurer des réseaux virtuels et des règles de sécurité</li>
<li>Gérer utilisateurs, groupes et rôles</li>
<li>Mettre en place la supervision et les alertes de coûts</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur l\'administration du cloud ; pratique sur les deux plateformes ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Migration vers le cloud préparée ; infrastructures plus souples ; coûts maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-certification-aws-cloud-foundations',
		'titre'            => 'Certification AWS – Cloud foundations',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un plan de révision et des examens blancs.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Professionnels de l\'informatique, chefs de projet, commerciaux et managers travaillant avec le cloud',
		'prerequis'        => 'Connaissances générales en informatique.',
		'objectifs'        => 'Comprendre les concepts et avantages du cloud AWS
Connaître les principaux services AWS
Maîtriser les principes de sécurité et de conformité
Comprendre la tarification et le support AWS',
		'jours'            => array(
			array(
				'titre'      => 'Concepts',
				'matin'      => 'Cloud computing ; infrastructure mondiale.',
				'apres_midi' => 'Cadre Well-Architected.',
			),
			array(
				'titre'      => 'Services',
				'matin'      => 'Calcul, stockage, réseau, bases de données.',
				'apres_midi' => 'Démonstrations et travaux pratiques.',
			),
			array(
				'titre'      => 'Sécurité, coûts et examen',
				'matin'      => 'Responsabilité partagée ; IAM ; tarification.',
				'apres_midi' => 'Support ; examen blanc.',
			),
		),
		'livrables'        => 'Plan de révision
Examens blancs corrigés',
		'evaluation'       => 'Examen blanc dans les conditions de la certification. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'AWS',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Ce séminaire de 3 jours donne les bases du cloud AWS et prépare à la certification d\'entrée AWS Certified Cloud Practitioner. Il couvre les concepts du cloud, les services principaux, la sécurité et la tarification. Chaque participant repart avec un plan de révision et des examens blancs.</p>
<p>Pédagogie active avec 70 % de pratique : apports, démonstrations, questions d\'entraînement, examen blanc.</p>
<h3>Compétences développées</h3>
<ul>
<li>Décrire l\'infrastructure mondiale d\'AWS</li>
<li>Identifier les services de calcul, stockage, réseau et base de données</li>
<li>Appliquer le modèle de responsabilité partagée</li>
<li>Estimer les coûts d\'une architecture simple</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Préparation structurée à la certification ; bases solides du cloud AWS ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Équipes formées au cloud ; projets cloud mieux conduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-certification-aws-iam-foundations',
		'titre'            => 'Certification AWS – IAM foundations',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un modèle de politique d\'accès.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Administrateurs cloud, ingénieurs sécurité, administrateurs systèmes',
		'prerequis'        => 'Connaissances de base d\'AWS.',
		'objectifs'        => 'Comprendre le rôle d\'IAM dans la sécurité AWS
Gérer utilisateurs, groupes et rôles
Rédiger et évaluer des politiques d\'accès
Appliquer les bonnes pratiques de sécurité des accès',
		'jours'            => array(
			array(
				'titre'      => 'Fondamentaux',
				'matin'      => 'Identités, authentification, autorisation ; compte racine.',
				'apres_midi' => 'Utilisateurs, groupes, rôles.',
			),
			array(
				'titre'      => 'Politiques',
				'matin'      => 'Structure JSON ; évaluation.',
				'apres_midi' => 'Conditions ; travaux pratiques.',
			),
			array(
				'titre'      => 'Bonnes pratiques',
				'matin'      => 'Moindre privilège ; MFA ; fédération.',
				'apres_midi' => 'Audit des accès ; examen blanc.',
			),
		),
		'livrables'        => 'Modèle de politique d\'accès
Check-list des bonnes pratiques IAM',
		'evaluation'       => 'Examen blanc dans les conditions de la certification. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'AWS IAM',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La gestion des identités et des accès est le premier rempart de la sécurité dans le cloud. Ce séminaire de 3 jours fait maîtriser le service AWS IAM : utilisateurs, groupes, rôles, politiques et bonnes pratiques. Chaque participant repart avec un modèle de politique d\'accès.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur compte de test, questions d\'entraînement.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer des utilisateurs, groupes et rôles avec le moindre privilège</li>
<li>Écrire des politiques JSON et les tester</li>
<li>Mettre en place l\'authentification multifacteur et la fédération d\'identités</li>
<li>Auditer les accès avec les outils AWS</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la gestion des accès AWS ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Accès au cloud sécurisés ; risques d\'intrusion réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-certification-mos-word-excel',
		'titre'            => 'Certification MOS (Word, Excel)',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'La certification Microsoft Office Specialist atteste d\'une maîtrise reconnue de Word et d\'Excel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Assistants, secrétaires, gestionnaires, étudiants et tout utilisateur souhaitant valider ses compétences',
		'prerequis'        => 'Pratique régulière de Word et d\'Excel.',
		'objectifs'        => 'Connaître le format et les objectifs des examens MOS
Maîtriser les fonctions Word évaluées
Maîtriser les fonctions Excel évaluées
S\'entraîner dans les conditions de l\'examen',
		'jours'            => array(
			array(
				'titre'      => 'Word',
				'matin'      => 'Gestion des documents ; mise en forme ; tableaux et listes.',
				'apres_midi' => 'Références ; exercices type.',
			),
			array(
				'titre'      => 'Excel',
				'matin'      => 'Gestion des feuilles ; cellules et plages ; tableaux.',
				'apres_midi' => 'Formules ; graphiques ; exercices type.',
			),
			array(
				'titre'      => 'Examen',
				'matin'      => 'Méthode ; gestion du temps.',
				'apres_midi' => 'Examens blancs Word et Excel ; corrections.',
			),
		),
		'livrables'        => 'Examens blancs Word et Excel
Fiches de révision',
		'evaluation'       => 'Examen blanc dans les conditions de la certification. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Word',
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La certification Microsoft Office Specialist atteste d\'une maîtrise reconnue de Word et d\'Excel. Ce séminaire de 3 jours prépare aux examens MOS Word et Excel par des exercices dans les conditions de l\'examen. Chaque participant repart prêt à passer l\'examen.</p>
<p>Pédagogie active avec 70 % de pratique : exercices dans les conditions de l\'examen, examens blancs chronométrés.</p>
<h3>Compétences développées</h3>
<ul>
<li>Mettre en forme des documents longs (styles, sections, tables des matières)</li>
<li>Gérer les tableaux, références et publipostage dans Word</li>
<li>Utiliser formules, graphiques et tableaux dans Excel</li>
<li>Réaliser des projets types dans le temps imparti</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Préparation complète aux examens MOS ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Compétences bureautiques certifiées ; productivité accrue des équipes.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-business-intelligence-data-et-intelligence-artificielle',
		'titre'            => 'Business intelligence, data et intelligence artificielle : Snowflake, SAS, Salesforce, Anthropic, Microsoft, Oracle',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un parcours de certification personnalisé.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Analystes de données, développeurs, consultants, chefs de projet data et IA',
		'prerequis'        => 'Connaissances en informatique ou en analyse de données.',
		'objectifs'        => 'Comprendre l\'écosystème des plateformes de données et d\'IA
Situer les offres de Snowflake, SAS, Salesforce, Anthropic, Microsoft et Oracle
Choisir la certification adaptée à son métier
Engager la préparation par la pratique',
		'jours'            => array(
			array(
				'titre'      => 'Écosystème',
				'matin'      => 'Chaîne de la donnée ; panorama des éditeurs.',
				'apres_midi' => 'Usages en entreprise.',
			),
			array(
				'titre'      => 'Pratique',
				'matin'      => 'Travaux pratiques d\'initiation sur les plateformes choisies.',
				'apres_midi' => 'Cas d\'usage.',
			),
			array(
				'titre'      => 'Certification',
				'matin'      => 'Parcours et prérequis ; ressources de préparation.',
				'apres_midi' => 'Plan personnalisé ; questions type.',
			),
		),
		'livrables'        => 'Parcours de certification personnalisé
Tableau comparatif des certifications éditeurs',
		'evaluation'       => 'Quiz final et présentation du plan d\'action. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les éditeurs de la donnée et de l\'IA proposent des certifications reconnues sur le marché de l\'emploi. Ce séminaire de 3 jours présente l\'écosystème de ces solutions, aide à choisir la certification adaptée à son profil et engage la préparation. Chaque participant repart avec un parcours de certification personnalisé.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Distinguer entrepôt de données, analytique, CRM et IA générative</li>
<li>Comparer les parcours de certification des éditeurs</li>
<li>Réaliser des travaux pratiques d\'initiation sur au moins deux plateformes</li>
<li>Construire son plan de préparation et de passage de la certification</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Orientation claire vers la bonne certification ; premiers acquis pratiques ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Montée en compétences data et IA ; équipes certifiées sur les outils utilisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-management-et-gestion-de-projet-pmi-cima-cgma',
		'titre'            => 'Management et gestion de projet : PMI, CIMA, CGMA',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un plan de certification.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cadres financiers, contrôleurs de gestion, chefs de projet, managers visant une certification internationale',
		'prerequis'        => 'Expérience professionnelle en gestion de projet ou en finance ; lecture de l\'anglais.',
		'objectifs'        => 'Connaître les certifications PMI, CIMA et CGMA et leurs débouchés
Comprendre les référentiels de connaissances associés
Évaluer ses prérequis et choisir son parcours
Engager la préparation aux examens',
		'jours'            => array(
			array(
				'titre'      => 'Certifications',
				'matin'      => 'PMI, CIMA, CGMA : organismes, niveaux, prérequis, examens.',
				'apres_midi' => 'Choix du parcours.',
			),
			array(
				'titre'      => 'Référentiel PMI',
				'matin'      => 'Domaines, approches prédictive et agile.',
				'apres_midi' => 'Questions type.',
			),
			array(
				'titre'      => 'Management accounting',
				'matin'      => 'Coûts, budgets, performance, stratégie ; questions type.',
				'apres_midi' => 'Plan de certification.',
			),
		),
		'livrables'        => 'Plan de certification personnalisé
Fiches de synthèse des référentiels',
		'evaluation'       => 'Quiz final et présentation du plan d\'action. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les certifications PMI (gestion de projet) et CIMA / CGMA (management accounting) sont des références internationales pour les cadres. Ce séminaire de 3 jours présente ces certifications, leurs exigences et leurs contenus, et engage la préparation. Chaque participant repart avec un plan de certification.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Comparer PMP, CAPM, CIMA et CGMA (contenus, prérequis, format d\'examen)</li>
<li>Maîtriser les notions clés du référentiel PMI</li>
<li>Maîtriser les notions clés du management accounting (coûts, budgets, performance, stratégie)</li>
<li>Construire un plan de révision réaliste</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Orientation et préparation engagée vers une certification internationale ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Cadres certifiés selon des standards internationaux ; crédibilité accrue.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-outils-ia-pour-le-manager',
		'titre'            => 'Outils IA pour le manager',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec votre boîte à outils IA personnelle.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Managers, chefs de service, directeurs, assistants de direction',
		'prerequis'        => 'Pratique des outils bureautiques.',
		'objectifs'        => 'Connaître les outils d\'IA utiles au manager
Rédiger et synthétiser plus vite avec l\'IA
Analyser des données et préparer des décisions
Utiliser l\'IA de façon sûre et responsable',
		'jours'            => array(
			array(
				'titre'      => 'Écrire',
				'matin'      => 'Panorama des outils ; prompts.',
				'apres_midi' => 'Emails, notes, comptes rendus ; ateliers.',
			),
			array(
				'titre'      => 'Synthétiser et analyser',
				'matin'      => 'Synthèse de documents et de réunions ; analyse de données.',
				'apres_midi' => 'Aide à la décision.',
			),
			array(
				'titre'      => 'Présenter et encadrer',
				'matin'      => 'Présentations ; règles d\'usage.',
				'apres_midi' => 'Confidentialité ; boîte à outils personnelle.',
			),
		),
		'livrables'        => 'Boîte à outils IA personnelle
Bibliothèque de prompts du manager',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'ChatGPT',
			'Claude',
			'Copilot',
			'NotebookLM',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les assistants d\'IA peuvent faire gagner plusieurs heures par semaine à un manager. Ce séminaire de 3 jours fait pratiquer les outils d\'IA les plus utiles au quotidien : rédaction, synthèse, préparation de réunions, analyse et présentation. Chaque participant repart avec sa boîte à outils IA personnelle.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Rédiger des prompts efficaces pour emails, notes et comptes rendus</li>
<li>Synthétiser des documents longs et des réunions</li>
<li>Analyser un fichier de données et produire une présentation avec l\'IA</li>
<li>Appliquer les règles de confidentialité et de vérification</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Gains de temps immédiats ; usage sûr de l\'IA ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Managers plus disponibles pour leurs équipes ; productivité accrue ; usage encadré de l\'IA.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-outils-de-collaboration-google-docs-google-sheets',
		'titre'            => 'Outils de collaboration (Google Docs, Google Sheets, SharePoint, etc.)',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un espace de travail collaboratif organisé pour votre équipe.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Tous collaborateurs, assistants, managers, équipes projet',
		'prerequis'        => 'Pratique des outils bureautiques et d\'internet.',
		'objectifs'        => 'Comprendre les principes du travail collaboratif en ligne
Coéditer des documents et tableaux en temps réel
Organiser et partager les fichiers de l\'équipe
Communiquer et se coordonner avec les outils intégrés',
		'jours'            => array(
			array(
				'titre'      => 'Google Workspace',
				'matin'      => 'Drive, Docs, Sheets, Slides ; partage et coédition.',
				'apres_midi' => 'Formulaires.',
			),
			array(
				'titre'      => 'Microsoft 365',
				'matin'      => 'OneDrive, SharePoint, Teams ; coédition.',
				'apres_midi' => 'Versions ; droits.',
			),
			array(
				'titre'      => 'Organiser l\'équipe',
				'matin'      => 'Arborescence ; règles de nommage ; agendas.',
				'apres_midi' => 'Bonnes pratiques ; espace de l\'équipe.',
			),
		),
		'livrables'        => 'Espace de travail collaboratif de l\'équipe
Charte d\'usage des outils collaboratifs',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Google Workspace',
			'Microsoft 365',
			'SharePoint',
			'Teams',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Travailler à plusieurs sur les mêmes documents, en temps réel et à distance, est devenu la norme. Ce séminaire de 3 jours fait maîtriser les suites collaboratives Google Workspace et Microsoft 365. Chaque participant repart avec un espace de travail collaboratif organisé pour son équipe.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer, partager et coéditer dans Google Docs, Sheets et Word en ligne</li>
<li>Gérer les droits d\'accès, versions et commentaires</li>
<li>Structurer un site SharePoint ou un Drive partagé</li>
<li>Organiser réunions et échanges avec Teams, Meet et les agendas partagés</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des outils collaboratifs ; espace prêt à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Collaboration fluide et à distance ; moins d\'emails et de versions multiples ; information mieux partagée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-outils-de-gestion-de-projet-trello-etc',
		'titre'            => 'Outils de gestion de projet (Trello, etc.)',
		'domaine'          => 'Informatique & bureautique',
		'hero'             => 'Repartez avec un tableau de projet opérationnel.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chefs de projet, managers, assistants, équipes projet',
		'prerequis'        => 'Pratique des outils bureautiques.',
		'objectifs'        => 'Connaître les outils de gestion de projet collaboratifs
Organiser un projet en tableaux, listes et cartes
Coordonner l\'équipe et suivre l\'avancement
Choisir l\'outil adapté à son contexte',
		'jours'            => array(
			array(
				'titre'      => 'Principes',
				'matin'      => 'Gestion visuelle ; Kanban.',
				'apres_midi' => 'Panorama des outils ; prise en main de Trello.',
			),
			array(
				'titre'      => 'Organiser',
				'matin'      => 'Tableaux, listes, cartes ; échéances ; attribution.',
				'apres_midi' => 'Automatisations ; intégrations.',
			),
			array(
				'titre'      => 'Piloter et choisir',
				'matin'      => 'Suivi ; vues ; reporting.',
				'apres_midi' => 'Comparaison des outils ; tableau de son projet.',
			),
		),
		'livrables'        => 'Tableau de projet opérationnel
Guide de bonnes pratiques',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Trello',
			'Asana',
			'Notion',
			'Planner',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Les outils visuels de gestion de projet rendent le travail d\'équipe transparent et mieux coordonné. Ce séminaire de 3 jours fait pratiquer Trello et d\'autres outils comparables pour planifier, attribuer et suivre les tâches. Chaque participant repart avec un tableau de projet opérationnel.</p>
<p>Pédagogie active avec 70 % de pratique : travaux pratiques sur poste, démonstrations, exercices progressifs, cas fil rouge issus du contexte professionnel des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer un tableau Trello avec listes, cartes, échéances et responsables</li>
<li>Utiliser étiquettes, listes de contrôle et automatisations</li>
<li>Suivre l\'avancement et produire une vue calendrier ou chronologique</li>
<li>Comparer Trello, Asana, Notion et Planner</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur les outils de gestion de projet collaboratifs ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Projets mieux coordonnés ; visibilité partagée sur l\'avancement ; réunions de suivi raccourcies.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-ingenierie-de-la-formation-et-developpement-des-competences',
		'titre'            => 'Ingénierie de la formation et développement des compétences',
		'domaine'          => 'Ingénierie pédagogique',
		'hero'             => 'Repartez avec le dossier d\'ingénierie d\'une formation de votre choix.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables formation, ingénieurs pédagogiques, formateurs, conseillers en développement des compétences',
		'prerequis'        => 'Expérience en formation ou en gestion des compétences.',
		'objectifs'        => 'Analyser une demande et des besoins de compétences
Formuler des objectifs pédagogiques mesurables
Concevoir un dispositif et une progression pédagogique
Évaluer les acquis et le transfert en situation de travail',
		'jours'            => array(
			array(
				'titre'      => 'Analyser',
				'matin'      => 'Ingénierie de formation et ingénierie pédagogique ; analyse de la demande et des besoins.',
				'apres_midi' => 'Référentiels de compétences.',
			),
			array(
				'titre'      => 'Concevoir',
				'matin'      => 'Objectifs ; architecture du dispositif ; méthodes actives.',
				'apres_midi' => 'Scénario pédagogique ; formation multimodale.',
			),
			array(
				'titre'      => 'Évaluer',
				'matin'      => 'Modèle de Kirkpatrick ; outils d\'évaluation.',
				'apres_midi' => 'Transfert des acquis ; amélioration continue.',
			),
		),
		'livrables'        => 'Dossier d\'ingénierie d\'une formation
Modèles de scénario et d\'outils d\'évaluation',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Concevoir une formation qui change réellement les pratiques demande une méthode rigoureuse. Ce séminaire de 3 jours couvre toute l\'ingénierie de formation : analyse des besoins, objectifs, conception du dispositif, animation et évaluation. Chaque participant repart avec le dossier d\'ingénierie d\'une formation de son choix.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de conception sur les projets de formation des participants, études de cas, travail en sous-groupes et revue croisée.</p>
<h3>Compétences développées</h3>
<ul>
<li>Conduire un entretien d\'analyse de la demande et des besoins</li>
<li>Rédiger des objectifs pédagogiques selon la taxonomie de Bloom</li>
<li>Construire un scénario pédagogique avec méthodes et supports</li>
<li>Concevoir les outils d\'évaluation à chaud, à froid et de transfert</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Méthode complète d\'ingénierie de formation ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Formations plus efficaces et mieux évaluées ; investissement formation rentabilisé ; dossiers 3FPT mieux construits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-ingenierie-de-la-formation-professionnelle-et-technique',
		'titre'            => 'Ingénierie de la formation professionnelle et technique',
		'domaine'          => 'Ingénierie pédagogique',
		'hero'             => 'Repartez avec un module de formation construit selon l\'APC.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Formateurs et directeurs d\'établissements de formation professionnelle, ingénieurs de formation, responsables pédagogiques, inspecteurs',
		'prerequis'        => 'Expérience dans la formation professionnelle ou technique.',
		'objectifs'        => 'Maîtriser les principes de l\'approche par compétences (APC)
Réaliser une analyse de situation de travail
Élaborer un référentiel de compétences et un programme de formation
Organiser l\'évaluation des compétences et la formation en milieu professionnel',
		'jours'            => array(
			array(
				'titre'      => 'Approche par compétences',
				'matin'      => 'Principes de l\'APC ; politique de formation professionnelle au Sénégal.',
				'apres_midi' => 'Analyse de situation de travail.',
			),
			array(
				'titre'      => 'Référentiels et programme',
				'matin'      => 'Référentiel métier, de compétences, de formation ; programme et modules.',
				'apres_midi' => 'Situations d\'apprentissage.',
			),
			array(
				'titre'      => 'Évaluer et alterner',
				'matin'      => 'Évaluation des compétences ; formation en entreprise et apprentissage.',
				'apres_midi' => 'Partenariats avec les professionnels.',
			),
		),
		'livrables'        => 'Module de formation construit selon l\'APC
Modèle de référentiel de compétences',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>La formation professionnelle et technique repose sur l\'approche par compétences et sur un lien étroit avec les métiers. Ce séminaire de 3 jours apprend à concevoir des programmes selon l\'approche par compétences, de l\'analyse de situation de travail à l\'évaluation. Chaque participant repart avec un module de formation construit selon l\'APC.</p>
<p>Pédagogie active avec 70 % de pratique : ateliers de conception sur les projets de formation des participants, études de cas, travail en sous-groupes et revue croisée.</p>
<h3>Compétences développées</h3>
<ul>
<li>Conduire un atelier d\'analyse de situation de travail avec des professionnels</li>
<li>Rédiger un référentiel métier, un référentiel de compétences et un programme</li>
<li>Concevoir des situations d\'apprentissage pratiques</li>
<li>Construire une épreuve d\'évaluation des compétences et organiser l\'alternance</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de l\'ingénierie APC ; outils prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Programmes alignés sur les besoins des métiers ; insertion professionnelle améliorée ; partenariats renforcés avec les entreprises.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-adobe-photoshop',
		'titre'            => 'Adobe Photoshop',
		'domaine'          => 'PAO & design graphique',
		'hero'             => 'Repartez avec un portfolio de visuels réalisés.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de communication, graphistes débutants, community managers, assistants, entrepreneurs',
		'prerequis'        => 'Pratique de l\'ordinateur ; aucune connaissance de Photoshop requise.',
		'objectifs'        => 'Prendre en main l\'interface et les outils de Photoshop
Comprendre l\'environnement bitmap, les modes colorimétriques et la résolution
Réaliser sélections, détourages et photomontages
Préparer et exporter des visuels pour l\'impression et le multimédia',
		'jours'            => array(
			array(
				'titre'      => 'Prise en main',
				'matin'      => 'Navigation ; compréhension de l\'interface.',
				'apres_midi' => 'Les outils ; environnement de création bitmap.',
			),
			array(
				'titre'      => 'Couleur et image',
				'matin'      => 'Différence impression et multimédia : RVB / CMJN ; échantillonnage (dimension et résolution).',
				'apres_midi' => 'Création de documents.',
			),
			array(
				'titre'      => 'Retouche et export',
				'matin'      => 'Sélection, détourage, photomontage ; calques et masques.',
				'apres_midi' => 'Exportation aux différents formats (TIFF, PDF…).',
			),
		),
		'livrables'        => 'Portfolio de visuels réalisés
Fiche mémo des raccourcis et réglages',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Adobe Photoshop',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Photoshop est l\'outil de référence pour retoucher des photos et créer des visuels. Ce séminaire de 3 jours fait prendre en main le logiciel, de l\'interface aux techniques de détourage et de photomontage, jusqu\'à l\'export pour l\'impression et le web. Chaque participant repart avec un portfolio de visuels réalisés.</p>
<p>Pédagogie active avec 70 % de pratique : démonstrations suivies d\'exercices pratiques sur poste, projets de création à partir des besoins réels des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Naviguer dans l\'interface et personnaliser son espace de travail</li>
<li>Distinguer RVB et CMJN et régler dimension et résolution d\'une image</li>
<li>Détourer un objet et composer un photomontage avec les calques</li>
<li>Exporter aux formats adaptés (TIFF, PDF, JPEG, PNG)</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur Photoshop pour les besoins courants ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Visuels produits en interne ; coûts d\'agence réduits ; image de marque plus soignée.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-adobe-illustrator',
		'titre'            => 'Adobe Illustrator',
		'domaine'          => 'PAO & design graphique',
		'hero'             => 'Repartez avec un logo et une série de pictogrammes réalisés.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de communication, graphistes débutants, designers, entrepreneurs',
		'prerequis'        => 'Pratique de l\'ordinateur ; aucune connaissance d\'Illustrator requise.',
		'objectifs'        => 'Prendre en main l\'interface et les outils d\'Illustrator
Comprendre la différence entre images bitmap et vectorielles
Maîtriser le dessin vectoriel et la symbolique des formes
Préparer des documents pour l\'impression et le multimédia',
		'jours'            => array(
			array(
				'titre'      => 'Prise en main',
				'matin'      => 'Navigation ; compréhension de l\'interface.',
				'apres_midi' => 'Les outils ; différence bitmap / vectoriel.',
			),
			array(
				'titre'      => 'Dessin vectoriel',
				'matin'      => 'Formes, tracés, outil plume ; couleurs et dégradés.',
				'apres_midi' => 'Texte ; symbolisme des formes.',
			),
			array(
				'titre'      => 'Création et export',
				'matin'      => 'Logo et pictogrammes ; création de documents pour l\'impression / le multimédia.',
				'apres_midi' => 'Export.',
			),
		),
		'livrables'        => 'Logo et pictogrammes réalisés
Fiche mémo des outils',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Adobe Illustrator',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Illustrator permet de créer logos, pictogrammes et illustrations vectorielles nets à toutes les tailles. Ce séminaire de 3 jours fait maîtriser l\'interface, les outils de dessin vectoriel et la préparation des fichiers pour l\'impression et le multimédia. Chaque participant repart avec un logo et une série de pictogrammes réalisés.</p>
<p>Pédagogie active avec 70 % de pratique : démonstrations suivies d\'exercices pratiques sur poste, projets de création à partir des besoins réels des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Naviguer dans l\'interface et organiser ses plans de travail</li>
<li>Dessiner avec l\'outil plume, les formes et les tracés</li>
<li>Concevoir un logo en exploitant la symbolique des formes et des couleurs</li>
<li>Exporter des fichiers vectoriels pour l\'impression et le web</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur Illustrator pour la création vectorielle ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Identité visuelle produite en interne ; supports cohérents ; coûts réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-adobe-indesign',
		'titre'            => 'Adobe InDesign',
		'domaine'          => 'PAO & design graphique',
		'hero'             => 'Repartez avec une brochure mise en page.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Chargés de communication, assistants de direction, graphistes débutants, éditeurs',
		'prerequis'        => 'Pratique de l\'ordinateur ; notions de Photoshop souhaitées.',
		'objectifs'        => 'Prendre en main l\'interface et les outils d\'InDesign
Mettre en page des documents multipages
Intégrer et gérer textes et images
Préparer et exporter pour l\'impression et le multimédia',
		'jours'            => array(
			array(
				'titre'      => 'Prise en main',
				'matin'      => 'Navigation ; compréhension de l\'interface.',
				'apres_midi' => 'Les outils ; création de documents.',
			),
			array(
				'titre'      => 'Mise en page',
				'matin'      => 'Gabarits ; blocs texte et image.',
				'apres_midi' => 'Styles ; sélection et détourage des images importées.',
			),
			array(
				'titre'      => 'Préparer et exporter',
				'matin'      => 'RVB / CMJN ; échantillonnage (dimension et résolution).',
				'apres_midi' => 'Exportation aux différents formats (TIFF, EPUB, PDF…).',
			),
		),
		'livrables'        => 'Brochure mise en page
Gabarit réutilisable',
		'evaluation'       => 'Projet final présenté au groupe. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Adobe InDesign',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>InDesign est le logiciel de mise en page des brochures, rapports, magazines et livres numériques. Ce séminaire de 3 jours fait maîtriser la mise en page professionnelle, l\'intégration d\'images et l\'export pour l\'impression et le format EPUB. Chaque participant repart avec une brochure mise en page.</p>
<p>Pédagogie active avec 70 % de pratique : démonstrations suivies d\'exercices pratiques sur poste, projets de création à partir des besoins réels des participants.</p>
<h3>Compétences développées</h3>
<ul>
<li>Créer un document avec gabarits, marges et colonnes</li>
<li>Utiliser styles de paragraphe et de caractère</li>
<li>Importer des images détourées et gérer les modes RVB / CMJN et la résolution</li>
<li>Exporter en PDF pour l\'impression et en EPUB</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Autonomie sur la mise en page professionnelle ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Documents institutionnels produits en interne ; qualité graphique homogène ; délais réduits.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-anglais-des-affaires',
		'titre'            => 'Anglais des affaires',
		'domaine'          => 'Anglais des affaires',
		'hero'             => 'Repartez avec un lexique professionnel et un plan de progression.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Cadres, managers, assistants, commerciaux, chargés de projets travaillant avec des partenaires anglophones',
		'prerequis'        => 'Niveau A2 minimum (test de positionnement en amont pour constituer des groupes homogènes).',
		'objectifs'        => 'Communiquer avec aisance dans les situations professionnelles courantes
Rédiger des emails et documents professionnels clairs
Participer à des réunions et faire une présentation en anglais
Négocier et gérer des échanges téléphoniques',
		'jours'            => array(
			array(
				'titre'      => 'Communiquer',
				'matin'      => 'Présentations ; small talk ; téléphone.',
				'apres_midi' => 'Vocabulaire de l\'entreprise ; jeux de rôle.',
			),
			array(
				'titre'      => 'Écrire',
				'matin'      => 'Emails ; comptes rendus.',
				'apres_midi' => 'Formules et registres ; correction individualisée.',
			),
			array(
				'titre'      => 'Convaincre',
				'matin'      => 'Réunions ; présentations.',
				'apres_midi' => 'Négociation ; simulation finale.',
			),
		),
		'livrables'        => 'Lexique de l\'anglais des affaires
Plan de progression individuel',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>L\'anglais est la langue des affaires internationales, des bailleurs de fonds et du secteur pétrolier et gazier. Ce séminaire intensif de 3 jours renforce l\'expression orale et écrite dans les situations professionnelles courantes : réunions, appels, emails, présentations et négociations. Chaque participant repart avec un lexique professionnel et un plan de progression.</p>
<p>Pédagogie active avec 70 % de pratique : pédagogie communicative : jeux de rôle, simulations de réunions et d\'appels, exercices écrits sur documents professionnels, travail en petits groupes.</p>
<h3>Compétences développées</h3>
<ul>
<li>Se présenter et présenter son organisation</li>
<li>Rédiger emails, comptes rendus et courriers professionnels</li>
<li>Animer ou participer à une réunion et défendre un point de vue</li>
<li>Mener un appel téléphonique et une négociation simple</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Aisance accrue à l\'oral et à l\'écrit ; plan de progression ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Échanges facilités avec les partenaires internationaux ; opportunités d\'affaires élargies.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-droit-du-travail-et-obligations-des-travailleurs-et-gestion',
		'titre'            => 'Droit du travail et obligations des travailleurs et gestion administrative du personnel',
		'domaine'          => 'Droit',
		'hero'             => 'Repartez avec un calendrier des obligations administratives.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires du personnel, assistants RH, responsables administratifs, dirigeants de PME',
		'prerequis'        => 'Aucun prérequis juridique.',
		'objectifs'        => 'Connaître les droits et obligations des travailleurs et de l\'employeur
Appliquer le règlement intérieur et le pouvoir disciplinaire
Tenir les registres et dossiers obligatoires du personnel
Respecter les obligations déclaratives auprès des administrations',
		'jours'            => array(
			array(
				'titre'      => 'Droits et obligations',
				'matin'      => 'Obligations du travailleur et de l\'employeur ; règlement intérieur.',
				'apres_midi' => 'Hygiène et sécurité.',
			),
			array(
				'titre'      => 'Discipline',
				'matin'      => 'Faute et sanctions ; procédure disciplinaire.',
				'apres_midi' => 'Droits de la défense.',
			),
			array(
				'titre'      => 'Gestion administrative',
				'matin'      => 'Embauche et déclarations ; registres et dossiers ; absences et congés.',
				'apres_midi' => 'Fin de contrat ; calendrier.',
			),
		),
		'livrables'        => 'Calendrier des obligations administratives
Modèles de documents RH',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Employeurs et salariés ont des droits et des obligations dont le respect conditionne une relation de travail saine. Ce séminaire de 3 jours fait le point sur les obligations des travailleurs et de l\'employeur et sur la gestion administrative du personnel. Chaque participant repart avec un calendrier des obligations administratives.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code du travail sénégalais et les conventions collectives, analyse de jurisprudence, exercices de rédaction, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Identifier les obligations de loyauté, d\'exécution et de discrétion du salarié</li>
<li>Rédiger ou mettre à jour un règlement intérieur</li>
<li>Tenir le registre de l\'employeur et les dossiers individuels</li>
<li>Effectuer les déclarations auprès de l\'inspection du travail, de l\'IPRES et de la CSS</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise des obligations et de la gestion administrative du personnel ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Conformité sociale assurée ; contentieux et sanctions administratives évités.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-gestion-juridique-des-contrats-de-travail',
		'titre'            => 'Gestion juridique des contrats de travail',
		'domaine'          => 'Droit',
		'hero'             => 'Repartez avec des modèles de contrats et de clauses.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Responsables RH, juristes, gestionnaires du personnel, dirigeants',
		'prerequis'        => 'Notions de droit du travail.',
		'objectifs'        => 'Choisir le contrat adapté à chaque situation
Rédiger un contrat de travail et ses clauses particulières
Gérer la modification et la suspension du contrat
Sécuriser la rupture du contrat',
		'jours'            => array(
			array(
				'titre'      => 'Conclure',
				'matin'      => 'Types de contrats ; conditions de validité.',
				'apres_midi' => 'Rédaction ; clauses particulières.',
			),
			array(
				'titre'      => 'Exécuter',
				'matin'      => 'Modification ; suspension (maladie, maternité, mise à pied).',
				'apres_midi' => 'Transfert d\'entreprise.',
			),
			array(
				'titre'      => 'Rompre',
				'matin'      => 'Démission, licenciement, rupture négociée, fin de CDD ; indemnités.',
				'apres_midi' => 'Documents de fin de contrat.',
			),
		),
		'livrables'        => 'Modèles de contrats et de clauses
Simulateur d\'indemnités de rupture',
		'evaluation'       => 'Étude de cas finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(
			'Excel',
		),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le contrat de travail fixe le cadre de la relation entre l\'employeur et le salarié : sa rédaction et sa gestion demandent rigueur. Ce séminaire de 3 jours couvre le choix du contrat, sa rédaction, sa modification, sa suspension et sa rupture. Chaque participant repart avec des modèles de contrats et de clauses.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code du travail sénégalais et les conventions collectives, analyse de jurisprudence, exercices de rédaction, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Distinguer CDI, CDD, contrat de stage, d\'apprentissage et de prestation</li>
<li>Rédiger les clauses de période d\'essai, de mobilité, de non-concurrence et de confidentialité</li>
<li>Traiter une modification du contrat ou des conditions de travail</li>
<li>Calculer les indemnités de rupture et établir les documents de fin de contrat</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Sécurité juridique dans la gestion des contrats ; modèles prêts à l\'emploi ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Contrats sécurisés ; contentieux prud\'homaux réduits ; coûts de rupture maîtrisés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-droit-social-et-gestion-administrative-du-personnel',
		'titre'            => 'Droit social et gestion administrative du personnel',
		'domaine'          => 'Droit',
		'hero'             => 'Repartez avec un guide des démarches sociales.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'Gestionnaires du personnel, assistants RH, gestionnaires de paie, responsables administratifs',
		'prerequis'        => 'Aucun prérequis.',
		'objectifs'        => 'Connaître le système de protection sociale sénégalais
Gérer les affiliations, déclarations et cotisations sociales
Traiter les accidents du travail, maladies professionnelles et prestations familiales
Organiser la gestion administrative et sociale du personnel',
		'jours'            => array(
			array(
				'titre'      => 'Protection sociale',
				'matin'      => 'IPRES, CSS, IPM et couverture maladie ; affiliations.',
				'apres_midi' => 'Cotisations.',
			),
			array(
				'titre'      => 'Risques professionnels',
				'matin'      => 'Accidents du travail et maladies professionnelles ; prestations familiales.',
				'apres_midi' => 'Maternité.',
			),
			array(
				'titre'      => 'Gestion administrative',
				'matin'      => 'Déclarations ; retraite.',
				'apres_midi' => 'Contrôles des organismes ; guide des démarches.',
			),
		),
		'livrables'        => 'Guide des démarches sociales
Calendrier des déclarations sociales',
		'evaluation'       => 'Exercices pratiques notés et quiz final. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Le droit social couvre à la fois le droit du travail et la protection sociale. Ce séminaire de 3 jours fait le point sur les règles de la protection sociale sénégalaise (IPRES, CSS, couverture maladie) et sur leur gestion administrative. Chaque participant repart avec un guide des démarches sociales.</p>
<p>Pédagogie active avec 70 % de pratique : exposés appuyés sur le Code du travail sénégalais et les conventions collectives, analyse de jurisprudence, exercices de rédaction, études de cas.</p>
<h3>Compétences développées</h3>
<ul>
<li>Affilier l\'entreprise et les salariés aux organismes sociaux</li>
<li>Établir les déclarations sociales et calculer les cotisations</li>
<li>Déclarer un accident du travail et suivre le dossier</li>
<li>Constituer un dossier de retraite et de prestations</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Maîtrise de la protection sociale et de sa gestion ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Obligations sociales respectées ; majorations évitées ; salariés mieux protégés.</p>',
	),
	array(
		'type'             => 'seminaire',
		'slug'             => 'seminaire-dialogue-social-et-negociation-collective-en-entreprise',
		'titre'            => 'Dialogue social et négociation collective en entreprise',
		'domaine'          => 'Droit',
		'hero'             => 'Repartez avec une méthode de préparation des négociations.',
		'heures'           => '24',
		'duree_texte'      => '3 jours',
		'format'           => 'Présentiel Dakar ou intra',
		'participants_max' => '16',
		'pratique_pct'     => '70',
		'horaires'         => '8h30 – 12h30 · 14h – 17h30',
		'elearning'        => 'Accès 3 mois à la plateforme eLearning',
		'public'           => 'DRH, responsables RH, dirigeants, représentants du personnel, délégués syndicaux',
		'prerequis'        => 'Notions de droit du travail.',
		'objectifs'        => 'Connaître le cadre juridique des relations collectives de travail
Organiser le dialogue avec les représentants du personnel
Préparer et conduire une négociation collective
Prévenir et gérer les conflits collectifs',
		'jours'            => array(
			array(
				'titre'      => 'Cadre',
				'matin'      => 'Liberté syndicale ; délégués du personnel.',
				'apres_midi' => 'Conventions collectives ; accords d\'établissement.',
			),
			array(
				'titre'      => 'Négocier',
				'matin'      => 'Préparation ; stratégie.',
				'apres_midi' => 'Conduite de la négociation ; simulation.',
			),
			array(
				'titre'      => 'Conflits',
				'matin'      => 'Conflits collectifs ; grève.',
				'apres_midi' => 'Conciliation, médiation, arbitrage ; pacte de stabilité sociale.',
			),
		),
		'livrables'        => 'Méthode de préparation des négociations
Modèle d\'accord d\'entreprise',
		'evaluation'       => 'Mise en situation finale. Attestation de réussite délivrée après évaluation finale.',
		'outils'           => array(),
		'infos_pratiques'  => '3 jours, de 8h30 à 12h30 et de 14h à 17h30 ; pauses café et déjeuner incluses
Sessions inter-entreprises à Dakar en 2027, calendrier communiqué sur demande ; ou en intra dans les locaux du client ou sur un campus IAM, à Dakar comme en région
Groupe de 16 participants maximum, encadré par un formateur expert
Participants munis de leur ordinateur portable ; outils et supports d\'exercice fournis
Formation en français',
		'contenu'          => '<p>Un dialogue social de qualité prévient les conflits et favorise des accords utiles à tous. Ce séminaire de 3 jours présente le cadre juridique des relations collectives et les techniques de négociation collective. Chaque participant repart avec une méthode de préparation des négociations.</p>
<p>Pédagogie active avec 70 % de pratique : simulations de négociation, analyse de cas, jeux de rôle.</p>
<h3>Compétences développées</h3>
<ul>
<li>Organiser les élections des délégués du personnel</li>
<li>Animer les réunions avec les institutions représentatives</li>
<li>Préparer une négociation collective : diagnostic, mandat, marges</li>
<li>Rédiger et faire appliquer un accord d\'entreprise</li>
</ul>
<h3>Ce que vous y gagnez</h3>
<p><strong>Pour vous :</strong> Capacité à conduire un dialogue social constructif ; attestation de réussite.</p>
<p><strong>Pour votre organisation :</strong> Climat social apaisé ; accords équilibrés ; conflits collectifs prévenus.</p>',
	),
);
