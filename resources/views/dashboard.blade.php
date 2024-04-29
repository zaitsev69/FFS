<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Espace Administrateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
    <div>

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
                </td>
                <td>
                    <a href="{{ route('admin.edit', $incident->id) }}">Éditer</a>
                </td>

            </tr>
            @endforeach
        </tbody>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <a href="{{ route('home') }}">Accueil</a>

    </table>
</x-app-layout>