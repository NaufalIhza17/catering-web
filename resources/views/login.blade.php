<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Catering</title>
  @vite('resources/css/app.css')
</head>

<body>

<section>

<section class="bg-gray-100 pb-20 pt-5">
  <h1 h1 class="text-4xl font-bold text-green-600 text-center mb-5">
      Catering
  </h1>
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
    <div class="md:flex">
    <a href="{{ route('home') }}">
      <button class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded-l focus:outline-none focus:shadow-outline w-16 h-[26rem] invert" type="submit">
      <img src="/foto/arrow-left.png" alt="back"/>
      </button>
    </a>
      <div class="w-full px-6 py-8 md:w-1/2">
        <h2 class="text-2xl font-bold mb-2">Sign in to your account</h2>
        <p class="mb-4 text-gray-600">Enter your email and password to log in:</p>
        <form>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
              Email
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="password">
              Password
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
          </div>
          <div class="flex items-center justify-between">
            <button href="{{ route('login.perform') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Sign in
            </button>
          </div>
        </form>
      </div>
      <div class="w-full px-6 py-8 md:w-1/2">
        <h2 class="text-2xl font-bold mb-2">Don't have an account?</h2>
        <p class="mb-4 text-gray-600">Sign up for a Catering account today:</p>
        <a href="{{ route('register.show') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign up</a>
      </div>
    </div>
  </div>
</section>

</body>
</html
