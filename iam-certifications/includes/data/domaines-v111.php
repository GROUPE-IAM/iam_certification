<?php
/**
 * v1.11 : les thématiques (domaines) du catalogue passent de 22 à 10.
 *
 * Nouveau domaine => anciens domaines qu'il regroupe. Les noms anciens sont
 * comparés sans accents, sans casse et apostrophes unifiées ; un ancien
 * domaine absent de cette liste n'est pas touché.
 *
 * Lu par IAM_Cert_Seeder::seed_v111() (migration du site) ; les fichiers de
 * données utilisent déjà les nouveaux noms pour les installations neuves.
 *
 * @package IAM_Certifications
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'IA, Data & Cloud'                     => array( 'Intelligence Artificielle', 'Cloud & IA', 'Data & Business Intelligence', 'Data & Analyse' ),
	'Marketing & digital'                  => array( 'Marketing', 'Marketing Digital', 'Marketing Digital & IA' ),
	'Communication & langues'              => array( 'Communication', 'Anglais des affaires' ),
	'Ressources humaines & talents'        => array( 'Ressources Humaines', 'Talents × IA', 'Ingénierie pédagogique' ),
	'Management & leadership'              => array( 'Management' ),
	'Gestion & Management (BBA)'           => array(),
	'Finance, fiscalité & droit'           => array( 'Comptabilité, contrôle & audit', 'Fiscalité', 'Droit' ),
	'Gestion de projet & suivi-évaluation' => array( 'Business plan & gestion de projet', 'Suivi-évaluation de projet' ),
	'Logistique, achats & marchés publics' => array( 'Logistique & Supply Chain', 'Marchés publics & appels d’offres' ),
	'Informatique, bureautique & PAO'      => array( 'Informatique & bureautique', 'PAO & design graphique', 'ERP & Consulting' ),
);
