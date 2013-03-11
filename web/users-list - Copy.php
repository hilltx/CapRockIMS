<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://http://localhost/flexigrid/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/flexigrid/css/flexigrid.pack.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://localhost/flexigrid/js/flexigrid.js"></script>




</head>

<body>
<table class="flexme3" style="display: none"></table>

	<script type="text/javascript">
		$('.flexme1').flexigrid();
		$('.flexme2').flexigrid({
			height : 'auto',
			striped : false
		});

		$(".flexme3").flexigrid({
			url : 'post-xml.php',
			dataType : 'xml',
			colModel : [ {
				display : 'ISO',
				name : 'iso',
				width : 40,
				sortable : true,
				align : 'center'
			}, {
				display : 'Name',
				name : 'name',
				width : 180,
				sortable : true,
				align : 'left'
			}, {
				display : 'Printable Name',
				name : 'printable_name',
				width : 120,
				sortable : true,
				align : 'left'
			}, {
				display : 'ISO3',
				name : 'iso3',
				width : 130,
				sortable : true,
				align : 'left',
				hide : true
			}, {
				display : 'Number Code',
				name : 'numcode',
				width : 80,
				sortable : true,
				align : 'right'
			} ],
			 
			searchitems : [ {
				display : 'ISO',
				name : 'iso'
			}, {
				display : 'Name',
				name : 'name',
				isdefault : true
			} ],
			sortname : "iso",
			sortorder : "asc",
			usepager : true,
			title : 'Countries',
			useRp : true,
			rp : 15,
			showTableToggleBtn : true,
			width : 700,
			height : 200
		});

		function test(com, grid) {
			if (com == 'Delete') {
				confirm('Delete ' + $('.trSelected', grid).length + ' items?')
			} else if (com == 'Add') {
				alert('Add New Item');
			}
		}
	</script>
<?php

/**
 * @author 
 * @copyright 2012
 */



?>

</body>
</html>
