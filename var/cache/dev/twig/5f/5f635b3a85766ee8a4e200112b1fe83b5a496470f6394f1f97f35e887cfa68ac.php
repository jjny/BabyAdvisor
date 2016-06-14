<?php

/* BabyAdvisorBundle:BabyAdvisor:membres.html.twig */
class __TwigTemplate_eb6fed25a97d29d5053458f8d84bf1873dae101d9acd1918ed95a3336df851b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BabyAdvisorBundle:BabyAdvisor:membres.html.twig", 1);
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
        $__internal_fc389fbcbf42685cd3ef0bd48d97429aafd02fc9e31d61c86b909708888cb32f = $this->env->getExtension("native_profiler");
        $__internal_fc389fbcbf42685cd3ef0bd48d97429aafd02fc9e31d61c86b909708888cb32f->enter($__internal_fc389fbcbf42685cd3ef0bd48d97429aafd02fc9e31d61c86b909708888cb32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BabyAdvisorBundle:BabyAdvisor:membres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc389fbcbf42685cd3ef0bd48d97429aafd02fc9e31d61c86b909708888cb32f->leave($__internal_fc389fbcbf42685cd3ef0bd48d97429aafd02fc9e31d61c86b909708888cb32f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bbc2d8a53f8b79a9524c81913e747a9b81cdda4a29898bc247c8232e7f842c3 = $this->env->getExtension("native_profiler");
        $__internal_9bbc2d8a53f8b79a9524c81913e747a9b81cdda4a29898bc247c8232e7f842c3->enter($__internal_9bbc2d8a53f8b79a9524c81913e747a9b81cdda4a29898bc247c8232e7f842c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BabyAdvisor - Les advisors";
        
        $__internal_9bbc2d8a53f8b79a9524c81913e747a9b81cdda4a29898bc247c8232e7f842c3->leave($__internal_9bbc2d8a53f8b79a9524c81913e747a9b81cdda4a29898bc247c8232e7f842c3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_285b2a72538f1042bc5da106682e8e6351801e58c234bcb8d52b162ab220352a = $this->env->getExtension("native_profiler");
        $__internal_285b2a72538f1042bc5da106682e8e6351801e58c234bcb8d52b162ab220352a->enter($__internal_285b2a72538f1042bc5da106682e8e6351801e58c234bcb8d52b162ab220352a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t
";
        
        $__internal_285b2a72538f1042bc5da106682e8e6351801e58c234bcb8d52b162ab220352a->leave($__internal_285b2a72538f1042bc5da106682e8e6351801e58c234bcb8d52b162ab220352a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3e493d93c894b3ad1aaeac20a75ae28800bd1c45c57239ba64c6b05936a8f0 = $this->env->getExtension("native_profiler");
        $__internal_dd3e493d93c894b3ad1aaeac20a75ae28800bd1c45c57239ba64c6b05936a8f0->enter($__internal_dd3e493d93c894b3ad1aaeac20a75ae28800bd1c45c57239ba64c6b05936a8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t <div class=\"container home\">
\t  <p> liste des membres</p>

\t  </div >



";
        
        $__internal_dd3e493d93c894b3ad1aaeac20a75ae28800bd1c45c57239ba64c6b05936a8f0->leave($__internal_dd3e493d93c894b3ad1aaeac20a75ae28800bd1c45c57239ba64c6b05936a8f0_prof);

    }

    public function getTemplateName()
    {
        return "BabyAdvisorBundle:BabyAdvisor:membres.html.twig";
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
/* {% block title %}BabyAdvisor - Les advisors{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 		*/
/* {% endblock %}*/
/* 	*/
/* {% block body %}*/
/* */
/* 	 <div class="container home">*/
/* 	  <p> liste des membres</p>*/
/* */
/* 	  </div >*/
/* */
/* */
/* */
/* {% endblock %}*/
