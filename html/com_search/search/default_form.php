<?php
// no direct access
defined('_JEXEC') or die;
$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord();
?>

<div id="search-grey-wrapper">
<table id="table-search"><tr><td colspan="4">
<form id="searchForm" action="<?php echo JRoute::_('index.php?option=com_search');?>" method="post">
<fieldset class="word">
<label for="search-searchword" style="padding-right:20px;">
<?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>
</label>
<input type="text" name="searchword" id="search-searchword" size="50" maxlength="<?php echo $upper_limit; ?>" value="<?php echo $this->escape($this->origkeyword); ?>" class="inputbox" />
<button name="Search" onclick="this.form.submit()" class="button"><?php echo JText::_('COM_SEARCH_SEARCH');?></button>
<input type="hidden" name="task" value="search" />
</fieldset>
</td></tr><tr><td>
<?php echo JText::_('COM_SEARCH_FOR');?></td><td>
<span class="phrases-box">
<?php echo $this->lists['searchphrase']; ?>
</span>
</td>
<?php if ($this->params->get('search_areas', 1)) : ?>
<td>
<?php echo JText::_('COM_SEARCH_SEARCH_ONLY');?>
</td>
<td>
<dl>
<?php foreach ($this->searchareas['search'] as $val => $txt) :
$checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="checked"' : '';
?><dd>
<input type="checkbox" name="areas[]" value="<?php echo $val;?>" id="area-<?php echo $val;?>" <?php echo $checked;?> /></dd><dt>
<label for="area-<?php echo $val;?>">
<?php echo JText::_($txt); ?>
</label></dt>
<?php endforeach; ?>
</dl>
</td>
<?php endif; ?>
</tr><tr><td colspan="2"><span class="searchintro<?php echo $this->params->get('pageclass_sfx'); ?>">
<?php if (!empty($this->searchword)):
echo JText::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', $this->total);
if ($this->total > 0) :
endif;?>
</span>
<span class="form-limit">
<label for="limit">
<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
</label>
<?php echo $this->pagination->getLimitBox(); ?>
</span>
<span class="counter">
<?php echo $this->pagination->getPagesCounter(); ?>
</span>
<?php endif; ?>
</td><td colspan="2">
<span class="ordering-box">
<label for="ordering" class="ordering">
<?php echo JText::_('COM_SEARCH_ORDERING');?>
</label>
<?php echo $this->lists['ordering'];?>
</span>
</form></td></tr></table></div>