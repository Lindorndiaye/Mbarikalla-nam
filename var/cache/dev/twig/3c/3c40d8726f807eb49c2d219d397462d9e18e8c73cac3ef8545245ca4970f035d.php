<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_80b2c34f1d80f820e18494401d3e4d9b7ae0259eecd20d8d8622697a8709d950 extends Twig_Template
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
        $__internal_30bbecd52ccf45f81d7afa723115605928f9aafdf7af8d4c7d8c2af78c340806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bbecd52ccf45f81d7afa723115605928f9aafdf7af8d4c7d8c2af78c340806->enter($__internal_30bbecd52ccf45f81d7afa723115605928f9aafdf7af8d4c7d8c2af78c340806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d42d05e973373c3cc1ba8d6df343008588db2fe35bf9e611ef4c4f142fc29952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42d05e973373c3cc1ba8d6df343008588db2fe35bf9e611ef4c4f142fc29952->enter($__internal_d42d05e973373c3cc1ba8d6df343008588db2fe35bf9e611ef4c4f142fc29952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_30bbecd52ccf45f81d7afa723115605928f9aafdf7af8d4c7d8c2af78c340806->leave($__internal_30bbecd52ccf45f81d7afa723115605928f9aafdf7af8d4c7d8c2af78c340806_prof);

        
        $__internal_d42d05e973373c3cc1ba8d6df343008588db2fe35bf9e611ef4c4f142fc29952->leave($__internal_d42d05e973373c3cc1ba8d6df343008588db2fe35bf9e611ef4c4f142fc29952_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
