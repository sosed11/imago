<?php $this->pageTitle=Yii::app()->name; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" type="text/css" media="screen" >
<script type="text/javascript" src="http://malsup.github.com/jquery.corner.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.insetBorderEffect.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/demo.css" type="text/css" media="screen">
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
			
			$('.slikedef').insetBorder({
			  inset : 7,
			  borderColor : 'rgba(192, 192, 192, .3)',
			  speed : 250,
			  borderType : 'solid'
			});	
		});
		
    	$(".slikedef").corner("5px");

 </script>

	
	
<div id="razmik_header_telo"></div>
<div id="container">
		<div class="flexslider">
	    <ul class="slides">
	    	<li>
	    		<img style="padding: 5px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/slideshow1.jpg">
	    	</li>
	    	<li>
	    		<a href="#"><img style="padding: 5px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/slideshow2.jpg"></a>

	    	</li>
	    	<li>
	    		<img style="padding: 5px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/slideshow3.jpg">
	    	</li>
	    </ul>
	  </div>
</div>

<div id="domov_opisi">

	<div id="domov_opis">
		<span class="domov_opisi_naslov">Lorem ipsum</span>
		<div id="domov_opis_razmik"></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor dolor ac dolor facilisis id luctus augue fermentum. Suspendisse risus lorem, lobortis id tincidunt ac, suscipit sed massa. Nunc porta rutrum velit vel malesuada. Integer at lectus vel nulla varius rutrum.
		</div>
	<div id="domov_opis_vmes"></div>
	<div id="domov_opis">
		<span class="domov_opisi_naslov">Lorem ipsum</span>
		<div id="domov_opis_razmik"></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor dolor ac dolor facilisis id luctus augue fermentum. <br/>Suspendisse risus lorem, lobortis id tincidunt ac, suscipit sed massa. Nunc porta rutrum velit vel malesuada. Integer at lectus vel nulla varius rutrum.
	</div>
	<div id="domov_opis_vmes"></div>
	<div id="domov_opis">
		<span class="domov_opisi_naslov">Lorem ipsum</span>
		<div id="domov_opis_razmik"></div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br/><br/>Phasellus tempor dolor ac dolor facilisis id luctus augue fermentum. Suspendisse risus lorem, lobortis id tincidunt ac, suscipit sed massa. <br/>Nunc porta rutrum velit vel malesuada. Integer at lectus vel nulla varius rutrum.
	</div>
	<div id="domov_opis_vmes"></div>
	<div id="domov_opis2">
			<div id="domov_opis_vmes2"></div><span class="domov_opisi_naslov2">Prijava</span>
		<div id="domov_opis_razmik2"></div>
		<div id="domov_opis_login">
			<form method="post" action="">
				<input type="text" id="upime" class="inputtxtuser" name="upime"/><br/><br/>
				<input type="password"  id="geslo" class="inputtxtpass" name="geslo"/>
				<div id="gumb-prijava"><input type="image" class="inputprijava" id="gumbprijava" src="<?php echo Yii::app()->request->baseUrl; ?>/images/gumb-prijava.png"/></div>
			</form>
		</div>
	</div>
	<div style="clear:both;"> </div>
</div>

<div id="domov_naj">
	<div id="domov_naj_opis_levo">
		<span class="domov_opisi_naslov2">Zadnje slike</span>
		<div id="domov_opis_razmik"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div style="clear:both;"> </div>
		<div id="domov_opis_razmik"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div id="domov_opis_vmes3"></div>
		<div id="domov_slika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/demo-stuff/primer.jpg" class="slikedef" height="73" width="73"></div>
		<div style="clear:both;"> </div>
	</div>
	<div id="domov_naj_opis">
		<span class="domov_opisi_naslov3">Drugi o nas</span>
		<div id="domov_opis_razmik2"></div>
	
		<div id="domov_opis_pred_naj"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/quotes.png"></div>

		<div id="domov_naj_opis_vsebina">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor dolor ac dolor facilisis id luctus augue fermentum. 
			<div id="podpis"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/podjetja-logoti/forbes.png"></div>
		</div><br/>
		<div id="domov_opis_pred_naj"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/quotes.png"></div>
		<div id="domov_naj_opis_vsebina">
			Phasellus tempor dolor ac dolor facilisis id luctus augue fermentum. Suspendisse risus lorem, lobortis id tincidunt ac, suscipit sed massa. 
			<div id="podpis"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/podjetja-logoti/techcrunch.png"></div>
		</div>	
	</div>
	<div style="clear:both;"> </div>
</div>

