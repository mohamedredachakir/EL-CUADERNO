<?php 
require_once __DIR__ . '/../Layouts/header.php';
require_once __DIR__ . '/../Layouts/navbar.php';
?>

<main class="relative z-20 max-w-7xl mx-auto px-6 md:px-10 mt-16 mb-24">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between border-b border-[#2c1810]/10 pb-10 mb-16 gap-6">
        <div class="space-y-2">
            <h1 class="font-book text-5xl md:text-6xl font-bold italic tracking-tighter">Your Chronicles</h1>
            <p class="font-book text-ink/50 italic text-lg tracking-wide">"The collection of victories you have written into history."</p>
        </div>

        <a href="/createarticle" class="group relative inline-flex items-center px-8 py-4 overflow-hidden rounded-full bg-gold text-[#2c1810] shadow-xl transition-all hover:scale-105 active:scale-95">
            <span class="relative z-10 font-ui text-xs font-black uppercase tracking-[0.2em] flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                Write New Chapter
            </span>
            <div class="absolute inset-0 bg-[#2c1810] translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
            <span class="absolute inset-0 w-full h-full group-hover:text-paper transition-colors duration-500"></span>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        
        <?php for($i = 1; $i <= 5; $i++): ?>
        <article class="group relative bg-paper/40 backdrop-blur-sm border border-[#2c1810]/5 rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 flex flex-col h-full">
            <div class="h-64 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?q=80&w=1000&auto=format&fit=crop" 
                     class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700" 
                     alt="Article Cover">
                <div class="absolute inset-0 bg-gradient-to-t from-paper via-transparent to-transparent opacity-60"></div>
                
                <div class="absolute top-4 right-4 bg-paper/90 backdrop-blur-md px-3 py-1 rounded-lg border border-[#2c1810]/10">
                    <span class="font-ui text-[9px] font-black uppercase tracking-tighter">Jan 04, 2026</span>
                </div>
            </div>

            <div class="p-8 flex-grow flex flex-col space-y-4">
                <div class="flex items-center space-x-2">
                    <span class="h-px w-6 bg-gold"></span>
                    <span class="font-ui text-[9px] uppercase font-black tracking-widest text-gold">Chapter <?= $i ?></span>
                </div>
                
                <h3 class="font-book text-2xl font-bold italic leading-tight group-hover:text-gold transition-colors">
                    The Art of Strategic Silence in the Great Courts.
                </h3>
                
                <p class="font-book text-sm text-ink/60 italic leading-relaxed line-clamp-3">
                    Every great victory begins with a thought that refuses to be ignored. In this chronicle, we explore how...
                </p>

                <div class="pt-6 mt-auto flex justify-between items-center border-t border-[#2c1810]/5">
                    <div class="flex space-x-3">
                        <a href="/articles/edit" class="text-[10px] font-ui font-black uppercase tracking-widest text-ink/40 hover:text-gold transition-colors">Edit</a>
                        <a href="/articles/delete" class="text-[10px] font-ui font-black uppercase tracking-widest text-ink/40 hover:text-red-800 transition-colors">Burn</a>
                    </div>
                    <a href="/articles/view" class="w-8 h-8 rounded-full border border-gold/30 flex items-center justify-center group-hover:bg-gold group-hover:text-paper transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </article>
        <?php endfor; ?>

        <div class="border-2 border-dashed border-gold/20 rounded-3xl flex flex-col items-center justify-center p-12 text-center space-y-4 opacity-50 hover:opacity-100 transition-opacity">
            <div class="text-4xl text-gold">*</div>
            <h4 class="font-book text-xl font-bold italic">Next Victory...</h4>
            <p class="font-book text-xs italic">The archives await your next masterpiece.</p>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../Layouts/footer.php'; ?>