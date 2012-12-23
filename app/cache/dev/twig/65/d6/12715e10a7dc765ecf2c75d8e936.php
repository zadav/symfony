<?php

/* DavidBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_65d612715e10a7dc765ecf2c75d8e936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DavidBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'davidblog_body' => array($this, 'block_davidblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DavidBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_davidblog_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>
        ";
        // line 13
        echo "        ";
        if ((!(null === $this->getAttribute($this->getContext($context, "article"), "image")))) {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "alt"), "html", null, true);
            echo "\" />
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "
    </h2>
    <i>Par ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo "</i>

    ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "categories"), "count") > 0)) {
            // line 22
            echo "        - Catégories :
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "article"), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                echo "
            ";
                // line 25
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 26
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <div class=\"well\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_accueil"), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_modifier", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icon-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
            <i class=\"icon-trash\"></i>
            Supprimer l'article
        </a>
    </p>

";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  99 => 25,  49 => 14,  90 => 25,  117 => 27,  110 => 34,  107 => 33,  97 => 26,  86 => 50,  23 => 1,  77 => 23,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 22,  65 => 19,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 26,  67 => 19,  61 => 14,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 21,  68 => 12,  27 => 4,  91 => 6,  84 => 45,  94 => 24,  88 => 27,  79 => 23,  59 => 20,  21 => 2,  44 => 12,  31 => 6,  28 => 8,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 3,  24 => 3,  25 => 3,  19 => 2,  70 => 33,  63 => 24,  46 => 13,  22 => 4,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 42,  139 => 50,  131 => 34,  123 => 47,  120 => 28,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 20,  74 => 22,  66 => 15,  55 => 13,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  37 => 11,  35 => 8,  32 => 6,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 38,  136 => 50,  133 => 43,  130 => 47,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 29,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 18,  64 => 30,  60 => 17,  57 => 16,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 6,);
    }
}
