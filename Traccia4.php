<?php
trait Calculator{
public function sum($a, $b) { 
    return $a + $b;
 }
 
 public function sub($a, $b) { 
    return $a - $b;
 }
 
 public function mul($a, $b) {
    return $a * $b;
 }
 
 public function div($a, $b) {
    return $a / $b;
 }
 
 public function sqr($a){
    return sqrt($a);
 }
}

class Rettangolo{
    use Calculator;
    public $base;
    public $height;

    public function __construct($base,$height)
    {
        $this->base=$base;
        $this->height=$height;
    }

    public function area(){
        echo "Area: ".$this->mul($this->base,2)."\n";
    }
    public function perimeter(){
        echo "Perimetro: ".$this->sum($this->mul($this->base, 2),$this->mul(2, $this->height))."\n";
    }
    public function diagonal(){
        echo "Diagonale: ";
        echo $this->sqr($this->sum($this->mul($this->base, $this->base),$this->mul($this->height, $this->height)));
        echo "\n";
    }
  

}

$rett1=new Rettangolo(3,4);
$rett1->area();
$rett1->perimeter();
$rett1->diagonal();
echo "\n\n";
$rett1=new Rettangolo(4,4);
$rett1->area();
$rett1->perimeter();
$rett1->diagonal();

