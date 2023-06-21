<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('/img/1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100dvh;
        }

        /*nav */
        header {
            background-color: #1F252E;
            box-shadow: 0 0 36px 0;
            backdrop-filter: blur(3px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 80%;
            margin: auto;
            padding: 1.2rem 0rem;
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 800;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            padding: 0;
            background-color: transparent;
            overflow: hidden;
        }

        li {
            padding: 0rem 1.1rem;
            float: left;
        }

        li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .7px;
        }

        li a:hover {
            color: #04c9bf;
            transition: all .3s ease-in-out
        }

        .button {
            display: flex;
            gap: 1rem;
        }

        .button button {
            font-weight: 500;
            color: #ffffff;
            border: 1px solid #fff;
            background-color: transparent;
            padding: .5rem 1rem;
            border-radius: 20%;
            cursor: pointer;
        }

        .button button:hover {
            background-color: #04c9bf;
            color: #1F252E;
            transition: all .3s ease-in-out;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <a href="#">My Portofolio</a>
            </div>
            <ul>
                <li><a href="/home" class="active">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <div class="button">
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
    
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>

</html>