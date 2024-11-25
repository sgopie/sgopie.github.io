<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php">Home</a>
        <a href="projecten.php">Projects</a>
        <a href="about-me.php">About me</a>
        <a href="contact.php">Contacts</a>
    </nav>
    <h1 style="align-items: center">Welcome to my portfolio!</h1>
</header>
<main class="wrapper">
<!--    img src="img/sudhir-17-06-2024.jpg" class="col-3" alt="sudhir" height="700px">-->
    <div>
        <p>
            Hello, I am Sudhir Gopie I am 17 years old and am currently studying
            software development at ROC Mondriaan located in brasserkade Delft.
            Before I entered this course I got my MAVO diploma from Roemer Visscher
            College located at Zuiderpark and as for work I am currently working as
            chef at Eazie leyweg for about almost 2 year working a steady
            100+ hours. I can speak both English and Dutch fluently, I am
            learning how to speak Japanese and Arabic and my hobbies are gaming,
            cooking, going to gym, listening to music, hanging out with friends or
            reading/watching anime.
        </p>
    </div>
</main>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    :root {
        --rich-black: #051014;
        --jet: #2E2F2F;
        --emerald: #23CE6B;
        --vivid-sky-blue: #2BD9FE;
        --columbia-blue: #BFD1E5;
    }
    body {
        background-color: var(--jet);
        color: var(--emerald);
        font-family: "Century Gothic", serif;
    }
    .wrapper{
        display: grid;
        grid-template-columns: repeat(6,1fr);
    }
</style>

</body>
</html>