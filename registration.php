<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>login</title>
</head>

<style>
    .wrap {
        padding: 30px 30px 10px 30px;
        border-radius: 10px;
    }
</style>
<body>
<section>
    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="wrap col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form>
                    <div class="d-flex justify-content-between align-items-center form-outline gap-3 mb-4">
                        <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Фамилия" />
                        <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Имя" />
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Ваш email" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Пароль" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Регистрация</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>