<div class="bg-[#222222] rounded-[20px] p-4 md:p-6 mt-4">
    <!-- Header -->
    <div class="flex items-center justify-between mb-4 md:mb-5">
        <h2 class="text-white text-xl md:text-2xl font-bold">Premier League</h2>
        <img src="{{ asset('images/cham-leage.svg') }}" alt="Premier League" class="size-8">
    </div>

    <!-- Round Selector -->
    <div class="relative mb-4 md:mb-5">
        <select
            class="w-full bg-[#2C2C2C] text-white px-4 md:px-5 py-2 rounded-[15px] appearance-none cursor-pointer focus:outline-none pr-12 text-base md:text-lg font-medium">
            <option>Round 8</option>
            <option>Round 7</option>
            <option>Round 6</option>
            <option>Round 5</option>
        </select>
        <svg class="w-6 h-6 text-white absolute right-4 md:right-5 top-1/2 transform -translate-y-1/2 pointer-events-none"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>

    <!-- Matches -->
    <div class="space-y-3 md:space-y-4">
        <!-- Match 1 -->
        <div class="bg-[#3A3A3A] rounded-[15px] p-4 md:p-5">
            <div class="flex items-center justify-between gap-4">
                <!-- Teams -->
                <div class="flex flex-col gap-3 md:gap-4 flex-1">
                    <!-- Team 1 -->
                    <div class="flex items-center gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t8.svg" alt="Chelsea"
                            class="size-7 ">
                        <span class="text-white font-medium text-base md:text-lg">Chelsea</span>
                    </div>
                    <!-- Team 2 -->
                    <div class="flex items-center gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Man City"
                            class="size-7 ">
                        <span class="text-white font-medium text-base md:text-lg">Man City</span>
                    </div>
                </div>

                <!-- Date & Time -->
                <div class="text-right ">
                    <p class="text-white text-sm md:text-base font-medium">November 1</p>
                    <p class="text-white text-base md:text-lg font-semibold">11:00 AM</p>
                </div>
            </div>
        </div>

        <!-- Match 2 -->
        <div class="bg-[#3A3A3A] rounded-[15px] p-4 md:p-5">
            <div class="flex items-center justify-between gap-4">
                <!-- Teams -->
                <div class="flex flex-col gap-3 md:gap-4 flex-1">
                    <!-- Team 1 -->
                    <div class="flex items-center gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t14.svg" alt="Liverpool"
                            class="size-7 ">
                        <span class="text-white font-medium text-base md:text-lg">Liverpool</span>
                    </div>
                    <!-- Team 2 -->
                    <div class="flex items-center gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Man United"
                            class="size-7 ">
                        <span class="text-white font-medium text-base md:text-lg">Man United</span>
                    </div>
                </div>

                <!-- Date & Time -->
                <div class="text-right ">
                    <p class="text-white text-sm md:text-base font-medium">November 1</p>
                    <p class="text-white text-base md:text-lg font-semibold">11:00 AM</p>
                </div>
            </div>
        </div>
    </div>
</div>
