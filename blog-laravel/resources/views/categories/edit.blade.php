<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Nexus | Modifier Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <div class="max-w-2xl mx-auto py-16 px-6">
        <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-slate-400 hover:text-indigo-600 transition mb-10 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Retour à la liste
        </a>

        <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
            <header class="mb-10">
                <h1 class="text-3xl font-extrabold tracking-tight mb-2">Modifier la catégorie</h1>
                <p class="text-slate-500 font-medium">Mise à jour du nom de la thématique.</p>
            </header>

            <form action="{{ route('categories.update', $categorie) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT') <div>
                    <label class="text-xs font-black uppercase tracking-widest text-slate-400 ml-1">Nom de la catégorie</label>
                    <input type="text" 
                           name="nom" 
                           value="{{ $categorie->nom }}"
                           placeholder="Ex: Intelligence Artificielle" 
                           class="w-full mt-2 bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all @error('nom') border-red-500 @enderror">
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-black text-white font-bold py-5 rounded-2xl hover:bg-slate-800 transition active:scale-[0.98] shadow-lg shadow-slate-200">
                        Mettre à jour la catégorie
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>