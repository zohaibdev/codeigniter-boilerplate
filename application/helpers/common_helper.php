<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	if ( ! function_exists('script')):
	    function script($var){
			foreach($var as $value):
				echo "\n".'<script type="text/javascript" src="'.base_url().$value.'.js"></script>';
			endforeach;	    
	   }   
	endif;

	if ( ! function_exists('style')):
	    function style($var){
			foreach($var as $value):
				echo "\n".'<link rel="stylesheet" href="'.base_url().$value.'.css">' ;
			endforeach;	    
	   }   
	endif;
	
