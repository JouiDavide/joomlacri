<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<div class="remind<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<h1>
<?php echo $this->escape($this->params->get('page_heading')); ?>
</h1>
<?php endif; ?>
<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="form-validate">
<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
<p><?php echo JText::_($fieldset->label); ?></p>		<fieldset><br />
<dl>
<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field): ?>
<dt><p><?php echo $field->label; ?></p></dt>
<dd><p><?php echo $field->input; ?></p></dd>
<?php endforeach; ?>
</dl>
</fieldset>
<?php endforeach; ?>
<div>
<button type="submit" class="validate"><?php echo JText::_('JSUBMIT'); ?></button>
<?php echo JHtml::_('form.token'); ?>
</div>
</form>
</div>