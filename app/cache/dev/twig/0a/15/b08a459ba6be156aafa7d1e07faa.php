<?php

/* ::layout.html.twig */
class __TwigTemplate_0a15b08a459ba6be156aafa7d1e07faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>Test</h1>
\t\t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
\t\t\t\t\tLire le tutoriel &raquo;
\t\t\t\t</a></p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_accueil"), "html", null, true);
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_ajouter"), "html", null, true);
        echo "\">Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('actions')->renderAction("DavidBlogBundle:Blog:menu", array("nombre" => 3), array());
        echo "                 
\t\t\t\t</div>\t
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
\t\t\t\t<p>The sky's the limit &copy; 2012 and beyond.</p>
\t\t\t</footer>
\t\t</div>

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "David";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  119 => 47,  117 => 46,  114 => 45,  110 => 34,  107 => 33,  100 => 9,  97 => 8,  91 => 6,  86 => 50,  84 => 45,  72 => 35,  70 => 33,  64 => 30,  59 => 28,  55 => 27,  37 => 11,  35 => 8,  23 => 1,  85 => 23,  82 => 22,  77 => 24,  74 => 22,  71 => 20,  62 => 17,  57 => 16,  52 => 15,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  56 => 17,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
