<x-layout>
    <x-slot:heading>
تسجيل الدخول
</x-slot:heading>
<head>  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> </head>
<form method="POST" action="/login"  >
  
  @csrf


    <div class="space-y-12   mx-56 mt-10  " >
      <div class="border-b border-gray-900/10 pb-12">
        
        
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field> 
              <x-form-label for="email" >الايميل: </x-form-label>
                <div class="mt-2">
                
    <x-form-input  name="email" id="email" placeholder="dalal@gmail.com" type="email" :value="(old('email'))" required/> 
    
              <x-form-error name="email"/>   
              </div>
              </x-form-field>
     
            
            <x-form-field> 
              <x-form-label for="password" >كلمة المرور: </x-form-label>
                <div class="mt-2">
                
    <x-form-input  name="password" id="password"  type="password" required/> 
    
              <x-form-error name="password"/>   
              </div>
              </x-form-field>
          </div>
          
        
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">الغاء</a>
    <x-form-button>تسجيل الدخول </x-form-button>
    </div>
  </form>
  
</x-layout>