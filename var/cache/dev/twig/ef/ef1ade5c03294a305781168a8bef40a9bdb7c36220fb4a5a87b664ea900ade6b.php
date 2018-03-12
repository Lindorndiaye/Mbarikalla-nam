<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_265124a5ee6a27329a7ecf09c3ceb4f8b89afa1afb958c8d967e3f9cd7ad5f7a extends Twig_Template
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
        $__internal_6a079ceb495273d74c8e8045ea8fbbb0d638ecd07ac9fc504af753c88a29b18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a079ceb495273d74c8e8045ea8fbbb0d638ecd07ac9fc504af753c88a29b18c->enter($__internal_6a079ceb495273d74c8e8045ea8fbbb0d638ecd07ac9fc504af753c88a29b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c187905f33ee32ef6ecf15267acac926b6446bda7c804ef86c6c8e617e455960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c187905f33ee32ef6ecf15267acac926b6446bda7c804ef86c6c8e617e455960->enter($__internal_c187905f33ee32ef6ecf15267acac926b6446bda7c804ef86c6c8e617e455960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6a079ceb495273d74c8e8045ea8fbbb0d638ecd07ac9fc504af753c88a29b18c->leave($__internal_6a079ceb495273d74c8e8045ea8fbbb0d638ecd07ac9fc504af753c88a29b18c_prof);

        
        $__internal_c187905f33ee32ef6ecf15267acac926b6446bda7c804ef86c6c8e617e455960->leave($__internal_c187905f33ee32ef6ecf15267acac926b6446bda7c804ef86c6c8e617e455960_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
