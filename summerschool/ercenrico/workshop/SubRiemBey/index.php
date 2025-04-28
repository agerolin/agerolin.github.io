<?php


$file="speakerstxt.txt";
$linecount = 0;
$handle = fopen($file, "r");

while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

$linecount = $linecount-1;

fclose($handle);

if (($linecount % 2) == 0) {
	$col =round($linecount/2);
} else {
    $col =round($linecount/2)+1;

}

$fileexp="participantstxt.txt";
$explinecount = 0;
$exphandle = fopen($fileexp, "r");

while(!feof($exphandle)){
  $expline = fgets($exphandle);
  $explinecount++;
}

fclose($exphandle);

if ($div == 0) {
     $colexp =round($explinecount/2);
} else {
    $colexp =round($explinecount/2)+1;
}


$handle = fopen("participantstxt.txt", "r");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERC GeoMeG: Geometry of Metric Groups - PI: Enrico Le Donne</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../../css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
            </div>
            </div>
        </div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#545454"><img src="../../banner.jpg" width="800" height="166"  alt=""/></td>
  </tr>
</table><br>

<div align=center>
                        <i class="fa fa-4x 	fa fa-list text-primary sr-icons"></i>
                        <h3>Sub-Riemannian Geometry and Beyond<br>
                        19-24th February 2018 - Jyväskylä, Finland</h3>
                        <div class="col-lg-12 text-center">
                          <h2 class="section-heading" style="text-align: center">Invited Speakers </h2>
                          <hr class="primary">
                          <br>
                          <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="50%" align="left"><p>
                                <?php    
$i =0;

//	while(%i <= $col)
		
		// ORDERING THE LIST BY FAMILY NAME
		$lines = file($file); //file in to an array
		$test = $lines[1];
		$array = explode('|', $test, 2);
		$newfile = array($array[1] . " | " . $array[0]);
		
		for ($i=1; $i<=$linecount; $i++) {
		
		$array = explode('|', $lines[$i], 2);
		array_push($newfile, $array[1] . " | " . $array[0]);

		}
			
		sort($newfile);
		

		for ($i = 1; $i <= $col-1; $i++) {
			$array = explode('|', $newfile[$i], 2);			echo "<a href='https://www.google.fi/search?q=".$array[1]. "+" . $array[0] ."+mathematics&oq=".$array[1]. "+" . $array[0] ."+mathematics' target='new'><span style='color: rgba(100,100,100,100)'>" . $array[1]. " " . $array[0] . "</span></a>";
			echo "<br>";
		}
?>
                                <span style="color: #666"><br>
                                      </span> </p></td>
                              <td width="50%" align="left"><p>
                                <?php     

		for ($i = $col; $i <= $col+$col-1; $i++) {
			$array = explode('|', $newfile[$i], 2);			echo "<a href='https://www.google.fi/search?q=".$array[1]. "+" . $array[0] ."+mathematics&oq=".$array[1]. "+" . $array[0] ."+mathematics' target='new'><span style='color: rgba(100,100,100,100)'>" . $array[1]. " " . $array[0] . "</span></a>";
			echo "<br>";
		}  
