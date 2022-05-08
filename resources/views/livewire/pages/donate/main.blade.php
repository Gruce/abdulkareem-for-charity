<div>
    <div class="flex bg-white p-4 justify-center items-center gap-2 my-3">


        <div class="grid md:grid-cols-10 sm:grid-cols-1 sm:grid-rows-6">
            <div class="sm:col-span-6 sm:grid-rows-4 mt-10 md:mt-0">

                <h1 class="text-3xl md:text-5xl font-Kufi text-center font-bold text-primary-600"> صندوق الأستاذ
                    عبدالكريم
                </h1>
                <p class="mt-10 text-xl text-gray-700 px-1 md:px-9">"صـندوق الأستاذ عبد الكريم الخيري" هو مبادرة ونشاط
                    طلابي
                    بحت ينطلق من
                    طلبة كلية علوم الحاسوب وتكنلوجيا المعلومات. <br>

                    الهدف منه رعاية الاعمال الخيرية داخل الكلية وتكون الاولوية في صرف الصندوق للطلبة ذوي الدخل دون
                    المحدود
                    وبقية الاعمال الخيرية. <br>

                    اساس عمل الصندوق قائم على اشتراكات شهرية لكل طالب او منتسب داخل الكلية، تبدئ الاشتراكات من مبلغ
                    (٢٠٠٠)
                    ألفين دينار عراقي او اكثر،<br>
                    اساس عمل الصندوق سيتم جمع لجان من الطلبة من مختلف المراحل مع ممثلي المراحل للأشراف على : <br>

                    1- جمع المبالغ <br>
                    2- أمانة الصندوق <br>
                    3- الاعمال التي تُصرف فيها مبالغ الصندوق<br>
                </p>
            </div>
            <div class="md:col-span-4 sm:grid-rows-2 order-first md:order-last">

                <section class="p-4 flex flex-col justify-start min-h-screen max-w-md mx-auto">
                    <div class="p-6 bg-gray-100 rounded ">
                        <div class="flex items-center justify-center font-black m-3 mb-12">

                            <h1 class="tracking-wide text-3xl text-gray-900">تبرع من هنا  </h1>
                            <i class="fa-solid fa-heart h-10 w-10 mr-3 text-red-600 animate-pulse"></i>
                            
                        </div>
                        <form wire:submit.prevent="save" id="login_form" action="api_login" method="POST" class="flex flex-col justify-center">
                            <div class=" items-center mb-3">
                                <div class="inline-flex items-center self-start">
                                    
                                </div>
                                <div class="flex">
                                    <button type="button" onclick="minus()"
                                        class="bg-yellow-600 p-1.5 font-bold rounded">
                                        <i class="fa-solid fa-minus h-4 w-4"></i>
                                    </button>

                                    <input id="item_count" type="number" value="1"
                                        class="max-w-[100px] font-bold font-mono py-1.5 px-2 mx-1.5
                        block border border-gray-300 rounded-md text-sm shadow-sm  placeholder-gray-400
                        focus:outline-none
                        focus:border-sky-500
                        focus:ring-1
                        focus:ring-sky-500
                        focus:invalid:border-red-500  focus:invalid:ring-red-500">

                                    <button type="button" onclick="plus()" class="bg-green-600 p-1.5 font-bold rounded">
                                        <i class="fa-solid fa-plus h-4 w-4"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <label class="text-sm font-medium">ملاحظة (اختياري)</label>
                            <textarea class="
                        mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400
                        focus:outline-none
                        focus:border-sky-500
                        focus:ring-1
                        focus:ring-sky-500
                        focus:invalid:border-red-500 focus:invalid:ring-red-500"
                                name="messages" placeholder="اكتب شيئا"></textarea>
                            <button
                                class="px-4 py-1.5 rounded-md shadow-lg bg-gradient-to-r from-green-500 to-primary-600 font-medium text-gray-100 block transition duration-300"
                                type="submit">
                                <span id="login_process_state" class="hidden">Sending :)</span>
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
                        document.getElementById("subtotal").innerHTML = ` ${subtotal * document.getElementById("item_count").value}`

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

    </div>
</div>
