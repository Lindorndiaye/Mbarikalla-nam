<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_63358f6329cfccf6f1e0828508b24a7ab40e0957597fd57fce1d4437d6e33709 extends Twig_Template
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
        $__internal_f5ed3b6fab006cc27505a61bce50571b4564294a67ca086fe7ec4eeba392c4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ed3b6fab006cc27505a61bce50571b4564294a67ca086fe7ec4eeba392c4cb->enter($__internal_f5ed3b6fab006cc27505a61bce50571b4564294a67ca086fe7ec4eeba392c4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_57e9eda23c939af43277b8256f53005d1873c8fba0e8fa4a5566d629db3d4356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e9eda23c939af43277b8256f53005d1873c8fba0e8fa4a5566d629db3d4356->enter($__internal_57e9eda23c939af43277b8256f53005d1873c8fba0e8fa4a5566d629db3d4356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f5ed3b6fab006cc27505a61bce50571b4564294a67ca086fe7ec4eeba392c4cb->leave($__internal_f5ed3b6fab006cc27505a61bce50571b4564294a67ca086fe7ec4eeba392c4cb_prof);

        
        $__internal_57e9eda23c939af43277b8256f53005d1873c8fba0e8fa4a5566d629db3d4356->leave($__internal_57e9eda23c939af43277b8256f53005d1873c8fba0e8fa4a5566d629db3d4356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
