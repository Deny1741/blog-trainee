<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<style>

</style>
<body>

<div class="container d-flex justify-content-center align-items-center">
    <div class="card py-4 p-4 m-4">
        <h5 class="text-center">Ваши данные</h5>
        <form method="post" action="">
        <div class="mt-3">
            <div class="d-flex justify-content-around p-2 outline">
                <img src="assets/img/avatar.png" class="rounded" width="100">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row">
                        <button class="btn btn-primary btn-sm buttons">Изменить аватарку</button>
                        <button class="btn btn-outline-danger buttons btn-sm ml-3">Удалить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="inputbox mt-3"> <input type="text" name="firstName" class="form-control" required="required" placeholder="Фамилия"></div>
                </div>
                <div class="col-md-6">
                    <div class="inputbox mt-3"> <input type="text" name="secondName" class="form-control" required="required" placeholder="Имя"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="inputbox mt-3"> <input type="text" name="email" class="form-control" required="required" placeholder="Ваш email"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-sm mt-3">Сохранить изменения</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>