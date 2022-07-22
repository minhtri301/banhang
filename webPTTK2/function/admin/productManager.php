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
/**
 * 
 */
class categories extends connectDatabase
{
	public function insert($CategoryName)
	{
		$sql = "insert into categories(CategoryName) values('$CategoryName')";
		$this->Connection()->query($sql);

	}
    public function get()
    {
        $sql ="select *from categories";
        $result=$this->Connection()->query($sql);
        return $result;
    }

}
class products extends connectDatabase
{
	
	public function insert(
            $ProductName,
            $Price,
            $Link,
            $kieudang,
            $xuatxu,
            $CategoryId
            )
	{
        $sql="insert into products(
            ProductName,
            Price,
            Link,
            kieudang,
            xuatxu,
            Id
        )

         values(
             '$ProductName',
            '$Price',
            '$Link',
              '$kieudang',
           '$xuatxu',
            '$CategoryId'
            )";

            $this->Connection()->query($sql);
		
	}


    public function show()
    {
        $sql="select * from products";
        return $this->Connection()->query($sql);

    }


    public function Delete($id)
    {
        $sql= "delete from products where ProductId='$id'";
        $this->Connection()->query($sql);
    }
    public function getUpdate($id)
    {
        $sql= "select * from products where ProductId='$id'";
         return $this->Connection()->query($sql);
    }
    public function update 
    (
            $ProductName,
            $Price,
            $Link,
            $kieudang,
            $xuatxu,
            $CategoryId,
            $ProductId
            )
    {
        $sql="update  products
            set

             ProductName='$ProductName',
             Price ='$Price' ,
             Link ='$Link', 
             kieudang = '$kieudang',
             xuatxu = '$xuatxu',
             Id ='$CategoryId'
            where ProductId ='$ProductId'
            ";

 


     $this->Connection()->query($sql);

 

    }
}

/**
 * 
 */

?>