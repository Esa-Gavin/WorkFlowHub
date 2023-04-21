<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WorkFlow Hub</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        
        <div id="app">
            <!-- Add navigation links -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">WorkFlow Hub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/">User List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/user-form">User Form</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/status-list">Status List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/status-form">Status Form</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/task-list">Task List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/task-form">Task Form</router-link>
                    </li>
                </ul>
            </div>
        </nav>
            <router-view></router-view>
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
