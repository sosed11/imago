<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="sl" http-equiv="Content-Language">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/lavalamp_test.css" rel="stylesheet" type="text/css">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title> 
    </head>
    <body>
        <script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
        <script type="text/javascript" src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.min.js'></script>
        <script type="text/javascript" src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lavalamp.min.js'></script>
        <script type="text/javascript">
            $(function() {
                $("#1, #2, #3").lavaLamp({
                    fx: "backout", 
                    speed: 700,
                    click: function(event, menuItem) {
                        return false;
                    }
                });
            });
        </script>
        <div id="container33">
            <div id="nad_stranjo1"></div>
            <div id="nad_stranjo2"></div>
            <div id="stran">
                <div id="header">
                    <div id="header_logo_levo"></div>
                    <div id="header_logo">
                        <div id="header_logo_zgoraj"></div>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/imago-logo.png" height="82" width="200">
                    </div>
                    <div id="header_meni">
                        <div id="header_meni_zgoraj"></div>
                        <ul class="lavaLampBottomStyle" id="3">
                            <li><a href="index.php?stran=domov">domov</a></li>
                            <li><a href="#">iskanje</a></li>
                            <li><a href="#">registracija</a></li>
                            <li><a href="#">o nas</a></li>
                        </ul>
                    </div>
                </div>

                <div id="crta"></div>

                <div id="telo">
                    <?php echo $content; ?>
                </div>
            </div>
            <div id="footer">
                
            <div id="nad_stranjo2"></div>
                <div id="footerdiv">
                    <div id="footer_1">
                        <a href=""><img onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/facebook2.png'" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png'" src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png"></a>&nbsp;&nbsp;<a href=""><img onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/twitter2.png'" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png'"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png"></a>&nbsp;&nbsp;<a href=""><img onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/rss2.png'" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/images/rss.png'" src="<?php echo Yii::app()->request->baseUrl; ?>/images/rss.png"></a><div id="footer_razmik"></div>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/email.png">&nbsp; info@imago.com &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/telefon.png">&nbsp; 040 123 456 &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lokacija.png"> &nbsp;Ulica modre barve 3, 2000 Maribor
                    </div>
                    <div id="footer-desno"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/footer-imagologo.png"><br/>Copyright ©2012. All right reserved.</div>
                    <div style="clear:both;"> </div>
                </div>	
                <div>&nbsp;</div>
            </div>
        </div>
    </body>
</html>