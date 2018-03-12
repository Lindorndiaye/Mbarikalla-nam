<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c4eb53871af8fa5cce2d061b9374aa11ee218c80c23ae8227d28dac4a291a1e6 extends Twig_Template
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
        $__internal_4862c9127884a6db5114f47864161e982e5cea20ba958d4f724c5579555bed7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4862c9127884a6db5114f47864161e982e5cea20ba958d4f724c5579555bed7c->enter($__internal_4862c9127884a6db5114f47864161e982e5cea20ba958d4f724c5579555bed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8078da67c3d9e95ca4352ac21637dd32b980079e647d20e751da2599b68d3193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8078da67c3d9e95ca4352ac21637dd32b980079e647d20e751da2599b68d3193->enter($__internal_8078da67c3d9e95ca4352ac21637dd32b980079e647d20e751da2599b68d3193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4862c9127884a6db5114f47864161e982e5cea20ba958d4f724c5579555bed7c->leave($__internal_4862c9127884a6db5114f47864161e982e5cea20ba958d4f724c5579555bed7c_prof);

        
        $__internal_8078da67c3d9e95ca4352ac21637dd32b980079e647d20e751da2599b68d3193->leave($__internal_8078da67c3d9e95ca4352ac21637dd32b980079e647d20e751da2599b68d3193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
