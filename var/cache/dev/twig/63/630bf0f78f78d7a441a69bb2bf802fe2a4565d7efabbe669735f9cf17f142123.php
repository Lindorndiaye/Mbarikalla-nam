<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_98c19c74cfe1328e99820d65fb28302e7eed1d4ecabd28909832823c59e0a4e0 extends Twig_Template
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
        $__internal_63065745c2e1f1264e7701d716d5e214190ffd19130a3c985d8b538d7629d189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63065745c2e1f1264e7701d716d5e214190ffd19130a3c985d8b538d7629d189->enter($__internal_63065745c2e1f1264e7701d716d5e214190ffd19130a3c985d8b538d7629d189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f483b4858fcf59e271e982e622a82e40ae30344d82d8bb0bc74d696755a99dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f483b4858fcf59e271e982e622a82e40ae30344d82d8bb0bc74d696755a99dbb->enter($__internal_f483b4858fcf59e271e982e622a82e40ae30344d82d8bb0bc74d696755a99dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_63065745c2e1f1264e7701d716d5e214190ffd19130a3c985d8b538d7629d189->leave($__internal_63065745c2e1f1264e7701d716d5e214190ffd19130a3c985d8b538d7629d189_prof);

        
        $__internal_f483b4858fcf59e271e982e622a82e40ae30344d82d8bb0bc74d696755a99dbb->leave($__internal_f483b4858fcf59e271e982e622a82e40ae30344d82d8bb0bc74d696755a99dbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
