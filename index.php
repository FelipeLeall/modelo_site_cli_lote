<?php
include 'conexao.php';
include 'top-dark.php';
?>

<div class="home-search">
	<div class="main search-form v7">

		<!-- Heading Seleção empreendimentos -->
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-12 col-lg-10">
					<div class="heading">
						<h2>Pipipi Popopo</h2>
						<h3>Uma frase genérica para vender lote Hey!</h3>
					</div>
					<form class="" action="empreendimento.php" method="GET">
						<div class="row justify-content-md-center search-center">
							<div class="col-md-9 col-lg-8 search-select">
								<div class="input-group input-group-lg mt-5">
									<input type="hidden" id="pagina" name="pagina" value="0">

									<select class="form-control select-config" name="idempreendimento">

										<option>Selecione um Loteamento</option>

										<?php

										$buscaEmpreendimentos = "SELECT idempreendimento_cadastro, descricao_empreendimento FROM `empreendimento_cadastro`  
										ORDER BY `empreendimento_cadastro`.`descricao_empreendimento`  ASC";

										$buscaEmpreendimentos = addslashes($buscaEmpreendimentos);
										$queryEmpreendimento = mysqli_query($db, $buscaEmpreendimentos);

										while ($dados =  mysqli_fetch_array($queryEmpreendimento)) :

										?>

											<option name="idempreendimento" value="<?php echo $dados["idempreendimento_cadastro"] ?>"> <?php echo $dados["descricao_empreendimento"] ?> </option>
										<?php endwhile ?>

									</select>

									<span class="input-group-prepend ">
										<button class="btn btn-primary btn-lg btn-search" type="submit">Procurar</button>
									</span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	
	<div class="hug-seta">
		<a href="#descer" class="please-scroll-down"></a>
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
						<div class="swiper-wrapper lazyload">

							<?php
							$buscaEmpreendimentos = "SELECT idempreendimento_cadastro, descricao_empreendimento FROM `empreendimento_cadastro`  
							ORDER BY `empreendimento_cadastro`.`descricao_empreendimento`  ASC";

							$buscaEmpreendimentos = addslashes($buscaEmpreendimentos);
							$queryEmpreendimento = mysqli_query($db, $buscaEmpreendimentos);

							while ($dados =  mysqli_fetch_array($queryEmpreendimento)) :

							?>

								<div class="swiper-slide">
									<div class="card-carrossel">
										<!-- Texto -->
										<div class="text-carrossel">
											<p class="title-carrossel">Empreendimento Meio Claro</p>
											<span>...... .... ..... ..... .................... ........... ...... ....</span>
										</div>
										<!-- Imagem -->
										<a href="empreendimento.php?idempreendimento=<?php echo $dados["idempreendimento_cadastro"]?>">
											<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
												<a href="img/Modelo/meioClaro.png" itemprop="contentUrl" data-size="2000x1414">
													<img src="img/Modelo/meioClaro.png" class="img-fluid swiper-lazy" alt="Drawing Room">
												</a>
											</figure>
										</a>
										<!-- Botão -->
										<div class="button-carrossel">
											<a class="btn-carrossel" href="empreendimento.php?idempreendimento=<?php echo $dados["idempreendimento_cadastro"]?>">
												<span> Acessar </span>
											</a>
										</div>
									</div>
								</div>

							<?php endwhile ?>

						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
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
	<!-- Casso ocorra de pedirem um video -->
	<!-- <video class="search-video" autoplay loop width="0" height="0" src="img/demo/video.mp4"></video> -->
</div>
</div>

<!-- Movimenta o carrossel -->
<script type="text/javascript">
	// Photoswipe
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
			gallery.shout('helloWorld', '...' /* you may pass more arguments */ );



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

	var largura = $(window).width();
	if (largura > 991) {
		var galleryTop = new Swiper(main_gallery, {
			slidesPerView: 3,
			spaceBetween: 1,
			slidesPerGroup: 1,
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
	} else {
		var galleryTop = new Swiper(main_gallery, {
			slidesPerView: 1,
			spaceBetween: 1,
			slidesPerGroup: 1,
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
	}


	var galleryThumbs = new Swiper('.gallery-thumbs', {
		slidesPerView: 3,
		spaceBetween: 10,
		slidesPerGroup: 3,

	});
	galleryTop.controller.control = galleryThumbs;
	galleryThumbs.controller.control = galleryTop;
</script>

<?php
include 'footer.php';
?>