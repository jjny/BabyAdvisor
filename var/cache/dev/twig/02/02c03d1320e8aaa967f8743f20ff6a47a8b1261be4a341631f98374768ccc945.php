<?php

/* ConnexionBundle:connexion:login.html.twig */
class __TwigTemplate_ef07e9b8cc2d4c489392e1ad3cbe43af63b81bb2418c493633e30b71169aa760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ConnexionBundle:connexion:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab0f120fa991732e83be6ce47573b82d5e79c4a1cd151699c5afed7d02c5189d = $this->env->getExtension("native_profiler");
        $__internal_ab0f120fa991732e83be6ce47573b82d5e79c4a1cd151699c5afed7d02c5189d->enter($__internal_ab0f120fa991732e83be6ce47573b82d5e79c4a1cd151699c5afed7d02c5189d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConnexionBundle:connexion:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0f120fa991732e83be6ce47573b82d5e79c4a1cd151699c5afed7d02c5189d->leave($__internal_ab0f120fa991732e83be6ce47573b82d5e79c4a1cd151699c5afed7d02c5189d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de318cead60892cdfb3fdbc54dc68586806d6c24e3347d72556b777066b7b940 = $this->env->getExtension("native_profiler");
        $__internal_de318cead60892cdfb3fdbc54dc68586806d6c24e3347d72556b777066b7b940->enter($__internal_de318cead60892cdfb3fdbc54dc68586806d6c24e3347d72556b777066b7b940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_de318cead60892cdfb3fdbc54dc68586806d6c24e3347d72556b777066b7b940->leave($__internal_de318cead60892cdfb3fdbc54dc68586806d6c24e3347d72556b777066b7b940_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2234b2165f1dfab9ca38a67a4957f4db411585616e4cb5f1bb4c7e72cfeb878d = $this->env->getExtension("native_profiler");
        $__internal_2234b2165f1dfab9ca38a67a4957f4db411585616e4cb5f1bb4c7e72cfeb878d->enter($__internal_2234b2165f1dfab9ca38a67a4957f4db411585616e4cb5f1bb4c7e72cfeb878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <div class=\"form-group container home col-md-8 col-md-offset-2\">
        <div class=\"alert alert-warning\" role=\"alert\">
            <p> • login / pass = admin / admin </p>
            <p> • login / pass USER = licence / licence</p>
        </div>

         ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "
            <div class=\"alert alert-danger\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>

          ";
        }
        // line 19
        echo "

           <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                ";
        // line 33
        echo "
                <button type=\"submit\">login</button>


       
       ";
        // line 47
        echo "
        </form>


    </div>


";
        
        $__internal_2234b2165f1dfab9ca38a67a4957f4db411585616e4cb5f1bb4c7e72cfeb878d->leave($__internal_2234b2165f1dfab9ca38a67a4957f4db411585616e4cb5f1bb4c7e72cfeb878d_prof);

    }

    public function getTemplateName()
    {
        return "ConnexionBundle:connexion:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  91 => 33,  83 => 23,  78 => 21,  74 => 19,  68 => 16,  65 => 15,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Connexion{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="form-group container home col-md-8 col-md-offset-2">*/
/*         <div class="alert alert-warning" role="alert">*/
/*             <p> • login / pass = admin / admin </p>*/
/*             <p> • login / pass USER = licence / licence</p>*/
/*         </div>*/
/* */
/*          {% if error %}*/
/* */
/*             <div class="alert alert-danger">{{ error.message }}</div>*/
/* */
/*           {% endif %}*/
/* */
/* */
/*            <form action="{{ path('login_check') }}" method="post">*/
/*                 <label for="username">Username:</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*                 <label for="password">Password:</label>*/
/*                 <input type="password" id="password" name="_password" />*/
/* */
/*                 {#*/
/*                     If you want to control the URL the user*/
/*                     is redirected to on success (more details below)*/
/*                     <input type="hidden" name="_target_path" value="/account" />*/
/*                 #}*/
/* */
/*                 <button type="submit">login</button>*/
/* */
/* */
/*        */
/*        {#{{ form_label(form.username) }}*/
/*         {{ form_widget(form.username, { 'id': 'username' }) }}*/
/* */
/*         {{ form_label(form.password) }}*/
/*         {{ form_widget(form.password, { 'id': 'password' } )}}*/
/* */
/* */
/* */
/*         {{ form_widget(form.Connexion) }}#}*/
/* */
/*         </form>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
