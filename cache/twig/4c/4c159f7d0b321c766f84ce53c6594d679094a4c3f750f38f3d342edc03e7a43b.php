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
        // line 52
        echo "</head>
<body id=\"top\" class=\"no-js ";
        // line 53
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
        <script>
            \$('body').removeClass('no-js');
        </script>

    ";
        // line 59
        echo "      <div id=\"preloader\">
        <div class=\"pl-circle pl-circle-one\"></div>
        <div class=\"pl-circle pl-circle-two\"></div>
        <div class=\"pl-circle pl-circle-three\"></div>
      </div>
   ";
        // line 65
        echo "    <div id=\"sb-site\">
        ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "        <div id=\"skrollr-body\">

        ";
        // line 90
        $this->displayBlock('showcase', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
        ";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        echo "    </div>
    </div>
    ";
        // line 111
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 159
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
    ";
        // line 12
        echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#242433\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 21
        echo "    <script src=\"https://use.typekit.net/alj5fvl.js\"></script>  
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css", 1 => 101), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/template.css", 1 => 101), "method");
        // line 27
        echo "
        ";
        // line 35
        echo "    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slick.min.js", 1 => 99), "method");
        // line 42
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/skrollr-min.js", 1 => 93), "method");
        // line 43
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/magnific-popup.js", 1 => 97), "method");
        // line 44
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/jqwidont-min.js", 1 => 96), "method");
        // line 45
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fittext-min.js", 1 => 95), "method");
        // line 46
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fangman-v1-min.js", 1 => 94), "method");
        // line 47
        echo "
    ";
    }

    // line 66
    public function block_header($context, array $blocks = array())
    {
        // line 67
        echo "        <header id=\"site-navigation\" data-start=\"position:fixed;\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 69
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#welcome\" class=\"link\"><span class=\"site-title\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "<span class=\"nav-back\"></span></a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
            <div class=\"site-nav-menu-container\">
                <a href=\"";
        // line 73
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#about\" class=\"link\"><h6>About</h6></a>
                <a href=\"";
        // line 74
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#work\" class=\"link\"><h6>Work</h6></a>
            </div>
        </header>
        ";
        // line 87
        echo "        ";
    }

    // line 90
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        // line 93
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "        </section>
        ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
        echo "        <footer id=\"footer\" data-50-end=\"opacity:0;\" data-end=\"opacity:1;\">
            <span class=\"footer-credit\">Designed & Built by Michael Fangman © 2016</span>
        
        </footer>
        ";
    }

    // line 111
    public function block_bottom($context, array $blocks = array())
    {
        // line 112
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
        return array (  264 => 112,  261 => 111,  253 => 99,  250 => 98,  245 => 94,  240 => 95,  238 => 94,  233 => 93,  230 => 92,  225 => 90,  221 => 87,  215 => 74,  211 => 73,  202 => 69,  198 => 67,  195 => 66,  190 => 47,  187 => 46,  184 => 45,  181 => 44,  178 => 43,  175 => 42,  172 => 41,  170 => 40,  167 => 39,  164 => 38,  160 => 35,  157 => 27,  154 => 26,  151 => 25,  148 => 24,  140 => 49,  138 => 38,  132 => 36,  130 => 24,  125 => 21,  120 => 18,  112 => 12,  109 => 10,  107 => 9,  99 => 8,  96 => 7,  93 => 6,  87 => 159,  84 => 111,  80 => 104,  78 => 98,  75 => 97,  73 => 92,  70 => 91,  68 => 90,  64 => 88,  62 => 66,  59 => 65,  52 => 59,  44 => 53,  41 => 52,  39 => 6,  33 => 3,  30 => 2,  28 => 1,);
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
/*     {# <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" /> #}*/
/*     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">*/
/*     <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">*/
/*     <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">*/
/*     <link rel="manifest" href="/manifest.json">*/
/*     <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#242433">*/
/*     <meta name="theme-color" content="#ffffff">*/
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
/*                 <a href="{{ base_url }}/#welcome" class="link"><span class="site-title">{{ config.site.title }}<span class="nav-back"></span></a>*/
/*             </div>*/
/*             <div class="menu-toggle">Menu<div class="icon"></div></div>*/
/*             <div class="site-nav-menu-container">*/
/*                 <a href="{{ base_url }}/#about" class="link"><h6>About</h6></a>*/
/*                 <a href="{{ base_url }}/#work" class="link"><h6>Work</h6></a>*/
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
