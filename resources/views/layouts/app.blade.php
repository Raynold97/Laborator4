<!DOCTYPE html>
<html>

<head>
@include ('inc.head')
</head>

<body>

    
@include('inc.navbar')
<div class="container">
@include('inc.messages')
</div>
@yield('content')

</body>

</html>
