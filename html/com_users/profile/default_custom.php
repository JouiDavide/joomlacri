<?php
defined('_JEXEC') or die;
JLoader::register('JHtmlUsers', JPATH_COMPONENT . '/helpers/html/users.php');
JHtml::register('users.spacer', array('JHtmlUsers','spacer'));
$fieldsets = $this->form->getFieldsets();
if (isset($fieldsets['core']))   unset($fieldsets['core']);
if (isset($fieldsets['params'])) unset($fieldsets['params']);
foreach ($fieldsets as $group => $fieldset): // Iterate through the form fieldsets
$fields = $this->form->getFieldset($group);
if (count($fields)):
?>
<p>&nbsp;</p>
<fieldset id="users-profile-custom" class="users-profile-custom-<?php echo $group;?>">
<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.?>
<legend><b><u><?php echo JText::_($fieldset->label); ?></u></b></legend>
<?php endif;?>
<p>&nbsp;</p>
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
<?php endforeach;?>