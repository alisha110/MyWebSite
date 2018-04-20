<?php
require_once("DB/selectelements.php");
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'>
    <meta name='description' content='arillo is responsive html real estate theme'>
    <meta name='author' content='afriq yasin ramadhan'>
    <link rel='shortcut icon' href='img/WinOOTLogoBig.png'>

    <title>WinOOT</title>

    
    <link href='css/bootstrap.css' rel='stylesheet'>

    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href='css/font-awesome.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/responsive.css' rel='stylesheet'>
<style>
.logobox{
  background: url('img/WinOOTLogoBig.png');
  background-repeat: no-repeat;
  background-size: 100%;
  height:60px;
  width: 70px;
  top: 0px;

}


</style>


</head>

<body id='top'>

<!-- begin:navbar -->
<nav class='navbar navbar-default navbar-fixed-top' role='navigation' >
    

    <div class='container'>
        
        <div class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-top'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='index.php'><span class='logobox'></span></a>
            <a class='navbar-brand' href='index.php'><span>Win<strong>OOT.</strong></span></a>
           

            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class='collapse navbar-collapse' id='navbar-top'>
        
            <ul class='nav navbar-nav navbar-left'>
                <li class='active'><a href='index.html'>صفحه اصلی</a></li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>ویژگی <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
                        <li><a href='search.html'>جستجو</a></li>
                        <li><a href='search_list.html'>جستجو پیشرفته</a></li>
                        <li><a href='category.html'>دسته بندی</a></li>
                        <li><a href='category_list.html'>دسته بندی پیشرفته</a></li>
                        <li><a href='single.html'>تک صفحه ای</a></li>
                    </ul>
                </li>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>صفحه <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
                        <li><a href='blog.html'>آرشیو وبلاگ</a></li>
                        <li><a href='blog_single.html'>وبلاک تک صفحه ای</a></li>
                        <li><a href='about.html'>درباره ما</a></li>
                        <li><a href='contact.html'>تماس با ما</a></li>
                    </ul>
                </li>
                <li><a href='#modal-signin' class='signin' data-toggle='modal' data-target='#modal-signin'>ورود به
                        سایت</a></li>
                <li><a href='#' class='signup' data-toggle='modal' data-target='#modal-signup'>ثبت نام</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<!-- end:navbar -->

<!-- begin:header -->
<div id='header' class='header-slide'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-5'>
                <div class='quick-search'>
                    <div class='row'>
                        <form role='form'>
                            <div class='col-md-6 col-sm-6 col-xs-6'>
                                <div class='form-group'>
                                    <label for='country'>محله</label>
                                    <select class='form-control'>";

reloadregin();
echo "
                                    </select>
                                </div>

                            </div>
                            <!-- break -->
                            <div class='col-md-6 col-sm-6 col-xs-6'>
                                <div class='form-group'>
                                    <label for='location'>نوع ملک</label>
                                    <select class='form-control'>";

reloahometype();
echo "                                        
                                    </select>
                                </div>
                               
                            </div>
                           
                           
                          
                            <div class='col-md-12 col-sm-12'><button   id='btnsearch'  type='button' style='width:100%' class='btn btn-primary'>جستجو</button>    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:header -->

<!-- begin:service -->
<div id='service'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <h2>لورم ایپسوم متن ساختگی با تولید
                    <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</small>
                </h2>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='service-container'>
                    <div class='service-icon'>
                        <a href='#'><i class='fa fa-home'></i></a>
                    </div>
                    <div class='service-content'>
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='service-container'>
                    <div class='service-icon'>
                        <a href='#'><i class='fa fa-thumbs-up'></i></a>
                    </div>
                    <div class='service-content'>
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='service-container'>
                    <div class='service-icon'>
                        <a href='#'><i class='fa fa-umbrella'></i></a>
                    </div>
                    <div class='service-content'>
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='service-container'>
                    <div class='service-icon'>
                        <a href='#'><i class='fa fa-lock'></i></a>
                    </div>
                    <div class='service-content'>
                        <h3>لورم ایپسوم متن ساختگی با تولید </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:service -->

