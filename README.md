BabyAdvisor
===========

A Symfony project created on June 7, 2016, 2:38 pm.

# Commit et Push sur Github

  echo "# BabyAdvisor" >> README.md
  git init
  git add README.md
  git commit -m "first commit"
  git remote add origin https://github.com/jjny/BabyAdvisor.git
  git push -u origin master

  …or push an existing repository from the command line

  git remote add origin https://github.com/jjny/BabyAdvisor.git
  git push -u origin master


# Pré-requis: (http://symfony.com/doc/current/book/installation.html)
    Tester si ils sont installé dans la console dans le repertoire de BabyAdvisor:
             • php -v
             • composer -version 
             • git -version
    Installer composer:
             • https://getcomposer.org/download/
             • http://symfony.com/doc/current/cookbook/composer.html
    Installer git:
             • https://git-for-windows.github.io/

    Si elles sont pas reconnu en tant que commande dans la console il faut les rajouter dans vos varibles d'environnement:
              •Aller dans votre hestionnaire de variable d'environnement
              •Selectionner la variable 'path'
              •Rajouter à la suite des autres : le chemin pour accéder à l'exe de composer, git ou php :
                        ex: C:\ProgramData\ComposerSetup\bin
                            C:\Program Files (x86)\Git\cmd
                            C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-binaries\php\php5619vc11x86x160607133816\




# Tester sur le navigateur l'adresse :
      • http://localhost[:port]/BabyAdvisor/web/app_dev.php/[nom-route] 
      • Sur easyPHP :http://127.0.0.1[:port]/BabyAdvisor/web/app_dev.php/[nom-route] 
      • Le numéro de port n'est pas forcément nécessaire.


# Commande symfony3:

  php bin/console generate:bundle
  php bin/console generate:doctrine:entity
  composer update 
  php bin/console cache:clear --env=dev




# Procédure Symfony:

  Les routes:

    Les fichiers route des Bundle sont dans "[NomDuBundle]/Resources/config/" et doivent s'appeler "routing.yml" (comme le fichier route global).
    La différence est que le fichier route dans le Bundle indique quel Controller utiliser (modèle MVC).

    En effet, lorsqu'on est sur une url précise, Symfony à besoin de savoir quel Controller doit être appelé. Il y a donc 3 paramètres obligatoires à préciser (il y a beaucoup d'autres paramètres obtionnels) :
    - Le nom de la route (ex : "platform_homepage")
    - Le chemin d'accès (ex : "/")
    - Le Controller à appeler (ex : "PlatformBundle:Default:index")
    Ici, le nom exacte du Controller est "indexAction" (on rajoute toujours Action à la fin du Controller), et il se situe dans le fichier "DefaultController.php".

    Le nom de la route permettra, dans nos vues, de faire des liens par route et non par url. Par exemple, <a href="{{ path('platform_homepage') }}">Accueil</a> enverra sur la route "/" avec le Controller "indexAction".

  Les Controllers :

    Une route appelle un Controller. Le rôle du Controller est de réaliser des fonctions, calculs, créations, suppressions, etc... pour ensuite envoyer les résultats dans une Vue.


  Les Vues :

    C'est la partie la plus simple. L'url appelle un Controller, le Controller manipule des données à partir des entités (entité = Model, donc on a bien un rapport Modèle -> Controller). Le Controller renvoie ces données dans une Vue (un fichier html.twig).

    Rapidement, la Vue contient du code html et du code twig (logique). Le html, tout le monde connait, le twig est ce qui va permettre de manipuler les données envoyées par le Controller.

    Par exemple, pour afficher la liste des messages sous forme d'un tableau, on peut faire :

    {% block body %}

      <table>

        <tr>
          <th>Auteur</th>
          <th>Sujet</th>
          <th>Contenu</th>
        </tr>

        <tr>
          {% for message in messages %}

            <td> {{ message.auteur }} </td>
            <td> {{ message.sujet }} </td>
            <td> {{ message.contenu }} </td>

          {% endfor %}
        </tr>

      </table>

    {% endblock %}
