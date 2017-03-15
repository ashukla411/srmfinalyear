<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login_dcotor.php');
}
?>
<html>
    <head>
        <title>disease</title>
        <link rel="stylesheet" type="text/css" href="contact.css">
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .dis{
                padding-right: 50;
                padding-top: 50;
                padding-left: 50;
            }
            .disp{
                background-color: dodgerblue;
                margin-top: 100;
                margin-left: 400;
                margin-right: 500;
                padding-bottom: 50px;
                border: solid 3px;
                border-color: #afb42b;
                border-radius: 10px;
            }
        </style>
    </head>
    
    <body>
<header>


	<nav class="blue lighten-2">
	<div class="container">
    <div class="nav-wrapper">
      <a href="" class="brand-logo active">Welcome <?php echo $_SESSION['username']; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">    
          <li><a href="main_services_patient.php">SERVICES</a></li>
        <li><a href="contact_us.php">CONTACT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
	</div>
  </nav>

  </header>    
<?php
$sym = $_GET["sym"];
$days = $_GET["days"];
if($days>=91)
{
    echo "YOU MAY HAVE A CHRONIC DISEASE";
}
if ($days>7 && $days<91)
{
    echo "ATTENTION!!!<BR/>THE SYSTEM HAS REACHED ITS LIMIT PLEASE CONTACT AN EXPERT<BR>";
}
    
    
$tok = strtok($sym, " \n\t");
$medterms = array("High"=>6,"glucose"=>6,"blood"=>6,"level"=>6,
    "dehydration"=>8,"thirst"=>6,"urinary"=>7,"frequency"=>7,"fatigue"=>6,"blurred"=>6,"weight"=>5,
    "vomiting"=>3,"hunger"=>8,"excessive"=>8,"itching"=>6,"weakness"=>9,"obesity"=>8,"infection"=>9,"cholestrol"=>9
    ,"raised"=>9,"frequent"=>9,"urinal"=>7,"urination"=>9,"drowsiness"=>9,"nausea"=>3,"headache"=>9,"appetite"=>5,
    "hicups"=>8,"distorted"=>9,"haemorrharge"=>9,"detachment"=>9,"retinal"=>9,"eye"=>6,"vision"=>6,"fever"=>6,"readness"=>8
    ,"swollen"=>9,"glands"=>9,"swelling"=>9,"burning"=>9,"dry"=>9,"hair"=>9,"loss"=>9,"hardening"=>9,
    "breathing"=>9,"painful"=>9,"drooling"=>9,"swallowing"=>7,"cough"=>7,"sneezing"=>9,"chest"=>8,"coughing"=>9,"blood"=>9,
    "abdominal"=>7,"liver"=>9,"enlargement"=>9,"rash"=>8,"joints"=>8,"pain"=>8,"dark"=>9,"urine"=>9,"skin"=>9,"yellowing"=>9);
