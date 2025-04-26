<?php

class nilai{
    private $status;

    public function setStatus($nilai): void{
        if($nilai>=50){
            $this -> status='lulus';
        }else{
            $this-> status='tidak lulus';
        }
    }

    public function getStatus(): string{
        return $this -> status;
    }
}
$objekNilai = new Nilai();
$objekNilai -> setStatus(nilai: 40);
echo $objekNilai -> getStatus();

?>