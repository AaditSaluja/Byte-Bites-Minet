<?php

defined('BASEPATH') OR exit('No direct script access allowed');


if (! function_exists('menu'))
{
	function menu($file, $level = 1)
	{
		$CI =& get_instance();
		$CI->load->library(['menu']);

		$menu = new $CI->menu();
		$menu->generate($file, $level);
		$items = $menu->get_items();
		$return = "";
		foreach ($items as $item)
		{
			$return .= "<a href='{$item->link}' class='{$item->class}'><span>{$item->text}</span></a>";
		}
		return $return;
	}
}


?>