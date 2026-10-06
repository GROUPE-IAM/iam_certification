# IAM Certifications

Plugin WordPress de gestion des **formations certifiantes** du Groupe IAM : custom post type, taxonomies, champs, shortcode de liste, page de détail (landing) et **intégration avec le plugin IAM Leads**.

- **Version** : 1.1.0
- **Prérequis** : WordPress 6.0+, PHP 7.4+
- **Optionnel** : plugin **IAM Leads** (pour le formulaire de candidature embarqué)

---

## Installation

1. Copier le dossier `iam-certifications` dans `wp-content/plugins/`.
2. Dans **Extensions**, activer « IAM Certifications ».
3. Au premier chargement de l'admin, le plugin **crée automatiquement les 8 certifications** du site (sans prix ni partenaire) et, si IAM Leads est actif, **le formulaire pro multi-étapes**.

> Le seed est **idempotent** : il ne s'exécute qu'une fois (protégé par des options). Si IAM Leads est activé *après* IAM Certifications, le formulaire est créé au chargement d'admin suivant.

---

## Utilisation

### Afficher la liste — shortcode `[iam_certifications]`

À coller dans un widget *Shortcode* d'Elementor ou dans une page.

| Attribut | Rôle | Défaut |
|---|---|---|
| `columns` | colonnes grand écran (1–4) | `3` |
| `domaine` | slug(s) de domaine, séparés par des virgules | — |
| `outil` | slug(s) d'outil | — |
| `featured` | `true` = mises en avant uniquement | — |
| `limit` | nombre maximum | `-1` |
| `max_tools` | outils affichés avant « +N » | `6` |
| `group_by_domaine` | `true` = sections titrées par domaine | — |
| `filters` | `true` = barre de filtre cliquable | — |

Exemples :
```
[iam_certifications columns="3" filters="true"]
[iam_certifications group_by_domaine="true"]
[iam_certifications domaine="marketing-digital" columns="4"]
[iam_certifications featured="true" limit="3"]
```

### Page de détail

Chaque certification a sa page (`/certifications/<slug>/`), organisée en bandes pleine largeur :

| Bande | Contenu | Champs utilisés |
|---|---|---|
| 1. Hero | Image en fond avec voile vert, domaine, titre, accroche, puces (modules, heures, durée, format, niveau), bouton vidéo, boutons « Candidater » et « Prendre rendez-vous » | image mise en avant, accroche, vidéo, lien RDV, texte du bouton |
| 2. Admission | À gauche « Conditions d'admission » + public ; à droite blocs dépliables colorés **Objectifs**, **Contenu de la formation** (modules), **Évaluation & certification** | prérequis, public, objectifs, programme, évaluation |
| 3. Débouchés | Image à gauche, débouchés et outils à droite | image secondaire, débouchés, outils |
| 4. Modalités | « Durée, rythme et modalités » + blocs **Durée de la formation** et **Coût et scolarité** | volume horaire, durée, rythme, format, niveau, coût |
| 5. Téléchargements | Brochure et dossier de candidature | brochure, dossier |
| 6. Candidature | Formulaire IAM Leads + contact direct | formulaire associé |

**Tout bloc dont le champ est vide est masqué** : une fiche incomplète reste propre.
Sur mobile, une barre « Candidater » apparaît en bas d'écran une fois le hero dépassé
(et se cache quand le formulaire est visible). Les blocs dépliables sont accessibles au
clavier et restent ouverts si JavaScript est désactivé. La vidéo s'ouvre dans une fenêtre
et n'est chargée qu'au clic.

### Interface d'administration dédiée

