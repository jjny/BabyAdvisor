<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43a1299bb2a59e7481c9bc3d61b680e9ff3f19f7ca315b0d4f7f9b2578e3792a extends Twig_Template
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
        $__internal_001d6ea917030714e0e527f9cbb2b25915627a5c1a888e4a98704e1957fdab05 = $this->env->getExtension("native_profiler");
        $__internal_001d6ea917030714e0e527f9cbb2b25915627a5c1a888e4a98704e1957fdab05->enter($__internal_001d6ea917030714e0e527f9cbb2b25915627a5c1a888e4a98704e1957fdab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001d6ea917030714e0e527f9cbb2b25915627a5c1a888e4a98704e1957fdab05->leave($__internal_001d6ea917030714e0e527f9cbb2b25915627a5c1a888e4a98704e1957fdab05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0840fca402e5cf8fef3bc5d18bb90753a1c5d5f55f360453a63208084aaf524 = $this->env->getExtension("native_profiler");
        $__internal_e0840fca402e5cf8fef3bc5d18bb90753a1c5d5f55f360453a63208084aaf524->enter($__internal_e0840fca402e5cf8fef3bc5d18bb90753a1c5d5f55f360453a63208084aaf524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0840fca402e5cf8fef3bc5d18bb90753a1c5d5f55f360453a63208084aaf524->leave($__internal_e0840fca402e5cf8fef3bc5d18bb90753a1c5d5f55f360453a63208084aaf524_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a11fbdac5c2073cfedd6cf15d7d2cc5e81d6c2c543010059637fd52b6ba8954 = $this->env->getExtension("native_profiler");
        $__internal_3a11fbdac5c2073cfedd6cf15d7d2cc5e81d6c2c543010059637fd52b6ba8954->enter($__internal_3a11fbdac5c2073cfedd6cf15d7d2cc5e81d6c2c543010059637fd52b6ba8954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a11fbdac5c2073cfedd6cf15d7d2cc5e81d6c2c543010059637fd52b6ba8954->leave($__internal_3a11fbdac5c2073cfedd6cf15d7d2cc5e81d6c2c543010059637fd52b6ba8954_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a29c001439a6a7d95471932c67991db8ed6eeea471215a7a3217ae9d941801f2 = $this->env->getExtension("native_profiler");
        $__internal_a29c001439a6a7d95471932c67991db8ed6eeea471215a7a3217ae9d941801f2->enter($__internal_a29c001439a6a7d95471932c67991db8ed6eeea471215a7a3217ae9d941801f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a29c001439a6a7d95471932c67991db8ed6eeea471215a7a3217ae9d941801f2->leave($__internal_a29c001439a6a7d95471932c67991db8ed6eeea471215a7a3217ae9d941801f2_prof);

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
