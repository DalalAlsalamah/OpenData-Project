<x-layout>
  <x-slot name="heading">
      البيانات المفتوحة
  </x-slot>
 
  <x-opt>
      <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
          <nav class="bg-white pt-2 shadow-md">
              <div class="flex justify-center">
                  <div class="w-full overflow-x-auto">
                      <table class="min-w-full ">
                          <thead >
                              <tr>
                                  <th class="py-2 px-4 text-right text-sm font-medium text-gray-900">الاسم بالعربية</th>
                                  <th class="py-2 px-4 text-right text-sm font-medium text-gray-900">الاسم بالأنجليزية</th>
                                  <th class="py-2 px-4 text-right text-sm font-medium text-gray-900">الإجراءات</th>
                              </tr>
                          </thead>
                          <tbody class="">
                              @foreach ($tags as $tag)
                              <tr>
                                  <td class="px-4 py-2 text-sm text-gray-900">{{ $tag['الاسم_بالعربية'] }}</td>
                                  <td class="px-4 py-2 text-sm text-gray-900">{{ $tag['الاسم_بالأنجليزية'] }}</td>
                                  <td class="px-4 py-2 text-sm">
                                      <x-button href="/tags/{{$tag['id']}}/edit">تعديل</x-button>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </nav>
      </div>

      <div class="relative mt-6">
        <div class="absolute -top-52 left-0  ml-20">
            <x-bott href="/tags/create">أضافة وسم</x-bott>
        </div>
    </div>

      <div class="mx-72 mt-10">
          {{$tags->links()}}
      </div>
  </x-opt>
  
</x-layout>
