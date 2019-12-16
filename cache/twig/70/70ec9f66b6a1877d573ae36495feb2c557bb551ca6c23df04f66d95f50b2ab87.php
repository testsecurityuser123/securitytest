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

/* modular/project-image-left.html.twig */
class __TwigTemplate_b7ebd19fe28dfd0068bc919d72f419640d6411a661586302cbb5d07e0a7ebf22 extends \Twig\Template
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
        echo "<section class=\"project-image-left\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-left-container\">
\t\t<div class=\"project-image-left-img-container\">
\t\t\t\t<img class=\"project-image-left-img\" src=\"";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_l_img", []);
        echo "\" ";
        if ($this->getAttribute(($context["header"] ?? null), "project_img_l_adjust", [])) {
            echo "style=\"padding-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_adjust", []);
            echo ";\"";
        }
        echo ">
\t\t</div>
\t\t<div class=\"project-image-left-content-container\">
\t\t\t<div class=\"project-image-left-content-inner-container\">
\t\t\t\t";
        // line 8
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "project_img_l_button_link", [])) {
            // line 10
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_button_link", []);
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_button_text", []);
            echo "</a>
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-image-left-background\"
\t\tstyle=\"background-image: url(' ";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_l_background_image", []);
        echo "');\">
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-image-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  64 => 12,  56 => 10,  54 => 9,  50 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-image-left\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-left-container\">
\t\t<div class=\"project-image-left-img-container\">
\t\t\t\t<img class=\"project-image-left-img\" src=\"{{ page.url(true) }}/{{ header.project_img_l_img }}\" {% if header.project_img_l_adjust %}style=\"padding-top:{{ header.project_img_l_adjust }};\"{% endif %}>
\t\t</div>
\t\t<div class=\"project-image-left-content-container\">
\t\t\t<div class=\"project-image-left-content-inner-container\">
\t\t\t\t{{ content }}
\t\t\t\t{% if header.project_img_l_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_img_l_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_img_l_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-image-left-background\"
\t\tstyle=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_l_background_image }}');\">
\t</div>
</section>
", "modular/project-image-left.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-image-left.html.twig");
    }
}