<!-- begin:content -->
<div id='content'>
    <div class='container'>
        <!-- begin:latest -->
        <div class='row'>
            <div class='col-md-12'>
                <div class='heading-title'>
                    <h2>آخرین املاک و مستغلات</h2>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img02.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>مسکونی</h4>
                            <span>$800,000</span>
                        </div>
                        <div class='property-status'>
                            <span>برای فروش</span>
                        </div>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img03.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>Villa</h4>
                            <span>$300,000<small>/year</small></span>
                        </div>
                        <div class='property-status'>
                            <span>برای فروش</span>
                        </div>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                    </div>
                </div>
            </div>


            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img04.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>تجاری</h4>
                            <span>$800,000</span>
                        </div>
                        <div class='property-status'>
                            <span>برای فروش</span>
                        </div>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img05.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>مسکونی</h4>
                            <span>$800,000<small>/year</small></span>
                        </div>
                        <div class='property-status'>
                            <span>برای فروش</span>
                        </div>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:latest -->

        <!-- begin:for-sale -->
        <div class='row'>
            <div class='col-md-12'>
                <div class='heading-title'>
                    <h2>املاک و مستغلات برای فروش</h2>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4 col-sm-4 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img06.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>مسکونی</h4>
                            <span>$800,000</span>
                        </div>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله </p>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                        <span><i class='fa fa-car'></i> 2 Garages</span>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class='col-md-4 col-sm-4 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img07.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>مسکونی</h4>
                            <span>$800,000</span>
                        </div>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله </p>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 6,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 3 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                        <span><i class='fa fa-building-o'></i> 2 Floors</span>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class='col-md-4 col-sm-4 col-xs-12'>
                <div class='property-container'>
                    <div class='property-image'>
                        <img src='img/img08.jpg' alt='arillo real estate theme'>
                        <div class='property-price'>
                            <h4>مسکونی</h4>
                            <span>$800,000</span>
                        </div>
                    </div>
                    <div class='property-content'>
                        <h3><a href='#'>زندگی شهری</a>
                            <small>لورم ایپسوم متن ساختگی</small>
                        </h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله </p>
                    </div>
                    <div class='property-features'>
                        <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup></span>
                        <span><i class='fa fa-hdd-o'></i> 2 Bed</span>
                        <span><i class='fa fa-male'></i> 2 Bath</span>
                        <span><i class='fa fa-building-o'></i> 1 Floor</span>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:for-sale -->

        <!-- begin:for-rent -->
        <div class='row'>
            <div class='col-md-12'>
                <div class='heading-title'>
                    <h2>املاک و مستغلات برای اجاره</h2>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6 col-sm-12 col-xs-12'>
                <div class='property-container'>
                    <div class='property-content-list'>
                        <div class='property-image-list'>
                            <img src='img/img09.jpg' alt='arillo real estate theme'>
                            <div class='property-price'>
                                <h4>ویلا</h4>
                                <span>$30,000<small>/month</small></span>
                            </div>
                            <div class='property-features'>
                                <span><i class='fa fa-home'></i> 7,000 m<sup>2</sup></span>
                                <span><i class='fa fa-hdd-o'></i> 3 Bed</span>
                                <span><i class='fa fa-male'></i> 2 Bath</span>
                                <span><i class='fa fa-building-o'></i> 2 Floors</span>
                                <span><i class='fa fa-car'></i> 2 Garages</span>
                            </div>
                        </div>
                        <div class='property-text'>
                            <h3><a href='#'>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
                                <small>لورم ایپسوم متن ساختگی</small>
                            </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->

            <div class='col-md-6 col-sm-12 col-xs-12'>
                <div class='property-container'>
                    <div class='property-content-list'>
                        <div class='property-text'>
                            <h3><a href='#'>زمین در پارک مرکزی</a>
                                <small>لورم ایپسوم متن ساختگی</small>
                            </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله </p>
                        </div>
                        <div class='property-image-list'>
                            <img src='img/img10.jpg' alt='arillo real estate theme'>
                            <div class='property-price'>
                                <h4>Villa</h4>
                                <span>$30,000<small>/month</small></span>
                            </div>
                            <div class='property-features'>
                                <span><i class='fa fa-home'></i> 7,000 m<sup>2</sup></span>
                                <span><i class='fa fa-hdd-o'></i> 3 Bed</span>
                                <span><i class='fa fa-male'></i> 2 Bath</span>
                                <span><i class='fa fa-building-o'></i> 2 Floors</span>
                                <span><i class='fa fa-car'></i> 2 Garages</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- end:for-rent -->
    </div>
