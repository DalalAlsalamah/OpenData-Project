<!DOCTYPE html>
<html  class="h-full bg-gray-100" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<div class="min-h-full "dir="rtl">
    <nav class="bg-gray-700 ">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center">
          <div class="flex items-center">
            <div class="flex-shrink-0">
                </div>
            <div class="hidden md:block">
            
            </div>
          </div>
          <div class="hidden md:block">
           
            <div class="ml-4 flex items-center md:ml-6">
              <div> 
          @guest
          <x-nav-link href="/login" :active="request()->is('login')">تسجيل الدخول </x-nav-link>
          <x-nav-link href="/register" :active="request()->is('register')">تسجيل جديد </x-nav-link>                 
            
          @endguest
          
          @auth
         <form method="POST" action="/logout">
          @csrf 
          <x-bot>الخروج  </x-bot>
         </form>
                        
                
          @endauth
            
              </div>
     
 
       
          
      
  
        
      </div>
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
    
      </div>


    </header>
    <main>
   
     
     {{$slot}}
    
    </main>
  </div>
  
 

</html>