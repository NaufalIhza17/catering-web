<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist Page</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .card:hover .remove-button {
            opacity: 1;
        }
    </style>
</head>
<body>
    <nav class="bg-green-600 text-white p-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">My Store</a>
            <a href="#" class="text-lg">View Cart (3)</a>
        </div>
    </nav>
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold mb-6">Wishlist</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card">
                <div class="h-56 bg-gray-300"></div>
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 1</h2>
                    <p class="mb-2">$29.99</p>
                    <button class="bg-red-500 text-white px-3 py-1 rounded-md remove-button opacity-0 transition-opacity ease-in-out duration-300">Remove</button>
                </div>
            </div>
            <div class="card">
                <div class="h-56 bg-gray-300"></div>
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 2</h2>
                    <p class="mb-2">$19.99</p>
                    <button class="bg-red-500 text-white px-3 py-1 rounded-md remove-button opacity-0 transition-opacity ease-in-out duration-300">Remove</button>
                </div>
            </div>
            <div class="card">
                <div class="h-56 bg-gray-300"></div>
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 3</h2>
                    <p class="mb-2">$49.99</p>
                    <button class="bg-red-500 text-white px-3 py-1 rounded-md remove-button opacity-0 transition-opacity ease-in-out duration-300">Remove</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const removeButtons = document.querySelectorAll('.remove-button');

        removeButtons.forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault();
                const card = button.closest('.card');
                card.remove();
            });
        });
    </script>
</body>
</html>
