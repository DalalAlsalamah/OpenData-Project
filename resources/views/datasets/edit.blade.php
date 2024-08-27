<x-layout>
  <x-slot:heading>
      تعديل مجموعة بيانات
  </x-slot:heading>

  <form method="POST" action="/datasets/{{$data->id}}" class="mx-auto mt-10 max-w-4xl px-4">
      @csrf
      @method('PATCH')

      <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">

      
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="العنوان_بالعربية" class="block text-sm font-medium leading-6 text-gray-900">العنوان بالعربية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input 
                                  type="text"
                                  name="العنوان_بالعربية" 
                                  id="العنوان_بالعربية" 
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
                                  placeholder="shift leader" 
                                  value="{{$data->العنوان_بالعربية}}"
                                  required
                              >
                          </div>
                          <x-form-error name="العنوان_بالعربية"/>
                      </div>
                  </div>
              </div>

        
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="العنوان_بالأنجليزية" class="block text-sm font-medium leading-6 text-gray-900">العنوان بالإنجليزية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="العنوان_بالأنجليزية" 
                                  id="العنوان_بالأنجليزية"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="Annual Report"
                                  value="{{$data->العنوان_بالأنجليزية}}"
                                  required
                              >
                          </div>
                          <x-form-error name="العنوان_بالأنجليزية"/>
                      </div>
                  </div>
              </div>

             
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الوصف_بالعربية" class="block text-sm font-medium leading-6 text-gray-900">الوصف بالعربية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <textarea  
                                  name="الوصف_بالعربية" 
                                  id="الوصف_بالعربية"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="الوصف هنا"
                                  required
                              >{{$data->الوصف_بالعربية}}</textarea>
                          </div>
                          <x-form-error name="الوصف_بالعربية"/>
                      </div>
                  </div>
              </div>

   
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="التحديث_الدوري" class="block text-sm font-medium leading-6 text-gray-900">التحديث الدوري:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="التحديث_الدوري" 
                                  id="التحديث_الدوري"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="سنوي"
                                  value="{{$data->التحديث_الدوري}}"
                                  required
                              >
                          </div>
                          <x-form-error name="التحديث_الدوري"/>
                      </div>
                  </div>
              </div>

    
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الحالة" class="block text-sm font-medium leading-6 text-gray-900">الحالة:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input  
                                  type="text" 
                                  name="الحالة" 
                                  id="الحالة"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  
                                  placeholder="منشور"
                                  value="{{$data->الحالة}}"
                                  required
                              >
                          </div>
                          <x-form-error name="الحالة"/>
                      </div>
                  </div>
              </div>

         
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الفئات" class="block text-sm font-medium leading-6 text-gray-900">الفئات:</label>
                      <div class="flex flex-row space-y-3 gap-8 mt-6">
                          <!-- Radio Button 1 -->
                          <div class="flex items-center">
                              <input 
                                  id="الفئات_التقارير" 
                                  type="radio" 
                                  name="الفئات" 
                                  value="التقارير"
                                  class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" 
                                  {{ $data->الفئات == 'التقارير' ? 'checked' : '' }}
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
                                  {{ $data->الفئات == 'الطلاب' ? 'checked' : '' }}
                              />
                              <label for="الفئات_الطلاب" class="ml-2 block text-sm font-medium text-gray-700">الطلاب</label>
                          </div>
                      </div>
                      <x-form-error name="الفئات"/>
                  </div>
              </div>

            
              <div class="mt-6 flex items-center justify-between gap-x-6">
                  <div class="flex items-center">
                      <button form="delete-form" class="text-red-500 text-sm font-bold">حذف البيانات</button>
                  </div>
                  <div class="flex items-center gap-x-6">
                      <a href="/datasets" type="button" class="text-sm font-semibold leading-6 text-gray-900">إلغاء</a>
                      <button 
                          type="submit" 
                          class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                      >
                          تعديل
                      </button>
                  </div>
              </div>

          </div>
      </div>
  </form>

  <form method="POST" action="/datasets/{{$data->id}}" id="delete-form" class="hidden">
      @csrf
      @method('DELETE')
  </form>

</x-layout>
