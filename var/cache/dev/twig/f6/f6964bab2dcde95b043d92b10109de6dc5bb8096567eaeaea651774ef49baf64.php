<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bf315be19455e7f939c2d3e23dab1c0695f0438d0ef67364bbadef80793d2006 extends Twig_Template
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
        $__internal_5aba8da0ff7a0d01b7b68ed735950fc489a56ab35bf98dc737bd39cbf8333021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aba8da0ff7a0d01b7b68ed735950fc489a56ab35bf98dc737bd39cbf8333021->enter($__internal_5aba8da0ff7a0d01b7b68ed735950fc489a56ab35bf98dc737bd39cbf8333021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7979d21e2e5e993fb8d26b5d62cb2cc5a530e78bd63b016ec2927791c8ba921d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7979d21e2e5e993fb8d26b5d62cb2cc5a530e78bd63b016ec2927791c8ba921d->enter($__internal_7979d21e2e5e993fb8d26b5d62cb2cc5a530e78bd63b016ec2927791c8ba921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5aba8da0ff7a0d01b7b68ed735950fc489a56ab35bf98dc737bd39cbf8333021->leave($__internal_5aba8da0ff7a0d01b7b68ed735950fc489a56ab35bf98dc737bd39cbf8333021_prof);

        
        $__internal_7979d21e2e5e993fb8d26b5d62cb2cc5a530e78bd63b016ec2927791c8ba921d->leave($__internal_7979d21e2e5e993fb8d26b5d62cb2cc5a530e78bd63b016ec2927791c8ba921d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
