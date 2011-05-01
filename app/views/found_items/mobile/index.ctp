<?php ?>
<div data-role="page" id="browse">
	<div role="banner" data-role="header">
		<h1>View "FoundFree" Stuff</h1>
	</div>
	<div data-role="content">
		<ul data-role='listview' id='list'></ul>
	</div>
</div>
<script type="text/javascript">
$(function() {
    $('#browse').ready(function() {
        $.getJSON('/found_items/tIndex/',function(respData) {
            var items=respData.rows;
            var list = $('#list');
            list.html("");
            $.each(items, function(key, val) {
                console.log(val);
                img = "<img src='"+val.image+"' height='100' width='100' />";
                item = "<a href='/found_items/"+val.id+"' rel=external>"+img+val.title+" <br /><small>\n\ <br />" +
                        "<em>Found By: </em>" + val.found_by + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  " +
                        "<em>Found On: </em>" + val.found_on + "</small></a>";
                list.append( $(document.createElement('li')).html(item) );
            });
            list.listview("destroy").listview();
        });
    });
});
</script>

