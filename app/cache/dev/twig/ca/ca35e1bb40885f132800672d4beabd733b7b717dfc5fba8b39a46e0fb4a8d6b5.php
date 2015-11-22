<?php

/* base.html.twig */
class __TwigTemplate_0583fe7623a15c077a5a6095082be0d1f70956d235a5e14f55b2b997a4e8faba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593d8fe176505459e8df73cf75a8699bc7bda9a47228cceb753e064df2a45c4f = $this->env->getExtension("native_profiler");
        $__internal_593d8fe176505459e8df73cf75a8699bc7bda9a47228cceb753e064df2a45c4f->enter($__internal_593d8fe176505459e8df73cf75a8699bc7bda9a47228cceb753e064df2a45c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_593d8fe176505459e8df73cf75a8699bc7bda9a47228cceb753e064df2a45c4f->leave($__internal_593d8fe176505459e8df73cf75a8699bc7bda9a47228cceb753e064df2a45c4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4819c3d52deedee753208ba61640913a3e6a003307fbd58c055da2276134aa54 = $this->env->getExtension("native_profiler");
        $__internal_4819c3d52deedee753208ba61640913a3e6a003307fbd58c055da2276134aa54->enter($__internal_4819c3d52deedee753208ba61640913a3e6a003307fbd58c055da2276134aa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4819c3d52deedee753208ba61640913a3e6a003307fbd58c055da2276134aa54->leave($__internal_4819c3d52deedee753208ba61640913a3e6a003307fbd58c055da2276134aa54_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0acdd768ceeed41e5d361dda20d0fff46680eb4e010af1a1cd99f387d2d6adac = $this->env->getExtension("native_profiler");
        $__internal_0acdd768ceeed41e5d361dda20d0fff46680eb4e010af1a1cd99f387d2d6adac->enter($__internal_0acdd768ceeed41e5d361dda20d0fff46680eb4e010af1a1cd99f387d2d6adac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_0acdd768ceeed41e5d361dda20d0fff46680eb4e010af1a1cd99f387d2d6adac->leave($__internal_0acdd768ceeed41e5d361dda20d0fff46680eb4e010af1a1cd99f387d2d6adac_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6f74ed260217077e2f510c8d3e9774f4454956ebaa731e00e82e8250025083 = $this->env->getExtension("native_profiler");
        $__internal_fb6f74ed260217077e2f510c8d3e9774f4454956ebaa731e00e82e8250025083->enter($__internal_fb6f74ed260217077e2f510c8d3e9774f4454956ebaa731e00e82e8250025083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb6f74ed260217077e2f510c8d3e9774f4454956ebaa731e00e82e8250025083->leave($__internal_fb6f74ed260217077e2f510c8d3e9774f4454956ebaa731e00e82e8250025083_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1763497fb19a619fa455496a7b3a2f1b3f20914fa38604e3cf7698fdbfb678bd = $this->env->getExtension("native_profiler");
        $__internal_1763497fb19a619fa455496a7b3a2f1b3f20914fa38604e3cf7698fdbfb678bd->enter($__internal_1763497fb19a619fa455496a7b3a2f1b3f20914fa38604e3cf7698fdbfb678bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_1763497fb19a619fa455496a7b3a2f1b3f20914fa38604e3cf7698fdbfb678bd->leave($__internal_1763497fb19a619fa455496a7b3a2f1b3f20914fa38604e3cf7698fdbfb678bd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}"/>*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
