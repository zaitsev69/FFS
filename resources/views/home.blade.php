<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1> Retour d'expériences Féderation FFS</h1>
</header>
<section>
<form action="{{ route('incident.store') }}" method="post">
    @csrf
    <div>
        <label for="nom">Nom :</label>
        <input type="varchar" id="nom" name="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="varchar" id="prenom" name="prenom" required>
    </div>
    <div>
        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required>
    </div>
    <div>
        <label for="lieu_dit">Lieu dit :</label>
        <input type="varchar" id="lieu_dit" name="lieu_dit" required>
    </div>
    <div>
        <label for="incident">Incident :</label>
        <input type="text" id="incident" name="incident" required></textarea>
    </div>
    <div>
        <button type="submit">Soumettre</button>
    </div>
</form>
</section>
<a href="{{ route('login') }}">Espace administrateur</a>

</body>
</html>