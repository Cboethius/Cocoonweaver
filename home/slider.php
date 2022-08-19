<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.intro {
  height: 50vh;
  display: flex;
  position: relative;
  top: 0;
  left: 0;
  justify-content: center;
  align-items: center;
  text-align: center;
  letter-spacing: 0.1rem;
}
.intro-slideshow img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: width: 100vw; */
  height: 100%; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: height: 100vh; */ 
  object-fit: cover;
  z-index:-1;
  /* filter: brightness(50%); */ /* 0% black, 100% original image, values > 100% are allowed for brighter than original image. */
  /* display: none; */
  opacity: 0;
  transition: opacity 0.75s ease-in-out;
}
/* .intro-slideshow img:first-child {
  display: block;
  opacity: 1;
} */
.intro .intro-header {
  border-radius: 0.5rem;
  padding: 2rem 2.5rem;
  background-color: rgba(0,0,0,0.5);
}
.intro h1 {
  font-size: 4rem;
  margin-bottom: 0.75rem;
}
.intro p {
  font-size: 1.75rem;
}

@media (max-width: 700px) {
  html { font-size: 12px; }
  .intro-header { padding: 1.5rem 2rem; }
  .intro h1 { font-size: 2.5rem; }
  .intro p { font-size: 1.25rem; }
}

/* h1 text intro */

.text {
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 120px;
    color: #655F59;
    text-align: center;
    padding-bottom: 100px;
}

.fade-p {
    color:  #655F59;
    opacity: 0.64;
}

@media (max-width: 390px) {
    body{
       width: 390px;
    }

}

@media (min-width: 1500px) {

    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .intro-slideshow  {
        top: 0;
        left: 0;
        width: 1500px; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: width: 100vw; */
        height: 100%; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: height: 100vh; */ 
        object-fit: cover;
        z-index:-1;
        /* filter: brightness(50%); */ /* 0% black, 100% original image, values > 100% are allowed for brighter than original image. */
        /* display: none; */
        opacity: 100;
        transition: opacity 0.75s ease-in-out;
    }

}
</style>
<body>

<div class="text">
  <p class="fade-p">Ideas,thoughts,memoreis and dreams. All in one place.</p>
  <h1>Voice your thoughts, and create audio notes</h1>
</div>

<header class="intro">
  <div class="intro-slideshow">
    <img src="https://www.dropbox.com/s/h8rds5ozk0u3s2f/coder.jpg?raw=1">
    <img src="https://www.dropbox.com/s/lf29ifrd354ngyv/coffee.jpg?raw=1">
    <img src="https://www.dropbox.com/s/lxnf1mxej90qoae/library.jpg?raw=1">
    <img src="https://www.dropbox.com/s/15gdoyzoai94j6j/path.jpg?raw=1">
    <img src="https://www.dropbox.com/s/pem8kaorr488apn/universe.jpg?raw=1">
  </div>
</header>

<script>
    const slideshowImages = document.querySelectorAll(".intro-slideshow img");

    const nextImageDelay = 10000;
    let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

    // slideshowImages[currentImageCounter].style.display = "block";
    slideshowImages[currentImageCounter].style.opacity = 1;

    setInterval(nextImage, nextImageDelay);

    function nextImage() {
    // slideshowImages[currentImageCounter].style.display = "none";
    slideshowImages[currentImageCounter].style.opacity = 0;

    currentImageCounter = (currentImageCounter+1) % slideshowImages.length;

    // slideshowImages[currentImageCounter].style.display = "block";
    slideshowImages[currentImageCounter].style.opacity = 1;
}
</script>
</body>
</html>