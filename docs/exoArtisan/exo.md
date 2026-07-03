exercice 1

1. php artisan sans argument affiche l'aide avec toutes commande disponible du CLI laravel, sa sert a voir et demander se que fais une commande artisan

2. les commande make pour creer des fichier 
les commande db
les commande magrate

3) --all --controller --factory --force --migration --morph-pivot --policy --seed --pivot --ressources --api --requests --test --pest --phpunit --help --silent --quiet --version --ansi/--no-ansi --no-interaction --env[= ENV] --verbose

l'option -m est option migration qui permet de creer des fichier migration au model

4) php artisan route:list

excercice 2

1) php artisan serve

2) http://127.0.0.1:8000

3) sa montre tout passage du site au moment et meme quand tu changes de pages

4) je peux pas faire dautre commande dans se terminal
si jai besoin de taper des commandes Artisan en parrallele il faut que je stop serveur ou que j'utilise un autre terminal

5) ctrl+C

excercice 3

partie A

- php artisan make:model Articles -m 
pour creer un model avec sa migration 

- php artisan make:controller articleController

- php artisan make:migration create_categories_table

- php artisan make:seeder ArticleSeeder 

Partie B

1) DWWM_blog/app/Models/Article.php

2) DWWM_blog/app/Http/Controller/articleContoller.php

3) Arrticle.php a par défaut un namespace, un use 
et une classe Article extends models

4) un namespace est une ligne pour identifier la classe du fichier et que le programme sais situer ou se trouve le fichier
sa evite les conflit

excercice 4

partie A

1) php artisan migrate

2) php artisan migrate:rollback

3) migrate:rollback retourne les modification de la derniere migration
migrate:fresh reset a zero toute les migration avant de les refaire

4) php artisan migrate:fresh --seed

partie B

scenario 1

php artisan migrate

scenario 2 

non car ya deja des donnée utiles pour la production et le projet 

partie C

1) des tables article et categorie ont été créer dans ma base de donnée

2) sa a retirer les tables créer précédement

3) la table a repris les donnée d'avant

excercice 5

