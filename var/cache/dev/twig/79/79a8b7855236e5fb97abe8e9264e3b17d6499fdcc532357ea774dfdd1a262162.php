<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_527afdbc6f0c7a5a1ae85ccb9946c0a166f48478da4bd05768a47028f4c5b85d extends Twig_Template
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
        $__internal_75c7aa9094d1f9a9d10aa91a3c515bc45a7c865e5af22ee4a16416c13fc9ca74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c7aa9094d1f9a9d10aa91a3c515bc45a7c865e5af22ee4a16416c13fc9ca74->enter($__internal_75c7aa9094d1f9a9d10aa91a3c515bc45a7c865e5af22ee4a16416c13fc9ca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0f63b6040ab90904a92120fca2809db958069202fe0634626b994dee7fe9f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f63b6040ab90904a92120fca2809db958069202fe0634626b994dee7fe9f57d->enter($__internal_0f63b6040ab90904a92120fca2809db958069202fe0634626b994dee7fe9f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_75c7aa9094d1f9a9d10aa91a3c515bc45a7c865e5af22ee4a16416c13fc9ca74->leave($__internal_75c7aa9094d1f9a9d10aa91a3c515bc45a7c865e5af22ee4a16416c13fc9ca74_prof);

        
        $__internal_0f63b6040ab90904a92120fca2809db958069202fe0634626b994dee7fe9f57d->leave($__internal_0f63b6040ab90904a92120fca2809db958069202fe0634626b994dee7fe9f57d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
