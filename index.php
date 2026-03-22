<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
    <script src="script1.js"></script>

    <title>AutoHub</title>
</head>
<body>
<header>
  <div class="navbar">
    <div class="nav-logo">
      <div class="logo"></div>
    </div>

    <div class="nav-search">
    <input id="searchInput" placeholder="Search Cars e.g. Tata Nexon" class="nav-add">
      <div class="search-icon">
      <Button class="search-icon" onclick="searchCars()"><i class="fa-solid fa-magnifying-glass"></i></Button>
      </div>
    </div>

    
      
    

    
    <div class="signinlogo"><a href="login page/login.php"><i class="fa-solid fa-user"></i></a></div>
    
    <div class="nav-signin">
      <p class="Hello"><span>Hello</span></p>
      <a href="login page/login.php">Login or Register</a>
    </div>
  </div>
<section id="panel">
  <div class="panel">
    <div class="new-cars">
        <ul>
            <li>
                <a href="#">Explore Cars⯆</a>
                <ul class="dropdown single-line">
                    <li><a href="#popular-cars">Explore cars</a></li>
                    <li><a href="#popular-brands">Explore Car Brands</a></li>
                    <li><a href="#car-type">Explore Car Types</a></li>
                </ul>
            </li>

            
            <li>
                <a href="#">News and Reviews⯆</a>
                <ul class="dropdown single-line">
                    <li><a href="review/index.php">News and Reviews</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Compare Cars⯆</a>
                <ul class="dropdown single-line">
                    <li><a href="compare/index.php">Compare Cars</a></li>
                </ul>
            </li>

           
        </ul>
    </div>
    
    <div class="location-icon">
    <i class="fa-solid fa-location-dot"></i>
    
                <select id="citySelect" class="location-select">
                  
                    <option value="">City</option>
                </select>
                </div>
                
</div>
</section>
<div class="main-image"></div>
<!--Popular brands-->
<section id="popular-brands">
<main>
  
<div class="popular-brands"><h2>Popular Brands</h2><br></div>
<div class="shop-section">
        <div class="box left">
            <div class="box-content">
                <h2>Maruti Suzuki</h2>
                <div class="box-image" style="background-image: url('brand images/box1_image.jpg');"></div>
                <a href="car listing/maruti/maruti.php">Visit Page</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Tata</h2>
                <div class="box-image" style="background-image: url('brand images/box2_image.jpg');"></div>
                <a href="car listing/tata/tata.php">Visit Page</a>
            </div>
        </div>
        <div class="box right">
            <div class="box-content" >
                <h2>Mahindra</h2>
                <div class="box-image" style="background-image: url('brand images/box3_image.jpg');"></div>
                <a href="car listing/mahindra/mahindra.php">Visit Page</a>
            </div>
        </div>
        <div class="box left">
            <div class="box-content">
                <h2>Toyota</h2>
                <div class="box-image" style="background-image: url('brand images/box4_image.jpg');"></div>
                <a href="car listing/toyota/toyota.php">Visit Page</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Hyundai</h2>
                <div class="box-image" style="background-image: url('brand images/box5_image.jpg');"></div>
                <a href="car listing/hyundai/hyundai.php">Visit Page</a>
            </div>
        </div>
        <div class="box right">
            <div class="box-content">
                <h2>Honda</h2>
                <div class="box-image" style="background-image: url('brand images/box6_image.jpg');"></div>
                <a href="car listing/honda/honda.php">Visit Page</a>
            </div>
      
    </div>

