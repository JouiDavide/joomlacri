<?php
defined('_JEXEC') or die;
JLoader::register('JHtmlUsers', JPATH_COMPONENT . '/helpers/html/users.php');
JHtml::register('users.spacer', array('JHtmlUsers','spacer'));
JHtml::register('users.helpsite', array('JHtmlUsers','helpsite'));
JHtml::register('users.templatestyle', array('JHtmlUsers','templatestyle'));
JHtml::register('users.admin_language', array('JHtmlUsers','admin_language'));
JHtml::register('users.language', array('JHtmlUsers','language'));
JHtml::register('users.editor', array('JHtmlUsers','editor'));
?>

<?php $fields = $this->form->getFieldset('params'); ?>
<?php if (count($fields)): ?>
<p></p>
<fieldset id="users-profile-custom">
<legend><b><u><?php echo JText::_('COM_USERS_SETTINGS_FIELDSET_LABEL'); ?></u></b></legend>
<p></p>
<dl>
<?php foreach ($fields as $field):
if (!$field->hidden) :?>
<dt><?php echo $field->title; ?></dt>
<dd>
<?php if (JHtml::isRegistered('users.'.$field->id)):?>
<i><?php echo JHtml::_('users.'.$field->id, $field->value);?></i>
<?php elseif (JHtml::isRegistered('users.'.$field->fieldname)):?>
<i><?php echo JHtml::_('users.'.$field->fieldname, $field->value);?></i>
<?php elseif (JHtml::isRegistered('users.'.$field->type)):?>
<i><?php echo JHtml::_('users.'.$field->type, $field->value);?></i>
<?php else:?>
<i><?php echo JHtml::_('users.value', $field->value);?></i>
<?php endif;?>
</dd>
<?php endif;?>
<?php endforeach;?>
</dl>
</fieldset>
<?php endif;?>