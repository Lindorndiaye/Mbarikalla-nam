<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3adb704a89d6d14fc56112cb5b4b639dac2f7b8b3c6c9747d8efbab24d38da8c extends Twig_Template
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
        $__internal_8e4de1a35431e6e8621674e9d6daacb9340b22ac37a2eec689f69258eae807ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4de1a35431e6e8621674e9d6daacb9340b22ac37a2eec689f69258eae807ea->enter($__internal_8e4de1a35431e6e8621674e9d6daacb9340b22ac37a2eec689f69258eae807ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2a9059365823a7c33fdb17f6a4f91a19cc6517d944bdb42deebcceda3456feac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9059365823a7c33fdb17f6a4f91a19cc6517d944bdb42deebcceda3456feac->enter($__internal_2a9059365823a7c33fdb17f6a4f91a19cc6517d944bdb42deebcceda3456feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8e4de1a35431e6e8621674e9d6daacb9340b22ac37a2eec689f69258eae807ea->leave($__internal_8e4de1a35431e6e8621674e9d6daacb9340b22ac37a2eec689f69258eae807ea_prof);

        
        $__internal_2a9059365823a7c33fdb17f6a4f91a19cc6517d944bdb42deebcceda3456feac->leave($__internal_2a9059365823a7c33fdb17f6a4f91a19cc6517d944bdb42deebcceda3456feac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
