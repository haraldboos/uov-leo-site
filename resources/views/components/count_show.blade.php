<div class="py-12 px-4 sm:px-6 lg:px-20 ">
    <div class="mx-auto max-w-6xl">
        <div 
            x-data="{ members: 0, projects: 0 , years: 0 }"
            x-init="
                const animate = (target, step, delay, value) => {
                    const timer = setInterval(() => {
                        if (value() < target) step();
                        else clearInterval(timer);
                    }, delay);
                };
                animate(200, () => members++, 10, () => members);
                animate(8, () => projects++, 150, () => projects);
                animate(3, () => years++, 150, () => years);
            "
            class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center"
        >
            {{-- Members --}}
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl font-extrabold text-[#fbbf24] tracking-tight">
                    <span x-text="members"></span>+
                </div>
                <p class="mt-4 text-gray-800 text-lg font-medium">Dedicated Members</p>
            </div>

            {{-- Years --}}
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl font-extrabold text-[#fbbf24] tracking-tight">
                    <span x-text="years"></span>
                </div>
                <p class="mt-4 text-gray-800 text-lg font-medium">Years as Leos</p>
            </div>

            {{-- Projects --}}
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl font-extrabold text-[#fbbf24] tracking-tight">
                    <span x-text="projects"></span>+
                </div>
                <p class="mt-4 text-gray-800 text-lg font-medium">Projects for 2024/25</p>
            </div>
        </div>
    </div>
</div>
