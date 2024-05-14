<header class="bg-black bg-opacity-90 flex justify-between items-center p-6">
        <h1 class="text-white font-bold">Espace Administrateur</h1>
        <div class="flex items-center space-x-4 mr-9">
            <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('home') }}">Revenir à l'accueil</a>
            <img class="h-32" src="https://i.ibb.co/xFm5wmy/Logo-FFS-removebg-preview.png" alt="Logo-FFS"></a>
        </div>
    </header>

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