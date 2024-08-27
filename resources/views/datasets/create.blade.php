<x-layout>
  <x-slot:heading>
      أضافة مجموعة بيانات
  </x-slot:heading>
<x-opt> 
  <form method="POST" action="/datasets" class="mx-auto mt-10 max-w-4xl px-4">
      @csrf
      <div class="space-y-12">
          <div class="border-b border-gray-300 pb-12">
              
    
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="العنوان_بالعربية" class="block text-sm font-medium leading-6 text-gray-800">العنوان بالعربية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-500 sm:max-w-md">
                              <input 
                                  type="text"
                                  name="العنوان_بالعربية" 
                                  id="العنوان_بالعربية" 
                                  class="block flex-1 border-0 bg-gray-50 py-2 px-3 text-gray-900 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6" 
                                  placeholder="التقرير السنوي" 
                                  required
                              >
                          </div>
                          <x-form-error name="العنوان_بالعربية" />
                      </div>
                  </div>
              </div>

          
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="العنوان_بالأنجليزية" class="block text-sm font-medium leading-6 text-gray-800">العنوان بالأنجليزية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-500 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="العنوان_بالأنجليزية" 
                                  id="العنوان_بالأنجليزية"
                                  class="block flex-1 border-0 bg-gray-50 py-2 px-3 text-gray-900 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="Annual Report" 
                                  required
                              >
                          </div>
                          <x-form-error name="العنوان_بالأنجليزية" />
                      </div>
                  </div>
              </div>

     
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الوصف_بالعربية" class="block text-sm font-medium leading-6 text-gray-800">الوصف بالعربية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-500 sm:max-w-md">
                              <textarea  
                                  name="الوصف_بالعربية" 
                                  id="الوصف_بالعربية"
                                  class="block flex-1 border-0 bg-gray-50 py-2 px-3 text-gray-900 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="التقارير السنوية للجامعة"
                                  required
                              ></textarea>
                          </div>
                          <x-form-error name="الوصف_بالعربية" />
                      </div>
                  </div>
              </div>

     
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="التحديث_الدوري" class="block text-sm font-medium leading-6 text-gray-800">التحديث الدوري:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-500 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="التحديث_الدوري" 
                                  id="التحديث_الدوري"
                                  class="block flex-1 border-0 bg-gray-50 py-2 px-3 text-gray-900 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="سنوي"
                                  required
                              >
                          </div>
                          <x-form-error name="التحديث_الدوري" />
                      </div>
                  </div>
              </div>

        
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الحالة" class="block text-sm font-medium leading-6 text-gray-800">النشر في مكتبة البيانات المفتوحة:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-500 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="الحالة" 
                                  id="الحالة"
                                  class="block flex-1 border-0 bg-gray-50 py-2 px-3 text-gray-900 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="منشور"
                                  required
                              >
                          </div>
                          <x-form-error name="الحالة" />
                      </div>
                  </div>
              </div>

       
              <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الفئات" class="block text-sm font-medium leading-6 text-gray-800">الفئات:</label>
                      <div class="flex flex-row space-y-3 gap-8">
                          <div class="flex space-x-6 items-center gap-20 mt-6">
                              <!-- Radio Button 1 -->
                              <div class="flex items-center">
                                  <input 
                                      id="الفئات_التقارير" 
                                      type="radio" 
                                      name="الفئات" 
                                      value="التقارير"
                                      class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" 
                                  />
                                  <label for="الفئات_التقارير" class="ml-2 block text-sm font-medium text-gray-700">التقارير</label>
                              </div>
                              
                              <!-- Radio Button 2 -->
                              <div class="flex items-center">
                                  <input 
                                      id="الفئات_الطلاب" 
                                      type="radio" 
                                      name="الفئات" 
                                      value="الطلاب"
                                      class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" 
                                  />
                                  <label for="الفئات_الطلاب" class="ml-2 block text-sm font-medium text-gray-700">الطلاب</label>
                              </div>
                          </div>
                      </div>
                      <x-form-error name="الفئات" />
                  </div>
              </div>

           
              <div class="space-y-12">
                  <div class="border-b border-gray-300 pb-12">
                      <div class="sm:col-span-4 mt-6">
                          <div class="gap-4 flex flex-col">
                              <div class="block text-sm font-medium leading-6 text-gray-800">الوسوم:</div>
                              <div class="grid grid-cols-3 gap-4">
                                  @foreach($tags as $tag)
                                      <div class="flex items-center">
                                          <input 
                                              type="checkbox" 
                                              name="tags[]" 
                                              id="tag{{ $tag->id }}" 
                                              value="{{ $tag->id }}" 
                                              class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                          >
                                          <label for="tag{{ $tag->id }}" class="ml-2 text-sm text-gray-700">{{ $tag->الاسم_بالعربية }}</label>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

       
              <div class="mt-6 flex items-center justify-end gap-x-6">
                  <a href="/datasets" type="button" class="text-sm font-semibold leading-6 text-gray-800">الغاء</a>
                  <x-form-button>حفظ مجموعة البيانات</x-form-button>
              </div>
          </div>
      </div>
  </form>
</x-opt>
</x-layout>
