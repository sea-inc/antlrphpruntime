<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t019lexer.php";
class LexerTest019 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$input = $this->readFile('test/t019lexer.input');
		$ass = new ANTLRStringStream($input);
		$lexer = new t019lexer($ass);
		while(true){
            $token = $lexer->nextToken();
            if ($token->type == TokenConst::$EOF){
                break;
			}
		}		
		echo $count;
		//$lexer->nextToken();
		//echo self::assertEquals($lexer->buf, $output);
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>
