<!DOCTYPE html>
<html>
    <head>
        <title>Natural Sweet Hogar || online shopping</title>
        <meta charset="utf-8">
        <!-- <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">  -->
        <script src="assets/js/jquery.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Playfair+Display&display=swap" rel="stylesheet">
    

<style type="text/css">
body{margin:0;}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', serif;
}

h1 {font-size:30px;}
h2 {font-size:26px;}
h3 {font-size:24px;}
h4 {font-size:22px;}
h5 {font-size:20px;}
h6 {font-size:18px;}

div, p {
    font-size:14px;
    font-family: 'Lato', sans-serif;
}

/* -----------------SE PONE EL FONDO BLANCO PARA TAPAR LA IMAGEN DEL FONDO------------- */
header {
    background: #fff;
}

.nav-item:hover .sub-cats-list {
    opacity:1;
    top: 40px;
    z-index:3;
    transform:scale(1);
    transition:all ease 0.3s;
    background-color: #e4f5f5;
    
}

.sub-cats-list {
    opacity: 0;
    z-index: -1;
    top: 20px;
    position: absolute;
    left: calc(50% - 75px);
    width: 150px;
    padding: 0;
    list-style: none;
    box-shadow: 0px 3px 8px -2px rgba(0,0,0,0.2);
    border-radius: 6px !important;
    transition: all ease 0.3s;
    transform: scale(0);
    top: 0;
    flex-wrap: wrap;
    background-color: #c7dfc7;
    overflow: hidden;
}

li.sub-cat-mob-item{
    float: left;
    width: 100%;
    position:relative;
}
a.go-product {
    float: left;
    font-size: 12px;
    padding: 0;
    /* opacity: 0; */
    height: 0;
    z-index: 2;
    transition: all ease 0.3s;
    text-decoration: none;
    color: #444;
    font-family: leto;
    letter-spacing: 0.5;
}

a.go-product:hover {
    font-weight: bolder;
    transition: all ease 0.3s;
}

.sub-cats-mob-list.active a.go-product {
    height: 15px;
    opacity: 1;
    z-index: -1;
    padding: 5px;
    margin-bottom: 0px;
    transition: all ease 0.3s;
}

li.sub-cat-mob:hover h4 {
    padding: 0px 10px;
    transition: all ease 0.3s;
}
li.sub-cat-mob h4 {
    padding: 0;
    transition: all ease 0.3s;
}
.sub-cats-mob-list.active{
    padding: 15px;
    transition: all ease 0.3s;
    height: auto;
    opacity: 1;
    flex-direction: column;
}

.sub-cats-mob-list{
    z-index: 111;
    width: 150px;
    padding: 0;
    list-style: none;
    border-radius: 6px;
    transition: all ease 0.3s;
    height: 0;
    float: left;
    opacity: 0;
}

.desktop-header {
    width: 100%;
    position: relative;
    height:220px;
    
}
.content-logo-icons {
    text-align: center;
        width: 100%;
}

.logo {

}

.img-logo {
    width: 180px;
    position: relative;
    
}

.nav {
    width: 100%;
    transition: all ease .3s;
}



nav.desktop-nav {
    width:100%;
}

ul.lista-nav {
    list-style: none;
    width: 100%;
    padding: 0;
    display: flex;
    justify-content: space-between;
    max-width: 1120px;
    margin: 0 auto;
}

.lista-nav > .nav-item:first-child {
    display: none;
}

li.nav-item {
    position: relative;
    width: 120px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #666;
    font-family: Playfair Display;
    letter-spacing: 0.4px;
    font-size: 16px;
}

.nav-item .img-logo {
    width: 60px;
}

.sub-cat-item {
    float: left;
    width: 100%;
    font-family: Lato;
                }

.sub-cat-item:last-child a {
    border-bottom: none;
}
.nav-item a:hover {
    background-color: #75b491;
    transition: all ease 0.3s;
    color: white;
}

