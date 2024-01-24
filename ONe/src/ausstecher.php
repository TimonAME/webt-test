<?php
class Sternausstecher
{
    private string $farbe;

    /**
     * @param $farbe
     */
    public function __construct($farbe)
    {
        $this->farbe = $farbe;
    }
    public function __toString()
    {
        return "Ich bin ein Sternausstecher und bin " . $this->farbe . "!";
    }

    public function getFarbe(): string
    {
        return $this->farbe;
    }

    public function setFarbe(string $farbe): void
    {
        $this->farbe = $farbe;
    }
}

class BessererSternausstecher extends Sternausstecher
{
    function claimbetter()
    {
        return "Ich bin besser! Farbe: ". $this->getFarbe();
    }
}