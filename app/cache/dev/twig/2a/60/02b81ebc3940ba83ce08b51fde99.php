<?php

/* DavidBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_2a6002b81ebc3940ba83ce08b51fde99 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tAjouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_davidblog_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<h2>Ajouter un article</h2>

\t";
        // line 10
        $this->env->loadTemplate("DavidBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 11
        echo "
\t<p>
\t\tCet article sera ajouté directement
\t</p>

\t<p>
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_accueil"), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'accueil
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
