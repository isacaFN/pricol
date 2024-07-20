<?php
    require_once("navegacion.html");

    if (isset($_GET['alert'])) {
        require_once("registrarse.html");
}
?>

    <main>
    <div>
        <form class="formb" action="buscar.php" method="get">

            <div>   
            <label for="marca">Marca</label>
                <select name="marca">
                    <option  value="nike">Nike</option>
                    <option  value="adidas">adidas</option>
                    <option  value="puma">Puma</option>
                </select>
            </div>

            <div>   
            <label for="talla">Talla</label>
                <select name="talla">
                    <option  value="treintanueve">39</option>
                    <option  value="cuarenta">40</option>
                    <option  value="cuarentauno">41</option>
                </select>
            </div>

            <div>   
            <label for="genero">Genero</label>
                <select name="genero">
                    <option  value="hombre">Hombre</option>
                    <option  value="mujer">Mujer</option>
                </select>
            </div>

            <div>   
            <label for="color">Color</label>
                <select name="color">
                    <option  value="blancas">Blancas</option>
                    <option  value="Negras">Negras</option>
                    <option  value="rosadas">Rosadas</option>
                </select>
            </div>

            <div>
                <input class="botonb" type="submit" value="Buscar">
            </div>
        </form>
        
    </div>
    <?php
    if (isset($_GET['marca'])){
        $marca = $_GET['marca'];
        $talla = $_GET['talla'];
        $genero = $_GET['genero'];
        $color = $_GET['color'];?>
        <div class="resultado">
                <?php if($marca == 'nike'){
                        if($color == 'blancas'){
                            if($genero == 'hombre'){
                               // nike blancas hombre 
                               ?>
                                <div class="resultadosinf"> 
                                    <img src="https://nikeclprod.vtexassets.com/arquivos/ids/160788-800-800?v=637654399741130000&width=800&height=800&aspect=true">
                                    <h3>Nike air force one</h3>
                                    <p>99.990 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://tafmx.vtexassets.com/arquivos/ids/178807-1600-auto?v=637295068732600000&width=1600&height=auto&aspect=true">
                                    <h3>Nike air Max</h3>
                                    <p>82.990 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://www.lapolar.cl/dw/image/v2/BCPP_PRD/on/demandware.static/-/Sites-master-catalog/default/dw35bd5f91/images/large/533773-blanco.jpg?sw=1200&sh=1200&sm=fit">
                                    <h3>Nike Wearallday</h3>
                                    <p>70.000 CLP</p>
                                </div>
                        
                                <?php 
                            }else{
                                // nike blancas mujer
                                ?>

                                <div class="resultadosinf"> 
                                    <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/66989868-c275-494d-8647-5f8ddf1fd814/tenis-air-max-270-Pgb94t.png">
                                    <h3>Nike air Max 270</h3>
                                    <p>110.000CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://oechsle.vteximg.com.br/arquivos/ids/14816055-1000-1000/image-1.jpg">
                                    <h3>Nike air M607</h3>
                                    <p>60.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://peralimonerashop.com/11537-large_default/nike-deportivas-air-max-bella-tr-2-blancas-logo-dorado.jpg">
                                    <h3>Nike Air max motion LW</h3>
                                    <p>64.000 CLP</p>
                                </div>
                                <?php 
                            }
                        }else if($color == 'Negras'){
                                if($genero == 'hombre'){
                                    // nike negras hombre
                                    ?> 
                                <div class="resultadosinf"> 
                                    <img src="https://home.ripley.cl/store/Attachment/WOP/D317/2000398454216/2000398454216_2.jpg">
                                    <h3>Nike Revolution 7</h3>
                                    <p>50.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/877d30e7-4880-46f8-aa71-6704eb7d944d/air-max-plus-zapatillas-1gMZsK.png">
                                    <h3>Nike air max plus</h3>
                                    <p>103.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                    <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8bd40f1c-94cb-4319-8161-37a3fdd93698/cortez-textile-zapatillas-ntjT79.png">
                                    <h3>Nike cortez</h3>
                                    <p>70.000 CLP</p>
                                </div>
                                    <?php 
                            }else{
                                // nike negras de mujer
                                ?> 
                                <div class="resultadosinf"> 
                                <img src="https://sparta.cl/media/catalog/product/b/q/bq3207-014-phslh001-2000.png?quality=80&bg-color=255,255,255&fit=bounds&height=550&width=600&canvas=600:550">
                                    <h3>Nike Revolution 7</h3>
                                    <p>50.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                <img src="https://resize.sprintercdn.com/f/2880x2880/products/0375470/nike-air-winflo-10_0375470_00_4_2634044352.jpg?w=2880&q=75">
                                    <h3>Nike air Winflo</h3>
                                    <p>104.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                <img src="https://http2.mlstatic.com/D_NQ_NP_665474-MLC72316902558_102023-O.webp">
                                    <h3>Nike dunk</h3>
                                    <p>65.000 CLP</p>
                                </div>
                                <?php 
                            }
                        }else{
                            // muestra nike rosadas de mujer
                            ?>
                                <div class="resultadosinf"> 
                                <img src="https://cdn-images.farfetch-contents.com/17/95/59/11/17955911_38029587_1000.jpg">
                                    <h3>Nike dunk heigh</h3>
                                    <p>200.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                <img src="https://resize.sprintercdn.com/f/2880x2880/products/0375470/nike-air-winflo-10_0375470_00_4_2634044352.jpg?w=2880&q=75">
                                    <h3>Nike dunk low Rose</h3>
                                    <p>117.000 CLP</p>
                                </div>

                                <div class="resultadosinf"> 
                                <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f2939552-d3b0-43f8-b6d0-81661ffe7fde/cortez-textile-zapatillas-ntjT79.png">
                                    <h3>Nike Cortez Rose</h3>
                                    <p>65.000 CLP</p>
                                </div>
                            <?php 
                        }
 
                    }else if ($marca == 'adidas'){
                        if($color == 'blancas'){
                            if($genero == 'hombre'){
                               // adidas blancas hombre 
                            }else{
                                // adidas blancas mujer
                            }
                        }else if($color == 'negras'){
                                if($genero == 'hombre'){
                                    // adidas negras hombre
                            }else{
                                // adidas negras de mujer
                            }
                        }else if($color == 'rosadas'){
                            // adidas rosadas de mujer
                        }

                    } else{
            
                        if($color == 'blancas'){
                            if($genero == 'hombre'){
                               // puma blancas hombre 
                            }else{
                                // puma blancas mujer
                            }
                        }else if($color == 'negras'){
                                if($genero == 'hombre'){
                                    // puma negras hombre
                            }else{
                                // puma negras de mujer
                            }
                        }else if($color == 'rosadas'){
                            //puma rosadas de mujer
                        }
                    }

                } ?>
        </div>
    </main>
</body>
</html>