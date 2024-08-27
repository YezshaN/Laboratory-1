<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Purrfect Breeds</title>
    <meta name="description" content="Learn more about me, my passion for cats, and what inspired me to create Purrfect Breeds. Discover my journey and interests in the world of felines.">
    <meta name="keywords" content="cats, cat breeds, feline enthusiast, Purrfect Breeds, about me, cat lover">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #faf2dd;
            color: #333;
            box-sizing: border-box; 
        }

        nav {
            background-color: #FFAFAF; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000; 
            box-sizing: border-box; 
        }

        .logo img {
            height: 40px; 
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            font-weight: 600;
        }

        .nav-links a:hover {
            background-color: #fce4e4; 
            color: #333;
            border-radius: 5px;
        }

        .content {
            padding: 80px 20px 30px; 
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content img {
            max-width: 100%;
            height: auto;
            max-height: 300px; 
            margin-bottom: 20px;
            border-radius: 10px;
            border: 3px solid #ffb7c5;
        }

        .about-text {
            max-width: 800px; 
        }

        .about-text h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 15px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 15px; 
        }

        footer {
            background-color: #FFAFAF;
            color: #333;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.html" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
        </a>
        <div class="nav-links">
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/about">About Me</a>
            <a href="http://127.0.0.1:8000/content">Cat Breeds</a>
        </div>
    </nav>

    <div class="content">
        <img src="{{ asset('images/y.jpg') }}" alt="My Photo">
        <div class="about-text">
            <h2>About Me</h2>
            <p>Hi, I’m Yezsha T. Narvaez, and welcome to my website! I created this space to share my deep love and enthusiasm for cats. Growing up surrounded by these amazing creatures, I’ve come to appreciate the unique personalities and quirks that make each one special. At home, I’m fortunate to share my life with 14 wonderful cats, each bringing joy, comfort, and a sense of companionship to my everyday life. This website is a reflection of my passion for all things feline, from learning about different breeds to understanding their behavior and needs. Whether you’re a fellow cat lover or simply curious about these incredible animals, I hope you find something here that resonates with you.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>

</body>
</html>
