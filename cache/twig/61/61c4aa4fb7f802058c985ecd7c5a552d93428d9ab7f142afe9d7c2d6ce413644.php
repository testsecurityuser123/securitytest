<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_db9993cb80ee04e20a1458d095a57afc45fbe26a54708c86221bcf5104749161 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "</head>
<body id=\"top\" class=\"no-js ";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
        <script>
            \$('body').removeClass('no-js');
        </script>

    ";
        // line 58
        echo "      <div id=\"preloader\">
        <div class=\"pl-circle pl-circle-one\"></div>
        <div class=\"pl-circle pl-circle-two\"></div>
        <div class=\"pl-circle pl-circle-three\"></div>
      </div>
   ";
        // line 64
        echo "    <div id=\"sb-site\">
        ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 87
        echo "        <div id=\"skrollr-body\">

        ";
        // line 89
        $this->displayBlock('showcase', $context, $blocks);
        // line 90
        echo "
        ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "    </div>
    </div>
    ";
        // line 110
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 159
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
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
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
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
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/normalize.css", 1 => 101], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/template.css", 1 => 101], "method");
        // line 27
        echo "
        ";
        // line 35
        echo "    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slick.min.js", 1 => 99], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/min/skrollr-min.js", 1 => 93], "method");
        // line 42
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/magnific-popup.js", 1 => 97], "method");
        // line 43
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/min/jqwidont-min.js", 1 => 96], "method");
        // line 44
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/min/fittext-min.js", 1 => 95], "method");
        // line 45
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fangman-v1.js", 1 => 94], "method");
        // line 46
        echo "
    ";
    }

    // line 65
    public function block_header($context, array $blocks = [])
    {
        // line 66
        echo "        <header id=\"site-navigation\" data-start=\"position:fixed;\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 68
        echo ($context["base_url"] ?? null);
        echo "/#welcome\" class=\"link\"><span class=\"site-title\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "<span class=\"nav-back\"></span></a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
            <div class=\"site-nav-menu-container\">
                <a href=\"";
        // line 72
        echo ($context["base_url"] ?? null);
        echo "/#about\" class=\"link\"><h6>About</h6></a>
                <a href=\"";
        // line 73
        echo ($context["base_url"] ?? null);
        echo "/#work\" class=\"link\"><h6>Work</h6></a>
            </div>
        </header>
        ";
        // line 86
        echo "        ";
    }

    // line 89
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        // line 92
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "        </section>
        ";
    }

    // line 93
    public function block_content($context, array $blocks = [])
    {
    }

    // line 97
    public function block_footer($context, array $blocks = [])
    {
        // line 98
        echo "        <footer id=\"footer\" data-60-end=\"opacity:0;\" data-end=\"opacity:1;\">
            <span class=\"footer-credit\">Designed & Built by Michael Fangman © 2018</span>

        </footer>
        ";
    }

    // line 110
    public function block_bottom($context, array $blocks = [])
    {
        // line 111
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
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
            jQuery(\".home-hero-content h1\").fitText(.4, { minFontSize: '66px', maxFontSize: '192px' });
            jQuery(\".project-intro-info h2\").fitText(.6, { minFontSize: '24px', maxFontSize: '90px' });
            jQuery(\"#error h1\").fitText(.5, { minFontSize: '24px', maxFontSize: '150px' });
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
        return array (  273 => 111,  270 => 110,  262 => 98,  259 => 97,  254 => 93,  249 => 94,  247 => 93,  242 => 92,  239 => 91,  234 => 89,  230 => 86,  224 => 73,  220 => 72,  211 => 68,  207 => 66,  204 => 65,  199 => 46,  196 => 45,  193 => 44,  190 => 43,  187 => 42,  184 => 41,  181 => 40,  178 => 39,  175 => 38,  171 => 35,  168 => 27,  165 => 26,  162 => 25,  159 => 24,  151 => 48,  149 => 38,  143 => 36,  141 => 24,  136 => 21,  131 => 18,  123 => 12,  120 => 10,  118 => 9,  110 => 8,  107 => 7,  104 => 6,  98 => 159,  95 => 110,  91 => 103,  89 => 97,  86 => 96,  84 => 91,  81 => 90,  79 => 89,  75 => 87,  73 => 65,  70 => 64,  63 => 58,  55 => 52,  52 => 51,  50 => 6,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>

{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    {# <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" /> #}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#242433\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {# Typekit #}
    <script src=\"https://use.typekit.net/alj5fvl.js\"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    {% block stylesheets %}
        {% do assets.addCss('theme://css/normalize.css',101) %}
        {% do assets.addCss('theme://css/template.css',101) %}

        {# {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %} #}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/slick.min.js' ,99) %}
        {% do assets.addJs('theme://js/min/skrollr-min.js',93) %}
        {% do assets.addJs('theme://js/magnific-popup.js' ,97) %}
        {% do assets.addJs('theme://js/min/jqwidont-min.js' ,96) %}
        {% do assets.addJs('theme://js/min/fittext-min.js' ,95) %}
        {% do assets.addJs('theme://js/fangman-v1.js' ,94) %}

    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"no-js {{ page.header.body_classes }}\">
        <script>
            \$('body').removeClass('no-js');
        </script>

    {# <div id=\"preloader\"> #}
      <div id=\"preloader\">
        <div class=\"pl-circle pl-circle-one\"></div>
        <div class=\"pl-circle pl-circle-two\"></div>
        <div class=\"pl-circle pl-circle-three\"></div>
      </div>
   {#  </div> #}
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"site-navigation\" data-start=\"position:fixed;\">
            <div class=\"site-nav-logo\">
                <a href=\"{{ base_url }}/#welcome\" class=\"link\"><span class=\"site-title\">{{ config.site.title }}<span class=\"nav-back\"></span></a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
            <div class=\"site-nav-menu-container\">
                <a href=\"{{ base_url }}/#about\" class=\"link\"><h6>About</h6></a>
                <a href=\"{{ base_url }}/#work\" class=\"link\"><h6>Work</h6></a>
            </div>
        </header>
        {# <div id=\"site-menu\">
            {% block header_extra %}{% endblock %}
            {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
            {% endif %}
            {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
            {% endblock %}
            <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
        </div> #}
        {% endblock %}
        <div id=\"skrollr-body\">

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\" data-60-end=\"opacity:0;\" data-end=\"opacity:1;\">
            <span class=\"footer-credit\">Designed & Built by Michael Fangman © 2018</span>

        </footer>
        {% endblock %}
    </div>
    </div>
    {# <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div> #}
    {% block bottom %}
        {{ assets.js('bottom') }}

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
            jQuery(\".home-hero-content h1\").fitText(.4, { minFontSize: '66px', maxFontSize: '192px' });
            jQuery(\".project-intro-info h2\").fitText(.6, { minFontSize: '24px', maxFontSize: '90px' });
            jQuery(\"#error h1\").fitText(.5, { minFontSize: '24px', maxFontSize: '150px' });
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

    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/partials/base.html.twig");
    }
}
