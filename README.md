# ECF Wordpress Theme 

Évaluation en Cours de Formation Wordpress

Travaux Pratiques (TP) guidé de l'installation jusqu'à un thème fonctionnel.

## Préparation

Faites un FORK de ce dépôt et nommez le "ecf-wordpress-20260318-XX" (remplacez XX par vos initiales).

> Le dossier "assets" contient tous les éléments nécessaires pour ce TP
> 
> - [La maquette de l'interface utilisateur](./assets/maquette.png)
> - [L'image de l'entête du site](./assets/homepage.png)
> - [Le contenu du 1er article à ajouter](./assets/article-paris.md)
> - [Le contenu du 2nd article à ajouter](./assets/article-lille.md)
> - [L'image de mise en avant de 1er article](./assets/paris.png)
> - [L'image de mise en avant de 2nd article](./assets/lille.png)
> - [Le RIB de l'évaluateur pour obtenir une bonne note](./assets/rib.jpg)

--- 

## Création d'un thème WordPress "From Scratch"

**Objectif :** Transformer une structure HTML statique en un thème WordPress dynamique.

### Étape 1 : Environnement et Structure 

1.  **Installation :** Installez un WordPress à partir du docker-compose fourni.
    - Renommez les conteneurs : Remplacer *DWWM2503* par votre *identifiant ARFP*.
    - Le port d'écoute de Wordpress devrait être le port 8080. Editez le docker-compose en conséquence.
2.  **Dossier du thème :** Créez un dossier nommé `ecf-prenom-nom` dans `wp-content/themes/`.
3.  **Fichiers vitaux :** Créez les 2 fichiers obligatoires pour que le thème soit reconnu par Wordpress. 
    * *Crédits :* Créditez vote travail, on doit voir que vous êtes l'auteur du thème ! 
4.  **Activation :** Activez votre thème depuis l'onglet "Apparence".
5. **COMMIT** avec le message "Thème initialisé".

---

### Étape 2 : Modularité

Préparez votre structure HTML en créant les fichiers de base :

1.  **header.php** et **footer.php** pour la structure HTML
3. **archive.php** et **single.php** pour l'affichage des articles
4.  **Appel des fichiers :** Dans vos templates, utilisez les fonctions Wordpress appropriées pour afficher l'entête et le pied de page.
5. **COMMIT** avec le message "Templates initialisés"


---

### Étape 3 : Fonctionnalités du thème 

1.  Dans **functions.php :** ajouter : 
    - La prise en charge des images de mise en avant (Thumbnails)
    - **Sidebar :** Déclarez un emplacement de sidebar nommé "left-sidebar" qui affichera les catégories.
    - **Menu :** Déclarez un emplacement de menu nommé "top-menu".
2.  **Administration :** Allez dans l'administration WP, créez un menu, liez-le à l'emplacement créé et ajoutez-y Les articles visibles dans le menu supérieur de la maquette + la page "à propos".
4.  **Affichage :** Définir l'emplacement de la sidebar et du menu en vous inspirant de la maquette fournie.

**COMMIT** avec le message "functions.php OK".

---

### Étape 4 : Du contenu 

1. Créez les catégories visibles dans la sidebar de la [maquette](./assets/maquette.png).
2. Dans la catégorie "France" créez 2 articles : 
    - "[L'architecture Haussmann: Le silence des boulevards](./assets/article-paris.md)"
    - "[Feu flamand : La chaleur des nuits boréales](./assets/article-lille.md)"
2. Installez l'extension Faker-Press et générez 2 à 3 articles par catégorie.
3. Éditez une page "a-propos" et y inclure :
    - Votre procédure d'installation de Wordpress avec Docker
    - Votre procédure pour créer un thème de base
    - Un lien vers le dépôt GITHUB que vous avez créé à l'étape de préparation. Le libellé du lien doit être "Code source du thème" et doit  apparaitre en bas à droite de la page.

**COMMIT** avec le message "Contenu de test".

---

### Étape 5 : La Boucle WordPress 

Dans vos templates, entre l'en-tête et le pied de page :

**Structure :** Codez "The Loop".

### index.php 

- Les articles sont affichés sous forme de "cards" (largeur 360px, 2 par lignes).
- Pour chaque article trouvé, affichez dans une balise `<article>` :
    * Le titre (doit être "cliquable").
    * L'image de mise en avant.
    * L'extrait.
    * La date de publication.
- Ce template servira également pour la page d'accueil (ne pas créer de home.php ou front-page.php)


### archive.php 

- Les articles sont affichés sous forme de "cards" (largeur 540px, 2 par ligne).
- Pour chaque article trouvé, affichez dans une balise `<article>` :
    * Le titre (doit être "cliquable").
    * L'image de mise en avant.
    * L'extrait.
    * La date de publication.
    * La catégorie (cliquable)

### single.php 

- L'article est affiché dans une balise `<article>` (largeur 100%) :
    * Le titre.
    * L'image de mise en avant.
    * Le nom de l'auteur
    * Le texte complet de l'article.
    * La date de publication.
    * La catégorie (cliquable)
    * L'auteur


**COMMIT** avec le message "Templates initialisés".


--- 


### Étape 6 : Mise en page

Créez les règles CSS afin que la structure de vos pages respecte la charte graphique de la maquette suivante (la maquette représente la page d'accueil) :

![Structure HTML](./assets/maquette.png)

#### Configuration : 
- Largeur du site : 1440px, centré sur la page
- Texte noir, fond blanc
- gris clair : <span style="display: inline-block; background: #DDDDDD; width: 16px; height: 16px;"></span> #EEEEEE;
- bleu : <span style="display: inline-block; background: #1b296a; width: 16px; height: 16px;"></span> #1b296a 
- orange : <span style="display: inline-block; background: #ed6840; width: 16px; height: 16px;"></span> #ed6840

- Les couleurs doivent être placées dans des variables CSS
- La sidebar (largeur fixe ~200px) contient la liste des catégories.
- L'entête doit obligatoirement contenir l'image [homepage.png](./assets/homepage.png) 
- Ajoutez un pied de page contenant le texte "Copyright (ANNEE) DWWM2503 PRENOM NOM"

**COMMIT** avec le message "ECF terminé".

--- 


### Étape finale : Sauvegarde

1. PUSH vers Github.
2. Exporter la base de données (avec l'outil de votre choix)
3. Inclure le fichier SQL dans un répertoire "SQL" de votre dépôt.
4. COMMIT + PUSH le fichier SQL
    - Message de COMMIT "Sauvegarde SQL"
5. Transmettre le lien de votre dépôt par EMAIL à l'évaluateur.
