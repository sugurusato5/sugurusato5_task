<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
    <div style="display:inline-flex">
        <a href="tasks/{{ $task->id }}">{{ $task->title }}</a>
            <form action="/tasks/{{ $task->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return fales};">
            </form>
        </div><br>
    @endforeach
    <hr>
    @if (count($errors) > 0)
        <div>
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>新規論文投稿</h1>
    <form action="/tasks" method="post">
    @csrf
        <p>論文タイトル</p>
        <input type="text" name="title">
        <p>内容</p>
        <textarea type="text" name="body" value="{{ old('title')}}"></textarea><br>
        <input type="submit" value="Create Task">
    </form>
</body>
</html>