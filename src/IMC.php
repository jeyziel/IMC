<?php declare(strict_types=1);

namespace App;


class IMC
{
    private $weight;
    private $height;
    private $IMC;

    public function __construct(float $weight, float $height)
    {
        if ($weight && $height) {
            $this->weight = $weight;
            $this->height = $height;
            $this->calculateIMC();
        }else{
            throw new \Exception('Você precisa passar um valor maior que 0');
        }

    }

    private function calculateIMC() : void
    {
        $this->IMC = $this->weight / (pow($this->height, 2));
    }

    public function checkResult() : string
    {

        if ($this->IMC < 17) {
            return 'Muito abaixo do peso';
        }

        if ($this->IMC > 17 && $this->IMC < 18.49 ) {
            return 'Abaixo do peso';
        }

        if ($this->IMC > 18.50 && $this->IMC < 24.99 ) {
            return 'Menor risco de doenças cardíacas e vasculares';
        }

        if ($this->IMC > 25 && $this->IMC < 29.99) {
            return 'Acima do peso';
        }

        if ($this->IMC > 30 && $this->IMC < 34.99) {
            return 'Acima do peso';
        }

        if ($this->IMC > 35 && $this->IMC < 39.99 ) {
            return 'Obesidade II (severa)';
        }

        return 'Obesidade III (mórbida)';
    }

    public function getIMC() : string
    {
        return number_format($this->IMC, 2, '.','');

    }







}




