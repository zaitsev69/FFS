<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recensement accident spéléologie</title>
    <link rel="stylesheet" href="./style.css">
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1 class="text-gray-500 bg-blue-500"> Retour d'expériences Féderation FFS</h1>
        <a class=" inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"" href="{{ route('admin.dashboard') }}">Espace administrateur</a>
        <img src="https://upload.wikimedia.org/wikipedia/fr/8/83/Logo_FFS.jpg" alt="Logo de la FFSA">
        
    </header>
    




    <div class="overflow-x-auto opacity-90">
        <table class="table-auto w-5/6 divide-y divide-gray-200 mx-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Prénom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Lieu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Incident</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($incidents as $incident)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-50' : 'bg-white' }}">
                    <td class="px-6 py-4 w-16 whitespace-normal text-gray-500">{{ $incident->prenom }}</td>
                    <td class="px-6 py-4 w-16 whitespace-normal text-gray-500">{{ $incident->nom }}</td>
                    <td class="px-6 py-4 w-16 whitespace-normal text-gray-500">{{ $incident->date }}</td>
                    <td class="px-6 py-4 w-16 whitespace-normal text-gray-500">{{ $incident->lieu_dit }}</td>
                    <td class="px-6 py-4 w-80 whitespace-normal text-gray-500">{{ $incident->incident }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    </section>

    <section class="content bg-white opacity-90 p-6 rounded-lg shadow-md max-w-3xl mx-auto">
        <form action="{{ route('incident.store') }}" method="post" class="space-y-4">
            @csrf
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
                    <input type="varchar" id="nom" name="nom" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex-1">
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom :</label>
                    <input type="varchar" id="prenom" name="prenom" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex-1">
                    <label for="date" class="block text-sm font-medium text-gray-700">Date :</label>
                    <input type="date" id="date" name="date" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex-1">
                    <label for="lieu_dit" class="block text-sm font-medium text-gray-700">Lieu dit :</label>
                    <input type="varchar" id="lieu_dit" name="lieu_dit" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
            <div>
                <label for="incident" class="block text-sm font-medium text-gray-700">Incident :</label>
                <textarea id="incident" name="incident" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Soumettre</button>
            </div>
        </form>
    </section>
</body>

</html>