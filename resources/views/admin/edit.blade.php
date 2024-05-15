<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recensement accident spéléologie</title>
    <link rel="stylesheet" href="./style.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-fixed bg-center mx-0 my-0" style="background-image: url(https://i.goopics.net/s83qra.jpg)";>
    <header class="bg-black bg-opacity-90 flex justify-between items-center p-6">
        <h1 class="text-white font-semibold">Editeur incidents</h1>
        <div class="flex items-center space-x-4 mr-9">
            <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.dashboard') }}">Espace administrateur</a>
            <img class="h-32" src="https://i.ibb.co/xFm5wmy/Logo-FFS-removebg-preview.png" alt="Logo-FFS"></a>
        </div>
    </header>

<h1 class="text-white font-semibold text-xl my-4 text-center"> Modifier les données de l'incident de {{$incident -> lieu_dit}} posté par {{$incident -> prenom}} {{$incident -> nom}} </h1>
<form method="POST" action="{{ route('admin.update', $incident->id) }}" class="space-y-4 bg-white opacity-90 p-6 rounded-lg shadow-md my-3 w-9/12 mx-auto">
    @csrf
    @method('PATCH')
    <div class="flex flex-col space-y-4">
        <div>
            <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
            <input type="varchar" id="nom" name="nom" value="{{ $incident->nom }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom :</label>
            <input type="varchar" id="prenom" name="prenom" value="{{ $incident->prenom }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date :</label>
            <input type="date" id="date" name="date" value="{{ $incident->date }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="lieu_dit" class="block text-sm font-medium text-gray-700">Lieu dit :</label>
            <input type="varchar" id="lieu_dit" name="lieu_dit" value="{{ $incident->lieu_dit }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="incident" class="block text-sm font-medium text-gray-700">Description de l'incident :</label>
            <input type="textarea" name="incident" value="{{ $incident->incident }}" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>
    </div>
    <div>
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Mettre à jour</button>
    </div>
</form>
