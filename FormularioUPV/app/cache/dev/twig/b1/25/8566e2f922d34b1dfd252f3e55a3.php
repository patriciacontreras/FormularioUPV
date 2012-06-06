<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_b1258566e2f922d34b1dfd252f3e55a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "message"));
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  76 => 27,  136 => 40,  61 => 20,  21 => 1,  154 => 78,  138 => 68,  100 => 45,  114 => 30,  101 => 24,  85 => 31,  110 => 30,  83 => 6,  65 => 22,  56 => 17,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 41,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  26 => 3,  97 => 23,  95 => 47,  88 => 29,  78 => 25,  71 => 35,  25 => 4,  22 => 2,  40 => 7,  72 => 29,  64 => 24,  53 => 13,  42 => 7,  34 => 5,  23 => 29,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 79,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 10,  32 => 11,  17 => 1,  92 => 20,  86 => 37,  79 => 39,  29 => 3,  24 => 9,  19 => 2,  69 => 16,  63 => 29,  58 => 21,  49 => 11,  43 => 8,  37 => 9,  20 => 2,  139 => 26,  131 => 40,  128 => 61,  125 => 42,  121 => 57,  115 => 34,  107 => 49,  99 => 34,  96 => 20,  91 => 33,  82 => 27,  77 => 18,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 21,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 24,  67 => 19,  62 => 21,  59 => 19,  55 => 12,  51 => 11,  48 => 20,  41 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
