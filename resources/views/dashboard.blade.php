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
            Derniers incidents en date
        </h2>
    </x-slot>
    @if (session('status'))
    <div id="flash" class="alert alert-success text-center bg-slate-200 font-medium text-black text-xl">
        {{ session('status') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('flash').style.display = 'none';
        }, 5000); 
    </script>
    @endif
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
    <table class="table-auto w-9/12 divide-y divide-gray-200 mx-auto">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Prénom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Lieu Dit</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Incident</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Créer le</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Mis à jour le</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Is Published</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($incidents as $incident)
            <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50' : 'bg-white' }}">
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->id }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->prenom }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->nom }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->date }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->lieu_dit }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->incident }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->created_at }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->updated_at }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">{{ $incident->is_published }}</td>
                <td class="px-6 py-4 whitespace-normal text-gray-500">
                    <form action="{{ route('admin.togglePublish', ['id' => $incident->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ $incident->is_published ? 'Annuler la publication' : 'Publier' }}</button>
                    </form>
                    <a href="{{ route('admin.edit', $incident->id) }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Éditer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>