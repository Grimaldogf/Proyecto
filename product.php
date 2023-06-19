<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-product">
    <?php include './inc/navbar.php'; ?>
    <section id="store">
       <br>
        <div class="container">
            <div class="page-header">
              <h1>Tienda <small class="tittles-pages-logo">Twice</small></h1>
            </div>
            <br><br>

            <div class="row">
                <div class="col-xs-12">
                    <ul id="store-links" class="nav nav-tabs" role="tablist">
                      <li role="presentation"><a href="#all-product" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false">Todos los productos</a></li>
                    <div id="facets-filterable">
    <h2 class="font-secondary text-base m-0 product-count__text mb-4 lg:hidden"> 40 resultados</h2>
   <div class="lg:grid lg:grid-cols-12 mt-8">
   <div class="lg:col-span-12" id="facets-results">
   <div class="grid gap-5 lg:grid-cols-12 lg:gap-10">
   <div class="col-span-12">
    <h2 id="predictive-search-products" class="-mt-2 font-secondary border-b-theme-width border-scheme-border py-2"> Productos</h2>
     <ul class="mt-4 lg:mt-8 grid grid-cols-3 gap-5 lg:gap-10 lg:grid-cols-5">
      <li class="py-2">
    <a href="/products/twice-candybong-official-light-stick-1er-lote? pos=1& sid=c4014734c& ss=r">
   <div data-color-scheme="primary" data-image-id class="responsive-image-wrapper relative overflow-hidden w-full my-0 mx-auto" style="height:0; padding-top: 100.0%;">
 <img class="responsive-image block absolute top-0 left-0 w-full h-full  transition-opacity duration-200 ease-in-out w-full max-w-full h-auto transition-transform transform group-hover:scale-110 lazyautosizes lazyloaded" data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2000]" data-aspectratio="1.0" data-sizes="auto" tabindex="-1" alt="" data-srcset="//cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_180x.jpg?v=1679497408 180w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_360x.jpg?v=1679497408 360w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_540x.jpg?v=1679497408 540w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_720x.jpg?v=1679497408 720w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_900x.jpg?v=1679497408 900w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1080x.jpg?v=1679497408 1080w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1296x.jpg?v=1679497408 1296w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1512x.jpg?v=1679497408 1512w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1728x.jpg?v=1679497408 1728w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1944x.jpg?v=1679497408 1944w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_2000x.jpg?v=1679497408 2000w" sizes="201px" srcset="//cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_180x.jpg?v=1679497408 180w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_360x.jpg?v=1679497408 360w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_540x.jpg?v=1679497408 540w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_720x.jpg?v=1679497408 720w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_900x.jpg?v=1679497408 900w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1080x.jpg?v=1679497408 1080w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1296x.jpg?v=1679497408 1296w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1512x.jpg?v=1679497408 1512w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1728x.jpg?v=1679497408 1728w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_1944x.jpg?v=1679497408 1944w, //cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_2000x.jpg?v=1679497408 2000w">
   <div class="responsive-image-placeholder bg-scheme-text absolute top-0 left-0 right-0 bottom-0"></div>


     <div class="responsive-image-placeholder bg-scheme-text absolute top-0 left-0 right-0 bottom-0"></div>
 <noscript>
  "<div class="absolute top-0 left-0 w-full h-full"> <img class=""src"//cdn.shopify.com/s/files/1/0037/5750/6624/products/00_TINFI_2048x2048.jpg?v=1679497408" alt=""></div>"
    </noscript></div>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade" id="all-product" aria-labelledby="all-product-tab">
                          <br><br>
                        <div class="row">
                        <?php
                            $consulta=  ejecutarSQL::consultar("select * from producto where Stock > 0");
                            $totalproductos = mysql_num_rows($consulta);
                            if($totalproductos>0){
                                while($fila=mysql_fetch_array($consulta)){
                                   echo '
                                  <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img src="assets/img-products/'.$fila['Imagen'].'">
                                         <div class="caption">
                                           <h3>'.$fila['Marca'].'</h3>
                                           <p>'.$fila['NombreProd'].'</p>
                                           <p>$'.$fila['Precio'].'</p>
                                           <p class="text-center">
                                               <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>
                                         </div>
                                       </div>
                                   </div>     
                                   ';
                               }   
                            } 
                        ?>
                        </div>
                      </div><!-- Fin del contenedor de todos los productos -->
                      
                      <!-- ==================== Contenedores de categorias =============== -->
                      <?php
                        $consultar_categorias= ejecutarSQL::consultar("select * from categoria");
                        while($categ=mysql_fetch_array($consultar_categorias)){
                            echo '<div role="tabpanel" class="tab-pane fade active in" id="'.$categ['CodigoCat'].'" aria-labelledby="'.$categ['CodigoCat'].'-tab"><br>';
                                $consultar_productos= ejecutarSQL::consultar("select * from producto where CodigoCat='".$categ['CodigoCat']."' and Stock > 0");
                                $totalprod = mysql_num_rows($consultar_productos);
                                if($totalprod>0){
                                   while($prod=mysql_fetch_array($consultar_productos)){
                                      echo '
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                             <div class="thumbnail">
                                               <img src="assets/img-products/'.$prod['Imagen'].'">
                                               <div class="caption">
                                                 <h3>'.$prod['Marca'].'</h3>
                                                 <p>'.$prod['NombreProd'].'</p>
                                                 <p>$'.$prod['Precio'].'</p>
                                                 <p class="text-center">
                                                     <a href="infoProd.php?CodigoProd='.$prod['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                                     <button value="'.$prod['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                                 </p>
                                               </div>
                                             </div>
                                         </div>     
                                         ';    
                                   } 
                                } else {
                                   echo '<h2>No hay productos en esta categoría</h2>'; 
                                }
                            echo '</div>'; 
                        }
                      ?>
                      <!-- ==================== Fin contenedores de categorias =============== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
    <script>
        $(document).ready(function() {
            $('#store-links a:first').tab('show');
        });
    </script>
</body>
</html>