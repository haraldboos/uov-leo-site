    <div class="mx-auto container">
    <div 
            x-data="{ members: 0, projects: 0 ,years : 0}"
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
            class="grid grid-cols-1  sm:grid-cols-3 gap-6 text-center"
        >
            <div class="bg-white rounded-lg shadow p-6">
                <div class="text-3xl font-bold text-yellow-700">
                    <span x-text="members"></span>+
                </div>
                <p class="mt-2 text-gray-700 font-medium">Dedicated Members</p>
            </div>
         <div class="bg-white rounded-lg shadow p-6">
                <div class="text-3xl font-bold text-yellow-700">
                    <span x-text="years"></span>
                </div>
                <p class="mt-2 text-gray-700 font-medium">Years as leos</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="text-3xl font-bold text-yellow-700">
                    <span x-text="projects"></span>
                </div>
                <p class="mt-2 text-gray-700 font-medium">Projects for 2024/25</p>
            </div>
        </div>
    </div>