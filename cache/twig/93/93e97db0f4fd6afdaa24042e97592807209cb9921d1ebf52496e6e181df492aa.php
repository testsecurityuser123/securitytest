<?php

/* modular/project-image-left.html.twig */
class __TwigTemplate_4e0e4fbcd382827336eb31b814daf4ff71760aa0bc3fee2e2fa13a072faaf485 extends Twig_Template
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
        echo "<section class=\"project-image-left\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-left-container\">
\t\t<div class=\"project-image-left-img-container\">
\t\t\t\t<img class=\"project-image-left-img\" src=\"";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_l_img", array());
        echo "\" ";
        if ($this->getAttribute(($context["header"] ?? null), "project_img_l_adjust", array())) {
            echo "style=\"padding-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_adjust", array());
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
        if ($this->getAttribute(($context["header"] ?? null), "project_img_l_button_link", array())) {
            // line 10
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_l_button_text", array());
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
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_l_background_image", array());
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
        return array (  61 => 18,  53 => 12,  45 => 10,  43 => 9,  39 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-image-left\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
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
