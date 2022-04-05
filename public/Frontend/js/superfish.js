/*
 * jQuery Superfish Menu Plugin
 * Copyright (c) 2013 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 *	http://www.opensource.org/licenses/mit-license.php
 *	http://www.gnu.org/licenses/gpl.html
 */

!function(a,b){"use strict";var c=function(){var c={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},d=function(){var c=/iPhone|iPad|iPod/i.test(navigator.userAgent);return c&&a(b).load(function(){a("body").children().on("click",a.noop)}),c}(),e=function(){var a=document.documentElement.style;return"behavior"in a&&"fill"in a&&/iemobile/i.test(navigator.userAgent)}(),f=function(){return!!b.PointerEvent}(),g=function(a,b){var d=c.menuClass;b.cssArrows&&(d+=" "+c.menuArrowClass),a.toggleClass(d)},h=function(b,d){return b.find("li."+d.pathClass).slice(0,d.pathLevels).addClass(d.hoverClass+" "+c.bcClass).filter(function(){return a(this).children(d.popUpSelector).hide().show().length}).removeClass(d.pathClass)},i=function(a){a.children("a").toggleClass(c.anchorClass)},j=function(a){var b=a.css("ms-touch-action"),c=a.css("touch-action");c=c||b,c="pan-y"===c?"auto":"pan-y",a.css({"ms-touch-action":c,"touch-action":c})},k=function(b,c){var g="li:has("+c.popUpSelector+")";a.fn.hoverIntent&&!c.disableHI?b.hoverIntent(m,n,g):b.on("mouseenter.superfish",g,m).on("mouseleave.superfish",g,n);var h="MSPointerDown.superfish";f&&(h="pointerdown.superfish"),d||(h+=" touchend.superfish"),e&&(h+=" mousedown.superfish"),b.on("focusin.superfish","li",m).on("focusout.superfish","li",n).on(h,"a",c,l)},l=function(b){var c=a(this),d=c.siblings(b.data.popUpSelector);d.length>0&&d.is(":hidden")&&(c.one("click.superfish",!1),"MSPointerDown"===b.type||"pointerdown"===b.type?c.trigger("focus"):a.proxy(m,c.parent("li"))())},m=function(){var b=a(this),c=q(b);clearTimeout(c.sfTimer),b.siblings().superfish("hide").end().superfish("show")},n=function(){var b=a(this),c=q(b);d?a.proxy(o,b,c)():(clearTimeout(c.sfTimer),c.sfTimer=setTimeout(a.proxy(o,b,c),c.delay))},o=function(b){b.retainPath=a.inArray(this[0],b.$path)>-1,this.superfish("hide"),this.parents("."+b.hoverClass).length||(b.onIdle.call(p(this)),b.$path.length&&a.proxy(m,b.$path)())},p=function(a){return a.closest("."+c.menuClass)},q=function(a){return p(a).data("sf-options")};return{hide:function(b){if(this.length){var c=this,d=q(c);if(!d)return this;var e=d.retainPath===!0?d.$path:"",f=c.find("li."+d.hoverClass).add(this).not(e).removeClass(d.hoverClass).children(d.popUpSelector),g=d.speedOut;b&&(f.show(),g=0),d.retainPath=!1,d.onBeforeHide.call(f),f.stop(!0,!0).animate(d.animationOut,g,function(){var b=a(this);d.onHide.call(b)})}return this},show:function(){var a=q(this);if(!a)return this;var b=this.addClass(a.hoverClass),c=b.children(a.popUpSelector);return a.onBeforeShow.call(c),c.stop(!0,!0).animate(a.animation,a.speed,function(){a.onShow.call(c)}),this},destroy:function(){return this.each(function(){var e,b=a(this),d=b.data("sf-options");return!!d&&(e=b.find(d.popUpSelector).parent("li"),clearTimeout(d.sfTimer),g(b,d),i(e),j(b),b.off(".superfish").off(".hoverIntent"),e.children(d.popUpSelector).attr("style",function(a,b){return b.replace(/display[^;]+;?/g,"")}),d.$path.removeClass(d.hoverClass+" "+c.bcClass).addClass(d.pathClass),b.find("."+d.hoverClass).removeClass(d.hoverClass),d.onDestroy.call(b),void b.removeData("sf-options"))})},init:function(b){return this.each(function(){var d=a(this);if(d.data("sf-options"))return!1;var e=a.extend({},a.fn.superfish.defaults,b),f=d.find(e.popUpSelector).parent("li");e.$path=h(d,e),d.data("sf-options",e),g(d,e),i(f),j(d),k(d,e),f.not("."+c.bcClass).superfish("hide",!0),e.onInit.call(this)})}}}();a.fn.superfish=function(b,d){return c[b]?c[b].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof b&&b?a.error("Method "+b+" does not exist on jQuery.fn.superfish"):c.init.apply(this,arguments)},a.fn.superfish.defaults={popUpSelector:"ul,.sf-mega",hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:a.noop,onBeforeShow:a.noop,onShow:a.noop,onBeforeHide:a.noop,onHide:a.noop,onIdle:a.noop,onDestroy:a.noop}}(jQuery,window);