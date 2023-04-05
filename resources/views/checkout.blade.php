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

  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8">Your Cart</h1>

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

    <div class="border-b border-gray-400 mb-8"></div>

    <div class="flex">
      <div class="w-2/3">
        <a href="{{ route('home') }}" class="text-indigo-500 font-bold">Continue Shopping</a>
      </div>
      <div class="w-1/3 text-right">
        <p class="text-gray-600">Subtotal: $100.00</p>
        <p class="text-gray-600">Shipping: $10.00</p>
        <p class="text-gray-600">Total: $110.00</p>
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full mt-4">Checkout</button>
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

</body>
</html>
