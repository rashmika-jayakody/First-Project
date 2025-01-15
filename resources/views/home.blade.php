<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
        <p>Congrats! You are logged In</p>
        <form action="/logout" method="get">
            @csrf
            <button>Log Out</button>
        </form>

        <div style="border:3px solid  black">
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Post Title">
                <textarea name="body" placeholder="Post Body"></textarea>
                <button>Save</button>
            </form>
        </div>

        <div style="border:3px solid  black">
            @foreach ($posts as $post)
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['body'] }}</p>
            @endforeach

        </div>
    @else
    <div style="border:3px solid  black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>

        </form>
    </div>

    <div style="border:3px solid  black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginemail" type="email" placeholder="email">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Log in</button>

        </form>
    </div>

    @endauth




</body>
</html>
