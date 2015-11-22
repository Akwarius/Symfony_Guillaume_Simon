<?php

/* lesson/create.html.twig */
class __TwigTemplate_daab1b31d652f003cbb44c9adba5ab1931356aa8c7f810da88aab96468bac23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lesson/create.html.twig", 1);
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
        $__internal_1bb2a76b6de5abd1a47ef11eddefc857867a85b06e0ff9f380dbd32dd3300629 = $this->env->getExtension("native_profiler");
        $__internal_1bb2a76b6de5abd1a47ef11eddefc857867a85b06e0ff9f380dbd32dd3300629->enter($__internal_1bb2a76b6de5abd1a47ef11eddefc857867a85b06e0ff9f380dbd32dd3300629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb2a76b6de5abd1a47ef11eddefc857867a85b06e0ff9f380dbd32dd3300629->leave($__internal_1bb2a76b6de5abd1a47ef11eddefc857867a85b06e0ff9f380dbd32dd3300629_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_18d9c1077d1d78c36989d9ea77392b6ec138f3cca8e2f4674008addb04d4e178 = $this->env->getExtension("native_profiler");
        $__internal_18d9c1077d1d78c36989d9ea77392b6ec138f3cca8e2f4674008addb04d4e178->enter($__internal_18d9c1077d1d78c36989d9ea77392b6ec138f3cca8e2f4674008addb04d4e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <a href=\"../\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_18d9c1077d1d78c36989d9ea77392b6ec138f3cca8e2f4674008addb04d4e178->leave($__internal_18d9c1077d1d78c36989d9ea77392b6ec138f3cca8e2f4674008addb04d4e178_prof);

    }

    public function getTemplateName()
    {
        return "lesson/create.html.twig";
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