</main>
</section>
<!--Popular cars-->
<section id=popular-cars>
<div class="popular-cars"><h2>Popular Cars</h2><br></div>
<div class="shop-section carsbuy">
        <div class="box cars left">
            <div class="box-content">
                <h2>Maruti Swift</h2>
                <div class="box-image" style="background-image: url('brand images/box11_image.jpg');"></div>
                <a href="maruti suzuki/Swift/Swift.php">Visit Page</a>
            </div>
        </div>
        <div class="box cars">
            <div class="box-content">
                <h2>Tata Nexon</h2>
                <div class="box-image" style="background-image: url('brand images/box12_image.jpg');"></div>
                <a href="tata/Nexon/Nexon.php">Visit Page</a>
            </div>
        </div>
        <div class="box cars right">
            <div class="box-content" >
                <h2>Mahindra XUV700</h2>
                <div class="box-image" style="background-image: url('brand images/box13_image.jpg');"></div>
                <a href="mahindra/xuv700/Xuv700.php">Visit Page</a>
            </div>
        </div>
        <div class="box cars left">
            <div class="box-content">
                <h2>Toyota Camry</h2>
                <div class="box-image" style="background-image: url('brand images/box14_image.jpg');"></div>
                <a href="toyota/camry/Camry.php">Visit Page</a>
            </div>
        </div>
        <div class="box cars">
            <div class="box-content">
                <h2>Hyundai Creta</h2>
                <div class="box-image" style="background-image: url('brand images/box15_image.jpg');"></div>
                <a href="hyundai/creta/Creta.php">Visit Page</a>
            </div>
        </div>
        <div class="box cars right">
            <div class="box-content">
                <h2>Honda Elevate</h2>
                <div class="box-image" style="background-image: url('brand images/box16_image.jpg');"></div>
                <a href="honda/elevate/elevate.php">Visit Page</a>
            </div>
            <div class="view-cars">
            <a href="car listing/all cars/allcars.php">View All Cars⯆</a>
        </div>
    </div>
</section>
<!--Premium cars-->
<main2>
  <div class="premium-cars-cont"></div>
<div class="premium-cars"><h2>Premium Cars</h2><br></div>
<div class="shop-section">
        <div class="box left">
            <div class="box-content">
                <h2>Aston Martin DBS</h2>
                <div class="box-image" style="background-image: url('brand images/box21_image.jpg');"></div>
                <a href="exotics/astonmartin/astonmartin.php">Visit Page</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Rolls Royce Phantom</h2>
                <div class="box-image" style="background-image: url('brand images/box22_image.jpg');"></div>
                <a href="exotics/rolls/rolls.php">Visit Page</a>
            </div>
        </div>
        <div class="box right">
            <div class="box-content" >
                <h2>Bugatti Chiron</h2>
                <div class="box-image" style="background-image: url('brand images/box23_image.jpg');"></div>
                <a href="exotics/bugatti/buggati.php">Visit Page</a>
            </div>
        </div>
        <div class="box left">
            <div class="box-content">
                <h2>Porsche GT3R</h2>
                <div class="box-image" style="background-image: url('brand images/box24_image.jpg');"></div>
                <a href="exotics/porsche/porsche.php">Visit Page</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Ferrari Roma</h2>
                <div class="box-image" style="background-image: url('brand images/box25_image.jpg');"></div>
                <a href="exotics/ferrari/ferrari.php">Visit Page</a>
            </div>
        </div>
        <div class="box right">
            <div class="box-content">
                <h2>Pagani Huayra</h2>
                <div class="box-image" style="background-image: url('brand images/box26_image.jpg');"></div>
                <a href="exotics/pagani/pagani.php">Visit Page</a>
            </div>
            <div class="view-cars">
            <a href="car listing/exotics/exotics.php">View All Cars⯆</a>
        </div>
 </div>
 </div>
 
</main2>




</header>
        <!--car type-->
        <section id="car-type">
          <div class="car-tab-cont">
        <div class="car-type">
        <h2>Car Type</h2>
        </div>
<ul class="tabs">
  <li data-tab-target="#home" class="active tab lefttab"><h2>Hatchback</h2></li>
  <li data-tab-target="#pricing" class="tab"><h2>SUV<h2></li>
  <li data-tab-target="#about" class="tab righttab"><h2>Sedan</h2></li>
</ul>

