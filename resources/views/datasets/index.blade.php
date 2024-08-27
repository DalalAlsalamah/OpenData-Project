<x-layout>
  <x-slot name="heading">
      البيانات المفتوحة
  </x-slot>

  <x-opt>
      <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
          <nav class="bg-white pt-2 shadow-md">
              <div class="flex justify-center">
                  <div class="w-full">
                      <table class="w-full">
                          <thead class="">
                              <tr>
                                  <th class="py-2 px-4 text-right">العنوان بالعربية</th>
                                  <th class="py-2 px-4 text-right">العنوان بالإنجليزية</th>
                                  <th class="py-2 px-4 text-right ">التحديث الدوري</th>
                                  <th class="py-2 px-4 text-right">الحالة</th>
                                  <th class="py-2 px-4 text-right ">الإجراءات</th>
                              </tr>
                          </thead>
                          <tbody class="font-thin text-base">
                              @foreach ($datas as $data)
                              <tr>
                                  <td class="px-6 py-2">{{ $data['العنوان_بالعربية'] }}</td>
                                  <td class="px-6 py-2">{{ $data['العنوان_بالأنجليزية'] }}</td>
                                  <td class="px-6 py-2">{{ $data['التحديث_الدوري'] }}</td>
                                  <td class="px-6 py-2">{{ $data['الحالة'] }}</td>
                                  <td class="px-6 py-2">
                                      <x-button href="{{ url('/datasets', $data->id) }}">
                                          عرض
                                      </x-button>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </nav>

          <div class="mt-10">
              {{ $datas->links() }}
          </div>
      </div>
  </x-opt>
</x-layout>
