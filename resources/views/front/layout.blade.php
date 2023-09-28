
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 15:48:09 GMT -->
<head>

  <title>FreshCart - eCommerce HTML Template</title>
  @vite(['resources/assets/libs/slick-carousel/slick/slick.css'])
@vite(['resources/assets/libs/slick-carousel/slick/slick-theme.css'])
@vite(['resources/assets/libs/tiny-slider/dist/tiny-slider.css'])
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta content="Codescandy" name="author">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
@vite('resources/assets/libs/bootstrap-icons/font/bootstrap-icons.css')
@vite('resources/assets/libs/feather-webfont/dist/feather-icons.css')
@vite('resources/assets/libs/simplebar/dist/simplebar.min.css')



<!-- Theme CSS -->
@vite('resources/assets/css/theme.min.css')

</head>

<body>

  <div class="border-bottom ">
  
    <div class="bg-light py-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 text-center text-md-start"><span> Super Value Deals - Save more with
              coupons</span>
          </div>
          <div class="col-6 text-end d-none d-md-block">
            <div class="dropdown">
              <a class="dropdown-toggle text-decoration-none  text-muted" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-1">
                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#selectedlang)">
                      <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                      <path
                        d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                        fill="white" />
                      <path
                        d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                        fill="#C8102E" />
                      <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white" />
                      <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E" />
                    </g>
                    <defs>
                      <clipPath id="selectedlang">
                        <rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>English
              </a>

              <ul class="dropdown-menu">

                <li><a class="dropdown-item " href="#"><span class="me-2">

                      <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_5543_19744)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H16V12.5H0V0.5Z" fill="white" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H5.3325V12.5H0V0.5Z" fill="#002654" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.668 0.5H16.0005V12.5H10.668V0.5Z"
                            fill="#CE1126" />
                        </g>
                        <defs>
                          <clipPath id="clip0_5543_19744">
                            <rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
                          </clipPath>
                        </defs>
                      </svg>

                    </span>Français</a></li>
                <li><a class="dropdown-item " href="#"><span class="me-2">

                      <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_5543_19751)">
                          <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
                          <path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
                          <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
                        </g>
                        <defs>
                          <clipPath id="clip0_5543_19751">
                            <rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
                          </clipPath>
                        </defs>
                      </svg>

                    </span>Deutsch</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-4 pt-lg-3 pb-lg-0">
      <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
          <div class="col-xxl-2 col-lg-3">
            <a class="navbar-brand d-none d-lg-block" href="index.html">
            <img src="{{ Vite::asset('resources/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3">

            </a>
            <div class="d-flex justify-content-between w-100 d-lg-none">
              <a class="navbar-brand" href="index.html">
              <img src="{{ asset('resources/assets/images/logo/freshcart-logo.svg') }}" alt="eCommerce HTML Template">

              </a>

              <div class="d-flex align-items-center lh-1">

                <div class="list-inline me-4">
                  <div class="list-inline-item">

                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </a>
                  </div>
                  <div class="list-inline-item">

                    <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                      href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                      </svg>
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        1
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </a>
                  </div>

                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                    <path
                      d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </button>

              </div>
            </div>

          </div>
          <div class="col-xxl-6 col-lg-5 d-none d-lg-block">

            <form action="#">
              <div class="input-group ">
                <input class="form-control rounded" type="search" placeholder="Search for products">
                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
              </div>

            </form>
          </div>
          <div class="col-md-2 col-xxl-3 d-none d-lg-block">
            <!-- Button trigger modal -->
            <button type="button" class="btn  btn-outline-gray-400 text-muted" data-bs-toggle="modal"
              data-bs-target="#locationModal">
              <i class="feather-icon icon-map-pin me-2"></i>Location
            </button>


          </div>
          <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">

            <div class="list-inline">
              <div class="list-inline-item">

                <a href="pages/shop-wishlist.html" class="text-muted position-relative">

                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                  </svg>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    5
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a></div>
              <div class="list-inline-item">

                <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </a></div>
              <div class="list-inline-item">

                <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                  href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    1
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>

              </div>





            </div>
          </div>
        </div>
      </div>
    </div>

 
  <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-4">
    <div class="container px-0 px-md-3">
      <div class="dropdown me-3 d-none d-lg-block">
        <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <span class="me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg></span> All Departments
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>
          <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
        </ul>
      </div>
      <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
        <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
          <a href="index.html">
          <img src="{{ Vite::asset('resources/assets/images/logo/freshcart-logo.svg') }}" >

         </a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="d-block d-lg-none my-4">
          <form action="#">
            <div class="input-group ">
              <input class="form-control rounded" type="search" placeholder="Search for products">
              <span class="input-group-append">
                <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                </button>
              </span>
            </div>
          </form>
          <div class="mt-2">
            <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal"
              data-bs-target="#locationModal">
              <i class="feather-icon icon-map-pin me-2"></i>Pick Location
            </button>
          </div>
        </div>
        <div class="d-block d-lg-none mb-4">
          <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse"
            href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg></span> All Departments
          </a>
          <div class="collapse mt-2" id="collapseExample">
            <div class="card card-body">
              <ul class="mb-0 list-unstyled">
                <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block">
          <ul class="navbar-nav align-items-center ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Home
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                <li><a class="dropdown-item" href="pages/index-2.html">Home 2</a></li>
                <li><a class="dropdown-item" href="pages/index-3.html">Home 3</a></li>
                <li><a class="dropdown-item" href="pages/index-4.html">Home 4 <span
                      class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/shop-grid.html">Shop Grid - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid-3-column.html">Shop Grid - 3 column</a>
                </li>
                <li><a class="dropdown-item" href="pages/shop-list.html">Shop List - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-filter.html">Shop - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-fullwidth.html">Shop Wide</a></li>
                <li><a class="dropdown-item" href="pages/shop-single.html">Shop Single</a></li>
                <li><a class="dropdown-item" href="pages/shop-single-2.html">Shop Single v2<span
                      class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                <li><a class="dropdown-item" href="pages/shop-wishlist.html">Shop Wishlist</a></li>
                <li><a class="dropdown-item" href="pages/shop-cart.html">Shop Cart</a></li>
                <li><a class="dropdown-item" href="pages/shop-checkout.html">Shop Checkout</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Stores
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/store-list.html">Store List</a></li>
                <li><a class="dropdown-item" href="pages/store-grid.html">Store Grid</a></li>
                <li><a class="dropdown-item" href="pages/store-single.html">Store Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown dropdown-fullwidth">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Mega menu
              </a>
              <div class=" dropdown-menu pb-0">
                <div class="row p-2 p-lg-4">
                  <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                    <h6 class="text-primary ps-3">Dairy, Bread & Eggs</h6>
                    <a class="dropdown-item" href="pages/shop-grid.html">Butter</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Curd & Yogurt</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Eggs</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Buns & Bakery</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Cheese</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Condensed Milk</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Dairy Products</a>
                  </div>
                  <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                    <h6 class="text-primary ps-3">Breakfast & Instant Food</h6>
                    <a class="dropdown-item" href="pages/shop-grid.html">Breakfast Cereal</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Noodles, Pasta & Soup</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Frozen Veg Snacks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Frozen Non-Veg Snacks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Vermicelli</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Instant Mixes</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Batter</a>
                    <a class="dropdown-item" href="pages/shop-grid.html"> Fruit and Juices</a>
                  </div>
                  <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                    <h6 class="text-primary ps-3">Cold Drinks & Juices</h6>
                    <a class="dropdown-item" href="pages/shop-grid.html">Soft Drinks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Fruit Juices</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Coldpress</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Water & Ice Cubes</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Soda & Mixers</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Health Drinks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Herbal Drinks</a>
                    <a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a>
                  </div>
                  <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                    <div class="card border-0">
                    <img src="{{ Vite::asset('resources/assets/images/banner/menu-banner.jpg') }}" alt="eCommerce HTML Template" class="img-fluid">

                      <div class="position-absolute ps-6 mt-8">
                        <h5 class=" mb-0 ">Dont miss this <br>offer today.</h5>
                        <a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    My Account
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                    <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                    <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                    <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a>
                    </li>
                    <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="dashboard/index.html">
                Dashboard
              </a>
            </li>
            <li class="nav-item dropdown dropdown-flyout">
              <a class="nav-link" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Docs
              </a>
              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                <a class="dropdown-item align-items-start" href="docs/index.html">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                      <path
                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                      <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>
                  </div>
                  <div class="ms-3 lh-1">
                    <h6 class="mb-1">Documentations</h6>
                    <p class="mb-0 small">
                      Browse the all documentation
                    </p>
                  </div>
                </a>
                <a class="dropdown-item align-items-start" href="docs/changelog.html">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-layers text-primary" viewBox="0 0 16 16">
                      <path
                        d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                    </svg>
                  </div>
                  <div class="ms-3 lh-1">
                    <h6 class="mb-1">
                      Changelog <span class="text-primary ms-1">v1.1.0</span>
                    </h6>
                    <p class="mb-0 small">See what's new</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="d-block d-lg-none h-100" data-simplebar="">
          <ul class="navbar-nav ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Home
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                <li><a class="dropdown-item" href="pages/index-2.html">Home 2</a></li>
                <li><a class="dropdown-item" href="pages/index-3.html">Home 3</a></li>
                <li><a class="dropdown-item" href="pages/index-4.html">Home 4 <span
                      class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/shop-grid.html">Shop Grid - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid-3-column.html">Shop Grid - 3 column</a>
                </li>
                <li><a class="dropdown-item" href="pages/shop-list.html">Shop List - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-filter.html">Shop - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-fullwidth.html">Shop Wide</a></li>
                <li><a class="dropdown-item" href="pages/shop-single.html">Shop Single</a></li>
                <li><a class="dropdown-item" href="pages/shop-single-2.html">Shop Single v2<span
                      class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                <li><a class="dropdown-item" href="pages/shop-wishlist.html">Shop Wishlist</a></li>
                <li><a class="dropdown-item" href="pages/shop-cart.html">Shop Cart</a></li>
                <li><a class="dropdown-item" href="pages/shop-checkout.html">Shop Checkout</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Stores
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/store-list.html">Store List</a></li>
                <li><a class="dropdown-item" href="pages/store-grid.html">Store Grid</a></li>
                <li><a class="dropdown-item" href="pages/store-single.html">Store Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Mega Menu
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Dairy, Bread & Eggs
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Curd & Yogurt</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Eggs</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Buns & Bakery</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Cheese</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Condensed Milk</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy Products</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Vegetables & Fruits
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Vegetables</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Exotics & Premium</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fresh Sprouts</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Frozen Veg</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Cold Drinks & Juices
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Soft Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruit Juices</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Coldpress</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Soda & Mixers</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Health Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Herbal Drinks</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    My Account
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                    <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                    <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                    <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a>
                    </li>
                    <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="dashboard/index.html">
                Dashboard
              </a>
            </li>
            <li class="nav-item dropdown dropdown-flyout">
              <a class="nav-link" href="#" id="navbarDropdownDocs2" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Docs
              </a>
              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs2">
                <a class="dropdown-item align-items-start" href="docs/index.html">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                      <path
                        d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                      <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>
                  </div>
                  <div class="ms-3 lh-1">
                    <h6 class="mb-1">Documentations</h6>
                    <p class="mb-0 small">
                      Browse the all documentation
                    </p>
                  </div>
                </a>
                <a class="dropdown-item align-items-start" href="docs/changelog.html">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      class="bi bi-layers text-primary" viewBox="0 0 16 16">
                      <path
                        d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                    </svg>
                  </div>
                  <div class="ms-3 lh-1">
                    <h6 class="mb-1">
                      Changelog <span class="text-primary ms-1">v1.1.0</span>
                    </h6>
                    <p class="mb-0 small">See what's new</p>
                  </div>
                </a>
              </div>

            </li>
          </ul>
        </div>
      </div>
    </div>

  </nav>
