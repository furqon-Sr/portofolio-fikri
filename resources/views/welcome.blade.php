<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fikri | Entrepreneur & Fullstack Dev</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        html,
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-[#111111] text-gray-200 antialiased selection:bg-blue-600 selection:text-white">

    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        <!-- Navigation -->
        <nav class="py-6 flex justify-between items-center border-b border-gray-600">
            <div class="text-2xl font-bold tracking-tighter text-white">FIKRI AKBAR</div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-400">
                <a href="#works" class="hover:text-white transition-colors">Works</a>
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#" class="hover:text-white transition-colors">Contact</a>
            </div>
            <button
                class="px-5 py-2 text-sm font-semibold bg-white text-black rounded hover:bg-gray-300 transition-colors">
                Download CV
            </button>
        </nav>

        <!-- Hero Section -->
        <main class="mt-20 lg:mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 flex flex-col items-start gap-6">
                <h1 class="text-4xl md:text-6xl font-bold leading-[1.1] text-white tracking-tight">
                    Bridging the gap between <span class="text-blue-600">Code</span> and <span
                        class="text-blue-600">Commerce</span>.
                </h1>
                <p class="text-lg md:text-xl text-gray-400 font-medium tracking-wide">
                    Entrepreneur & Fullstack Dev
                </p>
                <a href="#works"
                    class="mt-4 px-8 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                    View My Work
                </a>
            </div>

            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div
                    class="relative w-full max-w-sm aspect-[4/5] rounded-2xl overflow-hidden border border-gray-800 shadow-2xl shadow-black">
                    <img src="{{ asset('img/Fikri_Porto.png') }}" alt="Fikri"
                        class="object-cover w-full h-full grayscale hover:grayscale-0 transition-all duration-700 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent"></div>
                </div>
            </div>
        </main>
        <!-- About & Expertise Section -->
        <section id="about" class="mt-40 grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            <div class="lg:col-span-6 space-y-8">
                <div class="space-y-4">
                    <h2 class="text-5xl font-bold text-white tracking-tight">About <span class="text-blue-600">Me</span>
                    </h2>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Informatics Student & Entrepreneur. I transform complex business logic into efficient digital
                        products. Expert in digitizing supply chains for game assets through automated catalogs and
                        top-up services. Driven by code, guided by market results.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @php
                        $highlights = [

                            ['icon' => '🎓', 'title' => 'Informatics Eng.', 'desc' => 'Strong logic & architecture.'],
                            ['icon' => '⚙️', 'title' => 'Business Ops', 'desc' => 'Retail & systems efficiency.'],
                          
                        ];
                    @endphp
                    @foreach ($highlights as $item)
                        <div
                            class="p-5 bg-[#1a1a1a] border border-gray-800 rounded-xl hover:border-blue-500/50 transition-colors group">
                            <div class="text-2xl mb-3 group-hover:scale-110 transition-transform">{{ $item['icon'] }}
                            </div>
                            <h3 class="text-white font-semibold text-sm mb-1">{{ $item['title'] }}</h3>
                            <p class="text-xs text-gray-500 leading-tight">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-6">
                <h3 class="text-2xl font-bold text-white mb-8 lg:text-right font-heading">Expertise</h3>
                <div class="grid grid-cols-4 gap-4">
                    @php
                        $stack = [
                            [
                                'name' => 'Laravel',
                                'logo' => 'Laravel.jpg',
                                'bg' => 'bg-[#FF2D20]/10',
                                'border' => 'hover:border-[#FF2D20]',
                            ],
                            [
                                'name' => 'Node.js',
                                'logo' => 'nodejs.png',
                                'bg' => 'bg-[#339933]/10',
                                'border' => 'hover:border-[#339933]',
                            ],
                            [
                                'name' => 'JS',
                                'logo' => 'javascript.png',
                                'bg' => 'bg-[#F7DF1E]/10',
                                'border' => 'hover:border-[#F7DF1E]',
                            ],
                            [
                                'name' => 'PHP',
                                'logo' => 'php.png',
                                'bg' => 'bg-[#777BB4]/10',
                                'border' => 'hover:border-[#777BB4]',
                            ],
                            [
                                'name' => 'MySQL',
                                'logo' => 'mysql.png',
                                'bg' => 'bg-[#4479A1]/10',
                                'border' => 'hover:border-[#4479A1]',
                            ],
                            [
                                'name' => 'Tailwind',
                                'logo' => 'tailwindd.png',
                                'bg' => 'bg-[#06B6D4]/10',
                                'border' => 'hover:border-[#06B6D4]',
                            ],
                            [
                                'name' => 'Java',
                                'logo' => 'Java-Logo.png',
                                'bg' => 'bg-[#007396]/10',
                                'border' => 'hover:border-[#007396]',
                            ],
                            [
                                'name' => 'Python',
                                'logo' => 'Python-logo.png',
                                'bg' => 'bg-[#3776AB]/10',
                                'border' => 'hover:border-[#3776AB]',
                            ],
                        ];
                    @endphp

                    @foreach ($stack as $tech)
                        <div
                            class="{{ $tech['bg'] }} {{ $tech['border'] }} aspect-square rounded-xl flex items-center justify-center border border-gray-800 group transition-all duration-300 overflow-hidden relative">
                            <img src="{{ asset('img/logos/' . $tech['logo']) }}" alt="{{ $tech['name'] }}"
                                class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-20 {{ $tech['bg'] }} transition-opacity">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Selected Works Section -->
        <section id="works" class="mt-40 mb-32">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white tracking-tight">Selected <span
                        class="text-blue-600">Works</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12">
                <!-- Wrapper tag '<a>' untuk link keseluruhan card -->
                <a href="https://www.rerollstation.com/" target="_blank" class="group cursor-pointer block">
                    <div
                        class="aspect-[16/10] bg-[#1a1a1a] border border-gray-800 rounded-2xl overflow-hidden relative mb-6 transition-all duration-500 group-hover:border-blue-500/50 group-hover:shadow-2xl group-hover:shadow-blue-500/10">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div class="w-full h-full flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('img/logos/project-thumnail.png') }}"
                                alt="Reroll Station"
                                class="w-full h-full object-cover rounded-xl transition-all duration-700 group-hover:scale-110">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex items-center ">
                            <h4 class="text-white font-bold text-xl group-hover:text-blue-500 transition-colors ">Reroll Station</h4>
                            <span
                                class="text-blue-600 opacity-0 group-hover:opacity-100 transition-all translate-x-[-10px] group-hover:translate-x-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed">Website Distribusi akun game online skala B2B
                            menghubungkan Supplier dan Reseller.</p>
                    </div>
                </a>

    </div>
    </section>

    <!-- Footer Section -->
    <footer class="mt-40 border-t border-gray-800 pt-16 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-24">
            <div class="md:col-span-6 space-y-6">
                <div class="text-blue-600 font-bold tracking-widest text-sm uppercase">Fikri Akbar</div>
                <p class="text-gray-400 text-lg leading-relaxed max-w-sm">
                    Bridging supply chain and code to solve real business problems.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center hover:border-blue-600 transition-all text-gray-500 hover:text-blue-600 hover:-translate-y-1">
                        <span class="text-xs font-bold">Li</span>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center hover:border-blue-600 transition-all text-gray-500 hover:text-blue-600 hover:-translate-y-1">
                        <span class="text-xs font-bold">Gh</span>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-gray-800 flex items-center justify-center hover:border-blue-600 transition-all text-gray-500 hover:text-blue-600 hover:-translate-y-1">
                        <span class="text-xs font-bold">Dr</span>
                    </a>
                </div>
            </div>

            <div class="md:col-span-6 lg:col-start-9 lg:col-span-4 space-y-6">
                <div class="text-white font-bold tracking-widest text-sm uppercase border-b border-gray-800 pb-2">Info
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <span class="text-lg">📅</span>
                        <p class="text-gray-400 text-sm font-medium">Available for Internship & Opportunities</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="text-lg">📧</span>
                        <a href="mailto:fahrurihanafii@gmail.com"
                            class="text-blue-500 text-sm font-semibold hover:underline">akbarfikri819@gmail.com</a>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="text-lg">📍</span>
                        <p class="text-gray-400 text-sm font-medium">Surabaya, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center pt-8 border-t border-gray-900">
            <p class="text-gray-600 text-[10px] uppercase tracking-[0.2em]">
                © 2026 Fikri Akbar. All rights reserved.
            </p>
        </div>
    </footer>

    </div>

</body>

</html>
