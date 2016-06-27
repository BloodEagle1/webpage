<?php
// source: C:\wamp\www\bakalarka_web\vendor\ipub\flash-messages\src\IPub\FlashMessages\Components\template\default\default.latte

class Template42e513f980edff149477e481a49b866f extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1a57a845a7', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block _messages
//
if (!function_exists($_b->blocks['_messages'][] = '_lb90d4dad8bc__messages')) { function _lb90d4dad8bc__messages($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('messages', FALSE)
;$iterations = 0; foreach ($flashes as $flash) { if (!$flash->isDisplayed()) { if ($flash->getOverlay() && $useOverlay) { $_b->templates['1a57a845a7']->renderChildTemplate('modal.latte', array('modalClass' => 'flash-modal',
				'level' => $flash->getLevel(),
				'title' => $flash->getTitle(),
				'body' => $flash->getMessage(),
				'useTitle' => $useTitle) + $template->getParameters()) ;} else { ?>
		<div class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->getLevel(), ENT_COMPAT) ?>
" data-status="<?php echo Latte\Runtime\Filters::escapeHtml($flash->getLevel(), ENT_COMPAT) ?>">
<?php if ($flash->getTitle() && $useTitle) { ?>			<h2><?php echo $flash->getTitle() ?></h2>
<?php } ?>

			<p><?php echo $flash->getMessage() ?></p>
		</div>
<?php } $flash->setDisplayed() ;} $iterations++; } 
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?><div class="ipub-flash-messages"<?php echo ' id="' . $_control->getSnippetId('messages') . '"' ?>>
<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['_messages']), $_b, $template->getParameters()) ?>
</div>
<?php
}}