</div>
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
          </div>

          <div class="mb-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
            <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a
                href="#!">Privacy Policy</a></small>
          </div>

          <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer border-0 justify-content-center">

        Already have an account? <a href="#">Sign in</a>
      </div>
    </div>
  </div>
</div>



<!-- Shop Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom">
    <div class="text-start">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
      <small>Location in 382480</small>
    </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="">
      <!-- alert -->
      <div class="alert alert-danger p-2" role="alert">
        You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
      </div>
      <ul class="list-group list-group-flush">
        <!-- list group -->
        <li class="list-group-item py-3 ps-0 border-top">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
            <img src="{{ Vite::asset('resources/assets/images/products/product-img-1.jpg') }}" alt="Ecommerce" class="img-fluid">
</div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
              </a>
              <span><small class="text-muted">.98 / lb</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
              <div class="input-group input-spinner  ">
                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                <input type="number" step="1" max="10" value="1" name="quantity"
                  class="quantity-field form-control-sm form-input   ">
                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
              </div>

            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$5.00</span>

            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
<img src="{{ Vite::asset('resources/assets/images/products/product-img-2.jpg') }}" alt="Ecommerce" class="img-fluid">
</div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">NutriChoice Digestive </h6>
              </a>
              <span><small class="text-muted">250g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
              <div class="input-group input-spinner  ">
                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                <input type="number" step="1" max="10" value="1" name="quantity"
                  class="quantity-field form-control-sm form-input   ">
                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
              </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold text-danger">$20.00</span>
              <div class="text-decoration-line-through text-muted small">$26.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
            <img src="{{ Vite::asset('resources/assets/images/products/product-img-3.jpg') }}" alt="Ecommerce" class="img-fluid">

              <!-- img --> </div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
              </a>
              <span><small class="text-muted">1 kg</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
              <div class="input-group input-spinner  ">
                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                <input type="number" step="1" max="10" value="1" name="quantity"
                  class="quantity-field form-control-sm form-input   ">
                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
              </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$20.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="{{ Vite::asset('resources/assets/images/products/product-img-4.jpg') }}" alt="Ecommerce" class="img-fluid">
