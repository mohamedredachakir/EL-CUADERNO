<?php
require_once __DIR__ . '/../Layouts/header.php';
require_once __DIR__ . '/../Layouts/navbar.php';
?>;


<main class="relative z-20 min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-xl w-full">
        <div class="bg-paper/50 backdrop-blur-sm border border-[#2c1810]/10 rounded-3xl shadow-2xl p-8 md:p-12 relative overflow-hidden">
            
            <div class="absolute -top-6 -right-6 w-24 h-24 opacity-10 pointer-events-none">
                <span class="text-8xl">❦</span>
            </div>

            <div class="text-center space-y-4 mb-10">
                <h2 class="font-book text-4xl font-bold italic tracking-tighter text-ink">Join the Legion</h2>
                <p class="font-book text-sm text-ink/60 italic">"Sign the chronicle and begin your journey towards victory."</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-[0.3em] font-ui font-black text-gold ml-2">Full Title / Name</label>
                    <input type="text" placeholder="e.g. Knight Rodrigo" 
                           class="w-full bg-white/40 border border-[#2c1810]/10 rounded-xl px-5 py-4 font-book italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/30">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-[0.3em] font-ui font-black text-gold ml-2">Digital Dispatch (Email)</label>
                    <input type="email" placeholder="messenger@empire.com" 
                           class="w-full bg-white/40 border border-[#2c1810]/10 rounded-xl px-5 py-4 font-book italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/30">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] uppercase tracking-[0.3em] font-ui font-black text-gold ml-2">Secret Cipher (Password)</label>
                    <input type="password" placeholder="••••••••" 
                           class="w-full bg-white/40 border border-[#2c1810]/10 rounded-xl px-5 py-4 font-book italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/30">
                </div>

                <button type="submit" class="w-full bg-[#2c1810] text-paper py-5 rounded-xl font-ui text-xs font-black uppercase tracking-[0.4em] shadow-xl hover:bg-gold hover:text-[#2c1810] transition-all transform hover:-translate-y-1">
                    Sign the Decree
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-xs font-book italic text-ink/50">
                    Already a member of the Court? 
                    <a href="login.php" class="text-gold font-bold hover:underline ml-1">Claim your Identity</a>
                </p>
            </div>
        </div>
    </div>
</main>


<?php require_once __DIR__ . '/../Layouts/footer.php';?>