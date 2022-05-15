<?php


namespace Maalls;

class Mecab {


	public function parseToNode(string $text) {

		$nodes = [];
		exec("echo " . $text . " | mecab", $res);
		
		if(is_array($res)) {

			foreach($res as $line) {

				if($line == 'EOS') {
					break;
				}
				else {

					list($surface, $feature) = explode("\t", $line);
					$nodes[] = new Mecab\Node($surface, $feature);
				}

				

			}

		}
		else {
			throw new \Exception("mecab command expected an array when executed with text " . $text);
		}

		return $nodes;

	}

}