</div>
<!-- end:content -->

<!-- begin:testimony -->
<div id='testimony' style='background-image: url(img/img17.jpg);'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
                <div id='testislider' class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner'>
                        <div class='item active'>
                            <div class='testimony-container'>
                                <div class='testimony-image' style='background: url(img/team01.jpg)'></div>
                                <div class='testimony-content'>
                                    <h3>سجاد باقر زاده</h3>
                                    <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class='item'>
                            <div class='testimony-container'>
                                <div class='testimony-image' style='background: url(img/team02.jpg)'></div>
                                <div class='testimony-content'>
                                    <h3>ایمان مدائنی</h3>
                                    <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class='item'>
                            <div class='testimony-container'>
                                <div class='testimony-image' style='background: url(img/team03.jpg)'></div>
                                <div class='testimony-content'>
                                    <h3>سجاد باقر زاده</h3>
                                    <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class='right carousel-control' href='#testislider' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                    </a>
                    <a class='left carousel-control' href='#testislider' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end:testimony -->

<!-- begin:news -->
<div id='news'>
    <div class='container'>
        <div class='row'>
            <!-- begin:blog -->
            <div class='col-md-4 col-sm-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='heading-title heading-title-sm bg-white'>
                            <h2>آخرین اخبار از وبلاگ</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class='row'>
                    <div class='col-md-12'>
                        <div class='post-container post-noborder'>
                            <div class='post-img post-img-circle' style='background: url(img/img02.jpg);'></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><em>in</em> <a href='#' title='View all posts in berita utama'
                                                         rel='category tag'>لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container post-noborder'>
                            <div class='post-img post-img-circle' style='background: url(img/img03.jpg);'></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><em>in</em> <a href='#' title='View all posts in berita utama'
                                                         rel='category tag'>لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container post-noborder'>
                            <div class='post-img post-img-circle' style='background: url(img/img15.jpg);'></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><em>in</em> <a href='#' title='View all posts in berita utama'
                                                         rel='category tag'>لورم ایپسوم متن ساختگی</a></span>
                                    <span><em>April 22, 2014</em></span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. </a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:blog -->

            <!-- begin:popular -->
            <div class='col-md-4 col-sm-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='heading-title heading-title-sm bg-white'>
                            <h2>محبوب املاک و مستغلات</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class='row'>
                    <div class='col-md-12'>
                        <div class='post-container'>
                            <div class='post-img' style='background: url(img/img12.jpg);'><h3>برای فروش</h3></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><i class='fa fa-home'></i> 7,000 m<sup>2</sup> / </span>
                                    <span><i class='fa fa-hdd-o'></i> 3 Bed / </span>
                                    <span><i class='fa fa-male'></i> 2 Bath / </span>
                                    <span><i class='fa fa-building-o'></i> 2 Floors / </span>
                                    <span><i class='fa fa-car'></i> 2 Garages / </span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>مسکونی - <span>$300,000</span>/year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container'>
                            <div class='post-img' style='background: url(img/img13.jpg);'><h3>برای فروش</h3></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><i class='fa fa-home'></i> 6,700 m<sup>2</sup> / </span>
                                    <span><i class='fa fa-hdd-o'></i> 4 Bed / </span>
                                    <span><i class='fa fa-male'></i> 2 Bath / </span>
                                    <span><i class='fa fa-building-o'></i> 1 Floors / </span>
                                    <span><i class='fa fa-car'></i> 2 Garages / </span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>تجاری - <span>$700,000</span>/year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container post-noborder'>
                            <div class='post-img' style='background: url(img/img14.jpg);'><h3>برای فروش</h3></div>
                            <div class='post-content'>
                                <div class='post-meta'>
                                    <span><i class='fa fa-home'></i> 5,000 m<sup>2</sup> / </span>
                                    <span><i class='fa fa-hdd-o'></i> 3 Bed / </span>
                                    <span><i class='fa fa-male'></i> 2 Bath / </span>
                                    <span><i class='fa fa-building-o'></i> 1 Floors / </span>
                                    <span><i class='fa fa-car'></i> 1 Garages / </span>
                                </div>
                                <div class='heading-title'>
                                    <h2><a href='#'>ویلا - <span>$800,000</span></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:popular -->

            <!-- begin:agent -->
            <div class='col-md-4 col-sm-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='heading-title heading-title-sm bg-white'>
                            <h2>نمایندگی</h2>
                        </div>
                    </div>
                </div>
                <!-- break -->

                <div class='row'>
                    <div class='col-md-12'>

                        <div class='post-container post-noborder'>
                            <div class='post-img' style='background: url(img/team03.jpg);'></div>
                            <div class='post-content list-agent'>
                                <div class='heading-title'>
                                    <h2><a href='#'>ایمان مدائنی</a></h2>
                                </div>
                                <div class='post-meta'>
                                    <span><i class='fa fa-envelope-o'></i> 123.Org</span><br>
                                    <span><i class='fa fa-phone'></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container post-noborder'>
                            <div class='post-img' style='background: url(img/avatar.png);'></div>
                            <div class='post-content list-agent'>
                                <div class='heading-title'>
                                    <h2><a href='#'>علی شعبانلو</a></h2>
                                </div>
                                <div class='post-meta'>
                                    <span><i class='fa fa-envelope-o'></i> ali.Org</span><br>
                                    <span><i class='fa fa-phone'></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                        <div class='post-container post-noborder'>
                            <div class='post-img' style='background: url(img/team01.jpg);'></div>
                            <div class='post-content list-agent'>
                                <div class='heading-title'>
                                    <h2><a href='#'>ایمان مدائنی</a></h2>
                                </div>
                                <div class='post-meta'>
                                    <span><i class='fa fa-envelope-o'></i> 9999.Org</span><br>
                                    <span><i class='fa fa-phone'></i> +12345678</span>
                                </div>
                            </div>
                        </div>
                        <!-- break -->

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:agent -->
        </div>
    </div>
