<?php



include 'settings.php';

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM orders 
 ";
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
 {
  $query .= " AND amount BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
 }
 if(isset($_POST["services"]))
 {
  $services_filter = implode("','", $_POST["services"]);
  $query .= " AND Services IN('".$services_filter."')
  ";
 }
 if(isset($_POST["state"]))
 {
  $state_filter = implode("','", $_POST["state"]);
  $query .= " AND state IN('".$state_filter."')";
 }
 
 $result = $conn->query($query);
 $data = $result->fetch_all(MYSQLI_ASSOC);
 $total_row = mysqli_num_rows($result);
 $output = '';
 if($total_row > 0)
 {
  foreach($data as $row)
  {
  $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:250px;">
     
     <p align="center"><strong><a href="#">'. $row['Services'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >'. $row['amount'] .'</h4>
     <p>Name : '. $row['firstname'].' <br />
     Email : '. $row['email'] .' <br />
     Mobile : '. $row['phone'] .' <br />
      </p>
    </div>

   </div>
   ';
  }
 }
 
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>