.nav-item a {
    text-decoration: none;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    color: #666;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
    border-bottom: 1px solid #eaeaea;
    float: left;
    height: 30px;
    display: flex;
    align-items: center;
    font-weight: 900;
    justify-content: center;
    transition: all ease 0.3s;
    font-family: playfair display;
}

a.tit-item-nav:hover {
    border-bottom: 4px solid #e9d4b3;
}

.delivery-nav {
    display: inline-block;
    width: 11%;
    position: relative;
    top: 27px;
    left: 35px;
}

.delivery-nav img {
    width: 49px;
}

.delivery-nav span {
    width: 60px;
    position: relative;
    top: 2px;
}

.hrs-del-nav {
    float: right;
    margin-left: 0px;
    color: darkgrey;
    font-size: 14px;
    padding-top: 8px;
}



.right-icons {
    float: right;
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
}

.cvrt-icon {
    border: 2px solid #eaeaea;
    border-radius: 50%;
    cursor: pointer;
    float: left;
    margin: 0px 22px 0px 22px;
    width: 40px;
    height: 40px;
    text-align: center;
    align-items: center;
    display: flex;
}

img.ics {
    padding: 11px;
    width: 20px;
    height: 20px;
}

.hidden{
    opacity:0;
    display:none;
}

.sub-cats-menu {
    width: 18%;
    position: absolute;
    top: 70px;
}

.content-sub-cats-menu {
    /* width: 216px; */
    position: relative;
    right: 0px;
}

li.nav-item:after {
    content: '';
    position: absolute;
    left: calc(50% - 5px);
    top: 25px;
    width: 2px;
    height: 8px;
    background: #cfcfcf;
    transform: rotate(-35deg);
    opacity:0;
}

li.nav-item:before {
    content: '';
    position: absolute;
    left: calc(50% - 1px);
    top: 25px;
    width: 2px;
    height: 8px;
    background: #cfcfcf;
    transform: rotate(35deg);
    opacity:0;
}

.menu-icon{
    display:none;
}

.menu-mob-detras {
    opacity: -1;
    z-index: -1;
    top: 0;
    left: -100%;
    position: fixed;
    width: 230px;
    background-color: #c7dfc7;
    transition: all ease .3s;
    overflow: auto;
    border-bottom: 0px solid #eee;
    display: inline-block;
    justify-content: flex-start;
    flex-wrap: wrap;
    height: 100vh;
}

.menu-mob-detras.active{
    opacity: 1;
    left: 0;
    transition: all ease .3s;
    z-index: 1234;
    top: 0;
}

ul.cat-mob {
    list-style: none;
    display: flex;
    flex-direction: column;
    padding:20px 0;
}

li.sub-cat-mob {
    font-size: 1.5em;
    text-transform: uppercase;
    color: #333;
    cursor: pointer;
    float: left;
    width: 100%;
    display: inline-block;
    padding: 5px 10px;

}  

li.sub-cat-mob:hover{
    background-color: #e4f5f5; 
}

.sub-cat-mob h4 {
    margin: 0;
    color:#444;
}              

@media (max-width:960px){
    li.nav-item:before, li.nav-item:after{
        opacity:1;
    }
    
    .menu {
        position: absolute !important;
        top: 120px !important;
        right: 53px !important;
        cursor: pointer;
    }
    
    ul.lista-nav{
        display:inline-block;
        opacity: 0;
        z-index: -1;
        
    } 

    .menu-icon{
        display:inline-block;
    }

    .rgh.lgn{
        display:none;
    }
    
    .fixed{
        display:none;
    }

}

@media (min-width:960px){
    .menu-mob-detras.active{
        display:none;
    }
}

/* --------------------------------clases para el POPUP de registro ---------------------------------------- */

.popup_login.disappear {
    z-index: -1;
    opacity: 0;
    transform: scale(.95);
    transition: all ease .3s;
}