</div>
<!-- end:news -->

<!-- begin:subscribe -->
<div id='subscribe'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-5 col-md-offset-2 col-sm-8 col-xs-12'>
                <h3>دریافت خبرنامه</h3>
            </div>
            <div class='col-md-3 col-sm-4 col-xs-12'>
                <div class='input-group'>
                    <input type='text' class='form-control input-lg' placeholder='Enter your mail'>
                    <span class='input-group-btn'>
                <button class='btn btn-primary btn-lg' type='submit'><i class='fa fa-envelope'></i></button>
              </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:subscribe -->

<!-- begin:partner -->
<div id='partner'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='heading-title bg-white'>
                    <h2>مشارکت ما</h2>
                </div>
            </div>
        </div>
        <!-- break -->

        <div class='row'>
            <div class='col-md-12'>
                <div class='jcarousel-wrapper'>
                    <div class='jcarousel'>
                        <ul>
                            <li><a href='#'><img src='img/img01.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                            <li><a href='#'><img src='img/img02.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                            <li><a href='#'><img src='img/img03.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                            <li><a href='#'><img src='img/img04.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                            <li><a href='#'><img src='img/img05.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                            <li><a href='#'><img src='img/img06.jpg'
                                                 alt='partner of arillo responsive real estate theme'></a></li>
                        </ul>
                    </div>
                    <a href='#' class='jcarousel-control-prev'><i class='fa fa-angle-left'></i></a>
                    <a href='#' class='jcarousel-control-next'><i class='fa fa-angle-right'></i></a>

                </div>
            </div>
        </div>
    </div>
</div>

