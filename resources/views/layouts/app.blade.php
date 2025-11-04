<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#303030]">
    <div class="flex flex-col lg:flex-row items-start p-2.5 gap-2.5">
        <!-- Left Sidebar -->
        <div class="w-full lg:w-[360px] flex-shrink-0">
            <div class="w-full pb-8 bg-[#222222] rounded-[20px]">
                <div class="pt-[31px]">
                    <div class="px-10 h-12  rounded flex items-center justify-center">
                        <img src="{{ asset('images/logo.svg') }}" alt="">
                    </div>
                </div>
                <div class="pt-[31px] pb-[31px] px-[13px]">
                    <input type="text"
                        class="w-full py-1 px-2 bg-[#303030] rounded-[10px] text-white placeholder:text-white"
                        placeholder="Search...">
                </div>

                <div class="px-[25px]">
                    <h1 class="font-bold text-[20px] text-white">Top Leagues</h1>
                    <div class="mt-[13px] space-y-[13px]">
                        <div class="flex items-center space-x-[21px]">
                            <img src="{{ asset('images/cham-leage.svg') }}" alt="">
                            <h1 class="text-white text-base font-normal">Premier League</h1>
                        </div>
                        <div class="flex items-center space-x-[21px]">
                            <img src="{{ asset('images/cham-leage.svg') }}" alt="">
                            <h1 class="text-white text-base font-normal">Champions League</h1>
                        </div>
                        <div class="flex items-center space-x-[21px]">
                            <img src="{{ asset('images/cham-leage.svg') }}" alt="">
                            <h1 class="text-white text-base font-normal">La Liga</h1>
                        </div>
                        <div class="flex items-center space-x-[21px]">
                            <img src="{{ asset('images/cham-leage.svg') }}" alt="">
                            <h1 class="text-white text-base font-normal">Bundesliga</h1>
                        </div>
                        <div class="flex items-center space-x-[21px]">
                            <img src="{{ asset('images/cham-leage.svg') }}" alt="">
                            <h1 class="text-white text-base font-normal">Serie A</h1>
                        </div>
                    </div>
                </div>
            </div>

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

        <!-- Middle Content -->
        <div class="w-full flex-1 min-w-0">
            @yield('content')
        </div>

        <!-- Right Sidebar -->
        <div class="w-full lg:w-[360px] flex-shrink-0">
            <div class="w-full bg-[#222222] p-2.5 rounded-[20px] px-3 sm:px-6">
                <div class="bg-[#303030] rounded-lg p-2 flex items-center justify-center gap-2">
                    <button
                        class="flex hover:bg-[#222222] items-center gap-x-2 px-4 sm:px-6 py-1 rounded-lg bg-[#303030] text-white font-medium text-sm">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd" />
                        </svg>
                        Light
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 sm:px-6 py-1 rounded-lg text-gray-400 font-medium hover:bg-[#222222] hover:text-white transition text-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                        Dark
                    </button>
                </div>
            </div>

            <div class="w-full bg-[#222222] p-2.5 rounded-[20px] px-3 sm:px-6 mt-2">
                <!-- Header -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-white text-lg font-bold">News</h2>
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

                <!-- Featured Article -->
                <div class="mb-4">
                    <div class="relative rounded-lg overflow-hidden mb-2">
                        <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=500&h=300&fit=crop"
                            alt="Premier League Champions" class="w-full h-48 object-cover">
                    </div>
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-white font-semibold text-sm leading-tight mb-1">Results And Scores From The
                                Premier League....!!!</h3>
                            <p class="text-gray-500 text-xs">5 Hours Ago</p>
                        </div>
                        <svg class="w-5 h-5 text-yellow-500 ml-2 flex-shrink-0" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <!-- News List -->
                <div class="space-y-[30px]">
                    <!-- Article 1 -->
                    <div class="flex gap-3 items-start">
                        <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=100&h=100&fit=crop"
                            alt="Players" class="w-16 h-16 rounded object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-white text-sm font-semibold leading-tight mb-1">Here Are The Top 100
                                Players And Managers</h4>
                            <p class="text-gray-500 text-xs">10 Oct 2025, 08:00 AM</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                    </div>

                    <!-- Article 2 -->
                    <div class="flex gap-3 items-start">
                        <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?w=100&h=100&fit=crop"
                            alt="Match Results" class="w-16 h-16 rounded object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-white text-sm font-semibold leading-tight mb-1">Results And Scores From The
                                Premier League....!!!</h4>
                            <p class="text-gray-500 text-xs">10 Oct 2025, 08:00 PM</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="w-full bg-[#222222] p-2.5 rounded-[20px] px-3 sm:px-6 mt-[15px]">
                <!-- Header -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-white text-lg font-bold">Podcast</h2>
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

                <!-- Featured Article -->
                <div class="mb-4">
                    <div class="relative rounded-lg overflow-hidden mb-2">
                        <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=500&h=300&fit=crop"
                            alt="Premier League Champions" class="w-full h-48 object-cover">
                    </div>
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-white font-semibold text-sm leading-tight mb-1">Results And Scores From The
                                Premier League....!!!</h3>
                            <p class="text-gray-500 text-xs">5 Hours Ago</p>
                        </div>
                        <svg class="w-5 h-5 text-yellow-500 ml-2 flex-shrink-0" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <!-- News List -->
                <div class="space-y-[30px]">
                    <!-- Article 1 -->
                    <div class="flex gap-3 items-start">
                        <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=100&h=100&fit=crop"
                            alt="Players" class="w-16 h-16 rounded object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-white text-sm font-semibold leading-tight mb-1">Here Are The Top 100
                                Players And Managers</h4>
                            <p class="text-gray-500 text-xs">10 Oct 2025, 08:00 AM</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                    </div>

                    <!-- Article 2 -->
                    <div class="flex gap-3 items-start">
                        <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?w=100&h=100&fit=crop"
                            alt="Match Results" class="w-16 h-16 rounded object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-white text-sm font-semibold leading-tight mb-1">Results And Scores From The
                                Premier League....!!!</h4>
                            <p class="text-gray-500 text-xs">10 Oct 2025, 08:00 PM</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
