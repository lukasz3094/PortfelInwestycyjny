<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optymalizacja Portfela Inwestycyjnego</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <div class="flex-grow">
        <!-- Navbar -->
        <nav class="navbar bg-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600 flex items-center">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-8 mr-2">
                    Portfel Inwestycyjny
                </a>
                <div>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 mx-2">Logowanie</a>
                        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Rejestracja</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main class="main">
            <header class="hero flex items-center justify-center text-white h-screen bg-cover bg-center" style="background-image: url('/images/hero-image.jpg')">
                <div class="text-center px-6 py-12 rounded-lg bg-black bg-opacity-50 max-w-lg mx-auto shadow-lg">
                    <h1 class="text-4xl font-bold mb-4">Zarządzaj swoim portfelem inwestycyjnym</h1>
                    <p class="text-lg mb-6">Optymalizuj swoje inwestycje i podejmuj lepsze decyzje finansowe.</p>
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">Zarejestruj się</a>
                </div>
            </header>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-auto w-full fixed bottom-0">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Portfel Inwestycyjny. Wszelkie prawa zastrzeżone.</p>
            <p>
                <a href="{{ route('home') }}" class="text-blue-400 hover:text-blue-600">Strona główna</a>
            </p>
        </div>
    </footer>

</body>
</html>