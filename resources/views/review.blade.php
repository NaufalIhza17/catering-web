<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .rating {
            border: none;
            margin: 0 auto;
            display: inline-block;
            position: relative;
            transform: translateX(-50%);
        }
        .rating > input {
            display: none;
        }
        .rating > label:before {
            margin: 5px;
            font-size: 1.25rem;
            font-weight: bold;
            color: #ddd;
            content: "★";
        }
        .rating > input:checked ~ label:before,
        .rating > label:hover:before {
            color: #ffc107;
        }
    </style>
    <link rel="icon" href="/foto/favicon.ico" type="image/x-icon">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
    <a href="{{ route('home') }}">
      <img class="w-40 mx-auto" src="/foto/logo.png" alt="KWhite Catering"/>
      </a>
        <h1 class="text-4xl font-bold text-center mb-10">Leave Your Feedback</h1>
        <form class="max-w-lg mx-auto" action="#" method="POST">
            <div class="mb-5">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message
                </label>
                <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Your Message"></textarea>
            </div>
            <div class="flex items-center mb-5">
                <span class="mr-2 text-gray-700 font-bold">Rate Your Experience:</span>
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="Excellent"></label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="Good"></label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="Average"></label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="Poor"></label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="Terrible"></label>
                </fieldset>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>
        <div class="mt-10">
            <h2 class="text-2xl font-bold mb-5">Recent Feedback:</h2>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex justify-between mb-5">
                <div class="flex items-center">
                    <span class="text-lg font-bold mr-2">John Doe</span>
                    <span class="text-gray-600">(johndoe@example.com)</span>
                </div>
            <div class="flex items-center">
            <span class="text-yellow-400 mr-1">&#9733;</span>
            <span class="text-yellow-400 mr-1">&#9733;</span>
            <span class="text-yellow-400 mr-1">&#9733;</span>
            <span class="text-yellow-400">&#9733;</span>
            <span class="text-yellow-400">&#9733;</span>
             </div>
        </div>
        <div class="text-gray-700">
            <p>This is a great product! I've been using it for a few weeks now and it's made a huge difference in my daily routine.</p>
        </div>
        </form>
    </div>
</div> 
</body>
</html>
