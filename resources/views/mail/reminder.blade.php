<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .l-mail {
            width: 50%;
            margin: 0 auto;
        }

        .p-mail {
            margin: 50px 0;
        }

        .p-mail__title {
            font-size: 30px;
        }

        .p-mail__message {
            width: 80%;
            margin: 60px auto;
        }

        .p-mail__name {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .p-mail__text {
            margin-bottom: 10px;
        }

        .p-mail__reset {
            text-align: center;
            margin-top: 50px;
        }

        .p-mail__hashKey {
            margin-bottom: 20px;
        }


        .p-mail__button {
            text-align: center;
            line-height:50px;
            font-size:18px;
            margin:0 auto;
            width: 200px;
            height: 50px;
            background: #3666dd;
            border-radius: 5px;
            color:#ffffff;
            border:none;
            box-shadow: 2px 2px;
        }

        .p-mail__link{
            display:block;
            width:100%;
            height:100%;
            text-decoration: none;
            color:inherit;
        }
    </style>
</head>

<body>
    <div class="l-mail">
        <section class="p-mail">
            <h2 class="p-mail__title">パスワードリセット</h2>

            <section class="p-mail__message">
                <p class="p-mail__name">{{ $content['name'] }}様</p>
                <p class="p-mail__text">ご利用のメールアドレスに対するパスワードリセットの手続きが開始されました
                <p class="p-mail__text">以下のボタンをクリックし手続きを行ってください</p>
            </section>

            <section class="p-mail__reset">
                <p class="p-mail__hashKey">認証キー : {{ $content['hashKey']}}</p>

                <input 
                    type="button"
                    class="p-mail__button"
                    value="パスワードリセット" 
                    id="js-click"
                >
            </section>
        </section>

        <script>
            document.getElementById('js-click-button').onclick = function(){
                location.href="{{ route('hashKey') }}"
            }
        </script>
    </div>
</body>

</html>