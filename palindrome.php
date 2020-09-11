<?php

class Palindrome {

	public function reverseString($str)
	{
		if(!$str)
		{
			return '';
		}
		$length = strlen($str); 

		$returnData = ''; 
		for($i=$length-1; $i>=0; $i--)
		{  
			$returnData .= $str{$i};
		}
		return $returnData;
	} 
}

class Main {

	public function __construct(Palindrome $palli)
	{
		$this->pallindrome = $palli;
	}

	public function fetchData($str)
	{
		return $this->pallindrome->reverseString($str);
	}

}

$palli = new Palindrome();

$obj = new Main($palli);

echo $obj->fetchData("asdf");

?>