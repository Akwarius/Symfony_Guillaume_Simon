<?php

/* lesson/lessons.html.twig */
class __TwigTemplate_50d503a7fe0f679b465d76df3c5505bc9fdf20a240c3b520c41505fbf41509ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lesson/lessons.html.twig", 1);
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
        $__internal_0c1279a43d67850fc40b49a1575cf35d318197c443099088cb0fd2eb1ef32a7c = $this->env->getExtension("native_profiler");
        $__internal_0c1279a43d67850fc40b49a1575cf35d318197c443099088cb0fd2eb1ef32a7c->enter($__internal_0c1279a43d67850fc40b49a1575cf35d318197c443099088cb0fd2eb1ef32a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/lessons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1279a43d67850fc40b49a1575cf35d318197c443099088cb0fd2eb1ef32a7c->leave($__internal_0c1279a43d67850fc40b49a1575cf35d318197c443099088cb0fd2eb1ef32a7c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a9254d24adfc6ee9a58a9fc48c01445907a8e922010d164b1ef6b5e49161b54 = $this->env->getExtension("native_profiler");
        $__internal_5a9254d24adfc6ee9a58a9fc48c01445907a8e922010d164b1ef6b5e49161b54->enter($__internal_5a9254d24adfc6ee9a58a9fc48c01445907a8e922010d164b1ef6b5e49161b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 5
            echo "            <article>
                <h1><a href=\"./lesson/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "id", array()), "html", null, true);
            echo "/edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
            echo "</a></h1>
                <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "summary", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "content", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lesson"], "writer", array()), "username", array()), "html", null, true);
            echo "</p>
            </article>
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </section>
    <a href=\"./\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>
";
        
        $__internal_5a9254d24adfc6ee9a58a9fc48c01445907a8e922010d164b1ef6b5e49161b54->leave($__internal_5a9254d24adfc6ee9a58a9fc48c01445907a8e922010d164b1ef6b5e49161b54_prof);

    }

    public function getTemplateName()
    {
        return "lesson/lessons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  64 => 9,  60 => 8,  56 => 7,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <section>*/
/*         {% for lesson in lessons %}*/
/*             <article>*/
/*                 <h1><a href="./lesson/{{ lesson.id }}/edit">{{ lesson.title }}</a></h1>*/
/*                 <p>{{ lesson.summary }}</p>*/
/*                 <p>{{ lesson.content }}</p>*/
/*                 <p>{{ lesson.writer.username }}</p>*/
/*             </article>*/
/*             <hr>*/
/*         {% endfor %}*/
/*     </section>*/
/*     <a href="./">*/
/*         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*     </a>*/
/* {% endblock %}*/
