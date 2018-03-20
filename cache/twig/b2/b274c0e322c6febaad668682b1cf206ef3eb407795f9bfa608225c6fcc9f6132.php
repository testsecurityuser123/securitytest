<?php

/* modular/project-next-link.html.twig */
class __TwigTemplate_4056850c3fb846ff6d1951ed050f2b38f04ce6cf061b8d3a7d60073fc5f9b06d extends Twig_Template
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
        echo "<section class=\"project-next-link\" ";
        if ($this->getAttribute(($context["header"] ?? null), "project_nl_padding", array())) {
            echo "style=\"margin-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_nl_padding", array());
            echo ";\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo ($context["base_url"] ?? null);
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_nl_project_link", array());
        echo "\" class=\"link project-nl-container\">

\t\t<div class=\"project-nl-info\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\" data-end=\"opacity:1;\">
\t\t\t<p class=\"subhead\">Next Up</p>
\t\t\t<h3>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
\t\t</div>

\t</a>
\t<div class=\"project-nl-bkg-image\" style=\"background-image: url(' ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_nl_bkg_image", array());
        echo "');\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-next-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 6,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-next-link\" {% if header.project_nl_padding %}style=\"margin-top:{{ header.project_nl_padding }};\"{% endif %}>
\t<a href=\"{{ base_url }}/{{ header.project_nl_project_link }}\" class=\"link project-nl-container\">

\t\t<div class=\"project-nl-info\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\" data-end=\"opacity:1;\">
\t\t\t<p class=\"subhead\">Next Up</p>
\t\t\t<h3>{{ page.title }}</h3>
\t\t</div>

\t</a>
\t<div class=\"project-nl-bkg-image\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_nl_bkg_image }}');\"></div>
</section>
", "modular/project-next-link.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-next-link.html.twig");
    }
}
