<?php

require_once "core/init.php";
require_once "view/header.php";

if( !isset($_SESSION['id'])) {
   header('Location: login_customer.php');
}

if( isset($_POST['submit'])) {



}

?>

<div class="container_reserve">
		<form action="reserve.php" method="POST"><div class="reserve_flex">
        	<div>
        		<p class="header_flex_one"> B R O N Z E </p>
        		<p> - Entry level services <br> - Dog and Cat only</p> <br>
        		<p>
                     <input type="submit" name="" id="btn" value="70.000/Day" />
                </p>
        	</div>

        	<div>
        		<p class="header_flex_two"> S I L V E R </p>
        		<p> - Mid-level Services <br> - Dog and Cat <br> - Get Training</p>
        		<p>
                     <input type="submit" name="" id="btn" value="100.000/Day" />
                </p>
        	</div>

        	<div>
        		<p class="header_flex_three"> P L A T I N U M </p>
        		<p> - High-end Services <br> - All kinds of Pet(Including Reptil) <br> - Get Training </p>
        		<p>
                     <input type="submit" name="" id="btn" value="150.000/Day" />
                </p>
        	</div>

		</div>
        <div>
                <input type="submit" name="submit" id="btn" class="btn_reserve" value="Reserve Now">
            </div>
    </form>
	</div>

<?php require_once "view/footer.php"; ?>
