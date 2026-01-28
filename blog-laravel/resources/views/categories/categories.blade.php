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
            <a href="#" class="text-sm font-bold text-indigo-600 hover:text-indigo-800">Retour au Dashboard →</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1">
                <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100">
                    <h2 class="text-xl font-bold mb-6">Ajouter une catégorie</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="text-xs font-black uppercase tracking-widest text-slate-400 ml-1">Nom de la catégorie</label>
                            <input type="text" name="name" placeholder="Ex: Intelligence Artificielle" 
                                   class="w-full mt-2 bg-slate-50 border border-slate-100 rounded-xl p-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <button type="submit" class="w-full bg-black text-white font-bold py-4 rounded-xl hover:bg-slate-800 transition active:scale-95">
                            Créer la catégorie