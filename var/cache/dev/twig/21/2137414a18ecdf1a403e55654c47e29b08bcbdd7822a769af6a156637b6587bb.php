<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9fad7517a0067fffb2b15cba911510529f1def3f413ea4b563160e1164797fff extends Twig_Template
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
        $__internal_e6d0dc5bb312abd8eaafa8391dac848432dbc27d01687ca533e9984efbff73ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d0dc5bb312abd8eaafa8391dac848432dbc27d01687ca533e9984efbff73ab->enter($__internal_e6d0dc5bb312abd8eaafa8391dac848432dbc27d01687ca533e9984efbff73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ec916940aa78da8f328186c50ee670325f8f7ae97c47eb539ca4af578d648712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec916940aa78da8f328186c50ee670325f8f7ae97c47eb539ca4af578d648712->enter($__internal_ec916940aa78da8f328186c50ee670325f8f7ae97c47eb539ca4af578d648712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e6d0dc5bb312abd8eaafa8391dac848432dbc27d01687ca533e9984efbff73ab->leave($__internal_e6d0dc5bb312abd8eaafa8391dac848432dbc27d01687ca533e9984efbff73ab_prof);

        
        $__internal_ec916940aa78da8f328186c50ee670325f8f7ae97c47eb539ca4af578d648712->leave($__internal_ec916940aa78da8f328186c50ee670325f8f7ae97c47eb539ca4af578d648712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
