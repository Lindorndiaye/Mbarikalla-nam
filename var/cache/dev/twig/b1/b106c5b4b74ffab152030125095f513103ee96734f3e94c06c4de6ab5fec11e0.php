<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_af0f41ca3da9805411ecc1667f8e030adcbd34025407d626b0dd89f8b58c5f25 extends Twig_Template
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
        $__internal_9b7d471d345de7d63f14435c1aea118a3d0eff597cf0fb30e7f29cc0150d5051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7d471d345de7d63f14435c1aea118a3d0eff597cf0fb30e7f29cc0150d5051->enter($__internal_9b7d471d345de7d63f14435c1aea118a3d0eff597cf0fb30e7f29cc0150d5051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ab949a04e3df675942273e9eb6ccc328942db17a9436de2fba8ccd8eba79248e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab949a04e3df675942273e9eb6ccc328942db17a9436de2fba8ccd8eba79248e->enter($__internal_ab949a04e3df675942273e9eb6ccc328942db17a9436de2fba8ccd8eba79248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_9b7d471d345de7d63f14435c1aea118a3d0eff597cf0fb30e7f29cc0150d5051->leave($__internal_9b7d471d345de7d63f14435c1aea118a3d0eff597cf0fb30e7f29cc0150d5051_prof);

        
        $__internal_ab949a04e3df675942273e9eb6ccc328942db17a9436de2fba8ccd8eba79248e->leave($__internal_ab949a04e3df675942273e9eb6ccc328942db17a9436de2fba8ccd8eba79248e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
