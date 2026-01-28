<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Nexus | Rédiger un post</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <div class="max-w-4xl mx-auto py-12 px-6">
        <a href="adminDashboard" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-indigo-600 transition mb-8 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Retour au tableau de bord
        </a>

        <div class="bg-white rounded-[2.5rem] shadow-xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-12">
                <header class="mb-10">
                    <h1 class="text-3xl font-extrabold tracking-tight mb-2">Nouvelle Publication</h1>
                    <p class="text-slate-500 font-medium">Partagez votre expertise avec la communauté Digital Nexus.</p>
                </header>

                <form action="{{ route('posts.store') }}" method="POST" class="space-y-8">
                    @csrf
                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 ml-1">Titre de l'article</label>
                        <input type="text" name="title" placeholder="Ex: Maîtriser les relations Eloquent dans Laravel" 
                               class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 text-lg focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all placeholder:text-slate-300">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-sm font-bold text-slate-700 ml-1">Catégorie</label>
                            <div class="relative">
                                <select name="category_id" class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 appearance-none focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all">
                                    <option value="" disabled selected>Choisir une thématique</option>
                                    <option value="1">Développement Web</option>
                                    <option value="2">Intelligence Artificielle</option>
                                    <option value="3">Design UI/UX</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-slate-700 ml-1">Tags (Bonus)</label>
                            <input type="text" name="tags" placeholder="laravel, tutorial, php..." 
                                   class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all placeholder:text-slate-300">
                            <p class="text-[10px] text-slate-400 ml-1 uppercase font-bold tracking-wider">Séparez les tags par des virgules</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 ml-1">Contenu de l'article</label>
                        <textarea name="content" rows="10" placeholder="Il était une fois dans le monde du code..." 
                                  class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-5 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all resize-none"></textarea>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-4 pt-4">
                        <button type="submit" class="w-full md:w-auto bg-indigo-600 text-white font-bold py-4 px-10 rounded-2xl hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition active:scale-95">
                            Publier l'article
                        </button>
                        <button type="button" class="w-full md:w-auto bg-white text-slate-500 font-bold py-4 px-10 rounded-2xl border border-slate-200 hover:bg-slate-50 transition">
                            Enregistrer en brouillon
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>