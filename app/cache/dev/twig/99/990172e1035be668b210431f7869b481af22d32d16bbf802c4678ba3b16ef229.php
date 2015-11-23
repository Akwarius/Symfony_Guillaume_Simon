<?php

/* lesson/create.html.twig */
class __TwigTemplate_186e45c33e6e4205cd23957539c627279b02d6c376f961cbdff7b44e63c71f4d extends Twig_Template
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
        $__internal_dbcd8734680c4f2e6d706ef7077b2d5f621e51305efc2330fde9417676addea9 = $this->env->getExtension("native_profiler");
        $__internal_dbcd8734680c4f2e6d706ef7077b2d5f621e51305efc2330fde9417676addea9->enter($__internal_dbcd8734680c4f2e6d706ef7077b2d5f621e51305efc2330fde9417676addea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbcd8734680c4f2e6d706ef7077b2d5f621e51305efc2330fde9417676addea9->leave($__internal_dbcd8734680c4f2e6d706ef7077b2d5f621e51305efc2330fde9417676addea9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0539a16521b62371bc26aea7444c2aa6401c5a73c5700c416e6bed649133a31 = $this->env->getExtension("native_profiler");
        $__internal_c0539a16521b62371bc26aea7444c2aa6401c5a73c5700c416e6bed649133a31->enter($__internal_c0539a16521b62371bc26aea7444c2aa6401c5a73c5700c416e6bed649133a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <a href=\"../\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_c0539a16521b62371bc26aea7444c2aa6401c5a73c5700c416e6bed649133a31->leave($__internal_c0539a16521b62371bc26aea7444c2aa6401c5a73c5700c416e6bed649133a31_prof);

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
