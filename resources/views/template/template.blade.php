{{-- Database
Vous devez créer 4 tables
Une table roles avec :
nom (admin, editeur, visiteur)
Une table users avec :
nom
prenom
age
date de naissance
email
mot de passe
photo de profile
role_id
Une table articles avec :
nom
description
date de publication
user_id
Une table commentaires avec :
contenu
article_id
Blades
Au niveau interface, je vais vous demander une barre de navigation verticale en html css, et faire les crud pour toutes les tables
Pour les rôles vous avez que 3 rôles
Pour les utilisateurs vous avez 5 users
Vous avez 10 articles et 20 commentaires
L'exercice doit être fini pour jeudi 17h --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partial/nav')
    @yield('content')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
