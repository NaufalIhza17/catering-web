<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="/foto/favicon.ico" type="image/x-icon">
  </head>

<body>
  @if (session()->has('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 fixed bottom-0 right-0 mb-4 mr-4 shadow-xl z-50">
      {{ session('success') }}
    </div>
  @endif


  <section> 
    <nav class="py-2 flex justify-between p-3 mx-40">
      <a class="text-2xl font-bold text-green-600 w-32" href="{{ route('home') }}">
      <img src="/foto/logo.png" alt="KWhite Catering"/>
      </a>
      <div class="flex items-center gap-5">
        @guest
        <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-xl" href="{{ route('login.show') }}">
          Sign in 
        </a>    
        @endguest
        @auth
          <a href="{{ route('review.index') }}" class="text-gray-500 hover:text-gray-800" title="Wishlist">
            <img src="/foto/review.png" alt="review" class="w-7">
          </a>
          <a href="{{ route('wishlist.index') }}" class="text-gray-500 hover:text-gray-800" title="Wishlist">
            <img src="/foto/wishlist.png" alt="wishlist" class="w-7">
          </a>
          <a href="{{ route('checkout.index') }}" class=" text-gray-500 hover:text-gray-800" title="Cart">
            <img src="/foto/shopping-cart.png" alt="cart" class="w-7">
          </a>
          {{auth()->user()->name}}
          <div class="">
            <a href="{{ route('logout.perform') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-xl">Logout</a>
          </div>
        @endauth
      </div>
    </nav>
  </section>

  <section class="bg-[url('/public/foto/satu.jpg')] bg-no-repeat bg-cover bg-blend-screen">
  <div class="text-center p-10">
    <div class="mx-auto w-[30%] bg-black py-5 rounded-t-md bg-opacity-80">
      <h1 class="mb-2 font-extrabold text-5xl text-green-600">
        Welcome!
      </h1>
      <h3 class="text-2xl font-bold text-white">Best Catering in Town</h3>
    </div>
    <p class="mx-auto text-center w-[30%] bg-white bg-opacity-60 py-5 px-7 rounded-b-md">
      "<span class="text-lg font-bold">A</span> culinary experience that immerses you in the rich and diverse flavors of Indonesia. 
      From the spicy and savory dishes of Sumatra to the sweet and aromatic desserts of Java, 
      Our catering service offers a range of dishes that showcase the unique and exotic 
      tastes of this Southeast Asian archipelago?.
    </p>
  
  </div>
  </section>
  <section class="px-20 pb-20"> 
    <h3 class="text-3xl py-1 dark:text-black text-center mt-10 mb-6 font-bold">Our Menu</h3>
      <div class="lg:flex gap-10">
        <div class="text-center mx-auto shadow-lg hover:drop-shadow-2xl hover:scale-105 transition p-10 rounded-xl my-10 dark:bg-slate-200 flex-1 h-fit">
          <div class="relative rounded-full w-fit h-80 overflow-hidden">
            <img src="/foto/dua.jpg" alt="breakfast"/>
              </div>          
                <h3 class="text-lg font-medium pb-2 pt-5">
                  Breakfast
                </h3>
                <div class="h-24">
                  <p class="py-2">Taste the unique Indonesian breakfast with qualities of ingredients</p>
                </div>
                @auth
                <h4 class="py-4 text-teal-600">IDR 10.000.000 / 50 Person</h4>
                <p class="text-gray-800 py-1">Porridge</p>
                <p class="text-gray-800 py-1">Nasi Uduk</p>
                <p class="text-gray-800 py-1">Nasi Kuning</p>
                <p class="text-gray-800 py-1">Gado Gado</p>
                <form action="post" action="{{ route('food.store') }}">
                  @csrf
                  <div class="flex mt-4 justify-center">
                    {{-- <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center font-bold" onclick="decrementQuantity()">-</button>
                    <input type="text" class="w-12 text-center mx-4" id="quantity" value="0">
                    <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center" onclick="incrementQuantity()">+</button> --}}
                    <button onclick="decrementQuantity()">-</button>
                    <input type="number" id="quantity" name="quantity" min="0" value="0" onchange="checkQuantity()">
                    <button onclick="incrementQuantity()">+</button>
                  </div>
                </form>
                <script>
                  // function incrementQuantity() {
                  //   var quantity = document.getElementById('quantity');
                  //   quantity.value++;
                  // }
                  // function decrementQuantity() {
                  //   var quantity = document.getElementById('quantity');
                  //   if (quantity.value > 1) {
                  //     quantity.value--;
                  //   }
                  // }
                  function incrementQuantity() {
                    const quantity = parseInt(document.getElementById('quantity').value) + 1;
                    document.getElementById('quantity').value = quantity;
                  }

                  function decrementQuantity() {
                    let quantity = parseInt(document.getElementById('quantity').value) - 1;
                    quantity = quantity < 0 ? 0 : quantity;
                    document.getElementById('quantity').value = quantity;
                  }

                  function checkQuantity() {
                    let quantity = parseInt(document.getElementById('quantity').value);
                    quantity = quantity < 0 ? 0 : quantity;
                    document.getElementById('quantity').value = quantity;
                  }
                </script>
                @endauth
            </div>
              <div class="text-center shadow-lg hover:drop-shadow-2xl hover:scale-105 transition p-10 rounded-xl my-10 dark:bg-slate-200 flex-1 h-fit">
              <div class="relative mx-auto rounded-full w-fit h-80 overflow-hidden">
                <img src="/foto/tiga.jpg" alt="lunch"/>
              </div>
                
                <h3 class="text-lg font-medium pb-2 pt-5">
                  Lunch
                </h3>
                <div class="h-24">
                  <p class="py-2">A collection of various regional culinary traditions that formed the archipelagic nation of Indonesia</p>
                </div>
                @auth
                <h4 class="py-4 text-teal-600">IDR 15.000.000 / 25 Person</h4>
                <p class="text-gray-800 py-1">Rendang</p>
                <p class="text-gray-800 py-1">Ayam Kalasan</p>
                <p class="text-gray-800 py-1">Ayam Geprek</p>
                <p class="text-gray-800 py-1">Rawon</p>
                <div class="flex mt-4 justify-center">
                    <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center font-bold" onclick="decrementQuantity()">-</button>
                    <input type="text" class="w-12 text-center mx-4" id="quantity" value="0">
                    <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center" onclick="incrementQuantity()">+</button>
                  </div>
                  <script>
                    function incrementQuantity() {
                      var quantity = document.getElementById('quantity');
                      quantity.value++;
                    }
                    function decrementQuantity() {
                      var quantity = document.getElementById('quantity');
                      if (quantity.value > 1) {
                        quantity.value--;
                      }
                    }
                  </script>
                @endauth
              </div>
              <div class="text-center shadow-lg hover:drop-shadow-2xl hover:scale-105 transition p-10 rounded-xl my-10 dark:bg-slate-200 flex-1 h-fit">
                <div class="relative mx-auto rounded-full w-fit h-80 overflow-hidden">
                  <img src="/foto/empat.jpg" alt="dessert"/>
                </div>
              
                <h3 class="text-lg font-medium pb-2 pt-5">Dessert</h3>
                <div class="h-24">
                  <p class="py-2">
                  local cuisine with Arabs, Chinese, Indian, and European
                  cuisine influences, adapted to local tastes, local palates and indigenous ingredients. 
                  </p>
                </div>
                @auth
                <h4 class="py-4 text-teal-600">IDR 5.000.000 / 50 Person</h4>
                <p class="text-gray-800 py-1">Kue Putu</p>
                <p class="text-gray-800 py-1">Kelepon</p>
                <p class="text-gray-800 py-1">Mixed Fruits</p>
                <p class="text-gray-800 py-1">Es Doger</p>
                <div class="flex mt-4 justify-center">
                    <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center font-bold" onclick="decrementQuantity()">-</button>
                    <input type="text" class="w-12 text-center mx-4" id="quantity" value="0">
                    <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center" onclick="incrementQuantity()">+</button>
                  </div>
                  <script>
    function incrementQuantity() {
      var quantity = document.getElementById('quantity');
      quantity.value++;
    }
    function decrementQuantity() {
      var quantity = document.getElementById('quantity');
      if (quantity.value > 1) {
        quantity.value--;
      }
    }
  </script>
                @endauth
              </div>
            </div>
        
          </section>
  
</body>
</html>