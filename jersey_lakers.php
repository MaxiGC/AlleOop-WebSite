<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisetas</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main class="Contenidos">
        <section>
            <img class="Banner" src="./banneranimado.gif" alt="">
        </section>
        <section class="contenedorLogos">
            <a href="jersey_lakers.php"><img class="logos" src="./Img/logoscamisetas/lakers.png" alt="logo Lakers"></a>
            <a href="jersey_denver.php"><img class="logos" src="./Img/logoscamisetas/denver.png" alt="logo Denver"></a>
            <a href="jersey_sa.php"><img class="logos" src="./Img/logoscamisetas/spurs.png" alt="logo Spurs"></a>
            <a href="jersey_mavs.php"><img class="logos" src="./Img/logoscamisetas/mavs.png" alt="logo Mavs"></a>
        </section>

        <section class="acc_cont">
            <h2 class="titulo_prod">CAMISETA LA LAKERS</h2>
            <h3 class="precio_prod">Precio:$150.00'</h3>
            <a class="btncomprar" href="https://api.whatsapp.com/send?phone=0123456789&text=Hola,me mustaria comprar esta camiseta: Los Angeles Lakers">COMPRAR AHORA</a>

            <section class="contenedormain_acce">


                <a href="./Img/camisetas/Lakers/1.avif" data-lightbox="camisetas" data-title="CAMISETAS LOS ANGELES LAKERS - XL - XXXL - $150.000" alt="CAMISETAS LA LAKERS">
                    <img src="./Img/camisetas/Lakers/1.avif" alt="camisetas basketball" class="Img_chica"></a>
                <a href="./Img/camisetas/Lakers/2.avif" data-lightbox="camisetas" data-title="CAMISETAS LOS ANGELES LAKERS - XXL - $150.000" alt="CAMISETAS LA LAKERS">
                    <img src="./Img/camisetas/Lakers/2.avif" alt="camisetas basketball" class="Img_chica"></a>
                <a href="./Img/camisetas/Lakers/3.avif" data-lightbox="camisetas" data-title="CAMISETAS LOS ANGELES LAKERS - L - XXL - $150.000" alt="CAMISETAS LA LAKERS">
                    <img src="./Img/camisetas/Lakers/3.avif" alt="camisetas basketball" class="Img_chica"></a>
                <a href="./Img/camisetas/Lakers/4.avif" data-lightbox="camisetas" data-title="CAMISETAS LOS ANGELES LAKERS - S - L - $150.000" alt="CAMISETAS LA LAKERS">
                    <img src="./Img/camisetas/Lakers/4.avif" alt="camisetas basketball" class="Img_chica"></a>

                </div>
            </section>






            <?php
            include("footer.php");
            ?>
</body>

</html>