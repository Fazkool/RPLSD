<!DOCTYPE html>
<html>
  <head>
    <title>Bandung Culinary Center</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>

    <!-- / START - page related stylesheets [optional] -->
    
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-red fixed-header fixed-navigation'>
    <header>
      <nav class='navbar navbar-default navbar-fixed-top'>
        <a class='toggle-nav btn pull-left' href='#'>
          <i class='icon-reorder'></i>
        </a>
		
		<a class='navbar-brand' href='index.html' style="margin-left:20px;">
          <!--<img width="81" height="21" class="logo" alt="Flatty" src="" />
          <img width="21" height="21" class="logo-xs" alt="Flatty" src="" /> -->
		  BANDUNG CULINARY CENTER
        </a>
      </nav>
    </header>
    <div id='wrapper'>
      <div id='main-nav-bg'></div>
      <nav class='main-nav-fixed' id='main-nav'>
        <div class='navigation'>
          <div class='search'>
            <form action='search_results.html' method='get'>
              <div class='search-wrapper'>
                <input value="" class="search-query form-control" placeholder="Search..." autocomplete="off" name="q" type="text" />
                <button class='btn btn-link icon-search' name='button' type='submit'></button>
              </div>
            </form>
          </div>
          <ul class='nav nav-stacked'>
            <li class=''>
              <a href='index.html'>
                <i class='icon-shopping-cart'></i>
                <span>Pesan</span>
              </a>
            </li>

            <li class=''>
              <a href='buttons_and_icons.html'>
                <i class='icon-search'></i>
                <span>Cari Restaurant</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-edit'></i>
                      <span>Form Pengiriman</span>
                    </h1>
                  </div>
                </div>
              </div>
              <div class='group-header'>
                <div class='row'>
                  <div class='col-sm-6 col-sm-offset-3'>
                    <div class='text-center'>
                      <h2>Detail Pengiriman</h2>
                      <small class='text-muted'>Masukkan informasi data diri Anda untuk proses pengiriman</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='box-header blue-background'>
                      <div class='title'>
                        <div class='icon-edit'></div>
						Data Diri
                      </div>
                      <div class='actions'>                        
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class='box-content'>
                      <form class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" />
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='nama'>Nama Lengkap</label>
                        <div class='col-md-5'>
                          <input class='form-control' id='nama' name="nama" type='text'>
                        </div>
                      </div>
                      <hr class="hr-normal">
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='alamat'>Alamat Lengkap</label>
                        <div class='col-md-5'>
                          <input class='form-control' id='alamat' name="alamat" type='text'>
                        </div>
                      </div>
                      <hr class='hr-normal'>
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='kotamadya'>Kotamadya</label>
                        <div class='col-md-5'>
                          <select class='form-control' id='kotamadya' name="kotamadya">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <hr class='hr-normal'>
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='kelurahan'>Kelurahan</label>
                        <div class='col-md-5'>
                          <select class='form-control' id='kelurahan' name="kelurahan">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <hr class='hr-normal'>
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='outlet'>Outlet Terdekat</label>
                        <div class='col-md-5'>
                          <select class='form-control' id='outlet' name="outlet">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <hr class="hr-normal">
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='telepon'>Nomor Telepon</label>
                        <div class='col-md-5'>
                          <input class='form-control' id='telepon' name="telepon" type='number' min='10' max='12'>
                        </div>
                      </div>
                      <hr class="hr-normal">
                      <div class='form-group'>
                        <label class='col-md-2 control-label' for='teleponalt'>Nomor Telepon Alternatif</label>
                        <div class='col-md-5'>
                          <input class='form-control' id='teleponalt' name="teleponalt" type='number' min='10' max='12'>
                        </div>
                      </div>
                      
                      <div class='form-actions form-actions-padding-sm'>
                        <div class='row'>
                          <div class='col-md-10 col-md-offset-2'>
                            <button class='btn btn-primary' type='submit'>
                              Pesan !
                            </button>
                            <button class='btn' type='submit'>Cancel</button>
                          </div>
                        </div>
                      </div>
                      </form>
              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer id='footer'>
            <div class='footer-wrapper'>
              <div class='row'>
                <div class='col-sm-6 text'>
                  Copyright © 2014 Powered by <b>Octo-Engine</b>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>
    <!-- / jquery [required] -->
    <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="assets/javascripts/demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    
    <!-- / END - page related files and scripts [optional] -->
  </body>
</html>
