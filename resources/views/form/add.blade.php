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
    <form action="{{ url('added') }}" method="POST">
        @csrf
        <input type="text" name="order_id" size="20" placeholder="order id">
        <input type="text" name="track" size="20" placeholder="track number">
        <button type="submit">
            Добавить трэк
        </button>

    </form>
</div>
</body>
</html>
