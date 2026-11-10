<?php
/**
 * Programme Cloud & IA (Innovation Center, IAM × Aviro) : source unique.
 *
 * Lu à deux endroits, pour qu'ils restent identiques :
 * - le bloc [iam_cloud_ia] de la page Innovation Center (IAM_Cert_Cloud_IA) ;
 * - les deux fiches « certificat » du catalogue, créées par le seeder v1.10.
 *
 * Contenu repris de https://education-cloudia.aviro-it.com/. Prix : tarif de
 * cette page + 50 000 FCFA (demande du Groupe IAM, comme les certificats BBA) ;
 * l'examen AWS (60 000 FCFA) reste inchangé, la majoration porte sur la
 * formation. Pack : 770 000 + 50 000 → 820 000 FCFA, au lieu de 970 000.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$public_cloud = array( 'Étudiants et jeunes diplômés', 'Personnes en reconversion professionnelle', 'Fonctions non techniques qui travaillent avec l’IT' );
$public_ai    = array( 'Développeurs et profils data', 'Chefs de projet et managers', 'Toute personne qui veut utiliser l’IA générative dans son métier' );

$commun = array(
	'type'        => 'certificat',
	'domaine'     => 'IA, Data & Cloud',
	'heures'      => '22',
	'duree_texte' => '13 semaines',
	'format'      => 'Hybride : séances en direct au Centre d’excellence (campus IAM, Mermoz) et travail en ligne sur les contenus officiels AWS',
	'rythme'      => 'Une séance de 2 h par semaine + 4 à 6 h de travail autonome',
	'niveau'      => 'débutant',
	'cta_texte'   => 'Candidater',
	'sessions'    => 'Démarrage le 14 décembre 2026 (13 semaines), inscriptions jusqu’au 4 décembre | Centre d’excellence Cloud & IA, campus IAM, 7606 Mermoz, Dakar',
	'evaluation'  => 'Deux examens blancs en conditions réelles, corrigés en séance : à partir de 75 %, vous réservez l’examen officiel ; en dessous, un plan de remédiation personnalisé. L’examen AWS (environ 65 questions en 90 minutes, score minimal 700/1000) se passe en fin de semaine 12 au centre Pearson VUE d’IAM ou en ligne, en français ou en anglais. Badge numérique Credly vérifiable, certification valable 3 ans.',
);

return array(
	'url'              => 'https://education-cloudia.aviro-it.com/',
	'innovation_page'  => '/innovation-center/',
	'fin_offre'        => '2026-11-20 23:59:59',
	'fin_inscriptions' => '2026-12-04 23:59:59',
	'demarrage'        => '14 décembre 2026',

	'pack'             => array(
		'prix'      => '820 000',
		'au_lieu'   => '970 000',
		'economie'  => '150 000',
		'deux_fois' => '2 × 410 000',
	),

	'parcours'         => array(
		'cloud' => array_merge(
			$commun,
			array(
				'slug'         => 'cloud-foundations-aws-cloud-practitioner',
				'titre'        => 'Cloud Foundations · AWS Certified Cloud Practitioner',
				'nom'          => 'Cloud Foundations',
				'num'          => 'Parcours 1',
				'certif'       => 'AWS Certified Cloud Practitioner · CLF-C02',
				'hero'         => 'En 13 semaines, préparez et passez la certification AWS d’entrée, examen inclus : séances en direct avec des experts, labs pratiques et projet en équipe.',
				'public_liste' => $public_cloud,
				'public'       => implode( ', ', $public_cloud ),
				'prerequis'    => 'Aucun diplôme technique exigé : bases en informatique et anglais technique de base. Un test de positionnement en ligne (15 minutes) confirme le parcours.',
				'appris'       => array( 'Concepts du Cloud et infrastructure mondiale AWS', 'Calcul, réseau, stockage et bases de données', 'Sécurité, IAM et modèle de responsabilité partagée', 'Serverless, supervision et bonnes pratiques d’architecture', 'Tarification, facturation et optimisation des coûts' ),
				'projet'       => 'Une application déployée sur AWS',
				'projet_final' => 'Par équipes de 3 à 5, de la semaine 6 à la semaine 13 : concevoir et déployer une application sur AWS, puis la présenter à la clôture de la promotion. Le projet rejoint votre portfolio.',
				'debouches'    => "Technicien ou administrateur cloud junior\nSupport et exploitation des infrastructures\nCommercial ou avant-vente de solutions cloud\nChef de projet ou consultant en transformation numérique\nSuivi et optimisation des coûts cloud (FinOps)\nÉtape suivante : AWS Solutions Architect ou Developer Associate",
				'debouches_c'  => 'Technicien ou administrateur cloud junior, support et exploitation, avant-vente cloud, chef de projet en transformation numérique, FinOps.',
				'outils'       => array( 'AWS', 'AWS Academy', 'AWS Skill Builder' ),
				'image'        => 'formations/cloud-foundations-aws-cloud-practitioner.jpg',
				'image_alt'    => 'Une apprenante IAM travaille sur son ordinateur portable',
				'prix'         => '460 000',
				'deux_fois'    => '2 × 230 000 FCFA',
				'detail'       => 'Formation 400 000 FCFA + examen AWS 60 000 FCFA',
				'cout'         => '460 000 FCFA examen inclus (formation 400 000 + examen AWS 60 000), ou en 2 fois : 2 × 230 000 FCFA par Orange Money, Wave ou sur place.',
				'test'         => 'test-positionnement.html#cloud',
				'objectifs'    => "Expliquer les concepts du Cloud et l’infrastructure mondiale AWS\nChoisir les services de calcul, réseau, stockage et bases de données adaptés à un besoin\nSécuriser un compte AWS selon le modèle de responsabilité partagée\nDécrire une architecture hautement disponible selon le cadre Well-Architected\nEstimer et optimiser les coûts d’une architecture\nRéussir l’examen AWS Certified Cloud Practitioner (CLF-C02)",
				'modules'      => array(
					array( 'titre' => 'Phase 1 · Lancement (semaine 1)', 'lecons' => array( 'Présentation du parcours, du calendrier et du groupe d’entraide', 'Résultats du test de positionnement', 'Activation d’AWS Academy et de Skill Builder' ) ),
					array( 'titre' => 'Phase 2 · Apprentissage et pratique (semaines 2 à 7)', 'lecons' => array( 'Concepts Cloud et infrastructure mondiale : IaaS, PaaS, SaaS, régions et zones', 'Calcul et réseau : EC2, VPC, équilibrage de charge, Auto Scaling', 'Stockage et bases de données : S3, EBS, RDS, DynamoDB', 'Semaine de labs : Lambda et IAM', 'Sécurité et conformité : responsabilité partagée, IAM, MFA ; lancement du projet', 'Serverless, supervision, architecture : Lambda, CloudWatch, CloudFormation, Well-Architected' ) ),
					array( 'titre' => 'Phase 3 · Préparation à l’examen (semaines 8 à 11)', 'lecons' => array( 'Coûts, facturation et support ; examen blanc n°1', 'Correction de l’examen blanc et plan de remédiation', 'Cas pratiques d’entreprise : migration, résilience, coûts ; examen blanc n°2', 'Bilan et décision de passage' ) ),
					array( 'titre' => 'Phase 4 · Certification et restitution (semaines 12 et 13)', 'lecons' => array( 'Bootcamp de révision : 30 questions chronométrées', 'Examen AWS Certified Cloud Practitioner', 'Restitution des projets en équipe et clôture' ) ),
				),
			)
		),
		'ai'    => array_merge(
			$commun,
			array(
				'slug'         => 'ai-foundations-aws-ai-practitioner',
				'titre'        => 'AI Foundations · AWS Certified AI Practitioner',
				'nom'          => 'AI Foundations',
				'num'          => 'Parcours 2',
				'certif'       => 'AWS Certified AI Practitioner · AIF-C01',
				'hero'         => 'En 13 semaines, maîtrisez l’IA générative sur AWS et passez la certification AI Practitioner, examen inclus : Bedrock, prompt engineering, RAG et IA responsable.',
				'public_liste' => $public_ai,
				'public'       => implode( ', ', $public_ai ),
				'prerequis'    => 'Notions de Cloud utiles (Cloud Practitioner conseillé, non obligatoire) et anglais technique de base. Un test de positionnement en ligne (15 minutes) confirme le parcours.',
				'niveau'       => 'intermédiaire',
				'appris'       => array( 'Fondamentaux de l’IA, du machine learning et du deep learning', 'IA générative : modèles de fondation, tokens, embeddings', 'Amazon Bedrock, prompt engineering et RAG', 'Personnaliser et évaluer un modèle ; Amazon Q et cas métiers', 'IA responsable, sécurité et gouvernance' ),
				'projet'       => 'Un assistant IA avec Amazon Bedrock',
				'projet_final' => 'Par équipes de 3 à 5, de la semaine 6 à la semaine 13 : concevoir un assistant IA avec Amazon Bedrock pour un cas métier réel, puis le présenter à la clôture de la promotion. Le projet rejoint votre portfolio.',
				'debouches'    => "Chef de projet ou product owner IA\nConsultant IA dans un métier : banque, télécoms, santé, agriculture\nAnalyste de données ou business analyst\nDéveloppeur d’applications d’IA générative, avec des bases en programmation\nRéférent IA responsable et gouvernance des données\nÉtape suivante : AWS Machine Learning Engineer Associate",
				'debouches_c'  => 'Chef de projet ou product owner IA, consultant IA (banque, télécoms, santé, agriculture), analyste de données, développeur d’applications d’IA générative.',
				'outils'       => array( 'AWS', 'Amazon Bedrock', 'Amazon Q', 'AWS Skill Builder' ),
				'image'        => 'formations/ai-foundations-aws-ai-practitioner.jpg',
				'image_alt'    => 'Deux professionnels IAM devant un écran de code',
				'prix'         => '510 000',
				'deux_fois'    => '2 × 255 000 FCFA',
				'detail'       => 'Formation 450 000 FCFA + examen AWS 60 000 FCFA',
				'cout'         => '510 000 FCFA examen inclus (formation 450 000 + examen AWS 60 000), ou en 2 fois : 2 × 255 000 FCFA par Orange Money, Wave ou sur place.',
				'test'         => 'test-positionnement.html#ai',
				'objectifs'    => "Expliquer les fondamentaux de l’IA, du machine learning et du deep learning\nComprendre l’IA générative : modèles de fondation, tokens, embeddings\nConstruire un assistant avec Amazon Bedrock, le prompt engineering et le RAG\nPersonnaliser et évaluer un modèle ; utiliser Amazon Q sur des cas métiers\nAppliquer les principes d’IA responsable, de sécurité et de gouvernance\nRéussir l’examen AWS Certified AI Practitioner (AIF-C01)",
				'modules'      => array(
					array( 'titre' => 'Phase 1 · Lancement (semaine 1)', 'lecons' => array( 'Présentation du parcours, du calendrier et du groupe d’entraide', 'Résultats du test de positionnement', 'Activation de Skill Builder et des labs IA' ) ),
					array( 'titre' => 'Phase 2 · Apprentissage et pratique (semaines 2 à 7)', 'lecons' => array( 'Fondamentaux de l’IA, du machine learning et du deep learning', 'IA générative : modèles de fondation, tokens, embeddings', 'Amazon Bedrock et prompt engineering', 'Semaine de labs IA générative', 'RAG et personnalisation de modèles ; lancement du projet', 'Évaluer un modèle ; Amazon Q et cas métiers' ) ),
					array( 'titre' => 'Phase 3 · Préparation à l’examen (semaines 8 à 11)', 'lecons' => array( 'IA responsable, sécurité et gouvernance ; examen blanc n°1', 'Correction de l’examen blanc et plan de remédiation', 'Cas pratiques métiers ; examen blanc n°2', 'Bilan et décision de passage' ) ),
					array( 'titre' => 'Phase 4 · Certification et restitution (semaines 12 et 13)', 'lecons' => array( 'Bootcamp de révision : questions chronométrées', 'Examen AWS Certified AI Practitioner', 'Restitution des projets en équipe et clôture' ) ),
				),
			)
		),
	),

	/*
	 * Séminaires de 3 jours du catalogue 2027 à renommer pour ne pas les
	 * confondre avec les parcours de 13 semaines (slug => [ancien, nouveau]).
	 */
	'renommages'       => array(
		'seminaire-certification-aws-cloud-foundations' => array( 'Certification AWS – Cloud foundations', 'Préparation intensive AWS Cloud Practitioner (3 jours)' ),
		'seminaire-certification-aws-iam-foundations'   => array( 'Certification AWS – IAM foundations', 'Sécurité des accès sur AWS : le service IAM (3 jours)' ),
	),
);
