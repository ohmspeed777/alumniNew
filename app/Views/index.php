<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration System</title>

 <!-- Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"  rel="stylesheet"/>

    <link rel="stylesheet" href="/css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
  <?php if (session()->get('isLogin')) { ?>
    <nav class="header navbar navbar-expand-lg bg-pink-500">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/search" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <a class="fas nav-link" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } else { ?>
    <nav class="header navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/login" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <a class="list-menu" href="/login">
          <p>ลงชื่อผู้เข้าใช้</p>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } ?>


  <div class="article">
    <div data-aos="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/image/carousel/carousel_1.jpg" class="d-block w-100" alt="carousel_1">
          </div>
          <div class="carousel-item">
            <img src="/image/carousel/carousel_2.jpg" class="d-block w-100" alt="carousel_2">
          </div>
          <div class="carousel-item">
            <img src="/image/carousel/carousel_3.jpg" class="d-block w-100" alt="carousel_3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="content">
      <section class="text-gray-500 body-font section">
        <div class="container mx-auto flex px-5 py-8 md:flex-row flex-col items-center">
          <div class="text_header lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 items-center">ระบบค้นหาศิษย์เก่า</h1>
            <p>ยินดีต้องรับเข้าสู่ระบบค้าหาศิษฐ์เก่า ไม่ว่าจะเป็นศิษฐ์ที่ยังไม่จบรวมถึงจบไปแล้ว ระบบของเราสามารถค้นหาให้ได้ ตามที่ผู้ใช้ต้องการ</p>
          </div>
          <div class="img1">
            <img class="object-cover object-center rounded" alt="hero" src="/image/img1.jpg">
          </div>
        </div>
      </section>
    </div>

    <div class="system">
      <section class="text-gray-600 body-font">
        <div class=" px-5 py-6 mx-auto">
          <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/3 mb-10 px-4">
              <div class="">
                <img alt="content" class="img" src="/image/search.png">
              </div>
              <a href="/search"><button class="flex mx-auto mt-6 text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded">Search</button></a>
            </div>
            <div class="sm:w-1/3 mb-10 px-4">
              <div class="">
                <img alt="content" class="img" src="/image/register.png">
              </div>
              <a href="/register"><button class="flex mx-auto mt-6 text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded">Register</button></a>
            </div>
            <div class="sm:w-1/3 mb-10 px-4">
              <div class="">
                <img alt="content" class="img" src="/image/login.png">
              </div>
              <a href="/login"><button class="flex mx-auto mt-6 text-white bg-pink-500 border-0 py-2 px-5 focus:outline-none hover:bg-pink-600 rounded">Sing In</button></a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <img src="/image/carousel/carousel_3.jpg" class="d-block w-100 img_button" alt="carousel_3">
  </div>
  <footer>
    <img src="/image/footer.png" class="d-block w-100" alt="footer.png">
  </footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>