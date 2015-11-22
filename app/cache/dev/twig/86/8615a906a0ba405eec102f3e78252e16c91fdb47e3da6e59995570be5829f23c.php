<?php

/* grade/grades.html.twig */
class __TwigTemplate_5e9eca64adfe52e97347004ae22f31c5c84b46664fdaece0045b74c84d3789c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/grades.html.twig", 1);
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
        $__internal_87e0199d1d0432dfd301c82274b98f44fac1ee682326d1cc50f9d3713e14b0cd = $this->env->getExtension("native_profiler");
        $__internal_87e0199d1d0432dfd301c82274b98f44fac1ee682326d1cc50f9d3713e14b0cd->enter($__internal_87e0199d1d0432dfd301c82274b98f44fac1ee682326d1cc50f9d3713e14b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/grades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e0199d1d0432dfd301c82274b98f44fac1ee682326d1cc50f9d3713e14b0cd->leave($__internal_87e0199d1d0432dfd301c82274b98f44fac1ee682326d1cc50f9d3713e14b0cd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4bc48d7950743ff644486b44c1487ed58d6deb6d58743b7d211692192a6adbf = $this->env->getExtension("native_profiler");
        $__internal_f4bc48d7950743ff644486b44c1487ed58d6deb6d58743b7d211692192a6adbf->enter($__internal_f4bc48d7950743ff644486b44c1487ed58d6deb6d58743b7d211692192a6adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 5
            echo "            <article>
                <h1><a href=\"./grade/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "id", array()), "html", null, true);
            echo "/edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "lesson", array()), "title", array()), "html", null, true);
            echo "</a></h1>
                <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "user", array()), "username", array()), "html", null, true);
            echo " got ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "comment", array()), "html", null, true);
            echo "</p>

            </article>
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </section>
    <a href=\"./\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_f4bc48d7950743ff644486b44c1487ed58d6deb6d58743b7d211692192a6adbf->leave($__internal_f4bc48d7950743ff644486b44c1487ed58d6deb6d58743b7d211692192a6adbf_prof);

    }

    public function getTemplateName()
    {
        return "grade/grades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  62 => 8,  56 => 7,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <section>*/
/*         {% for grade in grades %}*/
/*             <article>*/
/*                 <h1><a href="./grade/{{ grade.id }}/edit">{{ grade.lesson.title }}</a></h1>*/
/*                 <p>{{ grade.user.username }} got {{ grade.grade }}</p>*/
/*                 <p>{{ grade.comment }}</p>*/
/* */
/*             </article>*/
/*             <hr>*/
/*         {% endfor %}*/
/*     </section>*/
/*     <a href="./">*/
/*         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*     </a>*/
/* {% endblock %}*/
