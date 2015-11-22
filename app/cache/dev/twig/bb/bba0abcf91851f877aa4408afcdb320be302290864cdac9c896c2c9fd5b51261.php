<?php

/* grade/create.html.twig */
class __TwigTemplate_dbfd6af28538f8ddc5c01f4dbd56472b7df2fbc0c70175516ea266da9d4f9d06 extends Twig_Template
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
        $__internal_b5c53d6d3cd1c2cc7874a8281e9f50099fbb564e6376411501b3d6e20363cb56 = $this->env->getExtension("native_profiler");
        $__internal_b5c53d6d3cd1c2cc7874a8281e9f50099fbb564e6376411501b3d6e20363cb56->enter($__internal_b5c53d6d3cd1c2cc7874a8281e9f50099fbb564e6376411501b3d6e20363cb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c53d6d3cd1c2cc7874a8281e9f50099fbb564e6376411501b3d6e20363cb56->leave($__internal_b5c53d6d3cd1c2cc7874a8281e9f50099fbb564e6376411501b3d6e20363cb56_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f77777d42415a6fb5a1f984412a179dd13ec764201644f85c4fc02666b39013 = $this->env->getExtension("native_profiler");
        $__internal_6f77777d42415a6fb5a1f984412a179dd13ec764201644f85c4fc02666b39013->enter($__internal_6f77777d42415a6fb5a1f984412a179dd13ec764201644f85c4fc02666b39013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <a href=\"../\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_6f77777d42415a6fb5a1f984412a179dd13ec764201644f85c4fc02666b39013->leave($__internal_6f77777d42415a6fb5a1f984412a179dd13ec764201644f85c4fc02666b39013_prof);

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
