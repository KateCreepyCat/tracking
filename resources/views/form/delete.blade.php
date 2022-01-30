<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New track form</title>
</head>
<body>
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->


    <!-- Форма новой задачи -->
    <form action="{{ url('deleted') }}" method="POST">
        @csrf
        <input type="text" name="track" size="20" placeholder="track number">
        <button type="submit">
           Удалить запись
        </button>

    </form>
</div>
</body>
</html>
