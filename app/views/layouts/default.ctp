<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php echo $this->Html->charset(); ?>
<title><?php __('FoundFree.org - '); ?> <?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->meta('icon');

//echo $this->Html->css('cake.generic');

echo $this->Html->css('VectorLover');
echo $this->Html->css('grid');
?>
<style>
.grid img {
	padding: 0px
}

.gridContainer {
	margin: auto
}

.grid td:first-child {
	border-left: 0px;
	padding-right: 19px;
}

#map_canvas img,.gmnoprint img {
	background-color: transparent;
}
</style>
<script src="http://www.google.com/jsapi?key=" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<?php

echo $this->Html->script('galleria-1.2.3.min');
echo $this->Html->script('grid');

echo $scripts_for_layout;
?>

<script type="text/javascript">
                google.load("maps", "3", {'other_params':'sensor=true'});
            </script>
<script type="text/javascript">
                $(function() {
                    /*$.mobile.ajaxFormsEnabled = false;
                    $.mobile.loadingMessage = 'Loading "FoundFree" Stuff';*/


                    $("#setLocation").live("click", function() {
                        geoCoder = new google.maps.Geocoder();
                        address = $("#stuff_address").val();
                        console.log($("#stuff_address").val());
                        city = $("#stuff_city").val();
                        state = $("#stuff_state").val();
                        zip = $("#stuff_zip").val();

                        geoReq = {
                            address: address+' '+city+' '+state+' '+zip
                        };

                        geoCoder.geocode(geoReq, function(geoRslt, geoStatus) {
                            if(geoStatus=="OK") {

                                console.log(geoRslt);
                                $("#stuff_lat").val(geoRslt[0].geometry.location.Da);
                                $("#stuff_lng").val(geoRslt[0].geometry.location.Ea);
                                $("#saveFoundFree").button('enable');
                                $('#location').dialog ('close');
                                //$.mobile.changePage($("#upload"), 'slideup');
                            } else {
                                alert("Please enter a valid address");
                                return false;
                            }
                        });

                    });
                });

                function getLatLng() {
                    if(google.loader.ClientLocation != null) {
                        return new google.maps.LatLng(google.loader.ClientLocation.latitude, google.loader.ClientLocation.longitude);
                    }
                    return new google.maps.LatLng(59.3426606750, 18.0736160278);
                }

                function _getLat(){
                    return google.loader.ClientLocation.latitude;
                }

                function _getLng() {
                    return google.loader.ClientLocation.longitude;
                }

            </script>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<a name="top"></a>

			<h1 id="logo-text">
			<?php echo $this->Html->link(__('FoundFree.org', true), '/'); ?>
			</h1>
			<p id="slogan">
			<?php __('Finding and Sharing across the globe!'); ?>
			</p>

			<div id="top-menu">
				<p id="user-info">
				<?php if((bool) $AuthUser['User']) : ?>
					<small><?php __('Welcome');?> </small> <span class="info"
						style="text-decoration: bold;"> <em><?=$AuthUser['User']['first_name']." ".$AuthUser['User']['last_name'];?>
					</em> &nbsp; ( <? echo $this->Html->link(__('logout', true), array('controller'=>'users', 'action'=>'logout'));?>
						) </span>
						<? else : ?>
						<? echo $this->Html->link(__('Login', true), array('controller'=>'users', 'action'=>'login'));?>
						<? endif; ?>
				</p>
				<p>
				<?php /*
				//Search From
				echo $this->Form->create('FoundItem',
				array("action"  =>"index",
				"id"      =>"quick-search",
				"div"     =>false) );
				//Search Field
				echo $this->Form->text('search',
				array('class'  =>'tbox',
				'id'     =>'qsearch',
				'title'  =>'Start typing and hit ENTER',
				'value'  =>__('Search...',true) ) );
				//Search Btn
				echo $this->Form->submit(__('Search',true),
				array('class'  =>'btn',
				'type'   =>'image',
				'name'   =>'search',
				'src'    =>'/images/search.png') );
				//Search From end
				echo $this->Form->end(); */
				?>
				</p>
			</div>

		</div>

		<div id="nav">
			<ul>
			<?php //debug($page_action); ?>
			<?php if($page=="home") $current="current"; else $current=""; ?>
				<li id="<?=$current;?>"><?php echo $this->Html->link(__('Home', true), '/');?>
				</li>

				<?php if(($page_name=="FoundItems"||$page_name=="FoundItemImages")&&$page_action!="mystuff") $current="current"; else $current=""; ?>
				<li id="<?=$current;?>"><?php echo $this->Html->link(__('Found Stuff', true), array('controller'=>'found_items', 'action'=>'index'));?>
				</li>

				<?php if((bool) $AuthUser['User']) : ?>
				<?php if($page_name=="FoundItems"&&$page_action=="mystuff") $current="current"; else $current=""; ?>
				<li id="<?=$current;?>"><?php echo $this->Html->link(__('My Stuff', true), array('controller'=>'found_items', 'action'=>'mystuff'));?>
				</li>
				<? else : ?>
				<?php if($page_name=="Users" && $page_action!="login") $current="current"; else $current=""; ?>
				<li id="<?=$current;?>"><?php echo $this->Html->link(__('Register', true), array('controller'=>'users', 'action'=>'register'));?>
				</li>
				<? endif; ?>

				<!--<?php if($page_name=="blog") $current="current"; else $current=""; ?>
                        <li id="<?=$current;?>"><?php echo $this->Html->link(__('Blog', true), '/');?></li> -->

				<?php if($page=="about") $current="current"; else $current=""; ?>
				<li id="<?=$current;?>"><?php echo $this->Html->link(__('About', true), '/about');?>
				</li>
			</ul>


		</div>

		<!-- content -->
		<div id="content">
			<!-- <?php echo $this->Session->flash(); ?> -->
		<?php echo $content_for_layout; ?>
		</div>

		<div id="footer">
			<p>
				&copy; 2010+ <strong>FoundFree.org</strong>&nbsp; &nbsp; &nbsp;
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |
				<a href="http://validator.w3.org/check/referer">XHTML</a> | <a
					href="/">Home</a> | <strong><a href="#top" class="back-to-top">Back
						to Top</a> </strong>
			</p>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23069931-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</html>
