 <div class="w-full lg:w-[360px] flex-shrink-0">
     <x-light-mode />


     <div class="bg-[#222222] rounded-[20px] overflow-hidden mt-4 p-6">
         <!-- Header Section -->
         <h2 class="text-white text-center text-lg md:text-xl font-bold">Who’s going to win?</h2>

         <!-- Teams Section -->
         <div class="px-4 md:px-6 py-6 md:py-8">
             <div class="flex items-center justify-around gap-6 md:gap-8">
                 <!-- Team 1 -->
                 <div class="flex-shrink-0">
                     <img src="https://resources.premierleague.com/premierleague/badges/t8.svg" alt="Chelsea"
                         class="size-11">
                 </div>

                 <!-- VS -->
                 <div class="text-white bg-[#1B1B1B] py-2 px-5 rounded-full text-2xl md:text-3xl font-bold">X</div>

                 <!-- Team 2 -->
                 <div class="flex-shrink-0">
                     <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Man United"
                         class="size-11">
                 </div>
             </div>
         </div>
     </div>
     <div class="bg-[#222222] rounded-[20px] overflow-hidden mt-4">
         <!-- Stadium Info Section -->
         <div class="bg-[#222222] px-4 md:px-6 py-4 md:py-5">
             <div class="flex items-start gap-4 md:gap-5">
                 <!-- Left Side - Info -->
                 <div class="flex-1 space-y-3 md:space-y-4">
                     <!-- Location -->
                     <div class="flex items-start gap-3">
                         <svg class="w-5 h-5 md:w-6 md:h-6 text-white flex-shrink-0 mt-0.5" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                             </path>
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                         </svg>
                         <div>
                             <p class="text-white font-semibold text-sm md:text-base">Old Trafford</p>
                             <p class="text-gray-400 text-xs md:text-sm">Manchester</p>
                             <p class="text-gray-400 text-xs md:text-sm">England</p>
                         </div>
                     </div>

                     <!-- Capacity -->
                     <div class="flex items-start gap-3">
                         <svg class="w-5 h-5 md:w-6 md:h-6 text-white flex-shrink-0 mt-0.5" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                             </path>
                         </svg>
                         <div>
                             <p class="text-white font-semibold text-sm md:text-base">Capacity</p>
                             <p class="text-gray-400 text-xs md:text-sm">76,212</p>
                         </div>
                     </div>

                     <!-- Surface -->
                     <div class="flex items-start gap-3">
                         <svg class="w-5 h-5 md:w-6 md:h-6 text-white flex-shrink-0 mt-0.5" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M4 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v7a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-3zM14 16a1 1 0 011-1h4a1 1 0 011 1v3a1 1 0 01-1 1h-4a1 1 0 01-1-1v-3z">
                             </path>
                         </svg>
                         <div>
                             <p class="text-white font-semibold text-sm md:text-base">Surface</p>
                             <p class="text-gray-400 text-xs md:text-sm">Grass</p>
                         </div>
                     </div>
                 </div>

                 <!-- Right Side - Stadium Image -->
                 <div class="flex-shrink-0">
                     <img src="{{ asset('images/image2.png') }}" alt="Stadium" class="w-full rounded-lg object-cover">
                 </div>
             </div>
         </div>
     </div>

     <x-overview.top-scores />
     <x-news />
 </div>
