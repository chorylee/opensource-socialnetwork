<?php
/**
 * 	OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence 
 * @link      http://www.opensource-socialnetwork.com/licence
 */
?>
<div class="newseed-uinfo">
<img src="<?php echo ossn_site_url();?>avatar/<?php echo ossn_loggedin_user()->username;?>/small" />
 <div class="name">
  <a href="<?php echo ossn_site_url('u/'.ossn_loggedin_user()->username);?>"><?php echo ossn_loggedin_user()->fullname;?></a>
  <a class="edit-profile" href="<?php echo ossn_site_url('u/'.ossn_loggedin_user()->username.'/edit');?>">
  <?php echo ossn_print('edit:profile');?></a>
  </div>
</div>
