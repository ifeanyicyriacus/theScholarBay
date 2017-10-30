<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    @yield('page_title')

            <!-- Bootstrap -->
    {{Html::style('assets/css/bootstrap.min.css')}}
    {{Html::style('assets/css/style.css')}}



            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    {{Html::script('assets/js/html5shiv.min.js')}}
    {{Html::script('assets/js/respond.min.js')}}
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    @yield('page_style')
</head>

<body>

{{--        @include('include.headerNavRc')--}}
        @include('include.headerNavLib')

    <div class="container">
        @yield('content')








    </div>
    <footer  class="footer navbar-fixed-bottom">
        @include('include.footerNavLib')
{{--        @include('include.footerNavRc')--}}
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
{{Html::script('assets/js/jquery.min.js')}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{Html::script('assets/js/bootstrap.min.js')}}
</body>
</html>