</div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Onion Flavour Potato</h6>
              </a>
              <span><small class="text-muted">250g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
              <div class="input-group input-spinner  ">
                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                <input type="number" step="1" max="10" value="1" name="quantity"
                  class="quantity-field form-control-sm form-input   ">
                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
              </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$20.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0 border-bottom">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="{{ Vite::asset('resources/assets/images/products/product-img-5.jpg') }}" alt="Ecommerce" class="img-fluid">
</div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Salted Instant Popcorn </h6>
              </a>
              <span><small class="text-muted">100g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
              <div class="input-group input-spinner  ">
                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                <input type="number" step="1" max="10" value="1" name="quantity"
                  class="quantity-field form-control-sm form-input   ">
                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
              </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$25.00</div>
            </div>
          </div>

        </li>

      </ul>
      <!-- btn -->
      <div class="d-flex justify-content-between mt-4">
        <a href="#!" class="btn btn-primary">Continue Shopping</a>
        <a href="#!" class="btn btn-dark">Update Cart</a>
      </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body p-6">
        <div class="d-flex justify-content-between align-items-start ">
          <div>
            <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
            <p class="mb-0 small">Enter your address and we will specify the offer you area. </p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="my-5">
          <input type="search" class="form-control" placeholder="Search your area">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h6 class="mb-0">Select Location</h6>
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>


        </div>
        <div>
          <div data-simplebar style="height:300px;">
            <div class="list-group list-group-flush">

              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                <span>Alabama</span><span>Min:$20</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Alaska</span><span>Min:$30</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Arizona</span><span>Min:$50</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>California</span><span>Min:$29</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Colorado</span><span>Min:$80</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Florida</span><span>Min:$90</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Arizona</span><span>Min:$50</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>California</span><span>Min:$29</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Colorado</span><span>Min:$80</span></a>
              <a href="#"
                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                <span>Florida</span><span>Min:$90</span></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  <main>
    <section class="mt-8">
      <div class="container">
        <div class="hero-slider ">
          <div
            style="background: url(assets/images/slider/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

              <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
              <p class="lead">Introduced a new model for online grocery shopping
                and convenient home delivery.</p>
              <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>
          <div class=" "
            style="background: url(assets/images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
              <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                  class="text-primary">$100</span></h2>
              <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
              </p>
              <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Featured Categories</h3>

          </div>
        </div>
        <div class="category-slider ">

          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-dairy-bread-eggs.jpg') }}" class="mb-3 img-fluid" >
    
                  <div class="text-truncate">Dairy, Bread & Eggs</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-snack-munchies.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3">

                  <div class="text-truncate">Snack & Munchies</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-bakery-biscuits.jpg') }}"  alt="Grocery Ecommerce Template"
                    class="mb-3">

                 
                  <div class="text-truncate">Bakery & Biscuits</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-instant-food.jpg') }}"  alt="Grocery Ecommerce Template"
                    class="mb-3">

                  <div class="text-truncate">Instant Food</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-tea-coffee-drinks.jpg') }}"  alt="Grocery Ecommerce Template"
                    class="mb-3">
                  
                  <div class="text-truncate">Tea, Coffee & Drinks</div>
                </div>
              </div>
            </a></div>
          <div class="item"><a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                  
                    <img src="{{ Vite::asset('resources/assets/images/category/category-atta-rice-dal.jpg') }}"  alt="Grocery Ecommerce Template"
                    class="mb-3">
                  <div class="text-truncate">Atta, Rice & Dal</div>
                </div>
              </div>
            </a></div>

          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-baby-care.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3">

                  <div class="text-truncate">Baby Care</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-chicken-meat-fish.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3">

                  <div class="text-truncate">Chicken, Meat & Fish</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                <img src="{{ Vite::asset('resources/assets/images/category/category-cleaning-essentials.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3">

                  <div class="text-truncate">Cleaning Essentials</div>
                </div>
              </div>
            </a></div>
          <div class="item"> <a href="pages/shop-grid.html" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                  <img src="assets/images/category/category-pet-care.jpg" alt="Grocery Ecommerce Template" class="mb-3">
                  <div class="text-truncate">Pet Care</div>
                </div>
              </div>
            </a></div>




        </div>


      </div>
    </section>
    <!-- Category Section End-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-lg-0">
            <div>
              <div class="py-10 px-8 rounded"
                style="background:url(assets/images/banner/grocery-banner.png)no-repeat; background-size: cover; background-position: center;">
                <div>
                  <h3 class="fw-bold mb-1">Fruits & Vegetables
                  </h3>
                  <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                  <a href="#!" class="btn btn-dark">Shop Now</a>
                </div>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 ">

            <div>
              <div class="py-10 px-8 rounded"
                style="background:url(assets/images/banner/grocery-banner-2.jpg)no-repeat; background-size: cover; background-position: center;">
                <div>
                  <h3 class="fw-bold mb-1">Freshly Baked
                    Buns
                  </h3>
                  <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                  <a href="#!" class="btn btn-dark">Shop Now</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Products Start-->
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Popular Products</h3>

          </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
          <div class="col">
            <div class="card card-product">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Sale</span>
                  </div>
                  <a href="#!"> <img src="{{ Vite::asset('resources/assets/images/products/product-img-1.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>

                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snack &
                      Munchies</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Haldiram's
                    Sev Bhujia</a></h2>
                <div>

                  <small class="text-warning"> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$18</span> <span
                      class="text-decoration-line-through text-muted">$24</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-success">14%</span>
                  </div>
                  <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-2.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Bakery &
                      Biscuits</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html"
                    class="text-inherit text-decoration-none">NutriChoice Digestive </a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5 (25)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$24</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-3.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Bakery &
                      Biscuits</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Cadbury 5
                    Star Chocolate</a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5 (469)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$32</span> <span
                      class="text-decoration-line-through text-muted">$35</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-4.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Hot</span>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snack &
                      Munchies</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Onion
                    Flavour Potato</a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i></small> <span class="text-muted small">3.5 (456)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$3</span> <span class="text-decoration-line-through text-muted">$5</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-5.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Instant
                      Food</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Salted
                    Instant Popcorn </a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5 (39)</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger">Sale</span>
                  </div>
                  <a href="#!"> <img src="{{ Vite::asset('resources/assets/images/products/product-img-6.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread &
                      Eggs</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Blueberry
                    Greek Yogurt</a></h2>
                <div>

                  <small class="text-warning"> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5 (189)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$18</span> <span
                      class="text-decoration-line-through text-muted">$24</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-7.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread &
                      Eggs</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Britannia
                    Cheese Slices</a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5 (345)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$24</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-8.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Instant
                      Food</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Kellogg's
                    Original Cereals</a>
                </h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4 (90)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$32</span> <span
                      class="text-decoration-line-through text-muted">$35</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"><a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-9.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snack &
                      Munchies</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Slurrp
                    Millet Chocolate </a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5 (67)</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$3</span> <span class="text-decoration-line-through text-muted">$5</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-10.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                      title="Wishlist"><i class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread &
                      Eggs</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Amul
                    Butter - 500 g</a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i></small> <span class="text-muted small">3.5 (89)</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Products End-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-6">
            <h3 class="mb-0">Daily Best Sells</h3>
          </div>
        </div>
        <div class="table-responsive-xl pb-6">
        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
          <div class="col">
            <div class=" pt-8 px-6 px-xl-8 rounded"
              style="background:url(assets/images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
              <div>
                <h3 class="fw-bold text-white">100% Organic
                  Coffee Beans.
                </h3>
                <p class="text-white">Get the best deal before close.</p>
                <a href="#!" class="btn btn-primary">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-11.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>

                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                      class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Tea, Coffee &
                      Drinks</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Roast
                    Ground Coffee</a></h2>

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-12.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                      Vegetables</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Crushed
                    Tomatoes</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3 w-100">
                  <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img src="{{ Vite::asset('resources/assets/images/products/product-img-13.jpg') }}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
