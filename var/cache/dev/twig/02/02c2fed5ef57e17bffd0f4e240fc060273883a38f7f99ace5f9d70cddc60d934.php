<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_31007d402553525873611d6945ef6623dbc78d54a450a76d47ca184a5a4f4196 extends Twig_Template
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
        $__internal_cae806fac151856a0ed396590bf3b175bd7f55c8f46a20c9e87ba52a70a0612b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae806fac151856a0ed396590bf3b175bd7f55c8f46a20c9e87ba52a70a0612b->enter($__internal_cae806fac151856a0ed396590bf3b175bd7f55c8f46a20c9e87ba52a70a0612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9ade1c5fb0e58a363e8e7b7b80d7c4a5f02c70ccdc58ec09223521485c6e7690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ade1c5fb0e58a363e8e7b7b80d7c4a5f02c70ccdc58ec09223521485c6e7690->enter($__internal_9ade1c5fb0e58a363e8e7b7b80d7c4a5f02c70ccdc58ec09223521485c6e7690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_cae806fac151856a0ed396590bf3b175bd7f55c8f46a20c9e87ba52a70a0612b->leave($__internal_cae806fac151856a0ed396590bf3b175bd7f55c8f46a20c9e87ba52a70a0612b_prof);

        
        $__internal_9ade1c5fb0e58a363e8e7b7b80d7c4a5f02c70ccdc58ec09223521485c6e7690->leave($__internal_9ade1c5fb0e58a363e8e7b7b80d7c4a5f02c70ccdc58ec09223521485c6e7690_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
