@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
    <x-overview.left-sidebar />
    <div class="w-full flex-1 min-w-0">
        <!-- Banner -->
        <div class="pb-4">
            <img src="{{ asset('images/Banner2.png') }}" class="w-full rounded-lg" alt="Banner Image">
        </div>

        <div class="mx-auto p-3 md:p-4 bg-[#222222] rounded-[20px]">
            <!-- Header -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 md:mb-8 gap-4">
                <div class="flex items-center gap-3 md:gap-4">
                    <img src="{{ asset('images/cham-leage.svg') }}" alt="Premier League" class="w-10 h-10 md:w-12 md:h-12">
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
                <button class="text-gray-400 font-semibold pb-3 whitespace-nowrap text-sm md:text-base">Overview</button>
                <button
                    class="text-white font-semibold pb-3 border-b-2  border-[#C3CC5A]  whitespace-nowrap text-sm md:text-base">Matches</button>
                <button class="text-gray-400 font-semibold pb-3 whitespace-nowrap text-sm md:text-base">Stats</button>
            </div>

            <!-- Tab Navigation -->
            <div class="flex gap-2 bg-[#2C2C2C] rounded-[10px] md:gap-3 py-2.5 px-6 mb-6">
                <button
                    class="bg-white text-black px-3 py-1 rounded-lg font-semibold text-sm md:text-base hover:bg-gray-100 transition-colors">
                    By Date
                </button>
                <button
                    class="bg-[#222222] text-white px-3 py-1 rounded-lg font-semibold text-sm md:text-base hover:bg-[#363636] bg-[] transition-colors">
                    By Round
                </button>
                <button
                    class="bg-[#222222] text-white px-3 py-1 rounded-lg font-semibold text-sm md:text-base hover:bg-[#363636] bg-[] transition-colors">
                    By Team
                </button>
            </div>


            <div class="mb-4">
                <div class="bg-black px-4 py-3 flex items-center gap-2 rounded-t-[10px]">
                    <span class="text-white text-[12px] font-semibold">Saturday, November 1</span>
                </div>

                <div class="bg-[#2C2C2C] border-2 border-[#2C2C2C] rounded-b-[10px]">
                    <!-- Chelsea vs Man United -->
                    <div class="mx-3 rounded-[10px] py-2   transition-colors">
                        <div class="flex items-center justify-center gap-x-6">
                            <!-- Home Team -->
                            <div class="flex items-center gap-2 md:gap-3  min-w-0">
                                <span class="text-white font-semibold text-sm md:text-base truncate">Spain</span>
                                <img src="{{ asset('images/span.png') }}" alt="Spain"
                                    class="size-6 rounded-full object-cover ">
                            </div>

                            <!-- Score/Time -->
                            <div class="flex items-center gap-2 md:gap-3 ">
                                <span class="text-white font-bold text-base md:text-lg">11:00</span>
                            </div>

                            <!-- Away Team -->
                            <div class="flex items-center gap-2 md:gap-3  min-w-0 justify-end">
                                <img src="{{ asset('images/naterland.png') }}" alt="Netherlands"
                                    class="size-6 rounded-full object-cover ">
                                <span
                                    class="text-white font-semibold text-sm md:text-base truncate text-right">Netherlands</span>
                            </div>
                        </div>
                    </div>
                    <div class=" py-2 bg-[#222222] rounded-b-[10px]  transition-colors">
                        <div class="flex items-center justify-center gap-x-6">
                            <!-- Home Team -->
                            <div class="flex items-center gap-2 md:gap-3  min-w-0">
                                <span class="text-white font-semibold text-sm md:text-base truncate">Spain</span>
                                <img src="{{ asset('images/span.png') }}" alt="Spain"
                                    class="size-6 rounded-full object-cover ">
                            </div>

                            <!-- Score/Time -->
                            <div class="flex items-center gap-2 md:gap-3 ">
                                <span class="text-white font-bold text-base md:text-lg">-</span>
                            </div>

                            <!-- Away Team -->
                            <div class="flex items-center gap-2 md:gap-3  min-w-0 justify-end">
                                <img src="{{ asset('images/naterland.png') }}" alt="Netherlands"
                                    class="size-6 rounded-full object-cover ">
                                <span
                                    class="text-white font-semibold text-sm md:text-base truncate text-right">Netherlands</span>
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
