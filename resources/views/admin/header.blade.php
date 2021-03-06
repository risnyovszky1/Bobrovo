<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>


    <script type="text/javascript" src="/js/app.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400i,700&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>

    <link href="https://cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</head>
<body>
<header id="header-admin">
    <nav class="navbar navbar-expand-sm navbar-dark bg-bobrovo-green">
        <a class="navbar-brand" href="{{ route('admin') }}">
            <img src="/img/logo-web.png" width="30" height="30" class="d-inline-block align-top mr-1"
                 alt="Bobrovo logo">
            Bobrovo
        </a>
        <button class="navbar-toggler bg-bobrovo-orange text-white border-white" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-sm-0">
                <li class="nav-item">
                    <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt"></i> Odhlásiť</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
