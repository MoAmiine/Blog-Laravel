<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Digital Nexus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col p-6">
            <div class="flex items-center gap-3 mb-10 px-2">
                <a href="{{ route('home') }}">
                    <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold">
                        D</div>
                </a>
                <span class="font-bold text-xl tracking-tight">NexusAdmin</span>
            </div>
            <nav class="space-y-2">
                <a href="#" class="flex items-center gap-3 p-3 bg-indigo-50 text-indigo-700 rounded-xl font-bold">
                    <span>📑 Articles</span>
                </a>
                <a href="{{ route('categories.index') }}"
                    class="flex items-center gap-3 p-3 text-slate-500 hover:bg-slate-50 rounded-xl transition">
                    <span>📁 Catégories</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-500 hover:bg-slate-50 rounded-xl transition">
                    <span>🏷️ Tags</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                <div>
                    <h1 class="text-3xl font-bold text-slate-900">Gestion des Articles</h1>
                    <p class="text-slate-500">Gérez, éditez et publiez vos contenus.</p>
                </div>

                <a href="{{ route('posts.create') }}"
                    class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-2xl shadow-lg shadow-indigo-200 transition active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Nouveau Post
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50 border-b border-slate-200">
                            <th class="p-6 text-sm font-bold text-slate-400 uppercase tracking-widest">Titre</th>
                            <th class="p-6 text-sm font-bold text-slate-400 uppercase tracking-widest">Catégorie</th>
                            <th class="p-6 text-sm font-bold text-slate-400 uppercase tracking-widest">Date</th>
                            <th class="p-6 text-sm font-bold text-slate-400 uppercase tracking-widest text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ($posts as $p)

                            <tr class="hover:bg-slate-50/50 transition">

                                <td class="p-6 font-semibold text-slate-800">{{ $p->title }}</td>
                                <td class="p-6">

                                    <span
                                        class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-xs font-bold uppercase">{{$p->categorie->nom}}</span>

                                </td>
                                <td class="p-6 text-slate-500 text-sm">{{ $p->created_at}}</td>
                                <td class="p-6 text-right space-x-3">
                                    <a href="{{ route('posts.edit', $p) }}"><button
                                            class="text-slate-400 hover:text-indigo-600 transition">Modifier</button></a>
                                    <form method="POST" action="{{ route('posts.destroy', $p) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-slate-400 hover:text-red-500 transition"
                                            onclick="return confirm('Supprimer le poste ?')">Supprimer</button>
                                    </form>
                                </td>
                        @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>

</html>