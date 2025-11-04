 <!-- Right Sidebar -->
 <div class="w-full lg:w-[360px] flex-shrink-0">
     <x-light-mode />

     <x-news />

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
                 <svg class="w-5 h-5 text-yellow-500 ml-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
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
                 <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor" viewBox="0 0 20 20">
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
                 <svg class="w-5 h-5 text-gray-600 flex-shrink-0 ml-2" fill="currentColor" viewBox="0 0 20 20">
                     <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                 </svg>
             </div>
         </div>
     </div>
 </div>
