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
        <input type="text" name="name" size="20" placeholder="Имя">
        <input type="e-mail" name="e_mail" size="10" placeholder="e-mail">
        <input type="url" name="invoice_url" size="10" placeholder="Invoice URL">
        <button type="submit">
            Добавить пользователя
        </button>

    </form>
</div>
</body>
</html>
