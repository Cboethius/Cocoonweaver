


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<style>

*{
  padding:0;
  margin: 0;

}
  *, *::before *::after{
  box-sizing: border-box;
}

@font-face {
  font-family: Inter;
  src: url(../font-inter/Inter[wght].ttf);
  src: url(../font-inter/nter-Italic[wght].tt);
}
 
  
/* header layout */

header {
    position: absolute;
    height: 160px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 120px;
    color: #655F59;
    text-align: center;
}

.fade-p {
    color:  #655F59;
    opacity: 0.64;
}

@media screen and (max-width: 880px) {

header {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 60px;
    color: #655F59;
    font-size: 10px;
    text-align: center;
}

.fade-p, h1{
  width: 80%;
}
  
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

}
</style>

<body>

<header>
  <p class="fade-p">Ideas,thoughts,memoreis and dreams. All in one place.</p>
  <h1>Voice your thoughts, and create audio notes</h1>
</header>
    
</body>
</html>