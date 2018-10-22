<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <title>address ::: user office ::: foodclub</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div class="cbc">
    <div class="main">
        @include('site.layout._header')

        <div class="center_box cb">

            @include('site.layout._uo_tabs')

            @yield('content')

        </div>
    </div>

    @include('site.layout._footer')

</div>

</body>

</html>