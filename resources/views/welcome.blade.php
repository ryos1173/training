
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BLUK LOG</title>

         <!--Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!--Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image:url('/images/213891.jpg');
                background-size: cover;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content-top {
                text-align: center;
                padding: 20px;
            }

            .title {
                font-size: 84px;
                color: #fff;
                font-weight: 900;
            }
            
            h4 {
                color: #fff;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .btn-primary {
                  display: inline-block;
                  padding: 0.5em 1em;
                  text-decoration: none;
                  border-radius: 4px;
                  color: #ffffff;
                  background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
                  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                  border-bottom: solid 3px #5e7fca;
                }
                
                .btn-primary:active {
                  -webkit-transform: translateY(4px);
                  transform: translateY(4px);
                  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
                  border-bottom: none;
                }



            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('user/mypage') }}">MyPage</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">アカウント作成</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content-top">
                <div class="title m-b-md">
                    BLUK LOG
                </div>
                <div style="text-align: center; margin-bottom: 3em;">
                    <h4>BLUK LOGは、増量トレーニー専用の記録ツールです。</h4>
                    <br>
                    <h4>ご利用が初めての方は、まずはアカウント登録からどうぞ。</h4>
                </div>
                <div class="text-center">
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        ログイン
                    </a>
                    <span style="padding-right: 1.0em;"></span>
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        アカウント登録
                    </a>
                </div>

                <!--<div class="links">-->
                <!--    <a href="https://laravel.com/docs">Docs</a>-->
                <!--    <a href="https://laracasts.com">Laracasts</a>-->
                <!--    <a href="https://laravel-news.com">News</a>-->
                <!--    <a href="https://blog.laravel.com">Blog</a>-->
                <!--    <a href="https://nova.laravel.com">Nova</a>-->
                <!--    <a href="https://forge.laravel.com">Forge</a>-->
                <!--    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                <!--</div>-->
            </div>
        </div>
    </body>
</html>
