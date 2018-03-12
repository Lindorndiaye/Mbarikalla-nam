<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6a1d5f0cd419d8a28e545115d85492f9ea21e86af66da2e88fecf679b8c6cb87 extends Twig_Template
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
        $__internal_213b813baf158a0a40a5f69b2516ec302748c88182a0466f97c99ddd4e962407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213b813baf158a0a40a5f69b2516ec302748c88182a0466f97c99ddd4e962407->enter($__internal_213b813baf158a0a40a5f69b2516ec302748c88182a0466f97c99ddd4e962407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8ebed42dffeaa26cd466905ce617de47a87315a104ad60767c998e4640f8298d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebed42dffeaa26cd466905ce617de47a87315a104ad60767c998e4640f8298d->enter($__internal_8ebed42dffeaa26cd466905ce617de47a87315a104ad60767c998e4640f8298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_213b813baf158a0a40a5f69b2516ec302748c88182a0466f97c99ddd4e962407->leave($__internal_213b813baf158a0a40a5f69b2516ec302748c88182a0466f97c99ddd4e962407_prof);

        
        $__internal_8ebed42dffeaa26cd466905ce617de47a87315a104ad60767c998e4640f8298d->leave($__internal_8ebed42dffeaa26cd466905ce617de47a87315a104ad60767c998e4640f8298d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
