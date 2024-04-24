<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style/mystyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <style>
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a {
        display: inline-block;
        padding: 5px 10px;
        text-decoration: none;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        color: #333;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }
    /* Add your custom styles here */
    .card {
            box-sizing: border-box;
        }
        .slider-container {
            width: 80%;
            height: auto;
            margin: 0 auto;
        }
        #card-slider{
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            overflow: hidden;
            flex-wrap: wrap;
        }
        .card {
            width: calc(50% - 20px); /* Adjusted width to show 2 cards at a time */
            flex: 0 0 auto;
            margin: 0 10px;
        }
        .card img {
            width: 100%;
            height: 20rem;
            border-radius:  5px;
        }
        .card {
            width: calc(50% - 20px); /* Adjusted width to show 2 cards at a time */
            flex: 0 0 auto;
            margin: 0 10px;
            position: relative;
        }
        .card a {
            position: absolute;
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
            padding: 0.5rem 0;
            width: 100%;
            background-color: #f1f1f1;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            text-align: center;
        }

        /* Media queries for responsiveness */
        @media (max-width: 1023px) {
            /* For tablets like iPad */
            .card {
                width: calc(33.33% - 20px);/* Adjusted width to show 3 cards at a time */
            }
        }

        @media (max-width: 767px) {
            /* For phones */
            .card{
                width: calc(50% - 10px); /* Adjusted width to show 2 cards at a time */
                height: 30vh;
            }
            .card a {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            /* For smaller phones */
            .card {
                width: 100%; /* Adjusted width to show 1 card at a time */
                margin: 0 5px; /* Adjusted margin for better spacing */
            }
            .card a {
                font-size: 10px;
            }
        }
    .slick-prev,
    .slick-next {
        display: none !important;
    }
</style>

</head>
<body>
    <!-- start navbar -->
    <nav>
        <img src="asset/images/logo.jpg" alt="logo" class="logo">
        <ul class="navbar-menu" id="mynav">
          <li><a href="#">کور پاڼه</a></li>
          <li><a href="#">اړیکه</a></li>
          <li><a href="#">زموږ په اړه</a></li>
          <li><a href="#">خپرونې</a></li>
        </ul>
        <div class="navbar-toggle" onclick="toggleMenu()">
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
          <span class="toggle-icon"></span>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start hero-section -->
    <section id="hero-section">
        <div class="hero-content">
          <h1 id="animated-h1"></h1>
          <h3 id="animated-h3" style="opacity: 0;"></h3>
        </div>
      </section>


    <!-- new time section  -->
    <section class="news-time-section">
        <img src="asset/images/p2.jpg" alt="image">
        <div class="show-news-time">
            <h1>د خپرونې نوم</h1>
            <h1>Time 03:30 PM</h1>
        </div>
    </section>


    <section class="best-vana style">
   
        <div class="cards-wrapper">
        @foreach($infos as $info)
            <div class="card-container">
                <div class="card">
                    <img src="newFile/{{ $info->url }}" alt="">
                    <div>
                        <h2>{{ $info->name }}</h2>
                        <h3>{{ $info->shortDisc }}</h3>
                        
                        <button class="card-btns btn">View more</button>
                    </div>
                </div>
                <div class="card-content hidden">
                    <button class="close-btn">&times;</button>
                    <p>{{ $info->longDisc }}</p>
                </div>
            </div>
            @endforeach

        </div>
      
        <div class="d-flex justify-content-s">
    <ul class="pagination">
        {!! $infos->links() !!}
    </ul>
</div>


        
    </section>
<!-- book section -->
    
<!--     
    <div class="slider-container">
        <button id="prev-button" class="next-btn">&#8249;</button>
            <div id="card-slider" class="slider"> -->
                <!-- Cards will be dynamically added here -->
            <!-- </div>
        <button id="next-button" class="next-btn">&#8250;</button>
    </div> -->


    <div class="slider-container">
    <h1 style="text-align: center;">Defrence Book</h1>
        <div id="card-slider">
            @foreach($cards as $card)
                
                <div class="card">
                    <img src="books/{{ $card->url }}" alt="Card Image" height="20px" width="150px">
                    <a href="books/{{ $card->bookURL }}">Download</a>
                </div>
            @endforeach
        </div>
    </div>
</div>


   <!-- footer section  -->
   <footer>
    <div class="content-wrapper">
        <div class="letters">
            <h1>علمی مقالی</h1>
            <ul>
                <li>د روژې فضایل</li>
                <li>قران او تکنالوژی</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
            </ul>
        </div>
        <div class="services">
            <h1>خدمات</h1>
            <ul>
                <li>پښتو</li>
                <li>دری</li>
                <li>العربی</li>
                <li>English</li>
            </ul>
            <h1>Penuncial help</h1>
            <ul>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
            </ul>
        </div>
        <div>
            <h1>Office nowing</h1>
            <ul>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
            </ul>
        </div>
        <div class="Thaseen-ul-quran">
            <img src="asset/images/logo.jpg" alt="" height="80" width="80" style="margin: 0 auto; display: block; border-radius: 50%;">
            <h1 style="padding: 1rem;">تحسین القران اسلامی رادیو</h1>
            <p style="text-align: center; padding: 1rem;" dir="rtl" >
                موږ داسلامی ارزښتونو او حقایقو په رڼا(dfdf)(یبنت) کې تاسو ته خپرونې وړاني کوو. او خپلو اسلامی ارزښتونو ته لومړي توب ورکو
            </p>
        </div>
    </div>
    <div class="copy-rights">
        <p>this websit 	&copy; copy Rights is only with Tahseen ul quran Radio</p>
    </div>
   </footer>
   
   <!-- script for nav responsive -->
   <script>
    function toggleMenu() {
        console.log('this is  my function')
        var navbarMenu = document.getElementById("mynav");
         navbarMenu.classList.toggle("menu-open");
   }
</script>



<!-- script for inamition -->
<script>
    var sentenceH1 = "تحسین القران اسلامي رادیو";
    var sentenceH3 = "ستاسو رادیو ستاسو دژوند شيبې ښکلي کوي";

    function animateText() {
      const animatedH1 = document.getElementById("animated-h1");
      const animatedH3 = document.getElementById("animated-h3");

      animatedH1.innerHTML = sentenceH1
        .split("")
        .map((letter, index) => `<span class="letter" style="animation-delay: ${index * 100}ms;">${letter}</span>`)
        .join("");

      animatedH1.style.opacity = 1;

      animatedH3.innerHTML = sentenceH3
        .split("")
        .map((letter, index) => `<span class="letter" style="animation-delay: ${index * 100}ms;">${letter}</span>`)
        .join("");

      animatedH3.style.opacity = 1;

      setTimeout(() => {
        animatedH1.innerHTML = ""; // Clear the contents of h1
        animatedH3.innerHTML = ""; // Clear the contents of h3
        animateText(); // Start the animation again after 5 seconds
      }, 8000); // Delay between animations (5 seconds)
    }

    animateText(); // Start the animations
  </script>


<!-- script for cards cantenet -->
<script>
  let openCardContent = document.querySelectorAll('.card-btns')
  console.log(openCardContent)
  let cardContent = document.querySelectorAll('.card-content')

  let btnClose = document.querySelectorAll('.close-btn')

  for(let i =0 ; i<openCardContent.length && i<cardContent.length; i++){
    openCardContent[i]. addEventListener('click' , function(){
     cardContent[i].classList.remove('hidden');
  })
  }


  for(let i=0; i<btnClose.length  && i<cardContent.length; i++){
    btnClose[i].addEventListener('click', function(){
        cardContent[i].classList.add('hidden')
    })
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardSlider = document.querySelector('#card-slider');
            new SlickSlider(cardSlider);
        });
    
        function SlickSlider(element) {
            this.element = element;
            this.initSlider();
        }
    
        SlickSlider.prototype.initSlider = function() {
            const options = {
                // Slick Slider options and settings go here
                infinite: true,
                slidesToShow: 5, // Adjusted to show 5 cards at a time
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                appendArrows: '.slider-container', // Append arrows to the slider container
            };
    
            $(this.element).slick(options);
        };
    </script>

              

</body>
</html>