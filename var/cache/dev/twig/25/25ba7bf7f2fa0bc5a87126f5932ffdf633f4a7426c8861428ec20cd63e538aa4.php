<?php

/* @KEURGUIimmo/front/fpdf.php/fpdf.php */
class __TwigTemplate_0f2ca92dde38640cd05bd178274ed7dbcbcf008cc4b8be3a0af0b1bd0923cb46 extends Twig_Template
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
        $__internal_4a8e22e523af4b77441b4e748c504b575d169513510a782c48410f86e38f10bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8e22e523af4b77441b4e748c504b575d169513510a782c48410f86e38f10bc->enter($__internal_4a8e22e523af4b77441b4e748c504b575d169513510a782c48410f86e38f10bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/front/fpdf.php/fpdf.php"));

        $__internal_abf580dfa0521fdc98187f0e3fc752693da21a29c203224481b353c0e376daf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf580dfa0521fdc98187f0e3fc752693da21a29c203224481b353c0e376daf3->enter($__internal_abf580dfa0521fdc98187f0e3fc752693da21a29c203224481b353c0e376daf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/front/fpdf.php/fpdf.php"));

        // line 1
        echo "<?php

define('FPDF_FONTPATH', ' Chemin_du_répertoire/font/');
//lien vers le dossier \" font \"
require 'Chemin_du_répertoire/fpdf.php';
//lien vers le fichier contenant la classe FPDF

\$pdf = new FPDF('P', 'pt', 'A4');
//création d'une instance de classe, P pour portrait
//, pt pour point en unité de mesure, A4 pour le format
\$pdf->Open(); //indique que l'on crée un fichier PDF
\$pdf->AddPage(); //permet d'ajouter une page
\$pdf->SetFont('Helvetica', 'B', 11); //choix de la police
\$pdf->SetXY(330, 25); // indique des coordonnées pour
////placer un élément
\$pdf->Cell(190, 50, 'texte dans le cadre', 0, 0, 'L');
//création d'une cellule
\$pdf->Text(498, 20, 'texte'); //insertion d'une ligne
//de texte
\$pdf->Output(); //génère le PDF et l'affiche
";
        
        $__internal_4a8e22e523af4b77441b4e748c504b575d169513510a782c48410f86e38f10bc->leave($__internal_4a8e22e523af4b77441b4e748c504b575d169513510a782c48410f86e38f10bc_prof);

        
        $__internal_abf580dfa0521fdc98187f0e3fc752693da21a29c203224481b353c0e376daf3->leave($__internal_abf580dfa0521fdc98187f0e3fc752693da21a29c203224481b353c0e376daf3_prof);

    }

    public function getTemplateName()
    {
        return "@KEURGUIimmo/front/fpdf.php/fpdf.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

define('FPDF_FONTPATH', ' Chemin_du_répertoire/font/');
//lien vers le dossier \" font \"
require 'Chemin_du_répertoire/fpdf.php';
//lien vers le fichier contenant la classe FPDF

\$pdf = new FPDF('P', 'pt', 'A4');
//création d'une instance de classe, P pour portrait
//, pt pour point en unité de mesure, A4 pour le format
\$pdf->Open(); //indique que l'on crée un fichier PDF
\$pdf->AddPage(); //permet d'ajouter une page
\$pdf->SetFont('Helvetica', 'B', 11); //choix de la police
\$pdf->SetXY(330, 25); // indique des coordonnées pour
////placer un élément
\$pdf->Cell(190, 50, 'texte dans le cadre', 0, 0, 'L');
//création d'une cellule
\$pdf->Text(498, 20, 'texte'); //insertion d'une ligne
//de texte
\$pdf->Output(); //génère le PDF et l'affiche
", "@KEURGUIimmo/front/fpdf.php/fpdf.php", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/fpdf.php/fpdf.php");
    }
}
