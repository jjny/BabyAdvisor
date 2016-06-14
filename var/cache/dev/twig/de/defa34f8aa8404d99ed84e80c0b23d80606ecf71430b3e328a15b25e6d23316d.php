<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86d287547b2db409e086f5e3d2c04b0e57fb65e253840812e1fbea262b71d293 extends Twig_Template
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
        $__internal_82d53611675cbd4d8cd0af5bbcd957a198ed5fd4a1e74c1f29c1ed7da6aec71f = $this->env->getExtension("native_profiler");
        $__internal_82d53611675cbd4d8cd0af5bbcd957a198ed5fd4a1e74c1f29c1ed7da6aec71f->enter($__internal_82d53611675cbd4d8cd0af5bbcd957a198ed5fd4a1e74c1f29c1ed7da6aec71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d53611675cbd4d8cd0af5bbcd957a198ed5fd4a1e74c1f29c1ed7da6aec71f->leave($__internal_82d53611675cbd4d8cd0af5bbcd957a198ed5fd4a1e74c1f29c1ed7da6aec71f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4896fd0a2e243ba2a93c3eeeb6967ef93d2d8c790fc935ad4b326ebbfe93a334 = $this->env->getExtension("native_profiler");
        $__internal_4896fd0a2e243ba2a93c3eeeb6967ef93d2d8c790fc935ad4b326ebbfe93a334->enter($__internal_4896fd0a2e243ba2a93c3eeeb6967ef93d2d8c790fc935ad4b326ebbfe93a334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4896fd0a2e243ba2a93c3eeeb6967ef93d2d8c790fc935ad4b326ebbfe93a334->leave($__internal_4896fd0a2e243ba2a93c3eeeb6967ef93d2d8c790fc935ad4b326ebbfe93a334_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8613ea987b56e02d2e0535f9531708fea99e301b2bbc4f80585094523b3dd68 = $this->env->getExtension("native_profiler");
        $__internal_a8613ea987b56e02d2e0535f9531708fea99e301b2bbc4f80585094523b3dd68->enter($__internal_a8613ea987b56e02d2e0535f9531708fea99e301b2bbc4f80585094523b3dd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8613ea987b56e02d2e0535f9531708fea99e301b2bbc4f80585094523b3dd68->leave($__internal_a8613ea987b56e02d2e0535f9531708fea99e301b2bbc4f80585094523b3dd68_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_316eda29e3413da1f621a1f03a1d2b9fc9ae3bb375393a5e00db30e21798932b = $this->env->getExtension("native_profiler");
        $__internal_316eda29e3413da1f621a1f03a1d2b9fc9ae3bb375393a5e00db30e21798932b->enter($__internal_316eda29e3413da1f621a1f03a1d2b9fc9ae3bb375393a5e00db30e21798932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_316eda29e3413da1f621a1f03a1d2b9fc9ae3bb375393a5e00db30e21798932b->leave($__internal_316eda29e3413da1f621a1f03a1d2b9fc9ae3bb375393a5e00db30e21798932b_prof);

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
