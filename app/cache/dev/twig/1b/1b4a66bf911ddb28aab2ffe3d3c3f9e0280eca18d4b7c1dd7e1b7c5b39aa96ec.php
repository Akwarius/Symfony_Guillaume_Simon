<?php

/* security/login.html.twig */
class __TwigTemplate_4fa6c238f683e2b28e316df6de30c93ca0232ce2b33416792ed749c7d7f88aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_700803a1ecaf3e40c540a9ed68026c7875f23dc7e4e121d0d980523f0749f2b3 = $this->env->getExtension("native_profiler");
        $__internal_700803a1ecaf3e40c540a9ed68026c7875f23dc7e4e121d0d980523f0749f2b3->enter($__internal_700803a1ecaf3e40c540a9ed68026c7875f23dc7e4e121d0d980523f0749f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700803a1ecaf3e40c540a9ed68026c7875f23dc7e4e121d0d980523f0749f2b3->leave($__internal_700803a1ecaf3e40c540a9ed68026c7875f23dc7e4e121d0d980523f0749f2b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15a13ce9b396ac3093c1831d3d4c1754534b62e5a0ce844752f03114a346fbb = $this->env->getExtension("native_profiler");
        $__internal_d15a13ce9b396ac3093c1831d3d4c1754534b62e5a0ce844752f03114a346fbb->enter($__internal_d15a13ce9b396ac3093c1831d3d4c1754534b62e5a0ce844752f03114a346fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 23
        echo "
    <button type=\"submit\">login</button>
</form>

    <a href=\"./\">
        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
    </a>

";
        
        $__internal_d15a13ce9b396ac3093c1831d3d4c1754534b62e5a0ce844752f03114a346fbb->leave($__internal_d15a13ce9b396ac3093c1831d3d4c1754534b62e5a0ce844752f03114a346fbb_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  59 => 13,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
/* */
/*     <a href="./">*/
/*         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*     </a>*/
/* */
/* {% endblock %}*/
