<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b72bbccc47235726c8357ef825e967064e71340b6000cbdd291463331d903f5e extends Twig_Template
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
        $__internal_1c912fa9869c5e7186d417c2993c17fb7e72603567eb4999af27ee62db2b08b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c912fa9869c5e7186d417c2993c17fb7e72603567eb4999af27ee62db2b08b9->enter($__internal_1c912fa9869c5e7186d417c2993c17fb7e72603567eb4999af27ee62db2b08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_49df81da7dd2300ad96fb86ccee8e43be1586474023a4a9a916df8c2c6d46584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49df81da7dd2300ad96fb86ccee8e43be1586474023a4a9a916df8c2c6d46584->enter($__internal_49df81da7dd2300ad96fb86ccee8e43be1586474023a4a9a916df8c2c6d46584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_1c912fa9869c5e7186d417c2993c17fb7e72603567eb4999af27ee62db2b08b9->leave($__internal_1c912fa9869c5e7186d417c2993c17fb7e72603567eb4999af27ee62db2b08b9_prof);

        
        $__internal_49df81da7dd2300ad96fb86ccee8e43be1586474023a4a9a916df8c2c6d46584->leave($__internal_49df81da7dd2300ad96fb86ccee8e43be1586474023a4a9a916df8c2c6d46584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