.disappear {
    opacity: 0;
    z-index: -1;
    transform: scale(0.9);
    transition: all ease 0.3s;
}

.popup_login {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    padding: 20px;
    z-index: 9999999;
    opacity: 1;
    transform: scale(1);
    transition: all ease .3s;
    overflow: auto;
    background-color: rgba(0, 0, 0, .8);
    overflow: hidden;
}

.scene {
    /* max-width: 600px; */
    margin: 20vh auto;
    background-color: #fff;
    border-radius: 7px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, .4);
    padding: 15px;
    background: #fff;
    background-size: 60%;
    width: 80%;
    background: #c7dfc7;
    height: 500px;
}

.popup_out {
    font-size: 30px;
    border: none;
    background: none;
    font-weight: bold;
    color: #fff;
    position: absolute;
    top: 5px;
    right: 20px;
    cursor: pointer;
}



.log-info {
    width: 100%;
}

.content-log-reg {
    display: flex;
    text-align:center;
}

button.choose-opc {
    border: none;
    font-size: 1.5em;
    position: relative;
    background-color: #75b491;
    padding-top: 8px;
    padding-bottom: 8px;
    border-radius: 5px;
    color: #323232;
    font-family: Playfair Display;
    font-weight: 900;
    width: 45%;
    left: calc(50% - 140px);
    cursor: pointer;
}

/* -------------------------REGISTRAR USUARIO------------------------------------ */



.two-content {
    width: 100%;
    position: relative;
    display: flex;
}

.left-side {
    width: 50%;
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* .form-control, input[type=password], input[type=text] {
    display: block!important;
    width: 85%;
    height: 34px!important;
    padding: 6px 12px!important;
    font-size: 14px!important;
    line-height: 1.42857143!important;
    color: #555!important;
    background-color: #fff!important;
    border: 0 solid #ccc!important;
    border-radius: 10px!important;
    min-height: 45px!important;
    background: #fff!important;
    box-shadow: 0 8px 5px -6px rgba(0,0,0,.2)!important;
    margin-bottom: 5px;
} */


.form-control {
    display: flex;
    justify-content: space-between;
}

.login {
    position: absolute;
    left: -100%;
    z-index: -1;
    opacity: 0;
    height: 500px;
    padding: 0px;
    transition: all ease .3s;
}

.login.appear{
    left: 0;
    z-index: 999;
    opacity: 1;
    transition: all ease .3s;
    width: 100%;
    padding: 0;
}

.login h1 {
    color: #444;
}

.register {
    position: relative;
    left: -100%;
    z-index: -1;
    opacity: 0;
    height: 500px;
    padding: 0px;
    transition: all ease .3s;
    
}

.register.appear {
    left: 0;
    z-index: 999;
    opacity: 1;
    transition: all ease .3s;
}

.register.appear h1 {
    color: #444;
}

.formulario {
    width: 100%;
    margin-top: 50px;
}

input[type=number], input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    height: 45px;
    border-radius: 5px !important;
    border: none;
    padding: 10px;
    font-weight: 300;
    font-size: 13px!important;
    line-height: 1.42857143!important;
    color: #555!important;
    background-color: #fff!important;
    box-shadow: 0 8px 5px -6px rgba(0,0,0,.2)!important;
    margin-bottom: 10px;
}

.contras {
    display: flex;
    justify-content: space-around;
}

.btn-registrar {
    width: 100%;
    height: 40px;
    border: 1px solid;
    background: none;
    font-size: 20px;
    font-weight: bolder;
    color: #666;
    margin-top: 5px;
    border-radius: 5px;
    background: #dcaa1c;
    border: none;
    color: #fff;
    letter-spacing: 0px;
    font-family: Playfair Display;
    font-weight: 900;
}

.btn-registrar:hover {
    background-color: #666;
    color: white;
    border: none;
    cursor:pointer;
}

