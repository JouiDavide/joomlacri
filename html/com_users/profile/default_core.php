<?php
defined('_JEXEC') or die;
?>
<fieldset id="users-profile-core">
<legend>
<b><u><?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?></b></u>
</legend>
<p></p>
<dl>
<dt>
<?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>
<i><?php echo $this->data->name; ?></i>
</dt>
<dt>
<?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>
<i><?php echo $this->data->username; ?></i>
</dt>
<dt>
<?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?>
<i><?php echo JHtml::_('date',$this->data->registerDate); ?></i>
</dt>
<dt>
<?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?>
<i><?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00'){?>
<?php echo JHtml::_('date',$this->data->lastvisitDate); ?>
<?php }		else {?>
<b><?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?></b>
<?php } ?></i>
</dt>
</dl>
</fieldset>