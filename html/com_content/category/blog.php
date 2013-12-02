<?php
// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');
?>

<div class="blog<?php echo $this->pageclass_sfx;?>">
<?php if ($this->params->get('show_page_heading')) : ?>
<div class="blog-heading">
<?php echo $this->escape($this->params->get('page_heading')); ?>
</div>
<?php endif; ?>
<?php if ($this->params->get('show_category_title', 1) or $this->params->get('page_subheading')) : ?>
<div class="category-part1">
<?php echo $this->escape($this->params->get('page_subheading')); ?>
<?php if ($this->params->get('show_category_title')) : ?>
<span class="subheading-category"><?php echo $this->category->title;?></span>
<?php endif; ?>
</div>
<?php endif; ?>
<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
<div class="category-desc">
<?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
<img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
<?php endif; ?>
<?php if ($this->params->get('show_description') && $this->category->description) : ?>
<?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
<?php endif; ?>
<div class="clr"></div>
</div>
<?php endif; ?>
<?php if (empty($this->lead_items) && empty($this->link_items) && empty($this->intro_items)) : ?>
<?php if ($this->params->get('show_no_articles', 1)) : ?>
<p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
<?php endif; ?>
<?php endif; ?>
<?php $leadingcount=0 ; ?>
<?php if (!empty($this->lead_items)) : ?>
<div class="items-leading">
<?php foreach ($this->lead_items as &$item) : ?>
<div class="leading-<?php echo $leadingcount; ?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
<?php
$this->item = &$item;
echo $this->loadTemplate('item');
?>
</div>
<?php
$leadingcount++;
?>
<?php endforeach; ?>
</div>
<?php endif; ?>
<?php
$introcount=(count($this->intro_items));
$counter=0;
?>
<?php if (!empty($this->intro_items)) : ?>
<?php foreach ($this->intro_items as $key => &$item) : ?>
<?php
$key= ($key-$leadingcount)+1;
$rowcount=( ((int)$key-1) %	(int) $this->columns) +1;
$row = $counter / $this->columns ;
if ($rowcount==1) : ?>
<div class="items-row cols-<?php echo (int) $this->columns;?> <?php echo 'row-'.$row ; ?>">
<?php endif; ?>
<div class="item column-<?php echo $rowcount;?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
<?php
$this->item = &$item;
echo $this->loadTemplate('item');
?>
</div>
<?php $counter++; ?>
<?php if (($rowcount == $this->columns) or ($counter ==$introcount)): ?>
<span class="row-separator"></span>
</div>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
<?php if (!empty($this->link_items)) : ?>
<?php echo $this->loadTemplate('links'); ?>
<?php endif; ?>
<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
<div class="cat-children">
<?php if ($this->params->get('show_category_heading_title_text', 1) == 1) : ?>
<h3>
<?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
</h3>
<?php endif; ?>
<?php echo $this->loadTemplate('children'); ?>
</div>
<?php endif; ?>
<?php if (($this->params->def('show_pagination', 1) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
<div class="pagination">
<table class="table-pagination">
<?php  if ($this->params->def('show_pagination_results', 1)) : ?>
<tr class="trcounter"><td>
<span class="counter">
<?php echo $this->pagination->getPagesCounter(); ?>
</span></td></tr>
<?php endif; ?>
<tr><td>
<?php echo $this->pagination->getPagesLinks(); ?>
</td></tr></table>
</div>
<?php  endif; ?>
</div>
