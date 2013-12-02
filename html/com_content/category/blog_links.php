<?php
// no direct access
defined('_JEXEC') or die;
?>

<div class="items-more">
<h3><?php echo JText::_('COM_CONTENT_MORE_ARTICLES'); ?></h3>
<ol>
<?php
foreach ($this->link_items as &$item) :
?>
<li>
<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid)); ?>">
<?php echo $item->title; ?></a>
</li>
<?php endforeach; ?>
</ol>
</div>

