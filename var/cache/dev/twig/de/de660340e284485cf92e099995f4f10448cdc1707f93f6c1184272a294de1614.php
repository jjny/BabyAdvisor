<?php

/* BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig */
class __TwigTemplate_6396f451b2ec0fbc90537e7ec484b1c973dd463100480df60b1dbe3e1239e5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56fb96b84670babb747bdfeca11ecf911eb19589ba88eea4eec36ecae90a1fd3 = $this->env->getExtension("native_profiler");
        $__internal_56fb96b84670babb747bdfeca11ecf911eb19589ba88eea4eec36ecae90a1fd3->enter($__internal_56fb96b84670babb747bdfeca11ecf911eb19589ba88eea4eec36ecae90a1fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56fb96b84670babb747bdfeca11ecf911eb19589ba88eea4eec36ecae90a1fd3->leave($__internal_56fb96b84670babb747bdfeca11ecf911eb19589ba88eea4eec36ecae90a1fd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72684e1387722a5525c2662f72784691989bd81c87d6a613454079ea31d2f25f = $this->env->getExtension("native_profiler");
        $__internal_72684e1387722a5525c2662f72784691989bd81c87d6a613454079ea31d2f25f->enter($__internal_72684e1387722a5525c2662f72784691989bd81c87d6a613454079ea31d2f25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BabyAdvisor - Accueil";
        
        $__internal_72684e1387722a5525c2662f72784691989bd81c87d6a613454079ea31d2f25f->leave($__internal_72684e1387722a5525c2662f72784691989bd81c87d6a613454079ea31d2f25f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed69990194230ff604320d72ecc2b551b80ed4b11bb0a0b438e754f2dbbc49a4 = $this->env->getExtension("native_profiler");
        $__internal_ed69990194230ff604320d72ecc2b551b80ed4b11bb0a0b438e754f2dbbc49a4->enter($__internal_ed69990194230ff604320d72ecc2b551b80ed4b11bb0a0b438e754f2dbbc49a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t
";
        
        $__internal_ed69990194230ff604320d72ecc2b551b80ed4b11bb0a0b438e754f2dbbc49a4->leave($__internal_ed69990194230ff604320d72ecc2b551b80ed4b11bb0a0b438e754f2dbbc49a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bff28717a0b2a4bb4d1867962f859cdedb28760e47ed54401eb28cedde597555 = $this->env->getExtension("native_profiler");
        $__internal_bff28717a0b2a4bb4d1867962f859cdedb28760e47ed54401eb28cedde597555->enter($__internal_bff28717a0b2a4bb4d1867962f859cdedb28760e47ed54401eb28cedde597555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t <div class=\"container home\">
\t  <p> membre home</p>

\t  </div >



";
        
        $__internal_bff28717a0b2a4bb4d1867962f859cdedb28760e47ed54401eb28cedde597555->leave($__internal_bff28717a0b2a4bb4d1867962f859cdedb28760e47ed54401eb28cedde597555_prof);

    }

    public function getTemplateName()
    {
        return "BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}BabyAdvisor - Accueil{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 		*/
/* {% endblock %}*/
/* 	*/
/* {% block body %}*/
/* */
/* 	 <div class="container home">*/
/* 	  <p> membre home</p>*/
/* */
/* 	  </div >*/
/* */
/* */
/* */
/* {% endblock %}*/
