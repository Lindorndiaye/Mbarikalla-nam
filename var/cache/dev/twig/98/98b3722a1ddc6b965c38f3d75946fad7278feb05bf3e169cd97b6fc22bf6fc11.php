<?php

/* ::basel.html.twig */
class __TwigTemplate_55f49611a5b0b55c375494365135130d00f769164d2eb47c08890c107b0202d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88b0b70126f118844ea72e40351dddb7f0968e6f3aacbc310eb24c3868751c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b0b70126f118844ea72e40351dddb7f0968e6f3aacbc310eb24c3868751c4c->enter($__internal_88b0b70126f118844ea72e40351dddb7f0968e6f3aacbc310eb24c3868751c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basel.html.twig"));

        $__internal_0977f6dbeb8783be96def53552cc6e01e9422e31d0d683aa1258faf2e4285835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0977f6dbeb8783be96def53552cc6e01e9422e31d0d683aa1258faf2e4285835->enter($__internal_0977f6dbeb8783be96def53552cc6e01e9422e31d0d683aa1258faf2e4285835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({\"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
    

        

    });

});


</script>";
        
        $__internal_88b0b70126f118844ea72e40351dddb7f0968e6f3aacbc310eb24c3868751c4c->leave($__internal_88b0b70126f118844ea72e40351dddb7f0968e6f3aacbc310eb24c3868751c4c_prof);

        
        $__internal_0977f6dbeb8783be96def53552cc6e01e9422e31d0d683aa1258faf2e4285835->leave($__internal_0977f6dbeb8783be96def53552cc6e01e9422e31d0d683aa1258faf2e4285835_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_392054d11fdc9571b722a3f3241ad1aa5fd803f73681723e5bab6572a1eaaaa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392054d11fdc9571b722a3f3241ad1aa5fd803f73681723e5bab6572a1eaaaa3->enter($__internal_392054d11fdc9571b722a3f3241ad1aa5fd803f73681723e5bab6572a1eaaaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7aca5ca20d3d8800c5cf6d34cf7b654aee6bf16dc16989369f3d6596e7095d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aca5ca20d3d8800c5cf6d34cf7b654aee6bf16dc16989369f3d6596e7095d43->enter($__internal_7aca5ca20d3d8800c5cf6d34cf7b654aee6bf16dc16989369f3d6596e7095d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7aca5ca20d3d8800c5cf6d34cf7b654aee6bf16dc16989369f3d6596e7095d43->leave($__internal_7aca5ca20d3d8800c5cf6d34cf7b654aee6bf16dc16989369f3d6596e7095d43_prof);

        
        $__internal_392054d11fdc9571b722a3f3241ad1aa5fd803f73681723e5bab6572a1eaaaa3->leave($__internal_392054d11fdc9571b722a3f3241ad1aa5fd803f73681723e5bab6572a1eaaaa3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dee2bd3c275cfb8a122759ea0abde3cbc8a61ee02db934d257eb8a4e62dc84a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee2bd3c275cfb8a122759ea0abde3cbc8a61ee02db934d257eb8a4e62dc84a5->enter($__internal_dee2bd3c275cfb8a122759ea0abde3cbc8a61ee02db934d257eb8a4e62dc84a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f758417c2f5eb6c22645b8c369f5117bcde93ac9bc9da511d23c8d7bcea36b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f758417c2f5eb6c22645b8c369f5117bcde93ac9bc9da511d23c8d7bcea36b46->enter($__internal_f758417c2f5eb6c22645b8c369f5117bcde93ac9bc9da511d23c8d7bcea36b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        ";
        
        $__internal_f758417c2f5eb6c22645b8c369f5117bcde93ac9bc9da511d23c8d7bcea36b46->leave($__internal_f758417c2f5eb6c22645b8c369f5117bcde93ac9bc9da511d23c8d7bcea36b46_prof);

        
        $__internal_dee2bd3c275cfb8a122759ea0abde3cbc8a61ee02db934d257eb8a4e62dc84a5->leave($__internal_dee2bd3c275cfb8a122759ea0abde3cbc8a61ee02db934d257eb8a4e62dc84a5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_664e5da4db673f444a2dfadf24abd04cb13e61dd2ee1cbc66fa3aa4f95fd105a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664e5da4db673f444a2dfadf24abd04cb13e61dd2ee1cbc66fa3aa4f95fd105a->enter($__internal_664e5da4db673f444a2dfadf24abd04cb13e61dd2ee1cbc66fa3aa4f95fd105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38754a723fe72dcc5de4c2f132d13fcf646ee81110f49388188a7c0db80cea57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38754a723fe72dcc5de4c2f132d13fcf646ee81110f49388188a7c0db80cea57->enter($__internal_38754a723fe72dcc5de4c2f132d13fcf646ee81110f49388188a7c0db80cea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38754a723fe72dcc5de4c2f132d13fcf646ee81110f49388188a7c0db80cea57->leave($__internal_38754a723fe72dcc5de4c2f132d13fcf646ee81110f49388188a7c0db80cea57_prof);

        
        $__internal_664e5da4db673f444a2dfadf24abd04cb13e61dd2ee1cbc66fa3aa4f95fd105a->leave($__internal_664e5da4db673f444a2dfadf24abd04cb13e61dd2ee1cbc66fa3aa4f95fd105a_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f43f61d931cd5d1af48d0f28f2ac74ca9003640c6577ea7c615a5594dddf15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f43f61d931cd5d1af48d0f28f2ac74ca9003640c6577ea7c615a5594dddf15e->enter($__internal_1f43f61d931cd5d1af48d0f28f2ac74ca9003640c6577ea7c615a5594dddf15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_073ead832974ad4933af7e6d3ddd2576d464aa446b5932f01889a5d1798d369a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073ead832974ad4933af7e6d3ddd2576d464aa446b5932f01889a5d1798d369a->enter($__internal_073ead832974ad4933af7e6d3ddd2576d464aa446b5932f01889a5d1798d369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        ";
        
        $__internal_073ead832974ad4933af7e6d3ddd2576d464aa446b5932f01889a5d1798d369a->leave($__internal_073ead832974ad4933af7e6d3ddd2576d464aa446b5932f01889a5d1798d369a_prof);

        
        $__internal_1f43f61d931cd5d1af48d0f28f2ac74ca9003640c6577ea7c615a5594dddf15e->leave($__internal_1f43f61d931cd5d1af48d0f28f2ac74ca9003640c6577ea7c615a5594dddf15e_prof);

    }

    public function getTemplateName()
    {
        return "::basel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 23,  165 => 22,  148 => 21,  128 => 7,  119 => 6,  101 => 5,  53 => 30,  50 => 22,  48 => 21,  41 => 18,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        {% endblock %}
    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({\"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
    

        

    });

});


</script>", "::basel.html.twig", "/var/www/html/projet00000/app/Resources/views/basel.html.twig");
    }
}
