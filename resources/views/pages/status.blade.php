@extends('layouts.app')
@section('title')
    Status
@endsection

@section('content')
    <x-overview.left-sidebar />
    <div class="w-full">
        <!-- Banner -->
        <div class="pb-4">
            <img src="{{ asset('images/Banner2.png') }}" class="w-full rounded-lg" alt="Banner Image">
        </div>

        <div class="mx-auto p-3 md:p-4 bg-[#222222] rounded-[20px]">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 md:mb-8 gap-4">
                <div class="flex items-center gap-3 md:gap-4">
                    <img src="{{ asset('images/cham-leage.svg') }}" alt="Premier League" class="size-6">
                    <div>
                        <h1 class="text-white text-lg md:text-[23px] font-bold">Premier League</h1>
                        <p class="text-gray-400 text-sm">England</p>
                    </div>
                </div>
                <div class="relative w-full sm:w-auto">
                    <select
                        class="w-full sm:w-auto bg-[#2C2C2C] text-white px-4 md:px-6 py-2 bg-[#1A2039] rounded-lg appearance-none cursor-pointer focus:outline-none pr-10 md:pr-12">
                        <option>2025/2026</option>
                        <option>2024/2025</option>
                        <option>2023/2024</option>
                    </select>
                    <svg class="w-5 h-5 text-white absolute right-3 md:right-4 top-1/2 transform -translate-y-1/2 pointer-events-none"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex gap-4 md:gap-8 border-b border-[#2E3034] mb-4 md:mb-6 overflow-x-auto">
                <button class="text-gray-400 font-semibold pb-3  whitespace-nowrap text-sm md:text-base">Overview</button>
                <button class="text-gray-400 font-semibold pb-3 whitespace-nowrap text-sm md:text-base">Matches</button>
                <button
                    class="text-white font-semibold pb-3 border-b-2 border-[#C3CC5A]  whitespace-nowrap text-sm md:text-base">Stats</button>
            </div>

            <!-- Tab Navigation -->
            <div class="flex gap-2 bg-[#2C2C2C] rounded-[10px] md:gap-3 py-2.5 px-6 mb-6">
                <button
                    class="bg-white text-black px-3 py-1 rounded-lg font-semibold text-sm md:text-base hover:bg-gray-100 transition-colors">
                    Players
                </button>
                <button
                    class="bg-[#222222] text-white px-3 py-1 rounded-lg font-semibold text-sm md:text-base hover:bg-[#363636] bg-[] transition-colors">
                    Teams
                </button>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-[#2C2C2C] rounded-[15px] p-2.5">
                    <!-- Header -->
                    <h2 class="text-white text-[12px] font-bold mb-4 md:mb-5">Top Scorer</h2>

                    <!-- Scorers List -->
                    <div class="space-y-3 md:space-y-4">
                        <!-- Scorer 1 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 2 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 3 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#2C2C2C] rounded-[15px] p-2.5">
                    <!-- Header -->
                    <h2 class="text-white text-[12px] font-bold mb-4 md:mb-5">Asssits</h2>

                    <!-- Scorers List -->
                    <div class="space-y-3 md:space-y-4">
                        <!-- Scorer 1 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 2 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 3 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#2C2C2C] rounded-[15px] p-2.5">
                    <!-- Header -->
                    <h2 class="text-white text-[12px] font-bold mb-4 md:mb-5">Goals + Assists</h2>

                    <!-- Scorers List -->
                    <div class="space-y-3 md:space-y-4">
                        <!-- Scorer 1 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 2 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>

                        <!-- Scorer 3 -->
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <img src="https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png"
                                    alt="Player" class="size-6 rounded-full object-cover  bg-gray-700">
                            </div>
                            <div class="">
                                <h3 class="text-white font-semibold text-[12px] truncate">Erling Haaland</h3>
                                <p class="text-gray-400 text-[10px] truncate">Manchester City</p>
                            </div>
                            <div class="bg-white rounded-full px-3">
                                <span class="text-black font-bold text-[12px]">11</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-overview.right-sidebar />

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection
