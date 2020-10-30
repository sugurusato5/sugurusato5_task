<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>投稿タスク編集</h1>
    @if (count($errors) > 0)
        <div>
            <p>
                <b>【エラー内容】</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value={{ $task->id }}>
        <p>編集タイトル<br>
            <input type="text" name="title" value="{{ $task->title }}">
        </p>
        <p>本文<br>
            <textarea name="body" >{{ $task->body }}</textarea>
        </p>
        <input type="submit" value="更新" >
    </form>
    <a href="/tasks/{{ $task->id }}"> <input type="submit" value="詳細に戻る" ></a>
</body>
</html>