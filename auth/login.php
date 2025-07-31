<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="proses_login.php" method="POST" class="bg-white p-6 rounded shadow w-80">
        <h2 class="text-xl font-bold mb-4">Login Admin</h2>
        <input type="text" name="username" placeholder="Username" class="w-full mb-3 p-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">
        <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded">Login</button>
    </form>
</body>
</html>
