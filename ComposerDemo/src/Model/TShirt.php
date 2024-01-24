<?php

namespace Htlw3r\ComposerDemo\Model;

class TShirt
{
    private string $color;
    private string $size;
    private string $material;

    /**
     * @param string $color
     * @param string $size
     * @param string $material
     */
    public function __construct(string $color, string $size, string $material)
    {
        $this->color = $color;
        $this->size = $size;
        $this->material = $material;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

}