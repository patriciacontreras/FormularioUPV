<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_30dca14fe7905f42d101ae537aae702f extends Twig_Template
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
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "count")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($this->getContext($context, "i") == ($this->getContext($context, "index") + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($this->getContext($context, "i") != $this->getContext($context, "count"))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  130 => 48,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  170 => 56,  118 => 36,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  151 => 53,  143 => 49,  140 => 52,  106 => 35,  150 => 43,  119 => 47,  45 => 9,  68 => 19,  66 => 23,  36 => 8,  76 => 39,  136 => 40,  61 => 17,  21 => 3,  154 => 54,  138 => 68,  100 => 39,  114 => 34,  101 => 24,  85 => 28,  110 => 30,  83 => 26,  65 => 18,  56 => 14,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 41,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 13,  26 => 3,  97 => 38,  95 => 30,  88 => 32,  78 => 25,  71 => 20,  25 => 5,  22 => 3,  40 => 9,  72 => 17,  64 => 35,  53 => 23,  42 => 10,  34 => 5,  23 => 29,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 73,  142 => 48,  137 => 51,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 11,  32 => 6,  17 => 1,  92 => 37,  86 => 27,  79 => 28,  29 => 5,  24 => 3,  19 => 2,  69 => 21,  63 => 28,  58 => 16,  49 => 12,  43 => 12,  37 => 9,  20 => 2,  139 => 47,  131 => 40,  128 => 61,  125 => 41,  121 => 57,  115 => 34,  107 => 49,  99 => 34,  96 => 20,  91 => 31,  82 => 20,  77 => 22,  75 => 26,  57 => 27,  50 => 13,  46 => 11,  44 => 10,  39 => 12,  33 => 7,  30 => 7,  27 => 4,  135 => 41,  129 => 43,  122 => 46,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 32,  89 => 22,  87 => 44,  84 => 29,  81 => 29,  73 => 23,  70 => 24,  67 => 19,  62 => 22,  59 => 21,  55 => 20,  51 => 23,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
