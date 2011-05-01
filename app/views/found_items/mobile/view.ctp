<div data-role="page" id="details">

	<div data-role="header">
		<h1>FoundFree Stuff Details</h1>
	</div>

	<div data-role="content" data-inline="true">
		<ul data-role='listview'>
			<li data-role="list-divider" role="heading" data-theme="a"
				style="text-align: center;">
				<h2 style="">
					<em> <?php echo $this->Html->link($foundItem['FoundItem']['title'], array("controller"=>"found_items", "action"=>"view", $foundItem['FoundItem']['id'])); ?>
					</em>
				</h2></li>
		</ul>
		<br />
		<div data-role="fieldcontain" class="ui-bar-c ui-corner-all ui-shadow"
			style="padding: 1em;">
			<img style="margin-left: auto; margin-right: auto;"
				src="<?=$foundItem['FoundItem']['image'];?>" id="stuff_detail_img"
				width="300" height="300" /> <br />
			<br />
			<div class="ui-bar-c ui-corner-all ui-shadow" data-theme="c"
				style="padding-top: 15px; padding-left: 15px; padding-right: 8px; padding-bottom: 5px; height: 300px; width: 300px;">
				<div id="sutff_detail_map" style="height: 290px; width: 290px;"></div>
			</div>
		</div>

	</div>

</div>

<script type="text/javascript">
$(function() {
    var info =  '<div style="text-align:center;">' +
                '<span><b><?=$title;?></b><br /> ' +
                '<span style="font-size:small;">'+
                '<em>by <?=$user;?></em></span></span><br />' +
                '<div style="margin-top:8px;"><img src="<?=$imgSm;?>" style="margin-right:auto;" />' +
                '</div>';

    $("#details").ready(function(){
        var pos = new google.maps.LatLng(<?=$lng;?>,<?=$lat;?>);
        $('#sutff_detail_map').gmap({
            'center': pos,
            'zoom':12,
            'callback': function() {
                $('#sutff_detail_map').gmap('addMarker', {
                        'position': pos,
                        'animation': google.maps.Animation.DROP,
                        'title': '<?$title;?>'
                }, function(map, marker) {
                    $('#sutff_detail_map').gmap('addInfoWindow', {
                        'position': pos,
                        'content': info
                    }, function(iw) {
                        $(marker).click(function() {
                            iw.open(map, marker);
                            map.panTo(marker.getPosition());
                        });
                    });
                });
            }
        });
    });
});
</script>
