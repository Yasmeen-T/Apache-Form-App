
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = 'data.json';
    $newData = [
        "name" => htmlspecialchars($_POST['name']),
        "email" => htmlspecialchars($_POST['email']),
        "phone" => htmlspecialchars($_POST['phone'])
    ];

    $currentData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    if (!is_array($currentData)) $currentData = [];
    $currentData[] = $newData;
    file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Successful</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <div class="mb-4 text-green-500">
            <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Submission Successful!</h2>
        <p class="text-gray-600 mb-6">Your details have been securely stored in <strong>data.json</strong> inside the Docker container.</p>
        
        <a href="index.html" class="inline-block bg-blue-600 text-white font-semibold px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300 shadow-md">
            Go Back to Form
        </a>
        
        <div class="mt-8 pt-4 border-t border-gray-100">
            <p class="text-xs text-gray-400 font-mono">Backend Status: 200 OK</p>
        </div>
    </div>
</body>
</html>

