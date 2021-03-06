
<html>
  <head>
    <title>Form styles and features | Flatty - Flat Administration Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="assets/stylesheets/plugins/datatables/bootstrap-datatable.css" media="all" rel="stylesheet" type="text/css" />
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
  <?php 
		include "connect.php"; 
		$result = mysql_query("SELECT * FROM restaurant,menu where menu.resto_id=restaurant.id and menu.resto_id=".$_GET['id']);
	?>
  <body class='contrast-red fixed-header fixed-navigation '>
    <header>
      <nav class='navbar navbar-default navbar-fixed-top'>
        <a class='navbar-brand' href='index.html' style="margin-top: 10px;">
          <img width="81" height="21" class="logo" alt="Flatty" src="assets/images/logo.svg" />
          <img width="21" height="21" class="logo-xs" alt="Flatty" src="assets/images/logo_xs.svg" />
        </a>
        <a class='toggle-nav btn pull-left' href='#'>
          <i class='icon-reorder'></i>
        </a>
       
        <form action='search_results.html' class='navbar-form navbar-right hidden-xs' method='get'>
          <button class='btn btn-link icon-search' name='button' type='submit'></button>
          <div class='form-group'>
            <input value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" name="q" type="text" />
          </div>
        </form>
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
              <a href='index.php'>
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
                      <i class='icon-table'></i>
                      <span>Tables</span>
                    </h1>
                    <div class='pull-right'>
                      <ul class='breadcrumb'>
                        <li>
                          <a href='index.html'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li class='active'>Tables</li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box bordered-box blue-border' style='margin-bottom:0;'>
                    <div class='box-header red-background'>
                      <div class='title'>MENU <?php echo $_GET['nama']?></div>
                      <div class='actions'>
                        <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                        </a>
                        
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class='box-content box-no-padding'>
                      <div class='responsive-table'>
                        <div class='scrollable-area'>
                          <table class='table' style='margin-bottom:0;'>
                            <!--<thead>
                              <tr>
                                <th>
                                  Name
                                </th>
                                <th>
                                  E-mail
                                </th>
                                <th>
                                  Status
                                </th>
                                <th></th>
                              </tr>
                            </thead> -->
                            <tbody>
								<?php 
									while ($row = mysql_fetch_assoc($result)){
								?>
                             <tr>
								<td>
									<img src="<?php echo $row['gambar'] ?>" height="100" width = "100">
								</td>
								<td style='white-space:initial;'>
									<div><?php echo $row['nama'] ?></div>
									<br>
									<div><b>Deskripsi : </b><?php echo $row['deskripsi'] ?></div>
									<br>
									<div><b>Harga : </b>Rp <?php echo $row['harga'] ?></div>
									<?php if(isset($promo['row'])) {?><div>Promo : <?php echo $row['promo'] ?></div> <?php } ?>

									<?php
										//SEARCHING RATING
									$rate_result = mysql_query("SELECT AVG(rate) AS rate FROM `testimon` WHERE resto_id='". $row['id'] ."'");
									$rate_row = mysql_fetch_assoc($rate_result);
									if ($rate_row['rate']){
									$rate = $rate_row['rate'];
									}else{
									$rate = 0;
									}
									?>
									<div> <br></div>
									<div>
                        <div class='col-md-2'>
                          <input class='form-control' id='testi' name="testi" type='text' placeholder='Jumlah'>
                        </div>
										    <div class='col-md-5'>
                          <input class='form-control' id='testi' name="testi" type='text' placeholder='Pesanan Kusus'>
                        </div>
										
									</div>
									<div></div>
							</td>
							</tr>
                   
                                
                               
                               
                            
								<?php
								}
								?>
                            </tbody>
                          </table>

                        </div>
                      </div>
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
                  Copyright � 2013 Your Project Name
                </div>
                <div class='col-sm-6 buttons'>
<a href="kirim.php" class='btn btn-success'>Purchase</a>
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
    <script src="assets/javascripts/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/datatables/dataTables.overrides.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->
  </body>
</html>
