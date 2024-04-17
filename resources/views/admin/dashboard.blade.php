<div>
    <h1> Espace administrateur </h1>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu Dit</th>
            <th>Incident</th>
            <th>Créer le</th>
            <th>Mis à jour le</th>
            <th>Is Published</th>
            <!-- Ajoutez d'autres colonnes au besoin -->
        </tr>
    </thead>
    <tbody>
        @foreach ($incidents as $incident)
            <tr>
                <td>{{ $incident->id }}</td>
                <td>{{ $incident->prenom }}</td>
                <td>{{ $incident->nom }}</td>
                <td>{{ $incident->date }}</td>
                <td>{{ $incident->lieu_dit }}</td>
                <td>{{ $incident->incident }}</td>
                <td>{{ $incident->created_at }}</td>
                <td>{{ $incident->updated_at }}</td>
                <td>{{ $incident->is_published }}</td>
                <!-- Ajoutez d'autres colonnes au besoin -->
            </tr>
        @endforeach
    </tbody>
</table>