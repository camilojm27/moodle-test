<?php

class __Mustache_30893085b0a615786b3af2b1744087db extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-item row" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="form-label col-sm-3 text-sm-right">
';
        // 'customcontrol' section
        $value = $context->find('customcontrol');
        $buffer .= $this->section36ecdecc38cc62a470c8f231a65fe5b1($context, $indent, $value);
        // 'customcontrol' inverted section
        $value = $context->find('customcontrol');
        if (empty($value)) {
            
            $buffer .= $indent . '            <label ';
            // 'labelfor' section
            $value = $context->find('labelfor');
            $buffer .= $this->section3d8f2ee95af1360bf9488b09a602ca85($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= $value;
            $buffer .= '
';
            // 'override' section
            $value = $context->find('override');
            $buffer .= $this->section65e8e6a692c4fedde00df56a3fac074a($context, $indent, $value);
            // 'warning' section
            $value = $context->find('warning');
            $buffer .= $this->section093e9136e324c006acab8cdf76dabfb0($context, $indent, $value);
            $buffer .= $indent . '            </label>
';
        }
        $buffer .= $indent . '        <span class="form-shortname d-block small text-muted">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="form-setting col-sm-9">
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionBea80677ad0885a721d04660401556e5($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('element'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'default' section
        $value = $context->find('default');
        $buffer .= $this->sectionB74383387a20b43f64f472563e1ccc7e($context, $indent, $value);
        $buffer .= $indent . '        <div class="form-description mt-3">';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '        ';
        // 'dependenton' section
        $value = $context->find('dependenton');
        $buffer .= $this->section8fa2fb993cb3b341b0b7fef1d81c2802($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'customcontrol' section
        $value = $context->find('customcontrol');
        $buffer .= $this->section037c6a65b5f87aede11b7d8b37ec21a2($context, $indent, $value);

        return $buffer;
    }

    private function sectionFab12aa97bf6c114741b60cef513b51c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'id="{{labelfor}}_label"';
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
                
                $buffer .= 'id="';
                $value = $this->resolveValue($context->find('labelfor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65e8e6a692c4fedde00df56a3fac074a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="form-overridden">{{override}}</div>
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
                
                $buffer .= $indent . '                    <div class="form-overridden">';
                $value = $this->resolveValue($context->find('override'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section093e9136e324c006acab8cdf76dabfb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="form-warning">{{warning}}</div>
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
                
                $buffer .= $indent . '                    <div class="form-warning">';
                $value = $this->resolveValue($context->find('warning'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36ecdecc38cc62a470c8f231a65fe5b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p {{#labelfor}}id="{{labelfor}}_label"{{/labelfor}}>
                {{{title}}}
                {{#override}}
                    <div class="form-overridden">{{override}}</div>
                {{/override}}
                {{#warning}}
                    <div class="form-warning">{{warning}}</div>
                {{/warning}}
            </p>
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
                
                $buffer .= $indent . '            <p ';
                // 'labelfor' section
                $value = $context->find('labelfor');
                $buffer .= $this->sectionFab12aa97bf6c114741b60cef513b51c($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'override' section
                $value = $context->find('override');
                $buffer .= $this->section65e8e6a692c4fedde00df56a3fac074a($context, $indent, $value);
                // 'warning' section
                $value = $context->find('warning');
                $buffer .= $this->section093e9136e324c006acab8cdf76dabfb0($context, $indent, $value);
                $buffer .= $indent . '            </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d8f2ee95af1360bf9488b09a602ca85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'for="{{labelfor}}"';
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
                
                $buffer .= 'for="';
                $value = $this->resolveValue($context->find('labelfor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBea80677ad0885a721d04660401556e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div><span class="error">{{error}}</span></div>
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
                
                $buffer .= $indent . '            <div><span class="error">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE883efc355488afa28c6a1efa34031dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-ltr';
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
                
                $buffer .= 'text-ltr';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB74383387a20b43f64f472563e1ccc7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="form-defaultinfo text-muted {{#forceltr}}text-ltr{{/forceltr}}">{{{default}}}</div>
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
                
                $buffer .= $indent . '            <div class="form-defaultinfo text-muted ';
                // 'forceltr' section
                $value = $context->find('forceltr');
                $buffer .= $this->sectionE883efc355488afa28c6a1efa34031dd($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('default'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fa2fb993cb3b341b0b7fef1d81c2802(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="form-dependenton mb-4 text-muted">{{{.}}}</div>';
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
                
                $buffer .= '<div class="form-dependenton mb-4 text-muted">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section553eaf7d423bfec4db0ee7f668120567(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#{{id}}_label\').css(\'cursor\', \'default\');
            $(\'#{{id}}_label\').click(function() {
                $(\'#{{id}}\')
                    .find(\'button, a, input:not([type="hidden"]), select, textarea, [tabindex]\')
                    .filter(\':not([disabled]):not([tabindex="0"]):not([tabindex="-1"])\')
                    .first().focus();
            });
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
                
                $buffer .= $indent . '        require([\'jquery\'], function($) {
';
                $buffer .= $indent . '            $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label\').css(\'cursor\', \'default\');
';
                $buffer .= $indent . '            $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '_label\').click(function() {
';
                $buffer .= $indent . '                $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\')
';
                $buffer .= $indent . '                    .find(\'button, a, input:not([type="hidden"]), select, textarea, [tabindex]\')
';
                $buffer .= $indent . '                    .filter(\':not([disabled]):not([tabindex="0"]):not([tabindex="-1"])\')
';
                $buffer .= $indent . '                    .first().focus();
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section037c6a65b5f87aede11b7d8b37ec21a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
        require([\'jquery\'], function($) {
            $(\'#{{id}}_label\').css(\'cursor\', \'default\');
            $(\'#{{id}}_label\').click(function() {
                $(\'#{{id}}\')
                    .find(\'button, a, input:not([type="hidden"]), select, textarea, [tabindex]\')
                    .filter(\':not([disabled]):not([tabindex="0"]):not([tabindex="-1"])\')
                    .first().focus();
            });
        });
    {{/js}}
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
                
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section553eaf7d423bfec4db0ee7f668120567($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
