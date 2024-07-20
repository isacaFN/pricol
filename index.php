<?php
    require_once("navegacion.html");

    if (isset($_GET['alert'])) {
        require_once("registrarse.html");
}?>

    <main>

        <section class="lonuevo">
            <div class="lonuevoh">
                <img class="img1" src="https://filaar.vtexassets.com/assets/vtex.file-manager-graphql/images/7e1be118-bd65-4e00-a79e-0d81600f2dae___feeb1ccfdc1bcfc74097d65152c1497b.jpg">
            </div>

            <div class="lonuevoh">
                <img class="img2" src="https://filaar.vtexassets.com/assets/vtex.file-manager-graphql/images/2e133a8c-c5e3-4f79-bdcf-1e8ddddb9a52___fb85cf0bcf9ea4995cfa2fd4bda6b74c.jpg">
            </div>

            <div class="lonuevoh">
                <img class="img2" src="https://filaar.vtexassets.com/assets/vtex.file-manager-graphql/images/4ed065e2-ce64-4128-ad60-1b13a31c1c45___2e949173c421aeec5adb42826bb0821c.jpg">
            </div>

        </section>
        <div>
            <h2 class="h2membre">Membresia Pricol</h2>
        </div>
        <section class="membresias">
            <div class="membresias__child">
                <img  src="https://nikeclprod.vtexassets.com/assets/vtex.file-manager-graphql/images/9c0a0dd4-792d-4397-b01b-e85913e3c6be___1623850ef40f9ca7e778da84bce700fe.png">
            </div>

            <div class="membresias__child">
                <img  src="https://nikeclprod.vtexassets.com/assets/vtex.file-manager-graphql/images/047fc654-69f8-4bf0-b057-d2f4bdb1e540___8259c7f1889081e99be9b32dc48ea7a7.png">
            </div>

            <div class="membresias__child">
                <img  src="https://nikeclprod.vtexassets.com/assets/vtex.file-manager-graphql/images/43c790ad-35a6-4a9c-bc91-0871703ef26e___055ddfe88236344d31ef7ba22259d543.png">
            </div>
        </section>

        <section>
            <div class="hazte_miembro">
                <a href="?alert=2">
                    <img class="img2" src="https://nikeclprod.vtexassets.com/assets/vtex.file-manager-graphql/images/025d6d7f-2f20-4063-9467-a0a2286ca798___2b8c384a6d99c1cf261afec4a4ddfe73.png">
                </a>
            </div>
        </section>

    </main>

    <?php
        require_once("footer.html");
    ?>
</body>
</html>