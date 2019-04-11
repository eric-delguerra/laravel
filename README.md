Laravel Boutique Eric


Pour tester la boutique prendre la BDD dispo dans ressources/exemple_boutique.sql
    Dans PhpMyAdmin -> Créer une nouvelle table
                    -> Importer la BDD
                 
(Pour créer un nouveau projet -> laravel new NomDuProjet)

       	Après un clone ou un lancement du projet :
       		-> cp .env.exemple .env
       		-> composer install
       		-> php artisan key:generate
       		-> php artisan serv(e)
       	-> Configurer le .env avec les infos de sa BDD
       	


Pour acceder à la partie Admin du site il faut s'inscrire sur le site dans login et ensuite changer directement dans la base de données la valeur de is_admin dans Users à 1.


Enjoy Romain !