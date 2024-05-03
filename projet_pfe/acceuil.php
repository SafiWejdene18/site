<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> L&B Solar Company </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php require('links.php');?>
        <style>
          *{
            font-family: 'Poppins', sans-serif;
          }
          .h-font{
            font-family: 'Merienda' , cursive;
          }

          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
           -webkit-appearance: none;
            margin: 0;
          }
          
          .title{
            margin-top: -50px;
            z-index: 2;
            position: relative;
          }
          @media  screen and(max-width:575px) {
            .title{
            margin-top: 0px;
            padding: 0;
            }
            
          }

          @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}

.wrapper {
  max-width: 75%;
  margin: auto;
}

.wrapper > p,
.wrapper > h1 {
  margin: 1.5rem 0;
  text-align: center;
}

.wrapper > h1 {
  letter-spacing: 3px;
}

.accordion {
  background-color: white;
  color: rgba(0, 0, 0, 0.8);
  cursor: pointer;
  font-size: 1.2rem;
  width: 100%;
  padding: 2rem 2.5rem;
  border: none;
  outline: none;
  transition: 0.4s;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: bold;
}

.accordion i {
  font-size: 1.6rem;
}

.active,
.accordion:hover {
  background-color: #f1f7f5;
}
.pannel {
  padding: 0 2rem 2.5rem 2rem;
  background-color: white;
  overflow: hidden;
  background-color: #f1f7f5;
  display: none;
}
.pannel p {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1.2rem;
  line-height: 1.4;
}

.faq {
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin: 10px 0;
}
.faq.active {
  border: none;
}



:root {
  --primary-color: #2c3855;
  --primary-color-dark: #435681;
  --text-dark: #333333;
  --text-light: #767268;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}



.popular__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

.popular__card {
  overflow: hidden;
  border-radius: 1rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
}

.popular__content {
  padding: 1rem;
}

.popular__card__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  margin-bottom: 0.5rem;
}

.popular__card__header h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.popular__content p {
  color: var(--text-light);
}

.client {
  background-color: var(--extra-light);
}

.client__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

.client__card {
  padding: 2rem;
  background-color: var(--white);
  border-radius: 1rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
}

.client__card img {
  max-width: 80px;
  margin: auto;
  margin-bottom: 1rem;
  border-radius: 100%;
}

.client__card p {
  text-align: center;
  color: var(--text-dark);
}

.reward__container {
  padding: 2rem;
  text-align: center;
  border-radius: 2rem;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
}

.reward__container p {
  margin-bottom: 1rem;
  font-weight: 600;
  color: var(--text-light);
}

.reward__container h4 {
  max-width: 500px;
  margin: auto;
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.reward__btn {
  padding: 1rem 3rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 1rem;
  cursor: pointer;
  transition: 0.3s;
}

.reward__btn:hover {
  background-color: var(--primary-color-dark);
}



@media (width < 900px) {
  .booking__container form {
    grid-template-columns: repeat(2, 1fr);
  }

  .popular__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }

  .client__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }

 
}

@media (width < 600px) {
 

  .header__container {
    padding-bottom: 25rem;
  }

  .booking__container {
    flex-direction: column;
    bottom: -25rem;
  }

 

  .popular__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  .client__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  
}

        </style>
    </head>
<body class="bg-light">

  <?php require('header.php') ;?>
<!--carousel-->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/2.jpeg" class="w-100 d-block"   height="300px" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.jpg" class="w-100 d-block"  height="300px" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.jpg"  class="w-100 d-block"   height="300px" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.jpg" class="w-100 d-block"    height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block"    height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/7.jpg" class="w-100 d-block"   height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/8.jpg" class="w-100 d-block"   height="300px" />
      </div>
    </div>
  </div>
</div>
<!--title-->
<div class="container title">
  <div class="row">
    <div class="col-lg-12 ">
      <h5> “𝕷’é𝖓𝖊𝖗𝖌𝖎𝖊 𝖘𝖔𝖑𝖆𝖎𝖗𝖊, 𝖙𝖊𝖑𝖑𝖊 𝖚𝖓𝖊 é𝖙𝖔𝖎𝖑𝖊 𝖇𝖎𝖊𝖓𝖛𝖊𝖎𝖑𝖑𝖆𝖓𝖙𝖊, é𝖈𝖑𝖆𝖎𝖗𝖊 𝖓𝖔𝖘 𝖛𝖎𝖊𝖘 𝖊𝖙 𝖓𝖔𝖚𝖘 𝖌𝖚𝖎𝖉𝖊 𝖛𝖊𝖗𝖘 𝖚𝖓 𝖆𝖛𝖊𝖓𝖎𝖗 𝖕𝖑𝖚𝖘 𝖉𝖚𝖗𝖆𝖇𝖑𝖊.” ☀️🌍 </h5>
    </div>
  </div>

</div>
<!-- FACILITES-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">Nos Facilites</h2>
 <p class="mt-5 pt-4 mb-4 text-center ">
  Démarrez votre projet d’installation de panneaux photovoltaïques avec L&B Solar Company et profitez de nombreux avantages.
 </p>
