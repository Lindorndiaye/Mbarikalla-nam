<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e0d8107c2ad70e0966792326bd4387c41c793e2cd6ee4540f14e11f3320b83d8 extends Twig_Template
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
        $__internal_010b75af47e6d3bc2e5e06fbd6995908f2ed22d08b6248c99f4eb659a2b17615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010b75af47e6d3bc2e5e06fbd6995908f2ed22d08b6248c99f4eb659a2b17615->enter($__internal_010b75af47e6d3bc2e5e06fbd6995908f2ed22d08b6248c99f4eb659a2b17615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_93287b74a11b2a8a7ac1f44cc81a783ecf84630fd56d739d2c90b4b297d2d9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93287b74a11b2a8a7ac1f44cc81a783ecf84630fd56d739d2c90b4b297d2d9f1->enter($__internal_93287b74a11b2a8a7ac1f44cc81a783ecf84630fd56d739d2c90b4b297d2d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_010b75af47e6d3bc2e5e06fbd6995908f2ed22d08b6248c99f4eb659a2b17615->leave($__internal_010b75af47e6d3bc2e5e06fbd6995908f2ed22d08b6248c99f4eb659a2b17615_prof);

        
        $__internal_93287b74a11b2a8a7ac1f44cc81a783ecf84630fd56d739d2c90b4b297d2d9f1->leave($__internal_93287b74a11b2a8a7ac1f44cc81a783ecf84630fd56d739d2c90b4b297d2d9f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
