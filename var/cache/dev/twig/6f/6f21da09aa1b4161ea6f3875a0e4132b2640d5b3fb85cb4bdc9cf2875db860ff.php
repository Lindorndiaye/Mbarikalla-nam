<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_54ee613a4399005731d0b58ab5e13d9c986d50ac80f5c0b00366637b2edec0d7 extends Twig_Template
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
        $__internal_428d8d2ae1f696ac8b57e25b4b00af1a439ff5a84e715c66cc7fae868140b510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428d8d2ae1f696ac8b57e25b4b00af1a439ff5a84e715c66cc7fae868140b510->enter($__internal_428d8d2ae1f696ac8b57e25b4b00af1a439ff5a84e715c66cc7fae868140b510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bb1edf4348dfc1df614ccc7bfddc468b0af999817c36337cadbda7efa1a72f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1edf4348dfc1df614ccc7bfddc468b0af999817c36337cadbda7efa1a72f00->enter($__internal_bb1edf4348dfc1df614ccc7bfddc468b0af999817c36337cadbda7efa1a72f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_428d8d2ae1f696ac8b57e25b4b00af1a439ff5a84e715c66cc7fae868140b510->leave($__internal_428d8d2ae1f696ac8b57e25b4b00af1a439ff5a84e715c66cc7fae868140b510_prof);

        
        $__internal_bb1edf4348dfc1df614ccc7bfddc468b0af999817c36337cadbda7efa1a72f00->leave($__internal_bb1edf4348dfc1df614ccc7bfddc468b0af999817c36337cadbda7efa1a72f00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
