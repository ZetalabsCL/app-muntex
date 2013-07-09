<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>{{$title}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
	{{ HTML::style('style/bootstrap.css'); }}
  <link href="style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  {{ HTML::style('style/font-awesome.css'); }}
  <!-- jQuery UI -->
  {{ HTML::style('style/jquery-ui.css'); }}
  <!-- Calendar -->
  {{ HTML::style('style/fullcalendar.css'); }}
  <!-- prettyPhoto -->
  {{ HTML::style('style/prettyPhoto.css'); }}
  <!-- Star rating -->
  {{ HTML::style('style/rateit.css'); }}
  <!-- Date picker -->
  {{ HTML::style('style/bootstrap-datetimepicker.min.css'); }}
  <!-- CLEditor -->
  {{ HTML::style('style/jquery.cleditor.css'); }}
  <!-- Uniform -->
  {{ HTML::style('style/uniform.default.css'); }}
  <!-- Bootstrap toggle -->
  {{ HTML::style('style/bootstrap-toggle-buttons.css'); }}
  <!-- Main stylesheet -->
  {{ HTML::style('style/style.css'); }}
  <!-- Widgets stylesheet -->
  {{ HTML::style('style/widgets.css'); }}
  <!-- Responsive style (from Bootstrap) -->
  {{ HTML::style('style/bootstrap-responsive.css'); }}
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- Menu button for smallar screens -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span>Menu</span>
      </a>
      <!-- Site name for smallar screens -->
      <a href="index.html" class="brand hidden-desktop">Test de Interface</a>

      <!-- Navigation starts -->
      <div class="nav-collapse collapse">        

        <ul class="nav">  

          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-important"><i class="icon-cloud-upload"></i></span> Barras de Progreso</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Photo Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress">
                  <div class="bar bar-success" style="width: 40%;"></div>
                </div>

                <hr />

                <!-- Progress bar -->
                <p>Video Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress">
                  <div class="bar bar-important" style="width: 80%;"></div>
                </div>   

                <hr />             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver todo</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-success"><i class="icon-refresh"></i></span> Sync con Server</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "icon-spin" class to rotate icon. -->
                <p><span class="badge badge-success"><i class="icon-refresh icon-spin"></i></span> Syncing Members Lists to Server</p>
                <hr />
                <p><span class="badge badge-warning"><i class="icon-refresh icon-spin"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver todo</a>
                </div>

              </li>
            </ul>
          </li>

        </ul>

        <!-- Search form -->
        <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Buscar">
        </form>

        <!-- Links -->
        <ul class="nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-user"></i> Admin <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-user"></i> Profile</a></li>
              <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
              <li><a href="login.html"><i class="icon-off"></i> Cerrar</a></li>
            </ul>
          </li>
          
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Header starts -->
  <header>
    <div class="container-fluid">
      <div class="row-fluid">

        <!-- Logo section -->
        <div class="span4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="#">Zetalabs<span class="bold">Admin</span></a></h1>
            <p class="meta">something goes in meta area</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="span4">

          <!-- Buttons -->
          <ul class="nav nav-pills">

            <!-- Comment button with number of latest comments count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-comments"></i> Chats <span   class="badge badge-info">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    <!-- Heading - h5 -->
                    <h5><i class="icon-comments"></i> Chats</h5>
                    <!-- Use hr tag to add border -->
                    <hr />
                  </li>
                  <li>
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-envelope-alt"></i> Inbox <span class="badge badge-important">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    <!-- Heading - h5 -->
                    <h5><i class="icon-envelope-alt"></i> Mensajes</h5>
                    <!-- Use hr tag to add border -->
                    <hr />
                  </li>
                  <li>
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hello how are you?</a></h6>
                    <!-- List item para -->
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Today is wonderful?</a></h6>
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-user"></i> Usuarios <span   class="badge badge-success">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    <!-- Heading - h5 -->
                    <h5><i class="icon-user"></i> Usuarios</h5>
                    <!-- Use hr tag to add border -->
                    <hr />
                  </li>
                  <li>
                    <!-- List item heading h6-->
                    <h6><a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 

          </ul>

        </div>

        <!-- Data section -->

        <div class="span4">
          <div class="header-data">

            <!-- Traffic data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with red background -->
                <i class="icon-signal bred"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">7000</a> <em>visits</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="icon-user bblue"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">3000</a> <em>users</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with green background -->
                <i class="icon-money bgreen"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">5000</a> <em>orders</em></p>
              </div>
              <div class="clearfix"></div>
            </div>                        

          </div>
        </div>

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navegacion</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="#"><i class="icon-home"></i> Dashboard</a>
            
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>
          </li>

          <li><a href="#"><i class="icon-compass"></i> Menu 2</a>
            
            <ul>
              <li><a href="#">Submenu 2 #1</a></li>
              <li><a href="#">Submenu 2 #2</a></li>
              <li><a href="#">Submenu 2 #3</a></li>
            </ul>
          </li>

          </ul>
    </div>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="icon-magic"></i> Interface de Usuario</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->

      <!-- Matter -->

      <div class="matter">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span6">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
                    <h5>Button Group</h5>
                    <hr />
                    <div class="btn-group">
                      <button class="btn">Left</button>
                      <button class="btn">Center</button>
                      <button class="btn">Right</button>
                    </div>
                    <hr />

                    <h5>Toggle Button</h5>
                    <div class="toggle-button">
                        <input id="toogle-checkbox" type="checkbox" value="value1" checked="checked">
                    </div>

                    <div class="warning-toggle-button">
                        <input id="toogle-checkbox" type="checkbox" value="value1" checked="checked">
                    </div>  

                    <div class="info-toggle-button">
                        <input id="toogle-checkbox" type="checkbox" value="value1" checked="checked">
                    </div>

                    <div class="success-toggle-button">
                        <input id="toogle-checkbox" type="checkbox" value="value1" checked="checked">
                    </div>     
                    <hr />                                  

                    <h5>Button Dropdown</h5>
                    <hr />
                    <div class="btn-group">
                      <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <hr />

                    <h5>Tabbable</h5>
                    <hr />
                    <div class="tabbable" style="margin-bottom: 18px;">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                        <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
                        <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
                      </ul>
                      <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                        <div class="tab-pane active" id="tab1">
                          <p>I'm in Section 1.</p>
                        </div>
                        <div class="tab-pane" id="tab2">
                          <p>Howdy, I'm in Section 2.</p>
                        </div>
                        <div class="tab-pane" id="tab3">
                          <p>What up girl, this is Section 3.</p>
                        </div>
                      </div>
                    </div>
                    <hr />

                    <h5>Pagination</h5>
                    <hr />
                    <div class="pagination">
                      <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                    <hr />

                    <h5>Labels</h5>
                    <hr />
                    <span class="label">Default</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-important">Important</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-inverse">Inverse</span>
                    <hr />

                    <h5>Badges</h5>
                    <hr />
                    <span class="badge">1</span>
                    <span class="badge badge-success">2</span>
                    <span class="badge badge-warning">3</span>
                    <span class="badge badge-important">4</span>
                    <span class="badge badge-info">5</span>
                    <span class="badge badge-inverse">6</span>
                    <hr />

                    <h5>Alerts</h5>
                    <hr />
                    <div class="alert alert-error">
                      Oh snap! Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-success">
                      Well done! You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info">
                      Heads up! This alert needs your attention, but it's not super important.
                    </div>                                        
                    <hr />


                    <h5>Modal</h5>
                    <hr />
                    <!-- Button to trigger modal -->
                    <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
                     
                    <!-- Modal -->
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Modal header</h3>
                      </div>
                      <div class="modal-body">
                        <p>One fine body…</p>
                      </div>
                      <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                    <hr />


                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  

            </div>
            <div class="span6">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">

                    <h5>Horizontal Slider</h5>
                      <hr />

                    <div id="master4" class="slider-yellow"></div>
                    <div id="master1" class="slider-red"></div>
                    <div id="master3" class="slider-green"></div>
                    <div id="master5" class="slider-orange"></div>
                    <div id="master2" class="slider-blue"></div>
                    <div id="master6" class="slider-violet"></div>
                     
                    <hr />

                    <h5>Progressbar</h5>
                    <hr />

                    <div class="progress progress-info">
                      <div class="bar" style="width: 20%"></div>
                    </div>
                    <div class="progress progress-success">
                      <div class="bar" style="width: 40%"></div>
                    </div>
                    <div class="progress progress-warning">
                      <div class="bar" style="width: 60%"></div>
                    </div>
                    <div class="progress progress-danger">
                      <div class="bar" style="width: 80%"></div>
                    </div>
                    <hr />

                    <h5>Progressbar Animated</h5>
                    <hr />
                    <div class="progress progress-animated">
                      <div class="bar bar-success" data-percentage="100"></div>
                    </div>
                    <div class="progress progress-animated">
                      <div class="bar bar-warning" data-percentage="40"></div>
                    </div>
                    <div class="progress progress-animated">                      
                      <div class="bar bar-danger" data-percentage="20"></div>
                    </div>
                    <div class="progress progress-animated">
                      <div class="bar bar-info" data-percentage="60"></div>
                    </div>

                    <hr />

                    <h5>Vertical Slider</h5>
                    <hr />
                    <div id="eq">
                        <span class="slider-red">88</span>
                        <span class="slider-blue">77</span>
                        <span class="slider-green">55</span>
                        <span class="slider-yellow">33</span>
                        <span class="slider-orange">40</span>
                        <span class="slider-violet">45</span>
                        <div class="clearfix"></div>
                    </div>



                    <hr />

                    <h5>Star Rating</h5>
                    <hr />
                    <div class="rateit" data-rateit-resetable="false"></div>
                    <hr />

                    <h5>Notification</h5>
                    <hr />

                    <a href="#" class="btn noty-alert">Right Alert</a>
                    <a href="#" class="btn noty-success">Top Success</a>
                    <a href="#" class="btn noty-error">Right Error</a>
                    <a href="#" class="btn noty-warning">Bottom Warning</a>
                    <a href="#" class="btn noty-information">Right Alert</a>

                    <hr />

                    <h5>Tabs</h5>
                    <hr />
                    <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                      <li><a href="#profile" data-toggle="tab">Profile</a></li>
                      <li><a href="#cont" data-toggle="tab">Content</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                      </div>
                      <div class="tab-pane fade" id="cont">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                      </div>
                    </div>
                    <hr />

                    <h5>Datepicker</h5>
                    <hr />
                      <div id="datetimepicker1" class="input-append">
                        <input data-format="yyyy-MM-dd" type="text">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                      </div>

                    <hr />  

                    <h5>Timepicker</h5>
                    <hr />
                      <div id="datetimepicker2" class="input-append">
                        <input data-format="hh:mm:ss" type="text">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                      </div>


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

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer>   
<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
{{ HTML::script('js/jquery.js'); }}
{{ HTML::script('js/bootstrap.js'); }}
{{ HTML::script('js/jquery-ui-1.9.2.custom.min.js'); }}
{{ HTML::script('js/fullcalendar.min.js'); }}
{{ HTML::script('js/jquery.rateit.min.js'); }}
{{ HTML::script('js/jquery.prettyPhoto.js'); }}

<!-- jQuery Flot -->
{{ HTML::script('js/excanvas.min.js'); }}
{{ HTML::script('js/jquery.flot.js'); }}
{{ HTML::script('js/jquery.flot.resize.js'); }}
{{ HTML::script('js/jquery.flot.pie.js'); }}
{{ HTML::script('js/jquery.flot.stack.js'); }}

<!-- jQuery Notification - Noty -->
{{ HTML::script('js/jquery.noty.js'); }}
{{ HTML::script('js/themes/default.js'); }}
{{ HTML::script('js/layouts/bottom.js'); }}
{{ HTML::script('js/layouts/topRight.js'); }}
{{ HTML::script('js/layouts/top.js'); }}
<!-- jQuery Notification ends -->
{{ HTML::script('js/sparklines.js'); }}
{{ HTML::script('js/jquery.cleditor.min.js'); }}
{{ HTML::script('js/bootstrap-datetimepicker.min.js'); }}
{{ HTML::script('js/jquery.uniform.min.js'); }}
{{ HTML::script('js/jquery.toggle.buttons.js'); }}
{{ HTML::script('js/filter.js'); }}
{{ HTML::script('js/custom.js'); }}
{{ HTML::script('js/charts.js'); }}

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});

/* Curve chart ends */
</script>

</body>
</html>