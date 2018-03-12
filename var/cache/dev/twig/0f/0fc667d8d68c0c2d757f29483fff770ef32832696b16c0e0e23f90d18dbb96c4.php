<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_000d6138ce70295d21559ee7ed2ff05bc9f15d97d0a77e7ea139ee17f1256902 extends Twig_Template
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
        $__internal_d4622b14e92dd0a79ecda94425de12b627217657169ecb79831b1ab02311a9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4622b14e92dd0a79ecda94425de12b627217657169ecb79831b1ab02311a9c5->enter($__internal_d4622b14e92dd0a79ecda94425de12b627217657169ecb79831b1ab02311a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_765dda9a9a5b392944e1e96ed33563a7023654228006357ac1efcf5bddb51fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765dda9a9a5b392944e1e96ed33563a7023654228006357ac1efcf5bddb51fa4->enter($__internal_765dda9a9a5b392944e1e96ed33563a7023654228006357ac1efcf5bddb51fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4622b14e92dd0a79ecda94425de12b627217657169ecb79831b1ab02311a9c5->leave($__internal_d4622b14e92dd0a79ecda94425de12b627217657169ecb79831b1ab02311a9c5_prof);

        
        $__internal_765dda9a9a5b392944e1e96ed33563a7023654228006357ac1efcf5bddb51fa4->leave($__internal_765dda9a9a5b392944e1e96ed33563a7023654228006357ac1efcf5bddb51fa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
