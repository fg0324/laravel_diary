<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
    <title>@yield('title')</title>
    <style>
        .header_nav {
            display: flex;
            list-style: none;
            padding-left: 0;
        }
        .header_nav li {
            margin-right: 30px;
        }
        
        .error {
          color: red;
        }
        
        .success {
          color: green;
        }

        .diary {
          border: 1px solid #000;
          padding :20px;
          margin :20px;
          width :600px;
        }

        .box {
            display:flex;
            justify-content:center;
        }

        .title {
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
    @yield('header')

    
    @foreach($errors->all() as $error)
      <p class="error">{{ $error }}</p>
    @endforeach

    
    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif

    @yield('content')
</body>
</html>