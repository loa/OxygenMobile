<?php if(file_exists(FORUM_ROOT.'style/'.$forum_user['style'].'/'.FORUM_PAGE.'.js')) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo $base_url.'/style/'.$forum_user['style'].'/'.FORUM_PAGE; ?>.js"></script> 
<?php } ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url.'/style/'.$forum_user['style'] ?>/OxygenMobile.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_url.'/style/'.$forum_user['style'] ?>/OxygenMobile_cs.css" />
