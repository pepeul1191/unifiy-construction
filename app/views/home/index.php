<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Construction | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo STATIC_URL; ?>favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ek+Mukta%3A400%2C600%2C700%7CNiconne%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/wait-animate.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/animate.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>vendor/jquery-portfolio/portfolio.jquery.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/styles.op-construction.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/custom.css">
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
        var STATIC_URL  = '<?php echo STATIC_URL; ?>';
    </script>
  </head>

  <body>
    <div class="container">
		  <div class="row" id="idiomas">
			  <a href="#/es">Español</a>
        <a href="#/en">English</a>
			</div>
		</div>
    <div id="body-app"></div>
    <script id="template" type="text/x-handlebars-template">
      <main class="g-pt-75 g-pt-90--md">
        <!-- Header -->
        <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance g-z-index-9999"
                data-header-fix-moment="100">
          <div class="u-header__section g-bg-white g-transition-0_3 g-py-12 g-py-20--md"
               data-header-fix-moment-exclude="g-py-20--md"
               data-header-fix-moment-classes="u-shadow-v27 g-py-15--md">
            <nav class="navbar navbar-expand-lg g-py-0">
              <div class="container g-pos-rel">
                <!-- Logo -->
                <a href="#" class="navbar-brand u-header__logo">
                  <img class="u-header__logo-img u-header__logo-img--main g-width-140" src="{{STATIC_URL}}img/logo.png" alt="Image description">
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                  <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-12 g-pt-20 g-pt-0--lg ml-auto">
                    {{#list_menu menu}}{{/list_menu}}
                  </ul>
                </div>
                <!-- End Navigation -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-15 g-right-0" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                  <span class="hamburger hamburger--slider">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                  </span>
                </button>
                <!-- End Responsive Toggle Button -->
              </div>
            </nav>
          </div>
        </header>
        <!-- End Header -->

        <!-- Section Content -->
        <section id="{{secciones.home}}">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 u-bg-overlay g-flex-centered g-height-100vh--md g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_7--after text-md-right g-py-40 g-pr-50--md" style="background-image: url({{STATIC_URL}}img-temp/700x800/img1.jpg);"
                   data-calc-target="#js-header">
                <div class="w-100 u-bg-overlay__inner g-py-100">
                  <h3 class="h4 g-font-weight-700 g-color-primary g-mb-20">We professionally do</h3>

                  <div class="g-brd-left g-brd-left-none--md g-brd-right--md g-brd-7 g-brd-primary g-color-white g-pl-30 g-pr-30 g-pl-0--lg g-mb-30">
                    <h2 class="text-uppercase g-line-height-0_9 g-font-weight-700 g-font-size-40 g-font-size-56--md g-font-size-76--lg mb-0">Interior<br>works
                    </h2>
                  </div>

                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    Read more
                    <i class="fa fa-arrow-left g-color-primary ml-2"></i>
                  </a>
                </div>
              </div>

              <div class="col-md-6 u-bg-overlay g-flex-centered g-height-100vh--md g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_7--after g-py-40 g-pl-50--md" style="background-image: url({{STATIC_URL}}img-temp/700x800/img2.jpg);"
                   data-calc-target="#js-header">
                <div class="w-100 u-bg-overlay__inner g-py-100">
                  <h3 class="h4 g-font-weight-700 g-color-primary g-mb-20">We professionally do</h3>

                  <div class="g-brd-left g-brd-7 g-brd-primary g-color-white g-pl-30 g-mb-30">
                    <h2 class="text-uppercase g-line-height-0_9 g-font-weight-700 g-font-size-40 g-font-size-56--md g-font-size-76--lg mb-0">Exterior<br>works
                    </h2>
                  </div>

                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Read more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section id="{{secciones.about}}">
          <div class="u-bg-overlay g-bg-primary g-bg-primary-opacity-0_8--after g-py-40 g-py-10--lg">
            <div class="container text-center text-lg-left g-color-white">
              <div class="row">
                <div class="col-lg-3 ml-lg-auto">
                  <img class="img-fluid g-width-200 g-width-auto--lg g-mb-30 g-mb-0--lg mx-auto" src="{{STATIC_URL}}img-temp/874x600/img1.png" alt="Image description">
                </div>

                <div class="col-lg-6 u-bg-overlay__inner g-flex-centered">
                  <div class="w-100">
                    <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-10">Need to do calculations?</h2>
                    <p class="g-line-height-1_2 g-font-size-18 g-color-white g-pb-20 g-pb-0--lg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                  </div>
                </div>

                <div class="col-lg-2 u-bg-overlay__inner g-flex-centered g-flex-right--lg">
                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Get a quote
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section id="{{secciones.since}}" class="g-py-80">
          <div class="container">
            <div class="row">
              <div class="col-md-5 g-mb-30 g-mb-0--md">
                <img class="img-fluid g-mb-30" src="{{STATIC_URL}}img-temp/1000x562/img1.jpg" alt="Image description">

                <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-black g-mb-20">Building since 1943</h3>
                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
              </div>

              <div class="col-md-7">
                <div id="aboutAccordion" role="tablist" aria-multiselectable="true">
                  <div class="card g-brd-none">
                    <div id="aboutAccordionHeading1" class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0" role="tab">
                      <a class="d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-2 g-py-15" href="#aboutAccordionBody1" aria-expanded="true" aria-controls="aboutAccordionBody1"
                         data-toggle="collapse"
                         data-parent="#aboutAccordion">
                        <i class="icon-user g-valign-middle g-font-size-23 g-color-primary g-mr-10"></i>
                        Who we are
                        <span class="u-accordion__control-icon g-absolute-centered--y g-right-0 g-color-primary">
                          <i class="fa fa-arrow-right"></i>
                          <i class="fa fa-arrow-down"></i>
                        </span>
                      </a>
                    </div>

                    <div id="aboutAccordionBody1" class="collapse show" role="tabpanel" aria-labelledby="aboutAccordionHeading1">
                      <div class="card-block u-accordion__body g-py-20 px-0">
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Anim pariatur cliche reprehenderit, 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card g-brd-none">
                    <div id="aboutAccordionHeading2" class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0" role="tab">
                      <a class="d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-2 g-py-15 collapsed" href="#aboutAccordionBody2" aria-expanded="false" aria-controls="aboutAccordionBody2"
                         data-toggle="collapse"
                         data-parent="#aboutAccordion">
                        <i class="icon-calendar g-valign-middle g-font-size-23 g-color-primary g-mr-10"></i>
                        Our history
                        <span class="u-accordion__control-icon g-absolute-centered--y g-right-0 g-color-primary">
                          <i class="fa fa-arrow-right"></i>
                          <i class="fa fa-arrow-down"></i>
                        </span>
                      </a>
                    </div>

                    <div id="aboutAccordionBody2" class="collapse" role="tabpanel" aria-labelledby="aboutAccordionHeading2">
                      <div class="card-block u-accordion__body g-py-20 px-0">
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card g-brd-none">
                    <div id="aboutAccordionHeading3" class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0" role="tab">
                      <a class="d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-2 g-py-15 collapsed" href="#aboutAccordionBody3" aria-expanded="false" aria-controls="aboutAccordionBody3"
                         data-toggle="collapse"
                         data-parent="#aboutAccordion">
                        <i class="icon-settings g-valign-middle g-font-size-23 g-color-primary g-mr-10"></i>
                        Our services
                        <span class="u-accordion__control-icon g-absolute-centered--y g-right-0 g-color-primary">
                          <i class="fa fa-arrow-right"></i>
                          <i class="fa fa-arrow-down"></i>
                        </span>
                      </a>
                    </div>

                    <div id="aboutAccordionBody3" class="collapse" role="tabpanel" aria-labelledby="aboutAccordionHeading3">
                      <div class="card-block u-accordion__body g-py-20 px-0">
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card g-brd-none">
                    <div id="aboutAccordionHeading4" class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0" role="tab">
                      <a class="d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-2 g-py-15 collapsed" href="#aboutAccordionBody4" aria-expanded="false" aria-controls="aboutAccordionBody4"
                         data-toggle="collapse"
                         data-parent="#aboutAccordion">
                        <i class="icon-diamond g-valign-middle g-font-size-23 g-color-primary g-mr-10"></i>
                        Our values
                        <span class="u-accordion__control-icon g-absolute-centered--y g-right-0 g-color-primary">
                          <i class="fa fa-arrow-right"></i>
                          <i class="fa fa-arrow-down"></i>
                        </span>
                      </a>
                    </div>

                    <div id="aboutAccordionBody4" class="collapse" role="tabpanel" aria-labelledby="aboutAccordionHeading4">
                      <div class="card-block u-accordion__body g-py-20 px-0">
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. nesciunt laborum eiusmod.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section clas{{BASE_URL}}{{secciones.recentProjects}}="container-fluid px-0">
          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="u-bg-overlay g-parent g-pos-rel g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_6--after g-overflow-hidden" style="background-image: url({{STATIC_URL}}img-temp/900x506/img1.jpg);">
                <img class="img-fluid g-hidden-md-down g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{STATIC_URL}}img-temp/900x506/img1.jpg" alt="Image description">

                <div class="text-center u-bg-overlay__inner g-absolute-centered g-width-90x">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">Building</h3>
                  <p class="g-color-white-opacity-0_7 g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Read more
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="u-bg-overlay g-parent g-pos-rel g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_6--after g-overflow-hidden" style="background-image: url({{STATIC_URL}}img-temp/900x506/img2.jpg);">
                <img class="img-fluid g-hidden-md-down g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{STATIC_URL}}img-temp/900x506/img2.jpg" alt="Image description">

                <div class="text-center u-bg-overlay__inner g-absolute-centered g-width-90x">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">Plumbing works</h3>
                  <p class="g-color-white-opacity-0_7 g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Read more
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="u-bg-overlay g-parent g-pos-rel g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_6--after g-overflow-hidden" style="background-image: url({{STATIC_URL}}img-temp/900x506/img3.jpg);">
                <img class="img-fluid g-hidden-md-down g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{STATIC_URL}}img-temp/900x506/img3.jpg" alt="Image description">

                <div class="text-center u-bg-overlay__inner g-absolute-centered g-width-90x">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">Painting</h3>
                  <p class="g-color-white-opacity-0_7 g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Read more
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="u-bg-overlay g-parent g-pos-rel g-min-height-300 g-bg-img-hero g-bg-black-opacity-0_6--after g-overflow-hidden" style="background-image: url({{STATIC_URL}}img-temp/900x506/img4.jpg);">
                <img class="img-fluid g-hidden-md-down g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{STATIC_URL}}img-temp/900x506/img4.jpg" alt="Image description">

                <div class="text-center u-bg-overlay__inner g-absolute-centered g-width-90x">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">Reconstruction</h3>
                  <p class="g-color-white-opacity-0_7 g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                  <a class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" href="#">
                    <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                    Read more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section id="{{secciones.services}}" class="g-py-80">
          <div class="container">
            <div class="text-uppercase text-center u-heading-v2-4--bottom g-brd-primary g-mb-60">
              <h4 class="g-font-weight-700 g-font-size-12 g-color-primary g-mb-15">Our services</h4>
              <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-black g-mb-minus-10">What we can do</h2>
            </div>

            <div class="row">
              <div class="col-md-4 col-lg-3">
                <!-- Nav tabs -->
                <ul class="nav flex-column text-uppercase u-nav-v3-1 g-font-weight-700 g-font-size-12" role="tablist"
                    data-target="servicesTabs"
                    data-tabs-mobile-type="accordion"
                    data-btn-classes="btn btn-lg btn-block u-btn-darkgray u-btn-inset g-mb-20">
                  <li class="nav-item">
                    <a class="nav-link g-py-17 px-0 active" href="#servicesTabsBody1" role="tab"
                       data-toggle="tab">
                      <i class="fa fa-arrow-right g-color-primary g-mr-7"></i>
                      Project planning
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link g-py-17 px-0" href="#servicesTabsBody2" role="tab"
                       data-toggle="tab">
                      <i class="fa fa-arrow-right g-color-primary g-mr-7"></i>
                      Project documentation
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link g-py-17 px-0" href="#servicesTabsBody3" role="tab"
                       data-toggle="tab">
                      <i class="fa fa-arrow-right g-color-primary g-mr-7"></i>
                      Selection of materials
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link g-py-17 px-0" href="#servicesTabsBody4" role="tab"
                       data-toggle="tab">
                      <i class="fa fa-arrow-right g-color-primary g-mr-7"></i>
                      Exterior design
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link g-py-17 px-0" href="#servicesTabsBody5" role="tab"
                       data-toggle="tab">
                      <i class="fa fa-arrow-right g-color-primary g-mr-7"></i>
                      Interior design
                    </a>
                  </li>
                </ul>
                <!-- End Nav tabs -->
              </div>

              <div class="col-md-8 col-lg-9">
                <!-- Tab panes -->
                <div id="servicesTabs" class="tab-content">
                  <div class="tab-pane fade g-pb-20 g-pb-0--md show active" id="servicesTabsBody1" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img1.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Saepe eveniet ut</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img2.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Voluptate velit esse</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img3.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Temporibus autem quibusdam</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade g-pb-20 g-pb-0--md" id="servicesTabsBody2" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img4.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Saepe eveniet ut</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img5.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Voluptate velit esse</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img6.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Temporibus autem quibusdam</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade g-pb-20 g-pb-0--md" id="servicesTabsBody3" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img7.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Saepe eveniet ut</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img8.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Voluptate velit esse</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img9.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Temporibus autem quibusdam</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade g-pb-20 g-pb-0--md" id="servicesTabsBody4" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img10.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Saepe eveniet ut</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img11.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Voluptate velit esse</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img12.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Temporibus autem quibusdam</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="servicesTabsBody5" role="tabpanel">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img13.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Saepe eveniet ut</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4 g-mb-20 g-mb-0--lg">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img14.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Voluptate velit esse</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>

                      <div class="col-md-6 col-lg-4">
                        <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/600x397/img15.jpg" alt="Image description">

                        <h3 class="text-uppercase g-font-weight-700 g-font-size-default g-color-black g-mb-10">
                          <a class="g-color-black" href="#">Temporibus autem quibusdam</a>
                        </h3>
                        <p class="g-font-size-default g-theme-color-gray-light-v2 mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Tab panes -->
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section id="{{secciones.recentProjects}}" class="u-bg-overlay g-bg-img-hero g-bg-primary-opacity-0_9--after g-py-100" style="background-image: url({{STATIC_URL}}img-temp/1920x1073/img1.jpg);">
          <div class="container u-bg-overlay__inner">
            <div class="text-uppercase text-center u-heading-v2-4--bottom g-brd-white g-mb-60">
              <h4 class="g-font-weight-700 g-font-size-12 g-color-white g-mb-15">Recent projects</h4>
              <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-white g-mb-minus-10">Projects in progress</h2>
            </div>

            <div class="row">
              <div class="col-md-4 g-mb-20 g-mb-0--md">
                <div class="u-heading-v8-1 g-mb-20">
                  <h2 class="h6 text-uppercase u-heading-v8__title g-font-weight-700 g-color-white mb-0">
                    <strong class="g-font-size-11 g-color-white-opacity-0_8 p-0 g-mb-7">Building</strong>
                    <br> Excepteur sint occaecat cupidatat</h2>
                </div>

                <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/1000x565/img1.jpg" alt="Image description">

                <p class="g-line-height-1_8 g-font-size-default g-color-white-opacity-0_8 g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                  <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                  View project
                </a>
              </div>

              <div class="col-md-4 g-mb-20 g-mb-0--md">
                <div class="u-heading-v8-1 g-mb-20">
                  <h2 class="h6 text-uppercase u-heading-v8__title g-font-weight-700 g-color-white mb-0">
                    <strong class="g-font-size-11 g-color-white-opacity-0_8 p-0 g-mb-7">Building</strong>
                    <br> Excepteur sint occaecat cupidatat</h2>
                </div>

                <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/1000x565/img2.jpg" alt="Image description">

                <p class="g-line-height-1_8 g-font-size-default g-color-white-opacity-0_8 g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                  <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                  View project
                </a>
              </div>

              <div class="col-md-4">
                <div class="u-heading-v8-1 g-mb-20">
                  <h2 class="h6 text-uppercase u-heading-v8__title g-font-weight-700 g-color-white mb-0">
                    <strong class="g-font-size-11 g-color-white-opacity-0_8 p-0 g-mb-7">Building</strong>
                    <br> Excepteur sint occaecat cupidatat</h2>
                </div>

                <img class="img-fluid g-mb-20" src="{{STATIC_URL}}img-temp/1000x565/img3.jpg" alt="Image description">

                <p class="g-line-height-1_8 g-font-size-default g-color-white-opacity-0_8 g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                  <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                  View project
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section id="{{secciones.testimonials}}" class="g-theme-bg-gray-light-v7 g-py-100">
          <div class="container text-center g-max-width-750 g-mb-40">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-12 g-color-primary g-mb-15">Testimonials</h4>
              <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-black g-mb-minus-10">What clients say</h2>
            </div>

            <p class="g-color-gray-dark-v5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>

          <div id="carouselCus1" class="js-carousel"
               data-autoplay="true"
               data-infinite="true"
               data-slides-show="4">
            <div class="js-slide g-pt-60 g-pb-5 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img1.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Simone Gomez</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Anderson industry</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img2.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Carla Harris</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">HNN consultation corp</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img3.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Dianna Kimwealth</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Robo construction</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img4.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">John Wellberg</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Solid iron corp</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img5.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Sarah Rahman</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">South Conton architecture</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img6.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Derek Fineman</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Fineman construction company</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img7.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">William Mountcon</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Mountcon brothers</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide g-pt-60 g-px-15">
              <!-- Testimonial Block -->
              <div class="text-center u-shadow-v10 g-bg-white g-pa-0-35-35--sm g-pa-0-20-20">
                <img class="rounded-circle mx-auto g-width-100 g-brd-10 g-brd-around g-theme-brd-gray-light-v7 g-pull-50x-up" src="{{STATIC_URL}}img-temp/500x500/img8.jpg" alt="Image description">

                <h4 class="text-uppercase g-font-weight-700 g-font-size-default mb-0">Cathy Bollak</h4>
                <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-10 g-theme-color-gray-light-v2 g-mb-20">Simon/well company</em>
                <blockquote class="u-blockquote-v7 g-line-height-1_5 g-theme-color-gray-light-v2 g-bg-primary--before mb-0">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</blockquote>
              </div>
              <!-- End Testimonial Block -->
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <section id="{{secciones.clients}}" class="g-bg-img-hero u-bg-overlay g-bg-primary-opacity-0_9--after g-py-80" style="background-image: url({{STATIC_URL}}img-temp/1920x350/img1.jpg);">
          <div class="container u-bg-overlay__inner text-center">
            <div id="carouselCus2" class="js-carousel"
                 data-autoplay="true"
                 data-infinite="true"
                 data-slides-show="6">
              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img1.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img2.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img3.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img4.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img5.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img6.png" alt="Image description">
              </div>

              <div class="js-slide g-mx-15">
                <img class="mx-auto g-width-120" src="{{STATIC_URL}}img-temp/clients/img7.png" alt="Image description">
              </div>
            </div>
          </div>
        </section>

        <!-- Section Content -->
        <section id="{{secciones.gallery}}" class="g-pt-100">
          <div class="container">
            <div class="text-uppercase text-center u-heading-v2-4--bottom g-brd-primary g-mb-60">
              <h4 class="g-font-weight-700 g-font-size-12 g-color-primary g-mb-15">Gallery</h4>
              <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-black g-mb-minus-10">Our works</h2>
            </div>
          </div>
          <ul class="thumbs">
            <li><a href="#thumb1" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb1.jpg')">
                <h4>Web development</h4><span class="description">Get the latest technologies</span></a>
            </li>
            <li>
                <a href="#thumb2" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb2.jpg')"><h4>SEO</h4><span class="description">Fast and reliable performance</span></a>
            </li>
            <li>
                <a href="#thumb3" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb3.jpg')"><h4>Web design</h4><span class="description">Slick and responsive website</span></a>
            </li>
            <li>
                <a href="#thumb4" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb4.jpg')"><h4>Project management</h4><span class="description">Reduce costs and increase productivity</span></a>
            </li>
            <li>
                <a href="#thumb5" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb5.jpg')"><h4>Graphic design</h4><span class="description">Brochures, logos, banners</span></a>
            </li>
            <li>
                <a href="#thumb6" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb6.jpg')"><h4>SEO</h4><span class="description">Nunc condimentum magna</span></a>
            </li>
            <li>
                <a href="#thumb7" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb7.jpg')"><h4>Graphic design</h4><span class="description">Nunc condimentum magna</span></a>
            </li>
            <li>
                <a href="#thumb8" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb8.jpg')"><h4>Graphic design</h4><span class="description">Morbi pellentesque quam vitae</span></a>
            </li>
            <li>
                <a href="#thumb9" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb9.jpg')"><h4>Web development</h4><span class="description">Phasellus ultrices, dolor sit amet dapibus</span></a>
            </li>
            <li>
                <a href="#thumb10" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb10.jpg')"><h4>Web design</h4><span class="description">Vivamus massa dolor, commodo</span></a>
            </li>
            <li>
                <a href="#thumb11" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb11.jpg')"><h4>Graphic design</h4><span class="description">Sed lobortis at nisl non pellentesque</span></a>
            </li>
            <li>
                <a href="#thumb12" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb12.jpg')"><h4>Fron-end development</h4><span class="description">Proin lorem est, rhoncus ullamcorper </span></a>
            </li>
            <li>
                <a href="#thumb13" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb13.jpg')"><h4>Web design</h4><span class="description">Quisque suscipit, est a condimentum</span></a>
            </li>
            <li>
                <a href="#thumb13" class="thumbnail" style="background-image: url('{{STATIC_URL}}vendor/jquery-portfolio/images/thumb14.jpg')"><h4>Web design</h4><span class="description">Aenean condimentum diam nibh</span></a>
            </li>
          </ul>

          <div class="portfolio-content">
            <div id="thumb1">
                <div class="media"><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <h1>Web development</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis nisi sit amet metus venenatis, ut congue turpis aliquet. Pellentesque eget elit sollicitudin, feugiat felis in, ornare diam. Morbi blandit sapien nibh, eu pulvinar tortor luctus nec. Aenean lobortis lacus cursus gravida adipiscing. Praesent in odio porta, placerat felis id, viverra est. Nam magna quam, tincidunt eget augue in, aliquet tristique ipsum.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb2">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>SEO</h1>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Integer a posuere tortor. Praesent malesuada mauris massa, non blandit neque tempus nec. Quisque fermentum nunc non hendrerit tempus.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb3">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Web design</h1>
                <p>Ut condimentum eros bibendum metus lacinia, ac condimentum justo faucibus. Nam nec dui convallis, sodales sapien in, gravida justo. Pellentesque pulvinar massa a nisl iaculis, quis iaculis elit tincidunt.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb4">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Project management</h1>
                <p>Suspendisse cursus commodo elit, at tempus felis hendrerit vel. Cras condimentum aliquam mauris at blandit. Pellentesque ac velit iaculis, lobortis nibh id, ultricies ante. Fusce vel urna justo. Maecenas rhoncus vel ligula eget feugiat. Maecenas blandit risus eros, vel imperdiet augue dapibus vitae.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb6">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb7">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb8">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb9">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb10">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb11">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb12">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb13">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb14">
                <div class="media"><img src="{{STATIC_URL}}vendor/jquery-portfolio/images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </section>

        <!-- Section Content -->
        <section id="{{secciones.career}}" class="g-pt-100">
          <div class="container text-center g-max-width-750 g-mb-60">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-20">
              <h4 class="g-font-weight-700 g-font-size-12 g-color-primary g-mb-15">Career</h4>
              <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-black g-mb-minus-10">Work with us</h2>
            </div>

            <p class="g-color-gray-dark-v5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>

          <div class="u-bg-overlay g-bg-img-hero g-bg-primary-opacity-0_9--after g-py-100" style="background-image: url(<?php echo STATIC_URL; ?>img-temp/1920x1280/img2.jpg);">
            <div class="container u-bg-overlay__inner">
              <div class="js-carousel"
                   data-infinite="true"
                   data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--y--md g-top-0 g-top-50x--md g-width-50 g-height-50 g-font-size-default g-color-primary g-bg-gray-dark-v1 g-opacity-0_8--hover g-transition-0_2 g-transition--ease-in"
                   data-arrow-left-classes="fa fa-arrow-left g-left-0 g-ml-30--md"
                   data-arrow-right-classes="fa fa-arrow-right g-right-0 g-mr-30--md">
                <div class="js-slide">
                  <div class="container text-center g-max-width-700">
                    <h2 class="text-uppercase g-font-weight-700 g-font-size-26 g-color-white g-mb-40">Welder</h2>
                    <p class="g-color-white-opacity-0_8 g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                      <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                      Submit resume
                    </a>
                  </div>
                </div>

                <div class="js-slide">
                  <div class="container text-center g-max-width-700">
                    <h2 class="text-uppercase g-font-weight-700 g-font-size-26 g-color-white g-mb-40">Mollitia</h2>
                    <p class="g-color-white-opacity-0_8 g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                      <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                      Submit resume
                    </a>
                  </div>
                </div>

                <div class="js-slide">
                  <div class="container text-center g-max-width-700">
                    <h2 class="text-uppercase g-font-weight-700 g-font-size-26 g-color-white g-mb-40">Cupiditate</h2>
                    <p class="g-color-white-opacity-0_8 g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                    <a class="btn btn-lg u-btn-darkgray u-btn-inset" href="#">
                      <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                      Submit resume
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Content -->

        <!-- Footer -->
        <footer>
          <div id="{{secciones.contact}}" class="text-center g-color-gray-dark-v1 g-py-100">
            <div class="container">
              <div class="text-uppercase text-center u-heading-v2-4--bottom g-brd-primary g-mb-45">
                <h4 class="g-font-weight-700 g-font-size-12 g-color-primary g-mb-15">Contact us</h4>
                <h2 class="u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-font-size-40 g-color-black g-mb-minus-10">Get in touch</h2>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="text-center g-overflow-hidden">
                    <div class="g-mx-minus-2 g-my-minus-2">
                      <div class="row mx-0">
                        <div class="col-sm-6 g-brd-left g-brd-bottom g-theme-brd-gray-light-v3 g-px-15 g-py-25">
                          <i class="icon-anchor d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
                          <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v2 mb-0">Address</h3>
                          <strong class="g-font-size-11">Sit amet adipiscing</strong>
                        </div>

                        <div class="col-sm-6 g-brd-left g-brd-bottom g-theme-brd-gray-light-v3 g-px-15 g-py-25">
                          <i class="icon-call-in d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
                          <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v2 mb-0">Phone number</h3>
                          <strong class="g-font-size-11">+402 5448 569</strong>
                        </div>

                        <div class="col-sm-6 g-brd-left g-brd-bottom g-theme-brd-gray-light-v3 g-px-15 g-py-25">
                          <i class="icon-line icon-envelope-letter d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
                          <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v2 mb-0">Email</h3>
                          <a class="g-font-size-11 g-color-gray-dark-v1" href="mailto:info@unify.com"><strong>info@unify.com</strong></a>
                        </div>

                        <div class="col-sm-6 g-brd-left g-brd-bottom g-theme-brd-gray-light-v3 g-px-15 g-py-25">
                          <i class="icon-earphones-alt d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
                          <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v2 mb-0">Toll free</h3>
                          <strong class="g-font-size-11">+402 5897 660</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <form>
                    <div class="form-group g-mb-10">
                      <input id="inputGroup1_1" class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v4 g-brd-transparent g-theme-brd-gray-light-v5--focus g-rounded-1 g-px-20 g-py-12" type="text" placeholder="Your name">
                    </div>

                    <div class="form-group g-mb-10">
                      <input id="inputGroup1_2" class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v4 g-brd-transparent g-theme-brd-gray-light-v5--focus g-rounded-1 g-px-20 g-py-12" type="tel" placeholder="Your phone">
                    </div>

                    <div class="form-group g-mb-10">
                      <input id="inputGroup1_3" class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v4 g-brd-transparent g-theme-brd-gray-light-v5--focus g-rounded-1 g-px-20 g-py-12" type="text" placeholder="Subject">
                    </div>

                    <div class="form-group g-mb-40">
                      <textarea id="inputGroup1_4" class="form-control g-resize-none g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-theme-bg-gray-light-v4 g-brd-transparent g-theme-brd-gray-light-v5--focus g-rounded-1 g-px-20 g-py-12" rows="5" placeholder="Message"></textarea>
                    </div>

                    <div class="text-center">
                      <button class="btn btn-lg u-btn-darkgray u-btn-inset mx-2" type="submit">
                        <i class="fa fa-arrow-right g-color-primary mr-2"></i>
                        Send message
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="u-bg-overlay g-bg-img-hero g-color-white g-bg-primary-opacity-0_8--after g-py-100" style="background-image: url(<?php echo STATIC_URL; ?>img-temp/1920x1280/img1.jpg);">
            <div class="container text-center text-md-left u-bg-overlay__inner">
              <div class="row">
                <div class="col-md-4 col-lg-5 d-flex align-items-center g-mb-20 g-mb-0--md">
                  <p class="w-100 g-font-size-13 g-color-white mb-0">
                    © 2017 All right reserved.
                    <a class="g-font-weight-700 g-color-white" href="#"><strong>Unify</strong></a>
                    Development by
                    <a class="g-font-weight-700 g-color-white" href="#"><strong>Htmlstream</strong></a>
                  </p>
                </div>

                <div class="col-md-4 col-lg-2 d-flex text-center align-items-center g-mb-20 g-mb-0--md">
                  <p class="w-100 text-uppercase g-font-size-11 g-color-white mb-0">Support 24/7
                    <strong class="d-block g-font-size-22 g-mt-5">+458 669 221</strong></p>
                </div>

                <div class="col-md-4 col-lg-5 g-flex-centered">
                  <div class="w-100">
                    <ul class="list-inline float-lg-right mx-0 mb-0">
                      <li class="list-inline-item g-mr-10--lg">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-14 g-color-white g-color-primary--hover g-bg-gray-dark-v2 g-bg-white--hover g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li class="list-inline-item g-mr-10--lg">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-14 g-color-white g-color-primary--hover g-bg-gray-dark-v2 g-bg-white--hover g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-pinterest-p"></i></a>
                      </li>
                      <li class="list-inline-item g-mr-10--lg">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-14 g-color-white g-color-primary--hover g-bg-gray-dark-v2 g-bg-white--hover g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li class="list-inline-item g-mr-10--lg">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-14 g-color-white g-color-primary--hover g-bg-gray-dark-v2 g-bg-white--hover g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                      <li class="list-inline-item">
                        <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-14 g-color-white g-color-primary--hover g-bg-gray-dark-v2 g-bg-white--hover g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- End Footer -->

        <a class="js-go-to u-go-to-v1" href="#"
           data-type="fixed"
           data-position='{
             "bottom": 15,
             "right": 15
           }'
           data-offset-top="400"
           data-compensation="#js-header"
           data-show-effect="zoomIn">
          <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
      </main>
    </script>

    <!-- JS Global Compulsory -->
    <script src="<?php echo STATIC_URL; ?>dist/idiomas.min.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/popper.min.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php echo STATIC_URL; ?>vendor/appear.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?php echo STATIC_URL; ?>vendor/jquery-portfolio/portfolio.jquery.js"></script>

    <!-- JS Unify -->
    <script src="<?php echo STATIC_URL; ?>js/hs.core.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.header.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/helpers/hs.hamburgers.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.scroll-nav.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.onscroll-animation.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.tabs.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.carousel.js"></script>
    <script src="<?php echo STATIC_URL; ?>js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="<?php echo STATIC_URL; ?>js/custom.js"></script>
  </body>
</html>
