<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Skyblur</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css {{ asset('css/basik_css/site.min.css') }} -->
        <link rel="stylesheet" href="{{ asset('css/basik_css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/basik_css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/basik_css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
        @if (Request::is('admin/*'))
            <link rel="stylesheet" href="{{asset('/dropzone/dist/min/dropzone.min.css')}}">
            <link rel="stylesheet" href="{{asset('/dropzone/dist/min/dropzone.min.js')}}">
        @endif
        <!-- endbuild -->
    </head>
    @if (Request::is('admin/*'))
        <body class="layout-row">
    @endif
    <body class="layout-coloum">
