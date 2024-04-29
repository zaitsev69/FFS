<h1> Modifier les données de l'incident de {{$incident -> lieu_dit}} posté par {{$incident -> prenom}} {{$incident -> nom}} </h1>
        <form method="POST" action="{{ route('admin.update', $incident->id) }}">
            @csrf
            @method('PATCH')
            <th>Nom</th>
            <input type="varchar" name="nom" value="{{ $incident->nom }}">
            <br>
            <th>Prénom</th>
            <input type="varchar" name="prenom" value="{{ $incident->prenom }}">
            <br>
            <th>Date</th>
            <input type="date" name="date" value="{{ $incident -> date }}">
            <br>
            <th>Lieu</th>
            <input type="varchar" name="lieu_dit" value="{{ $incident -> lieu_dit }}">
            <br>
            <th>Description de l'incident
            <input type="text" name="incident" value="{{ $incident -> incident }}">
            <br>
            <button type="submit">Update</button>
        </form>