<?php

/* BabyAdvisorBundle:BabyAdvisor:admin.html.twig */
class __TwigTemplate_21f195c1e997356d2095a645e4750b38b24022c3f0fa4f6c0a6cfd6b8adbe82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BabyAdvisorBundle:BabyAdvisor:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f68bffbb35a9f0b25e8df3fde23321c3a0e588d1d6eabc67c17f3a8dd863f2 = $this->env->getExtension("native_profiler");
        $__internal_72f68bffbb35a9f0b25e8df3fde23321c3a0e588d1d6eabc67c17f3a8dd863f2->enter($__internal_72f68bffbb35a9f0b25e8df3fde23321c3a0e588d1d6eabc67c17f3a8dd863f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BabyAdvisorBundle:BabyAdvisor:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f68bffbb35a9f0b25e8df3fde23321c3a0e588d1d6eabc67c17f3a8dd863f2->leave($__internal_72f68bffbb35a9f0b25e8df3fde23321c3a0e588d1d6eabc67c17f3a8dd863f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaca67543da0febe2aa5a3305d4a0a5ce5372918a702aec8dec520431b90b20f = $this->env->getExtension("native_profiler");
        $__internal_eaca67543da0febe2aa5a3305d4a0a5ce5372918a702aec8dec520431b90b20f->enter($__internal_eaca67543da0febe2aa5a3305d4a0a5ce5372918a702aec8dec520431b90b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BabyAdvisor - Accueil";
        
        $__internal_eaca67543da0febe2aa5a3305d4a0a5ce5372918a702aec8dec520431b90b20f->leave($__internal_eaca67543da0febe2aa5a3305d4a0a5ce5372918a702aec8dec520431b90b20f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e3da45a346d552b3417f2828862ed6531bde0bc7a127cbf20d2cc1bb51b57a2 = $this->env->getExtension("native_profiler");
        $__internal_3e3da45a346d552b3417f2828862ed6531bde0bc7a127cbf20d2cc1bb51b57a2->enter($__internal_3e3da45a346d552b3417f2828862ed6531bde0bc7a127cbf20d2cc1bb51b57a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t
";
        
        $__internal_3e3da45a346d552b3417f2828862ed6531bde0bc7a127cbf20d2cc1bb51b57a2->leave($__internal_3e3da45a346d552b3417f2828862ed6531bde0bc7a127cbf20d2cc1bb51b57a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_73a6a40f04b8ccd462bf84f52bdfab9bd119330feb9849d317f9d3f542822f6e = $this->env->getExtension("native_profiler");
        $__internal_73a6a40f04b8ccd462bf84f52bdfab9bd119330feb9849d317f9d3f542822f6e->enter($__internal_73a6a40f04b8ccd462bf84f52bdfab9bd119330feb9849d317f9d3f542822f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t <div class=\"container home\">
\t  <p> admin page</p>

 \t\t<button id=\"allBtn\" class=\"btn btn-xs \"><a href=\"#\">Tous les signalements</a> </button>
        <button id=\"articleBtn\" class=\"btn btn-xs active \"><a href=\"#\">Articles</a> </button>
        <button id=\"commentaireBtn\" class=\"btn btn-xs active \"><a href=\"#\">Commentaires</a> </button>
        <button id=\"photoBtn\" class=\"btn btn-xs active \"><a href=\"#\">Photos</a> </button>
        <button id=\"advisorBtn\" class=\"btn btn-xs active \"><a href=\"#\">Advisors</a> </button>


\t  <table id=\"tableSignalements\" class=\"table allTable\">
                <tr>
                    <th>signalement de</th>
                    <th>signaler par</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>
                        type :article, commentaire, photo <br/>
                        son id <br/>
                        id du créateur du post 
                    </td>
                    <td>                          \t
                        id de l'advisor          
                    </td>
                    <td>                          \t
                        traité                              
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-xs  btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Voir   <span class=\"caret\"></span>                        
                            </button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                <li>
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
                                        <button class=\"btn btn-xs btn-block\">Voir</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                                <li>
                                    <form method=\"post\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_suppresion");
        echo "\">
                                        <button class=\"btn btn-xs btn-block\">Supprimer</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                            </ul>
                        </div>
\t\t\t\t\t</td>
                </tr>               
            </table>

             <table id=\"tableSignalements\" class=\"table articlesTable\">
                <tr>
                    <th>signalement de</th>
                    <th>signaler par</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                        <tr>
                            <td>
                                Aritcle <br/>
                                idArticle <br/>
                                idUser :créateur du post 
                            </td>
                            <td>                          \t
                            \tidUser:signaleur du post
                                
                            </td>
                            <td>                          \t
                            \ttraité
                                
                    </td>

                    <td>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-xs  btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Voir   <span class=\"caret\"></span>                        
                            </button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                <li>
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
                                        <button class=\"btn btn-xs btn-block\">Voir</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                                <li>
                                    <form method=\"post\" action=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("admin_suppresion");
        echo "\">
                                        <button class=\"btn btn-xs btn-block\">Supprimer</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                            </ul>
                        </div>
\t\t\t\t\t</td>
                </tr>               
            </table>

             <table id=\"tableSignalements\" class=\"table commentairesTable\">
                <tr>
                    <th>signalement de</th>
                    <th>signaler par</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>
                        Commentaire <br/>
                        son id <br/>
                        id du créateur du post 
                    </td>
                    <td>                          \t
                        idUser:signaleur du post       
                    </td>
                    <td>                          \t
                        traité                              
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-xs  btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Voir   <span class=\"caret\"></span>                        
                            </button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                <li>
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
                                        <button class=\"btn btn-xs btn-block\">Voir</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                                <li>
                                    <form method=\"post\" action=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("admin_suppresion");
        echo "\">
                                        <button class=\"btn btn-xs btn-block\">Supprimer</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                            </ul>
                        </div>
\t\t\t\t\t</td>
                </tr>               
            </table>

            <table id=\"tableSignalements\" class=\"table photosTable\">
                <tr>
                    <th>signalement de</th>
                    <th>signaler par</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>
                        Photo <br/>
                        son id <br/>
                        id du créateur du post 
                    </td>
                    <td>                          \t
                        idUser:signaleur du post        
                    </td>
                    <td>                          \t
                        traité                              
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-xs  btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Voir   <span class=\"caret\"></span>                        
                            </button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                <li>
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
                                        <button class=\"btn btn-xs btn-block\">Voir</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                                <li>
                                    <form method=\"post\" action=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("admin_suppresion");
        echo "\">
                                        <button class=\"btn btn-xs btn-block\">Supprimer</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                            </ul>
                        </div>
\t\t\t\t\t</td>
                </tr>               
            </table>

            <table id=\"tableSignalements\" class=\"table advisorsTable\">
                <tr>
                    <th>signalement de</th>
                    <th>signaler par</th>
                    <th>Etat</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>
                        son pseudo <br/>
                        son id <br/> 
                    </td>
                    <td>                          \t
                        idUser:signaleur        
                    </td>
                    <td>                          \t
                        signalé x fois                             
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-xs  btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Voir   <span class=\"caret\"></span>                        
                            </button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                <li>
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
                                        <button class=\"btn btn-xs btn-block\">Voir</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                                <li>
                                    <form method=\"post\" action=\"";
        // line 218
        echo $this->env->getExtension('routing')->getPath("admin_suppresion");
        echo "\">
                                        <button class=\"btn btn-xs btn-block\">Supprimer</button>
                                    </form>
\t\t\t\t\t\t\t\t</li>
                            </ul>
                        </div>
\t\t\t\t\t</td>
                </tr>               
            </table>



\t  </div >



";
        
        $__internal_73a6a40f04b8ccd462bf84f52bdfab9bd119330feb9849d317f9d3f542822f6e->leave($__internal_73a6a40f04b8ccd462bf84f52bdfab9bd119330feb9849d317f9d3f542822f6e_prof);

    }

    // line 236
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0c1b440d905f15c09b12cebaf923e3575bccc09985cd566d326b6033ac42b5f = $this->env->getExtension("native_profiler");
        $__internal_e0c1b440d905f15c09b12cebaf923e3575bccc09985cd566d326b6033ac42b5f->enter($__internal_e0c1b440d905f15c09b12cebaf923e3575bccc09985cd566d326b6033ac42b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 237
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.articlesTable').hide();
            \$('.commentairesTable').hide();
            \$('.photosTable').hide();
            \$('.advisorsTable').hide();

        });

        \$(document).on('click', 'button', function () {
            var idButton = this.id;
            //alert(idButton);

            if(idButton==\"articleBtn\"){
                //\$('#tableDemandes').addClass('articlesTable').removeClass('allTable');
                \$('.articlesTable').show();
                \$('.allTable').hide();
                \$('.commentairesTable').hide();
                \$('.photosTable').hide();
                \$('.advisorsTable').hide();

            }

            if(idButton==\"allBtn\"){
               // \$('#tableDemandes').addClass('allTable').removeClass('articlesTable');
                \$('.allTable').show();
                \$('.articlesTable').hide();
                \$('.commentairesTable').hide();
                \$('.photosTable').hide();
                \$('.advisorsTable').hide();
            }

            if(idButton==\"commentaireBtn\"){
               // \$('#tableDemandes').addClass('allTable').removeClass('articlesTable');
                \$('.commentairesTable').show();
                \$('.articlesTable').hide();
                \$('.allTable').hide();
                \$('.photosTable').hide();
                \$('.advisorsTable').hide();
            }

             if(idButton==\"photoBtn\"){
               // \$('#tableDemandes').addClass('allTable').removeClass('articlesTable');
                \$('.photosTable').show();
                \$('.articlesTable').hide();
                \$('.allTable').hide();
                \$('.commentairesTable').hide();
                \$('.advisorsTable').hide();
            }

             if(idButton==\"advisorBtn\"){
               // \$('#tableDemandes').addClass('allTable').removeClass('articlesTable');
                \$('.advisorsTable').show();
                \$('.articlesTable').hide();
                \$('.allTable').hide();
                \$('.commentairesTable').hide();
                \$('.photosTable').hide();
            }

        });



    </script>
";
        
        $__internal_e0c1b440d905f15c09b12cebaf923e3575bccc09985cd566d326b6033ac42b5f->leave($__internal_e0c1b440d905f15c09b12cebaf923e3575bccc09985cd566d326b6033ac42b5f_prof);

    }

    public function getTemplateName()
    {
        return "BabyAdvisorBundle:BabyAdvisor:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 237,  315 => 236,  291 => 218,  248 => 178,  204 => 137,  160 => 96,  113 => 52,  69 => 10,  63 => 9,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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
/* 	  <p> admin page</p>*/
/* */
/*  		<button id="allBtn" class="btn btn-xs "><a href="#">Tous les signalements</a> </button>*/
/*         <button id="articleBtn" class="btn btn-xs active "><a href="#">Articles</a> </button>*/
/*         <button id="commentaireBtn" class="btn btn-xs active "><a href="#">Commentaires</a> </button>*/
/*         <button id="photoBtn" class="btn btn-xs active "><a href="#">Photos</a> </button>*/
/*         <button id="advisorBtn" class="btn btn-xs active "><a href="#">Advisors</a> </button>*/
/* */
/* */
/* 	  <table id="tableSignalements" class="table allTable">*/
/*                 <tr>*/
/*                     <th>signalement de</th>*/
/*                     <th>signaler par</th>*/
/*                     <th>Etat</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         type :article, commentaire, photo <br/>*/
/*                         son id <br/>*/
/*                         id du créateur du post */
/*                     </td>*/
/*                     <td>                          	*/
/*                         id de l'advisor          */
/*                     </td>*/
/*                     <td>                          	*/
/*                         traité                              */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         Voir   <span class="caret"></span>                        */
/*                             </button>*/
/* 							<ul class="dropdown-menu">*/
/*                                 <li>*/
/* 									<form method="post" action="#">*/
/*                                         <button class="btn btn-xs btn-block">Voir</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                                 <li>*/
/*                                     <form method="post" action="{{path ('admin_suppresion')}}">*/
/*                                         <button class="btn btn-xs btn-block">Supprimer</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                             </ul>*/
/*                         </div>*/
/* 					</td>*/
/*                 </tr>               */
/*             </table>*/
/* */
/*              <table id="tableSignalements" class="table articlesTable">*/
/*                 <tr>*/
/*                     <th>signalement de</th>*/
/*                     <th>signaler par</th>*/
/*                     <th>Etat</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 Aritcle <br/>*/
/*                                 idArticle <br/>*/
/*                                 idUser :créateur du post */
/*                             </td>*/
/*                             <td>                          	*/
/*                             	idUser:signaleur du post*/
/*                                 */
/*                             </td>*/
/*                             <td>                          	*/
/*                             	traité*/
/*                                 */
/*                     </td>*/
/* */
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         Voir   <span class="caret"></span>                        */
/*                             </button>*/
/* 							<ul class="dropdown-menu">*/
/*                                 <li>*/
/* 									<form method="post" action="#">*/
/*                                         <button class="btn btn-xs btn-block">Voir</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                                 <li>*/
/*                                     <form method="post" action="{{path ('admin_suppresion')}}">*/
/*                                         <button class="btn btn-xs btn-block">Supprimer</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                             </ul>*/
/*                         </div>*/
/* 					</td>*/
/*                 </tr>               */
/*             </table>*/
/* */
/*              <table id="tableSignalements" class="table commentairesTable">*/
/*                 <tr>*/
/*                     <th>signalement de</th>*/
/*                     <th>signaler par</th>*/
/*                     <th>Etat</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Commentaire <br/>*/
/*                         son id <br/>*/
/*                         id du créateur du post */
/*                     </td>*/
/*                     <td>                          	*/
/*                         idUser:signaleur du post       */
/*                     </td>*/
/*                     <td>                          	*/
/*                         traité                              */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         Voir   <span class="caret"></span>                        */
/*                             </button>*/
/* 							<ul class="dropdown-menu">*/
/*                                 <li>*/
/* 									<form method="post" action="#">*/
/*                                         <button class="btn btn-xs btn-block">Voir</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                                 <li>*/
/*                                     <form method="post" action="{{path ('admin_suppresion')}}">*/
/*                                         <button class="btn btn-xs btn-block">Supprimer</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                             </ul>*/
/*                         </div>*/
/* 					</td>*/
/*                 </tr>               */
/*             </table>*/
/* */
/*             <table id="tableSignalements" class="table photosTable">*/
/*                 <tr>*/
/*                     <th>signalement de</th>*/
/*                     <th>signaler par</th>*/
/*                     <th>Etat</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Photo <br/>*/
/*                         son id <br/>*/
/*                         id du créateur du post */
/*                     </td>*/
/*                     <td>                          	*/
/*                         idUser:signaleur du post        */
/*                     </td>*/
/*                     <td>                          	*/
/*                         traité                              */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         Voir   <span class="caret"></span>                        */
/*                             </button>*/
/* 							<ul class="dropdown-menu">*/
/*                                 <li>*/
/* 									<form method="post" action="#">*/
/*                                         <button class="btn btn-xs btn-block">Voir</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                                 <li>*/
/*                                     <form method="post" action="{{path ('admin_suppresion')}}">*/
/*                                         <button class="btn btn-xs btn-block">Supprimer</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                             </ul>*/
/*                         </div>*/
/* 					</td>*/
/*                 </tr>               */
/*             </table>*/
/* */
/*             <table id="tableSignalements" class="table advisorsTable">*/
/*                 <tr>*/
/*                     <th>signalement de</th>*/
/*                     <th>signaler par</th>*/
/*                     <th>Etat</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         son pseudo <br/>*/
/*                         son id <br/> */
/*                     </td>*/
/*                     <td>                          	*/
/*                         idUser:signaleur        */
/*                     </td>*/
/*                     <td>                          	*/
/*                         signalé x fois                             */
/*                     </td>*/
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             <button type="button" class="btn btn-xs  btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         Voir   <span class="caret"></span>                        */
/*                             </button>*/
/* 							<ul class="dropdown-menu">*/
/*                                 <li>*/
/* 									<form method="post" action="#">*/
/*                                         <button class="btn btn-xs btn-block">Voir</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                                 <li>*/
/*                                     <form method="post" action="{{path ('admin_suppresion')}}">*/
/*                                         <button class="btn btn-xs btn-block">Supprimer</button>*/
/*                                     </form>*/
/* 								</li>*/
/*                             </ul>*/
/*                         </div>*/
/* 					</td>*/
/*                 </tr>               */
/*             </table>*/
/* */
/* */
/* */
/* 	  </div >*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){*/
/*             $('.articlesTable').hide();*/
/*             $('.commentairesTable').hide();*/
/*             $('.photosTable').hide();*/
/*             $('.advisorsTable').hide();*/
/* */
/*         });*/
/* */
/*         $(document).on('click', 'button', function () {*/
/*             var idButton = this.id;*/
/*             //alert(idButton);*/
/* */
/*             if(idButton=="articleBtn"){*/
/*                 //$('#tableDemandes').addClass('articlesTable').removeClass('allTable');*/
/*                 $('.articlesTable').show();*/
/*                 $('.allTable').hide();*/
/*                 $('.commentairesTable').hide();*/
/*                 $('.photosTable').hide();*/
/*                 $('.advisorsTable').hide();*/
/* */
/*             }*/
/* */
/*             if(idButton=="allBtn"){*/
/*                // $('#tableDemandes').addClass('allTable').removeClass('articlesTable');*/
/*                 $('.allTable').show();*/
/*                 $('.articlesTable').hide();*/
/*                 $('.commentairesTable').hide();*/
/*                 $('.photosTable').hide();*/
/*                 $('.advisorsTable').hide();*/
/*             }*/
/* */
/*             if(idButton=="commentaireBtn"){*/
/*                // $('#tableDemandes').addClass('allTable').removeClass('articlesTable');*/
/*                 $('.commentairesTable').show();*/
/*                 $('.articlesTable').hide();*/
/*                 $('.allTable').hide();*/
/*                 $('.photosTable').hide();*/
/*                 $('.advisorsTable').hide();*/
/*             }*/
/* */
/*              if(idButton=="photoBtn"){*/
/*                // $('#tableDemandes').addClass('allTable').removeClass('articlesTable');*/
/*                 $('.photosTable').show();*/
/*                 $('.articlesTable').hide();*/
/*                 $('.allTable').hide();*/
/*                 $('.commentairesTable').hide();*/
/*                 $('.advisorsTable').hide();*/
/*             }*/
/* */
/*              if(idButton=="advisorBtn"){*/
/*                // $('#tableDemandes').addClass('allTable').removeClass('articlesTable');*/
/*                 $('.advisorsTable').show();*/
/*                 $('.articlesTable').hide();*/
/*                 $('.allTable').hide();*/
/*                 $('.commentairesTable').hide();*/
/*                 $('.photosTable').hide();*/
/*             }*/
/* */
/*         });*/
/* */
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
