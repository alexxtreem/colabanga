<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple chat</title>

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="/public/app.css">
    <script src="/public/app.js" async></script>
</head>
<body>
    <header class="header">

    </header>
    <main class="main full-height">
        <div class="chat full-height">
            <div class="container full-height">
                <div class="chat__box full-height">
                    <div class="chat__messages full-height">
                        <div class="chat-message chat-message_my">
                            <div class="chat-message__user">
                                Вы
                            </div>
                            <div class="chat-message__text">
                                Добрый день!
                            </div>
                        </div>
                        <div class="chat-message chat-message_user">
                            <div class="chat-message__user">
                                user-4yafj3okvbo
                            </div>
                            <div class="chat-message__text">
                                И вам!
                            </div>
                        </div>
                    </div>
                    <form action="/index.php?type=send" class="chat-form">
                        <input type="text" name="message" placeholder="Введите текст и нажмите «Отправить»" class="chat-form__input chat-form__input_message" required>
                        <button class="chat-form__send">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer">

    </footer>
</body>
</html>
