@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
    <div class=" pb-4">
        <img src="{{ asset('images/Banner.png') }}" class="w-full" alt="Banner Image">
    </div>
    <div class=" mx-auto p-4 bg-[#222222] rounded-[20px]">
        <!-- Top Bar -->
        <div class="flex items-center gap-3 mb-4">
            <div class="flex items-center gap-2 bg-[#2C2C2C] px-3 py-2 rounded">
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                <span class="text-white text-sm font-medium">Live</span>
                <span class="text-gray-400 text-sm">(1)</span>
            </div>
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search For Matches"
                class="flex-1 bg-[#2C2C2C] text-white px-4 py-2 rounded text-sm placeholder-gray-500 focus:outline-none">
            <select class="bg-[#2C2C2C] text-white px-4 py-2 rounded text-sm focus:outline-none">
                <option>All Matches</option>
            </select>
        </div>

        <div class="flex gap-2 mb-6 overflow-x-scroll w-full" id="time-sheet-scroll">
            <button
                class="px-6 py-3 rounded-lg bg-[#2C2C2C] text-white text-xs font-medium whitespace-nowrap">Wednesday<br>09
                Aug</button>
            <button
                class="px-6 py-3 rounded-lg bg-[#2C2C2C] text-white text-xs font-medium whitespace-nowrap">Yesterday<br>10
                Aug</button>
            <button
                class="px-6 py-3 rounded-lg bg-[#2C2C2C] border-2 border-yellow-500 text-yellow-400 text-xs font-semibold whitespace-nowrap">Today<br>11
                Aug</button>
            <button
                class="px-6 py-3 rounded-lg bg-[#2C2C2C] text-white text-xs font-medium whitespace-nowrap">Tomorrow<br>12
                Aug</button>
            <button class="px-6 py-3 rounded-lg bg-[#2C2C2C] text-white text-xs font-medium whitespace-nowrap">Sunday<br>13
                Aug</button>
            <button class="px-6 py-3 rounded-lg bg-[#2C2C2C] text-white text-xs font-medium whitespace-nowrap">Monday<br>14
                Aug</button>
            <button
                class="px-6 py-3 rounded-lg bg-[#2C2C2C] border-2 border-yellow-500 text-yellow-400 text-xs font-semibold flex items-center gap-2 whitespace-nowrap">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                View<br>Calendar
            </button>
        </div>

        <!-- England - Premier League -->
        <div class="mb-4">
            <div class="bg-black px-4 py-3 flex items-center gap-2 rounded-t-[10px]">
                <img src="https://crests.football-data.org/PL.png" alt="Premier League" class="w-5 h-5">
                <span class="text-white text-sm font-semibold">England - Premier League</span>
            </div>

            <div class="bg-[#2C2C2C] divide-y rounded-b-[10px] divide-gray-700">
                <!-- Chelsea vs Man United -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="bg-red-600 text-white text-xs px-2 py-1 rounded font-medium">Live</span>
                    </div>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Chelsea</span>
                            <img src="https://resources.premierleague.com/premierleague/badges/t8.svg" alt="Chelsea"
                                class="w-5 h-5">
                        </div>
                        <div class="flex items-center gap-2 min-w-[60px] justify-center">
                            <span class="text-white font-bold text-sm">2-1</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Man United"
                                class="w-5 h-5">
                            <span class="text-white text-sm">Man United</span>
                        </div>
                    </div>
                </div>

                <!-- Brentford vs Liverpool -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">13:40</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Brentford</span>
                            <img src="https://resources.premierleague.com/premierleague/badges/t94.svg" alt="Brentford"
                                class="w-5 h-5">
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <img src="https://resources.premierleague.com/premierleague/badges/t14.svg" alt="Liverpool"
                                class="w-5 h-5">
                            <span class="text-white text-sm">Liverpool</span>
                        </div>
                    </div>
                </div>

                <!-- Arsenal vs Genk -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">18:20</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Arsenal</span>
                            <img src="https://resources.premierleague.com/premierleague/badges/t3.svg" alt="Arsenal"
                                class="w-5 h-5">
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <img src="https://crests.football-data.org/734.png" alt="Genk" class="w-5 h-5">
                            <span class="text-white text-sm">Genk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Spain - La Liga -->
        <div class="mb-4">
            <div class="bg-black px-4 py-3 flex items-center gap-2 rounded-t-[10px]">
                <img src="https://crests.football-data.org/PD.png" alt="La Liga" class="w-5 h-5">
                <span class="text-white text-sm font-semibold">Spain - La Liga</span>
            </div>

            <div class="bg-[#2C2C2C] divide-y rounded-b-[10px] divide-gray-700">
                <!-- Spain vs Netherlands -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">01:43</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Spain</span>
                            <span class="text-xl">🇪🇸</span>
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇳🇱</span>
                            <span class="text-white text-sm">Netherlands</span>
                        </div>
                    </div>
                </div>

                <!-- Japan vs Sweden -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">13:40</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Japan</span>
                            <span class="text-xl">🇯🇵</span>
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇸🇪</span>
                            <span class="text-white text-sm">Sweden</span>
                        </div>
                    </div>
                </div>

                <!-- Olympiakos vs Genk -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">18:20</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Olympiakos</span>
                            <img src="https://crests.football-data.org/735.png" alt="Olympiakos" class="w-5 h-5">
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <img src="https://crests.football-data.org/734.png" alt="Genk" class="w-5 h-5">
                            <span class="text-white text-sm">Genk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Spain - La Liga (Second Section) -->
        <div class="mb-4">
            <div class="bg-black px-4 py-3 flex items-center gap-2 rounded-t-[10px]">
                <img src="https://crests.football-data.org/PD.png" alt="La Liga" class="w-5 h-5">
                <span class="text-white text-sm font-semibold">Spain - La Liga</span>
            </div>

            <div class="bg-[#2C2C2C] divide-y rounded-b-[10px] divide-gray-700 rounded-b">
                <!-- Spain vs Netherlands -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">01:43</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Spain</span>
                            <span class="text-xl">🇪🇸</span>
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇳🇱</span>
                            <span class="text-white text-sm">Netherlands</span>
                        </div>
                    </div>
                </div>

                <!-- Japan vs Sweden -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">13:40</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Japan</span>
                            <span class="text-xl">🇯🇵</span>
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇸🇪</span>
                            <span class="text-white text-sm">Sweden</span>
                        </div>
                    </div>
                </div>

                <!-- Olympiakos vs Genk -->
                <div class="px-4 py-3 flex items-center justify-between">
                    <span class="text-gray-400 text-sm font-medium">18:20</span>
                    <div class="flex items-center gap-3 flex-1 justify-end">
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm">Olympiakos</span>
                            <img src="https://crests.football-data.org/735.png" alt="Olympiakos" class="w-5 h-5">
                        </div>
                        <span class="text-gray-500 text-sm min-w-[60px] text-center">-</span>
                        <div class="flex items-center gap-2">
                            <img src="https://crests.football-data.org/734.png" alt="Genk" class="w-5 h-5">
                            <span class="text-white text-sm">Genk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
