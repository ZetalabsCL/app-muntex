
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>{{ $title }}</title>
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
                <i class="icon-lock"></i> Acceso Usuarios 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->

                  {{ Form::open('dashboard', 'post', array('class' => 'form-horizontal')) }}
                  
                    <!-- Email -->
                    <div class="control-group">
                      {{ Form::label('inputEmail', 'Email', array('class' => 'control-label')); }}
                      <div class="controls">
                        {{Form::input('text', 'email', '', array('placeholder' => 'Email', 'id' => 'inputEmail'));}}
                        
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="control-group">
                      {{ Form::label('inputPassword', 'Password', array('class' => 'control-label')); }}
                      <div class="controls">
                        {{ Form::input('password', 'password', '', array('placeholder' => 'Password')); }}
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
                  {{HTML::link('http://zetalabs.cl/', 'Creado por Zetalabs &copy;');}}
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