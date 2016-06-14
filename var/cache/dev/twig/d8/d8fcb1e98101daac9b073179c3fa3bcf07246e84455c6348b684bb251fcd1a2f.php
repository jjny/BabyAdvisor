<?php

/* ::base.html.twig */
class __TwigTemplate_4b768f3cc6e1bfcd0635864f2605723001d59a7db94738dfb1839b58d29af70c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebbca86ba96cde47518b7dc2a98a796fb1c2a5a5e3a71315924ee33a87977ac7 = $this->env->getExtension("native_profiler");
        $__internal_ebbca86ba96cde47518b7dc2a98a796fb1c2a5a5e3a71315924ee33a87977ac7->enter($__internal_ebbca86ba96cde47518b7dc2a98a796fb1c2a5a5e3a71315924ee33a87977ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>


        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e997b03_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e997b03_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e997b03_part_1_base_1.css");
            // line 19
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "e997b03_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e997b03_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e997b03_part_1_bootstrap.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "e997b03_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e997b03_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e997b03_part_1_home_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "e997b03"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e997b03") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e997b03.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
        ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b2924b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2924b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b2924b_part_1_bootstrap.min_1.js");
            // line 24
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8b2924b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2924b_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b2924b_part_1_jquery-2.1.1.min_2.js");
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "8b2924b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2924b_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b2924b_part_1_jquery.min_3.js");
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "8b2924b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2924b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b2924b.js");
            echo "          <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "   
        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    </head>
    <body>

    <nav id=\"navigation-bar\" class=\"navbar navbar-default navbar-fixed-top\">
                <div id=\"navbar-up\" class=\"container\">

                 <a id=\"logo\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-babyAdvisor.png"), "html", null, true);
        echo "\" class=\"\"><span class=\"glyphicons glyphicons-hand-left\"></span></img>
                </a>

                  <div id=\"right-bar\" class=\"navbar-right\">

                 <a href=\"#\">
                    <button id=\"now\" class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> En ce moment </button>
                </a>

                       <a href=\"#\">
                    <button id=\"best-notes\" class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Meilleurs notes </button>
                </a>

                       <a href=\"#\">
                    <button id=\"new-article\" class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Ajouter un article </button>

                </a>

                    </div>
                </div>

        <div id=\"navbar-bottom\" class=\"container\">
            <div id=\"left-bar\">

                 <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les activités</button>
                </a>

                       <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les lieux </button>
                </a>

                       <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("membres");
        echo "\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les advisors </button>

                </a>

            </div>
                  
                <div id=\"user-bar\" class=\"navbar-right\">

                 ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 77
            echo "
                      <table>

                        <tr>
                            <td  rowspan=\"2\">
                         <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man-user.png"), "html", null, true);
            echo "\" ><span class=\"glyphicons glyphicons-hand-left\"></span></img>
                         </td>
                        <td colspan=\"2\">
                         <p class=\"helloUser\">Bonjour truc </p>
                         </td>

                         </tr>
                         <tr>
                           <td>
                         <a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("favoris");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Mes favoris </button>
                        </a>
                         </td>

                           <td>
                             <a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("profil");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Mon profil </button>
                        </a>
                         </td>
                         <td>
                           <a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Déconnexion </button>
                        </a>
                         </td>
                           </tr>

                        </table>

                        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 111
            echo "                    <table>

                        <tr>
                            <td  rowspan=\"2\">
                         <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man-user.png"), "html", null, true);
            echo "\" ><span class=\"glyphicons glyphicons-hand-left\"></span></img>
                         </td>
                        <td colspan=\"2\" >
                         <p class=\"helloUser\" >Bonjour Administrateur</p>
                         </td>

                         </tr>
                         <tr>
                           <td>
                         <a href=\"#\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Les signalements </button>
                        </a>
                         </td>

                           <td>
                             <a href=\"#\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> L'historique</button>
                        </a>
                         </td>
                         <td>
                           <a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Déconnexion </button>
                        </a>
                         </td>
                           </tr>

                        </table>


                        ";
        } else {
            // line 145
            echo "
                          <a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Login </button>
                      </a>

                             <a href=\"";
            // line 150
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Inscription </button>
                      </a>
                          
                       ";
        }
        // line 154
        echo " 

                   </div>
                    


                </div>
            </nav>

        ";
        // line 163
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "       

        <footer class=\"footer\">
           <div class=\"container\">
            <table>
            <tr>
                <td id=\"left-footer\">
                    <div id=\"social\">
                        <a href=\"\" rel=\"\" target=\"\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fb-logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        <a href=\"\" rel=\"\" target=\"\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/twitter-logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                        <a href=\"\" rel=\"\" target=\"\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    </div>
                    <div id=\"contact\">
                        <a href=\"\" rel=\"\" target=\"\">Contacts</a>
                        <a href=\"\" rel=\"\" target=\"\">Qui sommes nous</a>
                    </div>
              </td>
              <td id=\"centreFooter\">
                <a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" rel=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-babyAdvisor.png"), "html", null, true);
        echo "\" alt=\"\" width=\"170\"/></a>
                <p>© Copyright 2016</p>
              </td>
              <td id=\"legal\">
                <a href=\"\" rel=\"\" target=\"\">Mentions legales</a>
              </td>
            </tr>
        </table> 
        </div>       
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        <link type=\"text/javascript\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\">
        ";
        // line 196
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "    </body>
</html>
";
        
        $__internal_ebbca86ba96cde47518b7dc2a98a796fb1c2a5a5e3a71315924ee33a87977ac7->leave($__internal_ebbca86ba96cde47518b7dc2a98a796fb1c2a5a5e3a71315924ee33a87977ac7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41568677caf881fa7bdcf7c51f8bb1e0805d59391c1f114fae63ee98773b56d6 = $this->env->getExtension("native_profiler");
        $__internal_41568677caf881fa7bdcf7c51f8bb1e0805d59391c1f114fae63ee98773b56d6->enter($__internal_41568677caf881fa7bdcf7c51f8bb1e0805d59391c1f114fae63ee98773b56d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_41568677caf881fa7bdcf7c51f8bb1e0805d59391c1f114fae63ee98773b56d6->leave($__internal_41568677caf881fa7bdcf7c51f8bb1e0805d59391c1f114fae63ee98773b56d6_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_902bbb9824982c890fa115823fc1bc29949625406f7bac99bbd0d86743191153 = $this->env->getExtension("native_profiler");
        $__internal_902bbb9824982c890fa115823fc1bc29949625406f7bac99bbd0d86743191153->enter($__internal_902bbb9824982c890fa115823fc1bc29949625406f7bac99bbd0d86743191153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_902bbb9824982c890fa115823fc1bc29949625406f7bac99bbd0d86743191153->leave($__internal_902bbb9824982c890fa115823fc1bc29949625406f7bac99bbd0d86743191153_prof);

    }

    // line 163
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cf6e54a405ab579aaef24aceb8ed867f5978b73be82d6614e011d3a5cf3bdd = $this->env->getExtension("native_profiler");
        $__internal_69cf6e54a405ab579aaef24aceb8ed867f5978b73be82d6614e011d3a5cf3bdd->enter($__internal_69cf6e54a405ab579aaef24aceb8ed867f5978b73be82d6614e011d3a5cf3bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 164
        echo "
        ";
        
        $__internal_69cf6e54a405ab579aaef24aceb8ed867f5978b73be82d6614e011d3a5cf3bdd->leave($__internal_69cf6e54a405ab579aaef24aceb8ed867f5978b73be82d6614e011d3a5cf3bdd_prof);

    }

    // line 196
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7ddc7d0f6d6f2158236410f7f1a8cbf0feafe3c6c168269224fda3e01edbae9 = $this->env->getExtension("native_profiler");
        $__internal_f7ddc7d0f6d6f2158236410f7f1a8cbf0feafe3c6c168269224fda3e01edbae9->enter($__internal_f7ddc7d0f6d6f2158236410f7f1a8cbf0feafe3c6c168269224fda3e01edbae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7ddc7d0f6d6f2158236410f7f1a8cbf0feafe3c6c168269224fda3e01edbae9->leave($__internal_f7ddc7d0f6d6f2158236410f7f1a8cbf0feafe3c6c168269224fda3e01edbae9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 196,  394 => 164,  388 => 163,  377 => 27,  366 => 5,  357 => 197,  355 => 196,  351 => 195,  335 => 184,  324 => 176,  320 => 175,  316 => 174,  306 => 166,  304 => 163,  293 => 154,  285 => 150,  278 => 146,  275 => 145,  262 => 135,  239 => 115,  233 => 111,  221 => 102,  213 => 97,  204 => 91,  192 => 82,  185 => 77,  183 => 76,  171 => 67,  136 => 35,  132 => 34,  124 => 28,  122 => 27,  119 => 26,  93 => 24,  89 => 22,  86 => 21,  60 => 19,  56 => 17,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/* */
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>*/
/* */
/* */
/*         {% stylesheets*/
/*             '@BabyAdvisorBundle/Resources/public/css/*' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% javascripts*/
/*             '@BabyAdvisorBundle/Resources/public/js/*' %}*/
/*           <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*    */
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/*     <nav id="navigation-bar" class="navbar navbar-default navbar-fixed-top">*/
/*                 <div id="navbar-up" class="container">*/
/* */
/*                  <a id="logo" href="{{ path ('homepage') }}">*/
/*                     <img src="{{ asset('images/logo-babyAdvisor.png') }}" class=""><span class="glyphicons glyphicons-hand-left"></span></img>*/
/*                 </a>*/
/* */
/*                   <div id="right-bar" class="navbar-right">*/
/* */
/*                  <a href="#">*/
/*                     <button id="now" class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> En ce moment </button>*/
/*                 </a>*/
/* */
/*                        <a href="#">*/
/*                     <button id="best-notes" class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Meilleurs notes </button>*/
/*                 </a>*/
/* */
/*                        <a href="#">*/
/*                     <button id="new-article" class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Ajouter un article </button>*/
/* */
/*                 </a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*         <div id="navbar-bottom" class="container">*/
/*             <div id="left-bar">*/
/* */
/*                  <a href="#">*/
/*                     <button class="btn btn-xs text-center navbar-btn"><span class="glyphicons glyphicons-hand-left"></span> Les activités</button>*/
/*                 </a>*/
/* */
/*                        <a href="#">*/
/*                     <button class="btn btn-xs text-center navbar-btn"><span class="glyphicons glyphicons-hand-left"></span> Les lieux </button>*/
/*                 </a>*/
/* */
/*                        <a href="{{ path ('membres') }}">*/
/*                     <button class="btn btn-xs text-center navbar-btn"><span class="glyphicons glyphicons-hand-left"></span> Les advisors </button>*/
/* */
/*                 </a>*/
/* */
/*             </div>*/
/*                   */
/*                 <div id="user-bar" class="navbar-right">*/
/* */
/*                  {% if is_granted("ROLE_USER") %}*/
/* */
/*                       <table>*/
/* */
/*                         <tr>*/
/*                             <td  rowspan="2">*/
/*                          <img src="{{ asset('images/man-user.png') }}" ><span class="glyphicons glyphicons-hand-left"></span></img>*/
/*                          </td>*/
/*                         <td colspan="2">*/
/*                          <p class="helloUser">Bonjour truc </p>*/
/*                          </td>*/
/* */
/*                          </tr>*/
/*                          <tr>*/
/*                            <td>*/
/*                          <a href="{{ path ('favoris') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Mes favoris </button>*/
/*                         </a>*/
/*                          </td>*/
/* */
/*                            <td>*/
/*                              <a href="{{ path ('profil') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Mon profil </button>*/
/*                         </a>*/
/*                          </td>*/
/*                          <td>*/
/*                            <a href="{{ path ('logout') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Déconnexion </button>*/
/*                         </a>*/
/*                          </td>*/
/*                            </tr>*/
/* */
/*                         </table>*/
/* */
/*                         {% elseif is_granted("ROLE_ADMIN") %}*/
/*                     <table>*/
/* */
/*                         <tr>*/
/*                             <td  rowspan="2">*/
/*                          <img src="{{ asset('images/man-user.png') }}" ><span class="glyphicons glyphicons-hand-left"></span></img>*/
/*                          </td>*/
/*                         <td colspan="2" >*/
/*                          <p class="helloUser" >Bonjour Administrateur</p>*/
/*                          </td>*/
/* */
/*                          </tr>*/
/*                          <tr>*/
/*                            <td>*/
/*                          <a href="#">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Les signalements </button>*/
/*                         </a>*/
/*                          </td>*/
/* */
/*                            <td>*/
/*                              <a href="#">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> L'historique</button>*/
/*                         </a>*/
/*                          </td>*/
/*                          <td>*/
/*                            <a href="{{ path ('logout') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Déconnexion </button>*/
/*                         </a>*/
/*                          </td>*/
/*                            </tr>*/
/* */
/*                         </table>*/
/* */
/* */
/*                         {% else %}*/
/* */
/*                           <a href="{{ path ('login') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Login </button>*/
/*                       </a>*/
/* */
/*                              <a href="{{ path ('inscription') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Inscription </button>*/
/*                       </a>*/
/*                           */
/*                        {% endif %} */
/* */
/*                    </div>*/
/*                     */
/* */
/* */
/*                 </div>*/
/*             </nav>*/
/* */
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*        */
/* */
/*         <footer class="footer">*/
/*            <div class="container">*/
/*             <table>*/
/*             <tr>*/
/*                 <td id="left-footer">*/
/*                     <div id="social">*/
/*                         <a href="" rel="" target=""><img src="{{ asset('images/fb-logo.png') }}" alt="" /></a>*/
/*                         <a href="" rel="" target=""><img src="{{ asset('images/twitter-logo.png') }}" alt="" /></a>*/
/*                         <a href="" rel="" target=""><img src="{{ asset('images/instagram-logo.png') }}" alt="" /></a>*/
/*                     </div>*/
/*                     <div id="contact">*/
/*                         <a href="" rel="" target="">Contacts</a>*/
/*                         <a href="" rel="" target="">Qui sommes nous</a>*/
/*                     </div>*/
/*               </td>*/
/*               <td id="centreFooter">*/
/*                 <a href="{{ path ('homepage') }}" rel=""><img src="{{ asset('images/logo-babyAdvisor.png') }}" alt="" width="170"/></a>*/
/*                 <p>© Copyright 2016</p>*/
/*               </td>*/
/*               <td id="legal">*/
/*                 <a href="" rel="" target="">Mentions legales</a>*/
/*               </td>*/
/*             </tr>*/
/*         </table> */
/*         </div>       */
/*         </footer>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*         <link type="text/javascript" href="{{ asset('js/bootstrap.js') }}">*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
