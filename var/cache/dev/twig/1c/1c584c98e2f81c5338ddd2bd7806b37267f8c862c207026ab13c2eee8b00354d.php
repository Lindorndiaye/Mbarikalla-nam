<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3f86979e949fdedff4833d38640f249db99f8d46173568f65442206b08306454 extends Twig_Template
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
        $__internal_08b9320c2b12c025bea9ce53b32a8c932f543b6303b4d1675100205b7b847490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b9320c2b12c025bea9ce53b32a8c932f543b6303b4d1675100205b7b847490->enter($__internal_08b9320c2b12c025bea9ce53b32a8c932f543b6303b4d1675100205b7b847490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4eb477913c5a90ec1c927de05f42c712e091629bd006af98958b3083bb9eab00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb477913c5a90ec1c927de05f42c712e091629bd006af98958b3083bb9eab00->enter($__internal_4eb477913c5a90ec1c927de05f42c712e091629bd006af98958b3083bb9eab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_08b9320c2b12c025bea9ce53b32a8c932f543b6303b4d1675100205b7b847490->leave($__internal_08b9320c2b12c025bea9ce53b32a8c932f543b6303b4d1675100205b7b847490_prof);

        
        $__internal_4eb477913c5a90ec1c927de05f42c712e091629bd006af98958b3083bb9eab00->leave($__internal_4eb477913c5a90ec1c927de05f42c712e091629bd006af98958b3083bb9eab00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
