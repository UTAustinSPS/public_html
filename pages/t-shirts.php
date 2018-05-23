<!DOCTYPE html>
<html>
<head>
	<title>UT SPS - T-shirts</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" href="../pictures/favicon.ico"/>
    
<!-- js and jquery listed BEFORE css -->
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/dropdownfix.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/mdb.css"> -->

    <style>
         .info, .success, .warning, .error {
	    margin: 10px 0px;
	    padding:10px;
	}
	.info {
    	    color: #00529B;
	    background-color: #BDE5F8;
	}
	.success {
	    color: #4F8A10;
	    background-color: #DFF2BF;
	}
	.warning {
	    color: #9F6000;
	    background-color: #FEEFB3;
	}
	.error {
	    color: #D8000C;
	    background-color: #FFD2D2;
	}
	td{
	    padding: 5px;
	}
      </style>
</head>
<body>

    

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark scrolling-navbar">
        <logo><a class="navbar-brand" href="../index.html"><strong>UT Austin Society of Physics Students</strong></a></logo>
        <button class="navbar-toggler" id="Nav" type="button" data-toggle="collapse dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./officers.html">Officers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./EPE.html">Sigma Pi Sigma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./uWiP.html">uWiP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="./resources.html">Resources</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="#">T-Shirts</a>
                </li>
                <li class="nav-item dropdown" id="Drop"> <!-- 'Drop' id used to make dropdown work -->
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">External Links</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" id="drop"> <!-- 'drop' id used to make dropdown work -->
                        <a class="dropdown-item" href="http://cns.utexas.edu/" target="blank">CNS Home</a>
                        <a class="dropdown-item" href="http://www.ph.utexas.edu/" target="blank">UT Physics</a>
                        <a class="dropdown-item" href="http://www.as.utexas.edu/~asa" target="blank">UT ASA</a>
                        <div class="dropdown-divider"></div>
                        <h5 class="dropdown-header">Our Social Media</h5>
                        <a class="dropdown-item" href="https://www.facebook.com/groups/TexasSPS/" target="blank">Facebook</a>
                        <a class="dropdown-item" href="https://utlists.utexas.edu/sympa/info/sps" target="blank">UT Lists</a>
                        <a class="dropdown-item" href="https://utexas.collegiatelink.net/organization/societyofphysicsstudents" target="blank">Horns Link</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!--/ Navbar -->

    <br>
    <br>
    <br>
    <br>
    
    <!-- Body -->

    <!-- Banner -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 banner">
                <h1>So you want an cool Physics t-shirt?</h1>
                <h2>Check out our awesome merch!!!</h2>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!--/ Banner -->

    <br>

    <div class="container-fluid">
        <div class="row">
        
    <!-- Calendar -->
            <div class="col-md-3">
                <div class="calendar">
                    <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=450&amp;wkst=1&amp;src=spsofficers%40gmail.com&ctz=America%2FChicago" height="450" width="250" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
    <!--/ Calendar -->

    <!-- Main Text -->
		<?php
			//Define vars and set to empty, open file
			$file = fopen("tshirts/tshirt_stock.csv","r");
			$header = fgetcsv($file);
			$name = $email = "";
			$nameErr = $emailErr = $shirtErr = "";
			$defDes = "Select a Design";
                        $defSize = "Select a Size";
                        $defNum = "Select the Number of T-Shirts";
			$keylist = array("hoodie"=>"Gray Texas Physics Hoodie", "gray_tx_phy"=>"Grey Texas Physics T-Shirt", "orange_tx_phy"=>"Burnt Orange Texas Physics T-Shirt", "ham_mint"=>"Mint Green Hamiltonian T-Shirt", "ham_black"=>"Black Hamiltonian T-Shirt", "ham_green"=>"Forest Green Hamiltonian T-Shirt", "LTBL"=>"Let There Be Light T-Shirt", "pulsar"=>"SPS Pulsar T-Shirt");
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // validate the field data 
                            if (empty($_POST["name"])) {
                                $nameErr = "Name is required";
                            }else {
                                $name = test_input($_POST["name"]);
                            }
                            
                            if (empty($_POST["email"])) {
                                $emailErr = "Email is required";
                            }else {
                                $email = test_input($_POST["email"]); 
                                // check if e-mail address is well-formed
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $emailErr = "Invalid email format"; 
                                }
                            }

			    if($_POST["shirt1"] == $defDes || $_POST["size1"] == $defSize || $_POST["num1"] == $defNum){
				$shirtErr = "Please choose a design/size/number";
			    }
			    else{
				$design = $_POST["shirt1"];
	                        $size = $_POST["size1"];
        	                $num = $_POST["num1"];
			    }
			}
			
			function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
		?>
            <div class="col-md-9">
                <div class="row">
                    <div class="hero-unit">      
                        <p>If you'd like to order a t-shirt, there are a couple of ways to go about it. We table for 2 weeks every semester to take orders for t-shirts; those on our email list will be notified beforehand. You can join our email list at <a href="mailto:sps-request@utlists.utexas.edu">UT Lists</a>.</p>
                        <p>If you were unable to place an order while we were tabling, or it's off season, don't worry! You can simply send us an email at <a href="mailto:spsofficers@gmail.com">spsofficers@gmail.com</a> and we'll get back to you ASAP!</p>
                        <p>Here is a list of the merch we're selling this semester:</p>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/gray.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Gray Texas Physics: Hoodie - $30</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
						$hoodie = fgetcsv($file);
						$keys = array($hoodie[0]);
						for($i=1; $i<count($hoodie); $i++){
							if($hoodie[$i]>0){echo "<p class=\"card-text\">".$hoodie[$i]." ".$header[$i]."</p>";}
						}
					?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/gray.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Gray Texas Physics: T-Shrit - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $gTX = fgetcsv($file);
						array_push($keys, $gTX[0]);
						
                                                for($i=1; $i<count($gTX); $i++){
                                                        if($gTX[$i]>0){echo "<p class=\"card-text\">".$gTX[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/orange.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Burnt Orange Texas Physics: T-Shirt - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $oTX = fgetcsv($file);
						array_push($keys, $oTX[0]);
                                                for($i=1; $i<count($oTX); $i++){
                                                        if($oTX[$i]>0){echo "<p class=\"card-text\">".$oTX[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                            <img class="img-fluid slides" src="../pictures/tshirts/leaf.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Hamiltonian Mint Green: T-Shirt - $15, Sticker - $2</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $ham_m = fgetcsv($file);
						array_push($keys, $ham_m[0]);
                                                for($i=1; $i<count($ham_m); $i++){
                                                        if($ham_m[$i]>0){echo "<p class=\"card-text\">".$ham_m[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid slides" src="../pictures/tshirts/hamiltonian.gif" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Hamiltonian Black: T-Shirt - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $ham_b = fgetcsv($file);
						array_push($keys, $ham_b[0]);
                                                for($i=1; $i<count($ham_b); $i++){
                                                        if($ham_b[$i]>0){echo "<p class=\"card-text\">".$ham_b[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid slides" src="../pictures/tshirts/green.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Hamiltonian Forest Green: T-Shirt - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $ham_g = fgetcsv($file);
						array_push($keys, $ham_g[0]);
                                                for($i=1; $i<count($ham_g); $i++){
                                                        if($ham_g[$i]>0){echo "<p class=\"card-text\">".$ham_g[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/light.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Let There Be Light: T-Shirt - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $ltbl = fgetcsv($file);
						array_push($keys, $ltbl[0]);
                                                for($i=1; $i<count($ltbl); $i++){
                                                        if($ltbl[$i]>0){echo "<p class=\"card-text\">".$ltbl[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">SPS Pulsar: T-Shirt - $15</h5>
                                    <p class="card-text">Sizes Available:</p>
					<?php
                                                $pulsar = fgetcsv($file);
						array_push($keys, $pulsar[0]);
                                                for($i=1; $i<count($pulsar); $i++){
                                                        if($pulsar[$i]>0){echo "<p class=\"card-text\">".$pulsar[$i]." ".$header[$i]."</p>";}
                                                }
                                        ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="../pictures/tshirts/normal.png" alt="Design Unavailable">
                                <div class="card-body">
                                    <h5 class="card-title">Are Physicists Normal?: Sticker - $2</h5>
                                    <p class="card-text">Plenty available!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php $newcsv = array($header,$hoodie,$gTX,$oTX,$ham_m,$ham_b,$ham_g,$ltbl,$pulsar);?>
		<br>

		<div class="row">
		    <div class="hero-unit">
			<p>If you'd like to reserve a t-shirt for whenever you come back to UT, fill out the form below and we'll get in touch with you about picking up your t-shirt as soon as the semester starts! Once you place your order and you get a success message, please don't reload the page, just close it. However, if you'd like to place an order for another t-shirt, just fill out the form again.</p>
			<p><span class = "error">* required field.</span></p>
			<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data">
                        <table>
                            <tr>
                            <td>Name: <span class = "error">* <?php echo $nameErr;?></span></td>
                            <td><input type = "text" name = "name"
                                value = "<?php echo (isset($name))?$name:'';?>">
                            </td>
                            </tr>
                            
                            <tr>
                            <td>E-mail: <span class = "error">* <?php echo $emailErr;?></span></td>
                            <td><input type = "text" name = "email"
                                value = "<?php echo (isset($email))?$email:'';?>">
                            </td>
                            </tr>

			    <tr>
				<td>T-Shirt : <span class = "error">* <?php echo $shirtErr;?></span></td>
				<td>
			   	    Design: <select id="shirt1" name="shirt1">
				    <option>Select a Design</option>
				    <?php
				    for($x=0; $x<count($keys); $x++){
					echo "<option value = \"".$keys[$x]."\">".$keylist[$keys[$x]]."</option>";
				    }
				    ?></select><br><br>
				    Size: <select id="size1" name="size1">
				    <option>Select a Size</option>
				    </select><br><br>
				    Number: <select id="num1" name="num1">
					<option>Select the Number of T-Shirts</option>
				    </select>
				</td>
			    </tr>
			    <tr>
                            <td>
                                <input type = "submit" name = "submit" value = "Submit"> 
                            </td>
			    <td>
				<input type = "reset" value = "Clear">
			    </td>
                            </tr>
			</table>
			</form><br>
			<?php
	                if($name != "" && $email != "" && $nameErr == "" && $emailErr == "" && $shirtErr == ""){
			    $myfile = fopen("tshirts/orders.csv", 'a') or die("Unable to open file!");
                            $line = array($name,$email,$design,$size,$num);
                            fputcsv($myfile, $line);
			    //echo file_exists('./orders.txt');
                            fclose($myfile);
			    echo "<span class=\"success\">Your order was recorded successfully!</span>";

			    $updated = fopen("tshirts/tshirt_stock.csv", "w") or die("Unable to open file!");
			    for($x=0; $x<count($newcsv); $x++){
				if($newcsv[$x][0] == $design){
				    for($y=1; $y<count($newcsv[$x]); $y++){
					if($newcsv[0][$y] == $size){$newcsv[$x][$y]=$newcsv[$x][$y]-$num;}
				    }
				}
				fputcsv($updated, $newcsv[$x]);
			    }
			    fclose($updated);
               		}
            		?>

		    </div>
		</div>
 
                <br>

            </div>
	    <script type="text/javascript">  //javascript to dynamically change options for user
                var stock = <?php echo json_encode($newcsv) ?>;	 //2d csv array from php to js
                $(document).ready(function(){
                    $("#shirt1").change(function(){  //change shirt size and quantity on design change
                        var design = shirt1.value;
                        var sizes = $("#size1");
                        //alert(stock[3][4]);
			var quant = $("#num1");
                        quant.empty();
                        sizes.empty();
                        for(var i=0; i<stock.length; i++){
                            if(stock[i][0] == design){
                                for(var j=1; j<stock[i].length; j++){
                                    if(stock[i][j]>0){sizes.append("<option>"+stock[0][j]+"</option>");}
				    if(stock[i][j]>0 && stock[0][j] == size1.value){
                                        for(var k=1; k<=parseInt(stock[i][j]); k++){quant.append("<option>"+k+"</option>");}
                                    }

                                }
                            }
                        }
                    });
		    $("#size1").change(function(){  //change quantity on size change
			var size = size1.value;
                        var design = shirt1.value;
			var quant = $("#num1");
			quant.empty();
			for(var i=1; i<stock.length; i++){
                            if(stock[i][0] == design){
                                for(var j=1; j<stock[i].length; j++){
				    if(stock[0][j] == size){
					for(var k=1; k<=parseInt(stock[i][j]); k++){quant.append("<option>"+k+"</option>");}
				    }
                                }
                            }
                        }
		    });
                });
            </script>       

    <!--/ Main Text -->
    
        </div>
    </div>
    <!--/ Body -->

    <br>
    <br>
    <br>

    <!-- Footer -->
    
    <div class="footer">
        <p>&copy; 2018 UT Austin SPS</p>
    </div>

    <!--/ Footer -->
</body>
</html>
