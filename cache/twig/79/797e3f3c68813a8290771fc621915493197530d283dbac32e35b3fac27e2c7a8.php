<?php

/* forms/fields/list/list.html.twig */
class __TwigTemplate_7b216d5df0af627952a3b4d85667b2de09baad1a5ae6a9ad047c268bb8b8dc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["name"] = ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 3
        $context["array"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "array", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "array", array())) : (true));
        // line 4
        $context["lastKey"] = null;
        // line 5
        echo "
<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-4 pure-u-1-4\">
        <label>
            ";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 10
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
            ";
        } else {
            // line 12
            echo "            ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
            ";
        }
        // line 14
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data block size-3-4 pure-u-3-4\">
        <div class=\"form-list-wrapper ";
        // line 18
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\" data-type=\"collection\">
            <ul data-collection-holder=\"";
        // line 19
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\">
                ";
        // line 20
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 22
                echo "                    ";
                if (((isset($context["array"]) ? $context["array"] : null) && (preg_match("/^\\d+\$/", $context["key"]) == 0))) {
                    // line 23
                    echo "                        ";
                    $context["array"] = false;
                    // line 24
                    echo "                        ";
                    $context["lastKey"] =  -1;
                    // line 25
                    echo "                    ";
                } elseif ((isset($context["array"]) ? $context["array"] : null)) {
                    // line 26
                    echo "                        ";
                    $context["lastKey"] = $context["key"];
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                    ";
                $context["itemName"] = (((isset($context["name"]) ? $context["name"] : null) . ".") . $context["key"]);
                // line 29
                echo "                    <li data-collection-item=\"";
                echo (isset($context["itemName"]) ? $context["itemName"] : null);
                echo "\" data-collection-key=\"";
                echo $context["key"];
                echo "\">
                        ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 31
                    echo "                            ";
                    if ((is_string($__internal_bff0d0dba1b6beb0c1da57121bddd24ae7e2edeabbd3f85bb7e5924fe92a91cd = $context["childName"]) && is_string($__internal_1500161a71e23639dc9f49bf6477f55e6751a6ea44b002b0a4d34dc9c080286b = ".") && ('' === $__internal_1500161a71e23639dc9f49bf6477f55e6751a6ea44b002b0a4d34dc9c080286b || 0 === strpos($__internal_bff0d0dba1b6beb0c1da57121bddd24ae7e2edeabbd3f85bb7e5924fe92a91cd, $__internal_1500161a71e23639dc9f49bf6477f55e6751a6ea44b002b0a4d34dc9c080286b)))) {
                        // line 32
                        echo "                                ";
                        $context["childKey"] = trim($context["childName"], ".");
                        // line 33
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute($context["val"], twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                        // line 34
                        echo "                                ";
                        $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                        // line 35
                        echo "                            ";
                    } else {
                        // line 36
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 37
                        echo "                                ";
                        $context["childValue"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"])), "method");
                        // line 38
                        echo "                                ";
                        $context["childName"] = twig_replace_filter($context["childName"], array("*" => $context["key"]));
                        // line 39
                        echo "                            ";
                    }
                    // line 40
                    echo "                            ";
                    $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                    // line 41
                    echo "
                            ";
                    // line 42
                    if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                        // line 43
                        echo "                                ";
                        // line 44
                        $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/list/list.html.twig", 44)->display(array_merge($context, array("field" =>                         // line 45
$context["child"], "value" => $context["key"])));
                        // line 47
                        echo "                            ";
                    } elseif ($this->getAttribute($context["child"], "type", array())) {
                        // line 48
                        echo "                                ";
                        // line 49
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                        // line 50
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 49)->display(array_merge($context, array("field" =>                         // line 52
$context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null))));
                        // line 54
                        echo "                            ";
                    }
                    // line 55
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                        <div class=\"item-actions\">
                            <i class=\"fa fa-bars\"></i>
                            <br />
                            <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                        </div>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        }
        // line 64
        echo "            </ul>
            <div class=\"collection-actions\">
                ";
        // line 66
        $context["lastKey"] = ((isset($context["lastKey"]) ? $context["lastKey"] : null) + 1);
        // line 67
        echo "                <button class=\"button\" type=\"button\" data-action=\"add\" data-key-index=\"";
        echo (isset($context["lastKey"]) ? $context["lastKey"] : null);
        echo "\"><i class=\"fa fa-plus\"></i> Add item</button>
            </div>

            <script type=\"text/html\" data-collection-template=\"new\">
                <li data-collection-item=\"";
        // line 71
        echo ((isset($context["name"]) ? $context["name"] : null) . ".*");
        echo "\">
                    ";
        // line 72
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 73
            echo "                    ";
            $context["itemName"] = ((isset($context["name"]) ? $context["name"] : null) . ".*");
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 75
                echo "                        ";
                if ((is_string($__internal_879736f2ef9cd462af450f909c361b823bb098f8a765af9c2e0ffbb43dffd668 = $context["childName"]) && is_string($__internal_78f4a3f2b15fab020a66b091d2ec9c306aef3d13f175565fc49af37910a20971 = ".") && ('' === $__internal_78f4a3f2b15fab020a66b091d2ec9c306aef3d13f175565fc49af37910a20971 || 0 === strpos($__internal_879736f2ef9cd462af450f909c361b823bb098f8a765af9c2e0ffbb43dffd668, $__internal_78f4a3f2b15fab020a66b091d2ec9c306aef3d13f175565fc49af37910a20971)))) {
                    // line 76
                    echo "                            ";
                    $context["childKey"] = trim($context["childName"], ".");
                    // line 77
                    echo "                            ";
                    $context["childName"] = ((isset($context["itemName"]) ? $context["itemName"] : null) . $context["childName"]);
                    // line 78
                    echo "                        ";
                } else {
                    // line 79
                    echo "                            ";
                    $context["childKey"] = $context["childName"];
                    // line 80
                    echo "                            ";
                    $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                    // line 81
                    echo "                        ";
                }
                // line 82
                echo "                        ";
                $context["child"] = twig_array_merge($context["child"], array("name" => $context["childName"]));
                // line 83
                echo "
                        ";
                // line 84
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 85
                    echo "                            ";
                    // line 86
                    $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/list/list.html.twig", 86)->display(array_merge($context, array("field" =>                     // line 87
