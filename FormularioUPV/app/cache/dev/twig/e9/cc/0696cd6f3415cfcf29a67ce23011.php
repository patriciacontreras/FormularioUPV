<?php

/* ::base.html.twig */
class __TwigTemplate_e9cc0696cd6f3415cfcf29a67ce23011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'Inscripción_title' => array($this, 'block_Inscripción_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - UPV</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">

                <hgroup>
                    <h2>";
        // line 20
        $this->displayBlock('Inscripción_title', $context, $blocks);
        echo "</h>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "            </section>

            <div id=\"footer\">
                ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "            </div>
        </section>
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Inscripción  UPV";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 20
    public function block_Inscripción_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Formulario Inscripción </a>";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "                    Inscripcion UPV - created by <a>Melanny Farias, Patricia Contreras</a>
                ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  110 => 30,  107 => 29,  102 => 25,  96 => 20,  90 => 9,  86 => 7,  83 => 6,  71 => 35,  63 => 29,  58 => 26,  56 => 25,  48 => 20,  35 => 11,  33 => 6,  23 => 1,  131 => 40,  126 => 37,  114 => 31,  108 => 28,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 5,  73 => 17,  69 => 34,  65 => 32,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  41 => 10,  38 => 9,  34 => 8,  29 => 5,  26 => 4,);
    }
}
