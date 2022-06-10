<?php
class Order {
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "hservices";   
	private $ordersTable = 'orders';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}		
	public function getServices(){
		$sqlQuery = "
			SELECT DISTINCT(Services)
			FROM ".$this->ordersTable." 
			 ORDER BY Services ASC";
        return  $this->getData($sqlQuery);
	}
	public function getState(){
		$sqlQuery = "
			SELECT DISTINCT(state)
			FROM ".$this->ordersTable." 
			 ORDER BY state ASC";
        return  $this->getData($sqlQuery);
	}
	
	public function searchOrders(){
		$sqlQuery = "SELECT * FROM ".$this->ordersTable."" ;
		if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
			$sqlQuery .= "
			AND amount BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
		}
		if(isset($_POST["Services"])) {
			$brandFilterData = implode("','", $_POST["Services"]);
			$sqlQuery .= "
			AND Services IN('".$brandFilterData."')";
		}
		if(isset($_POST["state"])){
			$ramFilterData = implode("','", $_POST["state"]);
			$sqlQuery .= "
			AND state IN('".$ramFilterData."')";
		}
		
		$sqlQuery .= " ORDER By id";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		$totalResult = mysqli_num_rows($result);
		$searchResultHTML = '';
		if($totalResult > 0) {
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				$searchResultHTML .= '
				<div class="col-sm-4 col-lg-3 col-md-3">
				<div class="product">
				
				<p><strong><a href="#">'. $row['additional'] .'</a></strong></p>
				<h4 class="text-danger" >'. $row['amount'] .'</h4>
				<p>Name : '. $row['firstname'].' <br />
				Email : '. $row['email'] .' <br />
				Mobile : '. $row['phone'] .' <br />
				
      </p>
				</div>
				</div>';
			}
		} else {
			$searchResultHTML = '<h3>No orders found.</h3>';
		}
		return $searchResultHTML;	
	}	
}
?>