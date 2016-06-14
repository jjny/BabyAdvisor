<?php

/* ::base.html.twig */
class __TwigTemplate_65bb63b07fc6db18163fccd52f56295c83ff080d6c5309323666031e5f7e5079 extends Twig_Template
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
        $__internal_62e3e7799e95f4a3af65d5d12d54ba846ac6833d4e61d4c6c03475bcf759cae7 = $this->env->getExtension("native_profiler");
        $__internal_62e3e7799e95f4a3af65d5d12d54ba846ac6833d4e61d4c6c03475bcf759cae7->enter($__internal_62e3e7799e95f4a3af65d5d12d54ba846ac6833d4e61d4c6c03475bcf759cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/home.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
    <div id=\"wrap\">

    <nav class=\"navbar navbar-default navbar-fixed-top\">
                <div class=\"container\">

                 <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-babyAdvisor.png"), "html", null, true);
        echo "\" class=\"\"><span class=\"glyphicons glyphicons-hand-left\"></span></img>
                </a>

                  <div class=\"navbar-right\">

                 <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> En ce moment </button>
                </a>

                       <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Meilleurs notes </button>
                </a>

                       <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Ajouter un article </button>

                </a>

                    </div>
                </div>

                   <div class=\"container\">


                 <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les activités</button>
                </a>

                       <a href=\"#\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les lieux </button>
                </a>

                       <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("membres");
        echo "\">
                    <button class=\"btn btn-xs text-center navbar-btn\"><span class=\"glyphicons glyphicons-hand-left\"></span> Les advisors </button>

                </a>


                  
                <div class=\"navbar-right\">

                      ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 63
            echo "
                      <table>

                        <tr>
                            <td  rowspan=\"2\">
                         <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/girl-icon.png"), "html", null, true);
            echo "\" ><span class=\"glyphicons glyphicons-hand-left\"></span></img>
                         </td>
                        <td>
                         <p>Bonjour truc </p>
                         </td>

                         </tr>
                         <tr>
                           <td>
                         <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("favoris");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Mes favoris </button>
                        </a>
                         </td>

                           <td>
                             <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("profil");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Mon profil </button>
                        </a>
                         </td>
                         <td>
                           <a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Déconnexion </button>
                        </a>
                         </td>
                           </tr>

                        </table>

                        ";
        } else {
            // line 97
            echo "
                          <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Login </button>
                      </a>

                             <a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">
                          <button class=\"btn btn-xs text-center navbar-btn \"><span class=\"glyphicons glyphicons-hand-left\"></span> Inscription </button>
                      </a>

                      ";
        }
        // line 107
        echo "                   </div>
                    


                </div>
            </nav>

        ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "       </div>

        <footer class=\"footer\">
         
         
          
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        <link type=\"text/javascript\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\">
        ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    </body>
