<?php

/* registration/register.html.twig */
class __TwigTemplate_02c205e40fef59908a119cdbc9d0890969477fcc449fd3c0e87c6ee969c05ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e2a14968ab87a82bdf8855c960bb9e8cf4837204a3abc7fca021fdb62a0a86c = $this->env->getExtension("native_profiler");
        $__internal_7e2a14968ab87a82bdf8855c960bb9e8cf4837204a3abc7fca021fdb62a0a86c->enter($__internal_7e2a14968ab87a82bdf8855c960bb9e8cf4837204a3abc7fca021fdb62a0a86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2a14968ab87a82bdf8855c960bb9e8cf4837204a3abc7fca021fdb62a0a86c->leave($__internal_7e2a14968ab87a82bdf8855c960bb9e8cf4837204a3abc7fca021fdb62a0a86c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca5977718e2749a4604f50cbed69f4a5f8b82401b3cd92537eb1dfdce399c3d0 = $this->env->getExtension("native_profiler");
        $__internal_ca5977718e2749a4604f50cbed69f4a5f8b82401b3cd92537eb1dfdce399c3d0->enter($__internal_ca5977718e2749a4604f50cbed69f4a5f8b82401b3cd92537eb1dfdce399c3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"./\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_ca5977718e2749a4604f50cbed69f4a5f8b82401b3cd92537eb1dfdce399c3d0->leave($__internal_ca5977718e2749a4604f50cbed69f4a5f8b82401b3cd92537eb1dfdce399c3d0_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.plainPassword.first) }}*/
/*         {{ form_row(form.plainPassword.second) }}*/
/* */
/*         <button type="submit">Register!</button>*/
/*     {{ form_end(form) }}*/
/* */
/*     <a href="./">*/
/*         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*     </a>*/
/* {% endblock %}*/