$dignos=array();
$dicount=0;
while ($tok !== false) {
    foreach ($medterms as $x => $x_value) {
        if($tok==$x)
        {
//                echo "$tok<br />";
                array_push($dignos, $tok);
                $dicount=$dicount + $x_value;
        }
    }
    $tok = strtok(" \n\t");
}
//print_r($dignos);
//echo $dicount."<br>";
$disease=array(
    "diabetes insipidus" => array(
     "glucose" => 6,
     "dehydration" => 8,
     "thirst" => 6,
     "frequency" => 7
    ),
    "diabetes mellitus" => array(
     "glucose" => 6,
     "dehydration" => 8,
     "thirst" => 6,
     "urinary" => 7,
     "fatigue" => 6,        
     "vision" => 6,
     "weight" => 5,
     "vomiting" => 3
    ),
    "diabetes type-1" => array(
     "glucose" => 6,
     "excessive" => 8,
     "itching" => 6,
     "thirst" => 6,
     "vision" => 6,
     "weakness" => 9,
     "weight" => 5
    ),
    "diabetes type-2" => array(
     "pressure" => 8,
     "hunger" => 8,
     "blurry" => 6,
     "obsity" => 9,
     "frequent" => 7,
     "cholestrol" => 9
    ),
    "diabetes ketoacidosis" => array(
     "glucose" => 6,
     "thirst" => 6,
     "frequent" => 7,
     "drowsiness" => 9,   
     "vomiting" => 3,
     "nausea" => 3
    ),
    "diabetic nephropathy" => array(
     "pressure" => 8,
     "headache" => 9,
     "vomiting" => 3,
     "appetite" => 5,
     "fatigue" => 6,        
     "nausea" => 3,
     "hiccups" => 8     
    ),
    "diabetic retinopathy" => array(
     "distorted" => 9,
     "haemorrage" => 9,
     "vision" => 6,
     "detachment" =>9
    ),
    "cutaneous abscess" => array(
     "fever" => 6,
     "redness" => 8,
     "glans" => 9,
     "swelling" => 9
    ),
    "cutaneous migrans" => array(
     "infection" => 9,
     "redness" => 8,
     "itching" => 6,
     "burning" => 9
    ),
    "cutaneous syndromes" => array(
     "dry" => 9,
     "hair" => 9,
     "itching" => 6,
     "hardening" => 9 
    ),
    "esophageal atresia" => array(
     "breathing" => 9,
     "drooling" => 9,
     "swallowing" => 7,
     "cough" => 7,
     "sneezing" =>9
    ),
    "esophageal cancer" => array(
     "cough" => 7,
     "fever" => 6,
     "nausea" => 3,
     "vomiting" => 3,
     "weight" => 5,
     "hiccups" => 8,
     "chest" => 8,
     "swallowing" => 7,
     "coughing blood" =>9
    ),
    "esophageal divesticular" => array(
     "chest" => 8,
     "swallowing" => 7,
     "cough" => 7,
     "weight" => 5
    ),
    "hepatits a" => array(
     "appetite" => 5,
     "fever" => 6,
     "abdominal" => 7,
     "vomiting" => 3,
     "itching" => 6,
     "liver" => 9
    ),
    "hepatits b" => array(
     "appetite" => 5,
     "abdominal" => 7,
     "rash" => 8,
     "vomiting" => 3,
     "fatigue" => 6,        
     "nausea" => 3,
     "joint" => 8
    ),
    "hepatits c" => array(
     "appetite" => 5,
     "fever" => 6,
     "nausea" => 3,
     "weight" => 5,
     "fatigue" => 6,        
     "vomiting" => 3,
     "abdominal" => 7
    ),
    "hepatits d" => array(
     "appetite" => 5,
     "mind" => 9,
     "joint" => 8,
     "nausea" => 3,
     "dark" => 9        
    ),
    "hepatits e" => array(
      "appetite" => 5,
      "nausea" => 3,
      "yellowing" =>9
    )
    );
$tempc;$coun;
//if(count($dignos)<4)
//{
//    print_r($dignos);
//}
?>
    <div class="disp">
    <?php
foreach ($disease as $key => $value) {
//        echo "disease=".$key."<br>";
        $tempc=0;$coun=0;
        foreach ($value as $key1 => $value1) {
//        echo "key1 ".$key1." and ".$value1."<br>";
        $tempc+=$value1;
        if(in_array($key1, $dignos))
        {
            $coun++;
        }
        }
//        echo "<br>total dis ".$tempc;
    $i=1;
        if($coun<= count($dignos) && $coun>1)
        {
            $prob=($i/$coun)*100;
            echo "<div class= 'dis'>";
            echo "You may have ".$key." with the probability of ".$prob."%";
            echo "</div>";
            $i++;            
        }   
}
?>        
    </div>
        
         
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
      $('.parallax').parallax();
    });
	  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
  </script>
    </body>
</html>