</html>
";
        
        $__internal_62e3e7799e95f4a3af65d5d12d54ba846ac6833d4e61d4c6c03475bcf759cae7->leave($__internal_62e3e7799e95f4a3af65d5d12d54ba846ac6833d4e61d4c6c03475bcf759cae7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1af15ee402c936175ce353d760c1a2fb4c9c11272a9698a7e4b4b62510d3e8cd = $this->env->getExtension("native_profiler");
        $__internal_1af15ee402c936175ce353d760c1a2fb4c9c11272a9698a7e4b4b62510d3e8cd->enter($__internal_1af15ee402c936175ce353d760c1a2fb4c9c11272a9698a7e4b4b62510d3e8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1af15ee402c936175ce353d760c1a2fb4c9c11272a9698a7e4b4b62510d3e8cd->leave($__internal_1af15ee402c936175ce353d760c1a2fb4c9c11272a9698a7e4b4b62510d3e8cd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e51892fd9be47f23487e974de81820d329e82fdcf6c279d901dba5af3cbedab2 = $this->env->getExtension("native_profiler");
        $__internal_e51892fd9be47f23487e974de81820d329e82fdcf6c279d901dba5af3cbedab2->enter($__internal_e51892fd9be47f23487e974de81820d329e82fdcf6c279d901dba5af3cbedab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e51892fd9be47f23487e974de81820d329e82fdcf6c279d901dba5af3cbedab2->leave($__internal_e51892fd9be47f23487e974de81820d329e82fdcf6c279d901dba5af3cbedab2_prof);

    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d379b6a875bb9731fa6f0c04de39aff693bfcc8d3765965cfe5b193711937c8 = $this->env->getExtension("native_profiler");
        $__internal_3d379b6a875bb9731fa6f0c04de39aff693bfcc8d3765965cfe5b193711937c8->enter($__internal_3d379b6a875bb9731fa6f0c04de39aff693bfcc8d3765965cfe5b193711937c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 115
        echo "
        ";
        
        $__internal_3d379b6a875bb9731fa6f0c04de39aff693bfcc8d3765965cfe5b193711937c8->leave($__internal_3d379b6a875bb9731fa6f0c04de39aff693bfcc8d3765965cfe5b193711937c8_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a1761066dedd599ab9178a44220dbf9cd76bb20ec05611510d8ea339b308729 = $this->env->getExtension("native_profiler");
        $__internal_5a1761066dedd599ab9178a44220dbf9cd76bb20ec05611510d8ea339b308729->enter($__internal_5a1761066dedd599ab9178a44220dbf9cd76bb20ec05611510d8ea339b308729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a1761066dedd599ab9178a44220dbf9cd76bb20ec05611510d8ea339b308729->leave($__internal_5a1761066dedd599ab9178a44220dbf9cd76bb20ec05611510d8ea339b308729_prof);

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
        return array (  256 => 126,  248 => 115,  242 => 114,  231 => 12,  220 => 5,  211 => 127,  209 => 126,  205 => 125,  195 => 117,  193 => 114,  184 => 107,  176 => 102,  169 => 98,  166 => 97,  154 => 88,  146 => 83,  137 => 77,  125 => 68,  118 => 63,  116 => 62,  104 => 53,  69 => 21,  65 => 20,  56 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     <div id="wrap">*/
/* */
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*                 <div class="container">*/
/* */
/*                  <a href="{{ path ('homepage') }}">*/
/*                     <img src="{{ asset('images/logo-babyAdvisor.png') }}" class=""><span class="glyphicons glyphicons-hand-left"></span></img>*/
/*                 </a>*/
/* */
/*                   <div class="navbar-right">*/
/* */
/*                  <a href="#">*/
/*                     <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> En ce moment </button>*/
/*                 </a>*/
/* */
/*                        <a href="#">*/
/*                     <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Meilleurs notes </button>*/
/*                 </a>*/
/* */
/*                        <a href="#">*/
/*                     <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Ajouter un article </button>*/
/* */
/*                 </a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                    <div class="container">*/
/* */
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
/* */
/*                   */
/*                 <div class="navbar-right">*/
/* */
/*                       {% if is_granted("ROLE_USER") %}*/
/* */
/*                       <table>*/
/* */
/*                         <tr>*/
/*                             <td  rowspan="2">*/
/*                          <img src="{{ asset('images/girl-icon.png') }}" ><span class="glyphicons glyphicons-hand-left"></span></img>*/
/*                          </td>*/
/*                         <td>*/
/*                          <p>Bonjour truc </p>*/
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
/*                         {% else %}*/
/* */
/*                           <a href="{{ path ('login') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Login </button>*/
/*                       </a>*/
/* */
/*                              <a href="{{ path ('inscription') }}">*/
/*                           <button class="btn btn-xs text-center navbar-btn "><span class="glyphicons glyphicons-hand-left"></span> Inscription </button>*/
/*                       </a>*/
/* */
/*                       {% endif %}*/
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
/*        </div>*/
/* */
/*         <footer class="footer">*/
/*          */
/*          */
/*           */
/*         </footer>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*         <link type="text/javascript" href="{{ asset('js/bootstrap.js') }}">*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
