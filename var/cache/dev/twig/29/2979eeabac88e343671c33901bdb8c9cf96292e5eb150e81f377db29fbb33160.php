<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b80d24367f945c492f3929a379921514abfa20ea1f934d6430283e0d0638eacb extends Twig_Template
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
        $__internal_608be824fa7043fbe553eaaca3c7181b4410021580d14b0dcc0fc5799182d9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608be824fa7043fbe553eaaca3c7181b4410021580d14b0dcc0fc5799182d9d4->enter($__internal_608be824fa7043fbe553eaaca3c7181b4410021580d14b0dcc0fc5799182d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0e5a47abd0ef8da1f2e9ae6dd635b6b043c5e8980af87b2f9188c47961507fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5a47abd0ef8da1f2e9ae6dd635b6b043c5e8980af87b2f9188c47961507fe8->enter($__internal_0e5a47abd0ef8da1f2e9ae6dd635b6b043c5e8980af87b2f9188c47961507fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_608be824fa7043fbe553eaaca3c7181b4410021580d14b0dcc0fc5799182d9d4->leave($__internal_608be824fa7043fbe553eaaca3c7181b4410021580d14b0dcc0fc5799182d9d4_prof);

        
        $__internal_0e5a47abd0ef8da1f2e9ae6dd635b6b043c5e8980af87b2f9188c47961507fe8->leave($__internal_0e5a47abd0ef8da1f2e9ae6dd635b6b043c5e8980af87b2f9188c47961507fe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
