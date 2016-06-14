<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d2aef7c6615cd4b76663ecfe9ad3341f8722fd9ec47e559f770ee7aa9abf39f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d3b388876954470e5f2bd5857fec486b880cfaa71e0525b535bccb25aa31993 = $this->env->getExtension("native_profiler");
        $__internal_7d3b388876954470e5f2bd5857fec486b880cfaa71e0525b535bccb25aa31993->enter($__internal_7d3b388876954470e5f2bd5857fec486b880cfaa71e0525b535bccb25aa31993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3b388876954470e5f2bd5857fec486b880cfaa71e0525b535bccb25aa31993->leave($__internal_7d3b388876954470e5f2bd5857fec486b880cfaa71e0525b535bccb25aa31993_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97db81742f8508993c091f72cc0e8fc00bf8ccb4002455f2ce50e84e737b9818 = $this->env->getExtension("native_profiler");
        $__internal_97db81742f8508993c091f72cc0e8fc00bf8ccb4002455f2ce50e84e737b9818->enter($__internal_97db81742f8508993c091f72cc0e8fc00bf8ccb4002455f2ce50e84e737b9818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_97db81742f8508993c091f72cc0e8fc00bf8ccb4002455f2ce50e84e737b9818->leave($__internal_97db81742f8508993c091f72cc0e8fc00bf8ccb4002455f2ce50e84e737b9818_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6df92e8ef30ab8916c1dea5abe2432ec17a9aa48b8b371c456bc364a6740b32e = $this->env->getExtension("native_profiler");
        $__internal_6df92e8ef30ab8916c1dea5abe2432ec17a9aa48b8b371c456bc364a6740b32e->enter($__internal_6df92e8ef30ab8916c1dea5abe2432ec17a9aa48b8b371c456bc364a6740b32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6df92e8ef30ab8916c1dea5abe2432ec17a9aa48b8b371c456bc364a6740b32e->leave($__internal_6df92e8ef30ab8916c1dea5abe2432ec17a9aa48b8b371c456bc364a6740b32e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a935db5074c9944072bb6a48a58d05f5b90f7f9c4bf41a99a17751a432fd9b46 = $this->env->getExtension("native_profiler");
        $__internal_a935db5074c9944072bb6a48a58d05f5b90f7f9c4bf41a99a17751a432fd9b46->enter($__internal_a935db5074c9944072bb6a48a58d05f5b90f7f9c4bf41a99a17751a432fd9b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a935db5074c9944072bb6a48a58d05f5b90f7f9c4bf41a99a17751a432fd9b46->leave($__internal_a935db5074c9944072bb6a48a58d05f5b90f7f9c4bf41a99a17751a432fd9b46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
