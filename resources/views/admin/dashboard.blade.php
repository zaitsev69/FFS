<div>
    <h1> Espace administrateur </h1>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Incident</th>
            <!-- Ajoutez d'autres colonnes au besoin -->
        </tr>
    </thead>
    <tbody>
        @foreach ($incidents as $incident)
            <tr>
                <td>{{ $incident->id }}</td>
                <td>{{ $incident->prenom }}</td>
                <td>{{ $incident->incident }}</td>
                <!-- Ajoutez d'autres colonnes au besoin -->
            </tr>
        @endforeach
    </tbody>
</table>