</a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                      Vegetables</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Golden
                    Pineapple</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$18</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i></small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{ Vite::asset('resources/assets/images/icons/clock.svg') }}" alt="">
</div>
              <h3 class="h5 mb-3">
                10 minute grocery now
              </h3>
              <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>
          </div>
          <div class="col-md-6  col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{ Vite::asset('resources/assets/images/icons/gift.svg') }}" alt="">
</div>
              <h3 class="h5 mb-3">Best Prices & Offers</h3>
              <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess &
                offers.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{ Vite::asset('resources/assets/images/icons/package.svg') }}" alt="">
</div>
              <h3 class="h5 mb-3">Wide Assortment</h3>
              <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other
                categories.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="{{ Vite::asset('resources/assets/images/icons/refresh-cw.svg') }}" alt="">
</div>
              <h3 class="h5 mb-3">Easy Returns</h3>
              <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                <a href="#!">policy</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              <div
                class="zoom"
                onmousemove="zoom(event)"
                style="
                  background-image: url(assets/images/products/product-single-img-1.jpg);
                "
              >
                <!-- img -->
                <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-1.jpg') }}" alt="">

              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-2.jpg);
                  "
                >
                  <!-- img -->
                  <img src="resources/assets/images/products/product-single-img-2.jpg" alt="">

                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-3.jpg);
                  "
                >
                  <!-- img -->
                  <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-3.jpg') }}" alt="">

                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-4.jpg);
                  "
                >
                  <!-- img -->
                  <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-4.jpg') }}" alt="">

                </div>
              </div>
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                <div class="col-3" class="tns-nav-active">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-1.jpg') }}" alt="">

                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img" >
                    <!-- img -->
                    <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-2.jpg') }}" alt="">

                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-3.jpg') }}" alt="">

                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img src="{{ Vite::asset('resources/assets/images/products/product-single-img-4.jpg') }}" alt="">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
              <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small
                ><a href="#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">$32</span>
                <span class="text-decoration-line-through text-muted">$35</span
                ><span
                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                >
              </div>
              <hr class="my-6">
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div
                class="mt-3 row justify-content-start g-2 align-items-center"
              >

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->
                  <button type="button" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>
                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a
                    class="btn btn-light"
                    href="#"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Compare"
                    ><i class="bi bi-arrow-left-right"></i
                  ></a>
                  <a
                    class="btn btn-light"
                    href="#!"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Wishlist"
                    ><i class="feather-icon icon-heart"></i
                  ></a>
                </div>
              </div>
              <hr class="my-6">
              <div>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Product Code:</td>
                      <td>FBB00255</td>
                    </tr>
                    <tr>
                      <td>Availability:</td>
                      <td>In Stock</td>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <td>Fruits</td>
                    </tr>
                    <tr>
                      <td>Shipping:</td>
                      <td>
                        <small
                          >01 day shipping.<span class="text-muted"
                            >( Free pickup today)</span
                          ></small
                        >
                      </td>
                    </tr>
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


  <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast & instant food</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery & Biscuits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
            </ul>
          </div>
          <div class="col-6">
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks & juices</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee & drinks</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma & wellness</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-8">
        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Get to know us</h6>
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
              <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">For Consumers</h6>
            <ul class="nav flex-column">
                  <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
              <li class="nav-item mb-2"><a href="pages/shop-checkout.html" class="nav-link">Shop Checkout</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Become a Shopper</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Freshcart programs</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
          <ul class="list-inline mb-0">
            <li class="list-inline-item text-dark">Payment Partners</li>
            <li class="list-inline-item">
              <a href="#!"><img src="assets/images/payment/amazonpay.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="assets/images/payment/american-express.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="assets/images/payment/mastercard.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="assets/images/payment/paypal.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="assets/images/payment/visa.svg" alt=""></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <ul class="list-inline mb-0 text-lg-end text-center">
            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
            <li class="list-inline-item ms-4">
              <a href="#!"> <img src="assets/images/appbutton/appstore-btn.svg" alt=""
                  style="width: 140px;"></a></li>
            <li class="list-inline-item">
              <a href="#!"> <img src="assets/images/appbutton/googleplay-btn.svg" alt=""
                  style="width: 140px;"></a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">Copyright 2023 © FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a href="https://codescandy.com/">Codescandy</a>.</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Follow us on</li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>

  <!-- Javascript-->

  <!-- Libs JS -->

   
    @vite('resources/assets/libs/jquery/dist/jquery.min.js')
@vite('resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')
@vite('resources/assets/libs/simplebar/dist/simplebar.min.js')
@vite('resources/assets/js/theme.min.js')
@vite('resources/assets/libs/jquery-countdown/dist/jquery.countdown.min.js')
@vite('resources/assets/js/vendors/countdown.js')
@vite('resources/assets/libs/slick-carousel/slick/slick.min.js')
@vite('resources/assets/js/vendors/slick-slider.js')
@vite('resources/assets/libs/tiny-slider/dist/min/tiny-slider.js')
@vite('resources/assets/js/vendors/tns-slider.js')
@vite('resources/assets/js/vendors/zoom.js')
@vite('resources/assets/js/vendors/increment-value.js')


</body>


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 15:48:40 GMT -->
</html>