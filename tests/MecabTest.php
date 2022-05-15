<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Maalls\Mecab;

final class MecabTest extends TestCase
{
    public function testParseToNode(): void
    {
        $mecab = new Mecab();
        $nodes = $mecab->parseToNode('世界こんにちは');

        $this->assertEquals(true, is_array($nodes));

        $node = $nodes[0];

        $this->assertEquals('世界', $node->getSurface());
        $this->assertEquals("名詞,一般,*,*,*,*,世界,セカイ,セカイ", $node->getFeature());

    }

    public function testInvalidMecabResponse(): void 
    {
        $mecab = new Mecab();
        $this->expectException(\TypeError::class);
        $mecab->parseToNode([1,2]);

    }
}