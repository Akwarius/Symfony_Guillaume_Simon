<?php

/* lesson/lessons.html.twig */
class __TwigTemplate_a1288b8c3529bde0f4f8f0fd18eb0c6e38e643060f88e5e7697e59e90660fb79 extends Twig_Template
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
        $__internal_2565955d479bb19e3b372ea7bed12c743ede97664ec2789d172bfaaf34abb5c2 = $this->env->getExtension("native_profiler");
        $__internal_2565955d479bb19e3b372ea7bed12c743ede97664ec2789d172bfaaf34abb5c2->enter($__internal_2565955d479bb19e3b372ea7bed12c743ede97664ec2789d172bfaaf34abb5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/lessons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2565955d479bb19e3b372ea7bed12c743ede97664ec2789d172bfaaf34abb5c2->leave($__internal_2565955d479bb19e3b372ea7bed12c743ede97664ec2789d172bfaaf34abb5c2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_87818577f250da9bd7a254101669d817e2a1ad3d36c82aae92140b35cdb4508a = $this->env->getExtension("native_profiler");
        $__internal_87818577f250da9bd7a254101669d817e2a1ad3d36c82aae92140b35cdb4508a->enter($__internal_87818577f250da9bd7a254101669d817e2a1ad3d36c82aae92140b35cdb4508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87818577f250da9bd7a254101669d817e2a1ad3d36c82aae92140b35cdb4508a->leave($__internal_87818577f250da9bd7a254101669d817e2a1ad3d36c82aae92140b35cdb4508a_prof);

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
