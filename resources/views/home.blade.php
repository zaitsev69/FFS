<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1> Retour d'expériences Féderation FFS</h1>
        <img src="https://upload.wikimedia.org/wikipedia/fr/8/83/Logo_FFS.jpg" alt="Logo de la FFSA">
    </header>
    <section class="content">
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


        <div>
            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Incident</th>
                </tr>
                @foreach ($incidents as $incident)
                <tr>
                    <td>{{ $incident->prenom }}</td>
                    <td>{{ $incident->nom }}</td>
                    <td>{{ $incident->date }}</td>
                    <td>{{ $incident->lieu_dit }}</td>
                    <td>{{ $incident->incident }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <a href="{{ route('admin.dashboard') }}">Espace administrateur</a>
    </section>
</body>

</html>