<?php
class single{
	protected static $instance = null;
	
	public static function getInstance()
    {
        if (null === self::$instance) { //特别注意self 不是 $self
            self::$instance = new self();
        }
        return self::$instance;
    }
	
	protected function __construct(){
		
	}
}

$s1 = single::getInstance();
$s2 = single::getInstance();

if($s1 === $s2){
	echo "同一个";
}else{
	echo "不同";
}