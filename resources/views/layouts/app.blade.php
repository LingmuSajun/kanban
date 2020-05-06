<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kanban</title>

    <!-- Styles(ローカルの場合、secure_asset=>assetにすること) -->
    <link href="{{ secure_asset('css/sign_up.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/sign_in.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/card_edit.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/card_new.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/card_show.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/list_new.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/list_edit.css') }}" rel="stylesheet">

     <!-- awesome fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--bootstrap-->
    <!--CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!--JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!-- ログインしている場合のみヘッダを表示する --->
@auth
<header class="header">
  <nav class="nav">
    <ul class="header_menu">
      <li class="nav-link">{{Auth::user()->name }}さん</li>
      <li class="header_menu_title">
          <a class="nav-link listNew" href="/">kanban</a>
      </li>
      <li>
        <ul class="header_menu_inner">
          <li>
              <a class="nav-link listNew" href="{{ route('new') }}">リストを作成</a>　　
          </li>
          <li>
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
@endauth
@yield('content')
</body>
</html>