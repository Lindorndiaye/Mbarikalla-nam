<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_598c900341e5f10bb5bda0b271e4ea7b140d6ea6eb0a7e41e4f94eb680454786 extends Twig_Template
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
        $__internal_0a37490b89d798f6193ea55a9a8fa2c35dbc3d279d60c76db91c1219c9ec1732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a37490b89d798f6193ea55a9a8fa2c35dbc3d279d60c76db91c1219c9ec1732->enter($__internal_0a37490b89d798f6193ea55a9a8fa2c35dbc3d279d60c76db91c1219c9ec1732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e14d8c9ecfc2b9c7dcbc98e715880b7bae21b9dc04bf245d80531dbd26185d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14d8c9ecfc2b9c7dcbc98e715880b7bae21b9dc04bf245d80531dbd26185d13->enter($__internal_e14d8c9ecfc2b9c7dcbc98e715880b7bae21b9dc04bf245d80531dbd26185d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0a37490b89d798f6193ea55a9a8fa2c35dbc3d279d60c76db91c1219c9ec1732->leave($__internal_0a37490b89d798f6193ea55a9a8fa2c35dbc3d279d60c76db91c1219c9ec1732_prof);

        
        $__internal_e14d8c9ecfc2b9c7dcbc98e715880b7bae21b9dc04bf245d80531dbd26185d13->leave($__internal_e14d8c9ecfc2b9c7dcbc98e715880b7bae21b9dc04bf245d80531dbd26185d13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
