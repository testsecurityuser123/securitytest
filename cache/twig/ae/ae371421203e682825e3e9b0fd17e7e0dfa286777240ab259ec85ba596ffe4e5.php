<?php

/* modular/project-intro.html.twig */
class __TwigTemplate_02932edd84cd49398c7a465f2e0ccaa81d5d031c779d1b1c906430bcc6dd9077 extends Twig_Template
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
        echo "<section class=\"project-intro\" style=\"background-color: #";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_intro_background_color", array());
        echo ";\">
\t<div class=\"project-intro-container\">
\t\t
\t\t<div class=\"project-intro-info-container\">
\t\t\t<div class=\"project-intro-info\">
\t\t\t\t<h2>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t\t\t\t<p>";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-intro-image\" style=\"background-image: url(' ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_img", array());
        echo "');\" data-0=\"background-position:50% 0%;\" data-500=\"background-position:50% 50%\"></div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' ";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_intro_background_image", array());
        echo "');\"></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  39 => 11,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <section class="project-intro" style="background-color: #{{ header.project_intro_background_color }};">*/
/* 	<div class="project-intro-container">*/
/* 		*/
/* 		<div class="project-intro-info-container">*/
/* 			<div class="project-intro-info">*/
/* 				<h2>{{ page.title }}</h2>*/
/* 				<p>{{ content }}</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="project-intro-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_img }}');" data-0="background-position:50% 0%;" data-500="background-position:50% 50%"></div>*/
/* */
/* 	</div>*/
/* 	<div class="project-intro-background-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_intro_background_image }}');"></div>*/
/* </section>*/
/* */
/* */
