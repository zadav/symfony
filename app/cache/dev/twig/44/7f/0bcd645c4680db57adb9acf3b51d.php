<?php

/* DavidBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_447f0bcd645c4680db57adb9acf3b51d extends Twig_Template
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
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

    ";
        // line 6
        echo "    <a href=\"#\" id=\"add_category\" class=\"btn\">Ajouter une cat&eacute;gorie</a><br /><br />

    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

<!-- On charge la librairie jQuery. Ici, je la prends depuis le site jquery.com, mais si vous l'avez en local, changez simplement l'adresse. -->
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>

<script type=\"text/javascript\">
\$(document).ready(function() {
  // On r�cup�re la balise <div> en question qui contient l'attribut � data-prototype � qui nous int�resse
  var \$container = \$('#david_blogbundle_articletype_categories');

  // On d�finit une fonction qui va ajouter un champ
  function add_category() {
    // On d�finit le num�ro du champ (en comptant le nombre de champs d�j� ajout�s)
    index = \$container.children().length;

    // On ajoute � la fin de la balise <div> le contenu de l'attribut � data-prototype �
    // Apr�s avoir remplac� la variable __name__ qu'il contient par le num�ro du champ
    \$container.append(\$(\$container.attr('data-prototype').replace(/__name__/g, index)));

    // On ajoute �galement un bouton pour pouvoir supprimer la cat�gorie
    \$container.append(\$('<a href=\"#\" id=\"delete_category_' + index + '\" class=\"btn btn-danger\">Supprimer</a><br /><br />'));

    // On supprime le champ � chaque clic sur le lien de suppression
    \$('#delete_category_' + index).click(function() {
      \$(this).prev().remove();  // \$(this).prev() est le template ajout�
      \$(this).remove();         // \$(this) est le lien de suppression
      return false;
    });
  }

  // On ajoute un premier champ directement s'il n'en existe pas d�j� un (cas d'un nouvel article par exemple)
  if(\$container.children().length == 0) {
    add_category();
  }

  // On ajoute un nouveau champ � chaque clic sur le lien d'ajout
  \$('#add_category').click(function() {
    add_category();
    return false;
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
