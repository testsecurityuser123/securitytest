<?php

/* partials/base.html.twig */
class __TwigTemplate_20695425ebd8f60c2bb20063eaaa44de4b1fc591796dced76c215f523122103e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('showcase', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "    </div>
    ";
        // line 77
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 90
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css", 1 => 101), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/template.css", 1 => 101), "method");
        // line 17
        echo "
        ";
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/modernizr-min.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fangman-v1-min.js"), "method");
        // line 32
        echo "    ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "        <header id=\"site-navigation\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 42
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
        </header>
        <div id=\"site-menu\">
            ";
        // line 47
        $this->displayBlock('header_extra', $context, $blocks);
        // line 48
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 49
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 49)->display($context);
            // line 50
            echo "            ";
        }
        // line 51
        echo "            ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 54
        echo "            <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
        </div>
        ";
    }

    // line 47
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 51
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "            ";
    }

    // line 58
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </section>
        ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "        <footer id=\"footer\">
            
        </footer>
        ";
    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
        // line 78
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 78,  245 => 77,  238 => 67,  235 => 66,  230 => 62,  225 => 63,  223 => 62,  218 => 61,  215 => 60,  210 => 58,  206 => 53,  203 => 52,  200 => 51,  195 => 47,  189 => 54,  186 => 51,  183 => 50,  180 => 49,  177 => 48,  175 => 47,  165 => 42,  161 => 40,  158 => 39,  154 => 32,  151 => 31,  148 => 30,  145 => 29,  142 => 28,  138 => 25,  135 => 17,  132 => 16,  129 => 15,  126 => 14,  118 => 33,  116 => 28,  110 => 26,  108 => 14,  103 => 12,  99 => 11,  96 => 10,  94 => 9,  86 => 8,  83 => 7,  80 => 6,  74 => 90,  71 => 77,  68 => 71,  66 => 66,  63 => 65,  61 => 60,  58 => 59,  56 => 58,  53 => 57,  51 => 39,  46 => 37,  43 => 36,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/normalize.css',101) %}*/
/*         {% do assets.addCss('theme://css/template.css',101) %}*/
/* */
/*         {# {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %} #}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/min/modernizr-min.js',100) %}*/
/*         {% do assets.addJs('theme://js/min/fangman-v1-min.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="site-navigation">*/
/*             <div class="site-nav-logo">*/
/*                 <a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a>*/
/*             </div>*/
/*             <div class="menu-toggle">Menu<div class="icon"></div></div>*/
/*         </header>*/
/*         <div id="site-menu">*/
/*             {% block header_extra %}{% endblock %}*/
/*             {% if config.plugins.langswitcher.enabled %}*/
/*             {% include 'partials/langswitcher.html.twig' %}*/
/*             {% endif %}*/
/*             {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*             {% endblock %}*/
/*             <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*             */
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     {# <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div> #}*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
