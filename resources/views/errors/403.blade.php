<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Access Denied</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800 mb-4">403</h1>
        <p class="text-xl text-gray-600 mb-8">Sorry! You don't have permission to access this page.</p>
        <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Return to Dashboard
        </a>
    </div>
</body>
</html> 