# Offre de stage Wiilog

## INFO :

- J'ai ajouté des Fixtures afin de tester l'application :
    - seul l'admin a les droits de création, de modification et de suppression.
    - l'utilisateur classique ne peut que visualiser.
    - admin : admin@admin.com => mdp : admin
    - utilisateur test : elneris@test.com => mdp : test
        

Exercice technique dans le cadre d'une demande de stage à Wiilog !
Bien que nous avons commencé symfony 4 il y a seulement 3 semaines, j'ai choisi de réaliser cette exercice sous ce,
framework et non en mvc pour plus de challenge.

**Dans les technos de votre choix, développez une application web qui doit contenir les fonctionnalités suivantes :**

- Gestion des données entreprises :
    - Créer/Modifier/supprimer des entreprises
    
- Gestion des données contacts :
    - Créer/Modifier/supprimer des contacts
    
- Règles de gestion :
    - Un entreprise peut avoir 1 ou plusieurs contacts
    - Un contact ne peut avoir qu’une seule entreprise
    - Pouvoir afficher sur la même page web les informations de l’entreprise et les contacts associés
    - Interface html/css libre
    
- Données :
    - Entreprises :
        - Nom société (texte - Obligatoire)
        - Email (texte)
        - Type : (liste à sélection unique)
            - Prospect
            - Client
        - Français : Oui/Non
    - Contact :
        - Nom (texte - Obligatoire)
        - Email (texte)