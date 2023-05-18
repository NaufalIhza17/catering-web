<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Checkout</title>
  <link rel="icon" href="/foto/favicon.ico" type="image/x-icon">
</head>
<body class="bg-gray-100">

<section>
  <div class="py-2 flex justify-between p-3 mx-40">
      <a class="text-2xl font-bold text-green-600 w-32" href="{{ route('home') }}">
      <img src="/foto/logo.png" alt="KWhite Catering"/>
      </a>
      <div class="mt-10">
      <h1 class="text-3xl font-bold mb-8">Your Order</h1>
      </div>
  </div>
 
</section>

<section>

  <div class="flex gap-10 justify w-9/12 border-2 shadow-xl mx-auto pl-10 pt-10 pb-10 pr-10 mt-10">
 
  <div class="container mx-auto py-8">
    <h2 class="text-xl font-semibold pb-5">Please fill in the information below and confirm your order</h2>

    <div class="pb-10">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">Full Name</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Name"type="text" placeholder="Name">
    </div>

    <div class="pb-10">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Address">Address</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Address"type="text" placeholder="Address">
    </div>

    <div class="pb-10">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Phone">Phone Number</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Phone"type="text" placeholder="084759273019">
    </div>

    <div class="inline-block relative w-64 pb-10">
       <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option>Delivery Option</option>
            <option>JNE</option>
           <option>GoSend</option>
      </select>
    </div>

  </div>
  


    @if ($foods)
      @foreach ($foods as $food)
      <div class="flex mb-4">
        <div class="w-1/5">
          <img src="https://via.placeholder.com/100" alt="Product Image">
        </div>
        <div class="w-3/5 px-4">
          <h2 class="font-bold text-lg mb-2">{{ $food->food_name }}</h2>
            <p class="text-gray-700 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada ante eu aliquam laoreet. Suspendisse at euismod risus. </p>
            <div class="flex items-center">
              <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center" onclick="decrementQuantity()">-</button>
              <input type="text" class="w-12 text-center mx-4" id="quantity" value="1">
              <button class="bg-gray-300 hover:bg-gray-400 rounded-full h-8 w-8 flex justify-center items-center" onclick="incrementQuantity()">+</button>
            </div>
          </div>
          <div class="w-1/5 text-right">
            <p class="text-gray-600">$100.00</p>
          </div>
        </div>
      @endforeach
    @else
      <h1>empty.</h1>
    @endif


    <div class="border-2 shadow-xl"></div>

    <div class="">
      <div class="w-2/3">
        
        
      </div>
      <div class="w-1/3 text-right gap-2 pb-5">
        <p class="text-gray-600 pb-5">Subtotal: $0</p>
        <p class="text-gray-600 pb-5">Shipping: $0</p>
        <p class="text-gray-600 pb-5">Total: $0</p>
        <div class="relative h-24 w-24">
          <a href="{{ route('review.index') }}">
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full mt-48">Checkout</button>
          </a>
        
        <!-- <button class="bg-indigo-500 hover:bg-indigo-600 py-2 px-4 rounded-full mt-4 mb-5">
        <a href="{{ route('home') }}" class="text-white font-bold">Continue Shopping</a>
        </button> -->
        </div>
        
      </div>
    </div>

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

</section>

</body>
</html>
