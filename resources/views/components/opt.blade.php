<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <nav class="bg-white px-8 pt-2 shadow-md">
    <div class="-mb-px flex justify-center  gap-32 ">
        <x-nav-link href="/datasets" :active="request()->is('datasets')">عرض المجاميع </x-nav-link>
        <x-nav-link href="/datasets/create" :active="request()->is('datasets/create')"> أضافة مجموعة بيانات</x-nav-link>
        <x-nav-link href="/tags" :active="request()->is('tags')">الوسوم </x-nav-link>
      
    </div>
</nav>
</div>
<div> 
  {{$slot}}
</div>