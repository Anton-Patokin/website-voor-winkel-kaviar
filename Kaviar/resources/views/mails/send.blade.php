<html>
<head></head>
<body style="background: black; color: white">
<h1>Сообщение от {{$name}}</h1>
<h2>Мейл: {{$email}}</h2>
<h3>Личность: {{$person}}</h3>
<h3>НДС: {{$number}}</h3>
<p>Cообщение: {{$content}}</p>
<p>пользователь посматревал веб-сайт на
    @if($lang =="ru")
        Русском
    @elseif($lang=='nl')
        нидерландском
    @elseif($lang == 'fr')
        французском
    @else
        что то пошло не так сообщите администратору
    @endifязыке</p>
</body>
</html>