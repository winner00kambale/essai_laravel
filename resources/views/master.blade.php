<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #menu{
            background-color:black;
        }
        #menu li a{
            color: #fff;
            text-decoration: none;
        }
        li{
            
        }
    </style>
</head>
<body>
    <!-- Menu -->
    <ul id="menu">
        <li><a href="etudiant">Etudiant</a></li>
        <li><a href="{{ route('payement') }}">payement</a></li>
    </ul>
    <!--End Menu --> 

    @yield('contenu')
    
</body>
</html>