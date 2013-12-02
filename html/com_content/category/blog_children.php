<?php
// no direct access
defined('_JEXEC') or die;
$class = ' class="first"';
?>

<?php if (count($this->children[$this->category->id]) > 0 && $this->maxLevel != 0) : ?>
<ul id="subcategories-template">
<?php foreach($this->children[$this->category->id] as $id => $child) : ?>
<?php
if ($this->params->get('show_empty_categories') || $child->numitems || count($child->getChildren())) :
if (!isset($this->children[$this->category->id][$id + 1])) :
$class = ' class="last"';
endif;
?>
<li<?php echo $class; ?>>
<?php $class = ''; ?>
<table>
<tr><td>
<span class="item-title"><a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($child->id));?>">
<?php echo $this->escape($child->title); ?></a>
</span></td></tr>
<tr><td>
<?php if ($this->params->get('show_subcat_desc') == 1) :?>
<?php if ($child->description) : ?>
<!--<div class="category-desc">
<?php echo JHtml::_('content.prepare', $child->description, '', 'com_content.category'); ?>
</div>-->
<?php endif; ?>
<?php endif; ?>
<?php if ( $this->params->get('show_cat_num_articles', 1)) : ?>
<span>
<?php echo JText::_('COM_CONTENT_NUM_ITEMS') ; ?>&nbsp<?php echo $child->getNumItems(true); ?>
</span></td></tr></table>
<?php endif ; ?>
<?php if (count($child->getChildren()) > 0):
$this->children[$child->id] = $child->getChildren();
$this->category = $child;
$this->maxLevel--;
if ($this->maxLevel != 0) :
echo $this->loadTemplate('children');
endif;
$this->category = $child->getParent();
$this->maxLevel++;
endif; ?>
</li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
<?php endif;

