<!doctype html>
<html lang="ru">
<!-- LINKS -->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
        <title>Rest API Authentication Example</title>

        <!-- Bootstrap 4 CSS and custom CSS -->
        <link rel="stylesheet" href="styles/index.processed.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/main_style.css" />
 				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
 				<link rel="stylesheet" href="css/sign_in_out_form.css">
    </head>
<!-- /LINKS -->
<body>
<!-- HEADER -->
<header class="main-header">
	<!-- .container -->
    <div class="container">
      <!-- /navbar -->
      <nav class="navbar navbar-expand-lg main-nav px-0"> 
        <a class="navbar-brand" href="#" id='main'>
					      <img src="img/logotip2.png" alt="">
					    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
          	<li>
              <a href="#" id='main' class="active active-first">Главная</a>
            </li>
            <li>
              <a href="#" id='update_account'>Профиль</a>
            </li>
            <li>
              <a href="#" id='info'>О нас</a>
            </li>
            <li>
              <a href="#" id='contacts'>Контакты</a>
            </li>
            <li>
              <a href="#" id='sign_up'>Регистрация</a>
            </li>
            <li>
              <a href="#" id='login'>Вход</a>
            </li>
            <li>
              <a href="#" id='logout'>Выход</a>
            </li>
          </ul>
        </div>
      </nav> <!-- /navbar -->
    </div>
    <!-- /.container -->
</header>
<!-- /HEADER -->

<!-- container -->
<main role="main" class="container starter-template">
 
  </div>
  <div class="row-main">
      		
          <!-- Сообщения об авторизации/регистрации -->
          <div id="response"></div>

          <!-- Контейнер авторизации/регистрации/профиль -->
          <div id="content"></div>
          <!-- ТОВАРЫ -->
				<div id="main-page">
		      		<?php 
		      			require_once('main.php');
		      		?>
		      	</div>
				  <!-- ТОВАРЫ -->

</main>

<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
    		<hr>
    </div>
    <div class="container">
	      <div class="row">
	        <div class="col-md-8 col-sm-6 col-xs-12">
	          	<p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
	       					<a href="#">ME</a>.
	          	</p>
	        </div>

	        <div class="col-md-4 col-sm-6 col-xs-12">
		          <ul class="social-icons">
		            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
		            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
		            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
		            <li><a class="linkedin" href="#"><i class="fa fa-skype"></i></a></li>   
		          </ul>
	        </div>
	      </div>
    </div>
</footer>
<!-- /Site footer -->

<!-- jQuery & Bootstrap 4 JavaScript libraries -->
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script> // LINKS

