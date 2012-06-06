<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_0eee82dc42b78a8b84c0d84f14b27283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a class=\"symfony-button-green\" href=\"http://symfony.com/doc/2.0/quick_tour/index.html\">Read the Quick Tour</a>
        </div>
        ";
        // line 19
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 20
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a class=\"symfony-button-green\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
            echo "\">Configure</a>
            </div>
        ";
        }
        // line 27
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a class=\"symfony-button-green\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Run The Demo</a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/2.0/book/index.html\">The book</a></li>
                <li><a href=\"http://symfony.com/doc/2.0/reference/index.html\">The cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/2.0/glossary/index.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li>&nbsp;</li>
                <li><a href=\"http://symfony.com/doc/2.0/contributing/index.html\">Contributing</a></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/2.0/contributing/index.html\">How to be involved</a></li>
                <li><a href=\"http://symfony.com/doc/2.0/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  136 => 40,  61 => 20,  21 => 1,  154 => 78,  138 => 68,  100 => 45,  114 => 30,  101 => 24,  85 => 31,  110 => 30,  83 => 6,  65 => 22,  56 => 17,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 41,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  26 => 3,  97 => 23,  95 => 47,  88 => 29,  78 => 25,  71 => 35,  25 => 4,  22 => 2,  40 => 7,  72 => 29,  64 => 24,  53 => 13,  42 => 7,  34 => 5,  23 => 29,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 79,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 13,  32 => 11,  17 => 1,  92 => 20,  86 => 37,  79 => 39,  29 => 3,  24 => 9,  19 => 2,  69 => 16,  63 => 29,  58 => 21,  49 => 11,  43 => 8,  37 => 9,  20 => 2,  139 => 26,  131 => 40,  128 => 61,  125 => 42,  121 => 57,  115 => 34,  107 => 49,  99 => 34,  96 => 20,  91 => 33,  82 => 27,  77 => 18,  75 => 37,  57 => 15,  50 => 14,  46 => 10,  44 => 8,  39 => 10,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 21,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 24,  67 => 19,  62 => 21,  59 => 19,  55 => 13,  51 => 16,  48 => 20,  41 => 11,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
