<x-layout>
    <x-slot:heading>
 تسجيل جديد
</x-slot:heading>

<form method="POST" action="/register" class=" mx-56 mt-10"   >
  
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        
        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field> 
          <x-form-label for="username" >الاسم الرباعي:</x-form-label>
            <div class="mt-2">
            
<x-form-input  name="username" id="username" placeholder="dalalalsalama" required/> 

          <x-form-error name="username"/>   
          </div>
          </x-form-field>
        
             <x-form-field> 
              <x-form-label for="email" >الايميل: </x-form-label>
                <div class="mt-2">
                
    <x-form-input  name="email" id="email" placeholder="dalal11@gmail.com" type="email" required/> 
    
              <x-form-error name="email"/>   
              </div>
              </x-form-field>
          
            
             <x-form-field> 
              <x-form-label for="password" >كلمة المرور: </x-form-label>
                <div class="mt-2">
                
    <x-form-input  name="password" id="password" placeholder="12345678" type="password" required/> 
    
              <x-form-error name="password"/>   
              </div>
              </x-form-field>
        
             
            <x-form-field> 
              <x-form-label for="password_confirmation" >تأكيد كلمة المرور: </x-form-label>
                <div class="mt-2">
                
    <x-form-input  name="password_confirmation" id="password_confirmation" placeholder="12345678" type="password" required/> 
    
              <x-form-error name="password_confirmation"/>   
              </div>
              </x-form-field>
          </div>
        
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">الغاء</a>
    <x-form-button>تسجيل </x-form-button>
    </div>
  </form>
  
</x-layout>