<!-- Left Sidebar -->
<div class="w-full lg:w-[360px] flex-shrink-0">
    <x-league />

    <div class="w-full pb-8 bg-[#222222] rounded-[20px] mt-[17px]">
        <div class="pt-3 flex items-center justify-between px-6">
            <h1 class="font-bold text-[20px] text-white">Standings</h1>
            <img src="{{ asset('images/leage.svg') }}" alt="">

        </div>

        <div class="relative my-2 px-3">
            <select
                class="w-full bg-[#2C2C2C] rounded-lg px-6 py-2 text-white text-xl font-semibold appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="premier-league">Premier League</option>
                <option value="la-liga">La Liga</option>
                <option value="bundesliga">Bundesliga</option>
                <option value="serie-a">Serie A</option>
                <option value="ligue-1">Ligue 1</option>
            </select>
            <svg class="w-6 h-6 text-white absolute right-6 top-1/2 transform -translate-y-1/2 pointer-events-none"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>

        <!-- Table Rows -->
        <div class="space-y-3 px-3">
            <!-- Chelsea -->
            <div class="bg-[#0E1E5B66] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">1</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t8.svg" alt="Chelsea"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Chelsea</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>

            <!-- Man City -->
            <div class="bg-[#0E1E5B66] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">2</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>

            <!-- Liverpool -->
            <div class="bg-[#0E1E5B66] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">3</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t14.svg" alt="Liverpool"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Liverpool</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>

            <!-- Man United -->
            <div class="bg-[#0E1E5B66] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">4</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Man United"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man United</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>

            <!-- West Ham - Highlighted -->
            <div class="bg-[#F47E01] px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4 rounded-lg">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">5</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t21.svg" alt="West Ham"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">West Ham</span>
                <span class="text-white text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-white text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>

            <div class="bg-[#2C2C2C] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">6</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>
            <div class="bg-[#2C2C2C] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">7</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>
            <div class="bg-[#2C2C2C] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">8</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>
            <div class="bg-[#B70000] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">9</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>
            <div class="bg-[#B70000] rounded-lg px-3 sm:px-6 py-4 flex items-center gap-2 sm:gap-4">
                <span class="text-white text-[13px] font-medium w-4 sm:w-6">10</span>
                <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                    class="w-6 h-6 sm:w-8 sm:h-8">
                <span class="text-white text-[13px] flex-1 truncate">Man City</span>
                <span class="text-gray-400 text-[13px] w-6 sm:w-8 text-center">14</span>
                <span class="text-gray-400 text-[13px] w-8 sm:w-12 text-center">+13</span>
                <span class="text-white text-[13px] font-semibold w-6 sm:w-8 text-right">22</span>
            </div>
        </div>
    </div>
</div>
