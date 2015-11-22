<?php

/* grade/create.html.twig */
class __TwigTemplate_8983f7cb867064f0d023a42e3278b04e5f17d1b3cfcb5ffd2ac88c23d8ba2aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/create.html.twig", 1);
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
        $__internal_33b31a9360590bc95c85d812f37990ce53743a16e529c2523b2a70321b7e4f6b = $this->env->getExtension("native_profiler");
        $__internal_33b31a9360590bc95c85d812f37990ce53743a16e529c2523b2a70321b7e4f6b->enter($__internal_33b31a9360590bc95c85d812f37990ce53743a16e529c2523b2a70321b7e4f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b31a9360590bc95c85d812f37990ce53743a16e529c2523b2a70321b7e4f6b->leave($__internal_33b31a9360590bc95c85d812f37990ce53743a16e529c2523b2a70321b7e4f6b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8387dd62e9ee716a3e46f976e22c3dd75d01d85dfeef0663de653933c290e509 = $this->env->getExtension("native_profiler");
        $__internal_8387dd62e9ee716a3e46f976e22c3dd75d01d85dfeef0663de653933c290e509->enter($__internal_8387dd62e9ee716a3e46f976e22c3dd75d01d85dfeef0663de653933c290e509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <a href=\"../\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_8387dd62e9ee716a3e46f976e22c3dd75d01d85dfeef0663de653933c290e509->leave($__internal_8387dd62e9ee716a3e46f976e22c3dd75d01d85dfeef0663de653933c290e509_prof);

    }

    public function getTemplateName()
    {
        return "grade/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {{ form(form) }}*/
/* */
/*     <a href="../">*/
/*         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*     </a>*/
/* {% endblock %}*/
