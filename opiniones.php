<?php
    require_once("navegacion.html");

    if (isset($_GET['alert'])) {
        require_once("registrarse.html");
}
?>
    <div class="widthmain">
    <main class="opiniones">
        <div class="cuentanos">
            <h6>Cuentanos:<br>¿Como fue tu experiencia en nuestro sitio Web?</h6>
            <img src="img/pricol.jpg">
        </div>

        <div>
            <form class="formop opiniones" action="opiniones.php" method="get">

                <div>   
                        <h2>¿ Como Calificarias Tu experiencia ? </h2>
                        <input name="op" type="radio" id="cb1" value="pesima" required/>
                        <label for="cb1">Pesima</label>

                        <input name="op" type="radio" id="cb2" value="mala" required/>
                        <label for="cb2">Mala</label>

                        <input name="op" type="radio" id="cb3" value="regular" required/>
                        <label for="cb3">Regular</label>

                        <input name="op" type="radio" id="cb4" value="Buena" required/>
                        <label for="cb4">Buena</label>

                        <input name="op" type="radio" id="cb5" value="Muy buena" required/>
                        <label for="cb5">Muy buena</label>
                </div>

                    <div>
                        <h2 for="nombre">nombre</h2>
                        <input name="nombre" type="text" placeholder="ingresa tu nombre" required>
                    </div>

                    <div>
                        <h2 for="correo">Correo Electronico</h2>
                        <input name="correo" type="email" placeholder="ingresa tu correo" required>
                    </div>

                    <div>
                        <h2 for="comentario">Escribe tu Opinion</h2>
                        <textarea name="comentario"></textarea>  
                    </div>

                    <div>
                        <input class="boton botonop" type="submit" value="Opinar">
                    </div>
            </form>
        </div>
        <div style="max-height: 200px;"><h2 class="h2opi">Opiniones</h2></div>
        <div class="opi">
            <?php
            if (isset($_GET['nombre'])) {
                $nombre = $_GET['nombre'];
                $correo = $_GET['correo'];
                $calificacion = $_GET['op'];
                $comentario = $_GET['comentario'];
                ?>
                <h2><?php echo $nombre?></h2>
                <h6>Calificacion: <?php echo $calificacion?></h6>
                <p><?php echo $comentario?></p>
                <?php }?>
        </div>

    </main>
</div>

<?php
        require_once("footer.html");
    ?>
</body>