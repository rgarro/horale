<?php
if(!defined('DP_BASE_DIR')){
	die('Que Onda Wey?');
}

//Space an Time Controls
$dress_tail = "/modules/horale";
$here = DP_BASE_DIR.$dress_tail;
$here_js = $baseUrl.$dress_tail."/js";
$here_css = $baseUrl.$dress_tail."/css";
$taqueria = $here."/onceUponTime"; 

//Ming Inventions
require_once($taqueria."/horale.class.php");

//Headerless Responses
if(isset($_GET['suppressHeaders']) && $_GET['suppressHeaders']==1){
	
}else{
	//Mongo Sunset 
	?>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $here_css."/horale.css";?>" media="all"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo $here_js."/horale.js";?>"></script>
	<?php
	$head = new CTitleBlock('Horale Time Reports','tr.jpeg',$m,"$m.$a");
	//$klytus->addCell("<div style='float:right;clear:right;width:800px;'><h1>sss</h2>ffffffffff</div>");
	$head->show();

?>
<div id="danceFloor">
<div class="ui-state-default bimg ui-corner-all ui-icon ui-icon-video"></div>

<div>
<?php	
}

