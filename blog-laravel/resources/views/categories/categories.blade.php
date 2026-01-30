<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Catégories | Digital Nexus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <div class="max-w-6xl mx-auto py-12 px-6">
        
        <div class="flex items-center justify-between mb-10">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight">Gestion des Catégories</h1>
                <p class="text-slate-500 font-medium">Organisez vos articles par thématiques.</p>
            </div>
            <a href="{{ route('admin.index') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-800">Retour au Dashboard →</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1">
                <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100">
                    <h2 class="text-xl font-bold mb-6">Ajouter une catégorie</h2>
                    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
                        @Csrf
                        <div>
                            <label class="text-xs font-black uppercase tracking-widest text-slate-400 ml-1">Nom de la catégorie</label>
                            <input type="text" name="nom" placeholder="Ex: Intelligence Artificielle" 
                                   class="w-full mt-2 bg-slate-50 border border-slate-100 rounded-xl p-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <button type="submit" class="w-full bg-black text-white font-bold py-4 rounded-xl hover:bg-slate-800 transition active:scale-95">
                            Créer la catégorie
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="p-6 text-xs font-black uppercase tracking-widest text-slate-400">Nom</th>
                                <th class="p-6 text-xs font-black uppercase tracking-widest text-slate-400 text-center">Nombre de Posts</th>
                                <th class="p-6 text-xs font-black uppercase tracking-widest text-slate-400 text-right">Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($categories as $categorie)
                            <tr class="hover:bg-slate-50/30 transition">
                                <td class="p-6">
                                    <span class="font-bold text-slate-700">{{ $categorie->nom}}</span>
                                </td>
                                <td class="p-6 text-center">
                                    <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-lg text-sm font-bold">14</span>
                                </td>
                                <td class="p-6 text-right space-x-4">
                                    <a href="{{ route('categories.edit', $categorie)}}"><button class="text-sm font-bold text-indigo-600 hover:underline">Modifier</button></a>
                                    <button class="text-sm font-bold text-red-400 hover:text-red-600 transition">Supprimer</button>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="hover:bg-slate-50/30 transition">
                                <td class="p-6">
                                    <span class="font-bold text-slate-700">Design UI/UX</span>
                                </td>
                                <td class="p-6 text-center">
                                    <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-lg text-sm font-bold">8</span>
                                </td>
                                <td class="p-6 text-right space-x-4">
                                    <button class="text-sm font-bold text-indigo-600 hover:underline">Modifier</button>
                                    <button class="text-sm font-bold text-red-400 hover:text-red-600 transition">Supprimer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>
</html>