$context["child"], "value" => null)));
                    // line 89
                    echo "                        ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 90
                    echo "                            ";
                    // line 91
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute(                    // line 92
$context["child"], "type", array())) . "/") . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/list/list.html.twig", 91)->display(array_merge($context, array("field" =>                     // line 94
$context["child"], "value" => null)));
                    // line 96
                    echo "                        ";
                }
                // line 97
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                    <div class=\"item-actions\">
                        <i class=\"fa fa-bars\"></i>
                        <br />
                        <i class=\"fa fa-trash-o\" data-action=\"delete\"></i>
                    </div>
                    ";
        }
        // line 104
        echo "                </li>
            </script>

            <div style=\"display: none;\" data-collection-config=\"";
        // line 107
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" data-collection-array=\"";
        echo (((isset($context["array"]) ? $context["array"] : null)) ? ("true") : ("false"));
        echo "\"></div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 107,  328 => 104,  320 => 98,  306 => 97,  303 => 96,  301 => 94,  300 => 92,  299 => 91,  297 => 90,  294 => 89,  292 => 87,  291 => 86,  289 => 85,  287 => 84,  284 => 83,  281 => 82,  278 => 81,  275 => 80,  272 => 79,  269 => 78,  266 => 77,  263 => 76,  260 => 75,  242 => 74,  239 => 73,  237 => 72,  233 => 71,  225 => 67,  223 => 66,  219 => 64,  216 => 63,  196 => 56,  182 => 55,  179 => 54,  177 => 52,  176 => 50,  175 => 49,  173 => 48,  170 => 47,  168 => 45,  167 => 44,  165 => 43,  163 => 42,  160 => 41,  157 => 40,  154 => 39,  151 => 38,  148 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  113 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  67 => 21,  65 => 20,  61 => 19,  57 => 18,  49 => 14,  43 => 12,  35 => 10,  33 => 9,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set name = scope ~ field.name %}*/