form.acceder-form {
    width: 100%;
    display: flex;
    flex-direction: column;
}

.form-passwd-re, .form-passwd, .firstName, .surName {
    width: 49%;
}

.explain {
    /* width: 100%; */
    position: relative;
    padding: 30px;
    margin-bottom: 150px;
    top: 100;
}



.explain p {
    letter-spacing: 1;
}

/* ---------bola movil opc------------ */

.visual-info {
    width: 119px;
    height: 30px;
    border-radius: 18px;
    box-shadow: 0 5px 15px -1px rgba(0,0,0,0.4);
    position: relative;
    left: calc(50% - 80px);
}

.visual-info .bola {
    width: 30px;
    height: 30px;
    position: relative;
    border-radius: 50%;
    background-color: #dcaa1c;
    top: 0;
    left: 0;
    transition: all ease .3s;
}
.bola.slide {
    left: 89px;
    transition: all ease .3s;
}



/* ---------------------------------------- carrito de compra ----------------------------------- */

.ver-bag {
    width: 320px;
    position: absolute;
    /* border: 1px solid black; */
    top: 90px;
    right: 45px;
    padding: 20px;
    z-index: 999;
    opacity: 1;
    background: white;
    transition: all ease .3s;
    box-shadow: 7px 6px 6px -3px rgba(0,0,0,0.3);
    border-radius: 11px;
}

.ver-bag.dissapear {
    top: -15px;
    transition: all ease .3s;
    z-index: -1;
    opacity: 0;
    right: 45px;
}

.item-in-bag {
    display: flex;
}

.item-in-bag img {
    width: 75px;
}
/* ----------------------------------------------------SUBTOTAL--------------------------------------------- */

.subtotal-bag {
    display: flex;
    align-content: center;
    justify-content: space-between;
}

p.precio-total {
    position: relative;
    top: 8px;
    color: #dcaa1c;
    font-size: 1.5em;
    font-weight: 600;
}

.finalizar button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #DCAA1C;
    color: white;
    font-family: Playfair Display;
    font-size: 1.2em;
    transition: all ease .3s;
}



.item-in-bag {
    display: flex;
    border-bottom: 1px solid #ccc;
}

.ver-full-bag button {
        width: 100%;
        border: none;
        padding: 10px;
        margin-bottom: 5px;
        background: #e4f5f5;
        color: #666;
        font-family: Playfair Display;
        font-size: 1.2em;
        transition: all ease .3s;
    }

.item-in-bag img {
    margin-right: 45px;
}


.ver-full-bag button:hover {
    background: #c7dfc7;
    transition: all ease .3s;
}

/* ------------------------ menú mobil----------------------------- */
.menu-mob-detras.active .log-mob {
    position: relative;
    left: 50px;
}

.fixed {
    position: fixed;
    top: 0;
    z-index: 130;
    background: #e4f5f5;
    padding-top: 5px;
    padding-bottom: 5px;
    transition: all ease .3s;
}
.right-side {
    width:50%;
    position:relative;
}


.fixed .lista-nav > .nav-item:first-child {
    display: block;
}

.lista-nav > .nav-item:first-child {
    display: none;
}

.fixed .nav-item {
    height: auto;
}

.arrow-back img {
    position: relative;
    top: 20px;
    left: 190px;
    cursor:pointer;
}

</style>

    </head>

