<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Калькулятор</h1>
  <form action="/form.php" method="POST">
    <div>
      <label for="name"> Имя пользоватля: 
        <input id="name" name="name" type="text">
      </label>
    </div>
    <div>
      <label for="last_name"> Фамилия пользоватля
        <input id="last_name" name="last_name" type="text">
      </label>
    </div>
    <div>
      <label for="age"> Возраст
        <input id="age" name="age" type="text">
      </label>
    </div>
    <div>
      <label for="phone"> Телефон пользоватля
        <input id="phone" name="phone" type="text">
      </label>
    </div>
    <div>
      <label for="email"> Email пользоватля
        <input id="email" name="email" type="email">
      </label>
    </div>
    <div>
      <label for="question"> Ваш вопрос
        <textarea name="question" id="" cols="30" rows="10"></textarea>
      </label>
    </div>
    <div>
      <input type="hidden" name="action" value="send_email">
      <button type="submit">Отправить</button>
    </div>
  </form>
</body>
</html>