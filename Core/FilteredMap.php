<?php
/**
 * Created by PhpStorm. This class is responsible for filtering the information that comes from the user
 * User: newbel
 * Date: 11/4/16
 * Time: 3:49 PM
 */

namespace Bookstore\Core;


class FilteredMap
{

    private $map;

    public function __construct( array $baseMap)
    {

        $this->map = $baseMap;

    }

    public function has($name){

        return isset($this->map[$name]);
    }

    public function get($name){

        if($this->map[$name] != null){
            return $this->map[$name];
        }
    }

//    now we have to add methods that will prevent our validation to go smoothly
//     like intergers strings and numbers

    public  function getInt($name){

        return (int) $this->get($name);

    }

    public  function getNumber($name){

        return (float) $this->get($name);
    }

    public	function	getString($name,	$filter	=true)	{

        $value	=	(string)	$this->get($name);
        return	$filter	?	addslashes($value)	:	$value;
    }
}