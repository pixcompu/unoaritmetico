<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="icon" type="image/png" href="{{asset('swagger/images/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{asset('swagger/images/favicon-16x16.png')}}" sizes="16x16" />
    <link href="{{asset('swagger/css/typography.css')}}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{asset('swagger/css/reset.css')}}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{asset('swagger/css/screen.css')}}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{asset('swagger/css/reset.css')}}" media='print' rel='stylesheet' type='text/css'/>
    <link href="{{asset('swagger/css/print.css')}}" media='print' rel='stylesheet' type='text/css'/>
    <script src="{{asset('swagger/lib/jquery-1.8.0.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/jquery.slideto.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/jquery.wiggle.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/jquery.ba-bbq.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/handlebars-2.0.0.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/underscore-min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/backbone-min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/core/swagger-ui.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/highlight.7.3.pack.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/jsoneditor.min.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/marked.js')}}" type='text/javascript'></script>
    <script src="{{asset('swagger/lib/swagger-oauth.js')}}" type='text/javascript'></script>

    <!-- Some basic translations -->
    <script src="{{asset('swagger/lang/translator.js')}}" type='text/javascript'></script>
<!-- <script src="{{asset('lang/ru.js')}}" type='text/javascript'></script> -->
<!-- <script src="{{asset('lang/en.js')}}" type='text/javascript'></script> -->
    <script src="{{asset('swagger/lang/es.js')}}" type='text/javascript'></script>

    <script src="{{asset('swagger/lib/initSwaggerDefault.js')}}" type="text/javascript"></script>
</head>

<body class="swagger-section">
<div id='header'>
    <div class="swagger-ui-wrap">
        <a id="logo" href="http://swagger.io">swagger</a>
        <form id='api_selector'>
            <div class='input'><input placeholder="http://example.com/api" id="input_baseUrl" name="baseUrl" type="text"/></div>
            <div class='input'><input placeholder="<Token Type> <Token>" id="input_apiKey" name="apiKey" type="text"/></div>
            <div class='input'><a id="explore" href="#" data-sw-translate>Establecer Globalmente</a></div>
        </form>
    </div>
</div>

<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
<div class="hidden" id="main-json" data-json="{{asset('swagger/json/swagger.json')}}"></div>
</body>
</html>