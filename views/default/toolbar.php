<?php
/**
 * @var DefaultController $this
 * @var Yii2DebugPanel[] $panels
 * @var string $tag
 */

$url = $panels['request']->getUrl();
$reportsUrl = Yii::app()->createUrl('/debug/index');
?>
<div id="yii2-debug-toolbar">
    <div class="yii2-debug-toolbar-block">
        <div>
            <a href="<?php echo $reportsUrl; ?>" class="btn btn-primary" title="Show all reports" target="_blank">Show all reports</a>
        </div>
    </div>
	<?php foreach ($panels as $panel): ?>
		<?php echo $panel->getSummary(); ?>
	<?php endforeach; ?>
	<span class="yii2-debug-toolbar-toggler">›</span>
</div>
<div id="yii2-debug-toolbar-min">
	<a href="<?php echo $url; ?>" title="Open Yii Debugger" id="yii2-debug-toolbar-logo">
		<img width="29" height="30" alt="" src="<?php echo Yii2ConfigPanel::getYiiLogo(); ?>">
	</a>
	<span class="yii2-debug-toolbar-toggler">‹</span>
</div>

<style type="text/css">
	<?php echo file_get_contents(dirname(__FILE__) . '/toolbar.css'); ?>
</style>