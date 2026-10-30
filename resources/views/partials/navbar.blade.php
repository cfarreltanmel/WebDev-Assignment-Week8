<header class="bg-white border-b border-slate-100 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex items-center justify-between relative"
        aria-label="Main navigation">
        <a href="/" class="flex items-center gap-3 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md">
            <img src="{{ asset('img/CftLogo.png') }}" alt="CFT Logo" class="h-10 w-auto object-contain" />
        </a>
        <div id="collapseMenu"
            class="hidden lg:flex max-lg:absolute max-lg:top-full max-lg:left-0 max-lg:w-full max-lg:bg-white max-lg:border-b max-lg:border-slate-100 max-lg:p-6 max-lg:shadow-lg flex-col lg:flex-row items-start lg:items-center space-y-4 lg:space-y-0 lg:space-x-8 text-sm font-medium text-slate-600 transistion-colors">
            <a href="/" class="{{ request()->is('/') ? 'text-blue-600' : 'hover:text-blue-700' }} ">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'text-blue-600' : 'hover:text-blue-600' }} ">About</a>
            <a href="/blog" class="{{ request()->is('blog') ? 'text-blue-600' : 'hover:text-blue-600' }} ">Blog</a>
            <a href="/contact"
                class="{{ request()->is('contact') ? 'text-blue-600' : 'hover:text-blue-600' }} ">Contact</a>
            <a href="/project"
                class="{{ request()->is('project') ? 'text-blue-600' : 'hover:text-blue-600' }} ">Project</a>
        </div>
        <button type="button" aria-controls="collapseMenu" aria-expanded="false" id="toggleOpen"
            class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </nav>
</header>
