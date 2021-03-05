<?php
// ----------------------------------   lab 7  --------------------------------
print "<h2>Lab 7 Assignment</h2>";

class Company {

public $company_name = "Colindres-Benz Automaker";
public $company_address = "1234 Automaker Dr.";
public $company_citystatezip = "Los Angeles, CA. 91344";

function getHeader($color) {
	$data = "<table style='background-color:$color;width:100%'><tr><td>";
	$data .= "<h1 style='text-align:center'>$this->company_name</h1>"; 
	$data = $data . "</td></tr></table>"; 
	return $data;
}

function getFooter($color) {
	$data = "<table style='background-color:$color;width:100%'><tr><td>";
	$data .= "<p style='text-align:center'>$this->company_address $this->company_citystatezip</p>"; 
	$data = $data . "</td></tr></table>"; 
	return $data;
}

}

$compobj = new Company();

print $compobj->getHeader("LavenderBlush");
print $compobj->getFooter("HoneyDew");
// ----------------------------------   lab 6  --------------------------------


$company_name = "Colindres-Benz Automaker";
$company_address = "1234 Automaker Dr.";
$company_citystatezip = "Los Angeles, CA. 91344";
$debug;
$car_array;

print "<h2>Lab 6 Assignment</h2>";

function getHeader($name, $color) {
	$data = "<table style='background-color:$color;width:100%'><tr><td>";
	$data .= "<h1 style='text-align:center'>$name</h1>"; 
	$data = $data . "</td></tr></table>"; 
	return $data;
}

function getFooter($address,$cityStateZip,$color) {
	$data = "<table style='background-color:$color;width:100%'><tr><td>";
	$data .= "<p style='text-align:center'>$address $cityStateZip</p>"; 
	$data = $data . "</td></tr></table>"; 
	return $data;
}

print getHeader($company_name,"aqua");
print getFooter($company_address, $company_citystatezip, "Aquamarine");


print "<hr>";   //    This draws a line between lab assignments

// ----------------------------------   lab 5  --------------------------------
print "<h2>Lab 5 Assignment</h2>";

function  create_array_cars (  )  {
    global $car_array;
    $car_array = array();
    $car_array[] = "ID: 12345, Vehicle: 2002 Ford Ranger, $6500.00, Excellent condition, low 68000 miles" ;
    $car_array[] = "ID: 45678, Vehicle: 1998 Chevy Corvette, $19995.00, Low miles 54000, Great car 4 cruising" ;
    $car_array[] = "ID: 67890, Vehicle: 2000 Toyota Camry, $9990.00, Mom wants you 2 buy a conservative car" ;
    $car_array[] = "ID: 89123, Vehicle: 1995 Honda Civic, $4500.00, 140000 miles, but a Honda, it will last" ;
}

create_array_cars();

function displayProduct($localvar) {
	
	print "<hr> Cars for sale! </hr><br>";
	
print "$localvar[0]<br>";
print "$localvar[1]<br>";
print "$localvar[2]<br>";
print "$localvar[3]<br>";
	
}

displayProduct($car_array);


print "<hr>";   //    This draws a line between lab assignments


// ----------------------------------   lab 4  --------------------------------
print "<h2>Lab 4 Assignment</h2>";


print display_company_name($company_name);
print display_company_address();




print "<hr>";   //    This draws a line between lab assignments


function display_company_name ($localvar) {
	
	print "<h> My company is $localvar </h>";
	$localvar = "Colindres-Benz Automaker";
	
}

function display_company_address() {
	global $company_name;
	global $company_address;
	global $company_citystatezip;
	
	print "<b><i> $company_name $company_address $company_citystatezip </b></i>";
}



// ----------------------------------   lab 3   --------------------------------
if (!empty($_REQUEST['debug'])) {
   $debug = true;
   print "DEBUG turned ON<br>";
}
else {
   $debug = false;
}


print "<h2>Lab 3 Assignment</h2>";

print " <a href='http://nestorcolindres.infinityfreeapp.com?debug=true'>Debug ON</a> ";
print " <a href='http://nestorcolindres.infinityfreeapp.com'>Debug OFF</a> ";




if ($debug == true) { print "Now executing Lab 3, \$company_name contains $company_name<br>"; }

else {
	
}

print "<hr>";

// ----------------------------------   lab 2  --------------------------------
print "<h2>Lab 2 Assignment</h2>";


if ($debug == true ) {
   print "Now executing Lab 3, \$company_name contains $company_name<br>";
}

print "<h1> $company_name</h1>";

print "$company_address $company_citystatezip";
    

print "<hr>";   //    This draws a line between lab assignments

//---------------------     A comment line to separate each lab    ---------------------------
// ----------------------------------   lab 1  --------------------------------
print "<H2>Lab 1 Assignment</H2>";

   print "My name is Nestor Colindres";
   
   if ($debug == true ) {
   print "Now executing Lab 3, \$company_name contains $company_name<br>";
}

?>