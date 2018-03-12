<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c7304018ed5c484e38072ceee0b3f7c7bd18684e5f6f02994ec4677c42306303 extends Twig_Template
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
        $__internal_5d5a884708bfba1b57399e483600a92e1ea67688a934e0d6cbe7986d2432b997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5a884708bfba1b57399e483600a92e1ea67688a934e0d6cbe7986d2432b997->enter($__internal_5d5a884708bfba1b57399e483600a92e1ea67688a934e0d6cbe7986d2432b997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1e333cbc44275dea3e84afe7e6b0878fe22b48eb467ca1ba1963bddfa2b471b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e333cbc44275dea3e84afe7e6b0878fe22b48eb467ca1ba1963bddfa2b471b4->enter($__internal_1e333cbc44275dea3e84afe7e6b0878fe22b48eb467ca1ba1963bddfa2b471b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5d5a884708bfba1b57399e483600a92e1ea67688a934e0d6cbe7986d2432b997->leave($__internal_5d5a884708bfba1b57399e483600a92e1ea67688a934e0d6cbe7986d2432b997_prof);

        
        $__internal_1e333cbc44275dea3e84afe7e6b0878fe22b48eb467ca1ba1963bddfa2b471b4->leave($__internal_1e333cbc44275dea3e84afe7e6b0878fe22b48eb467ca1ba1963bddfa2b471b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
