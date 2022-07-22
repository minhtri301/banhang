<?php
class connectDatabase
{

    public $sever ;
    public $userName ;
    public $password ;
    public $dataName ;
    public $result ;
    public function Connection()
    {
        $this->sever="localhost";
        $this->userName = "root";
        $this->password ="Abc1234567";
        $this->dataName ="tri";
        $result = new mysqli($this->sever, $this->userName,$this->password,$this->dataName);
        return $result;

    }


}



class products extends connectDatabase
{
	
	public function getProduct()
	{

		$sql = "select *from products where kieudang='Thucpham' or kieudang='Thucuong' " ;
        return 		$result=$this->Connection()->query($sql);

	}



}
class categories extends connectDatabase
{
    public function getCategoryName()
    {

        $sql = "select *from categories ";
            return $result=$this->Connection()->query($sql);
    }
   

}
?>