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
            <td>
                <form action="{{ route('admin.togglePublish', ['id' => $incident->id]) }}" method="POST">
                    @csrf
                    <button type="submit">{{ $incident->is_published ? 'Annuler la publication' : 'Publier' }}</button>
                    
                </form>
                
        </tr>
        @endforeach
    </tbody>
    <a href="{{ route('home') }}" >Accueil</a>

</table>