<? if(
	ini_get('magic_quotes_sybase')==1 ||
	(ini_get('magic_quotes_sybase')=='' && get_magic_quotes_gpc())
){
	$_POST['allchars']['attr1']=stripslashes($_POST['allchars']['attr1']);
	$_POST['allchars']['attr2']=stripslashes($_POST['allchars']['attr2']);
} ?>

all characters over a post array:

<?
echo $_POST['allchars']['attr1'];
echo ':::';
echo $_POST['allchars']['attr2'];
?>
