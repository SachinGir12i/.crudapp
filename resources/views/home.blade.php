<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>congrats you are logged in!</p>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
    <div style="border: 3px solid black;">
        <h2>Create a new Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <br>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required></textarea>
            <br>
            <button type="submit">Create Post</button>
        </form>
    </div>
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Register</button>

        </form>
       
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <label for="loginname">Name:</label>
            <input type="text" id="loginname" name="loginname" required>
            <br>
            <label for="loginpassword">Password:</label>
            <input type="password" id="loginpassword" name="loginpassword" required>
            <br>
            <button>Log in</button>
        </form>
    </div>
    @endauth
   
</body>
</html>