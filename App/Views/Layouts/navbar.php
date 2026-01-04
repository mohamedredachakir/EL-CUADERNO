<nav class="sticky top-0 z-[90] w-full pt-6 px-4 md:px-10">
    <div class="max-w-7xl mx-auto bg-paper/60 backdrop-blur-md border border-[#2c1810]/10 rounded-2xl shadow-xl px-10 py-5 flex justify-between items-center transition-all duration-500 hover:shadow-2xl hover:border-[#2c1810]/20">
        
        <div class="flex items-center space-x-6">
            <div class="flex flex-col border-l-2 border-gold pl-4">
                <a href="/" class="text-3xl font-bold tracking-tighter italic leading-none text-ink">
                    EL CUADERNO
                </a>
                <span class="text-[10px] uppercase tracking-[0.4em] font-ui font-black text-gold mt-1">Victory Archives</span>
            </div>
        </div>

        <ul class="hidden lg:flex items-center font-ui text-[11px] uppercase tracking-[0.25em] font-bold text-ink/70">
            <?php if (isset($_SESSION['user'])): ?>
                <li>
                    <a href="/articles" class="nav-link hover:text-ink transition-colors">Chapters</a>
                </li>
            <?php endif; ?>
        </ul>

        <div class="flex items-center space-x-4">
            <?php if (isset($_SESSION['user'])): ?>
                <a href="/profile" class="flex items-center space-x-3 px-6 py-2.5 rounded-full border border-gold/30 bg-gold/5 hover:bg-gold/10 transition-all group">
                    <div class="w-5 h-5 rounded-full bg-gold flex items-center justify-center text-[10px] text-paper font-black">V</div>
                    <span class="font-ui text-[10px] uppercase font-black tracking-widest text-gold">My Estate</span>
                </a>
                <a href="/logout" class="text-[9px] uppercase font-bold text-ink/40 hover:text-[#5e0b15] transition-colors ml-2">Exit</a>

            <?php else: ?>
                <a href="/login" class="px-6 py-2.5 rounded-full font-ui text-[10px] uppercase font-black tracking-widest text-ink/60 border border-ink/10 hover:border-gold hover:text-gold transition-all duration-300">
                    Identity
                </a>
                <a href="/register" class="relative group px-8 py-2.5 overflow-hidden rounded-full bg-[#2c1810] text-paper shadow-lg hover:shadow-gold/20 transition-all duration-300">
                    <span class="relative z-10 font-ui text-[10px] uppercase font-black tracking-widest">Enlist Now</span>
                    <div class="absolute inset-0 bg-gold translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>