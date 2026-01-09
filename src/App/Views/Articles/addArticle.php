<?php 
require_once __DIR__ . '/../Layouts/header.php';
require_once __DIR__ . '/../Layouts/navbar.php';
?>

<main class="relative z-20 max-w-4xl mx-auto px-6 py-16 md:py-24">
    <div class="text-center space-y-4 mb-16">
        <span class="font-ui text-[10px] uppercase tracking-[0.6em] text-gold font-black">Manuscript Phase</span>
        <h1 class="font-book text-5xl md:text-6xl font-bold italic tracking-tighter text-ink">Draft a New Victory</h1>
        <div class="flex items-center justify-center space-x-4 opacity-20 mt-6">
            <div class="h-px w-16 bg-ink"></div>
            <span class="text-xl">*</span>
            <div class="h-px w-16 bg-ink"></div>
        </div>
    </div>

    <form action="/createarticle" method="POST" class="space-y-8">
        
        <div class="bg-paper/40 backdrop-blur-md border border-[#2c1810]/5 rounded-[2rem] p-8 md:p-16 shadow-2xl space-y-12">
            
            <div class="space-y-4">
                <label class="font-ui text-[10px] uppercase tracking-[0.3em] font-black text-gold ml-1">Chapter Title</label>
                <input type="text" name="title" placeholder="The Echoes of the Unconquered..." 
                       class="w-full bg-transparent border-b border-[#2c1810]/10 py-6 font-book text-3xl md:text-5xl italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/10 text-ink">
            </div>

            <div class="space-y-4">
                <label class="font-ui text-[10px] uppercase tracking-[0.3em] font-black text-gold ml-1">The Narrative</label>
                <textarea name="content" rows="15" placeholder="Let your thoughts flow onto the parchment..." 
                          class="w-full bg-transparent border-b border-[#2c1810]/10 py-4 font-book text-xl md:text-2xl italic leading-relaxed focus:outline-none focus:border-gold transition-all placeholder:text-ink/10 resize-none text-ink/80"></textarea>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-8 pt-10">
                <div class="flex items-center space-x-8">
                    <button type="button" class="font-ui text-[10px] uppercase tracking-[0.3em] font-black text-ink/40 hover:text-gold transition-colors">
                        Save Draft
                    </button>
                    <a href="/articles" class="font-ui text-[10px] uppercase tracking-[0.3em] font-black text-ink/40 hover:text-red-900 transition-colors">
                        Discard
                    </a>
                </div>

                <button type="submit" class="w-full md:w-auto px-16 py-5 bg-[#2c1810] text-paper rounded-full font-ui text-[11px] uppercase font-black tracking-[0.4em] shadow-2xl hover:bg-gold hover:text-[#2c1810] transition-all transform hover:-translate-y-1 active:scale-95">
                    Seal & Publish
                </button>
            </div>
        </div>
    </form>

    <div class="mt-12 text-center">
        <p class="font-book text-[11px] italic text-ink/30 uppercase tracking-[0.2em]">Words written here are etched into the eternal archives of El Cuaderno.</p>
    </div>
</main>

<?php require_once __DIR__ . '/../Layouts/footer.php'; ?>