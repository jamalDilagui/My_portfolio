<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
     <div class="content">
        <div id="app">
            <div class="over"></div>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <router-link  to="/home"><i class="fa fa-home"></i><br><span class="link">Home</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  to="/about"><i class="fa fa-address-card"></i><br><span class="link">About</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  to="/skills"><i class="fa fa-cogs"></i><br><span class="link">Skills</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  to="/projects"><i class="fa fa-cogs"></i><br><span class="link">Projects</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  to="/mail"><i class="fa fa-envelope"></i><br><span class="link">Contact</span></router-link>
                        </li>
                    </ul>
                </div>
            </nav> 
            <div class="container">
                <router-view></router-view>
            </div>
       </div>
     </div>
      
        <script src="/js/app.js"></script>
    </body>
</html>
