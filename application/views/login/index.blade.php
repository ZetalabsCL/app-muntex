
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Aplicacion de Gestion Muntex Ltda :: Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  {{ HTML::style('style/bootstrap.css') }}
  {{ HTML::style('style/font-awesome.css') }}
  {{ HTML::style('style/style.css') }}
  {{ HTML::style('style/bootstrap-responsive.css') }}
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <!-- Widget starts -->
            <div class="widget">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Login 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  {{ Form::open('/dashboard', 'post' , array('class' => 'form-horizontal')) }}
                  
                    <!-- Email -->
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="control-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="control-group">
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox"> Recuerdame
                        </label>
                        <br>
                        {{ Form::submit('Ingresar', array('class' => 'btn')) }}
                        {{ Form::reset('Limpiar', array('class' => 'btn')) }}
                      </div>
                    </div>
                        {{ Form::close();}}

                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
{{	HTML::script('js/jquery.js') }}
{{	HTML::script('js/bootstrap.js') }}
</body>
</html>