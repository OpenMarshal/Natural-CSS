


<?php

	$sizes = array();
	$sizes[] = 'xs';
	$sizes[] = 'sm';
	$sizes[] = 'md';
	$sizes[] = 'lg';

	function addThemAll(&$array, $str)
	{
		global $sizes;
		
		foreach($sizes as $k => $size)
			$array[] = $size.'-'.$str;
	}

	$dividers = array();
	$dividers[] = "div4";
	$dividers[] = "div3";
	addThemAll($dividers, "div1");
	addThemAll($dividers, "div2");
	addThemAll($dividers, "div3");
	addThemAll($dividers, "div4");




	function _stl_($array, $adder = '')
	{
		$str = '';
		foreach($array as $k => $v)
		{
			if($str !== '')
				$str .= $adder.',';
			$str .= '.'.$v;
		}
		echo $str.$adder;
	}

	function allColumns($size)
	{
		$columns = array();
		for($i = 1; $i <= 4; $i++)
			$columns[$i] = $size.'-div'.$i;
		return $columns;
	}
	
	

?>

<?php _stl_($dividers) ?>
{
	width: 100%;
	font-size: 0;
}
<?php _stl_($dividers, ' > div') ?>
{
	float: left;
	display: inline-block;
}



<?php

	function printAll($size)
	{
		global $sizes;
		
		foreach (allColumns($size) as $k => $v)
		{
			echo ".$v > div, .$v > .col1, .$v > .$size-col1 { width: ".(1/$k * 100)."%; }";

			for($i = 2; $i <= $k; $i++)
			{
				echo ".$v > .col$i, .$v > .$size-col$i { width: ".(1/$k * 100 * $i)."%; }";
			}
			
			echo ".$size-hidden { display: none!important; }";
			echo ".$size-visible { display: inline-block; }";
		}
	}

?>

<?php xs_media(); ?>
{
	<?php printAll('xs'); ?>
}
<?php sm_media(); ?>
{
	<?php printAll('sm'); ?>
}
<?php md_media(); ?>
{
	<?php printAll('md'); ?>
}
<?php lg_media(); ?>
{
	<?php printAll('lg'); ?>
}
