<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Nexus | Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-gray-50">

    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center text-white font-bold text-xl">N</div>
                <span class="text-xl font-extrabold tracking-tight">Digital Nexus</span>
            </div>
            <div class="flex gap-6 items-center font-semibold text-gray-600">
                <a href="#" class="hover:text-black">Accueil</a>
                <a href="#" class="bg-black text-white px-5 py-2.5 rounded-full text-sm hover:bg-gray-800 transition">Dashboard Admin</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <div class="lg:w-2/3 space-y-8">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Articles à la une</h2>

                <article class="bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl hover:scale-[1.01] transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-indigo-50 text-indigo-600 px-4 py-1.5 rounded-full text-xs font-bold uppercase">Technologie</span>
                        <span class="text-gray-400 text-sm">Il y a 2 heures</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Pourquoi Laravel est le futur du développement PHP</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Découvrez comment ce framework révolutionne la manière de concevoir des applications web modernes et robustes...</p>
                    <div class="flex items-center justify-between">
                        <a href="#" class="font-bold text-black border-b-2 border-black pb-1">Lire l'article</a>
                        <div class="flex gap-2">
                            <span class="text-xs bg-gray-100 px-3 py-1 rounded-md text-gray-500">#WebDev</span>
                            <span class="text-xs bg-gray-100 px-3 py-1 rounded-md text-gray-500">#Laravel</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-emerald-50 text-emerald-600 px-4 py-1.5 rounded-full text-xs font-bold uppercase">Design</span>
                        <span class="text-gray-400 text-sm">Hier</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Maîtriser Tailwind CSS en 10 minutes</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Le guide ultime pour styliser vos composants sans jamais quitter votre fichier HTML.</p>
                    <a href="#" class="font-bold text-black border-b-2 border-black pb-1">Lire l'article</a>
                </article>
            </div>

            <aside class="lg:w-1/3">
                <div class="bg-white border border-gray-100 p-8 rounded-[2rem] sticky top-32">
                    <h4 class="text-lg font-bold mb-6">Catégories</h4>
                    <div class="flex flex-col gap-3">
                        <a href="#" class="flex justify-between items-center p-3 hover:bg-gray-50 rounded-xl transition font-medium">
                            <span>🚀 Technologie</span>
                            <span class="text-gray-400 text-sm">12</span>
                        </a>
                        <a href="#" class="flex justify-between items-center p-3 hover:bg-gray-50 rounded-xl transition font-medium">
                            <span>🎨 Design</span>
                            <span class="text-gray-400 text-sm">8</span>
                        </a>
                        <a href="#" class="flex justify-between items-center p-3 hover:bg-gray-50 rounded-xl transition font-medium">
                            <span>💡 Tutoriels</span>
                            <span class="text-gray-400 text-sm">24</span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </main>

</body>
</html>