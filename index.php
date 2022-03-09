<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Greensight</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
                <form id="registration-form" class="mt-5" method="post" enctype="multipart/form-data" action="/ajax/add_form_result.php">
                <div class="mb-3">
                    <label for="form-name" class="form-label">Имя</label>
                    <input type="text" name="name" class="form-control" id="form-name">
                </div>
                <div class="mb-3">
                    <label for="form-second-name" class="form-label">Фамилия</label>
                    <input type="text" name="second-name" class="form-control" id="form-second-name">
                </div>
                <div class="mb-3">
                    <label for="form-email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="form-email">
                </div>
                <div class="mb-3">
                    <label for="form-password" class="form-label">Пароль</label>
                    <input type="password" name="password" class="form-control" id="form-password">
                </div>
                <div class="mb-3">
                    <label for="form-password-confirm" class="form-label">Подтверждение пароля</label>
                    <input type="password" name="password-confirm" class="form-control" id="form-password-confirm">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>