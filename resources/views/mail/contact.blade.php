<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>joint network</title>
</head>
<body>
<div>
    採用向けページからお問い合わせがありました。以下お問い合わせ内容です。
    【会社名】{{$name}}
    【ご担当者名】{{$leader}}
    【メールアドレス】{{$email}}
    【電話番号】{{$phone}}
    【住所】{{$address}}
{{--    【お問い合わせ種別】{{$type_require === 1 ? '人材派遣（長期）' : $type_require === 2 ? '人材派遣（短期）' : $type_require === 3 ?  'パートタイム派遣': $type_require === 4 ? 'シニア派遣':  $type_require === 5 ? '紹介予定派遣' : '人材紹介'}}--}}
    【お問合せ内容詳細】 {{$content}}
    3/10~3/15の間に日本に旅行に行くのですが、その間で撮影できる時間はありますか？よろしくお願いします。
    +---------------------------------------------------------+
    こちらはお客さまからのお問合せメールになります。こちらのメールアドレスに返信しても返信はありません。上記のお客様の連絡先に直接連絡するようお願いいたします。
    +---------------------------------------------------------+
    Joint Network採用ページ - お問合せフォーム
</div>
</body>
</html>
