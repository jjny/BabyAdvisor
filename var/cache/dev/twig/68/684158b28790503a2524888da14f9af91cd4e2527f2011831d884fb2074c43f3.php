<?php

/* BabyAdvisorBundle:BabyAdvisor:home.html.twig */
class __TwigTemplate_80b66e6554fb2b0ff5d28ce33affc69f9a08d228f3cfe4b5257b4396734aec0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BabyAdvisorBundle:BabyAdvisor:home.html.twig", 1);
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
        $__internal_c2f89bf3dbf0b315c0af00e1e64ab378776eb497eccd96ee0ddc442e1218da4f = $this->env->getExtension("native_profiler");
        $__internal_c2f89bf3dbf0b315c0af00e1e64ab378776eb497eccd96ee0ddc442e1218da4f->enter($__internal_c2f89bf3dbf0b315c0af00e1e64ab378776eb497eccd96ee0ddc442e1218da4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BabyAdvisorBundle:BabyAdvisor:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f89bf3dbf0b315c0af00e1e64ab378776eb497eccd96ee0ddc442e1218da4f->leave($__internal_c2f89bf3dbf0b315c0af00e1e64ab378776eb497eccd96ee0ddc442e1218da4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0256814f301914f7eda9a77f6ddcac8ad99d5492c704d0a2de3e088a9e6435ba = $this->env->getExtension("native_profiler");
        $__internal_0256814f301914f7eda9a77f6ddcac8ad99d5492c704d0a2de3e088a9e6435ba->enter($__internal_0256814f301914f7eda9a77f6ddcac8ad99d5492c704d0a2de3e088a9e6435ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BabyAdvisor - Accueil";
        
        $__internal_0256814f301914f7eda9a77f6ddcac8ad99d5492c704d0a2de3e088a9e6435ba->leave($__internal_0256814f301914f7eda9a77f6ddcac8ad99d5492c704d0a2de3e088a9e6435ba_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46a2003af05b9a846576ca38af58f52d56225d2c18b52e1fd4381f33e943097f = $this->env->getExtension("native_profiler");
        $__internal_46a2003af05b9a846576ca38af58f52d56225d2c18b52e1fd4381f33e943097f->enter($__internal_46a2003af05b9a846576ca38af58f52d56225d2c18b52e1fd4381f33e943097f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t
";
        
        $__internal_46a2003af05b9a846576ca38af58f52d56225d2c18b52e1fd4381f33e943097f->leave($__internal_46a2003af05b9a846576ca38af58f52d56225d2c18b52e1fd4381f33e943097f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b36837ab730476f395305ac3a5f2d90e50cb6a39afc566d14081e44fdddf415 = $this->env->getExtension("native_profiler");
        $__internal_4b36837ab730476f395305ac3a5f2d90e50cb6a39afc566d14081e44fdddf415->enter($__internal_4b36837ab730476f395305ac3a5f2d90e50cb6a39afc566d14081e44fdddf415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t <div class=\"container home\">
\t  <p> homepage</p>

\t  </div >



";
        
        $__internal_4b36837ab730476f395305ac3a5f2d90e50cb6a39afc566d14081e44fdddf415->leave($__internal_4b36837ab730476f395305ac3a5f2d90e50cb6a39afc566d14081e44fdddf415_prof);

    }

    public function getTemplateName()
    {
        return "BabyAdvisorBundle:BabyAdvisor:home.html.twig";
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
/* 	  <p> homepage</p>*/
/* */
/* 	  </div >*/
/* */
/* */
/* */
/* {% endblock %}*/
