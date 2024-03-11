<!-- include en php, llama a header para no tener
que estar copiando todos los codigos en todas las paginas -->
<?php include("header.php"); ?>

<section class="clientes_contenido">
    <div class="contactoDiv">
        <h1 class="registroTxt"> Registro</h1>
        <form action="enviar_consulta.php" method="post">
            <label for="Nombre" class="label">Nombre</label>
            <input type="text" name="nombre" class="clientes_input"  require="">
            <label for="apellido" class="label">Apellido</label>
            <input type="text" name="apellido" class="clientes_input"  require="">
            <label for="Edad" class="label">Edad</label>
            <input type="text" name="edad" class="clientes_input" require="" pattern="[0-9]+">
            <label for="correo" class="label">Correo</label>
            <input type="text" name="correo" class="clientes_input"  require="">
            <label for="Direccion" class="label">Dirección</label>
            <input type="text" name="direccion" class="clientes_input"  require="">
            <input type="submit" value="Enviar consulta" class="clientes_btn">
    </div>
    </form>

</section>
<?php
if (isset($_GET['ok'])) {
     echo "<h2>Su mensaje ha sido enviado con éxito</h2>";
}

?>
<?php include("footer.php"); ?>