<div id='footer'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='widget'>
                    <h3>املاک و مستغلات ثبت شده</h3>
                    <ul class='list-unstyled'>
                        <li><a href='#'>Apartments</a></li>
                        <li><a href='#'>Office</a></li>
                        <li><a href='#'>Bungalows</a></li>
                        <li><a href='#'>Serviced Residence</a></li>
                        <li><a href='#'>Villa</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='widget'>
                    <h3>لورم ایپسوم متن ساختگی</h3>
                    <ul class='list-unstyled'>
                        <li><a href='#'>Lorenso</a></li>
                        <li><a href='#'>Bardiman</a></li>
                        <li><a href='#'>Tarjono noto boto limo</a></li>
                        <li><a href='#'>Surti</a></li>
                        <li><a href='#'>Ngatinem</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='widget'>
                    <h3>ویژگی ها</h3>
                    <ul class='list-unstyled'>
                        <li><a href='#'>My Account</a></li>
                        <li><a href='#'>How To</a></li>
                        <li><a href='#'>Market Trend</a></li>
                        <li><a href='#'>Android App</a></li>
                        <li><a href='#'>IOS App</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            <div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='widget'>
                    <h2>Arillo.</h2>
                    <address>
                        <strong>موضوع املاک و مستغلات.</strong><br>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم <br>
                        <br>
                        Telp. : +98-123456789<br>
                        Email : Ali.sha.11080@gmail.com
                    </address>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- break -->

        <!-- begin:copyleft -->
        <div class='row'>
            <div class='col-md-12 copyleft'>
                <p>این قالب دارای ویژگی های زیر می باشد</p>

                <a href='#top' class='btn btn-primary scroltop'><i class='fa fa-angle-up'></i></a>
                <ul class='list-inline social-links'>
                    <li><a href='#' class='icon-twitter' rel='tooltip' title='' data-placement='bottom'
                           data-original-title='Twitter'><i class='fa fa-twitter'></i></a></li>
                    <li><a href='#' class='icon-facebook' rel='tooltip' title='' data-placement='bottom'
                           data-original-title='Facebook'><i class='fa fa-facebook'></i></a></li>
                    <li><a href='#' class='icon-gplus' rel='tooltip' title='' data-placement='bottom'
                           data-original-title='Gplus'><i class='fa fa-google-plus'></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end:copyleft -->
        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    </div>
</div>
<!-- end:footer -->

<!-- begin:modal-signin -->
<div class='modal fade' id='modal-signin' tabindex='-1' role='dialog' aria-labelledby='modal-signin' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title'>Sign in</h4>
            </div>
            <div class='modal-body'>
                <form role='form'>
                    <div class='form-group'>
                        <label for='emailAddress'>ایمیل</label>
                        <input type='email' class='form-control input-lg' placeholder='ایمیل'>
                    </div>
                    <div class='form-group'>
                        <label for='password'>کلمه عبور</label>
                        <input type='password' class='form-control input-lg' placeholder='کلمه عبور'>
                    </div>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox' name='forget'> مرا بخاطر بسپار
                        </label>
                    </div>
                </form>
            </div>
            <div class='modal-footer'>
                <p>آیا ثبت نام نکرده اید ? <a href='#modal-signup' data-toggle='modal' data-target='#modal-signup'>ثبت
                        نام</a></p>
                <input type='submit' class='btn btn-primary btn-block btn-lg' value='ورود به سایت'>
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signin -->

<!-- begin:modal-signup -->
<div class='modal fade' id='modal-signup' tabindex='-1' role='dialog' aria-labelledby='modal-signup' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title'>ثبت نام</h4>
            </div>
            <div class='modal-body'>
                <form role='form'>
                    <div class='form-group'>
                        <input type='ایمیل' class='form-control input-lg' placeholder='ایمیل'>
                    </div>
                    <div class='form-group'>
                        <input type='کلمه عبور' class='form-control input-lg' placeholder='کلمه عبور'>
                    </div>
                    <div class='form-group'>
                        <input type='تکرار کلمه عبور' class='form-control input-lg' placeholder='تکرار کلمه عبور'>
                    </div>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox' name='agree'> آیا با قوانین <a href='#'>سایت ما موافق هستید؟</a>
                        </label>
                    </div>
                </form>
            </div>
            <div class='modal-footer'>
                <p>آیا ثبت نام کرده اید؟ <a href='#modal-signin' data-toggle='modal' data-target='#modal-signin'>ورود به
                        سایت.</a></p>
                <input type='submit' class='btn btn-primary btn-block btn-lg' value='ثبت نام'>
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signup -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='js/jquery.js'></script>
<script src='js/bootstrap.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;language=en'></script>
<script src='js/gmap3.min.js'></script>
<script src='js/jquery.easing.js'></script>
<script src='js/jquery.jcarousel.min.js'></script>
<script src='js/imagesloaded.pkgd.min.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/jquery.backstretch.js'></script>
<script src='js/jquery.nicescroll.min.js'></script>
<script src='js/script.js'></script>
<script>
$('#btnsearch').click(function(){
window.location.replace('search_list.html');

});



</script>

</body>
</html>

";
?>



