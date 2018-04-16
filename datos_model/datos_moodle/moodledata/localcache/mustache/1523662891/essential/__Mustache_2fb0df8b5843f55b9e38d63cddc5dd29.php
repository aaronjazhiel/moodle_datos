<?php

class __Mustache_2fb0df8b5843f55b9e38d63cddc5dd29 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="alert alert-info alert-block fade in ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        // 'announce' section
        $value = $context->find('announce');
        $buffer .= $this->sectionA2fa2b247b3d11c66161b793d8af6be8($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    ';
        // 'closebutton' section
        $value = $context->find('closebutton');
        $buffer .= $this->section92afbda7b079a400262cb577cbcc370d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section9b621971da6485fcd06b639b6be9a555($context, $indent, $value);

        return $buffer;
    }

    private function sectionA2fa2b247b3d11c66161b793d8af6be8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' role="alert"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' role="alert"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92afbda7b079a400262cb577cbcc370d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<button type="button" class="close" data-dismiss="alert"><span class="fa fa-times-circle" aria-hidden="true"></span></button>';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<button type="button" class="close" data-dismiss="alert"><span class="fa fa-times-circle" aria-hidden="true"></span></button>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b621971da6485fcd06b639b6be9a555(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_bootstrapbase/bootstrap\'], function($) {
    // Setup closing of bootstrap alerts.
    $().alert();
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_bootstrapbase/bootstrap\'], function($) {
';
                $buffer .= $indent . '    // Setup closing of bootstrap alerts.
';
                $buffer .= $indent . '    $().alert();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}