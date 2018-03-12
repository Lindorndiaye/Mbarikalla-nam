<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_577ef8a46d379826ec775c418c9d0c4f98f7c0e921f21318e7696c9fa842568e extends Twig_Template
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
        $__internal_2fdeb471c135fecf92e78b3697fd8fce82b96d4f2a7b9cc4a72e7f174d5dc96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdeb471c135fecf92e78b3697fd8fce82b96d4f2a7b9cc4a72e7f174d5dc96b->enter($__internal_2fdeb471c135fecf92e78b3697fd8fce82b96d4f2a7b9cc4a72e7f174d5dc96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_eee3bfbcc92bf69c62650c13a2124ade32f9f29a25574e6695b15e3deac3a606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee3bfbcc92bf69c62650c13a2124ade32f9f29a25574e6695b15e3deac3a606->enter($__internal_eee3bfbcc92bf69c62650c13a2124ade32f9f29a25574e6695b15e3deac3a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2fdeb471c135fecf92e78b3697fd8fce82b96d4f2a7b9cc4a72e7f174d5dc96b->leave($__internal_2fdeb471c135fecf92e78b3697fd8fce82b96d4f2a7b9cc4a72e7f174d5dc96b_prof);

        
        $__internal_eee3bfbcc92bf69c62650c13a2124ade32f9f29a25574e6695b15e3deac3a606->leave($__internal_eee3bfbcc92bf69c62650c13a2124ade32f9f29a25574e6695b15e3deac3a606_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
