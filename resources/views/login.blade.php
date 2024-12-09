<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: black;
    color: #fff;
}

.container, .form-container, .home-container {
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

h1, h2 {
    margin-bottom: 20px;
    animation: fadeIn 1s ease-in-out;
}

.buttons, .form-container form, .home-container {
    animation: slideUp 1.5s ease-in-out;
}

.btn {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #007BFF;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    transition: transform 0.3s ease-in-out;
}

.btn:hover {
    transform: scale(1.1);
}

.back-btn {
    background-color: #6c757d;
}

.logout-btn {
    background-color: #dc3545;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="/login" method="POST">
            @csrf
            <h2>Form Login</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <a href="/" class="btn back-btn">Kembali</a>
    </div>
</body>
</html>