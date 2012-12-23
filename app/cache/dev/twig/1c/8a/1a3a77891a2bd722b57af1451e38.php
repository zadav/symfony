<?php

/* DavidBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_1c8a1a3a77891a2bd722b57af1451e38 extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  22 => 4,  19 => 2,  122 => 48,  119 => 47,  117 => 46,  114 => 45,  110 => 34,  107 => 33,  100 => 9,  97 => 8,  91 => 6,  86 => 50,  84 => 45,  72 => 35,  70 => 33,  64 => 30,  59 => 28,  55 => 27,  37 => 11,  35 => 8,  23 => 1,  85 => 23,  82 => 22,  77 => 24,  74 => 22,  71 => 20,  62 => 17,  57 => 16,  52 => 15,  43 => 11,  40 => 7,  33 => 4,  30 => 6,  56 => 17,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 9,  29 => 3,);
    }
}
