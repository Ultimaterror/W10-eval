Pour récupérer le dossier :
- Créer le dossier où tous les fichiers du repository vont être stockés.
- Dans le terminal :
    - aller dans ce fichier (commande cd)
    - git clone https://github.com/Ultimaterror/w10-eval.git .
    - composer install
    - cp .env.example .env
- Créer une BDD
- Modifier le .env ligne 13 en mettant le nom de la BDD
- Dans le terminal : php artisan migrate --seed


Mes trucs en plus :
 
Comme j'ai fait des controlleurs de type 'resource', j'ai' utilisé la route ci-dessous (dans le fichier web.php): 
````
Route::get('personnages/creer', [CharacterController::class, 'create']);
Route::get('personnages/{personnage}/modifier', [CharacterController::class, 'edit']);
Route::resource('personnages', CharacterController::class)->except(['edit', 'create']);
````
Il faut placer les routes personnalisées avant la route 'resource' sinon ça ne marche pas.
Normalement c'est plus court mais au moins j'ai réussi à changer les URLs en français.


J'ai dû aller dans 'App/Providers/RouteServiceProvider.php' pour que mes changements en français marche avec les fonctions des controlleurs de type 'resource'. J'ai juste rajouté les 2 lignes ci-dessous : 
````
Route::model('personnage', Character::class);
Route::model('dessinateur', Drawer::class);
````