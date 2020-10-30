<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】<br>
        {{ $tasks->title }}
    </p>
    <p>【内容】<br>
        {{ $tasks->body }}
    </p>
        <div style="display:inline-flex">
        <a href="/tasks"><input type="submit" value="一覧へ戻る"></a>
        <a href="/tasks/{{ $tasks->id }}/edit"><input type="submit" value="編集する"></a>
        <form action="/tasks/{{ $tasks->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return fales};">
        </form>
</body>
</html>