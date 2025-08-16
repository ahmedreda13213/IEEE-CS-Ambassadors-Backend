
 <x-layout>
    <x-slot:heading>
    Log In 
   </x-slot:heading>
 
  <form method="POST" action="/login">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
         <x-form-field >
          <x-form-lable for="email">Email</x-form-lable>
          <div class="mt-2">
              <x-form-input id="email"  name="email" :value="old('email')" type="email" required />
             <x-form-error name="email"/>   
          </div>
        </x-form-field >

        <x-form-field >
          <x-form-lable for="password">Password</x-form-lable>
          <div class="mt-2">
              <x-form-input id="password"  name="password" type="password" required />
             <x-form-error name=" password"/>  
          </div>
        </x-form-field >
        </div>

       
       
      
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
     <x-form-buttom>Log In</x-form-buttom>
  </div>

</form>

</x-layout>