<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_18923ced1e18d1b98d6b99cfad8558df2552f5bee4593d66424c8c464ffaf390 extends Twig_Template
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
        $__internal_e39c0e4f54cf3113304b4eb5411d2f246c9bc6410af73963970e3ac485d40c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39c0e4f54cf3113304b4eb5411d2f246c9bc6410af73963970e3ac485d40c44->enter($__internal_e39c0e4f54cf3113304b4eb5411d2f246c9bc6410af73963970e3ac485d40c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_db5ccdcd0f29eaa18c09ee1f2c6af0f3cf886a5070f26a71e18662cde4bdad2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5ccdcd0f29eaa18c09ee1f2c6af0f3cf886a5070f26a71e18662cde4bdad2a->enter($__internal_db5ccdcd0f29eaa18c09ee1f2c6af0f3cf886a5070f26a71e18662cde4bdad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e39c0e4f54cf3113304b4eb5411d2f246c9bc6410af73963970e3ac485d40c44->leave($__internal_e39c0e4f54cf3113304b4eb5411d2f246c9bc6410af73963970e3ac485d40c44_prof);

        
        $__internal_db5ccdcd0f29eaa18c09ee1f2c6af0f3cf886a5070f26a71e18662cde4bdad2a->leave($__internal_db5ccdcd0f29eaa18c09ee1f2c6af0f3cf886a5070f26a71e18662cde4bdad2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
