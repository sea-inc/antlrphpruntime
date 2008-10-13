<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t006lexer.php";
class LexerTest005 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		
		$arr = array('fo', 'faaooa');
		
		$ass = new ANTLRStringStream('fofaaooa');
		$lexer = new t006lexer($ass);
		foreach($arr as $val){
			$token = $lexer->nextToken();
			self::assertEquals(t006lexer::$FOO, $token->getType());
			self::assertEquals($val, $token->getText());
		}
		
	}
}

?>