<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"  rel="stylesheet"/>

  <link rel="stylesheet" href="/css/search.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
  <!-- Navbar -->
  <nav class="header navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img class="logo" src="./image/logo.png" height="15" alt="" loading="lazy"/>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="list-menu" href="./index">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="list-menu"  href="./login" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
          </li>
        </ul>
      </div>
        <!-- Avatar -->
        <a class="fas nav-link" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <a class="list-menu"  href="./login"><p>ลงชื่อผู้เข้าใช้</p></a> 
        
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="./login">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="./login">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="article text-gray-600 body-font">
    <!-- <div class="text-center mb-20 mt-5">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">ค้นหาข้อมูลศิษย์เก่า</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">ยินดีต้องรับเข้าสู่หน้าค้าหาข้อมูลศิษย์เก่า หาต้องการค้นหาข้อมูลศิษย์เก่าคนใด สามารถกรอกแบบฟอร์มจากนั้นค้นหาได้เลย จากหน้านี้</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-pink-500 inline-flex"></div>
      </div>
    </div> -->
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">ค้นหาข้อมูลศิษย์เก่า</h1>
        <p class="mb-8 leading-relaxed">ยินดีต้องรับเข้าสู่หน้าค้าหาข้อมูลศิษย์เก่า หาต้องการค้นหาข้อมูลศิษย์เก่าคนใด สามารถกรอกแบบฟอร์มจากนั้นค้นหาได้เลย</p>
        <div class="flex w-full md:justify-start justify-center items-end">
          <div class="relative ">
            <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
              <option selected  id="searchTopic" name="searchTopic">เลือกหัวข้อค้นหา</option>
              <option value="1">ชื่อ-นามสกุล</option>
              <option value="2">รหัสนักศึกษา</option>
              <option value="3">สาขา</option>
              <option value="4">ปีการศึกษา</option>
              <option value="5">จังหวัด</option>
              <option value="6">อันดับเกรดนิยม</option>
            </select>
          </div>
          <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4 ml-4">
            <label for="hero-field" class="leading-7 text-sm text-gray-600">กรอกข้อมูลตามหัวข้อที่เลือก</label>
            <input type="text" id="hero-field" name="hero-field" class="w-full bg-gray-100 rounded border bg-opacity-50 border-gray-300 focus:ring-2 focus:ring-pink-200 focus:bg-transparent focus:border-pink-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">ค้นหา</button>
        </div>
        
        <section class="text-gray-600 body-font">
          <div class="mt-10 mx-auto">
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
              <div class="p-2 sm:w-1/2 w-full">
                <button class="rounded flex">
                  <p class="title-font font-medium"><u>คณะครุศาสตร์</u></p>
                </button>
              </div>
              <div class="p-2 sm:w-1/2 w-full">
                <button class="rounded flex">
                  <p class="title-font font-medium"><u>คณะมนุษย์ศาสตร์และสังคมศาสตร์</u></p>
                </button>
              </div>
              <div class="p-2 sm:w-1/2 w-full">
                <button class="rounded flex">
                  <p class="title-font font-medium"><u>คณะวิทยาศาสตร์และเทคโนโลยีสารสนเทศ</u></p>
                </button>
              </div>
              <div class="p-2 sm:w-1/2 w-full">
                <button class="rounded flex">
                  <p class="title-font font-medium"><u>คณะวิทยาาการจัดการ</u></p>
                </button>
              </div>
              <div class="p-2 sm:w-1/2 w-full">
                <button class="rounded flex">
                  <p class="title-font font-medium"><u>คณะพยาบาลศาสตร์</u></p>
                </button>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="displayData lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <div class="dataIn">
          <h2>แสดงข้อมูล น่าจะนำข้อมูลจากหน้า Profile มาใส่ได้เลย</h2>
        </div>
      </div>
    </div>
  </section>

  <footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Registration System</a>
    </div>
  </footer>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>
</html>