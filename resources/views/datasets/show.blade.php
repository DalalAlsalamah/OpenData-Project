<x-layout>
    <x-slot name="heading">
        عرض مجموعة بيانات
    </x-slot>

    <div class="bg-white my-10 rounded-lg mx-96">
        <div class="max-w-md mr-48">
            <ul role="list" class="divide-y divide-gray-100">
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">العنوان بالعربية:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->العنوان_بالعربية}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">العنوان بالأنجليزية:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->العنوان_بالأنجليزية}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">الوصف بالعربية:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->الوصف_بالعربية}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">التحديث الدوري:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->التحديث_الدوري}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">الحالة:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->الحالة}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">أنشئ بواسطة:</p>
                        </div>
                    </div>
                    <div>
                        @if ($data->user)
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $data->user->username }}</p>
                        @else
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">Unknown User</p>
                        @endif
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">الفئات:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->الفئات}}</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">اخر تحديث:</p>
                        </div>
                    </div>
                    <div>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$data->updated_at}}</p>
                    </div>
                </li>
                <li class="flex justify-center gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class=" text-sm font-semibold leading-6 text-gray-900">
                                <x-button href="/datasets/{{$data->id}}/edit">
                                    تعديل
                                </x-button>
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="truncate text-xs leading-6 text-gray-500">
                            <x-button href="/datasets">
                                الرجوع
                            </x-button>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</x-layout>
