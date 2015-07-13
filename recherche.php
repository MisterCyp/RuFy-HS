<?php

$tri='search=on';

if(isset($_POST['quality']))
{
	foreach($_POST['quality'] as $quality)
	{
		$tri .='&quality='.$quality;
	}
}
if(isset($_POST['note']))
{
		$tri .='&minimum_rating='.$_POST['note'];
}

if(isset($_POST['genre']) && count($_POST['genre'])<8)
{
	foreach($_POST['genre'] as $genre)
	{
		$tri .='&genre='.$genre;
	}
}

if(isset($_POST['tri']))
{
		$tri .='&sort_by='.$_POST['tri'];
}

if(isset($_POST['champs']))
{
	$tri .='&query_term='.$_POST['champs'];
}
header('Location: index.php?'.$tri);