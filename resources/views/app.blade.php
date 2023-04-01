<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>

<section>
  <nav class="py-10 mb-8 flex justify-between p-3 mx-40">
    <h1 class="text-2xl font-bold text-green-600">
      Catering
    </h1>
    <div class="flex items-center">
      <a href="#" class="mx-4 text-gray-500 hover:text-gray-800">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
          <path d="M10 20a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm8 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
        </svg>
      </a>
      <a href="#" class="mx-4 text-gray-500 hover:text-gray-800">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
          <path d="M9 20c1.1 0 2-.9 2-2H7c0 1.1.9 2 2 2zm7-2c0 1.1.9 2 2 2h-2c-1.1 0-2-.9-2-2zM4 4v2h16V4H4zm4 4v2h8V8H8zm0 4v2h8v-2H8zm0 4v2h6c0-1.1.9-2 2-2s2 .9 2 2h2c0-2.76-2.24-5-5-5-1.54 0-2.94.7-3.88 1.8l1.45 1.45C9.38 13.69 10 12.95 10 12zm7.5-5l-1-1h-5l-1 1H8v2h8v-2h-.5z"/>
        </svg>
      </a>
      <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-xl" href="{{ route('login.show') }}">
        Sign in 
      </a>
    </div>
  </nav>
</section>

<section>
<div class="text-center p-10">
  <h1 class="mb-2 font-bold text-5xl text-green-600">
    Welcome!
  </h1>
  <h3 class="text-2xl font-semibold">Best Catering in Town</h3>
  <p class="mt-3 mx-auto text-center w-[70%]">
    A culinary experience that immerses you in the rich and diverse flavors of Indonesia. 
    From the spicy and savory dishes of Sumatra to the sweet and aromatic desserts of Java, 
    Our catering service offers a range of dishes that showcase the unique and exotic 
    tastes of this Southeast Asian archipelago.
  </p>
  <div class="relative mx-auto rounded-full w-80 h-80 mt-12 overflow-hidden">
    <img src="/foto/satu.jpg" alt="buffet"/>
  </div>
 
</div>
</section>
  
        <section class="p-20"> 
        <h3 class="text-3xl py-1 dark:text-black text-center my-16">Our Menu</h3>
          <div class="lg:flex gap-10">
            <div class="text-center shadow-lg p-10 rounded-xl my-10  dark:bg-white flex-1">
              <div class="relative mx-auto rounded-full w-fit h-fit mt-12 overflow-hidden">
                <img src="/foto/dua.jpg" alt="breakfast"/>
              </div>
              
              <h3 class="text-lg font-medium pt-8 pb-2  ">
                Breakfast
              </h3>
                <p class="py-2">Taste the unique Indonesian breakfast with qualities of ingredients</p>
                <h4 class="py-4 text-teal-600">IDR 10.000.000 / 50 Person</h4>
                <p class="text-gray-800 py-1">Porridge</p>
                <p class="text-gray-800 py-1">Nasi Uduk</p>
                <p class="text-gray-800 py-1">Nasi Kuning</p>
                <p class="text-gray-800 py-1">Gado Gado</p>
              </div>
            <div class="text-center shadow-lg p-10 rounded-xl my-10 dark:bg-white flex-1">
            <div class="relative mx-auto rounded-full w-fit h-fit mt-12 overflow-hidden">
            <img src="/foto/tiga.jpg" alt="breakfast"/>
            </div>
              
              <h3 class="text-lg font-medium pt-8 pb-2 ">
                Lunch
              </h3>
              <p class="py-2">
              A collection of various regional culinary traditions that formed the archipelagic nation of Indonesia
              </p>
              <h4 class="py-4 text-teal-600">IDR 15.000.000 / 25 Person</h4>
              <p class="text-gray-800 py-1">Rendang</p>
              <p class="text-gray-800 py-1">Ayam Kalasan</p>
              <p class="text-gray-800 py-1">Ayam Geprek</p>
              <p class="text-gray-800 py-1">Rawon</p>
            </div>
            <div class="text-center shadow-lg p-10 rounded-xl my-10 dark:bg-white flex-1">
              <div class="relative mx-auto rounded-full w-fit h-fit mt-12 overflow-hidden">
                <img src="/foto/empat.jpg" alt="breakfast"/>
              </div>
            
              <h3 class="text-lg font-medium pt-8 pb-2 ">Dessert</h3>
              <p class="py-2">
              local cuisine with Arabs, Chinese, Indian, and European
              cuisine influences, adapted to local tastes, local palates and indigenous ingredients. 
              </p>
              <h4 class="py-4 text-teal-600">IDR 5.000.000 / 50 Person</h4>
              <p class="text-gray-800 py-1">Kue Putu</p>
              <p class="text-gray-800 py-1">Kelepon</p>
              <p class="text-gray-800 py-1">Mixed Fruits</p>
              <p class="text-gray-800 py-1">Es Doger</p>
            </div>
          </div>
       
        </section>
  
</body>
</html>