?>
                                <span style="color: #666"><br>
                                          </span></p></td>
                            </tr>
                          </table>
                          <p><br>
                            <br>
                          </p>
                          <h4><span class="section-subheading text-muted" style="text-align: center">Ph.D Students and Postdocs</span><br>
                            <br>
                          </h4>
                          <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="50%" align="left"><p><strong class="team-member" style="color: #333">Anna Kausamo </strong> <span style="color: #666">(University of Jyväskylä, Finland)</span><strong class="team-member" style="color: #333"><br>
                                Daniel Karlsson </strong> <span style="color: #666">(University of Jyväskylä, Finland)</span> <strong class="team-member" style="color: #333"><br>
                                  Derk Kooi</strong> <span style="color: #666">(Vrije Universiteit Amsterdam, Netherlands)<br>
                                    </span><strong class="team-member" style="color: #333">Faizan Nazar</strong> <span style="color: #666">(Université Paris-Dauphine, France)<br>
                                      <strong class="team-member" style="color: #333">Gianluca Salvioni</strong> (University of Jyväskylä, Finland) <strong><br>
                                        <strong class="team-member" style="color: #333">Jesse Railo</strong></strong>(University of Jyväskylä, Finland) <br>
                                      </span><strong class="team-member" style="color: #333">Juri Grossi </strong> <span style="color: #666">(Vrije Universiteit Amsterdam, Netherlands)<br>
                                        <strong class="team-member" style="color: #333">Louis Garringue</strong> (Université Paris-Dauphine CEREMADE, France) <br>
                                        </span><strong class="team-member" style="color: #333">Luca Nenna</strong> <span style="color: #666">(Université Paris-Dauphine e Inria-Paris, France)<br>
                                          </span><span style="color: #666"><strong class="team-member" style="color: #333">Luis Cort </strong> (University of Jyväskylä, Finland)<br>
                                            <strong class="team-member" style="color: #333"><strong class="team-member" style="color: #333">Matthew Romney</strong></strong> (University of Illinois, USA) <br>
                                            <strong class="team-member" style="color: #333"><strong class="team-member" style="color: #333">Matthieu Joseph</strong></strong> (ENS-Lyon, France) <strong class="team-member" style="color: #333"><br>
                                              Markus Penz</strong> (University of Innsbruck, Austria)<br>
                                          </span></p></td>
                              <td width="50%" align="left"><p><span style="color: #666"><strong class="team-member" style="color: #333">Mehdi Farzanehpour</strong> (Vrije Universiteit Amsterdam, Netherlands)<br>
                                <strong class="team-member" style="color: #333"><strong class="team-member" style="color: #333"><strong class="team-member" style="color: #333">Martti Rasimus </strong></strong></strong>(University of Jyväskylä, Finland) </span><strong class="team-member" style="color: #333"><br>
                                  Sara Giarrusso</strong> <span style="color: #666">(Vrije Universiteit Amsterdam, Netherlands)<br>
                                    </span><strong class="team-member" style="color: #333">Sebastiano Nicolussi Golo </strong> <span style="color: #666">(Univ. Jyväskylä and Univ. of Trento)<br>
                                      <strong class="team-member" style="color: #333">Shirsho Mukherjee</strong> (University of Jyväskylä, Finland) <br>
                                      <strong class="team-member" style="color: #333">Soeren E. B. Nielsen </strong> (Max Planck Institute-Hamburg, Germany)<br>
                                      </span><strong class="team-member" style="color: #333">Terhi Moisala </strong> <span style="color: #666">(University of Jyväskylä, Finland)<br>
                                        <strong class="team-member" style="color: #333">Timo Schultz </strong> (University of Jyväskylä, Finland) </span><strong class="team-member" style="color: #333"><br>
                                          Teemu Peltonen </strong> <span style="color: #666">(University of Jyväskylä, Finland)</span><strong class="team-member" style="color: #333"> <br>
                                            Toni Ikonen </strong> <span style="color: #666">(University of Jyväskylä, Finland)</span><strong class="team-member" style="color: #333"> <br>
                                              Vasil Rokaj</strong> <span style="color: #666">(Max Planck Institute-Hamburg, Germany)</span><span style="color: #666"><br>
                                                <strong class="team-member" style="color: #333">Ville Kivioja</strong> (University of Jyväskylä, Finland) <br>
                                              </span><span style="color: #666"><strong class="team-member" style="color: #333">Zhu Zheng </strong> (University of Jyväskylä, Finland)</span><span style="color: #666"></span></p></td>
                            </tr>
                          </table>
  </div>
                        <h3>&nbsp;</h3>
                        <div align=center>
                          <h3>&nbsp;</h3>
                          <h3>&nbsp;</h3>
                          <h3>&nbsp;</h3>
                        </div>
                        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><span style="text-align: center"></span><br></td>
                            <td><br></td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                        <h3><br>
                          <br>
                        </h3>
                        </div>

<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="100%"><br>
            <br>              <br></td>
  </tr>
</table>
</body><br></html>
