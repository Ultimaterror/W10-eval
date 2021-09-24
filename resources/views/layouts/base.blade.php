<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <nav>
        <a href="/">Home</a>
        <a href="/personnages">Liste des personnages</a>
        <a href="/personnages/creer">Ajouter un personnage</a>
        <a href="/dessinateurs">Liste des dessinateurs</a>
        <a href="/dessinateurs/creer">Ajouter un dessinateur</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>