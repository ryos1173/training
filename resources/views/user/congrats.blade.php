
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
                background-image:url('/images/21389.jpg');
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
                margin:200px;
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
            
            .title{
                margin-top:100px;
                font-size: 60px;
                font-weight: 900;
                animation: color-change 2s linear infinite;
            }
            
            @keyframes color-change {
              0%,100%{
                color:#ff1493;
              }
            
              25%{
                color:#7fff00;
              }
              
              50%{
                color:#0091EA;
              }
              
              75%{
                color:#9400d3;
              }
            }





            
        </style>
        </head>
        <body>
        <div class="container">
            <div class="content-top">
                <div class="title m-b-md">
                    <img alt="" src="/images/goal1.png">バルクアップ成功！！<img alt="" src="/images/goal1.png">
                </div>
                <div style="text-align: center; margin-bottom: 3em;">
                    <h2>目標体重の<span class="weight">{{ $goal->goal }}</span>kgを達成しました！！</h2>
                        <br>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5 mx-auto text-center">
                        <div class="card">
                            <a href="{{ url('/user/profile/goal') }}" class="btn btn-primary">
                                次の目標を設定しよう
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
