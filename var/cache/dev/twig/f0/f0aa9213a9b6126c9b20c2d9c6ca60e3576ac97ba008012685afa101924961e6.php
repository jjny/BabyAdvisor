<?php

/* ConnexionBundle:connexion:login.html.twig */
class __TwigTemplate_de21710ca7e0256c2c6f6d1fd21828d48335b224e1a8e6f3f8f7cdf52705ef7e extends Twig_Template
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
        $__internal_3f0ee1e973cead330c638d6cbf554dbfd16df9587311f0104e2eb16ab442fc0a = $this->env->getExtension("native_profiler");
        $__internal_3f0ee1e973cead330c638d6cbf554dbfd16df9587311f0104e2eb16ab442fc0a->enter($__internal_3f0ee1e973cead330c638d6cbf554dbfd16df9587311f0104e2eb16ab442fc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ConnexionBundle:connexion:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f0ee1e973cead330c638d6cbf554dbfd16df9587311f0104e2eb16ab442fc0a->leave($__internal_3f0ee1e973cead330c638d6cbf554dbfd16df9587311f0104e2eb16ab442fc0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b5e88b0759e7466582cbdfea88e0b5e4ca50f0b2e3d026914d03b1f1bec2d23 = $this->env->getExtension("native_profiler");
        $__internal_6b5e88b0759e7466582cbdfea88e0b5e4ca50f0b2e3d026914d03b1f1bec2d23->enter($__internal_6b5e88b0759e7466582cbdfea88e0b5e4ca50f0b2e3d026914d03b1f1bec2d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_6b5e88b0759e7466582cbdfea88e0b5e4ca50f0b2e3d026914d03b1f1bec2d23->leave($__internal_6b5e88b0759e7466582cbdfea88e0b5e4ca50f0b2e3d026914d03b1f1bec2d23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90826addab6120f973764c3d7ffba7bdc26128bf56829aa88b840a1f44f9c758 = $this->env->getExtension("native_profiler");
        $__internal_90826addab6120f973764c3d7ffba7bdc26128bf56829aa88b840a1f44f9c758->enter($__internal_90826addab6120f973764c3d7ffba7bdc26128bf56829aa88b840a1f44f9c758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                ";
        // line 34
        echo "
                <button type=\"submit\">login</button>

              


       
       

        </form>


    </div>


";
        
        $__internal_90826addab6120f973764c3d7ffba7bdc26128bf56829aa88b840a1f44f9c758->leave($__internal_90826addab6120f973764c3d7ffba7bdc26128bf56829aa88b840a1f44f9c758_prof);

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
        return array (  92 => 34,  84 => 24,  78 => 21,  74 => 19,  68 => 16,  65 => 15,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/* */
/*            <label for="username">Username:</label>*/
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
/*               */
/* */
/* */
/*        */
/*        */
/* */
/*         </form>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
