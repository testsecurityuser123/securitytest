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

/* modular/project-next-link.html.twig */
class __TwigTemplate_701096f60f86b8970bbf5f524166a93406c9ced67ac6a84c669af80e3d1ec14b extends \Twig\Template
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
        echo "<section class=\"project-next-link\" ";
        if ($this->getAttribute(($context["header"] ?? null), "project_nl_padding", [])) {
            echo "style=\"margin-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_nl_padding", []);
            echo ";\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo ($context["base_url"] ?? null);
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_nl_project_link", []);
        echo "\" class=\"link project-nl-container\">

\t\t<div class=\"project-nl-info\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\" data-end=\"opacity:1;\">
\t\t\t<p class=\"subhead\">Next Up</p>
\t\t\t<h3>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
\t\t</div>

\t</a>
\t<div class=\"project-nl-bkg-image\" style=\"background-image: url(' ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_nl_bkg_image", []);
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
        return array (  55 => 10,  48 => 6,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-next-link\" {% if header.project_nl_padding %}style=\"margin-top:{{ header.project_nl_padding }};\"{% endif %}>
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
