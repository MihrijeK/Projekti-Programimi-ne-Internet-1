?php
class product{
    private $bookID;
    private $bookName;
    private $price;
    private $quantity;
    private $fotoPath;

    public function __construct($bookID,$bookName,$price,$fotoPath,$quantity=1){
        $this->bookID=$bookID;
        $this->bookName=$bookName;
        $this->price=$price;
        $this->fotoPath=$fotoPath;
        $this->quantity=$quantity;
    }

    public function getID(){
        return $this->bookID;
    }

    public function getBookName(){
        return $this->bookName;
    }
    public function getPrice(){
        return $this->price;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPath(){
        return $this->fotoPath;
    }

    public function setQuantity($quantity){
        $this->quantity=$quantity;
    }

}

?>
