<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_719cfa3a46ee130d5d0fec0f92175363 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  124 => 30,  99 => 25,  49 => 14,  90 => 25,  117 => 27,  110 => 34,  107 => 33,  97 => 26,  86 => 50,  23 => 1,  77 => 23,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 22,  65 => 19,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 26,  67 => 19,  61 => 14,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 21,  68 => 12,  27 => 4,  91 => 6,  84 => 45,  94 => 24,  88 => 27,  79 => 23,  59 => 20,  21 => 2,  44 => 12,  31 => 6,  28 => 8,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 3,  24 => 3,  25 => 3,  19 => 2,  70 => 33,  63 => 24,  46 => 13,  22 => 4,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 42,  139 => 50,  131 => 34,  123 => 47,  120 => 28,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 20,  74 => 22,  66 => 15,  55 => 13,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  37 => 11,  35 => 5,  32 => 6,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 38,  136 => 50,  133 => 43,  130 => 47,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 29,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 18,  64 => 30,  60 => 17,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 6,);
    }
}
