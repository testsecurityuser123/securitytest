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
<body id=\"top\" class=\"no-js ";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
        <script>
            \$('body').removeClass('no-js');
        </script>

    ";
        // line 53
        echo "      <div id=\"preloader\">
        <div class=\"pl-circle pl-circle-one\"></div>
        <div class=\"pl-circle pl-circle-two\"></div>
        <div class=\"pl-circle pl-circle-three\"></div>
      </div>
   ";
        // line 59
        echo "    <div id=\"sb-site\">
        ";
        // line 60
        $this->displayBlock('header', $context, $blocks);
        // line 82
        echo "        <div id=\"skrollr-body\">

        ";
        // line 84
        $this->displayBlock('showcase', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "    </div>
    </div>
    ";
        // line 105
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 153
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
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slick.min.js", 1 => 99), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/skrollr-min.js", 1 => 93), "method");
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

    // line 60
    public function block_header($context, array $blocks = array())
    {
        // line 61
        echo "        <header id=\"site-navigation\" data-start=\"position:fixed;\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 63
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#welcome\"><span class=\"site-title\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "<span class=\"nav-back\"></span></a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
            <div class=\"site-nav-menu-container\">
                <a href=\"";
        // line 67
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#about\"><h6>About</h6></a>
                <a href=\"";
        // line 68
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#work\"><h6>Work</h6></a>
            </div>
        </header>
        ";
        // line 81
        echo "        ";
    }

    // line 84
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "        </section>
        ";
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "        <footer id=\"footer\" data-50-end=\"opacity:0;\" data-end=\"opacity:1;\">
            <span class=\"footer-credit\">Designed & Built by Michael Fangman © 2016</span>
        
        </footer>
        ";
    }

    // line 105
    public function block_bottom($context, array $blocks = array())
    {
        // line 106
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
            jQuery(\".home-hero-content h1\").fitText(.5, { minFontSize: '30px', maxFontSize: '150px' });
            jQuery(\".project-intro-info h2\").fitText(.5, { minFontSize: '24px', maxFontSize: '90px' });
        </script>

        <script type=\"text/javascript\">
            \$(document).ready(function(){
                var s = skrollr.init({
                    forceHeight: false
                });
                if (s.isMobile()) {
                    s.destroy();
                    \$('#skrollr-body').addClass('noSkrollr');
                }
            });
        </script>

        <script type=\"text/javascript\">
            // \$(document).ready(function() {
            //     // \$('body').css('display', 'none');
            //     // \$('body').fadeIn(1000);
            //     \$('.link').click(function() {
            //         event.preventDefault();
            //         newLocation = this.href;
            //         \$('body').fadeOut(500, newpage);
            //     });
                
            //     function newpage() {
            //         window.location = newLocation;
            //     }
            // });
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
        return array (  260 => 106,  257 => 105,  249 => 93,  246 => 92,  241 => 88,  236 => 89,  234 => 88,  229 => 87,  226 => 86,  221 => 84,  217 => 81,  211 => 68,  207 => 67,  198 => 63,  194 => 61,  191 => 60,  186 => 41,  183 => 40,  180 => 39,  177 => 38,  174 => 37,  171 => 36,  168 => 35,  166 => 34,  163 => 33,  160 => 32,  156 => 29,  153 => 21,  150 => 20,  147 => 19,  144 => 18,  136 => 43,  134 => 32,  128 => 30,  126 => 18,  121 => 15,  116 => 12,  112 => 11,  109 => 10,  107 => 9,  99 => 8,  96 => 7,  93 => 6,  87 => 153,  84 => 105,  80 => 98,  78 => 92,  75 => 91,  73 => 86,  70 => 85,  68 => 84,  64 => 82,  62 => 60,  59 => 59,  52 => 53,  44 => 47,  41 => 46,  39 => 6,  33 => 3,  30 => 2,  28 => 1,);
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
/*         {# {% do assets.addJs('theme://js/min/modernizr-min.js',100) %} #}*/
/*         {% do assets.addJs('theme://js/slick.min.js' ,99) %}*/
/*         {% do assets.addJs('theme://js/min/skrollr-min.js',93) %}*/
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
/* <body id="top" class="no-js {{ page.header.body_classes }}">*/
/*         <script>*/
/*             $('body').removeClass('no-js');*/
/*         </script>*/
/* */
/*     {# <div id="preloader"> #}*/
/*       <div id="preloader">*/
/*         <div class="pl-circle pl-circle-one"></div>*/
/*         <div class="pl-circle pl-circle-two"></div>*/
/*         <div class="pl-circle pl-circle-three"></div>*/
/*       </div>*/
/*    {#  </div> #}*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="site-navigation" data-start="position:fixed;">*/
/*             <div class="site-nav-logo">*/
/*                 <a href="{{ base_url }}/#welcome"><span class="site-title">{{ config.site.title }}<span class="nav-back"></span></a>*/
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
/*         <div id="skrollr-body">*/
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
/*         <footer id="footer" data-50-end="opacity:0;" data-end="opacity:1;">*/
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
/* */
/*         <script>*/
/*             $(function () {*/
/*                 $(document).ready(function() {*/
/*                   $.slidebars({*/
/*                     hideControlClasses: true,*/
/*                     scrollLock: true*/
/*                   });*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*         <script type="text/javascript">*/
/*             jQuery(".home-hero-content h1").fitText(.5, { minFontSize: '30px', maxFontSize: '150px' });*/
/*             jQuery(".project-intro-info h2").fitText(.5, { minFontSize: '24px', maxFontSize: '90px' });*/
/*         </script>*/
/* */
/*         <script type="text/javascript">*/
/*             $(document).ready(function(){*/
/*                 var s = skrollr.init({*/
/*                     forceHeight: false*/
/*                 });*/
/*                 if (s.isMobile()) {*/
/*                     s.destroy();*/
/*                     $('#skrollr-body').addClass('noSkrollr');*/
/*                 }*/
/*             });*/
/*         </script>*/
/* */
/*         <script type="text/javascript">*/
/*             // $(document).ready(function() {*/
/*             //     // $('body').css('display', 'none');*/
/*             //     // $('body').fadeIn(1000);*/
/*             //     $('.link').click(function() {*/
/*             //         event.preventDefault();*/
/*             //         newLocation = this.href;*/
/*             //         $('body').fadeOut(500, newpage);*/
/*             //     });*/
/*                 */
/*             //     function newpage() {*/
/*             //         window.location = newLocation;*/
/*             //     }*/
/*             // });*/
/*         </script>*/
/*         */
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
