<?php

/* modular/project-image-right.html.twig */
class __TwigTemplate_d08556709040354e03998bc3880319139f39880a3a90e65bfb385c0ebfe65cb0 extends Twig_Template
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
        echo "<section class=\"project-image-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-right-container\">

\t\t<div class=\"project-image-right-img-container\" >
\t\t\t\t<img class=\"project-image-right-img\" src=\"";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_r_img", array());
        echo "\" ";
        if ($this->getAttribute(($context["header"] ?? null), "project_img_r_adjust", array())) {
            echo "style=\"padding-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_adjust", array());
            echo ";\"";
        }
        echo ">
\t\t</div>

\t\t<div class=\"project-image-right-content-container\">
\t\t\t<div class=\"project-image-right-content-inner-container\">
\t\t\t\t";
        // line 10
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "project_img_r_button_link", array())) {
            // line 12
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_button_text", array());
            echo "</a>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</div>
\t\t</div>

\t\t<!-- <div class=\"project-image-right-img-container img-dsk\">
\t\t\t\t<img class=\"project-image-right-img\" src=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_r_img", array());
        echo "\">
\t\t</div> -->

\t</div>

\t<div
\t\tclass=\"project-image-right-background\"
\t\tstyle=\"background-image: url(' ";
        // line 25
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_r_background_image", array());
        echo "');\">
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-image-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  61 => 18,  55 => 14,  47 => 12,  45 => 11,  41 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-image-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-right-container\">

\t\t<div class=\"project-image-right-img-container\" >
\t\t\t\t<img class=\"project-image-right-img\" src=\"{{ page.url(true) }}/{{ header.project_img_r_img }}\" {% if header.project_img_r_adjust %}style=\"padding-top:{{ header.project_img_r_adjust }};\"{% endif %}>
\t\t</div>

\t\t<div class=\"project-image-right-content-container\">
\t\t\t<div class=\"project-image-right-content-inner-container\">
\t\t\t\t{{ content }}
\t\t\t\t{% if header.project_img_r_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_img_r_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_img_r_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>

\t\t<!-- <div class=\"project-image-right-img-container img-dsk\">
\t\t\t\t<img class=\"project-image-right-img\" src=\"{{ page.url(true) }}/{{ header.project_img_r_img }}\">
\t\t</div> -->

\t</div>

\t<div
\t\tclass=\"project-image-right-background\"
\t\tstyle=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_r_background_image }}');\">
\t</div>
</section>
", "modular/project-image-right.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-image-right.html.twig");
    }
}
