<?php

namespace David\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
	
 	public function buildForm(FormBuilderInterface $builder, array $options)
  	{
	    $builder
	      ->add('date',        'date')
	      ->add('titre',       'text')
	      ->add('contenu',     'textarea')
	      ->add('auteur',      'text')
	      ->add('publication', 'checkbox', array('required' => false))
	      ->add('image',        new ImageType()) // Rajoutez cette ligne
	      /*
	       * Rappel :
	      ** - 1er argument : nom du champ, ici « categories » car c'est le nom de l'attribut
	      ** - 2e argument : type du champ, ici « collection » qui est une liste de quelque chose
	      ** - 3e argument : tableau d'options du champ
	      */
	      ->add('categories', 'collection', array('type'=> new CategorieType(),
	      		'allow_add'    => true,
	      		'prototype'	   => true,
	      		'allow_delete' => true,
	      		'by_reference' => false))
	      		
	    ;
  	}
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'David\BlogBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'david_blogbundle_articletype';
    }
}
