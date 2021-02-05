<?php

include './conexao.php';

$idempreendimento = intval($_GET['idempreendimento']);

$busca_site_empre   = mysqli_query($db, "SELECT * FROM site_empreendimentos
                                   INNER JOIN empreendimento_cadastro ON site_empreendimentos.empreendimento_id = empreendimento_cadastro.idempreendimento_cadastro
                                   WHERE empreendimento_id = $idempreendimento");

$executa_site = mysqli_fetch_assoc($busca_site_empre);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Nome da página -->
    <title>Modelo</title>

    <!-- Icon Browser -->
    <link rel="icon" type="image/png" href="./img/Modelo/meioEscuro-circle.png">


    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate.css" rel="stylesheet">
    <link href="lib/selectric/selectric.css" rel="stylesheet">
    <link href="lib/aos/aos.css" rel="stylesheet">
    <link href="lib/Magnific-Popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/swiper/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="lib/photoswipe/default-skin/default-skin.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alt-style.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="lib/jquery-3.2.1.min.js"></script>
    <script src="lib/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/selectric/jquery.selectric.js"></script>
    <script src="lib/aos/aos.js"></script>
    <script src="lib/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="lib/photoswipe/photoswipe.min.js"></script>
    <script src="lib/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="lib/sticky-sidebar/ResizeSensor.min.js"></script>
    <script src="lib/sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="lib/swiper/js/swiper.min.js"></script>
    <script src="lib/sidr/jquery.sidr.min.js"></script>
    <script src="lib/lib.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="main">
        <!-- Pensar na solução para essa navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
            <div class="container"> -->
        <!-- Logo NavBar -->
        <!-- <a class="navbar-brand" href="index.php">
                    <span>
                        <img class="logo-config" src="img/Modelo/meioEscuro.png" alt="">
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-content" aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: hue-rotate(180deg) brightness(20%) saturate(50%);"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu-content">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" role="button">
                                Central de vendas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-btn" href="#">
                                <span> Entre em Contato</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg nav-config">
            <!-- Logo NavBar -->
            <a class="navbar-brand" href="index.php">
                <span>
                    <img class="logo-config" src="img/Modelo/meioEscuro.png" alt="">
                </span>
            </a>    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-content" aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: hue-rotate(180deg) brightness(20%) saturate(50%);"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-content">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" role="button">
                            Central de vendas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="#">
                            <span> Entre em Contato</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid home-body">
            <div class="row">
                <div class="col-12 home-config" style="background-image: url('img-site/empree-1/<?php echo $executa_site['img_principal'] ?>');">

                    <!-- Please scroll dow  -->
                    <a href="#descer" class="please-scroll-down"></a>
                </div>
            </div>
        </div>

        <!-- Dark Space -->
        <div class="dark-row">
            <div class="container">
                <div class="row">
                    <a href="descer" id="descer"></a>
                    <div class="col-12">
                        <h4 class="white-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carrossel Gallery -->
        <div class="container-fluid container-gallery">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-gallery">
                        <div class="swiper-container gallery-top" data-pswp-uid="1">
                            <div class="swiper-wrapper ">

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/claro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/claro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>

                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioClaro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioClaro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioEscuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioEscuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>

                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/escuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/escuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/claro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/claro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>

                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioClaro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioClaro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioEscuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioEscuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>

                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/escuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/escuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>


                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Miniatura está escondidada -->
                        <div class="swiper-container gallery-thumbs" hidden>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/demo/property/thumb/1.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/3.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/4.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/5.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/6.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/7.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/8.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="img/demo/property/thumb/9.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row title-container-status">
                <div class="col-12 text-center">
                    <h2>Pipipi Popopo</h2>
                    <p>is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="item-gallery">
                        <div class="swiper-container  gallery-status" data-pswp-uid="1">
                            <div class="swiper-wrapper ">

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/claro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/claro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioEscuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioEscuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/meioClaro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/meioClaro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="img/Modelo/escuro.png" itemprop="contentUrl" data-size="2000x1414">
                                            <img data-src="img/Modelo/escuro.png" src="img/spacer.png" class="img-fluid swiper-lazy" alt="Drawing Room">
                                        </a>
                                    </figure>
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="col-md-5 col-sm-12">
                    <div class="item-gallery">
                        <div class="swiper-container gallery-status-2" data-pswp-uid="1">
                            <div class="swiper-wrapper ">
                                <div class="swiper-slide config-slide-status">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide config-slide-status">
                                    <div class="row row-status-order">
                                        <div class="col-12 col-sm-11 c-title">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid c-icon">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11 c-text">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="title-status">Pipipi Popopo</h5>
                                        </div>

                                        <div class="col-1 img-fluid">
                                            <img src="img/Modelo/meioEscuro-circle.png" class="img-status" alt="evo">
                                        </div>

                                        <div class="col-11">
                                            <p class="descri-status">Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-2"></div>
                </div>
            </div>
        </div>

        <!-- Mapa do loteramento -->
        <!-- <section>
        <IFRAME id="frame" style="overflow:hidden;" name=mapa src="https://altiniempreendimentos.ibsystem.com.br/lotes_mapa.php?empreendimento_id=1" frameborder=0>
        </IFRAME>
    </section> -->

        <!-- Form -->
        <div class="container container-form">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>Entre em contato</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="col-md-5 offset-md-1 col-sm-8">
                    <div class="card-form">
                        <h4 class="title-form">Entre em contato !</h4>
                        <form action="obrigado.php" method="POST">
                            <div class="form-group row teste-input">
                                <div class="col">
                                    <input type="text" class="form-control teste-input-1" id="colFormLabel" placeholder="Nome" rquired>
                                </div>
                            </div>
                            <div class="form-group row teste-input">
                                <div class="col">
                                    <input type="text" class="form-control teste-input-1" id="colFormLabel" placeholder="Cep" rquired>
                                </div>
                            </div>
                            <div class="form-group row teste-input">
                                <div class="col">
                                    <input type="email" class="form-control teste-input-1" id="colFormLabel" placeholder="Email" rquired>
                                </div>
                            </div>
                            <div class="form-group row teste-input">
                                <div class="col">
                                    <input type="text" class="form-control teste-input-1" id="colFormLabel" placeholder="Celular">
                                </div>
                            </div>
                            <span class="input-group-prepend ">
                                <button class="btn btn-primary btn-lg btn-block btn-search btn-form" type="submit">Entrar em contato</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Modal para o photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Config Photoswipe e Carrossel -->
    <script type="text/javascript">
        // Photoswipe para a primeira galeria
        var initPhotoSwipeFromDOM = function(gallerySelector) {

            var parseThumbnailElements = function(el) {
                console.log(el);
                var thumbElements = $(el).closest(main_gallery).find('figure'),
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes 
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };



                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function(e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function(el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = $(clickedListItem).closest(main_gallery).find('figure'),
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }
                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {
                    history: false,
                    bgOpacity: 0.8,
                    loop: false,
                    barsSize: {
                        top: 0,
                        bottom: 'auto'
                    },

                    // define gallery index (for URL)
                    galleryUID: $(galleryElement).closest(main_gallery).attr('data-pswp-uid'),

                    getThumbBoundsFn: function(index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = document.querySelectorAll(main_gallery + ' img')[index],
                            //var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return {
                            x: rect.left,
                            y: rect.top + pageYScroll,
                            w: rect.width
                        };
                    }

                };

                options.index = parseInt(index, 10);

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
                gallery.shout('helloWorld', 'John' /* you may pass more arguments */ );



                var totalItems = gallery.options.getNumItemsFn();

                function syncPhotoSwipeWithOwl() {
                    var currentIndex = gallery.getCurrentIndex();
                    galleryTop.slideTo(currentIndex);
                    if (currentIndex == (totalItems - 1)) {
                        $('.pswp__button--arrow--right').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--right').removeAttr('disabled');
                    }
                    if (currentIndex == 0) {
                        $('.pswp__button--arrow--left').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--left').removeAttr('disabled');
                    }
                };
                gallery.listen('afterChange', function() {
                    syncPhotoSwipeWithOwl();
                });
                syncPhotoSwipeWithOwl();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }
        };

        var main_gallery = '.gallery-top';
        var galleryTop = new Swiper(main_gallery, {
            slidesPerView: 2,
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function() {
                    initPhotoSwipeFromDOM(main_gallery);
                },
            }
        });

        var status_gallery = '.gallery-status';
        var galleryTop = new Swiper(status_gallery, {
            slidesPerView: 1,
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            on: {
                init: function() {
                    initPhotoSwipeFromDOM(status_gallery);
                },
            }
        });

        var status_gallery = '.gallery-status-2';
        var galleryTop = new Swiper(status_gallery, {
            slidesPerView: 1,
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-2',
                clickable: true,
            },
        });
    </script>

    <?php
    include "footer.php"
    ?>