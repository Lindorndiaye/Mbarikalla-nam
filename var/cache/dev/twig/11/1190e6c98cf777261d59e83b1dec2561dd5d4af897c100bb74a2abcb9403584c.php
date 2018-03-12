<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_129c02e0f2752d0837436365e5861ed244db05e98ca6ac2de6076a6d017985c2 extends Twig_Template
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
        $__internal_6764d8ee88bfaca5dc70f35b503b5d462e60818b1c4bde1e3a08f54e493bd931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6764d8ee88bfaca5dc70f35b503b5d462e60818b1c4bde1e3a08f54e493bd931->enter($__internal_6764d8ee88bfaca5dc70f35b503b5d462e60818b1c4bde1e3a08f54e493bd931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_aa9c25cebebdadb1d93e452f09628888abde6ca461b03b6b2fa8761e0166d2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9c25cebebdadb1d93e452f09628888abde6ca461b03b6b2fa8761e0166d2ff->enter($__internal_aa9c25cebebdadb1d93e452f09628888abde6ca461b03b6b2fa8761e0166d2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_6764d8ee88bfaca5dc70f35b503b5d462e60818b1c4bde1e3a08f54e493bd931->leave($__internal_6764d8ee88bfaca5dc70f35b503b5d462e60818b1c4bde1e3a08f54e493bd931_prof);

        
        $__internal_aa9c25cebebdadb1d93e452f09628888abde6ca461b03b6b2fa8761e0166d2ff->leave($__internal_aa9c25cebebdadb1d93e452f09628888abde6ca461b03b6b2fa8761e0166d2ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
