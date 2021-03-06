<?php
/**
 * Created by PhpStorm.
 * User: phibonachos
 * Date: 08/05/19
 * Time: 21.20
 */
// set all the variables to pages
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'php/databaseUtility.php';
require_once 'php/productUtility.php';
require_once 'php/userUtility.php';
require_once 'php/card_utility.php';

$destination = trim($_REQUEST['destination']);

$filters = [];

$filters['destination'] = $destination;
if(!empty($_REQUEST["maxPrice"]))
    $filters['maxPrice'] = $_REQUEST["maxPrice"] === "" ? 999999 : trim($_REQUEST["maxPrice"]);
if(!empty($_REQUEST["minPrice"]))
    $filters['minPrice'] = trim($_REQUEST["minPrice"]);
if(!empty($_REQUEST["arrival"]))
    $filters['arrival'] = trim($_REQUEST["arrival"]);
if(!empty($_REQUEST["departure"]))
    $filters['departure'] = trim($_REQUEST["departure"]);
if(!empty($_REQUEST["distance"]))
    $filters['distance'] = trim($_REQUEST["distance"]);
if(!empty($_REQUEST["guide"]))
    $filters['guide'] = trim($_REQUEST["guide"]);
if(!empty($_REQUEST["housing"]))
    $filters['housing'] = $_REQUEST["housing"];
if(!empty($_REQUEST["minAge"]))
    $filters['minAge'] = $_REQUEST["minAge"];
if(!empty($_REQUEST["level"]))
    $filters['level'] = $_REQUEST["level"];
if(!empty($_REQUEST["maxUsers"]))
    $filters['maxUsers'] = $_REQUEST["maxUsers"];


setcookie("filters", json_encode($filters), time()+3600, "/");

//search_items($resultColumn,$table,$columnMatch,$search,$orderby,$direction,$filters){
if(isset($_REQUEST["order"]))
    switch($_REQUEST['order']){
        case "lowest":
            $result = search_items('name, code, description, img, price, level, guide, housing, active','products',array('name','description'),$destination,"price","ASC",$filters);
            break;
        case "hightest":
            $result = search_items('name, code, description, img, price, level, guide, housing','products',array('name','description'),$destination,"price","DESC",$filters);
            break;
        case "relevance":
            $result = search_items('name, code, description, img, price, level, guide, housing','products',array('name','description'),$destination,"relevance","DESC",$filters);
            break;
        default:
            $result = search_items('name, code, description, img, price, level, guide, housing','products',array('name','description'),$destination,false,false, $filters);
    }
else
    $result = search_items('name, code, description, img, price, level, guide, housing, active','products',array('name','description'),$destination,false,false, $filters);

$number_of_trips = sizeof($result);


$h1 = "{$number_of_trips} trip".($number_of_trips>1?"s":"")." to {$destination}";

?>
<!DOCTYPE html>
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="phibonachos and PageFaultHandler">

    <title>Herschel | Trips to <?php echo $destination; ?></title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
</head>
<body>

<!-- Log In, Out and Sign Up Modal-->
<?php
if(!isset($_SESSION['id']))
    echo '<%=require("../components/login_modal_component.html")%> <%=require("../components/signup_modal_component.html")%>';
else
    echo '<%=require("../components/logout_modal_component.html")%>';
?>



<!-- mobile filters modal -->
<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white">
                    <span class="fas fa-sliders-h"></span>
                    Filter your search
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <%=require('../components/modal_search_form_component.html')%>
            </div>
        </div>
    </div>
</div>

<!-- NavBar -->
<% var template = require("../components/navbar_component.php")%>
<%= template.replace('${logo_link}', 'index.php').replace('${link-2}','#logoutModal').replace('${anchor-2}', 'Log Out').replace('${link-1}','private.php') %>

<div class="container bg-light mt-3 py-4">
    <div class="row px-4">
        <div class="col-lg-8 col-12 pl-0" id="items_column">
            <div class="d-flex">
                <div class="col-lg-12 col-10">
                    <h3 class="text-primary mb-0"><?php echo $h1; ?></h3>
                </div>
                <div class="col-2 d-lg-none text-center my-auto">
                    <button type="button" class="btn btn-light btn-outline-light" data-toggle="modal" data-target="#form_modal">
                        <span class="fas fa-sliders-h text-primary m-auto"></span>
                    </button>
                </div>
            </div>
            <div class="" id="items-container">
                <?php
                    // here iterate over found tuples and print html
                    foreach ($result as $item){
                        echo computeCard($item['code'], $item['name'], $item['price'], $item['description'], $item['img'], $item['active'], $item['level'],$item['housing'],$item['guide'],'items');
                    }
                ?>
            </div>
-        </div>
        <div class="col-lg-4 d-none d-lg-block px-2" id="filters_column">
            <div class="card shadow">
                <div class="card-header bg-primary text-white font-weight-bolder">
                    <span class="fas fa-sliders-h"></span>
                    filters
                </div>
                <div class="card-body">
                    <%=require('../components/listing_search_form_component.html')%>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="fading"></div>
<!-- Footer -->
<%=require('../components/footer_component.html')%>
</body>
</html>