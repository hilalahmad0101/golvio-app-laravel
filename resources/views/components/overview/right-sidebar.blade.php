 <div class="w-full lg:w-[360px] flex-shrink-0">
     <x-light-mode />


     <div class="w-full pb-8 bg-[#222222] rounded-[20px] pt-[19px] px-4 mt-[17px]">
         <!-- Header -->
         <div class="text-center mb-6">
             <h1 class="text-white text-2xl font-bold mb-4">Team Of The Week</h1>
             <div class="relative inline-block">
                 <select
                     class="bg-[#1F1F1F] text-white font-semibold px-6 py-2 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-600 pr-10">
                     <option value="9">ROUND 9</option>
                     <option value="8">ROUND 8</option>
                     <option value="7">ROUND 7</option>
                     <option value="6">ROUND 6</option>
                     <option value="5">ROUND 5</option>
                 </select>
                 <svg class="w-4 h-4 text-white absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                 </svg>
             </div>
         </div>

         <!-- Football Field -->
         <div class="relative bg-[#3A3A3A] rounded-2xl p-2 aspect-[3/4]">
             <!-- Field Lines -->
             <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 600">
                 <!-- Halfway line -->
                 <line x1="50" y1="300" x2="350" y2="300" stroke="#666" stroke-width="2" />

                 <!-- Center circle -->
                 <circle cx="200" cy="300" r="60" fill="none" stroke="#666" stroke-width="2" />

                 <!-- Top penalty area -->
                 <rect x="120" y="50" width="160" height="100" fill="none" stroke="#666" stroke-width="2" />
                 <path d="M 140 150 Q 200 180 260 150" fill="none" stroke="#666" stroke-width="2" />

                 <!-- Bottom penalty area -->
                 <rect x="120" y="450" width="160" height="100" fill="none" stroke="#666" stroke-width="2" />
                 <path d="M 140 450 Q 200 420 260 450" fill="none" stroke="#666" stroke-width="2" />

                 <!-- Top goal area -->
                 <rect x="160" y="50" width="80" height="40" fill="none" stroke="#666" stroke-width="2" />

                 <!-- Bottom goal area -->
                 <rect x="160" y="510" width="80" height="40" fill="none" stroke="#666" stroke-width="2" />
             </svg>

             <!-- Players -->
             <div class="relative h-full">
                 <!-- GK -->
                 <div class="absolute" style="left: 50%; bottom: 5%; transform: translateX(-50%);">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <!-- Defenders -->
                 <div class="absolute" style="left: 10%; bottom: 22%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 30%; bottom: 22%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 54%; bottom: 22%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 74%; bottom: 22%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <!-- Midfielders -->
                 <div class="absolute" style="left: 22%; bottom: 42%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 62%; bottom: 42%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <!-- Forwards -->
                 <div class="absolute" style="left: 15%; bottom: 62%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 42%; bottom: 62%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <div class="absolute" style="left: 69%; bottom: 62%;">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>

                 <!-- Striker -->
                 <div class="absolute" style="left: 50%; bottom: 82%; transform: translateX(-50%);">
                     <div class="flex flex-col items-center">
                         <div class="relative">
                             <img src="{{ asset('images/image.png') }}" alt="Player"
                                 class="size-7 rounded-full border-2 border-gray-600">
                             <img src="{{ asset('images/fcb.png') }}" class="absolute -bottom-1 -right-1 size-4">
                         </div>
                         <span
                             class="mt-1 bg-[#C3CC5A] text-black text-xs font-bold px-2 py-0.5 rounded-full">8.7</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <x-news />
 </div>
