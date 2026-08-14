<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Koffi Mokpokpo SODEHOUNDJI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#3b82f6',
                        'dark': '#0f172a',
                        'light': '#f1f5f9',
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 12s ease-in-out infinite; }
    </style>
</head>

<body class="bg-light text-dark font-sans antialiased">

    {{-- Navigation --}}
    <nav class="fixed top-0 w-full bg-light/95 backdrop-blur-sm z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-black tracking-tighter text-primary">&lt;KMS /&gt;</div>
            <div class="hidden md:flex items-center gap-10 font-medium text-slate-700">
                <a href="#propos" class="hover:text-primary transition">À propos</a>
                <a href="#competences" class="hover:text-primary transition">Compétences</a>
                <a href="#projets" class="hover:text-primary transition">Projets</a>
                <a href="#contact" class="bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Section Hero --}}
    <header id="accueil" class="min-h-screen pt-40 pb-20 px-6 flex items-center justify-center relative overflow-hidden">
        <div class="absolute -top-16 -left-16 w-64 h-64 rounded-full bg-primary/5 animate-float opacity-70"></div>
        <div class="absolute bottom-16 -right-16 w-80 h-80 rounded-full bg-primary/10 animate-float opacity-50" style="animation-delay: -3s;"></div>

        {{-- Conteneur principal divisé en 2 colonnes sur grand écran --}}
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 w-full">

            {{-- Colonne Gauche : Textes et Boutons --}}
            <div class="text-center lg:text-left space-y-12">
                <h1 class="text-1xl md:text-5xl xl:text-8xl font-extrabold text-dark leading-none tracking-tighter">
                    Full-stack<br>
                    <span class="text-primary">Developer</span>
                </h1>
                <p class="text-2xl md:text-3xl text-slate-700 max-w-4xl mx-auto lg:mx-0 leading-relaxed">
                    Étudiant en Informatique, je conçois des solutions web et Mobile performantes et des interfaces modernes.
                </p>
                <div class="flex items-center justify-center lg:justify-start gap-6 pt-6 text-2xl text-slate-400">
                    <a href="https://github.com/koffimokpokposodehoundji-boop" class="hover:text-dark transition"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/koffi-mokpokpo-sodehoundji-6b496b243" class="hover:text-primary transition"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="flex flex-wrap gap-6 pt-4 justify-center lg:justify-start">
                    <a href="#contact" class="inline-flex items-center gap-2 bg-primary text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-500/20">
                        <i class="fas fa-envelope"></i> Me contacter
                    </a>
                    <a href="#projets" class="inline-flex items-center gap-2 bg-white border border-slate-200 text-dark px-10 py-5 rounded-full font-bold text-lg hover:bg-slate-50 transition">
                        <i class="fas fa-arrow-right text-slate-400"></i> Voir mes projets
                    </a>
                </div>
            </div>

            {{-- Colonne Droite : Ton Image --}}
            <div class="flex justify-center lg:justify-end w-full">
                <div class="relative w-72 h-72 md:w-96 md:h-96 lg:w-[450px] lg:h-[450px]">
                    {{-- Arrière-plan décoratif pour l'image --}}
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary to-blue-300 rounded-[3rem] rotate-6 opacity-20 blur-sm"></div>
                    {{-- Balise Image --}}
                    <img src="{{ asset('image/13.jpg') }}" alt="KMS" class="absolute inset-0 w-full h-full object-cover rounded-[3rem] shadow-2xl border-4 border-white transition-transform duration-500 hover:scale-[1.02]">
                </div>
            </div>

        </div>
    </header>

    {{-- Section À propos --}}
    <section id="propos" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-primary mb-4">À propos</h2>
                <p class="text-slate-600 text-lg max-w-2xl mx-auto">Étudiant en Informatique, je transforme des idées complexes en solutions numériques simples.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 transition hover:shadow-xl group text-center">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-blue-600 flex items-center justify-center text-white text-3xl mb-8 transition group-hover:scale-110">
                        <i class="fab fa-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Développement</h3>
                    <p class="text-slate-600">Conception de site web et d'applications robustes avec Laravel et Flutter.</p>
                </div>
                <div class="bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 transition hover:shadow-xl group text-center">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-indigo-600 flex items-center justify-center text-white text-3xl mb-8 transition group-hover:scale-110">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Architecture</h3>
                    <p class="text-slate-600">Maîtrise de la modélisation de bases de données avec MySQL.</p>
                </div>
                <div class="bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 transition hover:shadow-xl group text-center">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-cyan-500 flex items-center justify-center text-white text-3xl mb-8 transition group-hover:scale-110">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Optimisation</h3>
                    <p class="text-slate-600">Utilisation de Git et Tailwind CSS pour la performance.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Compétences --}}
    {{-- Section Compétences --}}
    <section id="competences" class="py-24 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Mes Compétences</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($competences as $comp)
    @php
        $color = 'blue';
        $icon = 'fas fa-code'; // Icône par défaut
        $name = strtolower($comp->nom);

        if(Str::contains($name, 'laravel')) { $color = 'red'; $icon = 'fab fa-laravel'; }
        elseif(Str::contains($name, 'html')) { $color = 'blue'; $icon = 'fab fa-html5'; }
        elseif(Str::contains($name, 'php')) { $color = 'indigo'; $icon = 'fab fa-php'; }
        elseif(Str::contains($name, 'java')) { $color = 'orange'; $icon = 'fab fa-java'; }
        elseif(Str::contains($name, 'mysql')) { $color = 'blue'; $icon = 'fas fa-database'; }
        elseif(Str::contains($name, 'tailwind')) { $color = 'cyan'; $icon = 'fab fa-css3-alt'; }
        elseif(Str::contains($name, 'git')) { $color = 'slate'; $icon = 'fab fa-git-alt'; }
        elseif(Str::contains($name, 'flutter')) { $color = 'yellow'; $icon = 'fas fa-mobile-alt'; }
        elseif(Str::contains($name, 'springboot')) { $color = 'green'; $icon = 'fas fa-leaf'; }
        elseif(Str::contains($name, 'symfony')) { $color = 'indigo'; $icon = 'fab fa-symfony'; }
        elseif(Str::contains($name, 'c-language') || $name === 'c') { $color = 'red'; $icon = 'fas fa-terminal'; }
        elseif(Str::contains($name, 'linux')) { $color = 'cyan'; $icon = 'fab fa-linux'; }
    @endphp

    <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 transition-all duration-500 hover:-translate-y-3 group flex flex-col items-center text-center
        @if($color == 'red') hover:shadow-[0_20px_50px_rgba(239,68,68,0.3)]
        @elseif($color == 'indigo') hover:shadow-[0_20px_50px_rgba(79,70,229,0.3)]
        @elseif($color == 'orange') hover:shadow-[0_20px_50px_rgba(249,115,22,0.3)]
        @elseif($color == 'blue') hover:shadow-[0_20px_50px_rgba(59,130,246,0.3)]
        @elseif($color == 'cyan') hover:shadow-[0_20px_50px_rgba(6,182,212,0.3)]
        @else hover:shadow-[0_20px_50px_rgba(0,0,0,0.1)] </div>@endif">

        {{-- 1. L'ICÔNE EN HAUT --}}
        <div class="w-16 h-16 rounded-2xl bg-{{ $color }}-500 flex items-center justify-center text-white text-3xl mb-6 transition-transform duration-500 group-hover:scale-110 shadow-lg shadow-{{ $color }}-500/20">
            <i class="{{ $icon }}"></i>
        </div>

        {{-- 2. LE NOM --}}
        <h3 class="text-2xl font-black text-slate-800 tracking-tight mb-6">{{ $comp->nom }}</h3>

        {{-- 3. LE CERCLE DE PROGRESSION --}}
        <div class="relative w-40 h-40 flex items-center justify-center">
            <svg class="w-full h-full transform -rotate-90">
                <circle cx="80" cy="80" r="70" stroke="currentColor" stroke-width="10" fill="transparent" class="text-slate-50" />
                <circle cx="80" cy="80" r="70" stroke="currentColor" stroke-width="10" fill="transparent"
                    stroke-dasharray="439.8"
                    stroke-dashoffset="{{ 439.8 - (439.8 * $comp->niveau) / 100 }}"
                    class="text-{{ $color }}-500 transition-all duration-1000" />
            </svg>
            <span class="absolute text-3xl font-black text-slate-800">{{ $comp->niveau }}%</span>
        </div>
    </div>
@endforeach
            </div>
        </div>
    </section>

    {{-- Section Projets --}}
    <section id="projets" class="py-24 px-6 bg-slate-100">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 flex items-center">
            <i class="fas fa-project-diagram mr-3 text-primary"></i> Mes Projets Récents
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projets as $projet)
                <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    {{-- Section Image/Icône du projet --}}
<div class="h-52 relative overflow-hidden group">
    {{-- On affiche l'icône FontAwesome stockée dans la colonne 'image' --}}
    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-800 to-indigo-900 transition-all duration-500 group-hover:from-purple-700 group-hover:to-indigo-800">

        @if($projet->image)
            {{-- L'icône dynamique --}}
            <i class="{{ $projet->image }} text-7xl text-white/90 transition-transform duration-500 group-hover:scale-110"></i>
        @else
            {{-- Icône par défaut si vide --}}
            <i class="fas fa-code text-7xl text-white/50"></i>
        @endif

    </div>

    {{-- Badge de catégorie --}}
    <div class="absolute top-4 right-4 bg-white/10 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-white border border-white/20 shadow-sm">
        {{ ucfirst($projet->categorie) }}
    </div>
</div>

                    {{-- Détails du projet --}}
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $projet->titre }}</h3>
                        <p class="text-slate-500 text-sm line-clamp-3 mb-6 leading-relaxed">
                            {{ $projet->description }}
                        </p>

                        <div class="flex items-center justify-between pt-5 border-t border-slate-50">
                            @if($projet->lien_github)
                                <a href="{{ $projet->lien_github }}" target="_blank" class="inline-flex items-center gap-2 text-slate-700 hover:text-primary font-bold text-sm transition">
                                    <i class="fas fa-globes text-lg"></i> lien du site
                                </a>
                            @endif
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-300">Détails <i class="fas fa-arrow-right ml-1"></i></span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center bg-white rounded-[2rem] border border-dashed border-slate-200">
                    <i class="fas fa-laptop-code text-4xl text-slate-200 mb-4"></i>
                    <p class="text-slate-400 font-medium">Aucun projet à afficher pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

    {{-- Section Contact --}}
    <section id="contact" class="py-12 sm:py-16 md:py-24 px-4 sm:px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-3 sm:mb-4">Contact</h2>
                <p class="text-slate-600 text-base sm:text-lg">Discutons de votre prochain projet</p>
            </div>
            <div class="grid md:grid-cols-2 gap-0 bg-white rounded-2xl sm:rounded-[2.5rem] shadow-2xl border border-slate-100 overflow-hidden">
                <div class="bg-slate-950 p-8 sm:p-10 md:p-12 text-white flex flex-col justify-center space-y-6 sm:space-y-8 md:space-y-10">
                    <div class="flex items-start gap-4 sm:gap-5 group">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-blue-600/20 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition flex-shrink-0">
                            <i class="fas fa-envelope text-base sm:text-xl"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-slate-400 text-xs sm:text-sm font-bold uppercase">Email</p>
                            <p class="text-base sm:text-lg break-all">koffimokpokposodehoundji@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 sm:gap-5 group">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-blue-600/20 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition flex-shrink-0">
                            <i class="fab fa-whatsapp text-base sm:text-xl"></i>
                        </div>
                        <div>
                            <p class="text-slate-400 text-xs sm:text-sm font-bold uppercase">WhatsApp</p>
                            <p class="text-base sm:text-lg">+228 70782133</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 sm:p-10 md:p-12">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4 sm:space-y-6">
                        @csrf
                        <input type="text" name="nom" required placeholder="Votre nom" class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-xl sm:rounded-2xl bg-slate-50 border border-slate-200 outline-none focus:border-blue-500 transition text-sm sm:text-base">
                        <input type="email" name="email" required placeholder="votre@email.com" class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-xl sm:rounded-2xl bg-slate-50 border border-slate-200 outline-none focus:border-blue-500 transition text-sm sm:text-base">
                        <textarea name="message" rows="4" required placeholder="Votre message..." class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-xl sm:rounded-2xl bg-slate-50 border border-slate-200 outline-none focus:border-blue-500 transition text-sm sm:text-base"></textarea>
                        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 sm:py-5 rounded-xl sm:rounded-2xl hover:bg-blue-700 transition shadow-xl shadow-blue-500/25 text-sm sm:text-base">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Pied de page --}}
    <footer class="py-12 border-t border-slate-100 text-center text-slate-400 text-sm">
        &copy; 2026 - Portfolio | Koffi Mokpokpo SODEHOUNDJI
    </footer>

</body>
</html>
