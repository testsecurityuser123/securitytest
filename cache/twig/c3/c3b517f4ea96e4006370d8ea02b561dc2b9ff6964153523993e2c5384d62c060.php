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

/* modular/project-card-slider-right.html.twig */
class __TwigTemplate_5289fe96702a12d864bcb3b22a99871c0184efd9200ef69c1d2d0a27405231c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"project-cs-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-cs-right-container\">

\t\t<div class=\"project-cs-right-slider-container\" >

\t\t\t<div class=\"project-cs-right-slider\" ";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "project_r_cs_adjust", [])) {
            echo "style=\"margin-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_r_cs_adjust", []);
            echo ";\"";
        }
        echo ">
\t\t\t  \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_img_r_cs_slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 8
            echo "\t\t\t\t  \t\t<div class=\"project-cs-right-slide\">
\t\t\t\t  \t\t\t<span>";
            // line 9
            echo $this->getAttribute($context["slide"], "subhead", []);
            echo "</span>
\t\t\t\t\t\t\t\t<p>";
            // line 10
            echo $this->getAttribute($context["slide"], "headline", []);
            echo "<p>
\t\t\t\t\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slide"], "users", []));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 12
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"project-cs-right-slide-userImage\" style=\"background-image: url(' ";
                echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
                echo "/";
                echo $this->getAttribute($context["user"], "image", []);
                echo " ');\"></div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t\t  \t\t</div>
\t\t\t\t  \t<!-- </a> -->
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-cs-right-content-container\">
\t\t\t<div class=\"project-cs-right-content-inner-container\">
\t\t\t\t";
        // line 23
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t";
        // line 24
        if ($this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", [])) {
            // line 25
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", []);
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_text", []);
            echo "</a>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-cs-right-background\"
\t\tstyle=\"background-image: url(' ";
        // line 33
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_background_image", []);
        echo "');\">
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-card-slider-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  105 => 27,  97 => 25,  95 => 24,  91 => 23,  83 => 17,  75 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-cs-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-cs-right-container\">

\t\t<div class=\"project-cs-right-slider-container\" >

\t\t\t<div class=\"project-cs-right-slider\" {% if header.project_r_cs_adjust %}style=\"margin-top:{{ header.project_r_cs_adjust }};\"{% endif %}>
\t\t\t  \t{% for slide in page.header.project_img_r_cs_slides %}
\t\t\t\t  \t\t<div class=\"project-cs-right-slide\">
\t\t\t\t  \t\t\t<span>{{ slide.subhead}}</span>
\t\t\t\t\t\t\t\t<p>{{ slide.headline }}<p>
\t\t\t\t\t\t\t\t\t{% for user in slide.users %}
\t\t\t\t\t\t\t\t\t\t<div class=\"project-cs-right-slide-userImage\" style=\"background-image: url(' {{ page.url(true) }}/{{ user.image }} ');\"></div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t  \t\t</div>
\t\t\t\t  \t<!-- </a> -->
\t\t\t  \t{% endfor %}
\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-cs-right-content-container\">
\t\t\t<div class=\"project-cs-right-content-inner-container\">
\t\t\t\t{{ content }}
\t\t\t\t{% if header.project_img_r_cs_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_img_r_cs_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_img_r_cs_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-cs-right-background\"
\t\tstyle=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_r_cs_background_image }}');\">
\t</div>
</section>
", "modular/project-card-slider-right.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-card-slider-right.html.twig");
    }
}
