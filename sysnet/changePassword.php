<?php
    require "scripts/php/req.conn.php";

    include "scripts/php/fnc.myFunctions.php";
    include "scripts/php/fnc.progSpecific.php";
    include "scripts/php/fnc.xml2Array.php";

    include "scripts/php/inc.header.php";
?>

<body>
	<?php
		include "scripts/php/inc.menu.php";
		include "scripts/php/inc.logo.php";
	?>
	
	<div class="contentContainer center">
		<div class="mainContent ui-corner-all dropShadow center textCenter">
			<div class="textRight" style="position: absolute; top: 10px; right: 15px;"><span class="alert"><?php echo $_SESSION['currentVersion']; ?></span></div>
			
			<div style="width: 100%;" class="textLeft">
				<h3>Change Password</h3>
			</div>

			<hr class="left">
			<?php if (isset($_GET['error'])) { ?>
				<div style="width: 100%">
					<span class="alert"><?php echo $_SESSION['error'][$_GET['error']];?></span><br /><br />
				</div>
			<?php } ?>
			<?php if (isset($_SESSION['userLogged'])) { ?>
				<div>
					<div class="textRight" style="position: absolute; left: 200px; top: -1px; line-height: 24px;">
						Current Password:<br />
						New Password:<br />
						Confirm Password:<br />
					</div>
					<form method="POST" action="processUsers">
						<input type="hidden" name="mode" value="password">
						<input type="password" name="currentPassword" class="formChangePassword formField dropShadow ui-corner-all" value="Current Password" onfocus="formFocus(this);" onblur="formBlur(this);"><br />
						<input type="password" name="newPassword" class="formChangePassword formField dropShadow ui-corner-all" value="New Password" onfocus="formFocus(this);" onblur="formBlur(this);"><br />
						<input type="password" name="confirmPassword" class="formChangePassword formField dropShadow ui-corner-all" value="Confirm Password" onfocus="formFocus(this);" onblur="formBlur(this);"><br /><br />
						<input type="submit" value="Submit" name="submit" class="button ui-corner-all dropShadow">
					</form>
				</div>
			<?php } else { ?>
				<span class="alert">You are not authorized to view this page.</span>
			<?php } ?>
		</div>
	</div>

	<script type="text/javascript">
	// Define functions
	// Executes when the page is FULLY loaded
		$(document).ready(function() {
		});
	</script>

</body>
</html>