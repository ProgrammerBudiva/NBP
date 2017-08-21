<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyMail</title>
</head>
<body>
    @if($diller === true)
    <h1>Новый запрос на диллерство</h1>
    @elseif($diller === false)
    <h1>Новый вопрос</h1>
    @endif

    <h4>Контактные данные:</h4>
    <div>
        <span>Номер телефона:</span>
        <span>{{$phone}}</span>
    </div>
    <div>
        <span>Имя:</span>
        <span>{{$name}}</span>
    </div>
    <div>
        <span>Email:</span>
        <span>{{$email}}</span>
    </div>

    <div>
        <span>Текст сообщения: </span>
        <span>{{$text}}</span>
    </div>

</body>
</html>