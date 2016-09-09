<div class="contenedor">
    <div id="loader-wrapper">
      <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1"><div class="loader-circle-2"></div></div>
        <div class="needle"></div>
        <div class="loading">MR</div>
      </div>
    </div>
</div>

<style>
#loader-wrapper{position: absolute; left: 0; top: 0; right: 0; bottom: 0; background: #000; z-index: 15; overflow: hidden;}

.loader{width: 150px; height: 150px; border: 2px #fd6f0e solid; position: absolute; left: 50%; top: 50%; margin: -75px 0 0 -75px; border-radius: 50%;}

.loader .loading{font-size: 10px; position: absolute; width: 100%; text-align: center; line-height: 14px; font-family: 'Century Gothic', sans-serif; font-style: italic; left: 0; top: 50%; margin-top: 20px; color: #fff; font-weight: bold; text-transform: uppercase;}

.loader-circle-1{width: 138px; height: 138px; left: 5px; top: 5px; border: 1px #fff solid; border-radius: 50%; position: absolute; border-right-color: transparent;
-webkit-animation: spin 3s linear infinite;
        animation: spin 3s linear infinite;
}

.loader-circle-2{width: 126px; height: 126px; left: 5px; top: 5px; border: 1px transparent solid; border-radius: 50%; position: absolute; border-right-color: #e81512;
-webkit-animation: spin 5s linear infinite;
        animation: spin 5s linear infinite;
}

.loader .line{width: 10px; height: 2px; background: #fff; position: absolute;}

.loader .line:nth-child(1){left: 16px; top: 50%; margin-top: -1px;}

.loader .line:nth-child(2){transform: rotate(45deg); -moz-transform: rotate(45deg); -webkit-transform: rotate(45deg); -ms-transform: rotate(45deg); left: 33px; top: 33px;}

.loader .line:nth-child(3){top: 16px; left: 50%; width: 2px; height: 10px;}

.loader .line:nth-child(4){transform: rotate(135deg); -moz-transform: rotate(135deg); -webkit-transform: rotate(135deg); -ms-transform: rotate(135deg); right: 33px; top: 33px;}

.loader .line:nth-child(5){right: 16px; top: 50%; margin-top: -1px;}

.loader .line:nth-child(6){transform: rotate(45deg); -moz-transform: rotate(45deg); -webkit-transform: rotate(45deg); -ms-transform: rotate(45deg); right: 33px; bottom: 33px; background: #e81512;}

.loader .subline{position: absolute; width: 3px; height: 2px; background: #fff;}

.loader .subline:nth-child(7){transform: rotate(22.5deg); -moz-transform: rotate(22.5deg); -webkit-transform: rotate(22.5deg); -ms-transform: rotate(22.5deg); left: 21px; top: 50px;}

.loader .subline:nth-child(8){transform: rotate(67.5deg); -moz-transform: rotate(67.5deg); -webkit-transform: rotate(67.5deg); -ms-transform: rotate(67.5deg); left: 50px; top: 21px;}

.loader .subline:nth-child(9){transform: rotate(112.5deg); -moz-transform: rotate(112.5deg); -webkit-transform: rotate(112.5deg); -ms-transform: rotate(112.5deg); right: 50px; top: 21px;}

.loader .subline:nth-child(10){transform: rotate(157.5deg); -moz-transform: rotate(157.5deg); -webkit-transform: rotate(157.5deg); -ms-transform: rotate(157.5deg); right: 21px; top: 50px;}

.loader .subline:nth-child(11){transform: rotate(22.5deg); -moz-transform: rotate(22.5deg); -webkit-transform: rotate(22.5deg); -ms-transform: rotate(22.5deg); right: 20px; bottom: 49px; background: #e81512;}

.loader .needle{width: 14px; height: 14px; border-radius: 50%; border: 1px #fff solid; position: absolute; left: 50%; top: 50%; margin: -8px 0 0 -8px;  z-index: 1;  
-webkit-animation: pegIt 3s infinite ease-in-out;
        animation: pegIt 3s infinite ease-in-out;
}

.loader .needle:before{content: ""; width: 0; height: 0; border-style: solid; border-width: 3.5px 50px 3.5px 0; border-color: transparent #fe4389 transparent transparent; position: absolute; right: 50%; top: 50%; margin: -3.5px 0 0 0; border-radius: 0 50% 50% 0;}

@keyframes pegIt {
  0% {transform: rotate(0deg);}
  16% {transform: rotate(75deg);}
  25% {transform: rotate(55deg);}
  30% {transform: rotate(90deg);}
  36% {transform: rotate(170deg);}
  42% {transform: rotate(150deg);}
  50% {transform: rotate(227deg);}
  100% {transform: rotate(0deg);}
}

@-webkit-keyframes pegIt {
  0% {-webkit-transform: rotate(0deg);}
  16% {-webkit-transform: rotate(75deg);}
  25% {-webkit-transform: rotate(55deg);}
  30% {-webkit-transform: rotate(90deg);}
  36% {-webkit-transform: rotate(170deg);}
  42% {-webkit-transform: rotate(150deg);}
  50% {-webkit-transform: rotate(227deg);}
  100% {-webkit-transform: rotate(0deg);}
}

@-webkit-keyframes spin {
  0% {-webkit-transform: rotate(0deg);}
  100% {-webkit-transform: rotate(360deg);}
}
@keyframes spin {
  0% {transform: rotate(0deg);}
  100% {transform: rotate(360deg);}
	}
</style>

<script>
(function() {
	var state = document.readyState;
	if(state === 'interactive' || state === 'complete') {
		jQuery('.contenedor').fadeOut(1000,"linear");
		clearTimeout(arguments.callee);
	}
	else setTimeout(arguments.callee, 300);
})();
</script>