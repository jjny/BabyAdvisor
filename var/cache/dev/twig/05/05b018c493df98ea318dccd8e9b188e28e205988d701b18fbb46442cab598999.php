<?php

/* BabyAdvisorBundle:BabyAdvisor:home.html.twig */
class __TwigTemplate_acec3bea1dfef065909a1f14d97dd64057fb745293b176a1c81e37253a7367c3 extends Twig_Template
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
        $__internal_dc7479d051a8155dff5025a720eb408f1cfbb5037ecd128f848f409e25a08bdf = $this->env->getExtension("native_profiler");
        $__internal_dc7479d051a8155dff5025a720eb408f1cfbb5037ecd128f848f409e25a08bdf->enter($__internal_dc7479d051a8155dff5025a720eb408f1cfbb5037ecd128f848f409e25a08bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BabyAdvisorBundle:BabyAdvisor:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7479d051a8155dff5025a720eb408f1cfbb5037ecd128f848f409e25a08bdf->leave($__internal_dc7479d051a8155dff5025a720eb408f1cfbb5037ecd128f848f409e25a08bdf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb07c36955cfecec2a3376e7bdac686b4d7f5775f743ee8cd6cca56c7515ed3 = $this->env->getExtension("native_profiler");
        $__internal_dbb07c36955cfecec2a3376e7bdac686b4d7f5775f743ee8cd6cca56c7515ed3->enter($__internal_dbb07c36955cfecec2a3376e7bdac686b4d7f5775f743ee8cd6cca56c7515ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BabyAdvisor - Accueil";
        
        $__internal_dbb07c36955cfecec2a3376e7bdac686b4d7f5775f743ee8cd6cca56c7515ed3->leave($__internal_dbb07c36955cfecec2a3376e7bdac686b4d7f5775f743ee8cd6cca56c7515ed3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5f7ef89b45925159f98b1beeae695fb4e6f4a6cfc22a5eb30d8fc3551a20195 = $this->env->getExtension("native_profiler");
        $__internal_d5f7ef89b45925159f98b1beeae695fb4e6f4a6cfc22a5eb30d8fc3551a20195->enter($__internal_d5f7ef89b45925159f98b1beeae695fb4e6f4a6cfc22a5eb30d8fc3551a20195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t
";
        
        $__internal_d5f7ef89b45925159f98b1beeae695fb4e6f4a6cfc22a5eb30d8fc3551a20195->leave($__internal_d5f7ef89b45925159f98b1beeae695fb4e6f4a6cfc22a5eb30d8fc3551a20195_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d092d8a4478b370904a7935f6037d336d8c0ad88fa660a1f1aa4a331a50dcaac = $this->env->getExtension("native_profiler");
        $__internal_d092d8a4478b370904a7935f6037d336d8c0ad88fa660a1f1aa4a331a50dcaac->enter($__internal_d092d8a4478b370904a7935f6037d336d8c0ad88fa660a1f1aa4a331a50dcaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t <div class=\"container home\">
\t  <p> homepage</p>

\t  </div >



";
        
        $__internal_d092d8a4478b370904a7935f6037d336d8c0ad88fa660a1f1aa4a331a50dcaac->leave($__internal_d092d8a4478b370904a7935f6037d336d8c0ad88fa660a1f1aa4a331a50dcaac_prof);

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
