<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Reference/create.latte

class Template341e5d83f331893c03f28496dd76fe99 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8fc1a8e30a', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb7343f6ee93_title')) { function _lb7343f6ee93_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Vytvorenie referenciu<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb66556a9a40_content')) { function _lb66556a9a40_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Nová referencia</strong>
                </h2>
                <hr>
<?php $_l->tmp = $_control->getComponent("referenceForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
            </div>
        </div>
    </div>
</div><?php
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}