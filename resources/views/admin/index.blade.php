<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initiak-scale=1">
    <title>

    </title>
 </head>
<body>

     <h1>ADMIN</h1>


     <form method="POST" action="{{ route('logout') }}">
         @csrf
         <input type = "submit" value="Logout">

     </form>

</body>
</html>
