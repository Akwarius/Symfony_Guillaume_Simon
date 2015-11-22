<?php

/* grade/grades.html.twig */
class __TwigTemplate_0445ae67e2c7da567bb0523b5ca3d14fd28791b0dd588d548a3aaa51f4b09b36 extends Twig_Template
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
        $__internal_ed58bc002c08ef782d14cb77255a9f488ae790a3037f58b3cf70737f182469ea = $this->env->getExtension("native_profiler");
        $__internal_ed58bc002c08ef782d14cb77255a9f488ae790a3037f58b3cf70737f182469ea->enter($__internal_ed58bc002c08ef782d14cb77255a9f488ae790a3037f58b3cf70737f182469ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/grades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed58bc002c08ef782d14cb77255a9f488ae790a3037f58b3cf70737f182469ea->leave($__internal_ed58bc002c08ef782d14cb77255a9f488ae790a3037f58b3cf70737f182469ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25612fe612d5f953317e861601abc1035377e42dfefc2d555079350c288f4c33 = $this->env->getExtension("native_profiler");
        $__internal_25612fe612d5f953317e861601abc1035377e42dfefc2d555079350c288f4c33->enter($__internal_25612fe612d5f953317e861601abc1035377e42dfefc2d555079350c288f4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25612fe612d5f953317e861601abc1035377e42dfefc2d555079350c288f4c33->leave($__internal_25612fe612d5f953317e861601abc1035377e42dfefc2d555079350c288f4c33_prof);

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
