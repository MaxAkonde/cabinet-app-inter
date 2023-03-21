/*
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
var Cfg ;
$.post('ajax.php',{fct:'config'},function(retr) {
	Cfg = retr;
	if (Cfg && Cfg.displayRgpd) {
		console.log('ok Rgpd');
		$('body').append(Cfg.htmlRgpd);
		$('head').append(Cfg.styleRgpd);
	}
},'json');

jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.wheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("wheel", handle, { passive: true });
    }
};
jQuery.event.special.mousewheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("mousewheel", handle, { passive: true });
    }
};

(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write

		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setTime(+t + days * 864e+5);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));

/*
    A simple jQuery modal (http://github.com/kylefox/jquery-modal)
    Version 0.8.0
*/
!function(o){"object"==typeof module&&"object"==typeof module.exports?o(require("jquery"),window,document):o(jQuery,window,document)}(function(o,t,e,i){var s=[],l=function(){return s.length?s[s.length-1]:null},n=function(){var o,t=!1;for(o=s.length-1;o>=0;o--)s[o].$blocker&&(s[o].$blocker.toggleClass("current",!t).toggleClass("behind",t),t=!0)};o.modal=function(t,e){var i,n;if(this.$body=o("body"),this.options=o.extend({},o.modal.defaults,e),this.options.doFade=!isNaN(parseInt(this.options.fadeDuration,10)),this.$blocker=null,this.options.closeExisting)for(;o.modal.isActive();)o.modal.close();if(s.push(this),t.is("a"))if(n=t.attr("href"),/^#/.test(n)){if(this.$elm=o(n),1!==this.$elm.length)return null;this.$body.append(this.$elm),this.open()}else this.$elm=o("<div>"),this.$body.append(this.$elm),i=function(o,t){t.elm.remove()},this.showSpinner(),t.trigger(o.modal.AJAX_SEND),o.get(n).done(function(e){if(o.modal.isActive()){t.trigger(o.modal.AJAX_SUCCESS);var s=l();s.$elm.empty().append(e).on(o.modal.CLOSE,i),s.hideSpinner(),s.open(),t.trigger(o.modal.AJAX_COMPLETE)}}).fail(function(){t.trigger(o.modal.AJAX_FAIL);var e=l();e.hideSpinner(),s.pop(),t.trigger(o.modal.AJAX_COMPLETE)});else this.$elm=t,this.$body.append(this.$elm),this.open()},o.modal.prototype={constructor:o.modal,open:function(){var t=this;this.block(),this.options.doFade?setTimeout(function(){t.show()},this.options.fadeDuration*this.options.fadeDelay):this.show(),o(e).off("keydown.modal").on("keydown.modal",function(o){var t=l();27==o.which&&t.options.escapeClose&&t.close()}),this.options.clickClose&&this.$blocker.click(function(t){t.target==this&&o.modal.close()})},close:function(){s.pop(),this.unblock(),this.hide(),o.modal.isActive()||o(e).off("keydown.modal")},block:function(){this.$elm.trigger(o.modal.BEFORE_BLOCK,[this._ctx()]),this.$body.css("overflow","hidden"),this.$blocker=o('<div class="jquery-modal blocker current"></div>').appendTo(this.$body),n(),this.options.doFade&&this.$blocker.css("opacity",0).animate({opacity:1},this.options.fadeDuration),this.$elm.trigger(o.modal.BLOCK,[this._ctx()])},unblock:function(t){!t&&this.options.doFade?this.$blocker.fadeOut(this.options.fadeDuration,this.unblock.bind(this,!0)):(this.$blocker.children().appendTo(this.$body),this.$blocker.remove(),this.$blocker=null,n(),o.modal.isActive()||this.$body.css("overflow",""))},show:function(){this.$elm.trigger(o.modal.BEFORE_OPEN,[this._ctx()]),this.options.showClose&&(this.closeButton=o('<a href="#close-modal" rel="modal:close" class="close-modal '+this.options.closeClass+'">'+this.options.closeText+"</a>"),this.$elm.append(this.closeButton)),this.$elm.addClass(this.options.modalClass).appendTo(this.$blocker),this.options.doFade?this.$elm.css("opacity",0).show().animate({opacity:1},this.options.fadeDuration):this.$elm.show(),this.$elm.trigger(o.modal.OPEN,[this._ctx()])},hide:function(){this.$elm.trigger(o.modal.BEFORE_CLOSE,[this._ctx()]),this.closeButton&&this.closeButton.remove();var t=this;this.options.doFade?this.$elm.fadeOut(this.options.fadeDuration,function(){t.$elm.trigger(o.modal.AFTER_CLOSE,[t._ctx()])}):this.$elm.hide(0,function(){t.$elm.trigger(o.modal.AFTER_CLOSE,[t._ctx()])}),this.$elm.trigger(o.modal.CLOSE,[this._ctx()])},showSpinner:function(){this.options.showSpinner&&(this.spinner=this.spinner||o('<div class="'+this.options.modalClass+'-spinner"></div>').append(this.options.spinnerHtml),this.$body.append(this.spinner),this.spinner.show())},hideSpinner:function(){this.spinner&&this.spinner.remove()},_ctx:function(){return{elm:this.$elm,$blocker:this.$blocker,options:this.options}}},o.modal.close=function(t){if(o.modal.isActive()){t&&t.preventDefault();var e=l();return e.close(),e.$elm}},o.modal.isActive=function(){return s.length>0},o.modal.getCurrent=l,o.modal.defaults={closeExisting:!0,escapeClose:!0,clickClose:!0,closeText:"X",closeClass:"",modalClass:"modal",spinnerHtml:null,showSpinner:!0,showClose:!0,fadeDuration:null,fadeDelay:1},o.modal.BEFORE_BLOCK="modal:before-block",o.modal.BLOCK="modal:block",o.modal.BEFORE_OPEN="modal:before-open",o.modal.OPEN="modal:open",o.modal.BEFORE_CLOSE="modal:before-close",o.modal.CLOSE="modal:close",o.modal.AFTER_CLOSE="modal:after-close",o.modal.AJAX_SEND="modal:ajax:send",o.modal.AJAX_SUCCESS="modal:ajax:success",o.modal.AJAX_FAIL="modal:ajax:fail",o.modal.AJAX_COMPLETE="modal:ajax:complete",o.fn.modal=function(t){return 1===this.length&&new o.modal(this,t),this},o(e).on("click.modal",'a[rel~="modal:close"]',o.modal.close),o(e).on("click.modal",'a[rel~="modal:open"]',function(t){t.preventDefault(),o(this).modal()})});
// mes scritps
function popmeup(page,largeur,hauteur,options) { 
    if (options=="") options = "menubar=no,scrollbars=yes,statusbar=no";
    var top=(screen.height-hauteur)/2;     
    var left=(screen.width-largeur)/2;     
    window.open(page,"popup","top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options); 
}
function EnvoyerMotDePasse() {
    $.post('/ajax.php',{
			fct: 'EnvoyerMotDePasse',
            email:$('#mdpoemail').val()
			},function(retr) {            
				//$('#Infos').html(retr.msg).modal();
				$('#MsgInfos p').html('Vous allez bientôt recevoir par email un lien pour modifier votre mot de passe.');
				$('#MsgInfos').show();
            },'json'); 
}
function SendStockAlert() {
    $.post('/ajax.php',{
			fct: 'SendStockAlert',
            email:$('#alert_email').val(),
            produit_id:$('#alert_produit_id').val(),
            id:$('#alert_id').val()
			},function(retr) {            
				//$('#Infos').html(retr.msg).modal();
				$('#MsgInfos p').html('Vous serez avertie par email lorsque que le modèle sera de nouveau disponible.');
				$('#MsgInfos').show();
            },'json'); 
}
function SendWishlist() {
    $.post('/ajax.php',{
			fct: 'SendWishlist',
            email:$('#wlmail').val()
			},function(retr) {            
				$('#Infos').html(retr.msg).modal();
            },'json'); 
}
function GetVilles(cp, dest) {
    		$('#'+dest).html('<option>...</option>');

    		$.post('/ajax.php',{
			fct: 'GetVilles',
            cp:cp
			},function(retr) {            
				$('#'+dest).html(retr.html);
            },'json'); 
}
var tt;
function SaveDatas(FormId) {
    
    $('#Infos').html('Enregistrement en cours...').modal();
    $.post('/ajax.php',{
			fct: 'SaveDatas',
            data:$('#'+FormId).serialize()
			},function(retr) {            
				$('#Infos').html(retr.msg).modal();
                //if (retr.c) $.cookie('u',retr.c);
            },'json'); 
}
function AfficherCommande(commande_id) {
    $('#ListeCommandes').hide();
    $('#DetailCommande').html('Chargement en cours..').show();
    $.post('/ajax.php',{
			fct: 'AfficherCommande',
            commande_id:commande_id
			},function(retr) {            
				$('#DetailCommande').html(retr.html);
            },'json'); 
}
function ChangerQuantite(produit_id,variante_id,nouvelle_qte) {
    $.post('/panier.php',{
			fct: 'ChangerQuantite',
			datas: {				
				produit_id: produit_id,
				variante_id: variante_id,
				nouvelle_qte: nouvelle_qte
			}
			},function(retr) {
                if (nouvelle_qte == 0) {
                    $('.'+produit_id+'_'+variante_id).remove();                    
                } else {
                    $('#Total_'+produit_id+'_'+variante_id+' span').html(retr.NewTotal);                    
                }
                $('#Montant span').html(retr.Panier.Donnees.montant)
				$('#MiniPanierBtn').html(retr.Panier.titre);
				$('#MiniPanier').html(retr.Panier.html);
				$('#PanierCount').html(retr.Panier.nb_produits);
				self.location='/panier?e=1';
            },'json');
}
function AjouterPanier(produit_id) {
		$.post('/panier.php',{
			fct: 'AjouterPanier',
			datas: {				
				produit_id: produit_id,
				ids: CheckParam(),
				quantite: 1
			}
			},function(retr) {            
				/*$('#Infos').html(retr.html).modal();*/
				$('#MiniPanierBtn').html(retr.Panier.titre);
				$('#MiniPanier').html(retr.Panier.html);
				$('#MiniPanier').addClass('Visible');
				$('#PanierCount').html(retr.Panier.nb_produits);
				setTimeout("$('#MiniPanier').removeClass('Visible');",5000);
            },'json');    
	}
	function Wishlist2Panier(produit_id, variante_id) {
		$.post('/panier.php',{
			fct: 'AjouterPanier',
			datas: {				
				produit_id: produit_id,
				ids: {idVariante:variante_id, idPrix:'default'},
				quantite: 1
			}
			},function(retr) {            
				$('#Infos').html(retr.html).modal();
				$('#MiniPanierBtn').html(retr.Panier.titre);
				$('#MiniPanier').html(retr.Panier.html);
				$('#PanierCount').html(retr.Panier.nb_produits);
            },'json');    
	}
	function RemoveFromWishlist(produit_id, variante_id) {
		if (confirm('Retirer ce produit de votre wishlist ?')) {
		$.post('/panier.php',{
			fct: 'RemoveFromWishlist',
			datas: {				
				produit_id: produit_id,
				variante_id: variante_id
			}
			},function(retr) {            
				$('#'+produit_id+'_'+variante_id).remove();
            },'json');
		}
	}
	function AjouterWishlist(produit_id) {
		if (produit_id == 0) {
			$('#MsgInfos p').html('Vous devez creer un compte pour ajouter un produit à votre Wishlist.<br/><a href="/inscription">&nbsp;Créer un compte maintenant&nbsp;</a> <a href="/connexion">&nbsp;Accéder à mon compte&nbsp;</a>');
			$('#MsgInfos').show();
		} else {
		$.post('/panier.php',{
			fct: 'AjouterWishlist',
			datas: {				
				produit_id: produit_id,
				ids: CheckParam(),
				quantite: 1
			}
			},function(retr) {            
				$('#Infos').html(retr.html).modal();
            },'json');
		}
	}
function ViderPanier() {
		$.post('/panier.php',{
			fct: 'ViderPanier',
			datas: {				
				
			}
			},function(retr) {            
				$('#Infos').html(retr.html).modal();
				$('#MiniPanierBtn').html(retr.Panier.titre);
				$('#MiniPanier').html(retr.Panier.html);
				$('#PanierCount').html(retr.Panier.nb_produits);
            },'json');    
	}	
	function ChargerPanier() {
		$.post('/panier.php',{
			fct: 'ChargerPanier'			
			},function(retr) {            
				$('#MiniPanierBtn').html(retr.titre);
				$('#MiniPanier').html(retr.html);
				$('#PanierCount').html(retr.nb_produits);
            },'json');    
	}
	
	function CheckParam() {
		idPhoto = new Array();
		idPrix = new Array();
		idPromo = new Array();
		idVariante = new Array();
		idStock = new Array();
		ids = $('.Joue');
		
		for(ii=0; ii<ids.length; ii++) {
			if (ids[ii].className.indexOf('JPhoto') != -1) { idPhoto[idPhoto.length] = parseInt(ids[ii].value); }
			if (ids[ii].className.indexOf('JPrix') != -1) { idPrix[idPrix.length] = parseInt(ids[ii].value); }
			if (ids[ii].className.indexOf('JPromo') != -1) { idPromo[idPromo.length] = parseInt(ids[ii].value); }
			if (ids[ii].className.indexOf('JStock') != -1) { idStock[idStock.length] = parseInt(ids[ii].value); }
			idVariante[idVariante.length] = parseInt(ids[ii].value);
		}
		if (idPhoto.length > 0)
		idPhoto = '-'+idPhoto.sort(function(a, b){ return a-b }).join('-')+'-';
		else idPhoto = 'default';
		
		if (idPrix.length > 1)
		idPrix = '-'+idPrix.sort(function(a, b){ return a-b }).join('-')+'-';
        else idPrix = 'default';
		
		if (idPromo.length > 1)
		idPromo = '-'+idPromo.sort(function(a, b){ return a-b }).join('-')+'-';
		
		if (idVariante.length > 1)
		idVariante = '-'+idVariante.sort(function(a, b){ return a-b }).join('-')+'-';
		else idVariante = 'default';
		
		if (idStock.length > 0)
		idStock = '-'+idStock.sort(function(a, b){ return a-b }).join('-')+'-';
		else idVariante = 'default';

		// Mise à jour des photos ?
		if (window['ParamPhotos'] && ParamPhotos[idPhoto].length > 0) {
			html = '';
			firstPhotoId = 0;
			for(ii=0;ii<ParamPhotos[idPhoto].length;ii++) {
				photo_id = ParamPhotos[idPhoto][ii];
				if (Photos[photo_id]) {
				if (firstPhotoId == 0) firstPhotoId = photo_id;
				if (window['AjtPhotoThumb'])
				html += AjtPhotoThumb(photo_id, Photos[photo_id].nom, Photos[photo_id].description);
				else
				html += '<a href="javascript:VoirPhoto('+photo_id+')"><img id="Th'+photo_id+'" class="img-responsive" src="/500x500/'+photo_id+'-'+Photos[photo_id].nom+'" alt="'+Photos[photo_id].description+'"/></a>'
				}
			}
			$('#PhotosThumbs').html(html);
			VoirPhoto(firstPhotoId,'1000x1000');
		} else {
			html = '';
			tmp = '';
			firstPhotoId = 0;
			for(ii in Photos) {
				photo_id = ii;				
				if (firstPhotoId == 0) firstPhotoId = photo_id;
				if (window['AjtPhotoThumb']) {
					ttmp = AjtPhotoThumb(photo_id, Photos[photo_id].nom, Photos[photo_id].description);					
				} else {
					ttmp = '<a href="javascript:VoirPhoto('+photo_id+')"><img id="Th'+photo_id+'" class="img-responsive" src="/500x500/'+photo_id+'-'+Photos[photo_id].nom+'" alt="'+Photos[photo_id].description+'"/></a>';
					
				}
				if (Photos[photo_id].principale == 1) {
					firstPhotoId = photo_id;
					html = ttmp + html ;
				} else {
					html += ttmp ;
					}
			}			
			$('#PhotosThumbs').html(html);
			if (Support != 'Mobile')
						$('.carousel').slick({
				  slidesToShow: 4,
				  slidesToScroll: 1,
				  infinite:false,
				  //adaptiveHeight: true,
				  //asNavFor: '.ImgActive',
				  focusOnSelect: true,
				  vertical:true,
				  appendArrows:'#ThArrows'
				});
					VoirPhoto(firstPhotoId,'1000x1000');
			}
		if (window['ParamStock'] && ParamStock[idStock]) {
			if (ParamStock[idStock].stock > 0) {
				$('#AjouterOK').show();
				$('#AjouterKO').hide();
				$('.MailMessage').hide();
			} else {
				$('#AjouterOK').hide();
				$('#AjouterKO').show();
				$('#alert_id').val(idStock);
				$('.MailMessage').show();
			}
		}
		// Mise à jour du prix ?
		if (window['ParamPrix'] && ParamPrix[idPrix]) {
			Sticker = "#PrixBase";
			Prix = ParamPrix[idPrix];
			Promo1 = '';
			PrixBarre1 = '';
			Promo2 = '';
			PrixBarre2 = '';
			if (ParamPromos && ParamPromos['default']) {
				if (! ParamPromos[idPhoto]) {
					idPromo = 'default';
				}
				
				if (ParamPromos[idPromo].nb_prix_barres == 2) {
					Sticker = '#PrixPromo2';
					Promo1 = ParamPromos[idPromo].remise_1+'&nbsp;'+((ParamPromos[idPromo].type_de_remise == 'P')?'%':'&euro;');
					PrixBarre1 = Prix;
					Promo2 = ParamPromos[idPromo].remise_2+'&nbsp;'+((ParamPromos[idPromo].type_de_remise == 'P')?'%':'&euro;');
					if (ParamPromos[idPromo].type_de_remise == 'P') {
						PrixBarre2 = Prix - (Prix * ParamPromos[idPromo].remise_1/100);
						Prix = Prix - (Prix * ParamPromos[idPromo].remise_2/100);
					} else {
						PrixBarre2 = Prix - ParamPromos[idPromo].remise_1;
						Prix = Prix - ParamPromos[idPromo].remise_2;
					}
				} else {
					Sticker = '#PrixPromo1';
					Promo1 = ParamPromos[idPromo].remise_1+'&nbsp;'+((ParamPromos[idPromo].type_de_remise == 'P')?'%':'&euro;');
					PrixBarre1 = Prix;
					if (ParamPromos[idPromo].type_de_remise == 'P') {
						Prix = Prix - (Prix * ParamPromos[idPromo].remise_1/100);
					} else {
						Prix = Prix - ParamPromos[idPromo].remise_1;
					}
					
				}
			}
			
			html = $(Sticker).html().replace(/__PRIX__/,Prix).replace(/__PROMO1__/,Promo1).replace(/__PROMO2__/,Promo2).replace(/__PRIXBARRE1__/,PrixBarre1).replace(/__PRIXBARRE2__/,PrixBarre2);
			$('#Prix').html(html);
		}
		
		return { idPrix: idPrix, idPromo: idPromo, idStock: idStock, idVariante: idVariante };
	}
	
	function VoirPhoto(photo_id,size) {
		if (size) dir = size;
		else dir = 'photo';
		$('#PhotoGr').attr('src','/'+dir+'/'+photo_id+'-'+Photos[photo_id].nom);
	}
    

	function initAnalytics2(ua) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  
		ga('create', ua, 'auto');
		ga('send', 'pageview');
	}
	
	function gtag(){dataLayer.push(arguments);}
	
	function initAnalytics3(ua) {
		document.getElementsByTagName('head')[0].append('<script async src="https://www.googletagmanager.com/gtag/js?id='+ua+'"></script>');
		s = document.createElement('script');
		s.src = "https://www.googletagmanager.com/gtag/js?id="+ua;
		s.async = true;
		document.getElementsByTagName('head')[0].appendChild(s)
	  
		window.dataLayer = window.dataLayer || [];
	  
	  gtag('js', new Date());
	
	  gtag('config',ua);
	}

	function initAnalytics(ua) {
		if (Cfg) {
		if (Cfg.code_analytics) {
				document.getElementsByTagName('head')[0].append('<script async src="https://www.googletagmanager.com/gtag/js?id='+Cfg.code_analytics+'"></script>');
				s = document.createElement('script');
				s.src = "https://www.googletagmanager.com/gtag/js?id="+Cfg.code_analytics;
				s.async = true;
				document.getElementsByTagName('head')[0].appendChild(s)
			
				window.dataLayer = window.dataLayer || [];
			
			gtag('js', new Date());
			
			gtag('config',Cfg.code_analytics);
		}

		if (Cfg.code_google_tags) {
			(function(w,d,s,l,i){ w[l]=w[l]||[];w[l].push({ 'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer',Cfg.code_google_tags);
		}
	} else {
		setTimeout("initAnalytics('')",1000);
	}
	}
function UpdateDDN(dest) {
	$('#'+dest).val($('#DDNDay').val()+'/'+$('#DDNMonth').val()+'/'+$('#DDNYear').val())
}

function CompteARebourg() {
		ids = $('.CompteARebourg');
		now = new Date();
		now = now.getTime()/1000;
		for(i=0; i<ids.length; i++) {			
			stop = new Date($(ids[i]).attr('data-stop'));
			stop = stop.getTime()/1000;
			reste = parseInt(stop - now);
			jours = Math.floor(reste / (3600*24));
			reste = reste - (jours * 3600*24);
			heures = Math.floor(reste / 3600);
			reste = reste - (heures * 3600);
			minutes = Math.floor(reste / 60);
			reste = reste - (minutes * 60);
			secondes = reste;
			html = secondes+' s';
			if (minutes > 0) html = minutes+' m '+html;
			if (heures > 0) html = heures+' h '+html;
			if (jours > 0) html = jours+' j '+html;
			$(ids[i]).html(html);
		}
	}
	function FermerCookies(etat) {
		$.post('/ajax.php',{
				fct: 'FermerCookies',
				etat:etat
				},function(retr) {            
					$('#RGPDPan').slideUp();
				},'json'); 
	}