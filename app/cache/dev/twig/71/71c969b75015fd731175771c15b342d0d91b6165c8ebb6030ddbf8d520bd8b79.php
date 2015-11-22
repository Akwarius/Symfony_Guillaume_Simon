<?php

/* default/index.html.twig */
class __TwigTemplate_5eba3990797440f971fc55f329a476c1a1787be4235b3b92cf3bc54607961005 extends Twig_Template
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
        $__internal_fc5c24cc06a985711895c0b75cd305aaf8c295f32a7b97a2b223087399eabd2a = $this->env->getExtension("native_profiler");
        $__internal_fc5c24cc06a985711895c0b75cd305aaf8c295f32a7b97a2b223087399eabd2a->enter($__internal_fc5c24cc06a985711895c0b75cd305aaf8c295f32a7b97a2b223087399eabd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5c24cc06a985711895c0b75cd305aaf8c295f32a7b97a2b223087399eabd2a->leave($__internal_fc5c24cc06a985711895c0b75cd305aaf8c295f32a7b97a2b223087399eabd2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98f2bddbbfa68fa35a55e4c147996f7de042bcc5673c6bf864e5bd4cfcd518eb = $this->env->getExtension("native_profiler");
        $__internal_98f2bddbbfa68fa35a55e4c147996f7de042bcc5673c6bf864e5bd4cfcd518eb->enter($__internal_98f2bddbbfa68fa35a55e4c147996f7de042bcc5673c6bf864e5bd4cfcd518eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "/</code>
                </p>
            </div>


        </div>
    </div>
";
        
        $__internal_98f2bddbbfa68fa35a55e4c147996f7de042bcc5673c6bf864e5bd4cfcd518eb->leave($__internal_98f2bddbbfa68fa35a55e4c147996f7de042bcc5673c6bf864e5bd4cfcd518eb_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff4fd0352ecdc6fb8e2aa6fa19a80963b43f5254d881bd5b60ba1d1d1346e011 = $this->env->getExtension("native_profiler");
        $__internal_ff4fd0352ecdc6fb8e2aa6fa19a80963b43f5254d881bd5b60ba1d1d1346e011->enter($__internal_ff4fd0352ecdc6fb8e2aa6fa19a80963b43f5254d881bd5b60ba1d1d1346e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ff4fd0352ecdc6fb8e2aa6fa19a80963b43f5254d881bd5b60ba1d1d1346e011->leave($__internal_ff4fd0352ecdc6fb8e2aa6fa19a80963b43f5254d881bd5b60ba1d1d1346e011_prof);

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
        return array (  99 => 49,  93 => 48,  78 => 39,  41 => 4,  35 => 3,  11 => 1,);
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
