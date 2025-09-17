<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test Page</title>
    <style>
    body {
        font-family: sans-serif;
        background-color: #f0f0f0;
        color: #333;
        text-align: center;
        padding-top: 50px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #d9534f;
    }

    h1,
    h2 {
        color: #d9534f;
        text-align: center;
    }

    .feature {
        background: #e9e9e9;
        padding: 15px;
        margin-bottom: 15px;
        border-left: 5px solid #d9534f;
        cursor: pointer;
    }

    .feature:hover {
        background: #ddd;
    }

    .description {
        display: none;
        padding-top: 10px;
        font-style: italic;
        border-top: 2px dashed #ccc;
        margin-top: 11px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome!</h1>

        <p>What is Laravel?</p>
        <p>Laravel is a free, open-source PHP web framework that provides a set of tools and resources for building
            modern web applications.</p>

        @php
        $message = "It simplifies common tasks such as routing, sessions, caching, and authentication, helping
        developers build applications more quickly and efficiently.";
        @endphp

        <p>Why Laravel? <strong>{{ $message }}</strong></p>

        <hr>

        <h2>Key Features</h2>

        <div class="feature" onclick="toggleDescription('desc1')">
            <h3>MVC (Model-View-Controller)</h3>
            <div id="desc1" class="description">
                <p>The Model-View-Controller (MVC) architectural pattern is a fundamental concept in software
                    engineering that separates an application into three interconnected components. The Model manages
                    the application's data and business logic. The View represents the user interface, displaying the
                    data from the Model. The Controller acts as an intermediary, receiving user input and updating both
                    the Model and the View accordingly. This separation of concerns enhances code organization,
                    maintainability, and scalability.</p>
            </div>
        </div>

        <div class="feature" onclick="toggleDescription('desc2')">
            <h3>Artisan Command-Line Interface</h3>
            <div id="desc2" class="description">
                <p>Artisan is Laravel's powerful command-line interface (CLI) that streamlines common development tasks.
                    It offers a wide range of commands to automate repetitive processes, such as generating boilerplate
                    code for migrations, models, controllers, and other components. By using Artisan, developers can
                    significantly increase their productivity and maintain consistency across their projects.</p>
            </div>
        </div>

        <div class="feature" onclick="toggleDescription('desc3')">
            <h3>Blade Templating Engine</h3>
            <div id="desc3" class="description">
                <p>Blade is Laravel's intuitive and lightweight templating engine. It provides a clean and expressive
                    syntax for building views, allowing developers to embed PHP logic within their HTML without the need
                    for cumbersome PHP tags. Blade simplifies tasks like conditional statements, loops, and including
                    sub-views, resulting in more readable and maintainable code. It compiles the templates into plain
                    PHP, ensuring high performance.</p>
            </div>
        </div>

        <div class="feature" onclick="toggleDescription('desc4')">
            <h3>Eloquent ORM</h3>
            <div id="desc4" class="description">
                <p>Eloquent is Laravel's elegant and powerful Object-Relational Mapper (ORM). It provides an expressive
                    way to interact with a database using an object-oriented approach. Instead of writing complex SQL
                    queries, developers can use simple and readable PHP syntax to perform database operations. Eloquent
                    maps database tables to corresponding PHP classes (models), allowing for seamless data manipulation
                    and relationship management. This abstraction simplifies database interactions and improves code
                    readability.</p>
            </div>
        </div>
    </div>

    <script>
    function toggleDescription(id) {
        const element = document.getElementById(id);
        if (element.style.display === "block") {
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
    }
    </script>

</body>

</html>