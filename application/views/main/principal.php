    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">       
    <style>
        
        footer{
            background: #c7dfc7;
        }
        
        .footer-container {
            width: 100%;
            display: flex;
            padding: 20px 20px 30px 20px;
            justify-content: space-between;
            position: relative;
            box-sizing: border-box;
            align-items: center;
        }

        .footer-colum {
            width: 30%;
        }

        .container {
            width: 100%;
            position: relative;
            background: #fff;
        }

        .container-wrapping {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 5% 10% 5% 10%;
        }

        .box-wrap {
            width: 30%;
            padding: 0;
            color: #666;
            position: relative;
            text-align:center;
        }
        .product-img {
            overflow: hidden;
            border-radius: 15px;
            margin-bottom:15px;
        }

        .product-img a img {
            width: 100%;
    transform: scale(1.1);
    transition: all ease 0.3s;
        }
        .product-img:hover a img {
    transform: scale(1);
    transition: all ease 0.3s;
}

        .box-wrap h4 {
            margin-top: 0;
            margin-bottom: 0;
        }
        
        .box-wrap p {
            color: #c7c739;
            font-weight: bolder;
            font-size: 20px;
            position: relative;
            margin-top: 7px;
        }

        /* external css: flickity.css */
        .carousel {
            background: #FFF;
        }

        .carousel-cell {
            width: 100%;           
            border-radius: 5px;
            counter-increment: gallery-cell;
        }

        .carousel-cell img {
            height: auto;
            width: 100%;
            /* object-fit: cover; */
        }

        .flickity-page-dots{
            display:none;
        }

        .product-img a img{
            background-image:url('uploads/site_media/cojines-quiero-trucha-trucho_rev.jpg');
        }

        .product-img a img:hover{
            background-image:url('uploads/site_media/cojines-quiero-trucha-trucho_rev.jpg');
        }
        .label_icons > div {
            transform:scale(1);
            transition:all ease 0.3s;
        }
        .label_icons > div:hover {
            transform:scale(1.25);
            z-index:123;
            transition:all ease 0.3s;
        }
       
    /* -------------------------------------------TRABAJANDO CON EL DIV QUE PERMITE VER LA IMAGEN FIXED------------------------------ */

        .img-fix-back {
            width: 100%;
            float: left;
            height: 400px;
            position: relative;
        }

        .img-fix-back .img {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-image: url(http://www.naturalsweet.com/uploads/site_media/tienda-secc-colchones.jpg);
            height: 400px;
            width: 100%;
            background-size: cover;
            z-index: 123;
            background-position: center;
            background-attachment: fixed;
        }

        .free-space-box {
            width: 100%;
            height: 400px;
        }

        .kids-zone {
            width: 100%;
            display: flex;
            background-color: #dcaa1c;
        }

        .kids-zone {
            width: 100%;
            display: flex;
            justify-content:space-between;
            background-color: #dcaa1c;
            align-items: center;
        }

        .kids-zone .kids {
            width: 30%;
            position:relative;
        }

        .kids img {
            width: 100%;
        }

        /* ---------------interactividad en las imagenes de los productos------------------- */

        .product-img .label_icons {
            position: absolute;
            width: 20%;
            display: flex;
            flex-direction: column;
            z-index: -1;
            top: 48px;
            right: 15px;
            opacity: 0;
            transition: all ease 0.3s;
        }
        .product-img:hover .label_icons {
            z-index: 123;
            opacity: 1;
            right:-42px;
            transition: all ease .3s;
        }

        .label {
            width: 70%;
            height: 30px;
            border: 1px solid white;
            cursor: pointer;
        }

        .label.like {
            background: #dcaa1c;
            border-top-right-radius:25%;
            /* background-image:url('uploads/site_icons/heart-icon-g.svg');
            background-repeat: no-repeat; */
        }

        .label span img {
            position: relative;
    top: 6px;
    width: 20px;
        }

        .label.share {
            background: #787a7e;
        }

        .label.buy {
            background: #c7dfc7;
            border-bottom-right-radius:25%;
        }
        
    </style>

    <div class="carousel" data-flickity='{ "autoPlay": true }'>
  <div class="carousel-cell"><img src="uploads/site_media/alfombra_rect.png" alt=""></div>
  <div class="carousel-cell"><img src="uploads/site_media/morriña_rect.png" alt=""></div>
  <div class="carousel-cell"><img src="uploads/site_media/escritorio_leter_img.png" alt=""></div>
  <div class="carousel-cell"><img src="uploads/site_media/pupurri_rect.png" alt=""></div>
</div>


    <div class="container">
        <div class="container-wrapping promo">
            
        </div>
    </div>

    <div class="img-fix-back">
        <div class="img"></div>
    </div>

    <div class="container secc-colch">
        <div class="container-wrapping colch">
            
        </div>
    </div>

    <div class="kids-zone">
        <div class="kids img">
            <img src="uploads/site_media/kids-area.jpg" alt="">
        </div>
        <div class="kids exp">
            <h2>Espacio para los niños... y su mundo!</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, enim! Iste, ut voluptates quisquam temporibus, ad cupiditate rerum id dolor tempora reprehenderit nobis minima quasi et amet architecto fugit repellendus.</p>
        </div>
        <div class="kids world">
            <div class="kids-world">
                <img src="uploads/site_media/kids-world.png" alt="">
            </div>
        </div>
    </div>

    <div class="container secc-kids">
        <div class="container-wrapping kids">
            
        </div>
    </div>
 
    
    
    <!-- <span><img src="/uploads/site_icons/heart-icon-g.svg" alt=""></span> -->

</body>
</html>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        
        //carga los productos promocionados en el site automáticamente.
        var promo='<div class="box-wrap">'+
                            '<div class="product-img"><div class="label_icons"><div class="label like"><span><img src="/uploads/site_icons/heart-icon-wh-groso.svg" alt=""></span></div><div class="label share"><span><img src="/uploads/site_icons/cart-icon-wh.svg" alt=""></span></div><div class="label buy"><span><img src="/uploads/site_icons/search.svg" alt=""></span></div></div>'+'<a href="">'+'<img src="uploads/site_media/cojines-quiero-trucha-trucho.jpg" alt="COJINES | NATURAL SWEET HOGAR">'+
                                '</a></div><h4>Cojines Molones</h4><p> 6.95€</p></div>';

        var promoColch='<div class="box-wrap">'+

        

                            '<div class="product-img"><div class="label_icons"><div class="label like"><span><img src="/uploads/site_icons/heart-icon-wh-groso.svg" alt=""></span></div><div class="label share"><span><img src="/uploads/site_icons/cart-icon-wh.svg" alt=""></span></div><div class="label buy"><span><img src="/uploads/site_icons/search.svg" alt=""></span></div></div><a href="">'+'<img src="uploads/site_media/colchon.png" alt="COLCHONES | NATURAL SWEET HOGAR">'+
                                '</a></div><h4>Cojines Molones</h4><p> 6.95€</p></div>';
        
        var kids='<div class="box-wrap">'+
                            '<div class="product-img"><div class="label_icons"><div class="label like"><span><img src="/uploads/site_icons/heart-icon-wh-groso.svg" alt=""></span></div><div class="label share"><span><img src="/uploads/site_icons/cart-icon-wh.svg" alt=""></span></div><div class="label buy"><span><img src="/uploads/site_icons/search.svg" alt=""></span></div></div><a href="">'+'<img src="uploads/site_media/libro-kids.png" alt="LIBROS INFANTILES | NATURAL SWEET HOGAR">'+
                                '</a></div><h4>El Moustro de colores</h4><p> 6.95€</p></div>';
        for (var i = 0; i < 9; i++) {
                
                $('.container-wrapping.promo').append(promo);
                $('.container-wrapping.colch').append(promoColch);  
                $('.container-wrapping.kids').append(kids);  
        }

    
    });




</script>