<body>
    <header>
        <div class="desktop-header">
        
        <div class="popup_login disappear">

        <div class="scene"> 
        <button class="popup_out">X</button>
            
           
           
            <div class="two-content">
                <div class="left-side">
                
                    <div class="login appear">

                        <h1>Logarse</h1>

                        <div class="formulario">
                            <form action="" class="acceder-form">
                                <div class="form-email">
                                    <input type="email" name="correo" value="" class="form-control" placeholder="Correo electrónico *" required="">    
                                </div>
                                <div class="contras">
                                    <input type="password" name="password" value="" class="form-control" placeholder="contraseña *" required="">    
                                </div>
                                <button class="btn btn-registrar">Logar</button>
                            </form>
                        </div> 

                    </div>

                    <div class="register">
                        <h1>Registrarse</h1>
                        <div class="formulario">
                            <form action="" class="acceder-form">
                                <div class="form-control">
                                    <div class="firstName">
                                        <input type="text" name="first_name" value="" class="form-control" placeholder="Nombre *" required="">    
                                    </div>
                                    <div class="surName">
                                        <input type="text" name="surname" value="" class="form-control" placeholder="Apelidos *" required="">    
                                    </div>
                                </div>

                                <div class="form-control">
                                    <input type="number" name="phone" value="" class="form-control" placeholder="Teléfono *" required="">    
                                </div>

                                <div class="form-control">
                                    <input type="email" name="correo" value="" class="form-control" placeholder="Correo electrónico *" required="">    
                                </div>

                                <div class="form-control">
                                    <div class="form-passwd">
                                        <input type="password" name="password" value="" class="form-control" placeholder="contraseña *" required="">    
                                    </div>

                                    <div class="form-passwd-re">
                                        <input type="password" name="password-re" value="" class="form-control" placeholder="confirme contraseña *" required="">    
                                    </div>
                                </div>

                                <button class="btn btn-registrar">Registrar</button>
                            </form>
                        </div>
                    </div>
                
                </div>

                
                
                
                <div class="right-side">
                   
                    <div class="visual-info">
                        <div class="bola"></div>
                    </div>

                    <div class="explain">
                        <p>El registro te permitira acceder a tu historial de compras, ofertas especiales y bonos decuento. Simplemente rellena los campos y podrás 
                        participar en los sorteos de nuestros productos.</p>
                    </div>

                    <div class="log-info">
                        <button class="choose-opc" value="resgistrar">Registrarse</button>
                    </div>

                    

                </div>
            
            
            </div>
           
            <!-- <div class="buttonsPop">
                <a href="/users/iniciar-sessao" class="buttonGame entrar btn btn-popup h50">Entrar</a>
                <a href="/users/registo" class="buttonGame registar btn btn-popup h50">Registar</a>
             </div> -->
        </div>   
        </div>  
        <div class="content-logo-icons">
            <div class="logo">
                <img src="/uploads/site_media/logo_NSH_1.png" class="img-logo">
            </div>
                <div class="right-icons">
                    <div class="rgh lgn">
                        <div class="cvrt-icon log"><img src="uploads/site_icons/user.svg" alt="" class="ics log-icon"></div>
                    </div>
                    <div class="rgh bag">
                        <div class="cvrt-icon bag"><img src="uploads/site_icons/shopping-bag.svg" alt="" class="ics bag-icon"></div>
                    </div>
                </div>
            </div>

            <div class="ver-bag dissapear">
                    <p>No hay productos en el carrito</p>
                    <div class="item-in-bag">
                        <div class="img">
                            <img src="uploads/site_media/cojines-quiero-trucha-trucho.jpg" alt="">
                        </div>
                        <div class="info">
                            <p class="nombre-item">Cojines Molones</p>
                            <p class="precio-item">6.95€</p>
                        </div>
                    </div>
                        <div class="subtotal-bag">
                        <h3>SUBTOTAL</h3>
                        <p class="precio-total">6.95€</p>
                        </div>
                        <div class="ver-full-bag">
                            <button>Ver Carrito</button>
                        </div>
                        <div class="finalizar">
                            <button>Finalizar Compra</button>
                        </div>
            </div>



            <div class="menu-mobil">
                <div class="menu"><img src="uploads/site_icons/menu_icon.svg" alt="" class="menu-icon">
               </div> 
            </div>
                
                                <div class="menu-mob-detras">
                                <div class="arrow-back">
                                    <span><img src="/uploads/site_icons/arrow-left-g.svg" alt=""></span>
                                </div>
                                    <ul class="cat-mob">
                                        <li class="sub-cat-mob"><h4>Colección</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>papelería</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>textil</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>baño</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>regalo</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>alfombra</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>descanso</h4>
                                        <ul class="sub-cats-mob-list">
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                        </ul>
                                        </li>
                                        <li class="sub-cat-mob"><h4>almacenaje</h4>
                                            <ul class="sub-cats-mob-list">
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                                <li class="sub-cat-mob-item"><a href="#" class="go-product">producto prueba</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                <div class="log-mob">
                                        <div class="cvrt-icon log"><img src="uploads/site_icons/user.svg" alt="" class="ics log-icon"></div>
                                </div>
                                </div>

                               
            


        <div class="nav">       
                <ul class="lista-nav">
                    
                    <li class="nav-item">
                        <img src="/uploads/site_media/logo_NSH_1.png" class="img-logo">                        
                    </li>

                    <li class="nav-item">
                        COLECCIÓN

                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        PAPELERÍA

                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        TEXTIL

                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                            BAÑO
                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            REGALO
                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            ALFOMBRAS
                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            DESCANSO
                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                            ALMACENAJE
                        <ul class="sub-cats-list">
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                            <li class="sub-cat-item"><a href="#" class="go-product">producto prueba</a></li>
                        </ul>
                    </li>
                    
                </ul>
                </div>
            </nav>
        </div>
    </header>

    <script>
       
       $(document).ready(function(){

       

        $(document).on('click','.menu',function(){

            //array multidimensional con los productos y sub productos de la tienda
             var productos=new Array;
             var cosa=new Array();
             var subProductos=new Array('pro1','pro2','pr3','pro4','pro5','pro6');
             productos={'colección':subProductos,'baño':subProductos};

            
           
            $('.menu-mob-detras').toggleClass('active');
        });


            // carga de las subsecciones del munú movil.

            $(document).on('click','.sub-cat-mob',function(){
            
                $(this).find('.sub-cats-mob-list').toggleClass('active');


                    
            });

            //evento para recoger el menú movil.
            $(document).on('click','.arrow-back img',function(){
                // alert('menú recoger');
                $('.menu-mob-detras').removeClass('active');
            })

            // evento para o botón usuario.

           $('.log-icon').click(function(){
               console.log('logIcon');
                $('.popup_login').removeClass('disappear');
           });
           
            // evento para o botón carrito.
           $('.bag-icon').click(function(){
                alert('carrito de la compra');
           });
           
           $(document).on('click','.popup_out',function(){
                $('.popup_login').addClass('disappear');
           });

           $(document).on('click','.choose-opc',function(){
               if($('.choose-opc').val()=='registrar'){
                $('.choose-opc').val('logar');
                $('.login').removeClass('appear');
                $('.register').addClass('appear');
                $('.bola').addClass('slide');
                $('.choose-opc').text('Logarse');
               }else{
                $('.register').removeClass('appear');
                $('.login').addClass('appear');
                $('.bola').removeClass('slide');
                $('.choose-opc').text('Registrarse');
                $('.choose-opc').val('registrar');
               }
           });

           $('.cvrt-icon.bag').hover(function(){
                $('.ver-bag').toggleClass('dissapear');
           });

// --------------------------cuando hacemos scroll down al pasar el header, se mantiene un nav fijo-----------------------------
           posicionarMenu();
 
        $(window).scroll(function() {    
            posicionarMenu();
        });

        function posicionarMenu() {
            var altura_del_header = $('header').outerHeight(true);
            console.log(altura_del_header);
           
          

            if ($(window).scrollTop() >= altura_del_header){
                $('.nav').addClass('fixed');
                // $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
            } else {
                $('.nav').removeClass('fixed');
                // $('.wrapper').css('margin-top', '0');
            }
        }

           
            
       });
    </script>
