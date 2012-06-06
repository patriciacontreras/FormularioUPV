<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8ab11ee5b6ab9d74e71e4d769c2870e4 extends Twig_Template
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
        // line 1
        echo "<div id=\"header\" class=\"clear_fix\">
    <h1>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logo_symfony_profiler.gif"), "html", null, true);
        echo "\" alt=\"Symfony profiler\"/>
    </h1>

    <div class=\"search\">
        <form method=\"get\" action=\"http://symfony.com/search\">
            <div class=\"form_row\">
                <label for=\"search_id\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\"/>
                </label>

                <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\"/>

                <button type=\"submit\">
                    <span class=\"border_l\">
                        <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                        </span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  66 => 21,  36 => 6,  76 => 39,  136 => 40,  61 => 28,  21 => 3,  154 => 78,  138 => 68,  100 => 45,  114 => 30,  101 => 24,  85 => 31,  110 => 30,  83 => 6,  65 => 22,  56 => 17,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 41,  90 => 45,  54 => 19,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 27,  52 => 15,  26 => 5,  97 => 23,  95 => 47,  88 => 32,  78 => 25,  71 => 37,  25 => 5,  22 => 3,  40 => 9,  72 => 17,  64 => 35,  53 => 23,  42 => 7,  34 => 7,  23 => 29,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 79,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 17,  32 => 8,  17 => 1,  92 => 20,  86 => 37,  79 => 20,  29 => 4,  24 => 9,  19 => 2,  69 => 16,  63 => 28,  58 => 26,  49 => 11,  43 => 8,  37 => 9,  20 => 2,  139 => 26,  131 => 40,  128 => 61,  125 => 42,  121 => 57,  115 => 34,  107 => 49,  99 => 34,  96 => 20,  91 => 33,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 10,  46 => 9,  44 => 14,  39 => 10,  33 => 5,  30 => 7,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 21,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 24,  67 => 19,  62 => 21,  59 => 19,  55 => 19,  51 => 23,  48 => 20,  41 => 7,  38 => 8,  35 => 6,  31 => 10,  28 => 3,);
    }
}
