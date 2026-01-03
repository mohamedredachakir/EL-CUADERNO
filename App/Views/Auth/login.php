<?php
require_once __DIR__ . '/../Layouts/header.php';
require_once __DIR__ . '/../Layouts/navbar.php';
?>;


<main class="relative z-20 min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-md w-full">
        <div class="bg-paper/50 backdrop-blur-sm border border-[#2c1810]/10 rounded-3xl shadow-2xl p-10 relative">
            
            <div class="flex justify-center mb-8">
                <div class="w-16 h-16 rounded-full border border-gold/30 flex items-center justify-center">
                    <span class="text-gold font-book italic text-2xl">V</span>
                </div>
            </div>

            <div class="text-center space-y-2 mb-10">
                <h2 class="font-book text-3xl font-bold italic text-ink">Welcome Back</h2>
                <p class="font-book text-xs text-ink/50 uppercase tracking-widest">Identify yourself, Scribe</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div class="space-y-2">
                    <input type="email" placeholder="Dispatch (Email)" 
                           class="w-full bg-white/40 border border-[#2c1810]/10 rounded-xl px-5 py-4 font-book italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/30 text-center">
                </div>

                <div class="space-y-2">
                    <input type="password" placeholder="Cipher (Password)" 
                           class="w-full bg-white/40 border border-[#2c1810]/10 rounded-xl px-5 py-4 font-book italic focus:outline-none focus:border-gold transition-all placeholder:text-ink/30 text-center">
                </div>

                <div class="flex justify-between items-center px-2">
                    <label class="flex items-center text-[10px] font-ui font-bold text-ink/50 uppercase tracking-tighter cursor-pointer">
                        <input type="checkbox" class="mr-2 accent-gold"> Remember me
                    </label>
                    <a href="#" class="text-[10px] font-ui font-bold text-gold uppercase tracking-tighter hover:underline">Forgot Cipher?</a>
                </div>

                <button type="submit" class="w-full bg-[#2c1810] text-paper py-4 rounded-xl font-ui text-xs font-black uppercase tracking-[0.4em] shadow-lg hover:shadow-gold/20 transition-all">
                    Enter Citadel
                </button>
            </form>

            <div class="mt-10 text-center border-t border-ink/5 pt-6">
                <p class="text-[10px] font-ui font-bold uppercase tracking-[0.2em] text-ink/40">
                    New to the Empire? 
                    <a href="register.php" class="text-gold ml-2 hover:text-ink transition-colors">Enlist Now</a>
                </p>
            </div>
        </div>
    </div>
</main>


<?php require_once __DIR__ . '/../Layouts/footer.php';?>