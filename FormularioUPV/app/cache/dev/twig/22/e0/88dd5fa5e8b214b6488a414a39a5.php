<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_22e088dd5fa5e8b214b6488a414a39a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
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
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  61 => 23,  21 => 1,  154 => 78,  138 => 68,  100 => 45,  114 => 30,  101 => 24,  85 => 43,  110 => 30,  83 => 6,  65 => 25,  56 => 17,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 41,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 26,  60 => 16,  52 => 12,  26 => 3,  97 => 23,  95 => 47,  88 => 29,  78 => 25,  71 => 35,  25 => 4,  22 => 2,  40 => 8,  72 => 29,  64 => 24,  53 => 13,  42 => 7,  34 => 5,  23 => 29,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 79,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 13,  32 => 11,  17 => 1,  92 => 20,  86 => 37,  79 => 39,  29 => 4,  24 => 3,  19 => 2,  69 => 16,  63 => 29,  58 => 21,  49 => 11,  43 => 12,  37 => 9,  20 => 2,  139 => 26,  131 => 40,  128 => 61,  125 => 42,  121 => 57,  115 => 34,  107 => 49,  99 => 34,  96 => 20,  91 => 33,  82 => 27,  77 => 18,  75 => 37,  57 => 15,  50 => 14,  46 => 10,  44 => 13,  39 => 10,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 21,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 21,  59 => 22,  55 => 13,  51 => 16,  48 => 20,  41 => 11,  38 => 9,  35 => 7,  31 => 4,  28 => 3,);
    }
}
