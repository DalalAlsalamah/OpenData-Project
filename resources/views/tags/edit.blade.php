<x-layout>
  <x-slot name="heading">
      تعديل وسم
  </x-slot>

  <form method="POST" action="/tags/{{$tag->id}}" class="mx-56 mt-20">
      @csrf
      @method('PATCH')
      <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الاسم_بالعربية" class="block text-sm font-medium leading-6 text-gray-900">الاسم بالعربية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input 
                                  type="text"
                                  name="الاسم_بالعربية"
                                  id="الاسم_بالعربية"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                  value="{{ $tag->الاسم_بالعربية }}"
                                  required
                              >
                          </div>
                          <x-form-error name="الاسم_بالعربية" />
                      </div>
                  </div>
              </div>

              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-4">
                      <label for="الاسم_بالأنجليزية" class="block text-sm font-medium leading-6 text-gray-900">الاسم بالأنجليزية:</label>
                      <div class="mt-2">
                          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                              <input
                                  type="text"
                                  name="الاسم_بالأنجليزية"
                                  id="الاسم_بالأنجليزية"
                                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                  value="{{ $tag->الاسم_بالأنجليزية }}"
                                  required
                              >
                          </div>
                          <x-form-error name="الاسم_بالأنجليزية" />
                      </div>
                  </div>
              </div>
          </div>

          <div class="mt-6 flex items-center justify-between gap-x-6">
              <div class="flex items-center">
                  <button form="delete-form" class="text-red-500 text-sm font-bold">حذف الوسم</button>
              </div>
              <div class="flex items-center gap-x-6">
                  <a href="/tags" type="button" class="text-sm font-semibold leading-6 text-gray-900">الغاء</a>
                  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">حفظ التعديل</button>
              </div>
          </div>
      </div>
  </form>

  <form method="POST" action="/tags/{{$tag->id}}" id="delete-form" class="hidden">
      @csrf
      @method('DELETE')
  </form>
</x-layout>
