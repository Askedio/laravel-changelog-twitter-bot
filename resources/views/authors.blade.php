@extends('template')
@section('content')
  <style>
    .contributors{
      width: 70%;
      margin: 20px auto;
      text-align: left;
    }

    .contributors img{
      border-radius: 50%;
      height: 150px;
      width: 150px;
      float: left;
      margin-right: 20px;
    }
    .contributors .clearfix{
      margin: 20px;
      border-radius: 6px;
      background: rgba(255,255,255,.1);
      padding: 30px;
    }

    .contributors .clearfix:first-of-type{
      background: rgba(255,255,255,.2);
      border: 2px solid rgba(255,255,255,.1);
    }
    .contributors em{
      font-size: 24px;
      margin-top: 10px;
    }

    h1{font-size: 48px}
    h2{font-size: 36px}
    .container{margin-top: 40px;}
    body{ overflow: auto}

    @media only screen and (max-width: 1000px) {
      .contributors{
        text-align: center;
        width: 90%
      }
      .container{
        width:90%;
        margin: 20px auto
      }

      .contributors img{
        float:none;
      }

    }

  </style>
  <div class="container">

  <h1>Laravel Contributors</h1>
  <p>These fine people keep Laravel going with their contributions.</p>

  <div class="contributors">
    @foreach($users as $user)
      <div class="clearfix">

    <a href="{{ url($user->name) }}"><img src="{{ $user->avatar }}" title="{{ $user->name }}"></a>

      <h2>{{ '@'.$user->name }}</h2>
      <h4>{{ $user->logs->count()}} Contributions</h4>
      <p>
    @if($user->website)
      <a href="{{ $user->website }}" target="_social"><em class="fa fa-fw fa-external-link"></em></a>
    @endif
    <a href="{{ $user->url }}" target="_social"><em class="fa fa-fw fa-github"></em></a>
    <a href="https://twitter.com/{{ $user->twitter ?: $user->name }}" target="_social"><em class="fa fa-fw fa-twitter"></em></a>
  </p>

    </div>
    @endforeach
  </div>
</div>
@endsection