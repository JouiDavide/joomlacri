<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>

<div class="login<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php endif; ?>
<table class="table-userlog"> 
<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
<tr><td><div class="login-description">
<?php if (($this->params->get('login_image')!='')) :?>
<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USER_LOGIN_IMAGE_ALT')?>"/><br />
<?php endif; ?>
<?php if($this->params->get('logindescription_show') == 1) : ?>
<?php echo $this->params->get('login_description'); ?>
<?php endif; ?>
</div></td></tr>
<?php endif ; ?>
<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post">
<tr><td><div class="login-fields">
<?php foreach ($this->form->getFieldset('credentials') as $field): ?>
<?php if (!$field->hidden): ?>
<?php echo $field->label; ?>
<?php endif; ?><br />
<?php endforeach; ?></td>
<td>
<?php foreach ($this->form->getFieldset('credentials') as $field): ?>
<?php if (!$field->hidden): ?>
<?php echo $field->input; ?>
<?php endif; ?><br />
<?php endforeach; ?></div>
</td></tr><tr>
<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?><td>
<label id="remember-lbl" for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
<input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"  alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" /></td>
<?php endif; ?><td style="text-align:center;">
<button type="submit" class="button"><?php echo JText::_('JLOGIN'); ?></button>
<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
<?php echo JHtml::_('form.token'); ?>
</form></td></tr>
<tr><td colspan="2"> 
<ul>
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
</li>
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a>
</li>
<?php
$usersConfig = JComponentHelper::getParams('com_users');
if ($usersConfig->get('allowUserRegistration')) : ?>
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a>
</li>
<?php endif; ?>
</ul>
</td></tr>
</table>