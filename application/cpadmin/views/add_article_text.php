<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOMAD MAG ADMINISTRATION</title>
      
   <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script> 
</head>
<body>
<div class="wrapper">

<form method="post" action="<?php echo base_url();?>article/add_article_content">
<textarea name="html_contents" id="html_contents"  class="st-forminput" rows="5" cols="87" style="width:96.5%;"></textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'html_contents' );
			</script>
<input type="submit" value="Submit Article">
<input type="hidden" name="data_type" value="article">
<input type="hidden" name="p_id" value="<?php echo $p_id;?>">
</form>
</div>    


</body>
</html>