<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('frontend.sections.nav', ['links' => $links])
    @include('frontend.sections.hero')
    @include('frontend.sections.features')
    @include('frontend.sections.pricing')
    @include('frontend.sections.footer')
</body>
</html>