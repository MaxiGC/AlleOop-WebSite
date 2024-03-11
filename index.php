<!DOCTYPE html>
<html lang="en">


<?php
include("header.php");
?>



<!-- Conetenedor principal swipper  -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="./envio.png" alt="Envios gratis"></div>
        <div class="swiper-slide"><img src="./cuotas.png" alt="6 Cuotas sin interés"></div>
        <div class="swiper-slide"><img src="./descuentogorra.png" alt="20% Off en gorras NBA"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>

<!--banner-->
<section>
    <img class="Banner" src="./banneranimado.gif" alt="">
</section>

<!-- imagenes de incio -->
<section class="contendorMainIncio">
    <div class="contenedorIncio">
        <a href="zapatillas.php">
            <figure>
                <img src="./zapatillas.png" alt="ZAPATILLAS">

                <div class="capa">
                    <h3>ZAPATILLAS</h3>
                    <P>Eleva tu juego con nuestras zapatillas de baloncesto, cuidadosamente seleccionadas para brindar comodidad, ajuste y agarre excepcionales.</P>
                </div>
            </figure>
        </a>

        <a href="camisetas.php">
            <figure>
                <img src="./camisetas.png" alt="CAMISETAS">
                <div class="capa">
                    <h3>CAMISETAS</h3>
                    <P>Exprésate en la cancha con nuestras camisetas de baloncesto de diseño exclusivo, que combinan estilo y funcionalidad con tejidos transpirables y duraderos.</P>
                </div>
            </figure>
        </a>

        <a href="shorts.php">
            <figure>
                <img src="./shorts.png" alt="SHORTS">
                <div class="capa">
                    <h3>SHORTS</h3>
                    <P>Maximiza tu movilidad con nuestros shorts diseñados para adaptarse a tu estilo de juego, ofreciendo ligereza y resistencia.</P>
                </div>
            </figure>
        </a>

        <a href="accesorios.php">
            <figure>
                <img src="./accesorios.png" alt="ACCESORIOS">
                <div class="capa">
                    <h3>ACCESORIOS</h3>
                    <P>Completa tu conjunto con accesorios como calcetines de alto rendimiento, gorras y mochilas diseñadas específicamente para los amantes del baloncesto.</P>
                </div>
            </figure>
        </a>

    </div>



</section>

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<?php
include("scriptSwiper.php");
?>



</body>

</html>