<?php
defined('_JEXEC') or die;
?>

<div class="logout<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php endif; ?>
<?php if ($this->params->get('logoutdescription_show') == 1 || $this->params->get('logout_image') != '') : ?>
<div class="logout-description">
<?php if (($this->params->get('logout_image')!='')) :?>
<img src="<?php echo $this->escape($this->params->get('logout_image')); ?>" class="logout-image" alt="<?php echo JTEXT::_('COM_USER_LOGOUT_IMAGE_ALT')?>"/><br />
<?php endif ; ?>
<?php if ($this->params->get('logoutdescription_show') == 1) : ?>
<p><b><?php echo $this->params->get('logout_description'); ?></b></p>
<?php endif; ?>
</div>
<?php endif ; ?>
<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.logout'); ?>" method="post">
<p>Per disconnetterti, clicca sul bottone sottostante.</p>
<button type="submit" class="button"><?php echo JText::_('JLOGOUT'); ?></button>
<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('logout_redirect_url',$this->form->getValue('return'))); ?>" />
<?php echo JHtml::_('form.token'); ?>
</form>
</div>



