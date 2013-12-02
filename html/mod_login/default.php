<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>

<?php if ($type == 'logout') : ?>
<div class="moduletop">
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form">
<?php if ($params->get('greeting')) : ?>
<span class="login-greeting">
<?php if($params->get('name') == 0) : {
echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name')));
} else : {
echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username')));
} endif; ?>
</span>
<?php endif; ?> <br />
<span class="logout-button">
<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
<input type="hidden" name="option" value="com_users" />
<input type="hidden" name="task" value="user.logout" />
<input type="hidden" name="return" value="<?php echo $return; ?>" />
<?php echo JHtml::_('form.token'); ?>
</span>
</form>
</div>
<?php else : ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" >
<?php if ($params->get('pretext')): ?>
<div class="pretext"><?php echo $params->get('pretext'); ?></div>
<?php endif; ?>
<div class="login-fields">
<fieldset class="userdata">
<table id="table-module-login" align="center">
<tr id="form-login-username">
<td style="text-align:left;">
<label for="modlgn-username"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
</td>
<td style="text-align:right;">
<input id="modlgn-username" type="text" name="username" class="inputbox"  style="width:100px;" />
</td>
</tr>
<tr id="form-login-password">
<td style="text-align:left;">
<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label></td>
<td style="text-align:right;">
<input id="modlgn-passwd" type="password" name="password" class="inputbox" style="width:100px;"  />
</td>
</tr>
<tr>
<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
<td id="form-login-remember" style="text-align:left;">
<label for="modlgn-remember"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label>
<input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes" />
</td>
<?php endif; ?>
<td style="text-align:right;">
<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
<input type="hidden" name="option" value="com_users" />
<input type="hidden" name="task" value="user.login" />
<input type="hidden" name="return" value="<?php echo $return; ?>" />
<?php echo JHtml::_('form.token'); ?>
</td>
</tr>
</table>
</fieldset>
</div>
<ul class="module-login-options">
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
</li>
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
</li>
<?php
$usersConfig = JComponentHelper::getParams('com_users');
if ($usersConfig->get('allowUserRegistration')) : ?>
<li>
<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
<?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a>
</li>
<?php endif; ?>
</ul>
<?php if ($params->get('posttext')): ?>
<div class="posttext">
<?php echo $params->get('posttext'); ?>
</div>
<?php endif; ?>
</form>
<?php endif; ?>

