<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b97aced41121113cccc34db04e3b2e168624fad06beccc969ad2c4692d19f2fe extends Twig_Template
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
        $__internal_66e1506b2ffb2b7671a7031d46e17be3b209ff615243486e0d17468e4cacb53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e1506b2ffb2b7671a7031d46e17be3b209ff615243486e0d17468e4cacb53d->enter($__internal_66e1506b2ffb2b7671a7031d46e17be3b209ff615243486e0d17468e4cacb53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_49f96cca089d91392c81389c00cc28c4efd65aae9d70826a60644278574b17d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f96cca089d91392c81389c00cc28c4efd65aae9d70826a60644278574b17d2->enter($__internal_49f96cca089d91392c81389c00cc28c4efd65aae9d70826a60644278574b17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_66e1506b2ffb2b7671a7031d46e17be3b209ff615243486e0d17468e4cacb53d->leave($__internal_66e1506b2ffb2b7671a7031d46e17be3b209ff615243486e0d17468e4cacb53d_prof);

        
        $__internal_49f96cca089d91392c81389c00cc28c4efd65aae9d70826a60644278574b17d2->leave($__internal_49f96cca089d91392c81389c00cc28c4efd65aae9d70826a60644278574b17d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
