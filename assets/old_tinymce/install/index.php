<?php
#:: Module Installer 1.0 (Beta 3)
#::	Written By Raymond Irving - Dec 2004
#:::::::::::::::::::::::::::::::::::::::::
#:: Installs Modules, Plugins, Snippets, Chunks

	// start session
	session_start();

	// set error reporting
	error_reporting(E_ALL ^ E_NOTICE);
	
	// session loop-back tester
	if(!$_SESSION['session_test'] && $_GET['s']!='set') {
		$_SESSION['session_test'] = 1;
		$installBaseUrl= (!isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS']) != 'on')? 'http://' : 'https://';
      $installBaseUrl.= $_SERVER['HTTP_HOST'];
      if ($_SERVER['SERVER_PORT']!=80) $installBaseUrl = str_replace(':'.$_SERVER['SERVER_PORT'],'',$installBaseUrl); // remove port from HTTP_HOST
      $installBaseUrl.= ($_SERVER['SERVER_PORT']==80 || isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS'])=='on')? '':':'.$_SERVER['SERVER_PORT'];
		echo "<html><head><title>Loading...</title><script>window.location.href='" . $installBaseUrl . $_SERVER['PHP_SELF'] . "?s=set';</script></head><body></body></html>";
		exit;
	}

	$moduleName 		= "Module Installation";
	$moduleVersion 		= "0.9.5";
	$moduleSQLBaseFile 	= "";
	$moduleSQLDataFile 	= "";
	$moduleSQLUpdateFile = "";
	$moduleWhatsNewFile = "setup.whatsnew.html";
	$moduleWhatsNewTitle= "What's New";
	
	$moduleWelcomeMessage= "";
	$moduleLicenseMessage= "";

	$moduleChunks 	 	= array(); // chunks - array : name, description, type - 0:file or 1:content, file or content
	$moduleTemplates 	= array(); // templates - array : name, description, type - 0:file or 1:content, file or content
	$moduleSnippets 	= array(); // snippets - array : name, description, type - 0:file or 1:content, file or content,properties
	$modulePlugins		= array(); // plugins - array : name, description, type - 0:file or 1:content, file or content,properties, events,guid
	$moduleModules		= array(); // modules - array : name, description, type - 0:file or 1:content, file or content,properties, guid
	$moduleTemplates 	= array(); // templates - array : name, description, type - 0:file or 1:content, file or content,properties
	$moduleTVs		 	= array(); // template variables - array : name, description, type - 0:file or 1:content, file or content,properties

	# function to call after setup
	$callBackFnc =""; 			
	
	# load setup information file
	$setupPath = realpath(dirname(__FILE__));
	include_once "{$setupPath}/setup.info.php";

	$errors = 0;
	$syscheck = ($_POST['syscheck']=="on") ? true:false;
	// Determine upgradeability
	if (file_exists("../manager/includes/config.inc.php")){
	    // Include the file so we can test its validity
	    include "../manager/includes/config.inc.php";
	    // We need to have all connection settings - tho prefix may be empty so we have to ignore it
	    if ($dbase) {
	        if(!@$conn = mysql_connect($database_server, $database_user, $database_password)) {
	            $upgradeable = 0;
	        }
	        $upgradeable = 1;
	    }
	} else {
	    $upgradeable = 0;
	}

	$installMode = !$upgradeable ? 0:-1;
	if(count($_POST)) $installMode = $_POST['installmode']=='upd' ? 1:0;
	
	// get post back status
	$isPostBack = (count($_POST) && !$syscheck);
		
	// start install process
	if($isPostBack) {
		ob_start();
		include_once "{$setupPath}/instprocessor.php";
		$moduleWelcomeMessage = ob_get_contents();
		ob_end_clean();
	}
	
	// build Welcome Screen
	function buildWelcomeScreen() {
		global $moduleName;
		global $moduleWelcomeMessage;
		if ($moduleWelcomeMessage) return $moduleWelcomeMessage;
		else {
			ob_start();
			?>
				<table width="100%">
				<tr>
				<td valign="top">
					<p class="title">Welcome to the <?php echo $moduleName; ?> installation program.</p>
					<p>This program will guide you through the rest of the installation.</p>
					<p>Please select the `Next` button to continue:</p>
					<br />
					<center><img src="img_splash.gif" alt="MODx Installation" /></center>
				</td>
				<td align="center" width="280">
					<img src="img_box.png" alt="MODx Create and Do More with Less" />&nbsp;
				</td>
				</tr>
				</table>
			<?php
			$o = ob_get_contents();
			ob_end_clean();
			return $o;
		}		
	}
	
	// build Selection Screen
	function buildOptionsScreen() {
		global $moduleChunks;
		global $moduleModules;
		global $modulePlugins;
		global $moduleSnippets;
		global $moduleTemplates;
		ob_start();	
		echo "<p class=\"title\">Installable Items</p><p>Please choose your installation options and click Install:</p>";

		// display templates
		$templates = isset($_POST['template']) ? $_POST['template']:array();
		$limit = count($moduleTemplates);
		if ($limit>0) {	
			echo '<br/><img src="im_resources.gif" align="left" width="15" height="15" hspace="5" alt="Templates" />';
			echo "<h1>Templates</h1><br />";
			for ($i=0;$i<$limit;$i++) {
				$chk = in_array($i,$templates)||(!count($_POST)) ? 'checked="checked"': "";
				echo "&nbsp;<input type=\"checkbox\" name=\"template[]\" value=\"$i\" $chk />Install/Update <span class=\"comname\">".$moduleTemplates[$i][0]."</span> - ".$moduleTemplates[$i][1]."<hr size=\"1\" style=\"border:1px dotted silver;\" />";
			}
		}
		
		// display chunks
		$chunks = isset($_POST['chunk']) ? $_POST['chunk']:array();
		$limit = count($moduleChunks);
		if ($limit>0) {
			echo '<br/><img src="im_resources.gif" align="left" width="15" height="15" hspace="5" alt="Chunks" />';
			echo "<h1>Chunks</h1>";
			for ($i=0;$i<$limit;$i++) {
				$chk = in_array($i,$chunks)||(!count($_POST)) ? 'checked="checked"': "";
				echo "&nbsp;<input type=\"checkbox\" name=\"chunk[]\" value=\"$i\" $chk />Install/Update <span class=\"comname\">".$moduleChunks[$i][0]."</span> - ".$moduleChunks[$i][1]."<hr size=\"1\" style=\"border:1px dotted silver;\" />";
			}
		}
		
		// display modules
		$modules = isset($_POST['module']) ? $_POST['module']:array();
		$limit = count($moduleModules);
		if ($limit>0) {
			echo '<br/><img src="im_resources.gif" align="left" width="15" height="15" hspace="5" alt="Modules" />';
			echo "<h1>Modules</h1>";
			for ($i=0;$i<$limit;$i++) {
				$chk = in_array($i,$modules)||(!count($_POST)) ? 'checked="checked"': "";
				echo "&nbsp;<input type=\"checkbox\" name=\"module[]\" value=\"$i\" $chk />Install/Update <span class=\"comname\">".$moduleModules[$i][0]."</span> - ".$moduleModules[$i][1]."<hr size=\"1\" style=\"border:1px dotted silver;\" />";
			}
		}
		
		// display plugins
		$plugins = isset($_POST['plugin']) ? $_POST['plugin']:array();
		$limit = count($modulePlugins);
		if ($limit>0) {
			echo '<br/><img src="im_resources.gif" align="left" width="15" height="15" hspace="5" alt="Plugins" />';
			echo "<h1>Plugins</h1>";
			for ($i=0;$i<$limit;$i++) {
				$chk = in_array($i,$plugins)||(!count($_POST)) ? 'checked="checked"': "";
				echo "&nbsp;<input type=\"checkbox\" name=\"plugin[]\" value=\"$i\" $chk />Install/Update <span class=\"comname\">".$modulePlugins[$i][0]."</span> - ".$modulePlugins[$i][1]."<hr size=\"1\" style=\"border:1px dotted silver;\" />";
			}
		}
		
		// display snippets
		$snippets = isset($_POST['snippet']) ? $_POST['snippet']:array();
		$limit = count($moduleSnippets);
		if ($limit>0) {
			echo '<br/><img src="im_resources.gif" align="left" width="15" height="15" hspace="5" alt="Snippets" />';
			echo "<h1>Snippets</h1>";
			for ($i=0;$i<$limit;$i++) {
				$chk = in_array($i,$snippets)||(!count($_POST)) ? 'checked="checked"': "";
				echo "&nbsp;<input type=\"checkbox\" name=\"snippet[]\" value=\"$i\" $chk />Install/Update <span class=\"comname\">".$moduleSnippets[$i][0]."</span> - ".$moduleSnippets[$i][1]."<hr size=\"1\" style=\"border:1px dotted silver;\" />";
			}
		}
		
		$o = ob_get_contents();
		ob_end_clean();
		return $o;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php echo $moduleName; ?> &raquo; Install</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <style type="text/css">
             @import url(./style.css);
        </style>
	<script type="text/javascript" src="webelm.js"></script>
	<script type="text/javascript">
/* <![CDATA[ */
    	var cursrc = 1;
		var syscheck = <?php echo $syscheck ? "true":"false"; ?>;
		var installMode = <?php echo $installMode; ?>; // -1 - not set, 0 - new, 1 - upgrade
		var sidebar = "<a href='<?php echo $moduleWhatsNewFile; ?>' target='_blank'><?php echo $moduleWhatsNewTitle; ?></a>";		

		// jumpTo
		function jumpTo(n) {
			cursrc = n;
			for(i=1;i<=5;i++) {
				o = document.getElementById("screen"+i);
				if (o) {
					if(i==cursrc) o.style.display="block";
					else o.style.display="none";
				}
			}
		}
			
		// change screen
		function changeScreen(n){
			var o;
			var viewer = document.getElementById("viewer");
			var btnback = document.install.cmdback;
			var btnnext = document.install.cmdnext;
			
			//window.scrollTo(0,0);
			viewer.scrollTop = 0;
			// set default values
			btnback.value = "Back";
			btnnext.value = "Next";

			if(n==1) cursrc += 1;
			else cursrc -= 1;
			if(cursrc > 7) cursrc = 7;
			if(cursrc < 1) cursrc = 1;
			switch (cursrc) {
				case 1:	// welcome
					btnnext.disabled = "";
					btnback.style.display="none";
					break;
				case 2:	// 
					syscheck=false;
					btnnext.disabled = "";
					btnnext.value = "Install now";
					btnback.style.display="block";			
					break;
				case 3:	// final screen
					btnnext.value = "Close";
					btnback.style.display="none";
					document.install.submit();
					btnback.disabled = "disabled";
					btnnext.disabled = "disabled";
					break;
			}
			for(i=1;i<=3;i++) {
				o = document.getElementById("screen"+i);
				if (o) {
					if(i==cursrc) o.style.display="block";
					else o.style.display="none";
				}
			}
		}
				
		function closepage(){
			var chk = document.install.rminstaller;
			if(chk && chk.checked) {
				// remove install folder and files
				window.location.href = "../manager/processors/remove_installer.processor.php?rminstall=1";
			}
			else { 
				window.location.href = "../manager/";
			}
		}
/* ]]> */
    </script>
</head>	

<body>
<!-- start install screen-->
<table border="0" cellpadding="0" cellspacing="0" class="mainTable" style="width:700px">
<tr>
    <td height="82" colspan="2" valign="top" background="bgheader.jpg"><img src="img_banner.gif" width="327" height="82" border="0" style="padding:0px"></td>
  </tr>
  <tr class="fancyRow2">
    <td class="border-top-bottom smallText" style="text-align:left; padding-left: 15px"><script>document.write(sidebar);</script></td>
    <td class="border-top-bottom smallText" style="text-align:right; padding-right: 15px"><b><?php echo $moduleName; ?> </b>&nbsp;<i>version <?php echo $moduleVersion; ?></i></td>
  </tr>
  <tr align="left" valign="top">
    <td colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
      <tr align="left" valign="top">
        <td class="pad" id="content" colspan="2">
			<table border="0" width="100%">
			<tr>
			<td valign="top" nowrap="nowrap">&nbsp;</td>
			<td style="padding-left:20px;padding-right:20px;">
			<form name="install" action="index.php?s=set" method="post">
			<div id="viewer" class="viewer" style="visibility:hidden">
				<div id="screen1" style="display:block"><?php echo buildWelcomeScreen(); ?></div>
				<?php if(!$isPostBack) { ?>
					<div id="screen2" style="display:none"><?php echo buildOptionsScreen(); ?></div>
					<div id="screen3" style="display:none"><p /><br /><h1>Running setup script... please wait</h1></div>
				<?php } ?>
			</div>
			<br />
			<div id="navbar">
				<?php if($isPostBack) { ?>
					<input type="button" value="Close" name="cmdclose" style="float:right;width:100px;" onClick="closepage();" />
					<?php 
						if($errors==0) { 
							// check if install folder is removeable
							if(is_writable("../install")) {
								echo '<span id="removeinstall" style="float:left;cursor:pointer;color:#505050;line-height:18px;" onclick="var chk=document.install.rminstaller; if(chk) chk.checked=!chk.checked;"><input type="checkbox" name="rminstaller" onclick="event.cancelBubble=true;" '.(empty($errors) ? 'checked="checked"':'').' style="cursor:default;" />Remove the install folder and files from my website <br />&nbsp;(This operation requires delete permission to the granted to the install folder). </span>';
							}
							else {
								echo '<span id="removeinstall" style="float:left;color:#505050;line-height:18px;">Please remember to remove the &quot;<b>install</b>&quot; folder before you log into the Content Manager.</span>';
							}					
						} ?>
				<?php } else {?>
					<input type="button" value="Next" name="cmdnext" style="float:right;width:100px;" onClick="changeScreen(1);" />
					<span style="float:right">&nbsp;</span>
					<input type="button" value="Back" name="cmdback" style="float:right;width:100px;" onClick="changeScreen(-1);" />
				<?php } ?>
			</div>
			<input name="syscheck" type="hidden" value="<?php echo ($syscheck && $errors) ? "on":""; ?>" />
			</form>
            </tr>
            </table>		</td>
      </tr>
    </table></td>
  </tr>
  <tr class="fancyRow2">
    <td class="border-top-bottom smallText" colspan="2"> 
        <p style="padding: 5px 10px;">&copy; 2005-2006 the <a href="http://www.modxcms.com/" target="_blank" style="color: green; text-decoration:underline">MODx</a> Content Mangement Framework (CMF) project. All rights reserved. MODx is licensed under the GNU GPL.</p>
        <p style="padding: 5px 10px;">MODx is free software.  We encourage you to be creative and make use of MODx in any way you see fit. Just make sure that if you do make changes and decide to redistribute your modified MODx, that you keep the source code free!</p>
    </td>
  </tr>
</table>
<br />
<!-- end install screen-->
<script type="text/javascript">
	var errors = <?php echo $errors; ?>;
</script>

<?php if(!$isPostBack) { ?>
	<script>
		<?php if ($syscheck) { ?>
			cursrc = 5;
			changeScreen(1);
		<?php } else {?>
		var btnback = document.install.cmdback;
		btnback.style.display="none";
		<?php } ?>
	</script>
<?php } ?>
<script type="text/javascript">
	var iviewer = document.getElementById("viewer");
	iviewer.style.visibility = 'visible';
</script>
</body>
</html>