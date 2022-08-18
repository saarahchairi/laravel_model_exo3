Dans un nouveau projet : laravel_model_exo_3
-nom du repo : laravel_model_exo3
-A l'aide de la base sql que je vous ai fournis,
- vous devez importer la base sql dans votre phpMyAdmin et utiliser les datas depuis votre dossier laravel. Créer la base de donnée en utf8_unicode_ci
-dans une page principale(home), il doit y avoir 6 sections au total.

chaque sections doit comporter des données bien précises, à vous de trouver comme les trier par rapport à la demande

Section1:
Section "Tous les membres" ( nombre de membres )-> trouver une méthode Laravel pour avoir le nombre exact de membres
- Tous les membres ( les hommes apparaissent en bleu et les femmes en rose, uniquement dans cette section )

Section2:
Section "Les hommes"
- Tous les membres hommes

Section3:
Section "Les femmes"
- Toutes les membres femmes

Section4:
Section "Les hommes en condition"
- Tous les membres hommes entre 18 et 24 ans inclus

Section5:
Section "Les femmes en condition"
- Tous les membres femmes entre 18 et 24 ans inclus

Section6:
Section "Les personnes hors conditions"
- Tous les membres qui ne sont pas agés entre 18 et 24 ans inclus

Au final vous devriez avoir :
- 1 View
- 1 Controller avec 1 methode "index" qui renvoie toutes les données dans la view dans des variables différentes
- 1 Model

Le sourire heart
# laravel_model_exo3
