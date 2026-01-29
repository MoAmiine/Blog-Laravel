<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Nexus | Modifier l'article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <div class="max-w-4xl mx-auto py-12 px-6">
        <a href="{{ route('posts.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-indigo-600 transition mb-8 group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Annuler et retourner au tableau de bord
        </a>

        <div class="bg-white rounded-[2.5rem] shadow-xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-12">
                <header class="mb-10">
                    <h1 class="text-3xl font-extrabold tracking-tight mb-2">Modifier l'article</h1>
                    <p class="text-slate-500 font-medium italic">ID de l'article : #    </p>
                </header>

                <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-8">
                    @csrf
                    @method('PUT') 
                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 ml-1">Titre de l'article</label>
                        <input type="text" name="title" value="{{ $post->title }}" 
                               class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 text-lg focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all">
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 ml-1"></label>
                        <select name="categorie_id" class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 appearance-none focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all">
                            @foreach ($categories as $cat)
{{--                             
                            <option value="{{ $cat->id }}" {{ $post->categories_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->nom }}
                            </option> --}}
                            @endforeach        
                        </select>
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-slate-700 ml-1">Contenu</label>
                        <textarea name="content" rows="10" 
                                  class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-5 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all resize-none"></textarea>
                    </div>

                    <div class="flex items-center gap-4 pt-4">
                        <button type="submit" class="bg-indigo-600 text-white font-bold py-4 px-10 rounded-2xl hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition active:scale-95">
                            Enregistrer les modifications
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>