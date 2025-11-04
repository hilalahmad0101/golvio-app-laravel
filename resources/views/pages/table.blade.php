@extends('layouts.app')
@section('title')
    Table
@endsection

@section('content')
    <x-table.left-sidebar />
    <div class="w-full flex-1 min-w-0">
        <!-- Banner -->
        <div class="pb-4">
            <img src="{{ asset('images/Banner2.png') }}" class="w-full rounded-lg" alt="Banner Image">
        </div>

        <div class="mx-auto p-3 md:p-4 bg-[#222222] rounded-[20px]">
            <!-- Header -->
            <div class="mb-4">
                <div class="md:flex block space-y-2 md:space-y-2 items-center justify-between w-full gap-3 md:gap-4">
                    <h2 class="text-white text-base md:text-[19px] font-bold">Matches</h2>
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/cham-leage.svg') }}" alt="Premier League" class="size-5">
                        <h1 class="text-white text-[16px] font-bold">Premier League</h1>
                    </div>
                    <div class=" bg-[#2C2C2C] px-3 rounded-full w-auto">
                        <button class="text-white hover:text-white text-sm md:text-base">Follow</button>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex gap-4 md:gap-8 border-b border-[#2E3034] mb-4 md:mb-6 overflow-x-auto">
                <button class="text-gray-400 font-semibold pb-3  whitespace-nowrap text-sm md:text-base">Preview</button>
                <button
                    class="text-white border-b-2 border-[#C3CC5A] font-semibold pb-3 whitespace-nowrap text-sm md:text-base">Table</button>
                <button
                    class="text-gray-400 font-semibold pb-3 whitespace-nowrap text-sm md:text-base">Head-to-head</button>
            </div>

            <!-- Matches Section -->
            <div class="bg-[#2C2C2C] px-3 md:px-4 rounded-[10px] py-3 md:py-2">
                <!-- Match Cards - Horizontal Scroll -->
                <div class="relative ">
                    <div class="flex items-center gap-2 md:gap-4 overflow-x-auto scrollbar-hide">
                        <div class=" rounded-[10px] w-full p-3 bg-[#222222]">
                            <div class="flex items-center justify-around">
                                <div class="flex items-center space-x-2 ">
                                    <span class="text-white text-xs md:text-sm text-center">Chelsea</span>
                                    <img src="https://resources.premierleague.com/premierleague/badges/t8.svg"
                                        class="w-8 h-8 ">
                                </div>
                                <div class="flex flex-col items-center px-2">
                                    <span class="text-white text-base md:text-[19px] font-bold">11:00 AM</span>
                                    <span class="text-gray-400 text-xs md:text-sm">03:13:42</span>
                                </div>
                                <div class="flex  items-center   space-x-2">
                                    <img src="https://resources.premierleague.com/premierleague/badges/t1.svg"
                                        class="w-8 h-8 ">
                                    <span class="text-white text-xs md:text-sm text-center">Man United</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="rounded-xl overflow-hidden mt-3">
                <!-- Desktop Table Header -->
                <div
                    class="hidden lg:grid grid-cols-12 gap-4 px-4 md:px-6 py-4 text-gray-400 text-xs md:text-sm font-semibold">
                    <div class="col-span-1">#</div>
                    <div class="col-span-3"></div>
                    <div class="col-span-1 text-center">PL</div>
                    <div class="col-span-1 text-center">W</div>
                    <div class="col-span-1 text-center">D</div>
                    <div class="col-span-1 text-center">L</div>
                    <div class="col-span-1 text-center">+/-</div>
                    <div class="col-span-1 text-center">PTS</div>
                    <div class="col-span-2 text-right">Form</div>
                </div>

                <!-- Mobile/Tablet Friendly Table Rows -->
                <!-- Row 1 -->
                <div
                    class="grid grid-cols-12 gap-2 md:gap-4 px-3 md:px-6 py-4 md:py-5 bg-[#2C2C2C] items-center mb-3 rounded-lg hover:bg-[#222844]">
                    <div class="col-span-1 text-white font-bold text-sm md:text-base">1</div>
                    <div class="col-span-7 lg:col-span-3 flex items-center gap-2 md:gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t8.svg"
                            class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0">
                        <span class="text-white font-semibold text-sm md:text-base truncate">Chelsea F.C</span>
                    </div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">14</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">3</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">1</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">35</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">16-3</div>
                    <div class="col-span-2 lg:col-span-1 text-center text-white font-bold text-sm md:text-base">35</div>
                    <div class="col-span-2 flex justify-end gap-1 md:gap-2">
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div
                    class="grid grid-cols-12 gap-2 md:gap-4 px-3 md:px-6 py-4 md:py-5 bg-[#2C2C2C] items-center mb-3 rounded-lg hover:bg-[#222844]">
                    <div class="col-span-1 text-white font-bold text-sm md:text-base">2</div>
                    <div class="col-span-7 lg:col-span-3 flex items-center gap-2 md:gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t1.svg"
                            class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0">
                        <span class="text-white font-semibold text-sm md:text-base truncate">Man United</span>
                    </div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">14</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">3</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">1</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">35</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">16-3</div>
                    <div class="col-span-2 lg:col-span-1 text-center text-white font-bold text-sm md:text-base">35</div>
                    <div class="col-span-2 flex justify-end gap-1 md:gap-2">
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#EE0C0C] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Row 3 -->
                <div
                    class="grid grid-cols-12 gap-2 md:gap-4 px-3 md:px-6 py-4 md:py-5 bg-[#000000B8] items-center mb-3 rounded-lg hover:bg-[#222844]">
                    <div class="col-span-1 text-white font-bold text-sm md:text-base">3</div>
                    <div class="col-span-7 lg:col-span-3 flex items-center gap-2 md:gap-3">
                        <img src="https://resources.premierleague.com/premierleague/badges/t14.svg"
                            class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0">
                        <span class="text-white font-semibold text-sm md:text-base truncate">Liverpool</span>
                    </div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">14</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">3</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">1</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">35</div>
                    <div class="hidden lg:block col-span-1 text-center text-white text-sm md:text-base">16-3</div>
                    <div class="col-span-2 lg:col-span-1 text-center text-white font-bold text-sm md:text-base">35</div>
                    <div class="col-span-2 flex justify-end gap-1 md:gap-2">
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] flex items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#C3CC5A] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="hidden sm:flex w-4 h-4 md:w-5 md:h-5 rounded-full bg-[#EE0C0C] items-center justify-center flex-shrink-0">
                            <svg class="w-3 h-3 md:w-4 md:h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-table.right-sidebar />

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
