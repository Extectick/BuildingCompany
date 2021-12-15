<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sign_in_out_form.css">
</head>
<body>
  <div> <!-- Контейнер всех форм -->
      <div class="container py-5 my-5"> <!-- Контейнер создания товара -->
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form id="create_products_form"class="form-horizontal"> <!-- Форма создания товара -->

                <span class="heading text-muted">Создание товара</span>

                <div class="form-group">
                  <input type="text" placeholder="Имя товара" class="form-control" name="name" id="name" required />
                  <i class="fa fa-envelope"></i>
                </div>

                <div class="form-group">
                  <input type="text" placeholder="Цена товара" class="form-control" name="price" id="price" required />
                  <i class="fa fa-envelope"></i>
                </div>

                <div class="form-group">
                  <input type="text" placeholder="Картинка товара" class="form-control" name="img" id="img" required />
                  <i class="fa fa-user"></i>
                </div>

                <button class="btn btn-default mx-md-4" type="submit">Создать</button>
                </div>
              </form> <!-- Форма создания товара -->
            </div>
          </div>
        </div> <!-- Форма создания товара -->

        <div class="container py-5 my-5"> <!-- Контейнер удаления товара -->
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form id="delete_products_form" class="form-horizontal"> <!-- Форма удаления товара -->

                <span class="heading text-muted">Удаление товара</span>

                <div class="form-group">
                  <input type="text" placeholder="id товара" class="form-control" name="name" id="name" required />
                  <i class="fa fa-envelope"></i>
                </div>
                <button class="btn btn-default mx-md-4" type="submit">Удалить</button>
                </div>
              </form> <!-- Форма удаления товара -->
            </div>
          </div>
        </div> <!-- Контейнер удаления товара -->

        <div class="container py-5 my-5"> <!-- Контейнер обновления товара -->
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form class="form-horizontal"> <!-- Форма обновления товара -->

                <span class="heading text-muted">Обновление инфы товара</span>

                <div class="form-group">
                  <input type="text" placeholder="Имя товара" class="form-control" name="name" id="name" required />
                  <i class="fa fa-envelope"></i>
                </div>

                <div class="form-group">
                  <input type="text" placeholder="Цена товара" class="form-control" name="price" id="price" required />
                  <i class="fa fa-envelope"></i>
                </div>

                <div class="form-group">
                  <input type="text" placeholder="Картинка товара" class="form-control" name="img" id="img" required />
                  <i class="fa fa-user"></i>
                </div>

                <button class="btn btn-default mx-md-4" type="submit">Обновить</button>
                </div>
              </form> <!-- Форма обновления товара -->
            </div>
          </div>
        </div> <!-- Форма обновления товара -->
    </div> <!-- Контейнер всех форм -->




</body>
</html>