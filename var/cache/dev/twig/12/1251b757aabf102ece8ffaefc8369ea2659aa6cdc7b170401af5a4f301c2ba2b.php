<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b0730c7665206ed623160a019eb2a3bf7c1959eba44ff7320a29b1322ae200a9 extends Twig_Template
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
        $__internal_3d69c40e5529f7e1420b868f0b591272c4c6caa5b164a852d59117263c17e319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d69c40e5529f7e1420b868f0b591272c4c6caa5b164a852d59117263c17e319->enter($__internal_3d69c40e5529f7e1420b868f0b591272c4c6caa5b164a852d59117263c17e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b5f0200391b9db8217d6ce06bb5cc480c607ceafee6117376677614f70ed132e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f0200391b9db8217d6ce06bb5cc480c607ceafee6117376677614f70ed132e->enter($__internal_b5f0200391b9db8217d6ce06bb5cc480c607ceafee6117376677614f70ed132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3d69c40e5529f7e1420b868f0b591272c4c6caa5b164a852d59117263c17e319->leave($__internal_3d69c40e5529f7e1420b868f0b591272c4c6caa5b164a852d59117263c17e319_prof);

        
        $__internal_b5f0200391b9db8217d6ce06bb5cc480c607ceafee6117376677614f70ed132e->leave($__internal_b5f0200391b9db8217d6ce06bb5cc480c607ceafee6117376677614f70ed132e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