<div class="tab-content">
  <div id="home" data-tab-content class="active">

  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/tata/tiago2.jpg" alt="tiago">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/tiago/Tiago.php"><h2>Tata Tiago</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/maruti/box11_image.jpg" alt="swift">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/maruti suzuki/swift/Swift.php"><h2>Maruti Swift</h2></a>
    </div>
  </div>

  <div class="car-container">
    <div class="car-image">
      <img src="car listing/tata/altroz2.jpg" alt="altroz">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/altroz/Altroz.php"><h2>Tata Altroz</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/hyundai/i20.jpg" alt="i20">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/hyundai/i20/i20.php"><h2>Hyundai i20</h2></a>
    </div>
  </div>

  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/hyundai/i102.jpg" alt="i10">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/hyundai/i10/i10.php"><h2>Hyundai i10</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/toyota/glanza2.jpg" alt="glanza">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/toyota/glanza/Glanza.php"><h2>Toyota Glanza</h2></a>
    </div>
  </div>

  </div>


  <div id="pricing" data-tab-content>
  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/tata/nexon2.jpg" alt="nexon">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/nexon/Nexon.php"><h2>Tata Nexon</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/hyundai/creta2.jpg" alt="creta">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/hyundai/creta/Creta.php"><h2>Hyundai Creta</h2></a>
    </div>
  </div>

  <div class="car-container">
    <div class="car-image">
      <img src="car listing/tata/harrier.jpg" alt="harrier">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/harrier/Harrier.php"><h2>Tata Harrier</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/tata/punch.jpg" alt="punch">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/punch/punch.php"><h2>Tata Punch</h2></a>
    </div>
  </div>

  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/honda/elevate2.jpg" alt="elevate">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/honda/elevate/elevate.php"><h2>Honda Elevate</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/mahindra/xuv7002.jpg" alt="xuv700">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/mahindra/xuv700/xuv700.php"><h2>Mahindra XUV700</h2></a>
    </div>
  </div>
  </div>


  <div id="about" data-tab-content>
  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/honda/city2.jpg" alt="City">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/honda/city/city.php"><h2>Honda City</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/honda/amaze2.jpg" alt="amaze">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/honda/amaze/amaze.php"><h2>Honda Amaze</h2></a>
    </div>
  </div>
  
  <div class="car-container">
    <div class="car-image">
      <img src="car listing/hyundai/verna2.jpg" alt="verna">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/hyundai/verna/verna.php"><h2>Hyundai Verna</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/toyota/camry2.jpg" alt="camry">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/toyota/camry/camry.php"><h2>Toyota Camry</h2></a>
    </div>
  </div>
  <div class="car-container first">
    <div class="car-image">
      <img src="car listing/honda/civic2.jpg" alt="civic">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/honda/civic/civic.php"><h2>Honda Civic</h2></a>
    </div>

    <div class="car-image">
      <img src="car listing/tata/tigor2.jpg" alt="tigor">
    </div>
    <div class="car-info">
      <a href="/AutoHub/index/tata/tigor/Tigor.php"><h2>Tata Tigor</h2></a>
    </div>
  </div>

  </div>
</div>
</div>
</section>



  <script>
    const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})
</script>

<footer>
            <div class="foot-panel1">
                <a href="#panel">Back to top</a>
            </div>

            <div class="foot-panel2">
                <ul>
                    <p>Created By</p>
                        <a>Harshad Patil</a>
                        <a>ShivendraSinh Rajebhosale</a>
                        <a>Utkarsh Suroshe</a>
                        <a>Ram Makode</a>
                        <a>Prathamesh Shete</a>
                </ul>

                <ul>
                    <p>Get to know Us</p>
                        <a>View Cars on AutoHub</a>
                        <a>Search Cars on AutoHub</a>
                        <a>Compare Cars on AutoHub</a>
                        <a>Buy Accessories on AutoHub</a>
                        <a>Read Reviews on AutoHub</a>
                        <a>Give Reviews on AutoHub</a>
                        <a>Read News on AutoHub</a>
                </ul>

                <ul>
                    <p>Let Us Help You</p>
                        <a href="feed_back/feed.php">Valueable Feedback</a>
                </ul>

            </div>

            <div class="foot-panel3">
                <div class="foot-logo">

                </div>
            </div>
        </footer>

</body>
</html>