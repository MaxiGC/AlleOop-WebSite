<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorts</title>
</head>

<body>
<?php 
    include("header.php");
?>

<main class="Contenidos">
        <section>
            <img  class="Banner" src="./banneranimado.gif" alt="">
</section>


<section class="contenedorLogos">
        <a href="shorts.php?logo=Chicago"><img class="logos" src="./Img/logoshort/bulls.png" alt="logo Bulls"></a>
        <a href="shorts.php?logo=Lakers"><img class="logos" src="./Img/logoshort/lakers.png" alt="logo Lakers"></a>
        <a href="shorts.php?logo=Knicks"><img class="logos" src="./Img/logoshort/knicks.png" alt="logo Knicks"></a>
        <a href="shorts.php?logo=Toronto"><img class="logos" src="./Img/logoshort/raptors.png" alt="logo Raptors"></a>
    </section>

    <?php

    $marca="";
    $precio="";
    $talle="";
    $img1="";
    $img2="";
    $img3="";
    $img4="";

    if (isset($_GET['logo'])) {
        switch ($_GET['logo']) {
            case 'Chicago';
                $marca ="Chicago Bulls";
                $precio = "$89.999";
                $talle = "Talles: XS - S - XL";
                $img1 = "./Img/shorts/JustDonChicago/1.avif";
                $img2 = "./Img/shorts/JustDonChicago/2.avif";
                $img3 = "./Img/shorts/JustDonChicago/3.avif";
                $img4 = "./Img/shorts/JustDonChicago/4.avif";
                break;

            case 'Lakers';
               $marca ="Lakers";
               $precio = "$89.999";
               $talle = "Talles: S - XL";
                $img1 = "./Img/shorts/JustDonLakers/1.avif";
                $img2 = "./Img/shorts/JustDonLakers/2.avif";
                $img3 = "./Img/shorts/JustDonLakers/3.avif";
                $img4 = "./Img/shorts/JustDonLakers/4.avif";
                break;

            case 'Knicks';
                $marca ="Knicks";
                $precio = "$89.999";
                $talle = "Talles: L - XL";
                $img1 = "./Img/shorts/JustDonKnicks/1.avif";
                $img2 = "./Img/shorts/JustDonKnicks/2.avif";
                $img3 = "./Img/shorts/JustDonKnicks/3.avif";
                $img4 = "./Img/shorts/JustDonKnicks/4.avif";
                break;

            case 'Toronto';
                $marca ="Toronto Raptors";
                $precio = "$89.999";
                $talle = "Talles: S - L - XL";
                $img1 = "./Img/shorts/JustDonToronto/1.avif";
                $img2 = "./Img/shorts/JustDonToronto/2.avif";
                $img3 = "./Img/shorts/JustDonToronto/3.avif";
                $img4 = "./Img/shorts/JustDonToronto/4.avif";
                break;
        }
    }

    ?>

<a href=""></a>
  
<div class="Marca">
    <h2><?php echo "$marca" ?></h2>
</div>
<div class="detalle">
        <h3><?php echo "$precio" ?></h3>
        <h4><?php echo "$talle" ?></h4>
    </div>

<div class="contenedor">

<div>
    <img src="<?php echo $img1 ?>" alt="">
</div>
<div>
    <img src="<?php echo $img2 ?>" alt="">
</div>
<div>
    <img src="<?php echo $img3 ?>" alt="">
</div>
<div>
    <img src="<?php echo $img4 ?>" alt="">
</div>

</div>



<?php 
    include("footer.php");
?>
</body>
</html>