<div class="container mt-5">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-3 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/dimension.svg.svg" width="40px">
      <h5 class="mt-3">Dimensionnement</h5>
      <p>Nous prenons en compte la surface, l'inclinaison et l’ensoleillement de votre toiture, 
        ainsi que votre consommation d’électricité pour calculer le nombre optimal de panneaux pour votre toit.
      </p>
    </div>
    <div class="col-lg-3 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/rentabilité.svg.svg" width="30px">
      <h5 class="mt-3">Rentabilité</h5>
      <p>Avec notre configurateur, évaluez avec précision la rentabilité de vos panneaux solaires, garantis pendant 25 ans.
         Une fois votre installation amortie, vous profitez d’une source d’énergie gratuite et durable.
      </p>
    </div>
    <div class="col-lg-3 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/chat.svg.svg" width="30px">
      <h5 class="mt-3">Un conseiller aux petits soins</h5>
      <p>Un expert solaire d’L&B Solar Company vous accompagne du début à la fin de votre projet :
         dimensionnement, démarches administratives et suivi de votre installation, pendant toute sa vie de production. À vous le soleil !
      </p>
    </div>
  
  </div>
</div>
<!-- TESTIMONIALS-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">Ils ont testé les services d'L&B Solar Company</h2>
  <div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      
        
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>bon plan pour moi le meuilleur!!</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>bon plan pour moi le meuilleur!!</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>bon plan pour moi le meuilleur!!</p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>

  </div>
  <!--Realisation-->

  <h3 class="my-5 fw-bold h-font text-center">Notre réalisation</h3>
   <div class="container px-4">
   <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white  text-center overflow-hidden rounded">
        <img src="images/about/1.jpg" class="w-100">
        <h5 class="mt-2">Monsieur Flan</h5>
      </div>
      <div class="swiper-slide bg-white  text-center overflow-hidden rounded">
        <img src="images/about/1.jpg" class="w-100">
        <h5 class="mt-2">Monsieur Flan</h5>
      </div>
      <div class="swiper-slide bg-white  text-center overflow-hidden rounded">
        <img src="images/about/1.jpg" class="w-100">
        <h5 class="mt-2">Monsieur Flan</h5>
      </div>
      <div class="swiper-slide bg-white  text-center overflow-hidden rounded">
        <img src="images/about/1.jpg" class="w-100">
        <h5 class="mt-2">Monsieur Flan</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- FAQ -->
  <title>Frequently Asked Questions</title>
  <div class="wrapper">
      <p>The Begninning of a New Asset class</p>
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          What is Krushi?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Krushi is a Public Charitable Trust designed to carry out farming on
            extensive scale Natural & Sustainable methods.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          What are the major challanges of current agriculture?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does the Krushi address the above challanges?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How can I be a part of Krushi?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>
    </div>

    <!--card-->
    <section class="section__container popular__container">
      <h2 class="section__header">Popular Hotels</h2>
      <div class="popular__grid">
        <div class="popular__card">
          <img src="assets/hotel-1.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Plaza Hotel</h4>
              <h4>$499</h4>
            </div>
            <p>New York City, USA</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel-2.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Ritz Paris</h4>
              <h4>$549</h4>
            </div>
            <p>Paris, France</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel-3.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Peninsula</h4>
              <h4>$599</h4>
            </div>
            <p>Hong Kong</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel-4.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Atlantis The Palm</h4>
              <h4>$449</h4>
            </div>
            <p>Dubai, United Arab Emirates</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel-5.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Ritz-Carlton</h4>
              <h4>$649</h4>
            </div>
            <p>Tokyo, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel-6.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Marina Bay Sands</h4>
              <h4>$549</h4>
            </div>
            <p>Singapore</p>
          </div>
        </div>
      </div>
    </section>


   

  <!-- reach us-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">Trouvez Nous</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.6339266071495!2d9.6588218!3d37.0423739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e331339b828c61%3A0x3d3115c604a74e53!2sL%26B%20Solar%20company!5e0!3m2!1sfr!2stn!4v1713363525225!5m2!1sfr!2stn"  height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
           <h5> appelle-nous</h5>
           <a herf="tel: +21626983052" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +21626983052
          </a>
          <br>
          <a herf="tel: +21626983052" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i> +21626983052
          </a>

        </div>
        <div class="bg-white p-4 rounded mb-4">
           <h5> suivez-nous</h5>
           <a herf="#" class="d-inline-block mb-2 text-decoration-none text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <br>
          <a herf="#" class="d-inline-block mb-2 text-decoration-none text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br>
          <a herf="#" class="d-inline-block mb-2 text-decoration-none text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          
          

        </div>
      </div>
    </div>
  </div>
  
  <?php require('footer.php');?>
 

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disabeOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320:{
          slidesPerView: 1,
        },
        640:{
          slidesPerView: 1,
        },
        768:{
          slidesPerView: 2,
        },
        1024:{
          slidesPerView: 3,
        },
      }
    });
</script>





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:4 ,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints: {
        320:{
          slidesPerView: 1,
        },
        640:{
          slidesPerView: 1,
        },
        768:{
          slidesPerView: 2,
        },
        1024:{
          slidesPerView: 3,
        },
      }
    });
  </script>

<script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
</script>




</body>
</html>