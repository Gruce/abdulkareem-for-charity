 <div class="flex flex-col justify-start items-center gap-4">
     <div class="font-Kufi text-4xl">
         بِسْمِ اللَّـهِ الرَّحْمَـٰنِ الرَّحِيمِ
     </div>
     <div class="text-2xl font-semibold font-IBM">
         مَن ذَا الذي يُقرضُ الله قَرضًا حَسنًا فَيُضاعفهُ لَهُ أَضعَافًا كَثيرةً وَالله يَقبضُ ويَبسطُ وإِليهِ
         تُرجَعونَ
     </div>

 </div>
 <div>
     <div class="md:col-span-4 sm:grid-rows-2 order-first md:order-last">

         <section class="flex flex-col justify-start min-h-auto max-w-md mx-auto">
             <div class="p-6 bg-gray-100 rounded ">
                 <div class="flex items-center justify-center font-black m-3 mb-12">

                     <h1 class="tracking-wide text-3xl text-gray-900">استنزل الرزق بالصدقة</h1>
                     <i class="fa-solid fa-heart h-10 w-10 mr-3 text-red-600 animate-pulse"></i>

                 </div>
                 <form wire:submit.prevent="save" id="login_form" action="api_login"
                     class="flex flex-col justify-center">

                     <div class="inline-flex items-center self-start">
                         أشتري
                     </div>
                     <div class="flex py-2">
                         <button type="button" onclick="minus()" class="bg-yellow-600 p-1.5 font-bold rounded">
                             <i class="fa-solid fa-minus w-4 h-4"></i>
                         </button>

                         <input wire:model="share" id="item_count" type="number" value="1"
                             class="w-full font-bold font-mono mx-1.5
                                    block border border-gray-300 rounded-md text-sm shadow-sm
                                    focus:outline-none
                                    focus:border-primary-ring-primary-400
                                    focus:ring-1
                                    focus:ring-primary-300
                                    focus:invalid:border-red-500  focus:invalid:ring-red-500">
                         <button type="button" onclick="plus()" class="bg-green-600 p-1.5 font-bold rounded">
                             <i class="fa-solid fa-plus w-4 h-4"></i>
                         </button>
                     </div>


                     <label class="text-sm font-medium">ملاحظة (اختياري)</label>
                     <textarea wire:model="note"
                         class="
                        mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                        focus:outline-none
                        focus:border-primary-ring-primary-400
                        focus:ring-1
                        focus:ring-primary-300
                        focus:invalid:border-red-500 focus:invalid:ring-red-500"
                         name="messages" placeholder="السهم الواحد = 2000 دينار عراقي"></textarea>
                     <button
                         class="px-4 py-1.5 rounded-md shadow-lg bg-gradient-to-r from-green-500 to-primary-600 font-medium text-gray-100 block transition duration-300"
                         type="submit">
                         <span id="login_process_state" class="hidden">Sending</span>
                         <span id="login_default_state">تبرع<span id="subtotal"></span></span>
                     </button>
                 </form>

             </div>

         </section>

         <script>
             document.getElementById("login_form").onsubmit = function() {
                 event.preventDefault()
                 // animation
                 document.getElementById("login_process_state").classList.remove("hidden")
                 document.getElementById("login_process_state").classList.add("animate-pulse")

                 document.getElementById("login_default_state").classList.add("hidden")
             }

             let current_count = parseInt(document.getElementById("item_count").value)
             let subtotal = parseInt(2000)

             function plus() {
                 document.getElementById("item_count").value = ++current_count
                 document.getElementById("subtotal").innerHTML = ` $${subtotal * document.getElementById("item_count").value}`

             }

             function minus() {
                 if (current_count < 2) {
                     current_count = 1
                     document.getElementById("item_count").value = 1
                     document.getElementById("subtotal").innerHTML =
                         ` $${subtotal * document.getElementById("item_count").value}`
                 } else {
                     document.getElementById("item_count").value = --current_count
                     document.getElementById("subtotal").innerHTML =
                         ` $${subtotal * document.getElementById("item_count").value}`
                 }
             }
         </script>
     </div>
 </div>
