<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recensement accident spéléologie</title>
    <link rel="stylesheet" href=".css/app.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-fixed bg-center mx-0 my-0" style="background-image: url(https://i.goopics.net/s83qra.jpg)";>
    <header class="bg-black bg-opacity-90 flex justify-between items-center p-6">
        <h1 class="text-white font-semibold">Rapport d'incident FFS</h1>
        <div class="flex items-center space-x-4 mr-9">
            <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.dashboard') }}">Espace administrateur</a>
            <img class="h-32" src="https://i.ibb.co/xFm5wmy/Logo-FFS-removebg-preview.png" alt="Logo-FFS"></a>
        </div>
    </header>
    @if (session('status'))
    <div id="flash" class="fixed top-12 right-4 bg-green-600 text-white text-lg font-semibold rounded-lg shadow-lg px-4 py-2 opacity-0 transition-opacity transform duration-500 ease-in-out z-50">
        {{ session('status') }}
    </div>
    <script>
      
        let flash = document.getElementById('flash');
        setTimeout(function() {
            flash.classList.add('opacity-100'); 
        }, 200);
        setTimeout(function() {
            flash.classList.remove('opacity-100'); 
            flash.classList.add('translate-x-full');  
            setTimeout(function() {
                flash.style.display = 'none';  
            }, 1000); 
        }, 3000);  
    </script>
@endif


    <section class="content  w-auto flex items-center justify-center">
        <form action="{{ route('incident.store') }}" method="post" class="space-y-4 bg-white opacity-90 p-6 rounded-lg shadow-md my-3 ">
            @csrf
            <h1 class=" font-normal mb-4 text-blue-500"> Formulaire de déclaration d'incident. La déclaration sera ensuite vérifier et publier par un administrateur du site.</h1>
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



    <div class="overflow-x-auto opacity-90">
        <table class="table-auto w-3/6 divide-y divide-gray-200 mx-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Prénom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Lieu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Incident</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200  w-3/6">
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


</body>

</html>