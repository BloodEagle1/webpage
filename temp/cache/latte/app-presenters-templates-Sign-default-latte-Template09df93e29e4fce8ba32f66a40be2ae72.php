<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Sign/default.latte

class Template09df93e29e4fce8ba32f66a40be2ae72 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('aedac501d1', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb9c990ab6fc_title')) { function _lb9c990ab6fc_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Prihlásenie<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb43d477643e_content')) { function _lb43d477643e_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Prihlásenie</strong>
                </h2>
                <hr>
                <div class="col-md-4 text-center">
                </div>
                <div class="col-md-4 text-center">
<?php $_l->tmp = $_control->getComponent("signInForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
                </div>
                <div class="col-md-4 text-center">
                </div>
            </div>
        </div>
    </div>
</div>


<?php
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