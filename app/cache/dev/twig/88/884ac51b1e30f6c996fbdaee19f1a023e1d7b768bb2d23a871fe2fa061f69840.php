<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dc926b4bad22e43818af42b6b378d82c9c375e3c64c0b79503ae36bf377ec867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf1b4a21cc939498740e57f9f0a5b043b27209c71e4cc0be4c2060e8eacc75e0 = $this->env->getExtension("native_profiler");
        $__internal_bf1b4a21cc939498740e57f9f0a5b043b27209c71e4cc0be4c2060e8eacc75e0->enter($__internal_bf1b4a21cc939498740e57f9f0a5b043b27209c71e4cc0be4c2060e8eacc75e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1b4a21cc939498740e57f9f0a5b043b27209c71e4cc0be4c2060e8eacc75e0->leave($__internal_bf1b4a21cc939498740e57f9f0a5b043b27209c71e4cc0be4c2060e8eacc75e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f3c22af3807d0e4ceb54eac5109ab1666d775b54329d19c13b8570efc1d93c1 = $this->env->getExtension("native_profiler");
        $__internal_3f3c22af3807d0e4ceb54eac5109ab1666d775b54329d19c13b8570efc1d93c1->enter($__internal_3f3c22af3807d0e4ceb54eac5109ab1666d775b54329d19c13b8570efc1d93c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f3c22af3807d0e4ceb54eac5109ab1666d775b54329d19c13b8570efc1d93c1->leave($__internal_3f3c22af3807d0e4ceb54eac5109ab1666d775b54329d19c13b8570efc1d93c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c66b5e1cd748130942b33e621b79297f30ad61d1db02c757af3d6c8956a59027 = $this->env->getExtension("native_profiler");
        $__internal_c66b5e1cd748130942b33e621b79297f30ad61d1db02c757af3d6c8956a59027->enter($__internal_c66b5e1cd748130942b33e621b79297f30ad61d1db02c757af3d6c8956a59027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c66b5e1cd748130942b33e621b79297f30ad61d1db02c757af3d6c8956a59027->leave($__internal_c66b5e1cd748130942b33e621b79297f30ad61d1db02c757af3d6c8956a59027_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e15c0779d693d1cada5ce11a01c42ac178d4eb984cd743d9cc335c5a7c2270f = $this->env->getExtension("native_profiler");
        $__internal_4e15c0779d693d1cada5ce11a01c42ac178d4eb984cd743d9cc335c5a7c2270f->enter($__internal_4e15c0779d693d1cada5ce11a01c42ac178d4eb984cd743d9cc335c5a7c2270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e15c0779d693d1cada5ce11a01c42ac178d4eb984cd743d9cc335c5a7c2270f->leave($__internal_4e15c0779d693d1cada5ce11a01c42ac178d4eb984cd743d9cc335c5a7c2270f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
