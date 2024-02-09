<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog System</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.5;
            color: #1a202c;
            background: linear-gradient(to right, #677c84, #47cce0);
        }

        .auth-links {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 10;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .bg-white {
            background-color: #fffffffb;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .md\:w-2/3 {
            width: 66.666667%;
        }

        .lg\:w-1/2 {
            width: 50%;
        }

        .xl\:w-1/3 {
            width: 33.333333%;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: center;
            color: #000000;
        }

        .description {
            font-size: 1.2rem;
            color: #4b5563;
            text-align: center;
            margin-bottom: 2rem;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .button {
            padding: 1rem 1.5rem;
            border-radius: 0.25rem;
            margin-right: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-weight: 600;
            text-align: center;
        }

        .primary-button {
            background-color: #82aac0;
            color: #fff;
        }

        .secondary-button {
            background-color: transparent;
            border: 2px solid #72e4f5;
            color: #4c9eaf;
        }

        .button:hover {
            background-color: #91d7e9;
            color: #ffffff;
        }

        /* Right Side Text Styling */
        .right-side-container {
            max-width: 50%;
            padding: 0 2rem;
            text-align: center;
            color: black;
            background-color: #fff; /* Add a background color for better contrast */
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-left: 2rem;
            overflow: hidden;
        }

        .right-side-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000;
            margin-bottom: 1rem;
        }

        .right-side-description {
            font-size: 1rem;
            color: #4b5563;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="antialiased">

    <div class="main-content bg-white p-8 rounded-lg shadow-md md:w-2/3 lg:w-1/2 xl:w-1/3">

        <h1 class="title">Blog System</h1>

        <p class="description">Ready to start reading or sharing your thoughts? Join our community now!</p>

        <div class="button-container">
            <a href="{{ route('register') }}" class="button primary-button text-xl">Get Started</a>
            <a href="{{ route('login') }}" class="button secondary-button text-xl">Login</a>
        </div>
    </div>

    <!-- Right Side Text -->
    {{-- <div class="right-side-container">
        <h2 class="right-side-title">Discover Our Blog</h2>
        <p class="right-side-description">Explore a world of ideas, knowledge, and insights. Our blog system offers a diverse range of articles covering various topics. Whether you're a reader or a writer, you'll find a welcoming community here.</p>
    </div> --}}

</body>

</html>






