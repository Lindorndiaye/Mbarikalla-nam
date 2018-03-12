<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7a67c651b9a188610be1167762bcbc90bf90c5cd0a7d50c4951fa923939f4abc extends Twig_Template
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
        $__internal_982c500272bb826a501bef413b709ef374e39d266f2a3428669aea0139fcabe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982c500272bb826a501bef413b709ef374e39d266f2a3428669aea0139fcabe3->enter($__internal_982c500272bb826a501bef413b709ef374e39d266f2a3428669aea0139fcabe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ee9894a79017e671994a55336a68af844b58f6e3f2fe115d63e892d3da9c3ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9894a79017e671994a55336a68af844b58f6e3f2fe115d63e892d3da9c3ad5->enter($__internal_ee9894a79017e671994a55336a68af844b58f6e3f2fe115d63e892d3da9c3ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_982c500272bb826a501bef413b709ef374e39d266f2a3428669aea0139fcabe3->leave($__internal_982c500272bb826a501bef413b709ef374e39d266f2a3428669aea0139fcabe3_prof);

        
        $__internal_ee9894a79017e671994a55336a68af844b58f6e3f2fe115d63e892d3da9c3ad5->leave($__internal_ee9894a79017e671994a55336a68af844b58f6e3f2fe115d63e892d3da9c3ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
