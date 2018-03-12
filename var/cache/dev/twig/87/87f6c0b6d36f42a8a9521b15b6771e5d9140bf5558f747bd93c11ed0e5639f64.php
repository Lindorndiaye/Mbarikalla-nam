<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_08b7685e1d9fe579288c9219ba9d2587e39555fcc19bc3b18769122693857d82 extends Twig_Template
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
        $__internal_2565906db4e68fd10afe036f5ac137e7acf734ca5c97777eecad509db88cdf72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2565906db4e68fd10afe036f5ac137e7acf734ca5c97777eecad509db88cdf72->enter($__internal_2565906db4e68fd10afe036f5ac137e7acf734ca5c97777eecad509db88cdf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e231b9c669e81041dce52d3c47d05a4f833df343257a34355986ba8feca74915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e231b9c669e81041dce52d3c47d05a4f833df343257a34355986ba8feca74915->enter($__internal_e231b9c669e81041dce52d3c47d05a4f833df343257a34355986ba8feca74915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2565906db4e68fd10afe036f5ac137e7acf734ca5c97777eecad509db88cdf72->leave($__internal_2565906db4e68fd10afe036f5ac137e7acf734ca5c97777eecad509db88cdf72_prof);

        
        $__internal_e231b9c669e81041dce52d3c47d05a4f833df343257a34355986ba8feca74915->leave($__internal_e231b9c669e81041dce52d3c47d05a4f833df343257a34355986ba8feca74915_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
