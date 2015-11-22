<?php

/* default/index.html.twig */
class __TwigTemplate_a2db2e5c256f1f741cff1ab65e1bf2840c0df2b34df4930b6b07dc5e4794300a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\" style=\"background-image: src(\"http://puu.sh/luW4V/b5a3e3b104.png\")\">
            <div id=\"welcome\">
                <h1><span>Consultez vos notes</span> </h1>
            </div>
            <aside class=\"main-sidebar\">
                <section class=\"sidebar\" style=\"height:auto;\">
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">MAIN NAVIGATION</li>
                        <li class=\"active treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"lesson\"><i class=\"fa fa-circle-o\"></i> Leçons </a></li>
                                <li><a href=\"lesson/create\"><i class=\"fa fa-circle-o\"></i> Créer une leçon </a></li>
                                <li class=\"active\"><a href=\"grade\"><i class=\"fa fa-circle-o\"></i> Notes </a></li>
                                <li><a href=\"grade/create\"><i class=\"fa fa-circle-o\"></i> Mettre une note </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Pas de compte, pas de notes</li>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"register\"><i class=\"fa fa-circle-o\"></i> Inscris toi ? </a></li>
                                <li><a href=\"login\"><i class=\"fa fa-circle-o\"></i> Co toi ? </a></li>
                            </ul>
                    </ul>
                </section>
            </aside>
            <div id=\"status\">
                <p>
                    <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    Your application is ready to start working on it at:
                    <code>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : null), "html", null, true);
        echo "/</code>
                </p>
            </div>


        </div>
    </div>
";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 49
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 49,  81 => 48,  69 => 39,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container" style="background-image: src("http://puu.sh/luW4V/b5a3e3b104.png")">*/
/*             <div id="welcome">*/
/*                 <h1><span>Consultez vos notes</span> </h1>*/
/*             </div>*/
/*             <aside class="main-sidebar">*/
/*                 <section class="sidebar" style="height:auto;">*/
/*                     <ul class="sidebar-menu">*/
/*                         <li class="header">MAIN NAVIGATION</li>*/
/*                         <li class="active treeview">*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu">*/
/*                                 <li><a href="lesson"><i class="fa fa-circle-o"></i> Leçons </a></li>*/
/*                                 <li><a href="lesson/create"><i class="fa fa-circle-o"></i> Créer une leçon </a></li>*/
/*                                 <li class="active"><a href="grade"><i class="fa fa-circle-o"></i> Notes </a></li>*/
/*                                 <li><a href="grade/create"><i class="fa fa-circle-o"></i> Mettre une note </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <ul class="sidebar-menu">*/
/*                         <li class="header">Pas de compte, pas de notes</li>*/
/*                             <ul class="treeview-menu">*/
/*                                 <li><a href="register"><i class="fa fa-circle-o"></i> Inscris toi ? </a></li>*/
/*                                 <li><a href="login"><i class="fa fa-circle-o"></i> Co toi ? </a></li>*/
/*                             </ul>*/
/*                     </ul>*/
/*                 </section>*/
/*             </aside>*/
/*             <div id="status">*/
/*                 <p>*/
/*                     <svg id="icon-status" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#759E1A"/></svg>*/
/* */
/*                     Your application is ready to start working on it at:*/
/*                     <code>{{ base_dir }}/</code>*/
/*                 </p>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