Tout se fait **dans le plugin**, via le menu **Certifications** (pas l'éditeur WordPress) :
- **Toutes les certifications** : liste avec titre, domaine, durée, modules, statut, actions.
- **Ajouter / Modifier** : formulaire maison unique regroupant tous les champs.
- **Domaines** / **Outils** : gestion des taxonomies.

Le formulaire d'édition est un assistant en 5 étapes :
1. **Infos générales** : titre, accroche, volume horaire, durée, rythme, niveau, format.
2. **Contenu & public** : objectifs, conditions d'admission, public, débouchés, évaluation, coût et scolarité. Les champs « liste » se remplissent avec **une entrée par ligne**.
3. **Programme** : répéteur de **modules** (titre + leçons, une par ligne). Compteurs calculés automatiquement.
4. **Médias & liens** : vidéo (YouTube, Vimeo ou .mp4), image secondaire, brochure, dossier de candidature (boutons « Médiathèque »), lien de prise de RDV, texte du bouton principal.
5. **Classement & publication** : domaine, outils (CSV), image mise en avant, formulaire IAM Leads associé, statut, mise en avant.

Taxonomies : **Domaines** (catégories) et **Outils** (badges technos).

La page de détail reprend la structure des fiches groupeiam.com : hero + puces (modules · leçons · heures · durée · niveau), grille de modules/leçons, évaluation, tableau récapitulatif, public, prérequis, outils, formulaire embarqué, contact direct. Le bloc « Coût et scolarité » n'apparaît que s'il est rempli.

---

## Intégration IAM Leads

- La landing embarque le formulaire via `[iam_form id="X"]`. L'ID vient du réglage
  de la certification, sinon du **formulaire « certifications » par défaut** créé au seed.
- Le formulaire par défaut est **multi-étapes**, pensé pour les professionnels :
  1. Profil professionnel (nom, poste, entreprise, secteur, taille)
  2. Projet (objectif, financement, disponibilité)
  3. Coordonnées (e-mail pro, téléphone, contact préféré, consentement)
- Un **champ caché `certification`** (mappé sur la colonne `programme` d'IAM Leads) est
  rempli automatiquement par la landing : chaque lead est ainsi rattaché à SA certification
  (visible dans le dashboard, l'export et l'e-mail de notification). En complément,
  `utm_campaign` reçoit le slug **s'il est vide** (ne remplace jamais une vraie campagne).
- Au seed, **banel@groupeiam.com** est ajouté aux destinataires internes d'IAM Leads
  (Réglages → Destinataires internes), sans écraser les adresses existantes.

> ⚠️ Pour que les e-mails partent réellement, le **SMTP doit être configuré** dans
> IAM Leads → Réglages (l'image Docker WordPress n'a pas de service d'envoi). Sans SMTP,
> **les leads restent enregistrés en base** et visibles dans le dashboard.

Si IAM Leads est absent, la landing affiche un **repli contact direct** (e-mail + téléphone).

### Contact

Par défaut : **Banel — banel@groupeiam.com — +221 77 714 39 91**. Personnalisable via le filtre :
```php
add_filter( 'iam_cert_contact', function ( $c ) {
	$c['email'] = 'autre@groupeiam.com';
	return $c;
} );
```

---

## Surcharge des templates par le thème

Copier un template dans le thème pour le personnaliser :

- `votre-theme/iam-certifications/card.php` (carte de liste)
- `votre-theme/single-certification.php` *(ou)* `votre-theme/iam-certifications/single-certification.php` (page de détail)

---

## Contenu pré-rempli

Les 8 certifications sont **pré-remplies à partir du contenu réel** des fiches
`/certification/` de groupeiam.com (accroche, modules, leçons, niveau, format, public,
prérequis, évaluation, outils), **sans le prix ni le partenaire**.

À faire après activation :
- **Ajouter les images** mises en avant (le seed n'importe pas les visuels).
- Relire les textes dans l'admin si besoin.

> Note : sur le site, les slugs d'URL des fiches sont mélangés, mais le contenu correspond
> bien aux 8 formations ; le plugin les recrée avec des slugs propres.

---

## Structure

```
iam-certifications/
├── iam-certifications.php          Amorçage, constantes, activation/flush
├── uninstall.php                   Nettoyage des options (conserve les données)
├── includes/
│   ├── iam-cert-helpers.php        Templates surchargeables, données, modules, contact, rendu formulaire
│   ├── class-iam-cpt.php           CPT « certification »
│   ├── class-iam-taxonomies.php    Taxonomies domaine + outil
│   ├── class-iam-metaboxes.php     Metabox : infos, programme (répéteur modules), formulaire
│   ├── class-iam-admin.php         Colonnes, tri, filtre par domaine
│   ├── class-iam-assets.php        Chargement CSS/JS
│   ├── class-iam-shortcode.php     [iam_certifications]
│   ├── class-iam-template.php      Route de la page de détail
│   ├── class-iam-seeder.php        Seed : 8 certifs + formulaire pro
│   └── data/
│       └── certifications-seed.php Données scrapées des 8 fiches
├── templates/
│   ├── card.php                    Carte de liste
│   └── single-certification.php    Page de détail (landing)
└── assets/
    ├── css/iam-front.css           Design --ckd-* responsive
    ├── css/iam-admin.css
    ├── js/iam-front.js             Filtre + pont formulaire
    └── js/iam-admin.js             Répéteur de modules
```

---

## Journal des versions

### 1.1.0
- Nouvelle page de détail en bandes pleine largeur (hero sur image, blocs dépliables colorés, bande débouchés, bande modalités, bandeau de téléchargement).
- Nouveaux champs : objectifs, débouchés, rythme, coût et scolarité, vidéo, image secondaire, brochure, dossier de candidature, lien de RDV.
- Fenêtre vidéo (chargement au clic), barre « Candidater » sur mobile.
- Admin : nouvelle étape « Médias & liens », sélecteur Médiathèque pour les fichiers, lien « Voir la page ».
- Texte du bouton par défaut : « Candidater ».
- Animations : une seule entrée orchestrée sur le hero (suppression des apparitions à chaque section).

### 1.0.0
- Version initiale.
