<?php


namespace Maalls\Mecab;

class Node {

    protected $surface;
    protected $feature;


    public function __construct($surface, $feature)
    {

        $this->surface = $surface;
        $this->feature = $feature;

    }

    public function getSurface()
    {

        return $this->surface;

    }

    public function getFeature()
    {

        return $this->feature;

    }

}