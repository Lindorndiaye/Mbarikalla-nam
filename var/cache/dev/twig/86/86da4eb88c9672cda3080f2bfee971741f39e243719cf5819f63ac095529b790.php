<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_af2b9d5748763ca84864af92680b7094f6530a295ed21b33de66717188f0ef44 extends Twig_Template
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
        $__internal_e921600733cc36e40a637c5c86819646f17fded5a57e76be239a0b27ec7cbc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e921600733cc36e40a637c5c86819646f17fded5a57e76be239a0b27ec7cbc3d->enter($__internal_e921600733cc36e40a637c5c86819646f17fded5a57e76be239a0b27ec7cbc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_160c8790f55b8ca518396c90183fa4585b5acd0a566fdcde41eb1db0020c1dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160c8790f55b8ca518396c90183fa4585b5acd0a566fdcde41eb1db0020c1dee->enter($__internal_160c8790f55b8ca518396c90183fa4585b5acd0a566fdcde41eb1db0020c1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e921600733cc36e40a637c5c86819646f17fded5a57e76be239a0b27ec7cbc3d->leave($__internal_e921600733cc36e40a637c5c86819646f17fded5a57e76be239a0b27ec7cbc3d_prof);

        
        $__internal_160c8790f55b8ca518396c90183fa4585b5acd0a566fdcde41eb1db0020c1dee->leave($__internal_160c8790f55b8ca518396c90183fa4585b5acd0a566fdcde41eb1db0020c1dee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
