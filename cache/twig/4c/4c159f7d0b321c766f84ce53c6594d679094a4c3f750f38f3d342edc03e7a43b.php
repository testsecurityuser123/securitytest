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
        // line 46
        echo "</head>
<body id=\"top\" class=\"";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        <div id=\"skrollr-body\">
        ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('showcase', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
        ";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "    </div>
    </div>
    ";
        // line 94
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 114
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
        // line 15
        echo "    <script src=\"https://use.typekit.net/alj5fvl.js\"></script>  
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/template.css", 1 => 101), "method");
        // line 21
        echo "
        ";
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/modernizr-min.js", 1 => 100), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/skrollr-min.js", 1 => 99), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slick.min.js", 1 => 98), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/magnific-popup.js", 1 => 97), "method");
        // line 38
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/jqwidont-min.js", 1 => 96), "method");
        // line 39
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fittext-min.js", 1 => 95), "method");
        // line 40
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fangman-v1-min.js", 1 => 94), "method");
        // line 41
        echo "
    ";
    }

    // line 50
    public function block_header($context, array $blocks = array())
    {
        // line 51
        echo "        <header id=\"site-navigation\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 53
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#welcome\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
            <div class=\"site-nav-menu-container\">
                <a href=\"";
        // line 57
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#about\"><h6>About</h6></a>
                <a href=\"";
        // line 58
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#work\"><h6>Work</h6></a>
            </div>
        </header>
        ";
        // line 71
        echo "        ";
    }

    // line 73
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        </section>
        ";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "        <footer id=\"footer\">
            <span class=\"footer-credit\">Designed & Built by Michael Fangman © 2016</span>
        
        </footer>
        ";
    }

    // line 94
    public function block_bottom($context, array $blocks = array())
    {
        // line 95
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
        <script type=\"text/javascript\">
            var s = skrollr.init({forceHeight: false});
        </script>
        <script type=\"text/javascript\">
            jQuery(\".home-hero-content h1\").fitText(.5, { minFontSize: '30px', maxFontSize: '150px' });
            jQuery(\".project-intro-info h2\").fitText(.5, { minFontSize: '24px', maxFontSize: '90px' });
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
        return array (  248 => 95,  245 => 94,  237 => 82,  234 => 81,  229 => 77,  224 => 78,  222 => 77,  217 => 76,  214 => 75,  209 => 73,  205 => 71,  199 => 58,  195 => 57,  186 => 53,  182 => 51,  179 => 50,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  162 => 37,  159 => 36,  156 => 35,  153 => 34,  150 => 33,  147 => 32,  143 => 29,  140 => 21,  137 => 20,  134 => 19,  131 => 18,  123 => 43,  121 => 32,  115 => 30,  113 => 18,  108 => 15,  103 => 12,  99 => 11,  96 => 10,  94 => 9,  86 => 8,  83 => 7,  80 => 6,  74 => 114,  71 => 94,  67 => 87,  65 => 81,  62 => 80,  60 => 75,  57 => 74,  55 => 73,  52 => 72,  50 => 50,  44 => 47,  41 => 46,  39 => 6,  33 => 3,  30 => 2,  28 => 1,);
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
/*     {# Typekit #}*/
/*     <script src="https://use.typekit.net/alj5fvl.js"></script>  */
/*     <script>try{Typekit.load({ async: true });}catch(e){}</script>*/
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
/*         {% do assets.addJs('theme://js/min/skrollr-min.js',99) %}*/
/*         {% do assets.addJs('theme://js/slick.min.js' ,98) %}*/
/*         {% do assets.addJs('theme://js/magnific-popup.js' ,97) %}*/
/*         {% do assets.addJs('theme://js/min/jqwidont-min.js' ,96) %}*/
/*         {% do assets.addJs('theme://js/min/fittext-min.js' ,95) %}*/
/*         {% do assets.addJs('theme://js/min/fangman-v1-min.js' ,94) %}*/
/* */
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         <div id="skrollr-body">*/
/*         {% block header %}*/
/*         <header id="site-navigation">*/
/*             <div class="site-nav-logo">*/
/*                 <a href="{{ base_url }}/#welcome">{{ config.site.title }}</a>*/
/*             </div>*/
/*             <div class="menu-toggle">Menu<div class="icon"></div></div>*/
/*             <div class="site-nav-menu-container">*/
/*                 <a href="{{ base_url }}/#about"><h6>About</h6></a>*/
/*                 <a href="{{ base_url }}/#work"><h6>Work</h6></a>*/
/*             </div>*/
/*         </header>*/
/*         {# <div id="site-menu">*/
/*             {% block header_extra %}{% endblock %}*/
/*             {% if config.plugins.langswitcher.enabled %}*/
/*             {% include 'partials/langswitcher.html.twig' %}*/
/*             {% endif %}*/
/*             {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*             {% endblock %}*/
/*             <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*         </div> #}*/
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
/*             <span class="footer-credit">Designed & Built by Michael Fangman © 2016</span>*/
/*         */
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
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
/*         <script type="text/javascript">*/
/*             var s = skrollr.init({forceHeight: false});*/
/*         </script>*/
/*         <script type="text/javascript">*/
/*             jQuery(".home-hero-content h1").fitText(.5, { minFontSize: '30px', maxFontSize: '150px' });*/
/*             jQuery(".project-intro-info h2").fitText(.5, { minFontSize: '24px', maxFontSize: '90px' });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
