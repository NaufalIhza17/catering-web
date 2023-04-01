
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up | Catering</title>
  @vite('resources/css/app.css')
</head>

<body>

<section class="bg-gray-100 pb-16 pt-5">
<h1 class="text-4xl font-bold text-green-600 text-center mb-5">
      Catering
    </h1>
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
    <div class="md:flex">
    <button class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded-l focus:outline-none focus:shadow-outline w-16 invert" type="submit">
    <img src="/foto/arrow-left.png" alt="back"/>
            </button>
      <div class="w-full px-6 py-8 md:w-1/2">
        <h2 class="text-2xl font-bold mb-2">Create your account</h2>
        <p class="mb-2 text-gray-600">Enter your details to sign up:</p>
        <form>
          <div class="mb-2">
            <label class="block text-gray-700 font-bold mb-1" for="name">
              Name
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your full name">
          </div>
          <div class="mb-2">
            <label class="block text-gray-700 font-bold mb-1" for="email">
              Email
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address">
          </div>
          <div class="mb-3">
            <label class="block text-gray-700 font-bold mb-1" for="password">
              Password
            </label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
          </div>
          <div class="flex items-center justify-between">
            <a href="{{ route('register.perform') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Sign up
            </a>
          </div>
        </form>
      </div>
      <div class="w-full px-6 py-8 md:w-1/2">
        <h2 class="text-2xl font-bold mb-2">Already have an account?</h2>
        <p class="mb-4 text-gray-600">Sign in to your Catering account:</p>
        <a href="{{ route('login.show') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign in</a>
      </div>
      </div>
  </div>
</section>
</body>
</html>