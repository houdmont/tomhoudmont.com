// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; try { args.callee = f.caller } catch(e) {}; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};
// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

// Lettering.js
(function($){function injector(t,splitter,klass,after){var a=t.text().split(splitter),inject="";if(a.length){$(a).each(function(i,item){inject+='<span class="'+klass+(i+1)+'">'+item+"</span>"+after});t.empty().append(inject)}}var methods={init:function(){return this.each(function(){injector($(this),"","char","")})},words:function(){return this.each(function(){injector($(this)," ","word"," ")})},lines:function(){return this.each(function(){var r="eefec303079ad17405c889e092e105b0";injector($(this).children("br").replaceWith(r).end(),
r,"line","")})}};$.fn.lettering=function(method){if(method&&methods[method])return methods[method].apply(this,[].slice.call(arguments,1));else if(method==="letters"||!method)return methods.init.apply(this,[].slice.call(arguments,0));$.error("Method "+method+" does not exist on jQuery.lettering");return this}})(jQuery);

// Fittext.js
(function($){$.fn.fitText=function(kompressor,options){var compressor=kompressor||1,settings=$.extend({"minFontSize":Number.NEGATIVE_INFINITY,"maxFontSize":Number.POSITIVE_INFINITY},options);return this.each(function(){var $this=$(this);var resizer=function(){$this.css("font-size",Math.max(Math.min($this.width()/(compressor*10),parseFloat(settings.maxFontSize)),parseFloat(settings.minFontSize)))};resizer();$(window).on("resize",resizer)})}})(jQuery);

