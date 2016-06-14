<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0f9e12e5331eec611f56d88067bdf29bd71cb945cefa4e92816eb1c97257809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28384e5fe6121223b432679bbe9858e7873a969856437ae30c62daf67d4f0371 = $this->env->getExtension("native_profiler");
        $__internal_28384e5fe6121223b432679bbe9858e7873a969856437ae30c62daf67d4f0371->enter($__internal_28384e5fe6121223b432679bbe9858e7873a969856437ae30c62daf67d4f0371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28384e5fe6121223b432679bbe9858e7873a969856437ae30c62daf67d4f0371->leave($__internal_28384e5fe6121223b432679bbe9858e7873a969856437ae30c62daf67d4f0371_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20e5d3639f0bf88b56c6550e1ea81d89d6bd2535f1c003eb21bdb16570f6ef77 = $this->env->getExtension("native_profiler");
        $__internal_20e5d3639f0bf88b56c6550e1ea81d89d6bd2535f1c003eb21bdb16570f6ef77->enter($__internal_20e5d3639f0bf88b56c6550e1ea81d89d6bd2535f1c003eb21bdb16570f6ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20e5d3639f0bf88b56c6550e1ea81d89d6bd2535f1c003eb21bdb16570f6ef77->leave($__internal_20e5d3639f0bf88b56c6550e1ea81d89d6bd2535f1c003eb21bdb16570f6ef77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ed8c5897f613e0dd696654367ee4737ab4a7c4eef69005b10d77064d31561d1 = $this->env->getExtension("native_profiler");
        $__internal_3ed8c5897f613e0dd696654367ee4737ab4a7c4eef69005b10d77064d31561d1->enter($__internal_3ed8c5897f613e0dd696654367ee4737ab4a7c4eef69005b10d77064d31561d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ed8c5897f613e0dd696654367ee4737ab4a7c4eef69005b10d77064d31561d1->leave($__internal_3ed8c5897f613e0dd696654367ee4737ab4a7c4eef69005b10d77064d31561d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b011f556ccf8b2fee955b948eff95f3bbf3a82a5163624296cac2e230fa11b1 = $this->env->getExtension("native_profiler");
        $__internal_6b011f556ccf8b2fee955b948eff95f3bbf3a82a5163624296cac2e230fa11b1->enter($__internal_6b011f556ccf8b2fee955b948eff95f3bbf3a82a5163624296cac2e230fa11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b011f556ccf8b2fee955b948eff95f3bbf3a82a5163624296cac2e230fa11b1->leave($__internal_6b011f556ccf8b2fee955b948eff95f3bbf3a82a5163624296cac2e230fa11b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
