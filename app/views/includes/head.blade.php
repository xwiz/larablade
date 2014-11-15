<meta charset="utf-8"/>
<meta name="description" content="Laravel Bootstrap + Blade Demo"/>
<meta name="author" content="Opata Chibueze"/>

<!-- Load the title dynamically! -->
<title>@yield('title')</title>

<!-- For fun, replace this css with other bootstrap 
css from bootswatch, you could try injecting the value
to see how you can build a theme -->

{{ HTML::style('assets/css/bootstrap.min.css') }}


{{ HTML::script('assets/js/jquery.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}

@yield('head')