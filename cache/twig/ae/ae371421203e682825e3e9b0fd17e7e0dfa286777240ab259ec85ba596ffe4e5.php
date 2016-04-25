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
        echo "<section class=\"project-intro\">
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

\t\t<div class=\"project-intro-image-container\">

\t\t\t<div class=\"project-intro-image-laptop\" style=\"background-image: url(' ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_img_laptop", array());
        echo "');\"></div>

\t\t\t<div class=\"project-intro-image-phone\" style=\"background-image: url(' ";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_img_phone", array());
        echo "');\"></div>

\t\t</div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' ";
        // line 20
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
        return array (  56 => 20,  46 => 15,  39 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section class="project-intro">*/
/* 	<div class="project-intro-container">*/
/* 		*/
/* 		<div class="project-intro-info-container">*/
/* 			<div class="project-intro-info">*/
/* 				<h2>{{ page.title }}</h2>*/
/* 				<p>{{ content }}</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="project-intro-image-container">*/
/* */
/* 			<div class="project-intro-image-laptop" style="background-image: url(' {{ page.url(true) }}/{{ header.project_img_laptop }}');"></div>*/
/* */
/* 			<div class="project-intro-image-phone" style="background-image: url(' {{ page.url(true) }}/{{ header.project_img_phone }}');"></div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<div class="project-intro-background-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_intro_background_image }}');"></div>*/
/* </section>*/
/* */
/* */
