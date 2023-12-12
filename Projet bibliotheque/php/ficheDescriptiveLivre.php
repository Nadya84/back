<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application de Gestion de Bibliothèque</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../css/styleFiche.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet" >
  

</head>

<body>
  <nav class="navbar" sticky-top>
    <a href="#" class="logo">Application de Gestion de Bibliothèque</a>
    <div class="nav-links">
      <ul>
        <li> <a href="home.php"> Home</a></li>
        <li> <a href="#">Se déconnecte</a></li>
      </ul>
    </div>
    <form>
      <input class="form-control me-2" type="search" placeholder="rechercher" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form>
  </nav>



  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/allen.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Zend Framework in Action</h5>
              <p class="card-text">Zend Framework in Action is a comprehensive tutorial that shows how to use the Zend Framework to create web-based applications and web services. This book takes you on an over-the-shoulder tour of the components of the Zend Framework as you build a high quality, real-world web application..</p>
              <a href="#" class="btn btn-primary">Description</a>

            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/ableson2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Android in Action, Second Edition</h5>
              <p class="card-text">Android in Action, Second Edition is a comprehensive tutorial for Android developers. Taking you far beyond "Hello Android," this fast-paced book puts you in the driver's seat as you learn important architectural concepts and implementation strategies. You'll master the SDK, build WebKit apps using HTML 5, and even learn to extend or replace Android's built-in features by building useful and intriguing examples. </p>
              <a href="#" class="btn btn-primary">Description</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/almiray.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Griffon in Action</h5>
              <p class="card-text">Griffon in Action is a comprehensive tutorial written for Java developers who want a more productive approach to UI development. In this book, you'll immediately dive into Griffon. After a Griffon orientation and a quick Groovy tutorial, you'll start building examples that explore Griffon's high productivity approach to Swing development. One of the troublesome parts of Swing development is the amount of Java code that is required to get a simple application off the ground.</p>
              <a href="#" class="btn btn-primary">Description</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/armstrong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Flexible Rails</h5>
              <p class="card-text">"Flexible Rails created a standard to which I hold other technical books. You definitely get your money's worth."</p>
              <a href="#" class="btn btn-primary">Description</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/armstrong3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hello! Flex 4</h5>
              <p class="card-text">Hello! Flex 4 progresses through 26 self-contained examples selected so you can progressively master Flex. They vary from small one-page apps, to a 3D rotating haiku, to a Connect Four-like game. And in the last chapter you'll learn to build a full Flex application called SocialStalkr   a mashup that lets you follow your friends by showing their tweets on a Yahoo map.</p>
              <a href="#" class="btn btn-primary">Description</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card" style="width: 18rem;">
            <img src="../image/asher.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Coffeehouse</h5>
              <p class="card-text">Coffeehouse is an anthology of stories, poems and essays originally published on the World Wide Web.</p>
              <a href="#" class="btn btn-primary">Description</a>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  
  <button data-label="Register" class="rainbow-hover">
  <a href="home.php"><span class="sp">Retour</span></a>
  </button>

  <footer>
    <p>Copyright © 2023 DWWM</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>