// jQuery код 
jQuery(function($) {

  // показать форму регистрации 
  $(document).on('click', '#sign_up', function(){
      var html = `
	        <div class="reg-form-pos container py-5 my-5"> <!-- Контейнер регистрации -->
							<div class="row">
								<div class="col-md-offset-3 col-md-6">
									<form id="sign_up_form" class="form-horizontal"> <!-- Форма регистрации -->

										<span class="heading text-muted">Регистрация</span>

										<div class="form-group">
											<input type="text" placeholder="Имя" class="form-control" name="firstname" id="firstname" required />
											<i class="fa fa-envelope"></i>
										</div>

										<div class="form-group">
											<input type="text" placeholder="Фамилия" class="form-control" name="lastname" id="lastname" required />
											<i class="fa fa-envelope"></i>
										</div>

										<div class="form-group">
											<input type="email" placeholder="Email" class="form-control" name="email" id="email" required />
											<i class="fa fa-user"></i>
										</div>

										<div class="form-group help">
											<input type="password" placeholder="Пароль" class="form-control" name="password" id="password" required />
											<i class="fa fa-lock"></i>
											<a href="#" class="fa fa-question-circle"></a>
										</div>

										<div class="form-group">
											<div class="main-checkbox">
											<input type="checkbox" value="none" id="checkbox1"/>
											<label for="checkbox1"></label>
											</div>
											<span class="text text-muted">Запомнить</span>
											<button class="btn btn-default mx-md-4" type="submit">ЗАРЕГИСТРИРОВАТЬ</button>
										</div>
									</form> <!-- Форма регистрации -->
						 	 	</div>
							</div>
						</div> <!-- Форма регистрации -->
      `;
      clearResponse();
      $('#content').html(html);
      $("#main-content").hide();
      $("#main-page").hide();
    });
	// Показать главную страницу
  $(document).on('click', '#main', function(){
      var html = `
	        <!-- ТОВАРЫ -->
				      <div id="sdfdsf">
				      		<?php 
				      			require_once('products/products_show.php');
				      		?>
				      </div>
				  <!-- ТОВАРЫ -->
      `;
      clearResponse();
      $('#content').html(html);
      $("#main-page").hide();
    });


	// Отправка данных с формы в бд для создания аккаунта
	$(document).on('submit', '#sign_up_form', function(){
	    // получаем данные формы 
	    var sign_up_form=$(this);
	    var form_data=JSON.stringify(sign_up_form.serializeObject());

	    // отправить данные формы в API 
	    $.ajax({
	        url: "db_users/create_user.php",
	        type : "POST",
	        contentType : 'application/json',
	        data : form_data,
	        success : function(result) {
	            // в случае удачного завершения запроса к серверу, 
	            // сообщим пользователю, что он успешно зарегистрировался и очистим поля ввода 
	            $('#response').html("<div class='alert alert-success'>Регистрация завершена успешно. Пожалуйста, войдите.</div>");
	            sign_up_form.find('input').val('');
	        },
	        error: function(xhr, resp, text){
	            // при ошибке сообщить пользователю, что регистрация не удалась 
	            $('#response').html("<div class='alert alert-danger'>Невозможно зарегистрироваться. Пожалуйста, свяжитесь с администратором.</div>");
	        }
	    });

	    return false;
	}); 

  // При нажатии на кнопку вход, показать форму для входа
	$(document).on('click', '#login', function(){
	    showLoginPage();
	    $("#main-content").hide();
	    $("#main-page").hide();
	});

	// Форма входа, функция отправки данных на действительность и создание куки 
	$(document).on('submit', '#login_form', function(){
	    // получаем данные формы 
	    var login_form=$(this);
	    var form_data=JSON.stringify(login_form.serializeObject());

	    // отправить данные формы в API 
	    $.ajax({
	        url: "db_users/login.php",
	        type : "POST",
	        contentType : 'application/json',
	        data : form_data,
	        success : function(result){

	            // сохранить JWT в куки 
	            setCookie("jwt", result.jwt, 1);

	            // показать домашнюю страницу и сообщить пользователю, что вход был успешным 
	            $("#main").show();
	            showHomePage();
	            $('#response').html("<div class='alert alert-success'>Успешный вход в систему.</div>");

	        },
	        error: function(xhr, resp, text){
	            // при ошибке сообщим пользователю, что вход в систему не выполнен и очистим поля ввода 
	            $('#response').html("<div class='alert alert-danger'>Ошибка входа. Email или пароль указан неверно.</div>");
	            login_form.find('input').val('');
	        }
	    });
	    return false;
	});

	// При нажатии на кнопку главная, показать главную страницу
	$(document).on('click', '#home', function(){
	    showHomePage();
	    clearResponse();
	    $("#main-content").show();
	});

	// При нажатии на кнопку профиль, показать профиль, логично-логично
	$(document).on('click', '#update_account', function(){
    showUpdateAccountForm();
    $("#main-content").hide();
    $("#main-page").hide();
	});

	// Форма обновления данных аккаунта
	$(document).on('submit', '#update_account_form', function(){
	    // дескриптор для update_account_form 
	    var update_account_form=$(this);

	    // валидация JWT для проверки доступа 
	    var jwt = getCookie('jwt');

	    // получаем данные формы 
	    var update_account_form_obj = update_account_form.serializeObject()

	    // добавим JWT 
	    update_account_form_obj.jwt = jwt;

	    // преобразуем значения формы в JSON с помощью функции stringify () 
	    var form_data=JSON.stringify(update_account_form_obj);

	    // отправить данные формы в API 
	    $.ajax({
	        url: "db_users/update_user.php",
	        type : "POST",
	        contentType : 'application/json',
	        data : form_data,
	        success : function(result) {

	            // сказать, что учетная запись пользователя была обновлена 
	            $('#response').html("<div class='alert alert-success'>Учетная запись обновлена.</div>");

	            // сохраняем новый JWT в cookie 
	            setCookie("jwt", result.jwt, 1);
	        },

	        // показать сообщение об ошибке пользователю 
	        error: function(xhr, resp, text){
	            if(xhr.responseJSON.message=="Невозможно обновить пользователя."){
	                $('#response').html("<div class='alert alert-danger'>Невозможно обновить пользователя.</div>");
	            }

	            else if(xhr.responseJSON.message=="Доступ закрыт."){
	                showLoginPage();
	                $('#response').html("<div class='alert alert-success'>Доступ закрыт. Пожалуйста войдите</div>");
	            }
	        }
	    });

	    return false;
	});

	// При нажатии на кнопку "Выход", удаление КУКИ, тем самым выход из аккаунта
	$(document).on('click', '#logout', function(){
	    showLoginPage();
	    $('#response').html("<div class='alert alert-info'>Вы вышли из системы.</div>");
	});

  // Удаление всех быстрых сообщений 
  function clearResponse(){
      $('#response').html('');
  }
  
  // Функция показывающая форму для входа
	function showLoginPage(){
	    // удаление jwt 
	    setCookie("jwt", "", 1);

	    // форма входа 
	    var html = `
	        <div class="reg-form-pos container py-5 my-5"> <!-- Контейнер авторизации -->
							<div class="row">
								<div class="col-md-offset-3 col-md-6">
									<form id="login_form" class="form-horizontal"> <!-- Форма авторизации -->

										<span class="heading text-muted">АВТОРИЗАЦИЯ</span>

										<div class="form-group">
											<input type='email' class='form-control' id='email' name='email' placeholder='Введите email'>
											<i class="fa fa-user"></i>
										</div>

										<div class="form-group help">
											<input type='password' class='form-control' id='password' name='password' placeholder='Введите пароль'>
											<i class="fa fa-lock"></i>
											<a href="#" class="fa fa-question-circle"></a>
										</div>

										<div class="form-group">
											<div class="main-checkbox">
											<input type="checkbox" value="none" id="checkbox1"/>
											<label for="checkbox1"></label>
											</div>
											<span class="text text-muted">Запомнить</span>
											<button class="btn btn-default colortext" type="submit">ВХОД</button>
											<a href="#" id="sign_up" class="btn btn-default mx-md-4">РЕГИСТРАЦИЯ</a>
										</div>
									</form> <!-- Форма авторизации -->
						 	 	</div>
							</div>

						</div> <!-- Форма авторизации -->
	        `;

	    $('#content').html(html);
	    clearResponse();
	    showLoggedOutMenu();
	}

	// функция setCookie() поможет нам сохранить JWT в файле cookie 
	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	// Функция поможет нам прочитать JWT, который мы сохранили ранее. 
	function getCookie(cname) {
	    var name = cname + "=";
	    var decodedCookie = decodeURIComponent(document.cookie);
	    var ca = decodedCookie.split(';');
	    for(var i = 0; i <ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' '){
	            c = c.substring(1);
	        }

	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length, c.length);
	        }
	    }
	    return "";
	}

	// Функция для востановления кнопок "Вход" и "Регистрация" 
	function showLoggedOutMenu(){
	    // показать кнопку входа и регистрации в меню навигации 
	    $("#login, #sign_up").show();
	    $("#logout").hide(); // скрыть кнопку выхода 
	}

	// Функция показать домашнюю страницу 
	function showHomePage(){
	    // валидация JWT для проверки доступа 
	    var jwt = getCookie('jwt');
	    $.post("db_users/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

	        // если прошел валидацию, показать домашнюю страницу 
	        var html = `
	            <!-- ТОВАРЫ -->
				      		<div id="products-main">
				      		<?php 
				      			require_once('products/products_show.php');
				      		?>
				      		</div>
				 <!-- ТОВАРЫ -->
	        `;

	        $('#content').html(html);
	        showLoggedInMenu();
	    })

	    // показать страницу входа при ошибке 
	    .fail(function(result){
	        showLoginPage();
	        $('#response').html("<div class='alert alert-danger'>Пожалуйста войдите, чтобы получить доступ к товарам</div>");
	    });
	}

	// Функция создания продуктов 
	// Выполнение кода при отправке формы продуктов 
	$(document).on('submit', '#create_products_form', function(){
	    // получаем данные формы 
	    var create_products_form=$(this);
	    var form_data=JSON.stringify(create_products_form.serializeObject());

	    // отправить данные формы в API 
	    $.ajax({
	        url: "products/products_create.php",
	        type : "POST",
	        contentType : 'application/json',
	        data : form_data,
	        success : function(result) {
	            // в случае удачного завершения запроса к серверу, 
	            // сообщим пользователю, что он успешно создал продукт 
	            $('#response').html("<div class='alert alert-success'>Продукт успешно добавлен</div>");
	            create_products_form.find('input').val('');
	        },
	        error: function(xhr, resp, text){
	            // при ошибке сообщить пользователю, что создание продукта не удалось 
	            $('#response').html("<div class='alert alert-danger'>Невозможно создать продукт.</div>");
	        }
	    });
	    return false;
	});

	$(document).on('submit', '#delete_products_form', function(){
	    // получаем данные формы 
	    var delete_products_form=$(this);
	    var form_data=JSON.stringify(delete_products_form.serializeObject());

	    // отправить данные формы в API 
	    $.ajax({
	        url: "products/products_delete.php",
	        type : "POST",
	        contentType : 'application/json',
	        data : form_data,
	        success : function(result) {
	            // в случае удачного завершения запроса к серверу, 
	            // сообщим пользователю, что он успешно создал продукт 
	            $('#response').html("<div class='alert alert-success'>Продукт успешно удалён</div>");
	            delete_products_form.find('input').val('');
	        },
	        error: function(xhr, resp, text){
	            // при ошибке сообщить пользователю, что создание продукта не удалось 
	            $('#response').html("<div class='alert alert-danger'>Невозможно удалить продукт.</div>");
	        }
	    });
	    return false;
	});

	// Функция скрывающая кнопки "Вход" и "Регистрация" если пользователь зареган
	function showLoggedInMenu(){
	    // скрыть кнопки вход и зарегистрироваться с панели навигации и показать кнопку выхода 
	    $("#login, #sign_up").hide();
	    $("#logout").show();
	}

	// Функия при нажатии на кнопку "Профиль" показывать форму для обновления данных
	function showUpdateAccountForm(){
	  // валидация JWT для проверки доступа 
	  var jwt = getCookie('jwt');
	  $.post("db_users/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
	  	// Проверка на админа, если это так показать форму для добавления товаров.
	  	if (result.data.email == 'bilipt@yandex.ru') {
	  			var html = `
					<div class="admin-forms"> <!-- Контейнер всех форм -->
			      	<div class="container py-5 my-5"> <!-- Контейнер создания товара -->
			          <div class="admin-row">
			            <div class="col-md-offset-3 col-md-6">
			              <form id="create_products_form"class="form-horizontal admin-create"> <!-- Форма создания товара -->

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
			          <div class="admin-row">
			            <div class="col-md-offset-3 col-md-6">
			              <form id="delete_products_form" class="form-horizontal admin-delete"> <!-- Форма удаления товара -->

			                <span class="heading text-muted">Удаление товара</span>

			                <div class="form-group">
			                  <input type="text" placeholder="id товара" class="form-control" name="product_id" id="name" required />
			                  <i class="fa fa-envelope"></i>
			                </div>
			                <button class="btn btn-default mx-md-4" type="submit">Удалить</button>
			                </div>
			              </form> <!-- Форма удаления товара -->
			            </div>
			          </div>
			        </div> <!-- Контейнер удаления товара -->

			        <div class="container py-5 my-5"> <!-- Контейнер обновления товара -->
			          <div class="admin-row">
			            <div class="col-md-offset-3 col-md-6">
			              <form class="form-horizontal admin-update"> <!-- Форма обновления товара -->

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
	  			`;
	  	}
	  	else {
	  			var html = `
	            <div class="reg-form-pos container py-5 my-5"> <!-- Контейнер профиля -->
							<div class="row update_form">
								<div class="col-md-offset-3 col-md-6">
									<form id="update_account_form" class="form-horizontal"> <!-- Форма профиля -->

										<span class="heading text-muted">Ваши данные</span>

										<div class="form-group">
											<input type="text" class="form-control" name="firstname" id="firstname" required value="` + result.data.firstname + `" />
											<i class="fa fa-user"></i>
										</div>

										<div class="form-group">
											<input type="text" class="form-control" name="lastname" id="lastname" required value="` + result.data.lastname + `" />
											<i class="fa fa-user"></i>
										</div>

										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email" required value="` + result.data.email + `" />
											<i class="fa fa-user"></i>
										</div>

										<div class="form-group help">
											<input type="password" class="form-control" name="password" id="password" />
											<i class="fa fa-lock"></i>
											<a href="#" class="fa fa-question-circle"></a>
										</div>
										<div class="form-group">
											<button class="btn btn-default colortext" type="submit">Обновить</button>
										</div>
									</form> <!-- Форма профиля -->
						 	 	</div>
							</div>

						</div> <!-- Форма профиля -->
	        `;	
	  	}
	    clearResponse();
	    $('#content').html(html);
	  })

	  // в случае ошибки / сбоя сообщите пользователю, что ему необходимо войти в систему, чтобы увидеть страницу учетной записи. 
	  .fail(function(result){
	      showLoginPage();
	      $('#response').html("<div class='alert alert-danger'>Пожалуйста, войдите, чтобы получить доступ к странице учетной записи.</div>");
	  });
	}


  // serializeObject функция для преобразования значений формы в формат JSON 
	$.fn.serializeObject = function(){
	    var o = {};
	    var a = this.serializeArray();
	    $.each(a, function() {
	        if (o[this.name] !== undefined) {
	            if (!o[this.name].push) {
	                o[this.name] = [o[this.name]];
	            }
	            o[this.name].push(this.value || '');
	        } else {
	            o[this.name] = this.value || '';
	        }
	    });
	    return o;
	};

});
</script>

<!-- Для ускорения загрузки страницы -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="scripts/index.js"></script>
</body>
</html>