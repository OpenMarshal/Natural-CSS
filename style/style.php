/*
xs, sm, md, lg, xlg
*/

<?php
	include_once 'medias.php';
	include_once 'parameters.php';
	include_once 'columns.php';
?>


div
{
	margin: 0px;
	padding: 0px;
	font-family: 'PT Sans', Helvetica, Arial, sans-serif;;
}




.mainlogo
{
	min-height: 500px;
}



.div4 > div
{
	width: 25%;
}
.div4 > .col2
{
	width: 50%;
}


.div3 > .col2
{
	width: 66.66666%;
}



.topbanner > div,
.topbanner .btn
{
	display: inline-block;
	margin-top: 0px;
	margin-bottom: 0px;
}

.topbanner > div
{
	padding-top: 0px;
	padding-bottom: 0px;

	padding-left: 0px;
	padding-right: 0px;
}

.topbanner > .brand,
.topbanner .btn
{
	padding-top: 5px;
	padding-bottom: 5px;

	padding-left: 5px;
	padding-right: 5px;

	cursor: pointer;
}

.topbanner
{
	position: relative;
	width: 100%;
	padding: 0px;
}
.topbanner > div.brand.left
{
	float: left;
}
.topbanner > div.left
{
}
.topbanner > div.right
{
	float: right;
}
.fixed
{
	position: fixed;
}

body
{
	padding: 0px;
	margin: 0px;
}





.blockbanner
{
	font-size: 0;
}
.blockbanner > .block
{
	display: inline-block;
}





.raw
{
	width: 100%;
}





ul.hlist
{
	margin: 0px;
	padding: 0px;
}
ul.hlist > li
{
	display: list-item;
	list-style: none;
	position: relative;
}
ul.hlist:not(.right) > li, ul.hlist.left > li
{
	float: left;
}
ul.hlist.right > li
{
	float: right;
}



ul.disc > li
{
	list-style: disc inside;
}
ul.circle > li
{
	list-style: circle inside;
}
ul.square > li
{
	list-style: square inside;
}
ul.roman > li
{
	list-style: upper-roman inside;
}
ul.alpha > li
{
	list-style: lower-alpha inside;
}
ul.bigalpha > li
{
	list-style: upper-alpha inside;
}



table
{
	display: table;
	border-collapse: collapse;
	border-spacing: 0;
	box-sizing: border-box;
	width: 100%;
}
table td
{
	padding-top: 5px;
	padding-bottom: 5px;
}
table tr, table th
{
	border-bottom: 1px solid #E1E1E1;
}






/**********************************
 * Theme
 **********************************/
 <?php $defaultColor = "rgb(241, 238, 221)" ?>
.topbanner
{
	background-color: black;
	color: white;
}
.topbanner .btn:hover
{
	background-color: gray;
}
.blockbanner > .block
{
	width: <?php echo 100/$nbMenus; ?>%;
}
.blockbanner > .block > .sub
{
	margin: 10px;
}
.blockbanner > .block:last-child > .sub
{
	margin-right: 0px;
}
.blockbanner > .block:first-child > .sub
{
	margin-left: 0px;
}
.blockbanner > .block > .sub
{
	font-size: 15px; /* default font-size */
	font-weight: bold;
	color: rgb(162, 46, 36);
	background-color: <?php echo $defaultColor ?>;
	padding: 10px;
	border-radius: 2px;
}

.blockbanner > .block > .sub:hover
{
	background-color: #DD5555;
	cursor: pointer;
}
.blockbanner > .block > .sub > div
{
	text-align: center;
}
.blockbanner > .block > .sub > div:first-child
{
	margin-top: 10px;
}
.blockbanner > .block > .sub > div:last-child
{
	margin-bottom: 10px;
}

<?php _stl_($dividers, ' div') ?>
{
	font-size: 15px; /* default font-size */
}

.bg-red
{
	background-color: red !important;
}
.bg-info,
.bg-blue
{
	background-color: blue !important;
}


.ariane
{
	margin-bottom: 10px;
}


/**********************************
 * Theme Times
 **********************************/
.blockbanner > .block > .sub:hover,
.blockbanner > .block > .sub
{
	-webkit-transition: all 0.5s;
}

body
{
	background-color: #DD5555;
	background-image: url('bg.jpg');
}
.mainbody
{
	padding-right: 300px;
	padding-left: 300px;
}

.bandeau
{
	width: 300px;
}

.bandeau > div:first-child
{
	border-top-right-radius: 1px;
}
.bandeau > div:last-child
{
	border-bottom-right-radius: 1px;
	border-bottom-left-radius: 1px;
}

.bandeau > .loggin,
.bandeau > .body
{
	padding-left: 50px;
	padding-right: 50px;
	padding-top: 20px;
	padding-bottom: 20px;
}

.bandeau > .loggin
{
	background-color: #555555;
	color: #EEEEEE;
}
.bandeau > .body
{
	background-color: <?php echo $defaultColor ?>;
}


.bandeau.left
{
	float: left;
}
.bandeau.right
{
	float: right;
}

.bandeau
{
}
.bodycontent
{
}
.bodycontent > .ariane,
.bodycontent > .footer,
.bodycontent > .content
{
	margin-right: 25px;

	padding-left: 50px;
	padding-right: 50px;
	padding-top: 20px;
	padding-bottom: 20px;
}
.bodycontent > .ariane,
.bodycontent > .content
{
	background-color: <?php echo $defaultColor ?>;
	border-top-left-radius: 1px;
}
.bodycontent > .footer
{
	background-color: #EE6666;
	border-bottom-right-radius: 1px;
	border-bottom-left-radius: 1px;
}