/* {% set array = field.array is defined ? field.array : true %}*/
/* {% set lastKey = null %}*/
/* */
/* <div class="form-field grid pure-g">*/
/*     <div class="form-label block size-1-4 pure-u-1-4">*/
/*         <label>*/
/*             {% if field.help %}*/
/*             <span class="tooltip" data-asTooltip-position="w" title="{{ field.help|e|tu }}">{{ field.label|tu }}</span>*/
/*             {% else %}*/
/*             {{ field.label|tu }}*/
/*             {% endif %}*/
/*             {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*         </label>*/
/*     </div>*/
/*     <div class="form-data block size-3-4 pure-u-3-4">*/
/*         <div class="form-list-wrapper {{ field.size }}" data-type="collection">*/
/*             <ul data-collection-holder="{{ name }}">*/
/*                 {% if field.fields %}*/
/*                 {% for key, val in value %}*/
/*                     {% if array and (key matches '/^\\d+$/') == 0 %}*/
/*                         {% set array = false %}*/
/*                         {% set lastKey = -1 %}*/
/*                     {% elseif array %}*/
/*                         {% set lastKey = key %}*/
/*                     {% endif %}*/
/*                     {% set itemName = name ~ '.' ~ key %}*/
/*                     <li data-collection-item="{{ itemName }}" data-collection-key="{{ key }}">*/
/*                         {% for childName, child in field.fields %}*/
/*                             {% if childName starts with '.' %}*/
/*                                 {% set childKey = childName|trim('.') %}*/
/*                                 {% set childValue = val[childName[1:]] %}*/
/*                                 {% set childName = itemName ~ childName %}*/
/*                             {% else %}*/
/*                                 {% set childKey = childName %}*/
/*                                 {% set childValue = data.value(scope ~ childName) %}*/
/*                                 {% set childName = childName|replace({'*': key}) %}*/
/*                             {% endif %}*/
/*                             {% set child = child|merge({ name: childName }) %}*/
/* */
/*                             {% if child.type == 'key' %}*/
/*                                 {%*/
/*                                     include 'forms/fields/text/text.html.twig'*/
/*                                     with { field: child, value: key }*/
/*                                 %}*/
/*                             {% elseif child.type %}*/
/*                                 {%*/
/*                                     include [*/
/*                                         "forms/fields/#{child.type}/#{child.type}.html.twig",*/
/*                                         'forms/fields/text/text.html.twig'*/
/*                                     ] with { field: child, value: childValue }*/
/*                                 %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         <div class="item-actions">*/
/*                             <i class="fa fa-bars"></i>*/
/*                             <br />*/
/*                             <i class="fa fa-trash-o" data-action="delete"></i>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*             <div class="collection-actions">*/
/*                 {% set lastKey = lastKey + 1 %}*/
/*                 <button class="button" type="button" data-action="add" data-key-index="{{ lastKey }}"><i class="fa fa-plus"></i> Add item</button>*/
/*             </div>*/
/* */
/*             <script type="text/html" data-collection-template="new">*/
/*                 <li data-collection-item="{{ name ~ '.*' }}">*/
/*                     {% if field.fields %}*/
/*                     {% set itemName = name ~ '.*' %}*/
/*                     {% for childName, child in field.fields %}*/
/*                         {% if childName starts with '.' %}*/
/*                             {% set childKey = childName|trim('.') %}*/
/*                             {% set childName = itemName ~ childName %}*/
/*                         {% else %}*/
/*                             {% set childKey = childName %}*/
/*                             {% set childName = childName|replace({'*': key}) %}*/
/*                         {% endif %}*/
/*                         {% set child = child|merge({ name: childName }) %}*/
/* */
/*                         {% if child.type == 'key' %}*/
/*                             {%*/
/*                                 include 'forms/fields/text/text.html.twig'*/
/*                                 with { field: child, value: null }*/
/*                             %}*/
/*                         {% elseif child.type %}*/
/*                             {%*/
/*                                 include [*/
/*                                     "forms/fields/#{child.type}/#{child.type}.html.twig",*/
/*                                     'forms/fields/text/text.html.twig'*/
/*                                 ] with { field: child, value: null }*/
/*                             %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <div class="item-actions">*/
/*                         <i class="fa fa-bars"></i>*/
/*                         <br />*/
/*                         <i class="fa fa-trash-o" data-action="delete"></i>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </li>*/
/*             </script>*/
/* */
/*             <div style="display: none;" data-collection-config="{{ name }}" data-collection-array="{{ array ? 'true' : 'false' }}"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
