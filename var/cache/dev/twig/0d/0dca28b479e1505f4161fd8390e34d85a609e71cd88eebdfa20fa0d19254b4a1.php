<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d07c65a00382ade961e6b213f45346384910097076d531743ace2478219ef0de extends Twig_Template
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
        $__internal_7252af1064fa80bfbc88abb2ec50073f200aceb47bd959f34198bdac53fdcdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7252af1064fa80bfbc88abb2ec50073f200aceb47bd959f34198bdac53fdcdbd->enter($__internal_7252af1064fa80bfbc88abb2ec50073f200aceb47bd959f34198bdac53fdcdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_138cabe68adc621f4b3fd53523ed2f1adeebbe7a8dc35949b5eea8bde7bce716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138cabe68adc621f4b3fd53523ed2f1adeebbe7a8dc35949b5eea8bde7bce716->enter($__internal_138cabe68adc621f4b3fd53523ed2f1adeebbe7a8dc35949b5eea8bde7bce716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7252af1064fa80bfbc88abb2ec50073f200aceb47bd959f34198bdac53fdcdbd->leave($__internal_7252af1064fa80bfbc88abb2ec50073f200aceb47bd959f34198bdac53fdcdbd_prof);

        
        $__internal_138cabe68adc621f4b3fd53523ed2f1adeebbe7a8dc35949b5eea8bde7bce716->leave($__internal_138cabe68adc621f4b3fd53523ed2f1adeebbe7a8dc35949b5eea8bde7bce716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
